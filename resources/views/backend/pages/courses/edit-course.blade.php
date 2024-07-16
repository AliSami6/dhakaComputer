@extends('backend.layouts.master')
@section('title', 'Edit course')
@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/') }}backend/assets/css/drag.css">
    <style>
        .section_title {
            background-color: #eef1f3;
        }

        .list-group.list-group-item {
            background-color: #fff;
            color: #0d0d0d;
        }

        .section_title button {
            margin-right: 5px;
        }

        .list_of_section {
            background: #fff;
            color: #000;
        }

        .image-group {
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 5px;
            position: relative;
        }
    </style>
@endsection
@section('admin-content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h6 class="nk-block-title page-title"> Update Course : {{ $editCourses->course_title }} </h6>
                        </div>
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1"
                                    data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">
                                        <li class="nk-block-tools-opt"><a href="{{ route('courseList') }}"
                                                class="btn btn-primary"> <em
                                                    class="icon ni ni-arrow-left"></em><span>Back</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-content-body">
                    <div class="nk-block nk-block-lg">
                        <div class="row g-gs">
                            <div class="card card-bordered card-preview">
                                <div class="card-inner">
                                    <ul class="nav nav-tabs mt-n3">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#tabItem1">
                                                <em class="icon ni ni-user-circle"></em>
                                                <span>Curriculum</span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#tabItem5">
                                                <em class="icon ni ni-tags"></em>
                                                <span>Basic</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#tabItem6">
                                                <em class="icon ni ni-edit"></em>
                                                <span>Info</span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#tabItem8">
                                                <em class="icon ni ni-play"></em>
                                                <span>Media</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#tabItem9">
                                                <em class="icon ni ni-pen2"></em>
                                                <span>Seo</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#tabItem10">
                                                <em class="icon ni ni-done"></em>
                                                <span>Finish</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <form class="py-3" id="updateCourseForm" enctype="multipart/form-data" method="POST"
                                        action="{{ route('courses.update', $editCourses->id) }}">
                                        <div class="alert alert-danger print-error-msg-edit-course" style="display:none">
                                            <ul></ul>
                                        </div>
                                        <div class="tab-content">


                                            <div class="tab-pane active" id="tabItem1">
                                                <div class="card-inner">
                                                    <div class="d-flex justify-content-center mt-3 mb-3">
                                                        <button type="button" class="btn btn-outline-secondary btn-sm mr-2"
                                                            data-bs-toggle="modal" data-bs-target="#addSection">Add
                                                            Module </button>
                                                        &nbsp;&nbsp;
                                                        <button type="button" class="btn btn-outline-secondary btn-sm mr-2"
                                                            data-bs-toggle="modal" data-bs-target="#addLession">Add
                                                            Lession</button>


                                                    </div>
                                                    <div class="row g-3 align-center">

                                                        <div class="nk-content ">
                                                            <div class="container-fluid">
                                                                <div class="nk-content-inner">
                                                                    <div class="nk-content-body">
                                                                        <div class="components-preview wide-md mx-auto">
                                                                            <div class="nk-block nk-block-lg">
                                                                                @if ($editCourses->sections->isNotEmpty())
                                                                                    @foreach ($editCourses->sections as $section)
                                                                                        <div
                                                                                            class="card card-bordered card-preview rounded section_title mb-3">
                                                                                            <div class="card-inner">

                                                                                                <div class="preview-block">
                                                                                                    <div
                                                                                                        class="row gy-4 mb-3 d-flex">
                                                                                                        <div class="col-sm-12 "
                                                                                                            style="flex-wrap: wrap">
                                                                                                            <span
                                                                                                                class="title ff-base fw-medium">Module
                                                                                                                {{ $loop->index + 1 }}
                                                                                                                :
                                                                                                                <span
                                                                                                                    class="text-dark "
                                                                                                                    style="width:20px;">{{ $section->section_title }}</span>
                                                                                                            </span>

                                                                                                            <button
                                                                                                                type="button"
                                                                                                                class="btn btn-outline-secondary btn-sm float-end mr-2 EditSection"
                                                                                                                data-bs-toggle="modal"
                                                                                                                data-bs-target="#editSection"
                                                                                                                data-id="{{ $section->id }}">
                                                                                                                <em
                                                                                                                    class="icon ni ni-edit"></em>
                                                                                                                Edit Module
                                                                                                            </button>
                                                                                                            <button
                                                                                                                type="button"
                                                                                                                data-id="{{ $section->id }}"
                                                                                                                class="btn btn-outline-secondary btn-sm float-end mr-2 deleteSection">
                                                                                                                <em
                                                                                                                    class="icon ni ni-trash"></em>
                                                                                                                Delete
                                                                                                                Module
                                                                                                            </button>

                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="row gy-4 ">
                                                                                                        <div
                                                                                                            class="col-sm-12">

                                                                                                            <ul
                                                                                                                class="list-group link-list-plain no-bdr m-2">
                                                                                                                @if ($section->lessons->isNotEmpty())
                                                                                                                    @foreach ($section->lessons as $ls)
                                                                                                                        <li
                                                                                                                            class="list-group-item mb-2 rounded list_of_section">
                                                                                                                            <em
                                                                                                                                class="icon ni ni-play-circle"></em><span
                                                                                                                                class="text-secondary fs-6">Lesson
                                                                                                                                {{ $loop->index + 1 }}

                                                                                                                                &nbsp;&nbsp;:</span>&nbsp;&nbsp;
                                                                                                                            <strong
                                                                                                                                class="fw-bold">
                                                                                                                                {{ $ls->lession_title }}

                                                                                                                            </strong>
                                                                                                                            <div
                                                                                                                                class="float-end">

                                                                                                                                <button
                                                                                                                                    type="button"
                                                                                                                                    class="border-0 bg-white EditLesson"
                                                                                                                                    data-bs-toggle="modal"
                                                                                                                                    data-bs-target="#updateLession"
                                                                                                                                    data-id="{{ $ls->id }}">
                                                                                                                                    <em
                                                                                                                                        class="icon ni ni-edit"></em>
                                                                                                                                </button>
                                                                                                                                <button
                                                                                                                                    type="button"
                                                                                                                                    data-id="{{ $ls->id }}"
                                                                                                                                    class="border-0 bg-white deleteLesson">
                                                                                                                                    <em
                                                                                                                                        class="icon ni ni-delete"></em>
                                                                                                                                </button>


                                                                                                                            </div>


                                                                                                                        </li>
                                                                                                                    @endforeach
                                                                                                                @endif

                                                                                                            </ul>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div><!-- .card-preview -->
                                                                                    @endforeach
                                                                                @endif
                                                                            </div><!-- .nk-block -->
                                                                        </div><!-- .components-preview -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          

                                            <div class="tab-pane" id="tabItem5">
                                                <div class="card-inner">
                                                    <div class="row g-3 align-center">
                                                        <div class="row mb-3">
                                                            <label for="course-title"
                                                                class="col-sm-2 col-form-label">Course
                                                                Title</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control"
                                                                    id="course_title" name="course_title"
                                                                    placeholder="course title"
                                                                    value="{{ $editCourses->course_title }}">
                                                                <span class="text-danger course_title"></span>
                                                            </div>

                                                        </div>

                                                        <div class="row mb-3">
                                                            <label for="course_short_desc"
                                                                class="col-sm-2 col-form-label">Short
                                                                description</label>
                                                            <div class="col-sm-10">
                                                                <div class="form-group">
                                                                    <textarea class="form-control form-control-sm py-2 mb-2" id="course_short_desc" name="course_short_desc">{!! $editCourses->course_short_desc !!}</textarea>

                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="Description"
                                                                class="col-sm-2 col-form-label">Description</label>
                                                            <div class="col-sm-10">
                                                                <textarea name="description" class="form-control your_summernote py-3 m-1 p-3" rows="4" cols="4">{!! htmlspecialchars_decode($editCourses->description) !!}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="inputEmail3" class="col-sm-2 col-form-label">
                                                                Category</label>
                                                            <div class="col-sm-10">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <select class="form-select js-select2 py-2 mb-2"
                                                                            id="category_id" name="category_id"
                                                                            data-placeholder="Select a category">
                                                                            @if ($course_categories->isNotEmpty())
                                                                                @foreach ($course_categories as $category)
                                                                                    <option value="{{ $category->id }}">
                                                                                        {{ $category->category_name }}
                                                                                    </option>
                                                                                @endforeach
                                                                            @endif
                                                                        </select>
                                                                    </div>
                                                                    <span class="text-danger course_category"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="inputEmail3" class="col-sm-2 col-form-label">
                                                                Level</label>
                                                            <div class="col-sm-10">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">

                                                                        <select class="form-select js-select2 py-2 mb-2"
                                                                            id="level" name="level"
                                                                            data-placeholder="Select a level">
                                                                            <option value="Beginner"
                                                                                {{ $editCourses->level == 'Beginner' ? 'selected' : '' }}>
                                                                                Beginner</option>
                                                                            <option value="Intermediate"
                                                                                {{ $editCourses->level == 'Intermediate' ? 'selected' : '' }}>
                                                                                Intermediate</option>
                                                                            <option value="Advanced"
                                                                                {{ $editCourses->level == 'Advanced' ? 'selected' : '' }}>
                                                                                Advanced</option>
                                                                        </select>

                                                                    </div>
                                                                    <span class="text-danger course_level"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="inputEmail3" class="col-sm-2 col-form-label">
                                                                Language
                                                                Made in</label>
                                                            <div class="col-sm-10">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <select class="form-select js-select2 py-2 mb-2"
                                                                            id="language" name="language"
                                                                            data-placeholder="Select a language">
                                                                            <option value="English"
                                                                                {{ $editCourses->language == 'English' ? 'selected' : '' }}>
                                                                                English</option>
                                                                            <option value="Japanese"
                                                                                {{ $editCourses->language == 'Bangla' ? 'selected' : '' }}>
                                                                                Japanese</option>
                                                                        </select>

                                                                    </div>
                                                                    <span class="text-danger course_language"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="inputEmail3" class="col-sm-2 col-form-label">
                                                                Create as a</label>
                                                            <div class="col-sm-10">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <ul
                                                                            class="custom-control-group g-3 align-center flex-wrap">
                                                                            <li>
                                                                                <div class="custom-control custom-radio">
                                                                                    <input type="radio"
                                                                                        class="custom-control-input"
                                                                                        id="course_status_active"
                                                                                        name="course_status"
                                                                                        value="Active"
                                                                                        {{ $editCourses->course_status == 'Active' ? 'checked' : '' }}>
                                                                                    <label class="custom-control-label"
                                                                                        for="course_status_active">Active
                                                                                        Course</label>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="custom-control custom-radio">
                                                                                    <input type="radio"
                                                                                        class="custom-control-input"
                                                                                        id="course_status_private"
                                                                                        name="course_status"
                                                                                        value="Private"
                                                                                        {{ $editCourses->course_status == 'Private' ? 'checked' : '' }}>
                                                                                    <label class="custom-control-label"
                                                                                        for="course_status_private">Private
                                                                                        Course</label>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="custom-control custom-radio">
                                                                                    <input type="radio"
                                                                                        class="custom-control-input"
                                                                                        id="course_status_upcoming"
                                                                                        name="course_status"
                                                                                        value="Upcoming"
                                                                                        {{ $editCourses->course_status == 'Upcoming' ? 'checked' : '' }}>
                                                                                    <label class="custom-control-label"
                                                                                        for="course_status_upcoming">Upcoming
                                                                                        Course</label>
                                                                                </div>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                    <span class="text-danger course_status"></span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="course-title"
                                                                class="col-sm-2 col-form-label">Course
                                                                Duration </label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="duration"
                                                                    name="duration" placeholder="course duration"
                                                                    value="{{ $editCourses->duration }}">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="course-title"
                                                                class="col-sm-2 col-form-label">Course
                                                                Schedules </label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="schedules"
                                                                    name="schedules" placeholder="course schedules"
                                                                    value="{{ $editCourses->schedules }}">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="input_fields_wrap">
                                                                <div class="row mb-3 ">
                                                                    <label for="course-free"
                                                                        class="col-sm-2 col-form-label ">
                                                                    </label>
                                                                    <div class="col-sm-10">
                                                                        <div class="form-group">
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="is_free" name="is_free"
                                                                                    value="1"
                                                                                    {{ isset($editCourses->is_free) && $editCourses->is_free == 1 ? 'checked' : '' }}>
                                                                                <label class="custom-control-label"
                                                                                    for="is_free">Check if this is a
                                                                                    free course</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label for="coursePrice"
                                                                        class="col-sm-2 col-form-label">Course
                                                                        Price</label>
                                                                    <div class="col-sm-10">
                                                                        <div class="form-group">
                                                                            <input type="number"
                                                                                class="form-control form-control-sm"
                                                                                placeholder="Enter course price"
                                                                                id="course_price" name="price"
                                                                                value="{{ $editCourses->price }}">
                                                                            <span class="text-danger course_price"></span>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="req_fields">
                                                                <div class="row mb-3">
                                                                    <label for="Discountedprice"
                                                                        class="col-sm-2 col-form-label">Discounted price
                                                                    </label>
                                                                    <div class="col-sm-10">
                                                                        <div class="form-group">
                                                                            <input type="number" class="form-control"
                                                                                id="discounted_price"
                                                                                name="discounted_price"
                                                                                value="{{ $editCourses->discounted_price }}">
                                                                            <span
                                                                                class="text-danger discounted_price"></span>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="out_fields">
                                                                <div class="row mb-3">
                                                                    <label for="Expiry period"
                                                                        class="col-sm-2 col-form-label">Expiry period
                                                                    </label>
                                                                    <div class="col-sm-10">
                                                                        <div class="form-group">
                                                                            <div class="form-control-wrap">
                                                                                <ul
                                                                                    class="custom-control-group g-3 align-center flex-wrap">
                                                                                    <li>
                                                                                        <div
                                                                                            class="custom-control custom-radio">
                                                                                            <input type="radio"
                                                                                                class="custom-control-input"
                                                                                                name="expire_time"
                                                                                                id="expire_time_0"
                                                                                                value="0"
                                                                                                {{ $editCourses->expire_time == 0 ? 'checked' : '' }}>

                                                                                            <label
                                                                                                class="custom-control-label"
                                                                                                for="expire_time_0">Life
                                                                                                Time</label>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div
                                                                                            class="custom-control custom-radio">
                                                                                            <input type="radio"
                                                                                                class="custom-control-input"
                                                                                                name="expire_time"
                                                                                                id="expire_time_1"
                                                                                                value="1"
                                                                                                {{ $editCourses->expire_time == 1 ? 'checked' : '' }}>

                                                                                            <label
                                                                                                class="custom-control-label"
                                                                                                for="expire_time_1">Limited
                                                                                                Time</label>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <span class="text-danger expire_time"></span>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane" id="tabItem6">
                                                <div class="card-inner">
                                                    <!-- FAQs Section -->
                                                    <div class="row g-3 align-center">
                                                        <div class="input_fields_wrap">
                                                            @foreach ($faqs as $faq)
                                                                <div class="faq-group" data-id="{{ $faq->id }}">
                                                                    <div class="row mb-3">
                                                                        <label for="faq_question"
                                                                            class="col-sm-2 col-form-label">Course
                                                                            FAQ</label>
                                                                        <div class="col-sm-8">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control"
                                                                                    id="faq_question"
                                                                                    name="faq_question[]"
                                                                                    placeholder="FAQ"
                                                                                    value="{{ $faq->faq_question }}">
                                                                                <span
                                                                                    class="text-danger course_faq"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-2">
                                                                            <button type="button"
                                                                                class="btn btn-sm btn-danger remove_faq_row">
                                                                                <em class="icon ni ni-minus"></em>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <label for="faq_answer"
                                                                            class="col-sm-2 col-form-label"></label>
                                                                        <div class="col-sm-8">
                                                                            <div class="form-group">
                                                                                <textarea class="form-control form-control-sm py-2 mb-2" id="faq_answer" name="faq_answer[]" placeholder="Answer">{{ $faq->faq_answer }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-2"></div>
                                                                    </div>
                                                                </div>
                                                            @endforeach

                                                        </div>
                                                        <div class="input_fields_wrap">
                                                            <div class="faq-group">
                                                                <div class="row mb-3">
                                                                    <label for="faq_question"
                                                                        class="col-sm-2 col-form-label">Course
                                                                        FAQ</label>
                                                                    <div class="col-sm-8">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control"
                                                                                id="faq_question" name="faq_question[]"
                                                                                placeholder="FAQ">

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-2">

                                                                        <button type="button"
                                                                            class="btn btn-sm btn-primary add_field_button">
                                                                            <em class="icon ni ni-plus"></em>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label for="faq_answer"
                                                                        class="col-sm-2 col-form-label"></label>
                                                                    <div class="col-sm-8">
                                                                        <div class="form-group">
                                                                            <textarea class="form-control form-control-sm py-2 mb-2" id="faq_answer" name="faq_answer[]" placeholder="Answer"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-2"></div>
                                                                </div>
                                                            </div>

                                                            <div class="course_faq_expand"></div>

                                                        </div>
                                                    </div>

                                                    <!-- Requirements Section -->
                                                    <div class="row g-3 align-center">
                                                        <div class="req_fields">
                                                            @foreach ($requirements as $requirement)
                                                                <div class="row mb-3 requirement-group"
                                                                    data-id="{{ $requirement->id }}">
                                                                    <label for="requirement"
                                                                        class="col-sm-2 col-form-label">Requirements</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" class="form-control"
                                                                            name="requirement[]"
                                                                            value="{{ $requirement->requirement }}">
                                                                    </div>
                                                                    <div class="col-sm-2">
                                                                        <button type="button"
                                                                            class="btn btn-sm btn-danger remove_rqr_row">
                                                                            <em class="icon ni ni-minus"></em>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            @endforeach

                                                        </div>
                                                        <div class="req_fields">
                                                            <div class="row mb-3">
                                                                <label for="requirement"
                                                                    class="col-sm-2 col-form-label">Requirements</label>
                                                                <div class="col-sm-8">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control"
                                                                            id="requirement" name="requirement[]"
                                                                            placeholder="Provide Requirements">

                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <button type="button"
                                                                        class="btn btn-sm btn-primary add_rq__field_button">
                                                                        <em class="icon ni ni-plus"></em>
                                                                    </button>

                                                                </div>
                                                            </div>

                                                            <div class="course_requirments_expand"></div>

                                                        </div>
                                                    </div>

                                                    <!-- Outcomes Section -->
                                                    <div class="row g-3 align-center">
                                                        <div class="out_fields">
                                                            @foreach ($outcomes as $outcome)
                                                                <div class="row mb-3 outcome-group"
                                                                    data-id="{{ $outcome->id }}">
                                                                    <label for="outcomes"
                                                                        class="col-sm-2 col-form-label">Outcomes</label>
                                                                    <div class="col-sm-8">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control"
                                                                                id="outcome" name="outcome[]"
                                                                                placeholder="Provide Outcomes"
                                                                                value="{{ $outcome->outcome }}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-2">
                                                                        <button type="button"
                                                                            class="btn btn-sm btn-danger e_remove_out_row">
                                                                            <em class="icon ni ni-minus"></em>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                        <div class="out_fields">
                                                            <div class="row mb-3 course_outcomes">
                                                                <label for="outcomes"
                                                                    class="col-sm-2 col-form-label">Outcomes</label>
                                                                <div class="col-sm-8">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control"
                                                                            id="outcome" name="outcome[]"
                                                                            placeholder="Provide Outcomes">
                                                                        <span class="text-danger course_outcome"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">

                                                                    <button type="button"
                                                                        class="btn btn-sm btn-primary add_out_field_button">
                                                                        <em class="icon ni ni-plus"></em>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="course_outcomes_expands"></div>
                                                        </div>
                                                        <div class="row g-3 align-center">
                                                            <div class="objective_fields">
                                                                @foreach ($objectives as $objective)
                                                                    <div class="row mb-3 objective-group"
                                                                        data-id="{{ $objective->id }}">
                                                                        <label for="objective"
                                                                            class="col-sm-2 col-form-label">Objectives</label>
                                                                        <div class="col-sm-8">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control"
                                                                                    id="objective" name="objectives[]"
                                                                                    placeholder="Provide Objective"
                                                                                    value="{{ $objective->objectives }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-2">
                                                                            <button type="button"
                                                                                class="btn btn-sm btn-danger e_remove_objective_row">
                                                                                <em class="icon ni ni-minus"></em>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                @endforeach

                                                            </div>
                                                            <div class="objective_fields">
                                                                <div class="row mb-3 ">
                                                                    <label for="objectives"
                                                                        class="col-sm-2 col-form-label">Objectives
                                                                    </label>
                                                                    <div class="col-sm-8">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control"
                                                                                id="objectives" name="objectives[]"
                                                                                placeholder="Provide Objectives">
                                                                            <span
                                                                                class="text-danger course_objectives"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-2">
                                                                        <button type="button"
                                                                            class="btn btn-sm btn-primary add_objectives_field_button">
                                                                            <em class="icon ni ni-plus"></em>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="course_objectives_expands"></div>
                                                            </div>
                                                        </div>
                                                        <div class="row g-3 align-center">
                                                            <div class="are_eligible_fields">
                                                                @foreach ($eligibles as $eligible)
                                                                    <div class="row mb-3 eligible-group"
                                                                        data-id="{{ $eligible->id }}">
                                                                        <label for="eligible"
                                                                            class="col-sm-2 col-form-label">Who Are
                                                                            Eligible</label>
                                                                        <div class="col-sm-8">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control"
                                                                                    id="eligible"
                                                                                    name="course_eligible[]"
                                                                                    placeholder="Provide Objective"
                                                                                    value="{{ $eligible->course_eligible }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-2">
                                                                            <button type="button"
                                                                                class="btn btn-sm btn-danger e_remove_eligible_row">
                                                                                <em class="icon ni ni-minus"></em>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                            <div class="are_eligible_fields">
                                                                <div class="row mb-3 ">
                                                                    <label for="course_eligible"
                                                                        class="col-sm-2 col-form-label">Who Are
                                                                        Eligible</label>
                                                                    <div class="col-sm-8">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control"
                                                                                id="course_eligible"
                                                                                name="course_eligible[]"
                                                                                placeholder="Provide eligibility">
                                                                            <span
                                                                                class="text-danger course_eligible"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-2">
                                                                        <button type="button"
                                                                            class="btn btn-sm btn-primary add_eligible_field_button">
                                                                            <em class="icon ni ni-plus"></em>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="course_eligible_expands"></div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane" id="tabItem8">
                                                <div class="card-inner">
                                                    <div class="row g-3 align-center">
                                                        <div class="input_fields_wrap">
                                                            <div class="row mb-3">
                                                                <label for="imageInput"
                                                                    class="col-sm-2 col-form-label">Course
                                                                    Thumbnail</label>
                                                                <div class="col-sm-10">
                                                                    <div class="image-group">
                                                                        <div class="gallery card">
                                                                            <a class="gallery-image popup-image"
                                                                                href="#">
                                                                                <img id="previewImage"
                                                                                    class="w-30 rounded-top"
                                                                                    src="{{ asset('/') }}backend/assets/images/upload.jpg"
                                                                                    alt="Course Thumbnail">
                                                                            </a>
                                                                            <div
                                                                                class="gallery-body card-inner align-center justify-between flex-wrap g-2">
                                                                                <div class="user-card">
                                                                                    <div class="user-info">
                                                                                        <div class="form-group">
                                                                                            <div class="form-control-wrap">
                                                                                                <div class="form-file">
                                                                                                    <input type="file"
                                                                                                        class="form-file-input"
                                                                                                        id="imageInput"
                                                                                                        name="course_thumbnail">
                                                                                                    <label
                                                                                                        class="form-file-label"
                                                                                                        for="imageInput">Choose
                                                                                                        file</label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tabItem9">
                                                <div class="row mb-3">
                                                    <label for="coursePrice" class="col-sm-2 col-form-label">Meta
                                                        keywords</label>
                                                    <div class="col-sm-10">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control form-control-sm"
                                                                id="keyword" name="keyword"
                                                                value="{{ $meta->keyword ?? '' }}">
                                                            <span class="text-danger keyword"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="coursePrice" class="col-sm-2 col-form-label">Meta
                                                        description</label>
                                                    <div class="col-sm-10">
                                                        <div class="form-group">
                                                            <textarea class="form-control form-control-sm py-2 mb-2" id="description" name="meta_description">{{ $meta->meta_description ?? '' }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tabItem10">
                                                <div class="card-inner">
                                                    <div class="row g-3 align-center">
                                                        <div class="">
                                                            <div class="row mb-3">
                                                                <div class="col-sm-12 text-center">
                                                                    <div class="form-group">
                                                                        <div class="form-control-wrap">
                                                                            <em
                                                                                class="icon ni ni-check-round-fill fs-1 mb-2 py-2"></em>
                                                                            <h3 class="card-title">Thank You!</h3>
                                                                            <button type="submit"
                                                                                class="btn btn-primary btn-sm courseSaveBtn">Submit</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- .card-preview -->

                        </div><!-- .row -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('modals')
    @include('backend.pages.courses.partials.add-section')
    @include('backend.pages.courses.partials.update-section')
    @include('backend.pages.courses.partials.add-lession')
    @include('backend.pages.courses.partials.update-lession')
@endsection
@section('script_js')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        $(document).ready(function() {
            // Initialize Summernote editors
            $('.your_summernote').summernote({
                tabsize: 2,
                height: 200
            });

            $('#summary').summernote({
                height: 200
            });
            $('#update_lesson_summernote').summernote({
                height: 200
            });
            // Add and remove FAQ fields
            let i = 1;
            $('.add_field_button').click(function() {
                i++;
                let newRow = '<div class="row mb-3">' +
                    '<label for="course-faq" class="col-sm-2 col-form-label form-label"></label>' +
                    '<div class="col-sm-8">' +
                    '<div class="form-group">' +
                    '<input type="text" class="form-control" id="course-faq" name="faq_question[]" placeholder="Faq">' +
                    '</div>' +
                    '</div>' +
                    '<div class="col-sm-2">' +
                    '<button type="button" class="btn btn-sm btn-danger remove_row"><em class="icon ni ni-minus"></em></button>' +
                    '</div>' +
                    '</div>' +
                    '<div class="row mb-3">' +
                    '<label for="inputPassword3" class="col-sm-2 col-form-label"></label>' +
                    '<div class="col-sm-8">' +
                    '<div class="form-group">' +
                    '<textarea class="form-control form-control-sm py-2 mb-2" name="faq_answer[]" placeholder="Answer"></textarea>' +
                    '</div>' +
                    '</div>' +
                    '<div class="col-sm-2"></div>' +
                    '</div>';
                $('.course_faq_expand').append(newRow);
            });

            $(document).on('click', '.remove_row', function() {
                $(this).closest('.row').next('.row').remove(); // Remove the answer row
                $(this).closest('.row').remove(); // Remove the question row
            });

            // Add and remove Requirements fields
            let counter = 1;
            $('.add_rq__field_button').click(function() {
                counter++;
                let RnewRow = '<div class="row mb-3">' +
                    '<label for="requirments" class="col-sm-2 col-form-label form-label"></label>' +
                    '<div class="col-sm-8">' +
                    '<div class="form-group">' +
                    '<input type="text" class="form-control" id="requirments" name="requirement[]" placeholder="Provide Requirements">' +
                    '</div>' +
                    '</div>' +
                    '<div class="col-sm-2">' +
                    '<button type="button" class="btn btn-sm btn-danger remove_rq_row"><em class="icon ni ni-minus" ></em></button>' +
                    '</div>' +
                    '</div>';
                $('.course_requirments_expand').append(RnewRow);
            });

            $(document).on('click', '.remove_rq_row', function() {
                $(this).closest('.row').remove(); // Remove the entire row containing the Requirements field
            });

            // Add and remove Outcomes fields
            let outcomed = 1;
            $('.add_out_field_button').click(function() {
                outcomed++;
                var OutnewRow = '<div class="row mb-3 course_outcomes">' +
                    '<label for="outcomes" class="col-sm-2 col-form-label form-label"></label>' +
                    '<div class="col-sm-8">' +
                    '<div class="form-group">' +
                    '<input type="text" class="form-control" id="outcomes' + counter +
                    '" name="outcome[]" placeholder="Provide Outcomes">' +
                    '</div>' +
                    '</div>' +
                    '<div class="col-sm-2">' +
                    '<button type="button" class="btn btn-sm btn-danger remove_out_field_button"><em class="icon ni ni-minus"></em></button>' +
                    '</div>' +
                    '</div>';
                $('.course_outcomes_expands').append(OutnewRow);
            });

            $(document).on('click', '.remove_out_field_button', function() {
                $(this).closest('.row').remove(); // Remove the entire row containing the Outcome field
            });

            let objectived = 1;
            $('.add_objectives_field_button').click(function() {
                outcomed++;
                var OutnewRow = '<div class="row mb-3 course_objectives">' +
                    '<label for="outcomes" class="col-sm-2 col-form-label form-label"></label>' +
                    '<div class="col-sm-8">' +
                    '<div class="form-group">' +
                    '<input type="text" class="form-control" id="objectives' + counter +
                    '" name="objectives[]" placeholder="Provide Objectives">' +
                    '</div>' +
                    '</div>' +
                    '<div class="col-sm-2">' +
                    '<button type="button" class="btn btn-sm btn-danger remove_objectives_field_button"><em class="icon ni ni-minus"></em></button>' +
                    '</div>' +
                    '</div>';
                $('.course_objectives_expands').append(OutnewRow);
            });

            $(document).on('click', '.remove_objectives_field_button', function() {
                $(this).closest('.row').remove(); // Remove the entire row containing the Outco
            });
            let eligible = 1;
            $('.add_eligible_field_button').click(function() {
                eligible++;
                var Eligible = '<div class="row mb-3 course_eligible">' +
                    '<label for="outcomes" class="col-sm-2 col-form-label form-label"></label>' +
                    '<div class="col-sm-8">' +
                    '<div class="form-group">' +
                    '<input type="text" class="form-control" id="course_eligible' + counter +
                    '" name="course_eligible[]" placeholder="Provide Eligibility">' +
                    '</div>' +
                    '</div>' +
                    '<div class="col-sm-2">' +
                    '<button type="button" class="btn btn-sm btn-danger remove_eligible_field_button"><em class="icon ni ni-minus"></em></button>' +
                    '</div>' +
                    '</div>';
                $('.course_eligible_expands').append(Eligible);
            });

            $(document).on('click', '.remove_eligible_field_button', function() {
                $(this).closest('.row').remove(); // Remove the entire row containing the Outco
            });

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // Handle FAQ row deletion with confirmation

            $(document).on('click', '.remove_faq_row', function() {
                var faqGroup = $(this).closest('.faq-group');
                var faqId = faqGroup.data('id');

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: '/admin/faq/' + faqId,
                            type: 'GET',
                            data: {
                                _token: '{{ csrf_token() }}'
                            },
                            success: function(response) {
                                if (response.status === 'success') {
                                    faqGroup.remove();
                                    Swal.fire(
                                        'Deleted!',
                                        'The FAQ has been deleted.',
                                        'success'
                                    );
                                    flashMessage(response.status, response.message);
                                } else {
                                    Swal.fire(
                                        'Error!',
                                        'Failed to delete the FAQ.',
                                        'error'
                                    );
                                }
                            },
                            error: function() {
                                Swal.fire(
                                    'Error!',
                                    'Failed to delete the FAQ.',
                                    'error'
                                );
                            }
                        });
                    }
                });
            });

            // Handle Requirement row deletion with confirmation
            $(document).on('click', '.remove_rqr_row', function() {
                var requirementGroup = $(this).closest('.requirement-group');
                var requirementId = requirementGroup.data('id');

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: '/admin/requirement/' + requirementId,
                            type: 'GET',
                            data: {
                                _token: '{{ csrf_token() }}'
                            },
                            success: function(response) {
                                if (response.status === 'success') {
                                    requirementGroup.remove();
                                    Swal.fire(
                                        'Deleted!',
                                        'The requirement has been deleted.',
                                        'success'
                                    );
                                } else {
                                    Swal.fire(
                                        'Error!',
                                        'Failed to delete the requirement.',
                                        'error'
                                    );
                                }
                            },
                            error: function() {
                                Swal.fire(
                                    'Error!',
                                    'Failed to delete the requirement.',
                                    'error'
                                );
                            }
                        });
                    }
                });
            });

            // Handle Outcome row deletion with confirmation
            $(document).on('click', '.e_remove_out_row', function() {
                var outcomeGroup = $(this).closest('.outcome-group');
                var outcomeId = outcomeGroup.data('id');

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: '/admin/outcome/' + outcomeId,
                            type: 'GET',
                            data: {
                                _token: '{{ csrf_token() }}'
                            },
                            success: function(response) {
                                if (response.status === 'success') {
                                    outcomeGroup.remove();
                                    Swal.fire(
                                        'Deleted!',
                                        'The outcome has been deleted.',
                                        'success'
                                    );
                                } else {
                                    Swal.fire(
                                        'Error!',
                                        'Failed to delete the outcome.',
                                        'error'
                                    );
                                }
                            },
                            error: function() {
                                Swal.fire(
                                    'Error!',
                                    'Failed to delete the outcome.',
                                    'error'
                                );
                            }
                        });
                    }
                });
            });

            // Handle Objective row deletion with confirmation
            $(document).on('click', '.e_remove_objective_row', function() {
                var objectiveGroup = $(this).closest('.objective-group');
                var objectiveId = objectiveGroup.data('id');

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: '/admin/objective/' + objectiveId,
                            type: 'GET', // Consider changing this to DELETE if you're following RESTful conventions
                            data: {
                                _token: '{{ csrf_token() }}'
                            },
                            success: function(response) {
                                if (response.status === 'success') {
                                    objectiveGroup.remove();
                                    Swal.fire(
                                        'Deleted!',
                                        'The objective has been deleted.',
                                        'success'
                                    );
                                } else {
                                    Swal.fire(
                                        'Error!',
                                        'Failed to delete the objective.',
                                        'error'
                                    );
                                }
                            },
                            error: function() {
                                Swal.fire(
                                    'Error!',
                                    'Failed to delete the objective.',
                                    'error'
                                );
                            }
                        });
                    }
                });
            });
            // Handle Eligible row deletion with confirmation
            $(document).on('click', '.e_remove_eligible_row', function() {
                var eligibleGroup = $(this).closest('.eligible-group');
                var eligibleId = eligibleGroup.data('id');

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: '/admin/eligible/' + eligibleId,
                            type: 'GET', // Consider changing this to DELETE if you're following RESTful conventions
                            data: {
                                _token: '{{ csrf_token() }}'
                            },
                            success: function(response) {
                                if (response.status === 'success') {
                                    eligibleGroup.remove();
                                    Swal.fire(
                                        'Deleted!',
                                        'The eligible row has been deleted.',
                                        'success'
                                    );
                                } else {
                                    Swal.fire(
                                        'Error!',
                                        'Failed to delete the eligible row.',
                                        'error'
                                    );
                                }
                            },
                            error: function() {
                                Swal.fire(
                                    'Error!',
                                    'Failed to delete the eligible row.',
                                    'error'
                                );
                            }
                        });
                    }
                });
            });


            $('#updateCourseForm').on('submit', function(e) {
                e.preventDefault();

                var formData = new FormData(this);

                // Remove existing description and meta_description to prevent duplication
                formData.delete('description');
                formData.delete('meta_description');

                let courseDescription = $('textarea[name="description"]').val();
                let courseMetaDescription = $('textarea[name="meta_description"]').val();

                formData.append('description', courseDescription);
                formData.append('meta_description', courseMetaDescription);

                // Collect FAQ questions and answers
                let courseFqQue = $('input[name="faq_question[]"]').map(function() {
                    return $(this).val();
                }).get().filter(value => value !== "");
                formData.append('courseFqQue', JSON.stringify(courseFqQue));

                let courseFqAns = $('textarea[name="faq_answer[]"]').map(function() {
                    return $(this).val();
                }).get().filter(value => value !== "");
                formData.append('courseFqAns', JSON.stringify(courseFqAns));

                // Collect requirements and outcomes
                let courseReq = $('input[name="requirement[]"]').map(function() {
                    return $(this).val();
                }).get().filter(value => value !== "");
                formData.append('courseReq', JSON.stringify(courseReq));

                let courseOutcomes = $('input[name="outcome[]"]').map(function() {
                    return $(this).val();
                }).get().filter(value => value !== "");
                formData.append('courseOutcomes', JSON.stringify(courseOutcomes));

                let courseObjectivs = $('input[name="objectives[]"]').map(function() {
                    return $(this).val();
                }).get().filter(value => value !== "");
                formData.append('courseObjectivs', JSON.stringify(courseObjectivs));

                let courseEligibles = $('input[name="course_eligible[]"]').map(function() {
                    return $(this).val();
                }).get().filter(value => value !== "");
                formData.append('courseEligibles', JSON.stringify(courseEligibles));

                $.ajax({
                    url: $(this).attr('action'),
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.status === 'success') {
                            flashMessage(response.status, response.message);
                            location.reload();
                        } else {
                            flashMessage(response.status, response.message);
                        }
                    },
                    error: function(response) {
                        var errors = response.responseJSON.errors;
                        $.each(errors, function(key, value) {
                            alert(value[0]); // Display each validation error
                        });
                    }
                });
            });

        });
    </script>
    <script type="text/javascript">
        // Function to handle section editing
        $(document).on('click', '.EditSection', function(e) {
            e.preventDefault();
            var section_id = $(this).data('id');
            console.log('section_id:', section_id);

            $.ajax({
                url: '/admin/edit-section',
                method: 'GET',
                data: {
                    section_id: section_id
                },
                success: function(response) {

                    $('#e_section_id').val(response.id);
                    $('#e_section_title').val(response.section_title);

                    $('#editSection').modal(
                        'show'); // Show the modal after populating data
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });

        // Function to handle form submission for updating a section
        $('#UpdateSectionFormID').on('submit', function(e) {
            e.preventDefault();
            var sectionId = $('#e_section_id').val(); // Get the section ID from the hidden input field
            var formData = $(this).serialize();

            $.ajax({
                url: '/admin/update-section/',
                method: 'POST',
                data: formData,
                success: function(response) {
                    // Handle success response
                    if (response.status === 'success') {
                        flashMessage(response.status, response.message);
                        $("#UpdateSectionFormID")[0].reset();
                        $('#editSection').modal('hide');
                        location.reload();
                    } else {
                        $('.print-error-msg-section').show();
                        $('.print-error-msg-section ul').html('');
                        $.each(response.errors, function(key, value) {
                            $('.print-error-msg-section ul').append(
                                '<li>' + value + '</li>');
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
        // Function to handle form submission for creating a section
        $(".sectionBtn").click(function(e) {
            e.preventDefault();
            var form = $('#SectionFormID')[0];
            var formData = new FormData(form);

            $.ajax({
                url: "{{ route('section.save') }}",
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log(response);
                    if (response.status === 'success') {
                        flashMessage(response.status, response.message);
                        $("#SectionFormID")[0].reset();
                        location.reload();
                    } else {
                        printErrorMsgForSection(response.errors);
                    }
                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        printErrorMsgForSection(xhr.responseJSON.errors);
                    } else {
                        console.error("An error occurred:", xhr.responseText);
                    }
                }
            });
        });

        // Function to print validation error messages
        function printErrorMsgForSection(errors) {
            if (errors.section_title) {
                $(".print-error-msg-section").html('<ul><li>' + errors.section_title[0] +
                    '</li></ul>').css('display', 'block');
            } else {
                $(".print-error-msg-section").html('').css('display', 'none');
            }
        }

        // delete section 

        document.querySelectorAll('.deleteSection').forEach(function(element) {
            element.addEventListener('click', function(event) {
                event.preventDefault();
                let sectionId = this.getAttribute('data-id');
                Swal.fire({
                    title: 'Are you sure?',
                    text: 'You won\'t be able to revert this!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        fetch(`/admin/section/delete/${sectionId}`, {
                                method: 'DELETE',
                                headers: {
                                    'X-CSRF-TOKEN': document.querySelector(
                                        'meta[name="csrf-token"]').getAttribute('content'),
                                    'Content-Type': 'application/json'
                                }
                            })
                            .then(response => response.json())
                            .then(data => {
                                if (data.status === 'success') {
                                    Swal.fire(
                                        'Deleted!',
                                        'Your section has been deleted.',
                                        'success'
                                    ).then(() => {
                                        location
                                            .reload(); // Reload the page or remove the section from the DOM
                                    });
                                } else {
                                    Swal.fire(
                                        'Error!',
                                        'There was an error deleting the section.',
                                        'error'
                                    );
                                }
                            })
                            .catch(error => {
                                console.error('Error:', error);
                                Swal.fire(
                                    'Error!',
                                    'There was an error deleting the section.',
                                    'error'
                                );
                            });
                    }
                });
            });
        });

        function printEditCourseErrorMsg(msg) {
            $(". print-error-msg-edit-course").find("ul").html('');
            $(". print-error-msg-edit-course").css('display', 'block');
            $.each(msg, function(key, value) {
                $(". print-error-msg-edit-course").find("ul").append('<li>' + value + '</li>');
            });
        }
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            // edit lesson 
            $(document).on('click', '.EditLesson', function(e) {
                e.preventDefault();
                var lsId = $(this).data('id');

                console.log(lsId);
                $.ajax({
                    url: '/admin/edit_lesson',
                    method: 'GET',
                    data: {
                        id: lsId
                    },
                    success: function(response) {
                        var lessons_resp = response.lessons;
                        $('#e_lesson_id').val(lessons_resp.id);
                        $('#e_ls_title').val(lessons_resp.lession_title);
                        $('#update_lesson_text').val(lessons_resp.description);
                        // Get summary without tags
                        var summaryWithoutTags = lessons_resp.summary.replace(/<\/?[^>]+(>|$)/g,
                            "");
                        $("#update_lesson_summernote").summernote("code", summaryWithoutTags);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            });

            $(document).on('submit', '#UpdateLessonFormID', function(event) {
                event.preventDefault();
                let formData = new FormData(this);
                formData.append("summary", $('#update_lesson_summernote').val());
                formData.append("description", $('#update_lesson_text').val());
                console.log(formData);

                $.ajax({
                    url: '/admin/lesson/update', // URL to your update route
                    method: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.status === 'success') {
                            // Show success message or redirect to another page
                            console.log('Updated successfully');
                            flashMessage(response.status, response.message);
                            $("#UpdateLessonFormID")[0].reset();
                            $('#updateLession').modal('hide');
                            location.reload();
                        } else {
                            // Show error message
                            printErrorMsgForLessions(response.error);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('XHR request failed:', xhr.responseText);
                    }
                });
            });

            // Handle form submission
            $('#lessonForm').on('submit', function(e) {
                e.preventDefault(); // Prevent default form submission
                // Create a FormData object for handling file uploads
                let formData = new FormData(this);
                let summary = $('textarea[name="summary"]').val();
                let description = $('textarea[name="description"]').val();
                formData.append('summary', summary);
                formData.append('description', description);
                $.ajax({
                    url: "{{ route('lesson.save') }}", // Change this to your server endpoint
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.status === 'success') {
                            console.log(response);
                            flashMessage(response.status, response.message);
                            $("#lessonForm")[0].reset();
                            location.reload();
                        } else {
                            printErrorMsgForLessions(response.error);
                        }
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            printErrorMsgForLessions(xhr.responseJSON.errors);
                        }
                    }
                });
            });

            function printErrorMsgForLessions(errors) {
                $(".print-error-msg-lession").find("ul").html('');
                $(".print-error-msg-lession").css('display', 'block');
                $.each(errors, function(key, value) {
                    $(".print-error-msg-lession").find("ul").append('<li>' + value + '</li>');
                });
            }

            // delete lesson 
            document.querySelectorAll('.deleteLesson').forEach(function(element) {
                element.addEventListener('click', function(event) {
                    event.preventDefault();
                    let lessonId = this.getAttribute('data-id');

                    Swal.fire({
                        title: 'Are you sure?',
                        text: 'You won\'t be able to revert this!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            fetch(`/admin/lesson/delete/${lessonId}`, {
                                    method: 'DELETE',
                                    headers: {
                                        'X-CSRF-TOKEN': document.querySelector(
                                            'meta[name="csrf-token"]').getAttribute(
                                            'content'),
                                        'Content-Type': 'application/json'
                                    }
                                })
                                .then(response => response.json())
                                .then(data => {
                                    if (data.status === 'success') {
                                        Swal.fire(
                                            'Deleted!',
                                            'Your lesson has been deleted.',
                                            'success'
                                        ).then(() => {
                                            location
                                                .reload(); // Reload the page or remove the lesson from the DOM
                                        });
                                    } else {
                                        Swal.fire(
                                            'Error!',
                                            'There was an error deleting the lesson.',
                                            'error'
                                        );
                                    }
                                })
                                .catch(error => {
                                    console.error('Error:', error);
                                    Swal.fire(
                                        'Error!',
                                        'There was an error deleting the lesson.',
                                        'error'
                                    );
                                });
                        }
                    });
                });
            });
        });
    </script>

@endsection
