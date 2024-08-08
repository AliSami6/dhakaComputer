<?php

namespace App\Http\Controllers;
use App\User;
use App\Models\Blog;
use App\Models\Page;
use App\Models\Batch;
use App\Models\Course;
use App\Models\Enroll;
use App\Models\Wallet;
use App\Models\Counter;
use App\Models\Lession;
use App\Models\Section;
use App\Models\Student;
use App\Models\Category;
use App\Models\Training;
use App\Models\LiveClass;
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
        $courses = Course::with('batch', 'media')->get();

        $instructors = Instructor::where('status', 'Active')->get();
        $web_settings = DB::table('website_infos')->first();

        return view('frontend.pages.index', ['web_settings' => $web_settings, 'categories' => $categories, 'live_content' => $live_content, 'counter' => $counter, 'courses' => $courses]);
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
        $students = Student::where('user_id', Auth::user()->id)->first();
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

            $enrollCourseCount = StudentEnrollment::with('course')
                ->where('student_id', $students->id)
                ->get()
                ->unique('course_id');

            $uniqueCourseCount = $enrollCourseCount->count();

            return view('frontend.pages.student_course', [
                'students' => $students,
                'uniqueCourseCount' => $uniqueCourseCount,
                'enrollmentClass' => $enrollmentClass,
            ]);
        } else {
            return redirect()->back()->with('warning', 'Complete Your Order');
        }
    }

    public function StudentBatch()
    {
        // Fetch student enrollments for the authenticated user
        if (!auth()->check()) {
            return view('frontend.pages.my_batch', [
                'batchStudent' => collect(),
                'isAuthenticated' => false,
            ]);
        }

        $batchStudent = Batch::select('batches.id', 'batches.course_id', 'batches.batch_no', 'batches.batch_code', 'batches.class_type', 'batches.class_rutine', 'batches.class_start', 'batches.class_time', 'batches.total_class', 'students.course_id', 'students.user_id', 'courses.id as courseId', 'students.id as studentId', 'users.id as userID')->join('courses', 'courses.id', '=', 'batches.course_id')->join('students', 'students.course_id', '=', 'batches.course_id')->join('users', 'users.id', '=', 'students.user_id')->where('users.id', auth()->id())->get();

        return view('frontend.pages.my_batch', [
            'batchStudent' => $batchStudent,
            'isAuthenticated' => true,
        ]);
    }

    public function UpdateStudentProfile(Request $request, $id)
    {
        $students = User::where('emailAddress ', Auth::user()->emailAddress)
            ->orWhere('id', $id)
            ->first();
        if (!empty($request->file('image'))) {
            $image = $this->image_updated($request->file('image'), 'uploaded_files/users/', $students->image);
            $students->update([
                'applicantName' => $request->applicantName,
                'fatherName' => $request->fatherName,
                'fatherOccupation' => $request->fatherOccupation,
                'motherName' => $request->motherName,
                'nationalId' => $request->nationalId,
                'occupation' => $request->occupation,
                'motherOccupation' => $request->motherOccupation,
                'presentAddress' => $request->presentAddress,
                'permanentAddress' => $request->permanentAddress,
                'image' => $image,
            ]);
        } else {
            $students->update([
                'applicantName' => $request->applicantName,
                'fatherName' => $request->fatherName,
                'fatherOccupation' => $request->fatherOccupation,
                'motherName' => $request->motherName,
                'nationalId' => $request->nationalId,
                'occupation' => $request->occupation,
                'motherOccupation' => $request->motherOccupation,
                'presentAddress' => $request->presentAddress,
                'permanentAddress' => $request->permanentAddress,
            ]);
        }

        return redirect()->route('student.profile')->with('success', 'Student updated successfully!!');
    }

    public function CourseDetails($keyword)
    {
        $course = Course::with('categories', 'instructors', 'sections.lessons', 'studentEnrollments.student', 'batch', 'faqs', 'requirements', 'media')->where('slug', $keyword)->first();
        $live_content = Training::oldest('id')->get();

        return view('frontend.pages.course_details', [
            'course' => $course,
            'live_content' => $live_content,
        ]);
    }
    public function coursesAll()
    {
        $categories = Category::oldest('id')->get();
        $courses = Course::with('batch', 'media')->get();
        return view('frontend.pages.course_grid', ['categories' => $categories, 'courses' => $courses]);
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
        $categories = Category::with('courses')->get();
        $courses = Course::where('category_id', $id)->get();

        return view('frontend.pages.course_cat', [
            'categories' => $categories,
            'courses' => $courses,
            'currentCategory' => Category::find($id),
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
    public function studentProfiles()
    {
        return view('frontend.pages.profile');
    }
    public function My_Wallet()
    {
        $wallets = Wallet::with('studentEnrollment')
            ->where('user_id', auth()->user()->id)
            ->get();

        return view('frontend.pages.my_wallet', compact('wallets'));
    }

    public function UpdateUserProfile(Request $request)
    {
        $students = User::where('emailAddress', Auth::user()->emailAddress)->first();
        if (!empty($request->file('image'))) {
            $image = $this->image_updated($request->file('image'), 'uploaded_files/users/', $students->image);
            $students->update([
                'applicantName' => $request->applicantName,
                'fatherName' => $request->fatherName,
                'fatherOccupation' => $request->fatherOccupation,
                'motherName' => $request->motherName,
                'nationalId' => $request->nationalId,
                'occupation' => $request->occupation,
                'motherOccupation' => $request->motherOccupation,
                'presentAddress' => $request->presentAddress,
                'permanentAddress' => $request->permanentAddress,
                'image' => $image,
            ]);
        } else {
            $students->update([
                'applicantName' => $request->applicantName,
                'fatherName' => $request->fatherName,
                'fatherOccupation' => $request->fatherOccupation,
                'motherName' => $request->motherName,
                'nationalId' => $request->nationalId,
                'occupation' => $request->occupation,
                'motherOccupation' => $request->motherOccupation,
                'presentAddress' => $request->presentAddress,
                'permanentAddress' => $request->permanentAddress,
            ]);
        }

        return redirect()->back()->with('success', 'User data updated successfully!!');
    }
    public function studentCourse()
    {
        $students = Student::where('user_id', Auth::user()->id)->first();
        if ($students != null) {
            $enrollmentClass = Enroll::with(['studentEnrollment', 'studentEnrollment.student', 'studentEnrollment.course', 'studentEnrollment.course.media'])
                ->whereHas('studentEnrollment', function ($query) use ($students) {
                    $query->where('student_id', $students->id);
                })
                ->whereHas('studentEnrollment.student', function ($query) {
                    $query->where('status', 'Active');
                })
                ->where('enroll_status', 'Accepted')
                ->get()
                ;

           //dd($enrollmentClass);

            return view('frontend.pages.student_course', [
                'students' => $students,
                'enrollmentClass' => $enrollmentClass,
            ]);
        } else {
            return redirect()->back()->with('warning', 'Complete Your Order');
        }
    }
    public function LiveClass()
    {
        // Check if the user is authenticated
        if (!auth()->check()) {
            return view('frontend.pages.my_live_class', [
                'live_class' => collect(),
                'isAuthenticated' => false,
            ]);
        }
        // Get the IDs of students associated with the authenticated user
        $studentIds = Student::where('user_id', auth()->id())->pluck('id')->toArray();
        // Fetch live classes related to the courses the students are enrolled in
        $live_class = LiveClass::whereHas('livecourses', function ($query) use ($studentIds) {
            $query->whereIn('id', function ($subQuery) use ($studentIds) {
                $subQuery->select('course_id')->from('student_enrollments')->whereIn('student_id', $studentIds);
            });
        })->get();
        return view('frontend.pages.my_live_class', [
            'live_class' => $live_class,
            'isAuthenticated' => true,
        ]);
    }
    public function recharge(Request $request)
    {
        $request->validate([
            'payment_methods' => 'required|string',
            'amount' => 'required|numeric|min:1',
        ]);

        $wallet = Wallet::where('user_id', Auth::id())->first();

        if ($wallet) {
            $wallet->rechargeBalance($request->amount);
            return redirect()->back()->with('success', 'Balance recharged successfully.');
        }

        return redirect()->back()->with('error', 'Wallet not found.');
    }

    public function withdraw(Request $request)
    {
        // Validate the request
        $request->validate([
            'points' => 'required|numeric|min:1',
            'amount' => 'required',
        ]);

        // Get the authenticated user's wallet
        $wallet = Wallet::where('user_id', Auth::id())->first();

        // Check if the wallet exists and has sufficient points
        if ($wallet && $wallet->withdrawPoints($request->points)) {
            // Add the equivalent amount to the wallet balance
            $wallet->rechargeBalance($request->points);

            // Redirect back with a success message
            return redirect()->back()->with('success', 'Points withdrawn and balance recharged successfully.');
        }

        // Redirect back with an error message if insufficient points or wallet not found
        return redirect()->back()->with('error', 'Insufficient points or wallet not found.');
    }
}