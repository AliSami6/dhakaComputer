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
                                <img src="{{ isset($students->image) && $students->image ? asset('uploaded_files/students/'.$students->image) : asset('frontend/assets/img/bg/instruc-sibedar-thumb-01.jpg') }}"  class="rounded mx-auto d-block"
                                alt="{{ Auth::user()->name }}" width="400">
                            </div>
                            <div class="instructor-sidebar-widget">
                                <div class="isntruc-side-content text-center">
                                    <h4 class="side-instructor-title mb-15">
                                        {{ $students->firstName && $students->lastName ? $students->firstName . ' ' . $students->lastName : Auth::user()->name }}
                                    </h4>
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

                                            <label><a href="">Update Profile</a></label>

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
                                    <form action="{{ route('update.my_profile',$students->id) }}" method="POST" class="g-3" enctype="multipart/form-data">
                                        <div class="col-md-12">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="firstName" class="form-label">First Name</label>
                                                <input type="text" class="form-control" id="firstName" name="firstName"
                                                    value="{{ $students->firstName }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="firstName" class="form-label">Last Name</label>
                                                <input type="text" class="form-control" id="lastName" name="lastName"
                                                    value="{{ $students->lastName }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="firstName" class="form-label">Birth Date </label>
                                                <input type="date" class="form-control" id="date_of_birth"
                                                    name="date_of_birth" value="{{ $students->date_of_birth }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="formFile" class="form-label">Profile Image</label>
                                                <input class="form-control" type="file" id="formFile" name="image" >
                                            </div>

                                            <div class="mb-3">
                                                <label for="firstName" class="form-label">Nationality</label>
                                                <input type="text" class="form-control" id="nationality"
                                                    name="nationality" value="{{ $students->nationality }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="firstName" class="form-label">Country</label>
                                                <input type="text" class="form-control" id="country" name="country"
                                                    value="{{ $students->country }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="address_one" class="form-label">Address </label>
                                                <textarea class="form-control" id="address_one" rows="5" name="address_one">{{ $students->address_one }}</textarea>
                                            </div>

                                        </div>
                                        <div class="mb-3">
                                            <button type="submit" class="btn-sm btn tp-btn btn-block">Update</button>
                                        </div>
                                    </form>
                                </div>
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
