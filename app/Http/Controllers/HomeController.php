<?php

namespace App\Http\Controllers;
use App\User;
use App\Models\Blog;
use App\Models\Page;
use App\Models\Course;
use App\Models\Enroll;
use App\Models\Counter;
use App\Models\Lession;
use App\Models\Section;
use App\Models\Student;
use App\Models\Category;
use App\Models\Training;
use App\Models\Instructor;
use Illuminate\Http\Request;
use App\Models\InstructorCourse;
use App\Models\StudentEnrollment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {

        $live_content = Training::oldest('id')->get();
        $counter = Counter::oldest('id')->get();
        $categories = Category::oldest('id')->get();
        $blogs = Blog::latest('id')->get();
        $courses = Course::with('batch','media')->get();
      
        $instructors = Instructor::where('status', 'Active')->get();
       $web_settings = DB::table('website_infos')->first();
      
        return view('frontend.pages.index',['web_settings'=>$web_settings,
        'categories'=>$categories,
        'live_content'=>$live_content,
        'counter'=>$counter,
        'courses'=>$courses]);
    }
    public function aboutPage()
    {
        $aboutPage = Page::where('slug', 'about-us')->first();
        return view('frontend.pages.about', ['aboutPage' => $aboutPage]);
    }

    public function termsPage()
    {
        $termsPage = Page::where('slug', 'terms-and-conditions')->first();
        return view('frontend.pages.terms', ['termsPage' => $termsPage]);
    }

    public function refundPolicyPage()
    {
        $refundPolicyPage = Page::where('slug', 'refund-and-cancellation-policy')->first();
        return view('frontend.pages.refund_policy', ['refundPolicyPage' => $refundPolicyPage]);
    }

    public function privacyPolicyPage()
    {
        $privacyPolicyPage = Page::where('slug', 'privacy-policy')->first();
        return view('frontend.pages.privacy_policy', ['privacyPolicyPage' => $privacyPolicyPage]);
    }

    public function InstructorProfile($id)
    {
        $instructors = Instructor::where('id', $id)
            ->with(['designations', 'professions', 'instructorCourses.course', 'instructorCourses.course.categories'])
            ->first();

        return view('frontend.pages.instructor_profile', ['instructors' => $instructors]);
    }
    public function CourseMetarials($id)
    {
        $my_course = Course::with('sections', 'sections.lessons', 'sections.quizes', 'instructors.instructor')->where('id', $id)->first();
        return view('frontend.pages.course_metarials', compact('my_course'));
    }
    public function BlogList(){
        return view('frontend.pages.blog');
    }
    public function CourseLesson($lesson)
    {
        $my_lesson = Lession::where('lession_title', $lesson)->first();
        $course = Course::with(['sections.lessons', 'sections.quizes'])
            ->whereHas('sections.lessons', function ($query) use ($lesson) {
                $query->where('lession_title', $lesson);
            })
            ->first();
        return view('frontend.pages.lesson', compact('my_lesson', 'course'));
    }

    public function StudentProfile()
    {
        $students = Student::where('email', Auth::user()->email)->first();
        if ($students != null) {
            $enrollmentClass = Enroll::with(['studentEnrollment', 'studentEnrollment.student', 'studentEnrollment.course', 'studentEnrollment.course.meta', 'studentEnrollment.course.media', 'studentEnrollment.course.prices', 'studentEnrollment.course.categories'])
                ->whereHas('studentEnrollment', function ($query) use ($students) {
                    $query->where('student_id', $students->id);
                })
                ->whereHas('studentEnrollment.student', function ($query) {
                    $query->where('status', 'Active');
                })
                ->where('enroll_status', 'Accepted')
                ->get()
                ->unique('studentEnrollment.course_id');
            // dd($enrollmentClass);
            $enrollCourseCount = StudentEnrollment::with('course')
                ->where('student_id', $students->id)
                ->get()
                ->unique('course_id');
            $uniqueCourseCount = $enrollCourseCount->count();

            return view('frontend.pages.my_profile', [
                'students' => $students,
                'uniqueCourseCount' => $uniqueCourseCount,
                'enrollmentClass' => $enrollmentClass,
            ]);
        } else {
            return redirect()->back()->with('warning', 'Complete Your Order');
        }
    }
    public function EditStudentProfile($id)
    {
        $students = Student::where('email', Auth::user()->email)
            ->orWhere('id', $id)
            ->first();
        if ($students != null) {
            return view('frontend.pages.update_profile', [
                'students' => $students,
            ]);
        } else {
            return redirect()->back()->with('warning', 'Complete Your Order');
        }
    }
    public function UpdateStudentProfile(Request $request, $id)
    {
        $students = Student::where('email', Auth::user()->email)
            ->orWhere('id', $id)
            ->first();
        if (!empty($request->file('image'))) {
            $image = $this->image_upload($request->file('image'), 'uploaded_files/students/', 90, 80);
            $students->update([
                'firstName' => $request->firstName,
                'lastName' => $request->lastName,
                'date_of_birth' => $request->date_of_birth,
                'nationality' => $request->nationality,
                'country' => $request->country,
                'address_one' => $request->address_one,
                'image' => $image,
            ]);
        } else {
            $students->update([
                'firstName' => $request->firstName,
                'lastName' => $request->lastName,
                'date_of_birth' => $request->date_of_birth,
                'nationality' => $request->nationality,
                'country' => $request->country,
                'address_one' => $request->address_one,
            ]);
        }

        return redirect()->back()->with('success', 'Student updated successfully!!');
    }

    public function CourseDetails($keyword)
    {
        $course = Course::with('categories','instructors','sections.lessons','studentEnrollments.student','batch','faqs','requirements','media')
            ->where('slug',$keyword)
            ->first();
            $live_content = Training::oldest('id')->get();
      
        return view('frontend.pages.course_details', [
            'course' => $course,
            'live_content' => $live_content
        ]);
    }
    public function coursesAll()
    {
        $categories = Category::oldest('id')->get();
        $courses =  Course::with('batch','media')->get();
        return view('frontend.pages.course_grid',['categories'=>$categories,'courses'=>$courses]);
    }
    public function autocomplete(Request $request)
    {
        if ($request->ajax()) {
            $searchTerm = $request->input('query');
            $data = Course::with('meta')
                ->where('id', 'like', '%' . $searchTerm . '%')
                ->orWhere('course_title', 'like', '%' . $searchTerm . '%')
                ->orWhere('level', 'like', '%' . $searchTerm . '%')
                ->get();

            $output = '';
            if (count($data) > 0) {
                foreach ($data as $row) {
                    $output .= '<li><a href="' . route('course.details', $row->meta->keyword) . '">' . $row->course_title . '</a></li>';
                }
            } else {
                $output .= '<li>No results found</li>';
            }
            return response()->json($output);
        }
        return abort(404); // Handle non-ajax requests or invalid requests
    }

    public function CourseCategory($id)
    {
        $categories = Category::get();
        $instructors = Instructor::get();
        $courses = Course::with('categories', 'prices', 'media', 'instructors.instructor')->where('category_id', $id)->get();
        return view('frontend.pages.course_grid', [
            'categories' => $categories,
            'instructors' => $instructors,
            'courses' => $courses,
        ]);
    }
    public function coursesFilter(Request $request)
    {
        $query = Course::query();

        if ($request->category && $request->category != 'all') {
            $query->where('category_id', $request->category);
        }
        if ($request->has('level') && !empty($request->level)) {
            if (!in_array('All Levels', $request->level)) {
                $query->whereIn('level', $request->level);
            }
        }
        if ($request->has('is_free') && !empty($request->is_free)) {
            $query->whereHas('prices', function ($q) use ($request) {
                $q->whereIn('is_free', $request->is_free);
            });
        }

        if ($request->has('instructors') && !empty($request->instructors)) {
            $query->whereHas('instructors', function ($q) use ($request) {
                $q->where('instructor_id', $request->instructors);
            });
        }

        $courses = $query->with('categories', 'prices', 'media', 'meta', 'instructors.instructor')->get();

        return response()->json([
            'courses' => $courses,
        ]);
    }
    public function ThankYouPage()
    {
        return view('frontend.pages.thank');
    }
}