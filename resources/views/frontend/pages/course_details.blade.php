@extends('layouts.frontend')
@section('title', 'Course Details')
@push('styles')
@endpush
@section('content')

    <section id="course_details">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="course_details_title">
                        <h4>{{ $course->course_title ?? '' }}</h4>
                        <p>{!! $course->course_short_desc !!}
                        </p>
                    </div>
                    <div class="course_details_payment">
                        @if ($course->batch->isNotEmpty())
                            @foreach ($course->batch as $batch)
                                <a href="#" class="btn btn-warning">{{ $batch->batch_no }} এ ভর্তি হোন <i
                                        class="fas fa-arrow-right"></i></a>
                            @endforeach
                        @else
                            <a href="#" class="btn btn-warning">No batches available <i
                                    class="fas fa-arrow-right"></i></a>
                        @endif
                        <span>৳ {{ $course->price }}</span>
                    </div>

                    <div class="row">
                        @if ($course->batch->isNotEmpty())

                            @foreach ($course->batch as $batch)
                                <div class="col-md-3">
                                    <div class="card course_details_b_card">
                                        <div class="card-body course_details_b_text">
                                            <span class="course_details_icon_text">
                                                <i class="fas fa-wifi"></i>{{ $batch->total_seat ?? '' }} সিট বাকি
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <span class="course_details_icon_text">
                                </i>No seats
                            </span>
                        @endif
                        @if ($course->batch->isNotEmpty())

                            @foreach ($course->batch as $batch)
                                <div class="col-md-3">
                                    <div class="card course_details_b_card">
                                        <div class="card-body course_details_b_text">
                                            <span class="course_details_icon_text">
                                                <i class="fas fa-wifi"></i>{{ $batch->total_class ?? '' }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <span class="course_details_icon_text">
                                </i>No class
                            </span>
                        @endif
                        @if ($course->batch->isNotEmpty())
                            @foreach ($course->batch as $batch)
                                <div class="col-md-3">
                                    <div class="card course_details_b_card">
                                        <div class="card-body course_details_b_text">
                                            <span class="course_details_icon_text">
                                                <i class="fas fa-wifi"></i>{{ $batch->batch_code ?? '' }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <span class="course_details_icon_text">
                                No bath code
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="course_details_b_img">
                        @if($course->media->isNotEmpty())
                       @foreach($course->media as $media)
                        <img src="{{ asset('uploaded_files/course_thumbnails/' . $media->course_thumbnail)}}">
                        @endforeach
                        @else
                        <img src="{{ asset('/') }}frontend/assets/images/2023-12-04T11-05-21.903Z-Flutter.jpg">
                        @endif
                    </div>
                </div>
                <div class="card course_details_b_l_card">
                    <div class="card-body">
                        <div class="row">
                            @if ($course->batch->isNotEmpty())
                                @php
                                    $batch = $course->batch->first(); // Get the first batch
                                @endphp
                                <div class="col-md-3 course_details_b_l_card_body">
                                    <div class="course_details_l_text">
                                        <span>ব্যাচ শুরু</span>
                                        <p>{{ date('j F Y', strtotime($batch->class_start)) ?? '' }}</p>
                                    </div>
                                </div>
                                <div class="col-md-3 course_details_b_l_card_body">
                                    <div class="course_details_l_text">
                                        <span><i class="fas fa-video"></i> ক্লাস শুরু হবে </span>
                                        <p>{{ $batch->class_rutine }}</p>
                                    </div>
                                </div>
                                <div class="col-md-3 course_details_b_l_card_body">
                                    <div class="course_details_l_text">
                                        <span><i class="fas fa-video"></i>ক্লাসের সময় </span>
                                        <p>{{ $batch->class_time }}</p>
                                    </div>
                                </div>
                                <div class="col-md-3 course_details_b_l_card_body">
                                    <div class="course_details_l_text">
                                        <span><i class="fas fa-video"></i> ক্লাস</span>
                                        <p>{{ $batch->class_type }}</p>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <section id="course_category_nav">
        <div class="container">
            <ul class="nav justify-content-center category_course_item sticky-lg-top">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#category_course_section">কোর্সে আপনি
                        পাচ্ছেন</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#course_4_u">কোর্সটি যাদের জন্য</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#our_instructor">ইন্সট্রাক্টর</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#course_details_faq">FAQ</a>
                </li>
            </ul>
            <section id="category_course_section">
                <div class="category_course_title">
                    <h4>কোর্সে আপনি পাচ্ছেন</h4>
                </div>
                <div class="card category_course_card">
                    <div class="card-body">
                        <div class="row">

                            @if ($live_content->isNotEmpty())
                                @foreach ($live_content as $content)
                                    <div class="col-md-4 category_home">
                                        <div class="category_course_icon">
                                            <a class="category_course_video" href="">
                                                <img src="{{ asset('uploaded_files/training/' . $content->train_image) }}"
                                                    height="50" alt="" />
                                            </a>
                                        </div>
                                        <div class="category_course_name">
                                            <h6>{{ $content->train_title ?? '' }}</h6>
                                            <p>{!! $content->train_description !!}</p>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </section>
            <section id="course_4_u">
                <div class="container">
                    <div class="course_4_u_title">
                        <h4>কোর্সটি আপনারই জন্য</h4>
                    </div>
                    <div class="course_4_u_description">
                        <div class="row">
                            @if ($course->requirements->isNotEmpty())
                                @foreach ($course->requirements as $req)
                                    <div class="col-md-4">
                                        <div class="card course_4_u_card">
                                            <div class="card-body course_4_u_text">
                                                <span class="course_4_u_icon"> <i class="far fa-check-circle"></i>
                                                    {{ $req->requirement ?? '' }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                        </div>
                    </div>
                </div>
            </section>
            <section id="our_instructor">
                <div class="container">
                    <div class="our_instructor_title">
                        <h4>ইন্সট্রাক্টর</h4>
                    </div>
                    <div class="our_instructor_list">
                        <div class="row">
                            @if ($course->instructors->isNotEmpty())
                                @foreach ($course->instructors as $instructorCourse)
                                    <div class="col-md-4">
                                        <div class="card mb-3" style="max-width: 540px;">
                                            <div class="row g-0">
                                                <div class="col-md-7">
                                                    <div class="card-body our_instructors">
                                                        <h5 class="card-title">
                                                            {{ $instructorCourse->instructor->first_name . ' ' . $instructorCourse->instructor->last_name }}
                                                        </h5>
                                                        <p class="card-text">
                                                            {{ $instructorCourse->instructor->designations->first()->designation }}
                                                        </p>
                                                        <a href="#" class="btn btn-info"><i
                                                                class="far fa-check-circle"></i>
                                                            {{ $instructorCourse->instructor->professions->first()->professions }}</a>
                                                    </div>
                                                </div>
                                                <div class="col-md-5 our_instructor_img">
                                                    <img src="{{ asset('uploaded_files/Instructor/' . $instructorCourse->instructor->image) }}"
                                                        class="img-fluid rounded-start"
                                                        alt="{{ $instructorCourse->instructor->first_name }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </section>
            <section id="course_details_faq">
                <div class="container">
                    <div class="course_details_faq_title">
                        <h4>প্রায়ই জিজ্ঞেস করা প্রশ্ন</h4>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-8">
                            @if ($course->faqs->isNotEmpty())
                                @foreach ($course->faqs as $key => $faq)
                                    <div class="accordion accordion-flush" id="accordionFlush{{ $faq->course_id }}">
                                        <div class="accordion-item faq_item">
                                            <h2 class="accordion-header faq_header"
                                                id="flush-heading{{ $faq->id }}">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#flush-collapse{{ $faq->id }}"
                                                    aria-expanded="false"
                                                    aria-controls="flush-collapse{{ $faq->id }}">
                                                    {{ $key + 1 }}. {{ $faq->faq_question }}
                                                </button>
                                            </h2>
                                            <div id="flush-collapse{{ $faq->id }}"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="flush-heading{{ $faq->id }}"
                                                data-bs-parent="#accordionFlush{{ $faq->course_id }}">
                                                <div class="accordion-body faq_text">{{ $faq->faq_answer }}</div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
@endsection
@push('scripts')
@endpush
