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
            <h4>{{ $currentCategory->category_name ?? '' }}</h4>
            <span>আমাদের কোর্সসমুহ <i class="fas fa-book"></i></span>
        </div>
        <div class="row all_courses_category">
            @if ($categories->isNotEmpty())
                @foreach ($categories as $category)
                    <div class="col-md-3">
                        <div class="card category_card">
                            <div class="card-body category_body d-flex">
                                <div class="category_icon">
                                    <a class="laptop pr-1" href="{{ route('course.category_list', $category->id) }}">
                                        @if (!empty($category->cat_icon))
                                            <img src="{{ asset('uploaded_files/category/' . $category->cat_icon) }}"
                                                 height="40" alt="{{ $category->category_name }}" />
                                        @else
                                            <img src="{{ asset('/') }}frontend/assets/images/application-development.png"
                                                 height="40" alt="Default Icon" />
                                        @endif
                                    </a>
                                </div>
                                <div class="category_name">
                                    <h6>{{ $category->category_name }}</h6>
                                    <p class="pl-1">{{ $category->courses->count() }} কোর্স</p>
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
                                             class="card-img-top" alt="{{ $course->course_title }}">
                                    @endforeach
                                @else
                                    <img src="{{ asset('frontend/assets/images/2024-06-05T12-44-58.450Z-Full-Stack-Web-Development-with-Python-and-Django-2.jpg') }}"
                                         class="card-img-top" alt="Default Image">
                                @endif
                                @if ($course->batch->isNotEmpty())
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
                                <a href="{{ route('course.details', $course->slug) }}" class="btn btn-secondary">বিস্তারিত দেখি<i class="fas fa-arrow-right"></i></a>
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
      
          document.addEventListener('DOMContentLoaded', function () {
            const countdownElements = document.querySelectorAll('.countdown');

            countdownElements.forEach(function (element) {
                const startDate = new Date(element.getAttribute('data-start-date'));
                const currentDate = new Date();
                
                // Calculate the difference in days
                const diffInMilliseconds = startDate - currentDate;
                const diffInDays = Math.ceil(diffInMilliseconds / (1000 * 60 * 60 * 24));

                // Update the span with the calculated days
                element.querySelector('.days-left').textContent = diffInDays;
            });
        });
    </script>
@endpush
