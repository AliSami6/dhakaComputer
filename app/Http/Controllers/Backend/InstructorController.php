<?php

namespace App\Http\Controllers\Backend;

use App\Models\Course;
use App\Models\Instructor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\Instructor\CreateRequest;
use App\Models\InstructorCourse;

class InstructorController extends Controller
{
    public function index()
    {
        $instructors = Instructor::with('instructorCourses.course')->get();
        return view('backend.pages.instructors.instructor-lists', ['instructors' => $instructors]);
    }
    public function InstructorOverview()
    {
        return view('backend.pages.instructors.dashborad');
    }
    public function instructorStatus($id, $status)
    {
        $instructor = Instructor::findOrFail($id);
        $instructor->status = $status;
        $instructor->save();
        return redirect()->back()->with('success', 'Status Updated !');
    }
    public function DetailsForInstructor($id)
    {
        $detailsInstructor = Instructor::with('designations', 'professions', 'instructorCourses.course')->where('id', $id)->first();
        return view('backend.pages.instructors.instructor-details', ['detailsInstructor' => $detailsInstructor]);
    }
    public function PaymentForInstructor()
    {
        return view('backend.pages.instructors.instructor-payments');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string',
            'address_one' => 'required|string|max:255',
            'address_two' => 'required|string|max:255',
            'state' => 'required|string|max:100',
            'country' => 'required|string|max:100',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:1024',
            'about' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->all(),
            ]);
        }
        if (!empty($request->file('image'))) {
            $image = $this->image_upload($request->file('image'), 'uploaded_files/instructor/', 90, 80);
        } else {
            return response()->json(['error' => 'Image is required']);
        }
        $ins = Instructor::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address_one' => $request->address_one,
            'address_two' => $request->address_two,
            'state' => $request->state,
            'country' => $request->country,
            'nationality' => $request->nationality,
            'job_title' => $request->job_title,
            'skill_level' => $request->skill_level,
            'language' => $request->language,
            'dob' => $request->dob,
            'join_date' => $request->join_date,
            'image' => $image,
            'about' => $request->about,
        ]);

        if ($ins) {
            return response()->json(['status' => 'success', 'message' => 'Created Successfully'], 200);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Something went wrong'], 500);
        }
    }

    /**
     * Display the specified resource.
     */

    public function edit(Request $request)
    {
        $id = $request->id;
        $EditInstructors = Instructor::find($id);
        return response()->json([
            'EditInstructors' => $EditInstructors,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'string|max:255',
            'last_name' => 'string|max:255',
            'email' => 'string|email|max:255',
            'phone' => 'numeric|digits_between:1,15',
            'address_one' => 'string|max:255',
            'address_two' => 'string|max:255',
            'state' => 'string|max:100',
            'country' => 'string|max:100',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->all(),
            ]);
        }
        $id = $request->instructor_id;

        $updateInstructors = Instructor::whereid($id)->first();
        if ($request->hasFile('image')) {
            $image = $this->image_updated($request->file('image'), 'uploaded_files/Instructor/', $updateInstructors->image);
        } else {
            $image = $updateInstructors->image;
        }

        $updateInstructors->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address_one' => $request->address_one,
            'address_two' => $request->address_two,
            'state' => $request->state,
            'country' => $request->country,
            'nationality' => $request->nationality,
            'job_title' => $request->job_title,
            'skill_level' => $request->skill_level,
            'language' => $request->language,
            'dob' => $request->dob,
            'join_date' => $request->join_date,
            'image' => $image,
            'about' => $request->about,
        ]);

        if ($updateInstructors) {
            return response()->json(['status' => 'success', 'message' => 'Updated Successfully'], 200);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Something went wrong'], 500);
        }
    }
    public function DetailsForInstructorForm($id)
    {
        $instructors = Instructor::where('id', $id)->first();
        $course = Course::where('course_status', 'Active')->get();
        return view('backend.pages.instructors.instructor-form', ['instructors' => $instructors, 'course' => $course]);
    }

    public function DetailsForInstructorSave(Request $request)
    {
        // Validation rules and custom error messages
        $request->validate(
            [
                'instructor_id' => 'required|integer',
                'course_id' => 'required|array',
                'professions' => 'required|array',
                'designation' => 'required|array',
            ],
            [
                'instructor_id.required' => 'Instructor id is required',
                'instructor_id.integer' => 'Instructor id must be an integer',
                'course_id.required' => 'Course id is required',
                'course_id.array' => 'Course id must be an array',
                'professions.required' => 'Professions are required',
                'professions.array' => 'Professions must be an array',
                'designation.required' => 'Designation is required',
                'designation.array' => 'Designation must be an array',
            ],
        );

        try {
            // Wrap database operations in a transaction
            DB::transaction(function () use ($request) {
                $instructor_id = $request->instructor_id;
                $professions = $request->professions;
                $designations = $request->designation;
                $course_ids = $request->course_id;

                // Save professions
                foreach ($professions as $profession) {
                    DB::table('instructor_professions')->insert([
                        'instructor_id' => $instructor_id,
                        'professions' => $profession,
                    ]);
                }

                // Save designations
                foreach ($designations as $designation) {
                    DB::table('instructor_designations')->insert([
                        'instructor_id' => $instructor_id,
                        'designation' => $designation,
                    ]);
                }

                // Save courses
                foreach ($course_ids as $course_id) {
                    DB::table('instructor_courses')->insert([
                        'instructor_id' => $instructor_id,
                        'course_id' => $course_id,
                    ]);
                }
            });

            // Redirect back with success message
            return redirect()->back()->with('success', 'Successfully Created');
        } catch (\Exception $e) {
            // Handle exception and redirect back with error message
            return redirect()->back()->with('error', 'An error occurred while saving the data. Please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $instructor = Instructor::findOrFail($id);
        $this->imageDelete('uploaded_files/Instructor/' . $instructor->image);
        $instructor->delete();
        return back()->with('success', 'Instructor has been deleted!');
    }
}
