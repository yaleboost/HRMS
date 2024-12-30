<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;
use App\Models\scholarship;
use App\Models\semester;
class admincontroller extends Controller
{
   public function vieweremployee(){
        return view('admin.registeremployee');
    }
    public function registeremployee(Request $request){
        $data=new employee;
        $data->fname=$request->fname;
        $data->mname=$request->mname;
        $data->lname=$request->lname;
        $data->email=$request->email;
        $data->number=$request->number;
        $data->datebirth=$request->datebirth;
        $data->gender=$request->gender;
        $data->position=$request->position;
        $data->department=$request->department;
        $data->salary=$request->salary;
        $data->contactname=$request->contactname; 
        $data->contactphone=$request->contactphone; 
        $data->save(); 
        return redirect()->back()->with('message', 'Employee submitted successfully!');
    }
    public function allemployee()
{
    $employees = employee::all();
    return view('admin.employeedate', compact('employees'));
}
public function deleteemployee($id){
    $employees = employee::find($id);
    $employees->delete();
    return redirect()->back()->with('message', 'Employee deleted successfully!');
}
public function updateemployee($id){
    $employees = employee::find($id);
    return view('admin.updateemployee',compact('employees'));
}
public function updateemployeeconirm(Request $request, $id)
{
     $employee = employee::find($id);
    $employee->fname = $request->fname;
    $employee->mname = $request->mname;
    $employee->lname = $request->lname;
    $employee->email = $request->email;
    $employee->number = $request->number;
    $employee->datebirth = $request->datebirth;
    $employee->gender = $request->gender;
    $employee->position = $request->position;
    $employee->department = $request->department;
    $employee->salary = $request->salary;
    $employee->contactname = $request->contactname;
    $employee->contactphone = $request->contactphone;
    $employee->save(); 
    return redirect()->back()->with('message', 'Employee Updated successfully!');
}
public function viewescholarship(){//for view and pass data purpose
    $employees = Employee::all();  
    return view('admin.addscholarship',compact('employees'));
}
public function addscholarship(Request $request){//for registering purpose
    $data=new scholarship;
    $data->employee_id=$request->employee_id;
    $data->course_name=$request->course_name;
    $data->duration=$request->duration;
    $data->status=$request->status;
    $data->scholarship_type=$request->scholarship_type;
    $data->amount=$request->amount;
    $data->grant_date=$request->grant_date;
    $data->save();
   return redirect()->back()->with('message', 'Scholarship submitted successfully!');
}
public function viewscholarship(){//for feaching data to table
    $scholarship = scholarship::all();
    $employees = Employee::all();  
    return view('admin.viewscholarship', compact('scholarship', 'employees'));
}
public function deletescholarship($id){
    $scholarship = scholarship::find($id);
    $scholarship->delete();
    return redirect()->back()->with('message', 'scholarship deleted successfully!');
}
public function updatescholarship($id){//for passing one feached to to view
    $scholarship = Scholarship::find($id);
    return view('admin.updatesholarship',compact('scholarship'));
}
public function updatescholarshipconfirm(Request $request,$id){
    
    $data= scholarship::find($id);
    $data->employee_id=$request->employee_id;
    $data->course_name=$request->course_name;
    $data->duration=$request->duration;
    $data->status=$request->status;
    $data->scholarship_type=$request->scholarship_type;
    $data->amount=$request->amount;
    $data->grant_date=$request->grant_date;
    $data->save();
   return redirect()->back()->with('message', 'Scholarship Updated successfully!');
}
    public function viewesemester(){
        $employee = employee::all();  
        $scholarship= scholarship::all();
        return view('admin.addsemester',compact('employee','scholarship'));
    }
    public function addsemester(Request $request){
        $data=new semester;
        $data->semester_name=$request->semester_name;
        $data->semester_no=$request->semester_no;
        $data->employee_id=$request->employee_id;
        $data->start_date=$request->start_date;
        $data->end_date=$request->end_date;
        $data->scholarship_id=$request->scholarship_id;
        $data->status=$request->status;
        $data->result=$request->result;
        $data->save();
       return redirect()->back()->with('message', 'Semester submitted successfully!');
    }
public function viewssemester(){//for passing date to table
    $semester = semester::all();
    return view('admin.viewsemester', compact('semester'));
}
public function deletesemester($id){
    $semester = semester::find($id);
    $semester->delete();
    return redirect()->back()->with('message', 'semester deleted successfully!');
}
public function updatesemester($id){
    $semester = semester::find($id);
    return view('admin.updatesemester',compact('semester'));
}
public function updatesemesterconfirm(Request $request,$id){
    $data= semester::find($id);
    $data->semester_name=$request->semester_name;
    $data->semester_no=$request->semester_no;
    $data->start_date=$request->start_date;
    $data->end_date=$request->end_date;
    $data->scholarship_id=$request->scholarship_id;
    $data->status=$request->status;
   $data->result=$request->result;
    $data->save();
   return redirect()->back()->with('message', 'semester Updated successfully!');
}

public function checkMissingResults()
{
    updateStatus();
    // Fetch semesters with missing results and deadlines within the next 5 days
    $semesters = Semester::where('status', 'active')  // Only active semesters
        ->whereDate('end_date', '>=', now()->toDateString())   // Ensure the end date is today or in the future
        ->whereDate('end_date', '<=', now()->addDays(30)->toDateString()) // Ensure end date is within the next 5 days
        ->get();    

    // Loop through the semesters and set a "file status"
    foreach ($semesters as $semester) {
        // Check if the result is uploaded and set file status accordingly
        $semester->file_status = is_null($semester->result) ? 'Missing' : 'Submitted';
        
        // Calculate the absolute number of full days left (no decimals)
        $endDate = \Carbon\Carbon::parse($semester->end_date);
        $daysLeft = intval($endDate->diffInRealDays(now()));  // Convert to integer using intval
        $semester->days_left = abs($daysLeft);  // Ensure no negative days
        
        // If the result is already submitted, the file status will show as submitted
    }

    return view('admin.checkmissingresult', compact('semesters'));
}


public function updateStatus()
    {
        // Fetch semesters with missing results and deadline passed
        $semesters = Semester::whereNull('result')
            ->where('status', 'active')
            ->whereDate('end_date', '<', now())
            ->get();

        // Update the status of these semesters to 'expired'
        foreach ($semesters as $semester) {
            $semester->update(['status' => 'failed']);
        }

        return redirect()->route('admin.checkMissingResults')
            ->with('message', 'Expired semesters marked as expired.');
    }


    public function showFailedSemesters()
    {
        // Fetch semesters where status is 'failed'
        $failedSemesters = Semester::where('status', 'failed')->get();

        // Pass the data to the view
        return view('admin.failed-semesters', compact('failedSemesters'));
    }

    public function getFailedSemesters()
{
    // Get semesters with missing results (where 'result' is null)
    $failedSemesters = Semester::whereNull('result')
                                ->where('status', 'active')
                                ->get();
    return view('semester.failed', compact('failedSemesters'));
}

}


