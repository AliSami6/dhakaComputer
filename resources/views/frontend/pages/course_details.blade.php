@extends('layouts.frontend')
@section('title', 'Course Details')
@push('styles')
@endpush
@section('content')
    <main>
        <!-- breadcrumb-area -->
        <section class="breadcrumb__area include-bg pt-150 pb-150 breadcrumb__overlay"
            data-background="{{ asset('/') }}frontend/assets/img/banner/banner-bg-3.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="breadcrumb__content p-relative z-index-1">
                            <h3 class="breadcrumb__title mb-20">Course Details</h3>
                            <div class="breadcrumb__list">
                                <span><a href="index.html">Home</a></span>
                                <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                                <span><a href="course-list.html">Courses</a></span>
                                <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                                <span class="sub-page-black">Course Details</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- course-details-area -->
        <section class="c-details-area pt-120 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="c-details-wrapper mr-25">
                            
                            <div class="course-details-content mb-45">
                                <div class="tpcourse__category mb-15">
                                    <ul class="tpcourse__price-list d-flex align-items-center">
                                        <li><a class="c-color-green"
                                                href="#">{{ $course->categories->category_name }}</a></li>
                                    </ul>
                                </div>
                                <div class="tpcourse__ava-title mb-25">
                                    <h4 class="c-details-title"><a href="#">{{ $course->course_title }}</a></h4>
                                </div>
                                <div class="tpcourse__meta course-details-list">
                                    <ul class="d-flex align-items-center">
                                        <li>
                                            <div class="rating-gold d-flex align-items-center">
                                                <p>4.7</p>
                                                <i class="fi fi-ss-star"></i>
                                                <i class="fi fi-ss-star"></i>
                                                <i class="fi fi-ss-star"></i>
                                                <i class="fi fi-ss-star"></i>
                                                <i class="fi fi-rs-star"></i>
                                                <span>(125)</span>
                                            </div>
                                        </li>
                                        <li> <span>35 Classes</span></li>
                                        <li><span>291 Students</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="c-details-about mb-40">
                                <h5 class="tp-c-details-title mb-20">About This Course</h5>
                                <p>{{ $course->course_short_desc }}.</p>

                            </div>
                    
            
                            <div class="row">
                                @if ($course->instructors->isNotEmpty())
                                @foreach ($course->instructors as $instructorCourse)
                                <div class="col-lg-4 col-md-6 col-12">
                                   <div class="tp-instruc-item">
                                      <div class="tp-instructor text-center p-relative mb-40">
                                         <div class="tp-instructor__thumb mb-25">
                                            <img src="{{ asset('uploaded_files/Instructor/' . $instructorCourse->instructor->image) }}" alt="{{ $instructorCourse->instructor->first_name }}">
                                         </div>
                                         <div class="tp-instructor__content">
                                           
                                            <h4 class="tp-instructor__title tp-instructor__title-info p-relative mb-35 mt-5"><a >  {{ $instructorCourse->instructor->first_name .' '.$instructorCourse->instructor->last_name }}</a></h4>
                                            <p class="card-text">{{ $instructorCourse->instructor->professions->first()->professions }}</p>
                                           
                                         </div>
                                      </div>
                                   </div>
                                </div>
                                @endforeach
                                @endif
                             </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="c-details-sidebar">
                            @php
                                $students = DB::table('students')
                                    ->where('email', auth()->user()->email)
                                    ->first();
                                $studentCourse = DB::table('student_enrollments')
                                    ->where('course_id', $course->id)
                                    ->where('student_id', $students->id)
                                    ->first();
                            @endphp
                            <div class="course-details-widget">
                                <div class="cd-video-price mt-2">
                                    @if ($studentCourse != null)
                                        <div class="pricing-video text-center mb-15">
                                            <h4 class="card-title p-1 text-success mt-4">You are enrolled this course </h4>
                                        </div>
                                    @else
                                        <h3 class="pricing-video text-center mb-15">$ {{ $course->prices->price }}</h3>
                                        <div class="cd-pricing-btn text-center mb-30">
                                            <a class="tp-vp-btn" href="{{ route('add_to_cart', $course->id) }}">Add To
                                                Cart</a>
                                        </div>
                                    @endif
                                </div>
                                <div class="cd-information mb-35">
                                    <ul>
                                        <li><i class="fa-light fa-calendars"></i> <label>Lesson</label>
                                            <span>{{ $totalLessons }}</span>
                                        </li>
                                        <li><i class="fi fi-sr-stats"></i> <label>Skill Level</label>
                                            <span>{{ $course->level }}</span>
                                        </li>
                                        <li><i class="fi fi-rr-comments"></i> <label>Language</label>
                                            <span>{{ $course->language }}</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="c-details-social">
                                    <h5 class="cd-social-title mb-25">Share Now:</h5>
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- course-details-area-end -->


        <!-- counter-area -->
        <section class="tp-counter-area theme-bg pt-90">
            <div class="counter-b-border">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="counter-item mb-70">
                                <div class="counter-item__content counter-white-text">
                                    <h4 class="counter-item__title counter-left-title"><span class="counter">276</span>K
                                    </h4>
                                    <p>Worldwide Students</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="counter-item mb-70">
                                <div class="counter-item__content counter-white-text">
                                    <h4 class="counter-item__title counter-left-title"><span class="counter">23</span>+
                                    </h4>
                                    <p>Years Experience</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="counter-item mb-70">
                                <div class="counter-item__content counter-white-text">
                                    <h4 class="counter-item__title counter-left-title"><span class="counter">735</span>+
                                    </h4>
                                    <p>Professional Courses</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="counter-item mb-70">
                                <div class="counter-item__content counter-white-text">
                                    <h4 class="counter-item__title counter-left-title"><span class="counter">4.7</span>K+
                                    </h4>
                                    <p>Beautiful Review</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- counter-area-end -->

    </main>
@endsection
@push('scripts')
@endpush
