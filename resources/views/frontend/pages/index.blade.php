@extends('layouts.frontend')
@section('title', 'Home Page')
@push('styles')
@endpush
@section('content')
    <main>

        <!-- banner-area -->
        <section class="banner-area fix p-relative">
            <div class="banner-bg"
                @if (isset($sliders->background_image)) data-background="{{ asset('uploaded_files/slider/background/' . $sliders->background_image) }}"  @else data-background="{{ asset('frontend') }}/assets/img/banner/banner-01.jpg" @endif>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-8">
                            <div class="hero-content">
                                @if ($sliders)
                                    <h2 class="hero-title mb-35">{{ $sliders->hero_title }},
                                        <i>{{ $sliders->hero_subtitle }}</i>.</h2>

                                    <p>{{ $sliders->hero_content }}.</p>
                                    <div class="tp-banner-btn">
                                        <a href="{{ $sliders->button_url }}" class="tp-btn">{{ $sliders->button_text }}</a>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="banner-info d-none">
                                <ul>
                                    <li><span>235K</span>Worldwide Students</li>
                                    <li><span>3.5K</span>Free Pro Courses</li>
                                    <li><span>4.7<i class="fi fi-rr-star "></i></span>Worldwide Review</li>
                                </ul>
                            </div>
                        </div>
                        <div class="banner-shape d-none d-lg-block">
                            <img src="{{ isset($sliders) && $sliders->slider_image ? asset('uploaded_files/slider/' . $sliders->slider_image) : asset('frontend/assets/img/banner/learn.png') }}"
                                alt="banner-shape" class="b-shape">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-area-end -->

        <!-- feature-area -->
        <section class="tp-feature-area grey-bg pt-115 pb-90 pl-205 pr-205 bg-bottom"
            data-background="{{ asset('frontend') }}/assets/img/bg/shape-bg-1.png">
            <div class="container-fluid">
                <div class="row text-center">
                    <div class="col-lg-12">
                        <div class="section-title mb-60">
                            <span class="tp-sub-title mb-20">What We Offer</span>
                            <h2 class="tp-section-title">For Your Future Learning.</h2>
                        </div>
                    </div>
                </div>
                <div class="tp-feature-cn">
                    <div class="row text-center">
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="tpfea mb-30">
                                <div class="tpfea__icon online_course mb-25">
                                    <i class="fi fi-rr-paper-plane"></i>
                                </div>
                                <div class="tpfea__text">
                                    <h5 class="tpfea__title mb-20">Online Courses</h5>
                                    <p>Interactively provide access world class materials for unique catalysts for change
                                        my ocardinat.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="tpfea mb-30">
                                <div class="tpfea__icon online_course mb-25">
                                    <i class="fi fi-rr-user"></i>
                                </div>
                                <div class="tpfea__text">
                                    <h5 class="tpfea__title mb-20">Expert Instructor</h5>
                                    <p>Interactively provide access world class materials for unique catalysts for change
                                        my ocardinat.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="tpfea mb-30">
                                <div class="tpfea__icon online_course mb-25">
                                    <i class="fi fi-rr-document"></i>
                                </div>
                                <div class="tpfea__text">
                                    <h5 class="tpfea__title mb-20">Get Certificate</h5>
                                    <p>Interactively provide access world class materials for unique catalysts for change
                                        my ocardinat.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="tpfea mb-30">
                                <div class="tpfea__icon online_course mb-25">
                                    <i class="fi fi-rr-calendar"></i>
                                </div>
                                <div class="tpfea__text">
                                    <h5 class="tpfea__title mb-20">Life Time Access</h5>
                                    <p>Interactively provide access world class materials for unique catalysts for change
                                        my ocardinat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature-area-end -->

        <!-- about-area -->
        <!-- <section class="tp-about-area pt-120 pb-90">
                <div class="container">
                    <div class="row align-items-center">
                    <div class="col-xxl-7 col-xl-6 col-lg-6 col-md-6">
                        <div class="tp-about-img p-relative pb-30 ml-10">
                            <img src="assets/img/about/about-img.png" alt="about-img">
                            <div class="tp-about-line-shape d-none d-md-block">
                                <img src="assets/img/about/about-shape-03.png" alt="about-shape" class="tp-aline-one">
                                <img src="assets/img/about/about-shape-04.png" alt="about-shape" class="tp-aline-two">
                                <img src="assets/img/about/about-shape-05.png" alt="about-shape" class="tp-aline-three">
                            </div>
                            <div class="tp-about-shape  d-none d-xl-block">
                                <img src="assets/img/about/about-shape-01.png" alt="about-shape" class="a-shape-one">
                                <img src="assets/img/about/about-shape-02.png" alt="about-shape" class="a-shape-two">
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-6">
                        <div class="tp-about-content pb-30 ml-80">
                            <div class="section-title mb-55">
                                <span class="tp-sub-title mb-20">About Our Courses</span>
                                <h2 class="tp-section-title mb-15">Explore Thousands of Creative Classes.</h2>
                                <p>Dramatically supply transparent deliverables beforese backward comp internal or "organic" sources. Comp transparent leverage other.</p>
                            </div>
                            <div class="about-btn">
                                <a href="about.html" class="tp-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </section> -->
        <!-- about-area-end -->

        <!-- catrgory-area -->
        <section class="tp-category-area bg-bottom grey-bg pt-110 pb-80"
            data-background="{{ asset('frontend') }}/assets/img/bg/shape-bg-1.png">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-12">
                        <div class="section-title mb-65">
                            <h2 class="tp-section-title">Top Categories</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @if ($categories->isNotEmpty())
                        @foreach ($categories as $category)
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="tp-cat-item mb-40 d-flex align-items-center">
                                    <div class="tp-category-icon mr-15">
                                        <img src="{{ asset('uploaded_files/category/' . $category->cat_icon) }}"
                                            alt="category-img" />
                                    </div>
                                    <h4 class="tp-category-title">
                                        <a href="{{ route('course.category_list',$category->id) }}">{{ $category->category_name }} </a>
                                    </h4>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    {{-- <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="tp-cat-item mb-40 d-flex align-items-center">
                            <div class="tp-category-icon mr-15">
                                <img src="{{ asset('frontend') }}/assets/img/category/category-02.png"
                                    alt="category-img" />
                            </div>
                            <h4 class="tp-category-title">
                                <a href="course-grid.html">German Language </a>
                            </h4>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="tp-cat-item mb-40 d-flex align-items-center">
                            <div class="tp-category-icon mr-15">
                                <img src="{{ asset('frontend') }}/assets/img/category/category-03.png"
                                    alt="category-img" />
                            </div>
                            <h4 class="tp-category-title">
                                <a href="course-grid.html">Chinese Language </a>
                            </h4>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="tp-cat-item mb-40 d-flex align-items-center">
                            <div class="tp-category-icon mr-15">
                                <img src="{{ asset('frontend') }}/assets/img/category/category-04.png"
                                    alt="category-img" />
                            </div>
                            <h4 class="tp-category-title">
                                <a href="course-grid.html"> Korean Language </a>
                            </h4>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="tp-cat-item mb-40 d-flex align-items-center">
                            <div class="tp-category-icon mr-15">
                                <img src="{{ asset('frontend') }}/assets/img/category/category-05.png"
                                    alt="category-img" />
                            </div>
                            <h4 class="tp-category-title">
                                <a href="course-grid.html">Japanese Language </a>
                            </h4>
                        </div>
                    </div> --}}
                    <!-- <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="tp-cat-item mb-40 d-flex align-items-center">
                        <div class="tp-category-icon mr-15">
                        <img
                            src="assets/img/category/category-06.png"
                            alt="category-img"
                        />
                        </div>
                        <h4 class="tp-category-title">
                        <a href="course-grid.html">Business Sys</a>
                        </h4>
                    </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="tp-cat-item mb-40 d-flex align-items-center">
                        <div class="tp-category-icon mr-15">
                        <img
                            src="assets/img/category/category-07.png"
                            alt="category-img"
                        />
                        </div>
                        <h4 class="tp-category-title">
                        <a href="course-grid.html">Photography</a>
                        </h4>
                    </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="tp-cat-item mb-40 d-flex align-items-center">
                        <div class="tp-category-icon mr-15">
                        <img
                            src="assets/img/category/category-08.png"
                            alt="category-img"
                        />
                        </div>
                        <h4 class="tp-category-title">
                        <a href="course-grid.html">Musical Intru</a>
                        </h4>
                    </div>
                    </div> -->
                </div>
            </div>
        </section>
        <!-- catrgory-area-end -->

        <!-- course-area -->
        <section class="course-area pt-115 pb-110">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title mb-65">
                            <h2 class="tp-section-title mb-20">Explore Popular Courses</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    @if ($courses->isNotEmpty())
                        @foreach ($courses as $course)
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="tpcourse mb-40">
                                    <div class="tpcourse__thumb course_img p-relative w-img fix">
                                        <a href="{{ route('course.details', $course->meta->slug) }}">
                                            <img src="{{ asset('uploaded_files/course_thumbnails/' . $course->media->course_thumbnail) ? asset('uploaded_files/course_thumbnails/' . $course->media->course_thumbnail) : asset('frontend/assets/img/course/online course.jpg') }}"
                                                alt="course-thumb">
                                        </a>
                                        <div class="tpcourse__tag">
                                            <a href="{{ route('add_to_cart', $course->id) }}"><i
                                                    class="fi fi-rr-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                    <div class="tpcourse__content">
                                        <div class="tpcourse__avatar d-flex align-items-center mb-20">
                                            <img src="{{ asset('uploaded_files/category/' . $course->categories->cat_icon) }}"
                                                alt="course-avata" width="30px;">
                                            <h4 class="tpcourse__title fs-6"><a
                                                    href="{{ route('course.details', $course->meta->slug) }}">{{ $course->categories->category_name }}</a>
                                            </h4>
                                        </div>
                                      
                                        <div class="tp-wrap-course__heading">
                                            <h4 class="tp-wrap-course__title mb-20 fs-6"><a
                                                    href="{{ route('course.details', $course->meta->slug) }}">{{ $course->course_title }}</a>
                                            </h4>
                                        </div>
                                        <div class="tpcourse__category d-flex align-items-center justify-content-between">
                                            <h5 class="tpcourse__course-price l-course">${{ $course->price }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <!--  <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="tpcourse mb-40">
                            <div class="tpcourse__thumb p-relative w-img fix">
                                <a href="#"><img src="assets/img/course/course-thumb-06.jpg" alt="course-thumb"></a>
                                <div class="tpcourse__tag">
                                <a href="#"><i class="fi fi-rr-heart"></i></a>
                                </div>
                            </div>
                            <div class="tpcourse__content">
                                <div class="tpcourse__avatar d-flex align-items-center mb-20">
                                <img src="assets/img/icon/course-avata-06.png" alt="course-avata">
                                <h4 class="tpcourse__title"><a href="#">How to Write Great Web Content - Better Search!</a></h4>
                                </div>
                                <div class="tpcourse__meta pb-15 mb-20">
                                <ul class="d-flex align-items-center">
                                    <li><img src="assets/img/icon/c-meta-01.png" alt="meta-icon"> <span>35 Classes</span></li>
                                    <li><img src="assets/img/icon/c-meta-02.png" alt="meta-icon"> <span>291 Students</span></li>
                                    <li><img src="assets/img/icon/c-meta-03.png" alt="meta-icon"> <span>4.7</span></li>
                                </ul>
                                </div>
                                <div class="tpcourse__category d-flex align-items-center justify-content-between">
                                <ul class="tpcourse__price-list d-flex align-items-center">
                                    <li><a href="#">Design</a></li>
                                    <li><a href="#">Development</a></li>
                                </ul>
                                <h5 class="tpcourse__course-price">$29.99</h5>
                                </div>
                            </div> -->
                </div>
            </div>
            </div>
            <div class="row text-center">
                <div class="col-lg-12">
                    <div class="course-btn mt-20"><a class="tp-btn" href="#">Browse All Courses</a>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!-- course-area-end -->

        <!-- choose-area -->
        <section class="choose-area pb-90">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-6 col-md-6">
                        <div class="tp-choose-img p-relative mb-30 ml-25">
                            <img src="{{ isset($chooseus) && $chooseus->choose_image ? asset('uploaded_files/choose/' . $chooseus->choose_image) : asset('frontend/assets/img/banner/n2.jpg') }}"
                                alt="{{ $chooseus->choose_title }}">
                            <div class="tpchoose-img-text d-none d-md-block">
                                <ul>
                                    <li class="m-1">
                                        <i>{{ isset($chooseus) && $chooseus->choose_years ? $chooseus->choose_years : 23 }}+</i>
                                        <p>Years Experiences</p>
                                    </li>
                                    <li>
                                        <i class="fa-light fa-check"></i>
                                        <p>Fully Safe & Secure</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-6">
                        <div class="tp-choose-content mb-30">
                            <div class="section-title mb-25">
                                <span class="tp-sub-title mb-25">Why Choose Us</span>
                                <h2 class="tp-section-title mb-20">
                                    {{ isset($chooseus) && $chooseus->choose_title ? $chooseus->choose_title : 'Why You Choose Our' }}<br>
                                    {{ isset($chooseus) && $chooseus->choose_subtitle ? $chooseus->choose_subtitle : 'Language-Next Online learning' }}
                                </h2>
                                <p> {{ isset($chooseus) && $chooseus->short_description
                                    ? $chooseus->short_description
                                    : 'Dramatically supply transparent deliverables before & 
                                                                can backward comp internal or "organic" sources.' }}.
                                </p>
                            </div>
                            <div class="tp-choose-list mb-35">
                                <ul>
                                    <li><i
                                            class="fa-light fa-check"></i>{{ isset($chooseus) && $chooseus->content_one ? $chooseus->content_one : 'Increasing Your Learning Skills' }}
                                    </li>
                                    <li><i
                                            class="fa-light fa-check"></i>{{ isset($chooseus) && $chooseus->content_two ? $chooseus->content_two : 'High Quality Video & Audio Classes' }}
                                    </li>
                                    <li><i
                                            class="fa-light fa-check"></i>{{ isset($chooseus) && $chooseus->content_three ? $chooseus->content_three : 'Finish Your Course, Get Certificate' }}
                                    </li>
                                </ul>
                            </div>
                            <div class="choose-btn">
                                <a href="{{ $chooseus->button_url }}"
                                    class="tp-btn">{{ isset($chooseus) && $chooseus->button_text ? $chooseus->button_text : 'Explore Courses' }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- choose-area-end -->

        <!-- counter-area -->
        <!-- <section class="tp-counter-area bg-bottom grey-bg pt-120 pb-60" data-background="assets/img/bg/shape-bg-1.png">
                <div class="container">
                    <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="counter-item mb-60 text-center">
                            <div class="counter-item__icon mb-25">
                                <i class="fi fi-rr-user"></i>
                            </div>
                            <div class="counter-item__content">
                                <h4 class="counter-item__title"><span class="counter">276</span>K</h4>
                                <p>Worldwide Students</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="counter-item mb-60 text-center">
                            <div class="counter-item__icon mb-25">
                                <i class="fi fi-rr-document"></i>
                            </div>
                            <div class="counter-item__content">
                                <h4 class="counter-item__title"><span class="counter">23</span>+</h4>
                                <p>Years Experience</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="counter-item mb-60 text-center">
                            <div class="counter-item__icon mb-25">
                                <i class="fi fi-rr-apps"></i>
                            </div>
                            <div class="counter-item__content">
                                <h4 class="counter-item__title"><span class="counter">735</span>+</h4>
                                <p>Professional Courses</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="counter-item mb-60 text-center">
                            <div class="counter-item__icon mb-25">
                                <i class="fi fi-rr-star"></i>
                            </div>
                            <div class="counter-item__content">
                                <h4 class="counter-item__title"><span class="counter">4.7</span>K+</h4>
                                <p>Beautiful Review</p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </section> -->
        <!-- counter-area-end -->

        <!-- instructor-area -->
        <section class="instructor-area pt-110 pb-110">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 col-md-7 col-12">
                        <div class="section-title mb-65">
                            <h2 class="tp-section-title mb-20">Our Expert Instructor</h2>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4 col-md-5 col-6">
                        <div class="tp-instruc-arrow d-flex justify-content-md-end"></div>
                    </div>
                </div>
                <div class="intruc-active mb-15 tp-slide-space">
                    @if ($instructors->isNotEmpty())
                        @foreach ($instructors as $instructor)
                            <div class="tp-instruc-item">
                                <div class="tp-instructor text-center p-relative mb-30">
                                    <div class="tp-instructor__thumb instructor_img mb-25">
                                        <img src="{{ asset('uploaded_files/Instructor/' . $instructor->image) }}"
                                            alt="instructor-profile">
                                    </div>
                                    <div class="tp-instructor__content">
                                        <h4 class="tp-instructor__title mb-20"><a
                                                href="{{ route('ins.profile', $instructor->id) }}">{{ $instructor->first_name . ' ' . $instructor->last_name }}</a>
                                        </h4>
                                        <span>Instructor</span>
                                        <div class="tp-instructor__social">
                                            <ul>
                                                <li><a href="instructor-profile.html"><i
                                                            class="fa-brands fa-facebook-f"></i></a>
                                                </li>
                                                <li><a href="instructor-profile.html"><i
                                                            class="fa-brands fa-twitter"></i></a>
                                                </li>
                                                <li><a href="instructor-profile.html"><i
                                                            class="fa-brands fa-instagram"></i></a>
                                                </li>
                                                <li><a href="instructor-profile.html"><i
                                                            class="fa-brands fa-youtube"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="instructor-btn text-center">
                            <a class="tp-btn" href="instructor.html">All Instructor</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- instructor-area-enfd -->


        <!-- course-area -->
        <section class="course-wrap-area bg-bottom grey-bg pt-115 pb-60" data-background="{{ asset('/') }}frontend/assets/img/bg/shape-bg-1.png">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-xl-6 col-lg-8 col-md-8">
                        <div class="section-title mb-65">
                            <span class="tp-sub-title-box mb-15">Free Courses</span>
                            <h2 class="tp-section-title mb-20">Free Online Courses</h2>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4 col-md-4">
                        <div class="tp-course-btn mb-40 d-flex justify-content-md-end">
                            <a class="tp-btn" href="{{ route('course.list') }}">Browse All Courses</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @if($coursesFree->isNotEmpty())
                    @foreach($coursesFree as $course_free)
                    <div class="col-lg-6 col-md-12">
                        <div class="tpcourse tp-wrap-course mb-40">
                            <div class="row">
                                <div class="col-xl-4 tpcourse-thumb-w">
                                    <div class="tpcourse__thumb p-relative w-img fix">
                                        <a href="{{ route('course.details',$course_free->meta->slug) }}"><img src="{{ asset('uploaded_files/course_thumbnails/'.$course_free->media->course_thumbnail) }}"
                                                alt="course-thumb"></a>
                                    </div>
                                </div>
                                <div class="col-xl-8 tpcourse-thumb-text">
                                    <div class="tp-wrap-course__content ml-5">
                                        <div class="tp-wrap-course__heading">
                                            <h4 class="tp-wrap-course__title mb-20"><a href="course-details.html">{{$course_free->course_title}}</a></h4>
                                        </div>
                                       
                                        <div
                                            class="tpcourse__category c-price-list d-flex align-items-center justify-content-between">
                                            <h5 class="tpcourse__course-price c-price-pac">$ {{ $course_free->price }}</h5>
                                           
                                            <ul class="tpcourse__price-list  d-flex align-items-center">
                                                <li><a href="course-details.html">{{$course_free->categories->category_name  }}</a></li>
                                             
                                            </ul>
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
        </section>
        <!-- course-area-end -->

        <!-- testimonial-area -->
        <!-- <section class="testimonial-area bg-bottom pt-110 pb-90 " data-background="assets/img/bg/shape-bg-1.png">
                <div class="container">
                    <div class="row justify-content-between">
                    <div class="col-xl-6 col-lg-8 col-md-8 col-12">
                        <div class="section-title mb-65">
                            <h2 class="tp-section-title mb-20">Our Expert Instructor</h2>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4 col-md-4 col-6">
                        <div class="tp-section-arrow d-flex justify-content-md-end mb-40"></div>
                    </div>
                    </div>
                    <div class="testimonial-active tp-slide-space">
                    <div class="tp-test-slide-item">
                        <div class="tp-testi p-relative mt-65">
                            <div class="tp-testi__avatar">
                                <img src="assets/img/icon/test-ava-01.png" alt="testi-avatar">
                            </div>
                            <div class="tp-testi__rating pb-5">
                                <ul class="d-flex align-items-center justify-content-end mr-5 mb-25">
                                <li><i class="fi fi-ss-star"></i></li>
                                <li><i class="fi fi-ss-star"></i></li>
                                <li><i class="fi fi-ss-star"></i></li>
                                <li><i class="fi fi-ss-star"></i></li>
                                <li><i class="fi fi-rs-star"></i></li>
                                </ul>
                            </div>
                            <div class="tp-testi__avainfo">
                                <p>Dramatically supply transparent deliverab before & you backward comp internal or "organic" sources.</p>
                                <h3 class="tp-testi__title">Courtney Henry</h3>
                                <i>Sr. UX/UI Designer</i>
                            </div>
                        </div>
                    </div>
                    <div class="tp-test-slide-item">
                        <div class="tp-testi p-relative mt-65">
                            <div class="tp-testi__avatar">
                                <img src="assets/img/icon/test-ava-02.png" alt="testi-avatar">
                            </div>
                            <div class="tp-testi__rating pb-5">
                                <ul class="d-flex align-items-center justify-content-end mr-5 mb-25">
                                <li><i class="fi fi-ss-star"></i></li>
                                <li><i class="fi fi-ss-star"></i></li>
                                <li><i class="fi fi-ss-star"></i></li>
                                <li><i class="fi fi-ss-star"></i></li>
                                <li><i class="fi fi-rs-star"></i></li>
                                </ul>
                            </div>
                            <div class="tp-testi__avainfo">
                                <p>Dramatically supply transparent deliverab before & you backward comp internal or "organic" sources.</p>
                                <h3 class="tp-testi__title">Devon Lane</h3>
                                <i>Software Engineer</i>
                            </div>
                        </div>
                    </div>
                    <div class="tp-test-slide-item">
                        <div class="tp-testi p-relative mt-65">
                            <div class="tp-testi__avatar">
                                <img src="assets/img/icon/test-ava-03.png" alt="testi-avatar">
                            </div>
                            <div class="tp-testi__rating pb-5">
                                <ul class="d-flex align-items-center justify-content-end mr-5 mb-25">
                                <li><i class="fi fi-ss-star"></i></li>
                                <li><i class="fi fi-ss-star"></i></li>
                                <li><i class="fi fi-ss-star"></i></li>
                                <li><i class="fi fi-ss-star"></i></li>
                                <li><i class="fi fi-rs-star"></i></li>
                                </ul>
                            </div>
                            <div class="tp-testi__avainfo">
                                <p>Dramatically supply transparent deliverab before & you backward comp internal or "organic" sources.</p>
                                <h3 class="tp-testi__title">Jenny Wilson</h3>
                                <i>Content Writter</i>
                            </div>
                        </div>
                    </div>
                    <div class="tp-test-slide-item">
                        <div class="tp-testi p-relative mt-65">
                            <div class="tp-testi__avatar">
                                <img src="assets/img/icon/test-ava-03.png" alt="testi-avatar">
                            </div>
                            <div class="tp-testi__rating pb-5">
                                <ul class="d-flex align-items-center justify-content-end mr-5 mb-25">
                                <li><i class="fi fi-ss-star"></i></li>
                                <li><i class="fi fi-ss-star"></i></li>
                                <li><i class="fi fi-ss-star"></i></li>
                                <li><i class="fi fi-ss-star"></i></li>
                                <li><i class="fi fi-rs-star"></i></li>
                                </ul>
                            </div>
                            <div class="tp-testi__avainfo">
                                <p>Dramatically supply transparent deliverables before & can backward comp internal or "organic" sources.</p>
                                <h3 class="tp-testi__title">Jenny Wilson</h3>
                                <i>Content Writter</i>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </section> -->
        <!-- testimonial-area-end -->

        <!-- blog-area -->
        <section class="blog-area pt-110 pb-110">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title mb-65 text-center">
                            <h2 class="tp-section-title mb-20">Latest Blogs & News</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @if ($blogs->isNotEmpty())
                        @foreach ($blogs as $blog)
                            <div class="col-xl-4 col-md-6">
                                <div class="tp-blog mb-60">
                                    <div class="tp-blog__thumb p-relative">
                                        <div class="tp-blog__timg fix">
                                            <a href="blog-details.html"><img
                                                    src="{{ asset('uploaded_files/blog/' . $blog->blog_image) }}"
                                                    alt="{{ $blog->blog_title }}"></a>
                                        </div>
                                        <div class="tp-blog__icon"><a href="blog-details.html"><i
                                                    class="fi fi-rs-angle-right"></i></a></div>
                                    </div>
                                    <div class="tp-blog__content">
                                        <div class="tp-blog__meta mb-10">
                                            <a href="blog-details.html">{{ $blog->blog_category }}</a> <span>-</span>
                                            <a
                                                href="blog-details.html">{{ date('j F y', strtotime($blog->created_at)) }}</a>
                                        </div>
                                        <h3 class="tp-blog__title mb-15"><a
                                                href="blog-details.html">{{ $blog->blog_title }}</a></h3>
                                        <p>{{ $blog->blog_content }}.</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog-btn text-center">
                            <a href="blog.html" class="tp-btn">All Blog</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-area-end -->

        <!-- brand-area -->
        <!-- <section class="brand-area pb-110">
                <div class="container">
                    <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title mb-65 text-center">
                            <h2 class="tp-section-title mb-20">Our Key Supporters</h2>
                        </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-xl-12">
                        <div class="brand-area tp-brand-active">
                            <div class="brand-item">
                                <a href="#"><img src="assets/img/icon/brand-icon-01.png" alt="brand-logo"></a>
                            </div>
                            <div class="brand-item">
                                <a href="#"><img src="assets/img/icon/brand-icon-02.png" alt="brand-logo"></a>
                            </div>
                            <div class="brand-item">
                                <a href="#"><img src="assets/img/icon/brand-icon-03.png" alt="brand-logo"></a>
                            </div>
                            <div class="brand-item">
                                <a href="#"><img src="assets/img/icon/brand-icon-04.png" alt="brand-logo"></a>
                            </div>
                            <div class="brand-item">
                                <a href="#"><img src="assets/img/icon/brand-icon-05.png" alt="brand-logo"></a>
                            </div>
                            <div class="brand-item">
                                <a href="#"><img src="assets/img/icon/brand-icon-01.png" alt="brand-logo"></a>
                            </div>
                            <div class="brand-item">
                                <a href="#"><img src="assets/img/icon/brand-icon-02.png" alt="brand-logo"></a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </section> -->
        <!-- brand-area-end -->

    </main>
@endsection
@push('scripts')
@endpush
