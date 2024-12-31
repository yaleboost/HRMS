<?php

namespace App\Http\Controllers;
use illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\employee;
use App\Models\scholarship;
class employeecontroller extends Controller
{
    public function index(){
        return view('admin.user');
    }
    public function redirect()
    {
        $user=Auth::user();
        $employeeCount = Employee::count();
        $fullTimeCount = Employee::where('employee_type', 'fulltime')->count();
        $contractCount = Employee::where('employee_type', 'contract')->count();
        $individualCount = Employee::where('employee_type', 'freelance')->count();
        $scholarship = scholarship::count();
        if ($user && $user->usertype) {
            if ($user->usertype == 'admin') {
                return view('admin.admin',compact('employeeCount','fullTimeCount', 'contractCount', 'individualCount','scholarship'));
            }else {
                return view('admin.user');
            }
        }
        else{
            return view('admin.user');
        }
    }
}
