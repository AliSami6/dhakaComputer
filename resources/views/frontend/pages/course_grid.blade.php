@extends('layouts.frontend')
@section('title', 'All Courses')
@push('styles')
@endpush
@section('content')
    <!-- course start -->
    <div class="container">
        <section id="course_section">
            <div class="course_home">
                <section class="course_category">
                    <div class="course_title">
                        <span>আমাদের কোর্সসমুহ <i class="fas fa-book"></i></span>
                    </div>
                    <div class="row all_courses_category">
                        
                        @if ($categories->isNotEmpty())
                        @foreach ($categories as $category)
                            <div class="col-md-3">
                                <div class="card category_card">
                                    <div class="card-body category_body d-flex">
                                        <div class="category_icon">
                                            <a class="laptop pr-1" href="">
                                                @if (isset($category))
                                                    <img src="{{ asset('uploaded_files/category/' . $category->cat_icon) }}"
                                                        height="40" alt="" />
                                                @else
                                                    <img src="{{ asset('/') }}frontend/assets/images/application-development.png"
                                                        height="40" alt="" />
                                                @endif
                                            </a>
                                        </div>
                                        <div class="category_name">
                                            <h6>{{ $category->category_name ?? '' }}</h6>
                                            <p class="pl-1"> {{ $category->courses->count() ?? '' }} কোর্স </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif

                    </div>
                </section>
                <section class="courses">
                    <div class="row">
                        @if ($courses->isNotEmpty())
                        @foreach ($courses as $course)
                            <div class="col-md-3">
                                <div class="card course_card">
                                    <div class="card-header">
                                      
                                            @if ($course->media->isNotEmpty())
                                                @foreach ($course->media as $media)
                                                    <img src="{{ asset('uploaded_files/course_thumbnails/' . $media->course_thumbnail) }}"
                                                        class="card-img-top" alt="...">
                                                @endforeach
                                            @else
                                                <img src="{{ asset('frontend/assets/images/2024-06-05T12-44-58.450Z-Full-Stack-Web-Development-with-Python-and-Django-2.jpg') }}"
                                                    class="card-img-top" alt="...">
                                            @endif
                                            @if ($course->media->isNotEmpty())
                                            @foreach ($course->batch as $batch)
                                        <div class="course_btn">
                                            <a href="">{{ $batch->batch_no ?? '' }}</a>
                                            <a href=""><i class="fab fa-mendeley"></i>{{ $batch->total_seat ?? '' }} সিট বাকি</a>
                                          
                                            
                                            <a href="" class="countdown" data-start-date="{{ $batch->class_start }}">
                                                <i class="fas fa-clock"></i>
                                                <span class="days-left"></span> দিন বাকি
                                            </a>
                                        </div>
                                        @endforeach
                                        @endif
                                    </div>
                                    <div class="card-body course_text">
                                        <h5 class="card-title">{{ $course->course_title ?? '' }}</h5>
                                        <a href="{{ route('course.details',$course->slug) }}" class="btn btn-secondary">বিস্তারিত দেখি<i
                                                class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    </div>
                </section>
                <div class="all_course_button">
                    <a href="{{ route('course.list') }}" class="btn btn-secondary">আরও দেখুন<i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </section>
    </div>

    <!-- course end -->
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
