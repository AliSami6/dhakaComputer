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
                        <div class="col-md-3">
                            <div class="card category_card">
                                <div class="card-body category_body d-flex ">
                                    <div class="category_icon">
                                        <a class="laptop" href=""><i class="fas fa-laptop"></i></a>
                                    </div>
                                    <div class="category_name">
                                        <h6>Web & App Development</h6>
                                        <p>• ২৯ কোর্স • ৫ ওয়ার্কশপ</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card category_card ">
                                <div class="card-body category_body d-flex ">
                                    <div class="category_icon">
                                        <a class="laptop" href=""><i class="fas fa-bell"></i></a>
                                    </div>
                                    <div class="category_name">
                                        <h6>Product Management & Design</h6>
                                        <p>• ১২ কোর্স • ৩ ওয়ার্কশপ</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card category_card">
                                <div class="card-body category_body d-flex ">
                                    <div class="category_icon">
                                        <a class="laptop" href=""><i class="fas fa-briefcase"></i></a>
                                    </div>
                                    <div class="category_name">
                                        <h6>Business & Marketing</h6>
                                        <p>• ৭ কোর্স</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card category_card">
                                <div class="card-body category_body d-flex ">
                                    <div class="category_icon">
                                        <a class="laptop" href=""><i class="fas fa-server"></i></a>
                                    </div>
                                    <div class="category_name">
                                        <h6>Data Engineering</h6>
                                        <p>• ৬ কোর্স • ১ ওয়ার্কশপ</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="courses">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card course_card" style="width: 18rem;">
                                <div class="card-header">
                                    <div class="course_img">
                                        <img src="{{ asset('frontend') }}/assets/images/2024-06-05T12-44-58.450Z-Full-Stack-Web-Development-with-Python-and-Django-2.jpg"
                                            class="card-img-top" alt="...">
                                    </div>
                                    <div class="course_btn">
                                        <a href="">ব্যাচ ২</a>
                                        <a href=""><i class="fab fa-mendeley"></i>১০৮ সিট বাকি</a>
                                        <a href=""><i class="fas fa-clock"></i>১৭ দিন বাকি</a>
                                    </div>
                                </div>
                                <div class="card-body course_text">
                                    <h5 class="card-title">Full Stack Web Development with Python, Django & React</h5>
                                    <a href="#" class="btn btn-secondary">বিস্তারিত দেখি<i
                                            class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card course_card" style="width: 18rem;">
                                <div class="card-header">
                                    <div class="course_img">
                                        <img src="{{ asset('frontend') }}/assets/images/2024-06-05T12-44-58.450Z-Full-Stack-Web-Development-with-Python-and-Django-2.jpg"
                                            class="card-img-top" alt="...">
                                    </div>
                                    <div class="course_btn">
                                        <a href="">ব্যাচ ২</a>
                                        <a href=""><i class="fab fa-mendeley"></i>১০৮ সিট বাকি</a>
                                        <a href=""><i class="fas fa-clock"></i>১৭ দিন বাকি</a>
                                    </div>
                                </div>
                                <div class="card-body course_text">
                                    <h5 class="card-title">Full Stack Web Development with Python, Django & React</h5>
                                    <a href="#" class="btn btn-secondary">বিস্তারিত দেখি<i
                                            class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card course_card" style="width: 18rem;">
                                <div class="card-header">
                                    <div class="course_img">
                                        <img src="{{ asset('frontend') }}/assets/images/2024-06-05T12-44-58.450Z-Full-Stack-Web-Development-with-Python-and-Django-2.jpg"
                                            class="card-img-top" alt="...">
                                    </div>
                                    <div class="course_btn">
                                        <a href="">ব্যাচ ২</a>
                                        <a href=""><i class="fab fa-mendeley"></i>১০৮ সিট বাকি</a>
                                        <a href=""><i class="fas fa-clock"></i>১৭ দিন বাকি</a>
                                    </div>
                                </div>
                                <div class="card-body course_text">
                                    <h5 class="card-title">Full Stack Web Development with Python, Django & React</h5>
                                    <a href="#" class="btn btn-secondary">বিস্তারিত দেখি<i
                                            class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card course_card" style="width: 18rem;">
                                <div class="card-header">
                                    <div class="course_img">
                                        <img src="{{ asset('frontend') }}/assets/images/2024-06-05T12-44-58.450Z-Full-Stack-Web-Development-with-Python-and-Django-2.jpg"
                                            class="card-img-top" alt="...">
                                    </div>
                                    <div class="course_btn">
                                        <a href="">ব্যাচ ২</a>
                                        <a href=""><i class="fab fa-mendeley"></i>১০৮ সিট বাকি</a>
                                        <a href=""><i class="fas fa-clock"></i>১৭ দিন বাকি</a>
                                    </div>
                                </div>
                                <div class="card-body course_text">
                                    <h5 class="card-title">Full Stack Web Development with Python, Django & React</h5>
                                    <a href="#" class="btn btn-secondary">বিস্তারিত দেখি<i
                                            class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card course_card" style="width: 18rem;">
                                <div class="card-header">
                                    <div class="course_img">
                                        <img src="{{ asset('frontend') }}/assets/images/2024-06-05T12-44-58.450Z-Full-Stack-Web-Development-with-Python-and-Django-2.jpg"
                                            class="card-img-top" alt="...">
                                    </div>
                                    <div class="course_btn">
                                        <a href="">ব্যাচ ২</a>
                                        <a href=""><i class="fab fa-mendeley"></i>১০৮ সিট বাকি</a>
                                        <a href=""><i class="fas fa-clock"></i>১৭ দিন বাকি</a>
                                    </div>
                                </div>
                                <div class="card-body course_text">
                                    <h5 class="card-title">Full Stack Web Development with Python, Django & React</h5>
                                    <a href="#" class="btn btn-secondary">বিস্তারিত দেখি<i
                                            class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card course_card" style="width: 18rem;">
                                <div class="card-header">
                                    <div class="course_img">
                                        <img src="{{ asset('frontend') }}/assets/images/2024-06-05T12-44-58.450Z-Full-Stack-Web-Development-with-Python-and-Django-2.jpg"
                                            class="card-img-top" alt="...">
                                    </div>
                                    <div class="course_btn">
                                        <a href="">ব্যাচ ২</a>
                                        <a href=""><i class="fab fa-mendeley"></i>১০৮ সিট বাকি</a>
                                        <a href=""><i class="fas fa-clock"></i>১৭ দিন বাকি</a>
                                    </div>
                                </div>
                                <div class="card-body course_text">
                                    <h5 class="card-title">Full Stack Web Development with Python, Django & React</h5>
                                    <a href="#" class="btn btn-secondary">বিস্তারিত দেখি<i
                                            class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card course_card" style="width: 18rem;">
                                <div class="card-header">
                                    <div class="course_img">
                                        <img src="{{ asset('frontend') }}/assets/images/2024-06-05T12-44-58.450Z-Full-Stack-Web-Development-with-Python-and-Django-2.jpg"
                                            class="card-img-top" alt="...">
                                    </div>
                                    <div class="course_btn">
                                        <a href="">ব্যাচ ২</a>
                                        <a href=""><i class="fab fa-mendeley"></i>১০৮ সিট বাকি</a>
                                        <a href=""><i class="fas fa-clock"></i>১৭ দিন বাকি</a>
                                    </div>
                                </div>
                                <div class="card-body course_text">
                                    <h5 class="card-title">Full Stack Web Development with Python, Django & React</h5>
                                    <a href="#" class="btn btn-secondary">বিস্তারিত দেখি<i
                                            class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card course_card" style="width: 18rem;">
                                <div class="card-header">
                                    <div class="course_img">
                                        <img src="{{ asset('frontend') }}/assets/images/2024-06-05T12-44-58.450Z-Full-Stack-Web-Development-with-Python-and-Django-2.jpg"
                                            class="card-img-top" alt="...">
                                    </div>
                                    <div class="course_btn">
                                        <a href="">ব্যাচ ২</a>
                                        <a href=""><i class="fab fa-mendeley"></i>১০৮ সিট বাকি</a>
                                        <a href=""><i class="fas fa-clock"></i>১৭ দিন বাকি</a>
                                    </div>
                                </div>
                                <div class="card-body course_text">
                                    <h5 class="card-title">Full Stack Web Development with Python, Django & React</h5>
                                    <a href="#" class="btn btn-secondary">বিস্তারিত দেখি<i
                                            class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="all_course_button">
                    <a href="" class="btn btn-secondary">আরও দেখুন<i class="fas fa-arrow-right"></i></a>
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
