@extends('layouts.frontend')
@section('title', 'All Courses')
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
                            <h3 class="breadcrumb__title mb-20">Course List</h3>
                            <div class="breadcrumb__list">
                                <span><a href="index.html">Home</a></span>
                                <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                                <span><a href="course-grid.html">Courses</a></span>
                                <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                                <span class="sub-page-black">Course List</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- feature-area -->
        <section class="feature-area pt-115 pb-90">
            <div class="container">
                <div class="tp-feature-cn">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="tpfea tp-feature-item text-center mb-30">
                                <div class="tpfea__icon mb-25">
                                    <i class="fi fi-rr-paper-plane"></i>
                                </div>
                                <div class="tpfea__text">
                                    <h5 class="tpfea__title mb-5">Online Courses</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="tpfea tp-feature-item text-center mb-30">
                                <div class="tpfea__icon mb-25">
                                    <i class="fi fi-rr-user"></i>
                                </div>
                                <div class="tpfea__text">
                                    <h5 class="tpfea__title mb-5">Expert Trainer</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="tpfea tp-feature-item text-center mb-30">
                                <div class="tpfea__icon mb-25">
                                    <i class="fi fi-rr-document"></i>
                                </div>
                                <div class="tpfea__text">
                                    <h5 class="tpfea__title mb-5">Get Certificate</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="tpfea tp-feature-item text-center mb-30">
                                <div class="tpfea__icon mb-25">
                                    <i class="fi fi-rr-calendar"></i>
                                </div>
                                <div class="tpfea__text">
                                    <h5 class="tpfea__title mb-5">Life Time Access</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature-area-end -->

        <!-- course-list-area -->
        <section class="course-list-area pb-120 "style="margin-top:-2%">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-12">
                        <div class="section-title mb-60">
                            <span class="tp-sub-title-box mb-15">Our Courses</span>
                            <h2 class="tp-section-title">Explore Popular Courses</h2>
                        </div>
                    </div>
                </div>


                <div class="row mb-20">
                    <div class="col-lg-4 col-md-12 courser-list-width mb-60">
                        <div class="course-sidebar">
                            <div class="course-sidebar__cata mb-50">
                                <h4 class="course-sidebar__title mb-35">Category</h4>
                                <div class="course-sidebar__select-list">
                                    @if ($categories->isNotEmpty())
                                        <select name="category" id="category">
                                            <option value="all">All Categories</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                            @endforeach
                                        </select>
                                    @endif
                                </div>
                            </div>
                            <div class="course-sidebar__widget mb-50">
                                <div class="course-sidebar__info c-info-list">
                                    <h4 class="course-sidebar__title mb-35">Course Level</h4>
                                    <!-- Levels Checkboxes -->
                                    @foreach (['All Levels', 'Beginner', 'Intermediate', 'Advanced'] as $level)
                                        <div class="form-check">
                                            <input class="form-check-input levels" type="checkbox" name="level[]"
                                                value="{{ $level }}" id="level-{{ $level }}">
                                            <label class="form-check-label"
                                                for="level-{{ $level }}">{{ $level }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="course-sidebar__widget mb-50">
                                <div class="course-sidebar__info c-info-list">
                                    <h4 class="course-sidebar__title mb-30">Course Price</h4>
                                    <!-- Course Price Checkboxes -->
                                    @foreach ([1 => 'Free'] as $value => $label)
                                        <div class="form-check">
                                            <input class="form-check-input one" type="checkbox" name="is_free[]"
                                                value="{{ $value }}" id="price-{{ $value }}">
                                            <label class="form-check-label"
                                                for="price-{{ $value }}">{{ $label }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="course-sidebar__widget mb-50">
                                <div class="course-sidebar__info c-info-list">
                                    <h4 class="course-sidebar__title mb-35">Instructor</h4>
                                    @if ($instructors->isNotEmpty())
                                        @foreach ($instructors as $instructor)
                                            <div class="form-check">
                                                <input class="form-check-input instructor" type="checkbox"
                                                    name="instructors" value="{{ $instructor->id }}"
                                                    id="instructor-{{ $instructor->id }}">
                                                <label class="form-check-label"
                                                    for="instructor-{{ $instructor->id }}">{{ $instructor->first_name . ' ' . $instructor->last_name }}</label>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-8 col-md-12 course-item-width coursePriceOrFilterOrCategory">
                        @if ($courses->isNotEmpty())
                            @foreach ($courses as $course)
                                <div class="tpcourse tp-list-course mb-40 " id="CourseFilter">
                                    <div class="row g-0 ">
                                        <div class="col-xl-4 course-thumb-width">
                                            <div class="tpcourse__thumb p-relative w-img fix">
                                                <a href="{{ route('course.details', $course->meta->keyword) }}"><img
                                                        src="{{ asset('uploaded_files/course_thumbnails/' . $course->media->course_thumbnail) }}"
                                                        alt="course-thumb"></a>
                                            </div>
                                        </div>
                                        <div class="col-xl-8 course-text-width">
                                            <div class="course-list-content">
                                                <div class="tpcourse__category mb-10">
                                                    <ul class="tpcourse__price-list d-flex align-items-center">
                                                        <li>
                                                            <a class="c-color-green"
                                                                href="#">{{ $course->categories->category_name }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="tpcourse__ava-title mb-15">
                                                    <h4 class="tpcourse__title tp-cours-title-color"><a
                                                            href="{{ route('course.details', $course->meta->keyword) }}">{{ $course->course_title }}</a>
                                                    </h4>
                                                </div>
                                                <div
                                                    class="tpcourse__rating d-flex align-items-center justify-content-between">
                                                    <div class="tpcourse__pricing">
                                                        <h5 class="price-title">$ {{ $course->prices->price }}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="basic-pagination text-center">
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
            </div>
        </section>
        <!-- course-list-area-end -->

        <!-- suitable-area -->
        <section class="suitable-area bg-bottom grey-bg pt-115 pb-90"
            data-background="{{ asset('/') }}frontend/assets/img/bg/shape-bg-1.png">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-12">
                        <div class="section-title mb-60">
                            <span class="tp-sub-title-box mb-15">Join With Us</span>
                            <h2 class="tp-section-title">Which One is Suitable For You?</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-12">
                        <div class="tp-suit mb-30 p-relative white-bg">
                            <div class="tp-suit__content">
                                <h4 class="tp-suit__title">Do you want to <span>Learn</span> here?</h4>
                                <p>Dramatically supply transpa deliverables before & you.</p>
                                <div class="tp-suit__btn pt-5">
                                    <a href="contact.html" class="tp-border-btn">Join Now</a>
                                </div>
                            </div>
                            <div class="tp-suit__img">
                                <img src="{{ asset('/') }}frontend/assets/img/bg/suit-bg-01.png" alt="suitable-img">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                        <div class="tp-suit mb-30 p-relative white-bg">
                            <div class="tp-suit__content">
                                <h4 class="tp-suit__title">Do you want to <span>Teach</span> here?</h4>
                                <p>Dramatically supply transpa deliverables before & you.</p>
                                <div class="tp-suit__btn pt-5">
                                    <a href="contact.html" class="tp-border-btn">Join Now</a>
                                </div>
                            </div>
                            <div class="tp-suit__tech">
                                <img src="{{ asset('/') }}frontend/assets/img/bg/suit-bg-02.png" alt="suitable-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- suitable-area-end -->

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
    <script>
        $(document).ready(function() {
            function fetchCourses() {
                let category = $('#category').val();
                let selectedLevels = [];
                let selectedCoursePrices = [];
                let selectedInstructors = [];

                $('.levels:checked').each(function() {
                    selectedLevels.push($(this).val());
                });

                $('.one:checked').each(function() {
                    selectedCoursePrices.push($(this).val());
                });

                $('.instructor:checked').each(function() {
                    selectedInstructors.push($(this).val());
                });

                $.ajax({
                    url: '/course_filter',
                    method: 'GET',
                    data: {
                        category: category,
                        level: selectedLevels,
                        is_free: selectedCoursePrices,
                        instructors: selectedInstructors
                    },
                    success: function(response) {
                        $('.coursePriceOrFilterOrCategory').empty();
                        if (response.courses.length) {
                            response.courses.forEach(function(course) {
                                let courseHtml = `
                            <div class="tpcourse tp-list-course mb-40" id="CourseFilter">
                                <div class="row g-0">
                                    <div class="col-xl-4 course-thumb-width">
                                        <div class="tpcourse__thumb p-relative w-img fix">
                                            <a href="/course_details/${course.meta.keyword}">
                                                <img src="/uploaded_files/course_thumbnails/${course.media.course_thumbnail}" alt="course-thumb">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 course-text-width">
                                        <div class="course-list-content">
                                            <div class="tpcourse__category mb-10">
                                                <ul class="tpcourse__price-list d-flex align-items-center">
                                                    <li>
                                                        <a class="c-color-green">${course.categories.category_name}</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tpcourse__ava-title mb-15">
                                                <h4 class="tpcourse__title tp-cours-title-color">
                                                    <a href="/course_details/${course.meta.keyword}">${course.course_title}</a>
                                                </h4>
                                            </div>
                                            <div class="tpcourse__rating d-flex align-items-center justify-content-between">
                                                <div class="tpcourse__pricing">
                                                    <h5 class="price-title">$${course.prices.price}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `;
                                $('.coursePriceOrFilterOrCategory').append(courseHtml);
                            });
                        } else {
                            $('.coursePriceOrFilterOrCategory').append(
                                '<p>No courses found matching the criteria.</p>');
                        }
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
            }

            $('#category').change(fetchCourses);
            $('.levels').change(fetchCourses);
            $('.one').change(fetchCourses);
            $('.instructor').change(fetchCourses);
        });
    </script>
@endpush
