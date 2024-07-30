<?php

namespace App\Http\Controllers\Backend;

use App\Models\Course;
use App\Models\Lession;
use App\Models\Section;
use App\Models\Category;
use App\Models\CourseFaq;
use App\Models\CourseMeta;
use App\Models\CourseMedia;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\CourseOutcome;
use App\Models\CourseEligible;
use App\Models\CourseObjective;
use App\Models\CourseRequirements;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\Course\CreateRequest;

class CourseController extends Controller
{
    public function courseList()
    {
        $courses = Course::with(['categories', 'sections.lessons', 'studentEnrollments', 'instructors.instructor'])->get();
        return view('backend.pages.courses.course-list', ['courses' => $courses]);
    }
    public function courseAdd()
    {
        $course_categories = Category::get();
        return view('backend.pages.courses.create-course', ['course_categories' => $course_categories]);
    }
    public function courseEdit($id)
    {
        $course_categories = Category::get();
        $sections = Section::with('lessons')->where('course_id', $id)->get();

        $editCourses = Course::with('sections', 'sections.lessons')->where('id', $id)->first();

        $faqs = CourseFaq::where('course_id', $id)->get();
        $requirements = CourseRequirements::where('course_id', $id)->get();
        $outcomes = CourseOutcome::where('course_id', $id)->get();
        $objectives = CourseObjective::where('course_id', $id)->get();
        $eligibles = CourseEligible::where('course_id', $id)->get();
        $media = CourseMedia::where('course_id', $id)->first();
        $meta = CourseMeta::where('course_id', $id)->first();

        // dd($editCourses);
        return view('backend.pages.courses.edit-course', ['course_categories' => $course_categories, 'sections' => $sections, 'faqs' => $faqs, 'requirements' => $requirements, 'outcomes' => $outcomes, 'objectives' => $objectives, 'eligibles' => $eligibles, 'media' => $media, 'meta' => $meta, 'editCourses' => $editCourses]);
    }
    public function CourseFaqDelete($id)
    {
        $faq = CourseFaq::find($id);
        if ($faq) {
            $faq->delete();
            return response()->json(['status' => 'success', 'message' => 'Successfully deleted']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'An error occurred']);
        }
    }

    public function RequirementsDelete($id)
    {
        $requirement = CourseRequirements::find($id);
        if ($requirement) {
            $requirement->delete();
            return response()->json(['status' => 'success', 'message' => 'Successfully deleted']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'An error occurred']);
        }
    }

    public function OutcomesDelete($id)
    {
        $outcome = CourseOutcome::find($id);
        if ($outcome) {
            $outcome->delete();
            return response()->json(['status' => 'success', 'message' => 'Successfully deleted']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'An error occurred']);
        }
    }
    public function ObjectiveDelete($id)
    {
        $objective = CourseObjective::find($id);
        if ($objective) {
            $objective->delete();
            return response()->json(['status' => 'success', 'message' => 'Successfully deleted']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'An error occurred']);
        }
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    public function courseSave(Request $request)
    {
        // Define validation rules
        $validator = Validator::make($request->all(), [
            'course_title' => 'required|string|max:255', // Course title must be a string with a max length of 255 characters
            'course_short_desc' => 'required', // Short description is required
            'description' => 'required', // Full description is required
            'category_id' => 'required|integer', // Category ID must be an integer
            'level' => 'required|string', // Course level must be a string
            'language' => 'required|string', // Language must be a string
            'course_status' => 'required|string', // Course status must be a string
            'faq_question' => 'required|array',
            'faq_answer' => 'required|array',
            'requirement' => 'required|array',
            'outcome' => 'required|array',
            'objectives' => 'required|array',
            'price' => 'nullable|numeric',
            'is_free' => 'nullable|integer|in:0,1',
            'discounted_price' => 'nullable|numeric',
            'course_thumbnail' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'expire_time' => 'required|integer|in:0,1',
            'keyword' => 'required|string|max:255',
            'meta_description' => 'required',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Handle file upload
        if ($request->hasFile('course_thumbnail')) {
            $imagePath = $this->image_upload($request->file('course_thumbnail'), 'uploaded_files/course_thumbnails/', 90, 80);
        } else {
            return response()->json(['error' => 'Image is required'], 422);
        }

        // Prepare course data
        $courseData = [
            'course_title' => $request->course_title,
            'course_title_bn' => $request->course_title_bn,
            'slug' => Str::slug($request->course_title, '_'),
            'course_short_desc' => $request->course_short_desc,
            'short_description_bn' => $request->short_description_bn,
            'description' => $request->description,
            'description_bn' => $request->description_bn,
            'category_id' => $request->category_id,
            'level' => $request->level,
            'language' => $request->language,
            'course_status' => $request->course_status,
            'is_free' => $request->is_free ?? 0,
            'price' => $request->price ?? 0,
            'price_bn' => $request->price_bn ?? 0,
            'discounted_price' => $request->discounted_price ?? 0,
            'expire_time' => $request->expire_time ?? 0,
            'duration' => $request->duration ?? 0,
            'enroll_date' => $request->enroll_date ?? 0,
        ];
dd($courseData);
        // Create course
        $course = Course::create($courseData);

        // Decode JSON fields
        $faqQuestions = json_decode($request->input('courseFqQue'), true);
        $faqAnswers = json_decode($request->input('courseFqAns'), true);
        $requirements = json_decode($request->input('courseReq'), true);
        $outcomes = json_decode($request->input('courseOutcomes'), true);
        $objectives = json_decode($request->input('courseObjectives'), true);

        // Save FAQ questions and answers
        if ($faqQuestions && $faqAnswers) {
            foreach ($faqQuestions as $key => $question) {
                CourseFaq::create([
                    'course_id' => $course->id,
                    'faq_question' => $question,
                    'faq_answer' => $faqAnswers[$key] ?? '',
                ]);
            }
        }

        // Save requirements
        if ($requirements) {
            foreach ($requirements as $requirement) {
                CourseRequirements::create([
                    'course_id' => $course->id,
                    'requirement' => $requirement,
                ]);
            }
        }

        // Save outcomes
        if ($outcomes) {
            foreach ($outcomes as $outcome) {
                CourseOutcome::create([
                    'course_id' => $course->id,
                    'outcome' => $outcome,
                ]);
            }
        }

        // Save objectives
        if ($objectives) {
            foreach ($objectives as $objective) {
                CourseObjective::create([
                    'course_id' => $course->id,
                    'objectives' => $objective,
                ]);
            }
        }

        // Save course media details
        CourseMedia::create([
            'course_id' => $course->id,
            'course_thumbnail' => $imagePath,
        ]);

        // Save course meta details
        $meta = CourseMeta::create([
            'course_id' => $course->id,
            'keyword' => $request->keyword,
            'slug' => Str::slug($request->keyword, '_'),
            'meta_description' => $request->meta_description,
        ]);

        if ($meta) {
            return response()->json(['status' => 'success', 'message' => 'Successfully created']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Something went wrong!']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Define validation rules
        $validator = Validator::make($request->all(), [
            'course_title' => 'nullable|string|max:255',
            'category_id' => 'nullable|integer',
            'level' => 'nullable|string',
            'language' => 'nullable|string',
            'course_status' => 'nullable|string',
            'faq_question' => 'nullable|array',
            'faq_answer' => 'nullable|array',
            'requirement' => 'nullable|array',
            'outcome' => 'nullable|array',
            'price' => 'nullable|numeric',
            'is_free' => 'nullable|integer|in:0,1',
            'discounted_price' => 'nullable|numeric',
            'course_thumbnail' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'expire_time' => 'nullable|integer|in:0,1',
            'keyword' => 'nullable|string|max:255',
            'meta_description' => 'nullable',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Find the course by ID
        $course = Course::find($id);

        if (!$course) {
            return response()->json(['status' => 'error', 'message' => 'Course not found'], 404);
        }

        // Update the course using mass assignment
        $courseData = [
            'course_title' => $request->course_title,
            'course_title_bn' => $request->course_title_bn,
            'slug' => Str::slug($request->course_title, '_'),
            'course_short_desc' => $request->course_short_desc,
            'short_description_bn' => $request->short_description_bn,
            'description' => $request->description,
            'description_bn' => $request->description_bn,
            'category_id' => $request->category_id,
            'level' => $request->level,
            'language' => $request->language,
            'course_status' => $request->course_status,
            'is_free' => $request->is_free ?? 0,
            'price' => $request->price ?? 0,
            'price_bn' => $request->price_bn ?? 0,
            'discounted_price' => $request->discounted_price ?? 0,
            'expire_time' => $request->expire_time ?? 0,
            'duration' => $request->duration ?? 0,
            'enroll_date' => $request->enroll_date ?? 0,
        ];

        $course->update(array_filter($courseData)); // Use array_filter to remove null values

        // Save new FAQ questions and answers
        if ($request->has('faq_question')) {
            foreach ($request->faq_question as $key => $question) {
                if (!empty($question)) {
                    CourseFaq::updateOrCreate(['course_id' => $course->id, 'faq_question' => $question], ['faq_answer' => $request->faq_answer[$key] ?? '']);
                }
            }
        }

        // Save new requirements
        if ($request->has('requirement')) {
            CourseRequirements::where('course_id', $course->id)->delete();
            foreach ($request->requirement as $requirement) {
                if (!empty($requirement)) {
                    CourseRequirements::create([
                        'course_id' => $course->id,
                        'requirement' => $requirement,
                    ]);
                }
            }
        }

        // Save new outcomes
        if ($request->has('outcome')) {
            CourseOutcome::where('course_id', $course->id)->delete();
            foreach ($request->outcome as $outcome) {
                if (!empty($outcome)) {
                    CourseOutcome::create([
                        'course_id' => $course->id,
                        'outcome' => $outcome,
                    ]);
                }
            }
        }

        if ($request->has('objectives')) {
            CourseObjective::where('course_id', $course->id)->delete();
            foreach ($request->objectives as $objective) {
                if (!empty($objective)) {
                    CourseObjective::create([
                        'course_id' => $course->id,
                        'objectives' => $objective,
                    ]);
                }
            }
        }

        if ($request->hasFile('course_thumbnail')) {
            $destination = 'uploaded_files/course_thumbnails/' . $course->media->course_thumbnail;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('course_thumbnail');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploaded_files/course_thumbnails/', $filename);
            $course->media->course_thumbnail = $filename;
        }

        // Prepare the data to update
        $updateData = array_filter([
            'course_thumbnail' => isset($filename) ? $filename : null, // Use new filename if available
        ]);

        // Remove 'course_thumbnail' key if it wasn't updated
        if (!isset($filename)) {
            unset($updateData['course_thumbnail']);
        }

        // Update course media details if there's any data to update
        if (!empty($updateData)) {
            $course->media->update($updateData);
        }

        // Update course meta details
        if ($request->hasAny(['keyword', 'slug', 'meta_description'])) {
            $course->meta->update(
                array_filter([
                    'keyword' => $request->keyword,
                    'slug' => Str::slug($request->keyword),
                    'meta_description' => $request->meta_description,
                ]),
            );
        }
        if ($updateData) {
            return response()->json(['status' => 'success', 'message' => 'Successfully updated']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'An Error Occured']);
        }
    }
    public function courseStatusUpdate($id, $status)
    {
        $course = Course::findOrFail($id);
        $course->course_status = $status;
        $course->save();
        return redirect()->back()->with('success', 'Status Updated !');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $imagePath = 'uploaded_files/course_thumbnails/' . $course->media->course_thumbnail;
        // Call imageDelete method
        $this->imageDelete($imagePath);
        // Delete course
        $course->delete();
        return back()->with('success', 'Course has been deleted!');
    }
}