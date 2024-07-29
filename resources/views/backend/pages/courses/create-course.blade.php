@extends('backend.layouts.master')
@section('title', 'Create course')
@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/') }}backend/assets/css/drag.css">
    <style>
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
            <div class=
            "nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h6 class="nk-block-title page-title">Add new course</h6>
                            </div><!-- .nk-block-head-content -->
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
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block nk-block-lg">
                        <div class="row g-gs">
                            <div class="card card-bordered card-preview">
                                <div class="card-inner">
                                    <ul class="nav nav-tabs mt-n3">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#tabItem5"><em
                                                    class="icon ni ni-tags"></em><span>Basic</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#tabItem6"><em
                                                    class="icon ni ni-edit"></em><span>Info</span></a>
                                        </li>
                                   
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#tabItem8"><em
                                                    class="icon ni ni-play"></em><span>Media</span></a>
                                        </li>
                                     
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#tabItem9"><em
                                                    class="icon ni ni-pen2"></em><span>Seo</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#tabItem10"><em
                                                    class="icon ni ni-done"></em><span>Finish</span></a>
                                        </li>
                                    </ul>
                                    <form class="py-3" id="CourseForm" enctype="multipart/form-data">
                                        <div class="alert alert-danger print-create-course-error-msg" style="display:none">
                                            <ul></ul>
                                        </div>

                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tabItem5">
                                                <div class="card-inner">
                                                    <div class="row g-3 align-center">
                                                        <div class="row mb-3">
                                                            <label for="course-title" class="col-sm-2 col-form-label">Course
                                                                Title</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="course_title"
                                                                    name="course_title" placeholder="course title">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="course-title" class="col-sm-2 col-form-label">Course
                                                                Title (Bangla)</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="course_title_bn"
                                                                    name="course_title_bn" placeholder="course title bangla">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="course-title" class="col-sm-2 col-form-label">
                                                                About</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="about"
                                                                    name="about" placeholder="course about">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="course-title" class="col-sm-2 col-form-label">
                                                                About (Bangla) </label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="course_about_bn"
                                                                    name="course_about_bn" placeholder="course about bangla">
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <label for="course_short_desc"
                                                                class="col-sm-2 col-form-label">Short
                                                                description</label>
                                                            <div class="col-sm-10">
                                                                <div class="form-group">
                                                                    <textarea class="form-control form-control-sm py-2 mb-2" id="course_short_desc" name="course_short_desc"></textarea>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="short_description_bn"
                                                                class="col-sm-2 col-form-label">Short
                                                                description  (Bangla) </label>
                                                            <div class="col-sm-10">
                                                                <div class="form-group">
                                                                    <textarea class="form-control form-control-sm py-2 mb-2" id="short_description_bn" name="short_description_bn"></textarea>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <label for="Description"
                                                                class="col-sm-2 col-form-label">Description</label>
                                                            <div class="col-sm-10">
                                                                <textarea name="description" id="description" class="form-control py-3 m-1 p-3 your_summernote description" rows="4"
                                                                    cols="4"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="Description"
                                                                class="col-sm-2 col-form-label">Description (Bangla)</label>
                                                            <div class="col-sm-10">
                                                                <textarea name="description_bn" id="description_bn" class="form-control py-3 m-1 p-3 your_summernote description" rows="4"
                                                                    cols="4"></textarea>
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
                                                                            <option value="Beginner">Beginner
                                                                            </option>
                                                                            <option value="Intermediate">Intermediate
                                                                            </option>
                                                                            <option value="Advanced">Advanced
                                                                            </option>
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
                                                                            <option value="English">English
                                                                            </option>
                                                                            <option value="Bangla">Bangla
                                                                            </option>

                                                                        </select>
                                                                    </div>
                                                                  
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
                                                                                        value="Active">
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
                                                                                        value="Private">
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
                                                                                        value="Upcoming">
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
                                                            <label for="course-title" class="col-sm-2 col-form-label">Course
                                                                Duration </label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="duration"
                                                                    name="duration" placeholder="course duration">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="course-title" class="col-sm-2 col-form-label">Course
                                                                Enroll Date </label>
                                                            <div class="col-sm-10">
                                                                <input type="date" class="form-control" id="schedules" name="schedules" placeholder="course schedules">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="input_fields_wrap">
                                                                <div class="row mb-3 ">
                                                                    <label for="course-free" class="col-sm-2 col-form-label ">
                                                                    </label>
                                                                    <div class="col-sm-10">
                                                                        <div class="form-group">
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="is_free" name="is_free"
                                                                                    value="1">
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
                                                                                id="course_price" name="price">
                                                                           
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label for="coursePrice"
                                                                        class="col-sm-2 col-form-label">Course
                                                                        Price (Bangla)</label>
                                                                    <div class="col-sm-10">
                                                                        <div class="form-group">
                                                                            <input type="number"
                                                                                class="form-control form-control-sm"
                                                                                placeholder="Enter course price banlga"
                                                                                id="price_bn" name="price_bn">
                                                                           
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
                                                                                id="discounted_price" name="discounted_price">
                                                                            <span class="text-danger discounted_price"></span>
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
                                                                                                value="0">
                                                                                            <label class="custom-control-label"
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
                                                                                                value="1">
                                                                                            <label class="custom-control-label"
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
                                                    <div class="row g-3 align-center">
                                                        <div class="input_fields_wrap">
                                                            <div class="row mb-3 ">
                                                                <label for="faq_question"
                                                                    class="col-sm-2 col-form-label ">Course
                                                                    FAQ
                                                                </label>
                                                                <div class="col-sm-8">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control"
                                                                            id="faq_question" name="faq_question[]"
                                                                            placeholder="Faq">
                                                                        <span class="text-danger course_faq"></span>
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
                                                                <label for="course_answer"
                                                                    class="col-sm-2 col-form-label"></label>
                                                                <div class="col-sm-8">
                                                                    <div class="form-group">
                                                                        <textarea class="form-control form-control-sm py-2 mb-2" id="faq_answer" name="faq_answer[]" placeholder="Answer"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2"></div>
                                                            </div>
                                                            <div class="course_faq_expand"></div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 align-center">
                                                        <div class="req_fields">

                                                            <div class="row mb-3">
                                                                <label for="requirement"
                                                                    class="col-sm-2 col-form-label">Requirments
                                                                </label>
                                                                <div class="col-sm-8">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control"
                                                                            id="requirement" name="requirement[]"
                                                                            placeholder="Provide Requirments">
                                                                        <span
                                                                            class="text-danger course_requirement"></span>
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
                                                    <div class="row g-3 align-center">
                                                        <div class="out_fields">
                                                            <div class="row mb-3 ">
                                                                <label for="outcomes"
                                                                    class="col-sm-2 col-form-label">Outcomes
                                                                </label>
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
                                                    </div>
                                                    <div class="row g-3 align-center">
                                                        <div class="out_fields">
                                                            <div class="row mb-3 ">
                                                                <label for="objectives"
                                                                    class="col-sm-2 col-form-label">Objectives
                                                                </label>
                                                                <div class="col-sm-8">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control"
                                                                            id="objectives" name="objectives[]"
                                                                            placeholder="Provide Objectives">
                                                                        <span class="text-danger course_objectives"></span>
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
                                                        <div class="out_fields">
                                                            <div class="row mb-3 ">
                                                                <label for="course_eligible"
                                                                    class="col-sm-2 col-form-label">Who are eligible
                                                                </label>
                                                                <div class="col-sm-8">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control"
                                                                            id="course_eligible" name="course_eligible[]"
                                                                            placeholder="Provide eligibility">
                                                                        <span class="text-danger course_eligible"></span>
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
                                          
                                            <div class="tab-pane" id="tabItem8">
                                                <div class="card-inner">
                                                    <div class="row g-3 align-center">
                                                        <div class="input_fields_wrap">
                                                            <!-- Course thumbnail -->
                                                            <div class="row mb-3">
                                                                <label class="col-sm-2 col-form-label">Course Thumbnail</label>
                                                                <div class="col-sm-10">
                                                                    <div class="image-group">
                                                                        <div class="gallery card">
                                                                            <div class="gallery-image popup-image">
                                                                                <img class="rounded-top course-image-preview" src="{{ asset('/') }}backend/assets/images/upload.jpg" alt="">
                                                                            </div>
                                                                            <div class="gallery-body card-inner align-center justify-between flex-wrap g-2">
                                                                                <div class="form-control-wrap">
                                                                                    <div class="form-file">
                                                                                        <input type="file" class="form-file-input" id="course_thumbnail" name="course_thumbnail">
                                                                                        <label class="form-file-label">Upload Image</label>
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
                                                    <label for="coursePrice"class="col-sm-2 col-form-label">Meta
                                                        keywords</label>
                                                    <div class="col-sm-10">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control form-control-sm"
                                                                id="keyword" name="keyword">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="coursePrice"class="col-sm-2 col-form-label">Meta
                                                        description</label>
                                                    <div class="col-sm-10">
                                                        <div class="form-group">
                                                            <textarea class="form-control form-control-sm py-2 mb-2" id="meta_description" name="meta_description"></textarea>
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
@section('script_js')
@include('backend.pages.courses.partials.course_script')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>



    <script type="text/javascript">
      
        $('.your_summernote').summernote({
            tabsize: 2,
            height: 200
        });
    </script>
   

    <script>
        $(document).ready(function() {
            // CSRF Token
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            // Form submission
            $("#CourseForm").on('submit', function(e) {
                e.preventDefault();
                let formData = new FormData(this);
                // Collect and append form field values
                let courseDescription = $('textarea[name="description"]').summernote("code");
                console.log(courseDescription);
                let courseMetaDescription = $('textarea[name="meta_description"]').val();
                console.log(courseMetaDescription);
                formData.append('description', courseDescription);
                formData.append('meta_description', courseMetaDescription);
                // Collect FAQ questions and answers
                let courseFqQue = $('input[name="faq_question[]"]').map(function() {
                    return $(this).val();
                }).get();
                console.log(courseFqQue);
                let courseFqAns = $('textarea[name="faq_answer[]"]').map(function() {
                    return $(this).val();
                }).get();
                console.log(courseFqAns);
                formData.append('courseFqQue', JSON.stringify(courseFqQue));
                formData.append('courseFqAns', JSON.stringify(courseFqAns));
                // Collect requirements and outcomes
                let courseReq = $('input[name="requirement[]"]').map(function() {
                    return $(this).val();
                }).get();
                console.log(courseReq);
                let courseOutcomes = $('input[name="outcome[]"]').map(function() {
                    return $(this).val();
                }).get();
                console.log(courseOutcomes);
                let courseObjectives = $('input[name="objectives[]"]').map(function() {
                    return $(this).val();
                }).get();
                console.log(courseObjectives);
                let course_Eligible = $('input[name="course_eligible[]"]').map(function() {
                    return $(this).val();
                }).get();
                console.log(course_Eligible);
                formData.append('courseReq', JSON.stringify(courseReq));
                formData.append('courseOutcomes', JSON.stringify(courseOutcomes));
                formData.append('courseObjectives', JSON.stringify(courseObjectives));
                formData.append('course_Eligible', JSON.stringify(course_Eligible));
                // Ajax request
                $.ajax({
                    url: '{{ route('courses.save') }}',
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        // console.log(response);
                        if (response.status === 'success') {
                            console.log(response);
                            flashMessage(response.status, response.message);
                            $("#CourseForm")[0].reset();
                            location.reload();
                        } else {
                            printCourseErrorMsg(response.error);
                        }
                    },
                    error: function(xhr, status, error) {
                        if (xhr.status === 422) {
                            var errors = xhr.responseJSON.errors;
                            printCourseErrorMsg(errors);
                        }
                    }
                });
            });


            function printCourseErrorMsg(msg) {
                $(".print-create-course-error-msg").find("ul").html('');
                $(".print-create-course-error-msg").css('display', 'block');
                $.each(msg, function(key, value) {
                    $(".print-create-course-error-msg").find("ul").append('<li>' + value + '</li>');
                });
            }
        });
    </script>
@endsection
