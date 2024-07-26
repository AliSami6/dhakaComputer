<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\PageController;
use App\Http\Controllers\Backend\QuizController;
use App\Http\Controllers\Backend\AdminsController;
use App\Http\Controllers\Backend\CouponController;
use App\Http\Controllers\Backend\CourseController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\CounterController;
use App\Http\Controllers\Backend\InvoiceController;
use App\Http\Controllers\Backend\LessionController;
use App\Http\Controllers\Backend\SectionController;
use App\Http\Controllers\Backend\StudentController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ResourceController;
use App\Http\Controllers\Backend\SettingsController;
use App\Http\Controllers\Backend\WhyChooseController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\Backend\EnrollmentController;
use App\Http\Controllers\Backend\InstructorController;
use App\Http\Controllers\Backend\LiveCourseContentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/cache_clear', function () {
    Artisan::call('route:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    // Artisan::call('config:cache');
    Artisan::call('optimize:clear');
    return redirect()->back()->with('success', 'Cache cleard!!');
});
Auth::routes([
    'register' => false, // Registration Routes...
    'login' => false, // Login Routes...
    'reset' => false, // Password Reset Routes...
    // Password Reset Routes...
]);

//Route::get('/', 'HomeController@redirectAdmin')->name('index');
//Route::get('/', 'HomeController@index')->name('index');

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/course_list', [HomeController::class, 'coursesAll'])->name('course.list');

Route::get('/course_cat_list/{id}', [HomeController::class, 'CourseCategory'])->name('course.category_list');
Route::get('/course_autocomplete', [HomeController::class, 'autocomplete'])->name('autocomplete');
Route::get('/course_filter', [HomeController::class, 'coursesFilter'])->name('course.filter');
Route::get('/register', [UserLoginController::class, 'register'])->name('signUp');
Route::post('/register', [UserLoginController::class, 'registerFormSave'])->name('register.save');
Route::get('/signin', [UserLoginController::class, 'login'])->name('sign_in');
Route::post('/signin', [UserLoginController::class, 'LoginDataCheck'])->name('login.save');

Route::post('/logout/data', [UserLoginController::class, 'logoutData'])->name('logout.name');

Route::middleware(['auth.custom'])->group(function () {
    Route::get('/course_metarials/{id}', [HomeController::class, 'CourseMetarials'])->name('course.metarials');
    Route::get('/course_lession/{lesson}', [HomeController::class, 'CourseLesson'])->name('course.lesson');
    Route::get('/student_profile', [HomeController::class, 'StudentProfile'])->name('my_profile');
    Route::get('/update_student_profile/{id}', [HomeController::class, 'EditStudentProfile'])->name('edit.my_profile');
    Route::post('/update_student_profile/{id}', [HomeController::class, 'UpdateStudentProfile'])->name('update.my_profile');
});

Route::get('/course_details/{keyword}', [HomeController::class, 'CourseDetails'])->name('course.details');
Route::post('/order', [OrderController::class, 'store'])->name('order.save');

Route::get('/instructor_profile/{id}', [HomeController::class, 'InstructorProfile'])->name('ins.profile');
Route::get('cart', [CartController::class, 'index'])->name('cart');
Route::get('add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add_to_cart');
Route::patch('update-cart', [CartController::class, 'update'])->name('cart.update');
Route::delete('remove-from-cart', [CartController::class, 'remove'])->name('cart.remove');

Route::get('/proceed_to_checkout', [CheckoutController::class, 'ProceedToCheckout'])->name('process_cheakout');
Route::post('/place_order', [CheckoutController::class, 'Order'])->name('order');
Route::post('/success', [CheckoutController::class, 'success']);
Route::get('/thank_you_for_purchase', [HomeController::class, 'ThankYouPage'])->name('course.thank_you');
/**
 * Admin routes
 */
Route::prefix('admin')->group(function () {
    Route::get('login', 'Backend\Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Backend\Auth\LoginController@login')->name('admin.login.submit');
    Route::post('logout', 'Backend\Auth\LoginController@logout')->name('admin.logout.submit');

    Route::middleware('auth:admin')->group(function () {
        Route::get('/', 'Backend\DashboardController@index')->name('admin.dashboard');
        Route::resource('admins', 'Backend\AdminsController', ['names' => 'admin.admins']);
        Route::get('/admins/{id}/{status}', [AdminsController::class, 'AdminStatus'])->name('admin_status.update');

        // ----------------------------------------- Category -------------------------------------------------------------------------//
        Route::controller(CategoryController::class)->group(function () {
            Route::get('/category-courses', 'index')->name('category.courses');
            Route::get('/subcategory', 'SubCategoryList')->name('subcategory.index');
            Route::get('/edit_subcategory/{id}', 'editSbcategory')->name('subcategory.edit');
           Route::post('/update_subcategory', 'SubcatUpdate')->name('subcategory.update');
            Route::post('/category-courses', 'store')->name('category.save');
            Route::get('/category-courses/edit', 'edit')->name('category.edit');
            Route::post('/category-courses/update', 'update')->name('category.update');
            Route::delete('/category-courses/delete/{id}', 'destroy')->name('category.courses.delete');
             Route::delete('/delete-subcategory/{id}', 'deleteSubCategory')->name('delete-subcategory');
        });
       

        // ------------------------------------------- End Category -------------------------------------------------------------------//

        // ----------------------------------------- Instructor -------------------------------------------------------------------------//
        Route::controller(InstructorController::class)->group(function () {
            Route::get('/instructor-all', 'index')->name('instructor.list');
            Route::post('/instructor-save', 'store')->name('instructor.save');
            Route::get('/instructor/edit', 'edit')->name('instructor.edit');
            Route::get('/instructor/{id}/{status}', 'instructorStatus')->name('instructor_status.update');
            Route::post('/instructor/update', 'update')->name('instructor.update');
            Route::delete('/instructor/delete/{id}', 'destroy')->name('instructor.delete');
            Route::get('/instructor-overview', 'InstructorOverview')->name('instructor.overview');
            Route::get('/instructor_details/{id}', 'DetailsForInstructor')->name('instructor.details');
            Route::get('/instructor_details_form/{id}', 'DetailsForInstructorForm')->name('instructor.form');
            Route::post('/instructor_details_form', 'DetailsForInstructorSave')->name('instructor.details.save');
            Route::get('/instructor-payments', 'PaymentForInstructor')->name('instructor.payments');
        });
        // ------------------------------------------- End Instructor -------------------------------------------------------------------//

        // ----------------------------------------- Course -------------------------------------------------------------------------//
        Route::controller(CourseController::class)->group(function () {
            Route::get('/courses', 'courseList')->name('courseList');
            Route::get('/add-courses', 'courseAdd')->name('create.courses');
            Route::get('/course_status/{id}/{status}', 'courseStatusUpdate')->name('course_status.update');
            Route::post('/add-courses', 'courseSave')->name('courses.save');
            Route::get('/edit-courses/{id}', 'courseEdit')->name('edit.courses');
            Route::post('/edit-courses/update/{id}', 'update')->name('courses.update');
            Route::get('/faq/{id}', 'CourseFaqDelete')->name('faq.destroy');
            Route::get('/requirement/{id}', 'RequirementsDelete')->name('requirement.destroy');
            Route::get('/outcome/{id}', 'OutcomesDelete')->name('outcome.destroy');
            Route::get('/objective/{id}', 'ObjectiveDelete')->name('objective.destroy');
            Route::get('/eligible/{id}', 'EnrolledForEligibiulityDelete')->name('eligible.destroy');
            Route::delete('/courses/delete/{id}', 'destroy')->name('courses.delete');
        });
        // ------------------------------------------- End Course -------------------------------------------------------------------//

        // ----------------------------------------- Section -------------------------------------------------------------------------//
        Route::controller(SectionController::class)->group(function () {
            Route::post('/add_section/save', 'SectionSave')->name('section.save');
            Route::get('/edit-section', 'sectionEdit')->name('edit.section');
            Route::post('/update-section', 'updateSection')->name('sections.update');
            Route::delete('/section/delete/{id}', 'sectionDelete')->name('section.delete');
        });
        // ------------------------------------------- End Section -------------------------------------------------------------------//

        // ----------------------------------------- Lession -------------------------------------------------------------------------//
        Route::controller(LessionController::class)->group(function () {
            Route::post('/add_new_lesson/save', 'LessionSave')->name('lesson.save');
            Route::get('/edit_lesson', 'EditLesson')->name('edit.lesson');
            Route::post('/lesson/update', 'updateLesson')->name('lesson.update');
            Route::delete('/lesson/delete/{id}', 'LessonDelete')->name('lesson.delete');
        });

        // ------------------------------------------- End Lession -------------------------------------------------------------------//

        // ----------------------------------------- Student  -------------------------------------------------------------------------//
        Route::controller(StudentController::class)->group(function () {
            Route::get('/all-students', 'index')->name('students.all');
            Route::get('/students_status/{id}/{status}', 'studentStatusUpdate')->name('students_status.update');
            Route::post('/add_new_students/save', 'store')->name('students.save');
            Route::get('/details-of-students/{id}', 'viewStudentDetails')->name('students.details');
            Route::post('/details-of-students/{id}', 'UpdateStudentDetails')->name('students.details.update');
            Route::get('/course-of-students/{id}', 'studentCourse')->name('students.course');
            Route::post('/student_courses/update', 'studentCourseSave')->name('students.courses.save');
            Route::delete('/student/{id}/', 'deleteStudents')->name('student.delete');

            // Route::get('/courses', 'courseList')->name('courseList');
            // Route::get('/add-courses', 'courseAdd')->name('create.courses');
        });
        // ------------------------------------------- End Student -------------------------------------------------------------------//

        // ----------------------------------------- Coupon -------------------------------------------------------------------------//
        Route::controller(CouponController::class)->group(function () {
            Route::get('/coupons', 'couponList')->name('coupons.courses');
            Route::get('/create-coupons', 'CreateCopons')->name('create.coupons');
        });

        // ------------------------------------------- End Coupon -------------------------------------------------------------------//
        Route::controller(SliderController::class)->group(function () {
            Route::get('/slider/create', 'create')->name('slider.create');
            Route::post('/slider/store', 'store')->name('slider.save');
        });
        Route::controller(WhyChooseController::class)->group(function () {
            Route::get('/choose_us/create', 'create')->name('chooseus.create');
            Route::post('/choose_us/store', 'store')->name('chooseus.save');
        });
        Route::controller(BlogController::class)->group(function () {
            Route::get('/blog/list', 'index')->name('blog.index');
            Route::get('/blog/create', 'create')->name('blog.create');
            Route::post('/blog/store', 'store')->name('blog.save');
            Route::get('/blog/edit/{id}', 'edit')->name('blog.edit');
            Route::post('/blog/edit/{id}', 'update')->name('blog.update');
            Route::delete('/blog/deleted/{id}', 'destroy')->name('blog.destroy');
        });
        Route::controller(LiveCourseContentController::class)->group(function () {
            Route::get('/live_course_content', 'index')->name('content.index');
            Route::get('/live_course_content/create', 'create')->name('content.create');
            Route::post('/live_course_content/store', 'store')->name('content.save');
            Route::get('/live_course_content/edit/{id}', 'edit')->name('content.edit');
            Route::post('/live_course_content/edit/{id}', 'update')->name('content.update');
            Route::delete('/live_course_content/deleted/{id}', 'destroy')->name('content.destroy');
        });

          Route::controller(CounterController::class)->group(function () {
            Route::get('/counter/all', 'index')->name('counter.index');
            Route::get('/counter/create', 'create')->name('counter.create');
            Route::post('/counter/store', 'store')->name('counter.save');
            Route::get('/counter/edit/{id}', 'edit')->name('counter.edit');
            Route::post('/counter/edit/{id}', 'update')->name('counter.update');
            Route::delete('/counter/deleted/{id}', 'destroy')->name('counter.destroy');
        });
        // ----------------------------------------- Invoice  -------------------------------------------------------------------------//
        Route::controller(InvoiceController::class)->group(function () {
            Route::get('/invoice', 'InvoiceList')->name('invoice.all');
            Route::get('/invoice_details', 'InvoiceDetails')->name('invoice.details');
            Route::get('/inovice_print', 'InvoicePrint')->name('invoice.print');
        });

        // ------------------------------------------- End Invoice -------------------------------------------------------------------//

        // ----------------------------------------- Enrollment  -------------------------------------------------------------------------//
        Route::controller(EnrollmentController::class)->group(function () {
            Route::get('/all-enrollments', 'allEnrollmentList')->name('enrollments.all');
            Route::get('/status-enrollments/{id}/{status}', 'enrollStatusUpdate')->name('status.update');
            Route::post('/all-enrollments', 'store')->name('enrollments.save');
            Route::get('/students-enrollments', 'studentEnrollment')->name('enrollments.student');
            Route::delete('/students-enrollments_delete/{id}', 'destroy')->name('enrollments.delete');
        });

        // ------------------------------------------- End Enrollment -------------------------------------------------------------------//

        // ----------------------------------------- Settings  -------------------------------------------------------------------------//
        Route::controller(SettingsController::class)->group(function () {
            Route::get('/all-messages', 'allMessages')->name('show.messages');
            Route::get('/profiles', 'ProfileInfo')->name('profiles');
            Route::get('/referral_system', 'ReferralSystem')->name('referral.system');
            Route::get('/settings', 'SettingsInfo')->name('settings');
            Route::post('/settings', 'SettingsDataSave')->name('settings.update');
        });

        // ------------------------------------------- End Settings -------------------------------------------------------------------//
        // ----------------------------------------- Page  -------------------------------------------------------------------------//
        Route::controller(PageController::class)->group(function () {
            Route::get('/pages', 'pageList')->name('page.index');
            Route::get('/pages/create', 'create')->name('pages.create');
            Route::post('/pages/create', 'store')->name('pages.save');
            Route::get('/pages/edit/{page}', 'edit')->name('pages.edit');
            Route::post('/pages/update/{page}', 'update')->name('pages.update');
            Route::delete('/page/delete/{page}','destroy')->name('pages.destroy');
        });

        // ------------------------------------------- End Page -------------------------------------------------------------------//


    });
});

// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout'])->name('pay.check');
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/ersuccess', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END