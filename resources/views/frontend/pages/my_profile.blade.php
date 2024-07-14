@extends('layouts.frontend')
@section('title', 'Student Profile')
@push('styles')
    <style>
        .instruc-sidebar {
            padding: 15px 15px 0px 15px !important;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
            border-radius: 8px;
        }
    </style>
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
                            <h3 class="breadcrumb__title mb-20">Student Profile</h3>
                            <div class="breadcrumb__list">
                                <span><a href="index.html">Home</a></span>
                                <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                                <span><a href="#">Student</a></span>
                                <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                                <span class="sub-page-black">Student Profile</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- instructor-portfolio-area -->
        <section class="instructor-portfolio pt-120 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 mb-0">
                        <div class="instruc-sidebar">
                            <div class="isntruc-side-thumb mb-30">
                                <img src="{{ isset($students->image) && $students->image ? asset('uploaded_files/students/' . $students->image) : asset('frontend/assets/img/bg/instruc-sibedar-thumb-01.jpg') }}"
                                    alt="{{ Auth::user()->name }}" class="rounded mx-auto d-block">
                            </div>
                            <div class="instructor-sidebar-widget">
                                <div class="isntruc-side-content text-center">
                                    @if (isset($students))
                                        <h4 class="side-instructor-title mb-15">
                                            {{ $students->firstName . ' ' . $students->lastName }}
                                        </h4>
                                    @else
                                        <h4 class="side-instructor-title mb-15">
                                            {{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}
                                        </h4>
                                    @endif

                                </div>
                                <div class="cd-information instruc-profile-info mb-0 pb-0">
                                    <ul>
                                        <li>
                                            <i class="fi fi-sr-user"></i>
                                            <label>Name </label>
                                            <span>
                                                @if (isset($students))
                                                    {{ $students->firstName . ' ' . $students->lastName }}
                                                @else
                                                    {{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}
                                                @endif
                                            </span>
                                        </li>

                                        <li>
                                            <i class="fi fi-rr-envelope"></i>
                                            <label>Email </label>
                                            <span>{{ $students->email ?? Auth::user()->email }}</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-mobile-alt"></i>
                                            <label>Phone No</label>
                                            <span>{{ $students->phone_no ?? Auth::user()->phone_no }}</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-user-edit"></i>
                                            @if (isset($students))
                                                <label><a href="{{ route('edit.my_profile',$students->id) }}">Update
                                                        Profile</a></label>
                                            @else
                                                <label><a href="#">Update Profile</a></label>
                                              
                                            @endif
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="instructor-main-content ml-30 mb-40">
                            <div class="instructor-tp-course">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="instruc-biography">

                                            <h2 class="ins-bio-title mb-35">
                                                Courses (
                                                @if (isset($uniqueCourseCount))
                                                    {{ $uniqueCourseCount }}
                                                @endif
                                                )
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                                @if ($enrollmentClass->isNotEmpty())
                                    <div class="row">
                                        @foreach ($enrollmentClass as $enroll)
                                            @php
                                                // Fetch sections and lessons for the current course
                                                $sections = \App\Models\Section::with('lessons')
                                                    ->where('course_id', $enroll->studentEnrollment->course->id)
                                                    ->get();
                                                // Count the total number of lessons
                                                $lessonCount = $sections->sum(function ($section) {
                                                    return $section->lessons->count();
                                                });
                                            @endphp
                                            <div class="col-xl-6 col-lg-12 col-md-6">
                                                <div class="tpcourse mb-40">
                                                    <div class="tpcourse__thumb p-relative w-img fix">
                                                        @if ($enroll->studentEnrollment->course->media)
                                                            <a href="#">
                                                                <img src="{{ asset('uploaded_files/course_thumbnails/' . $enroll->studentEnrollment->course->media->course_thumbnail) }}"
                                                                    alt="course-thumb">
                                                            </a>
                                                            <div class="tpcourse__tag">
                                                                <a href="#"><i class="fi fi-rr-heart"></i></a>
                                                            </div>
                                                            <div class="tpcourse__img-icon">
                                                                <img src="{{ asset('uploaded_files/course_thumbnails/' . $enroll->studentEnrollment->course->media->course_thumbnail) }}"
                                                                    alt="course-avatar">
                                                            </div>
                                                        @else
                                                            <a href="#">
                                                                <img src="{{ asset('default/path/to/default-thumbnail.jpg') }}"
                                                                    alt="default-course-thumb">
                                                            </a>
                                                            <div class="tpcourse__tag">
                                                                <a href="#"><i class="fi fi-rr-heart"></i></a>
                                                            </div>
                                                            <div class="tpcourse__img-icon">
                                                                <img src="{{ asset('default/path/to/default-thumbnail.jpg') }}"
                                                                    alt="default-course-avatar">
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="tpcourse__content-2">
                                                        <div class="tpcourse__category mb-10">
                                                            <ul class="tpcourse__price-list d-flex align-items-center">
                                                                <li><a class="c-color-red"
                                                                        href="#">{{ $enroll->studentEnrollment->course->categories->first()->category_name ?? 'Unknown Category' }}</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="tpcourse__ava-title mb-15">
                                                            <h4 class="tpcourse__title">
                                                                <a
                                                                    href="{{ route('course.metarials', $enroll->studentEnrollment->course->id) }}">
                                                                    {{ $enroll->studentEnrollment->course->course_title }}
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div
                                                            class="tpcourse__rating d-flex align-items-center justify-content-between">
                                                            <div class="tpcourse__rating-icon d-flex flex-row">
                                                                <img src="{{ asset('/') }}frontend/assets/img/icon/c-meta-01.png"
                                                                    alt="meta-icon">
                                                                <p class="fs-6">&nbsp;Lessons ({{ $lessonCount }})</p>
                                                            </div>
                                                            <div class="tpcourse__pricing">
                                                                <div class="tp-suit__btn pt-5">
                                                                    @if ($sections->isNotEmpty() && $sections->first()->lessons->isNotEmpty())
                                                                        <a href="{{ route('course.lesson', $sections->first()->lessons->first()->lession_title) }}"
                                                                            class="tp-border-btn">Start Now</a>
                                                                    @else
                                                                        <span class="text-danger">No lessons
                                                                            available</span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                    <div class="basic-pagination">
                                        <nav>
                                            <ul>
                                                <li>
                                                    <a href="blog.html">
                                                        <i class="far fa-angle-left"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <span class="current">1</span>
                                                </li>
                                                <li>
                                                    <a href="blog.html">2</a>
                                                </li>
                                                <li>
                                                    <a href="blog.html">3</a>
                                                </li>
                                                <li>
                                                    <a href="blog.html">
                                                        <i class="far fa-angle-right"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                @else
                                    <div class="basic-pagination mt-60">
                                        <h4 class="text-center mb-3 text-danger mt-3">Your enroll status is waiting</h4>
                                    </div>

                                @endif



                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- instructor-portfolio-area-end -->


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
