<?php

namespace App\Http\Controllers\Backend;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\StudentEnrollment;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    
    public function index()
    {
        $courses = Course::where('course_status','Active')->get();
        $students = Student::with('enrollments.course','courseofstudents')->get();
        return view('backend.pages.students.student', ['courses' => $courses, 'students' => $students]);
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
            'firstName' => 'required|string|min:2|max:100',
            'lastName' => 'required|string|min:2|max:100',
            'course_id' => 'required',
            'email' => 'required|email|string',
            'phone_no' => 'required|string',
            'date_of_birth' => 'required|string',
            'address_one' => 'required',
            'address_two' => 'required',
            'state' => 'required|string',
            'nationality' => 'required|string',
            'country' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->all(),
            ]);
        }

        $student = Student::create([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'course_id' => $request->course_id,
            'email' => $request->email,
            'phone_no' => $request->phone_no,
            'date_of_birth' => $request->date_of_birth,
            'address_one' => $request->address_one,
            'address_two' => $request->address_two,
            'state' => $request->state,
            'nationality' => $request->nationality,
            'country' => $request->country,
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
            'firstName' => 'string|min:2|max:100',
            'lastName' => 'string|min:2|max:100',
            'course_id' => 'required',
            'email' => 'email|string',
            'phone_no' => 'numeric',
            'date_of_birth' => 'string',
            'state' => 'string',
            'nationality' => 'string',
            'country' => 'string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->all(),
            ]);
        }
        $editStudents = Student::find($id);
        $editStudents->update([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'course_id' => $request->course_id,
            'email' => $request->email,
            'phone_no' => $request->phone_no,
            'date_of_birth' => $request->date_of_birth,
            'address_one' => $request->address_one,
            'address_two' => $request->address_two,
            'state' => $request->state,
            'nationality' => $request->nationality,
            'country' => $request->country,
        ]);
        return redirect()->back()->with('success', 'Updated Successfully');
    }
    public function deleteStudents($id){
        $students = Student::find($id);
        if (!is_null($students)) {
          
            $this->imageDelete('uploaded_files/students/' . $students->image);
            $students->delete();
        }
        return back()->with('success','Student Deleted Successfully!');

    }
    /**
     * Remove the specified resource from storage.
     */
 

}