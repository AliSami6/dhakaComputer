@extends('layouts.frontend')
@section('title', 'Course Details')
@push('styles')
    <style>

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
                        <div class="breadcrumb__content position-relative z-index-1">
                            <h3 class="breadcrumb__title mb-20">{{ $my_course->course_title }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- course-panel -->
        <section class="course-panel position-relative" style="margin-top: -8%;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="c-details-wrapper">
                            <div class="card border rounded-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="d-flex flex-column mt-4 flex-fill pr-md-5">
                                                <h5 class="card-title mb-4 fs-3">Course Progress</h5>
                                                <h6 class="card-subtitle mb-2 text-muted fs-5 text-gray-400">
                                                    You have successfully enrolled in the course
                                                </h6>
                                            </div>
                                            
                                            
                                        </div>
                                        <div class="col-md-5">
                                            <a href="#" class="float-end rounded border d-inline-block">
                                                <img src="{{ asset('/') }}frontend/assets/img/about/about-3-shape.png"
                                                    class="img-fluid rounded" alt="video image" height="100px">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- course-panel-end -->

        <!-- course-details-area -->
        <section class="c-details-area pt-120 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="c-details-wrapper mr-25">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="fs-4"> Course Elements</h4>
                                </div>
                                <div class="card-body">
                                    @if ($my_course)
                                        <div class="accordion pb-20" id="accordionCourse{{ $my_course->id }}">
                                            @foreach ($my_course->sections as $section)
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingSection{{ $section->id }}">
                                                        <button class="accordion-button" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#collapseSection{{ $section->id }}"
                                                            aria-expanded="true"
                                                            aria-controls="collapseSection{{ $section->id }}">
                                                            {{ $section->section_title }}
                                                        </button>
                                                    </h2>
                                                    <div id="collapseSection{{ $section->id }}"
                                                        class="accordion-collapse collapse"
                                                        aria-labelledby="headingSection{{ $section->id }}"
                                                        data-bs-parent="#accordionCourse{{ $my_course->id }}">
                                                        <div class="accordion-body">
                                                            @if ($section->lessons->isNotEmpty())
                                                                @foreach ($section->lessons as $lesson)
                                                                    <div class="lesson-item">
                                                                        <a
                                                                            href="{{ route('course.lesson', $lesson->lession_title) }}">
                                                                            <i class="fa-light fa-play"></i>
                                                                            <label>Lesson: </label>
                                                                            {{ $lesson->lession_title }}
                                                                        </a>
                                                                    </div>
                                                                @endforeach
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="cor-details-instructor mb-40 mt-25">
                                <h4 class="tp-c-details-title mb-40">Instructor</h4>
                                <div class="course-instructor-details d-flex f-wrap align-items-center">
                                    @foreach ($my_course->instructors as $instructorCourse)
                                        <div class="course-avata mr-30 mb-20">
                                            <img src="{{ asset('uploaded_files/Instructor/' . $instructorCourse->instructor->image) }}"
                                                alt="avata-thumb">
                                        </div>
                                        <div class="course-avatar-details mb-20">
                                            <h5 class="c-avata-title mb-10">
                                                {{ $instructorCourse->instructor->first_name . ' ' . $instructorCourse->instructor->last_name }}
                                            </h5>
                                            <p>{{ $instructorCourse->instructor->skill_level }}</p>
                                            <div class="c-details-stu">
                                                <ul>
                                                    <li class="d-flex align-items-center"><span>0 Students</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    @endforeach
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