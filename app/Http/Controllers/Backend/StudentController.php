<?php

namespace App\Http\Controllers\Backend;

use App\User;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\StudentEnrollment;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    
    public function index()
    {
        $courses = Course::where('course_status','Active')->get();
        $users = User::get();
        $students = Student::with('enrollments.course','courseofstudents')->get();
        return view('backend.pages.students.student', ['courses' => $courses, 'students' => $students,'users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
        $validator = Validator::make($request->all(), [
            'studentsName' => 'required|string|min:2|max:100',
            'course_id' => 'required',
            'user_id' => 'required',
            'address' => 'required',
            'city' => 'required|string|max:255',
            'division' => 'required|string|max:255',
            'country' => 'required|string|max:255'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->all(),
            ]);
        }
      
        $student = Student::create([
            'studentsName' => $request->studentsName,
            'course_id' => $request->course_id,
            'user_id' => $request->user_id,
            'address' => $request->address,
            'city' => $request->city,
            'division' => $request->division,
            'country' => $request->country,
            'status' => 'Active',
            'payment_status' => 'Due'
        ]);

        if ($student) {
            return response()->json(['status' => 'success', 'message' => 'Created Successfully']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Something Went Wrong']);
        }
    }

    public function viewStudentDetails($id)
    {
        $editStudents = Student::find($id);
        $courses = Course::oldest('id')->get();
        return view('backend.pages.students.details', ['editStudents' => $editStudents, 'courses' => $courses]);
    }

    public function studentCourse($id)
    {
      
        $editStudents = Student::find($id);
        $course_all = Course::where('course_status','Active')->get();
        $courses = Course::whereHas('studentEnrollments', function ($query) use ($id) {
            $query->where('student_id', $id);
        })->with('studentEnrollments.student')->get();
        return view('backend.pages.students.course', ['editStudents' => $editStudents, 'courses' => $courses,'course_all'=>$course_all]);
    }
    public function studentCourseSave(Request $request)
    {
      
        if($request->course_id){
            foreach($request->course_id as $courseID){
                StudentEnrollment::create([
                    'course_id'=>$courseID,
                    'student_id'=>$request->student_id
                ]);
            }
        }else{
            return redirect()->back(); 
        }
       
        return redirect()->back()->with('success','Course Enrolled');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function studentStatusUpdate($id,$status)
    {
        $students = Student::findOrFail($id);
        $students->status = $status;
        $students->save();
        return redirect()->back()->with('success','Status Updated !'); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function UpdateStudentDetails(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'studentsName' => 'string|min:2|max:100',
            'course_id' => 'required|integer',
            'user_id' => 'required|integer',
            'address' => 'required|string|min:2|max:100',
            'address' => 'string',
            'city' => 'string',
            'division' => 'string',
            'country' => 'string',
        ]);


        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->all(),
            ]);
        }
        
        $editStudents = Student::find($id);
       
       
        $editStudents->update([
            'studentsName' => $request->studentsName,
            'course_id' => $request->course_id,
            'user_id' => $request->user_id,
            'address' => $request->address,
            'city' => $request->city,
            'division' => $request->division,
            'country' => $request->country,
            'status' => 'Active',
            'payment_status' => 'Due'
        ]);
        return redirect()->back()->with('success', 'Updated Successfully');
    }
    public function deleteStudents($id){
        $students = Student::find($id);
       
        return back()->with('success','Student Deleted Successfully!');

    }
    /**
     * Remove the specified resource from storage.
     */
 

}