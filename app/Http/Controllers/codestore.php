namespace App\Http\Controllers;

use App\Models\Semester;
use App\Notifications\AdminDeadlineNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class codestore extends Controller
{
    /**
     * Display all semesters for a specific scholarship.
     */
    public function index($scholarshipId)
    {
        $semesters = Semester::where('scholarship_id', $scholarshipId)->orderBy('semester_no')->get();
        return view('semesters.index', compact('semesters', 'scholarshipId'));
    }

    /**
     * Show the form for creating a new semester.
     */
    public function create($scholarshipId)
    {
        return view('semesters.create', compact('scholarshipId'));
    }

    /**
     * Store a new semester in the database.
     */
    public function store(Request $request, $scholarshipId)
    {
        $request->validate([
            'semester_no' => 'required|integer',
            'semester_name' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);

        Semester::create([
            'scholarship_id' => $scholarshipId,
            'semester_no' => $request->semester_no,
            'semester_name' => $request->semester_name,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'status' => 'active',
        ]);

        return redirect()->route('semesters.index', $scholarshipId)
                         ->with('success', 'Semester created successfully.');
    }

    /**
     * Upload the result for a semester.
     */
    public function uploadResult(Request $request, $semesterId)
    {
        $semester = Semester::find($semesterId);

        if (!$semester) {
            return redirect()->back()->with('error', 'Semester not found.');
        }

        $request->validate([
            'result_file' => 'required|file|mimes:pdf,jpg,png|max:2048',
        ]);

        $file = $request->file('result_file');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads/results'), $fileName);

        $semester->update([
            'result' => $fileName,
            'status' => 'completed',
        ]);

        return redirect()->back()->with('success', 'Result uploaded successfully.');
    }

    /**
     * Notify admin about pending results close to deadlines.
     */
    public function checkMissingResults()
    {
        $semesters = Semester::whereNull('result')
            ->where('status', 'active')
            ->whereDate('end_date', '<=', now()->addDays(10))
            ->whereDate('end_date', '>=', now())
            ->get();

        foreach ($semesters as $semester) {
            $admin = User::where('role', 'admin')->first();
            Notification::send($admin, new AdminDeadlineNotification($semester));
        }

        return "Notifications sent for pending results.";
    }

    /**
     * Mark a semester as failed if the deadline has passed without a result.
     */
    public function updateStatus()
    {
        $semesters = Semester::whereNull('result')
            ->where('status', 'active')
            ->whereDate('end_date', '<', now())
            ->get();

        foreach ($semesters as $semester) {
            $semester->update(['status' => 'failed']);
        }

        return "Statuses updated for expired semesters.";
    }

    /**
     * Delete a semester.
     */
    public function destroy($semesterId)
    {
        $semester = Semester::find($semesterId);

        if (!$semester) {
            return redirect()->back()->with('error', 'Semester not found.');
        }

        $semester->delete();

        return redirect()->back()->with('success', 'Semester deleted successfully.');
    }
}
