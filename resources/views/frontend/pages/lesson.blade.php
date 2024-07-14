@extends('layouts.frontend')
@section('title', 'Tutorial')
@push('styles')
    <style>
        .c-details-sidebar.lessonTab {
            padding: 15px 5px !important;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
            border-radius: 5px;
        }

        .embed-responsive-item {
            height: 400px;
            width: 100%;
        }

        .course-details-container>.col-lg-8,
        .course-details-container>.col-lg-4 {
            padding-right: 0;
            padding-left: 0;
        }

        .accordion-buttons {
            display: flex;
            align-items: center;
            font-size: 14px;
            padding: 10px;
            width: 100%;
            text-align: left;
            background: none;
            border: none;
            cursor: pointer;
            outline: none;
        }

        .accordion-buttons li {
            display: flex;
            align-items: center;
        }

        .accordion-buttons li i {
            margin-right: 10px;
        }

        .accordion-body span {
            margin-left: 5px !important;
            font-size: 12px !important;
            color: #000 !important;
            font-weight: 700 !important;
        }

        .accordion-header label {
            font-size: 14px;
        }

        .cd-information ul li {
            display: flex;
            align-items: center;
        }

        .cd-information ul li i {
            margin-right: 5px;
        }

        .accordion {
            margin-bottom: 0%;
        }

        .c-details-wrapper {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        /* CSS */
        .frame_content {
            width: 100%;
            height: 500px;
            overflow: hidden;
            position: relative;
            background-color: #000;
            /* Optional: background color while loading */
        }

        .frame_content iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        .c-details-wrapper {
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        .c-details-canvas {
            margin-bottom: 40px;
        }

        .course-details-content {
            margin-bottom: 45px;
        }

        .c-details-title {
            font-size: 1.25rem;
            margin-bottom: 25px;
        }

        .tp-c-details-title {
            font-size: 1.1rem;
            margin-bottom: 20px;
        }

        .c-details-about {
            margin-bottom: 40px;
        }

        .c-details-about p {
            font-size: 1rem;
            line-height: 1.6;
        }

        .rounded-icon {
            height: 50px;
            width: 50px;
            line-height: 50px;
            text-align: center;
            border: 1px solid rgba(5, 13, 54, 0.1);
            border-radius: 50%;
            font-size: 18px;
            display: inline-block;
            margin-right: 10px;
            color: var(--tp-heading-primary);
            transition: 0.2s;
            font-family: "Font Awesome 6 Pro";
            font-weight: 300;
        }
        .rounded-icon:hover {
            background-color: var(--tp-heading-secondary);
            color: var(--tp-common-white);
        }
        .sectionTitle {
            width: 80%;
            text-decoration: none;
        }
        .accordion-items .accordion-body {
            font-size: 12px !important;
            color: var(--tp-text-2);
            padding: 20px 20px 0px 20px !important;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
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
                            <h3 class="breadcrumb__title mb-20">Course Materials</h3>
                            <div class="breadcrumb__list">
                                <span><a href="#">Courses</a></span>
                                <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                                <span><a href="#">Section</a></span>
                                <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                                <span class="sub-page-black">Lesson</span>
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
                <div class="row course-details-container">
                    <div class="col-lg-8 col-md-12">
                        <div class="c-details-wrapper mr-25">
                            <div class="c-details-canvas mb-40" style="width: 100%;">
                                @if ($my_lesson)
                                    @if ($my_lesson->video_url)
                                        <div class="frame_content" style="width: 100%; height: 500px;">
                                            @php
                                                $video_url = $my_lesson->video_url;
                                                if (strpos($video_url, 'youtube.com') !== false) {
                                                    $video_url .= '?autoplay=1';
                                                } elseif (strpos($video_url, 'drive.google.com') !== false) {
                                                    $video_url = str_replace('view', 'preview', $video_url);
                                                    $video_url .= '&autoplay=1';
                                                }
                                            @endphp

                                            <iframe class="embed-responsive-item" src="{{ $video_url }}" frameborder="0"
                                                style="width: 100%; height: 100%;"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen>
                                            </iframe>
                                        </div>
                                    @elseif($my_lesson->video_resource)
                                        <div class="video-container">
                                            <video controls style="width: 100%; height: 500px;">
                                                <source
                                                    src="{{ asset('uploaded_files/videos/' . $my_lesson->video_resource) }}"
                                                    type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                        </div>
                                    @elseif($my_lesson->document_type)
                                        <iframe src="{{ asset('uploaded_files/attachments/' . $my_lesson->attachment) }}"
                                            height="500" width="100%" title="Document View"></iframe>
                                    @elseif($my_lesson->image)
                                        <!-- Debugging: Check the generated URL -->
                                        @php
                                            $image_url = asset('uploaded_files/video_images/' . $my_lesson->image);
                                            // Debug: Print the URL to check if it's correct
                                        @endphp
                                        <div class="mb-3">
                                            <img src="{{ $image_url }}" alt="details-bg" style=" height: auto;"
                                                class="img-fluid rounded-2">
                                        </div>
                                        <hr>
                                    @elseif($my_lesson->description)
                                        <div class="mb-3">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="8">{{ strip_tags($my_lesson->description) }}</textarea>
                                        </div>
                                    @else
                                        <h2 class="card-title">
                                            {{ $my_lesson->video_url }}
                                        </h2>
                                    @endif
                                @else
                                    <p>Lesson not found.</p>
                                @endif
                            </div>


                            <div class="course-details-content mb-45">
                                <div class="tpcourse__ava-title mb-25">
                                    <h4 class="c-details-title fs-5">
                                        Lesson: {{ $my_lesson ? $my_lesson->lession_title : 'N/A' }}
                                    </h4>
                                </div>
                            </div>
                            <div class="c-details-about mb-40">
                                <h5 class="tp-c-details-title mb-20">Description</h5>
                                <p>{!! $my_lesson ? $my_lesson->summary : 'N/A' !!}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <div class="c-details-sidebar lessonTab">
                            <div class="course-details-widget mb-0">
                                @if ($course)
                                    @foreach ($course->sections as $sec)
                                        <div class="accordion" id="accordion{{ $sec->id }}">
                                            <div class="accordion-items">
                                                <div class="cd-information accordion-header card-header"
                                                    id="heading{{ $sec->id }}">
                                                    <button class="accordion-buttons bootom_arrow" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapse{{ $sec->id }}" aria-expanded="true"
                                                        aria-controls="collapse{{ $sec->id }}">
                                                        <li class="sectionTitle">
                                                            <i class="fa-light fa-book rounded-icon"></i>
                                                            <label class="section_title">{{ $sec->section_title }}</label>
                                                        </li>
                                                    </button>

                                                </div>
                                                <div id="collapse{{ $sec->id }}"
                                                    class="accordion-collapse collapse show"
                                                    aria-labelledby="heading{{ $sec->id }}"
                                                    data-bs-parent="#accordion{{ $sec->id }}">
                                                    <div class="accordion-body">

                                                        <div class="cd-information">
                                                            <ul>
                                                                @foreach ($sec->lessons as $lesson)
                                                                    <li>
                                                                        <a
                                                                            href="{{ route('course.lesson', $lesson->lession_title) }}">
                                                                            <i class="fa-light fa-microphone"></i>
                                                                            <span
                                                                                class="lesson_title">{{ $lesson->lession_title }}</span>
                                                                        </a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <p>No sections found.</p>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- course-details-area-end -->
    </main>
@endsection
@push('scripts')
@endpush
