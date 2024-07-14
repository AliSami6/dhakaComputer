<?php

namespace App\Http\Controllers\Backend;

use App\Models\Course;
use App\Models\Enroll;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\StudentEnrollment;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Enrollment\CreateRequest;

class EnrollmentController extends Controller
{
   
    public function allEnrollmentList()
    {
        $courses = Course::where('course_status', 'Active')->get();
        $enrollments = Enroll::with('studentEnrollment.student', 'studentEnrollment.course')->get();
        return view('backend.pages.enrollments.enrollments', ['courses' => $courses, 'enrollments' => $enrollments]);
    }
    public function studentEnrollment()
    {
        $courses = Course::where('course_status', 'Active')->get();
        $students = Student::where('status', 'Active')->get();
        return view('backend.pages.enrollments.student', ['courses' => $courses, 'students' => $students]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
        foreach ($request->course_id as $courseID) {
            $enrollmentID = StudentEnrollment::create([
                'student_id' => $request->student_id,
                'course_id' => $courseID,
            ]);
        }
        Enroll::create([
            'student_enrol_id' => $enrollmentID->id,
            'country' => $request->country,
            'state' => $request->state,
            'mobile_no' => $request->mobile_no,
            'email' => $request->email,
            'current_address' => $request->current_address,
            'studentID' => $request->studentID,
        ]);
        return redirect()->back()->with('success', 'Created Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function enrollStatusUpdate($id, $status)
    {
        $enroll = Enroll::findOrFail($id);
        $enroll->enroll_status = $status;
        $enroll->save();
        return redirect()->back()->with('success', 'Status Updated !');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $enroll = Enroll::findOrFail($id);
        $enroll->delete();
        StudentEnrollment::where('id',$enroll->student_enrol_id)->delete();
        return redirect()->back()->with('success', 'Data Deleted !');
    }
}
