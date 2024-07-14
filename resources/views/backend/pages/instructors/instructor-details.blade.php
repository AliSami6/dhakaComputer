@extends('backend.layouts.master')
@section('title', 'Instructor Details')
@section('styles')

@endsection
@section('admin-content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Instructor / <strong
                                    class="text-primary small">{{ $detailsInstructor->first_name . ' ' . $detailsInstructor->last_name }}</strong>
                            </h3>
                        </div>
                    </div>
                    <div class="nk-block nk-block-lg">
                        <div class="card card-stretch">
                            <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#personal-info"><em
                                            class="icon ni ni-user-circle-fill"></em><span>Personal information</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#profile-overview"><em
                                            class="icon ni ni-eye-fill"></em><span>Overview</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#profile-courses"><em
                                            class="icon ni ni-book-fill"></em><span>Courses</span></a>
                                </li>
                                {{-- <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#profile-review"><em class="icon ni ni-thumbs-up"></em><span>Review</span> </a>
                            </li> --}}
                                <li class="nav-item nav-item-trigger">
                                    <a href="{{ route('instructor.form', $detailsInstructor->id) }}"
                                        class="btn btn-icon btn-trigger"><em class="icon ni ni-edit"></em></a>
                                </li>
                            </ul>
                            <div class="card-inner">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="personal-info">
                                        <div class="nk-block">
                                            <div class="profile-ud-list">
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">Job Title</span>
                                                        <span
                                                            class="profile-ud-value">{{ $detailsInstructor->job_title }}</span>
                                                    </div>
                                                </div>
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">Full Name</span>
                                                        <span
                                                            class="profile-ud-value">{{ $detailsInstructor->first_name . ' ' . $detailsInstructor->last_name }}</span>
                                                    </div>
                                                </div>
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">Date of Birth</span>
                                                        <span
                                                            class="profile-ud-value">{{ date('j F y', strtotime($detailsInstructor->dob)) }}</span>
                                                    </div>
                                                </div>
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">Profession</span>

                                                        @if ($detailsInstructor->professions->isNotEmpty())
                                                            <span
                                                                class="profile-ud-value">{{ $detailsInstructor->professions->first()->professions }}</span>
                                                        @endif

                                                    </div>
                                                </div>
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">Mobile Number</span>
                                                        <span class="profile-ud-value">{{ $detailsInstructor->phone }}
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">Email Address</span>
                                                        <span
                                                            class="profile-ud-value">{{ $detailsInstructor->email }}</span>
                                                    </div>
                                                </div>
                                            </div><!-- .profile-ud-list -->
                                        </div><!-- .nk-block -->
                                        <div class="nk-block">
                                            <div class="nk-block-head nk-block-head-line">
                                                <h6 class="title overline-title text-base">Additional Information</h6>
                                            </div><!-- .nk-block-head -->
                                            <div class="profile-ud-list">
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">Joining Date</span>
                                                        <span
                                                            class="profile-ud-value">{{ date('j F y', strtotime($detailsInstructor->join_date)) }}</span>
                                                    </div>
                                                </div>
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">Skill Level </span>
                                                        <span
                                                            class="profile-ud-value">{{ $detailsInstructor->skill_level }}</span>
                                                    </div>
                                                </div>
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">Country</span>
                                                        <span
                                                            class="profile-ud-value">{{ $detailsInstructor->country }}</span>
                                                    </div>
                                                </div>
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">Nationality</span>
                                                        <span
                                                            class="profile-ud-value">{{ $detailsInstructor->nationality }}</span>
                                                    </div>
                                                </div>
                                            </div><!-- .profile-ud-list -->
                                        </div><!-- .nk-block -->

                                    </div><!-- tab pane -->
                                    <div class="tab-pane" id="profile-overview">
                                        <div class="nk-block-head nk-block-head-md">
                                            <div class="nk-block-between">
                                                <div class="nk-block-head-content">
                                                    <h5 class="nk-block-title">Profile Overview</h5>
                                                </div><!-- .nk-block-head-content -->
                                                <div class="nk-block-head-content">
                                                    <div class="toggle-wrap nk-block-tools-toggle">
                                                        <a href="#"
                                                            class="btn btn-icon btn-trigger toggle-expand me-n1"
                                                            data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                                        <div class="toggle-expand-content" data-content="pageMenu">
                                                            <ul class="nk-block-tools g-3">
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#"
                                                                            class="dropdown-toggle btn btn-white btn-dim btn-outline-light"
                                                                            data-bs-toggle="dropdown"><em
                                                                                class="d-none d-sm-inline icon ni ni-calender-date"></em><span><span
                                                                                    class="d-none d-md-inline">Last</span>
                                                                                30 Days</span><em
                                                                                class="dd-indc icon ni ni-chevron-right"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#"><span>Last 30
                                                                                            Days</span></a></li>
                                                                                <li><a href="#"><span>Last 6
                                                                                            Months</span></a></li>
                                                                                <li><a href="#"><span>Last 1
                                                                                            Years</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .toggle-wrap -->
                                                </div><!-- .nk-block-head-content -->
                                            </div>
                                        </div><!-- .nk-block-head -->
                                        <div class="nk-block">
                                            <div class="row g-gs">
                                                <div class="col-xxl-8 col-lg-12">
                                                    <div class="card card-full card-bordered border-light">
                                                        <div class="nk-ecwg nk-ecwg5">
                                                            <div class="card-inner">
                                                                <div class="card-title-group align-start pb-3 g-2">
                                                                    <div class="card-title">
                                                                        <h6 class="title">Total Earning</h6>
                                                                    </div>
                                                                    <div class="card-tools">
                                                                        <em class="card-hint icon ni ni-help"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="left"
                                                                            title="Revenu of this month"></em>
                                                                    </div>
                                                                </div>
                                                                <div class="data-group">
                                                                    <div class="data">
                                                                        <div class="title">Monthly</div>
                                                                        <div class="amount amount-sm">9.28K</div>
                                                                        <div class="change up"><em
                                                                                class="icon ni ni-arrow-long-up"></em>4.63%
                                                                        </div>
                                                                    </div>
                                                                    <div class="data">
                                                                        <div class="title">Weekly</div>
                                                                        <div class="amount amount-sm">2.69K</div>
                                                                        <div class="change down"><em
                                                                                class="icon ni ni-arrow-long-down"></em>1.92%
                                                                        </div>
                                                                    </div>
                                                                    <div class="data">
                                                                        <div class="title">Daily (Avg)</div>
                                                                        <div class="amount amount-sm">0.94K</div>
                                                                        <div class="change up"><em
                                                                                class="icon ni ni-arrow-long-up"></em>3.45%
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="nk-ecwg5-ck">
                                                                    <canvas class="lms-line-chart-s4"
                                                                        id="storeVisitors"></canvas>
                                                                </div>
                                                                <div class="chart-label-group">
                                                                    <div class="chart-label">01 Jul, 2020</div>
                                                                    <div class="chart-label">30 Jul, 2020</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- .card -->
                                                </div><!-- .col -->
                                                <div class="col-xxl-4">
                                                    <div class="row g-gs">
                                                        <div class="col-xxl-12 col-md-6">
                                                            <div class="card card-full card-bordered border-light">
                                                                <div class="nk-ecwg nk-ecwg3">
                                                                    <div class="card-inner pb-2">
                                                                        <div class="card-title-group">
                                                                            <div class="card-title">
                                                                                <h6 class="title"><a
                                                                                        href="">Active Students</a>
                                                                                </h6>
                                                                            </div>
                                                                        </div>
                                                                        <div class="data">
                                                                            <div class="data-group">
                                                                                <div class="amount">329</div>
                                                                                <div class="info text-end"><span
                                                                                        class="change up text-danger"><em
                                                                                            class="icon ni ni-arrow-long-up"></em>4.63%</span><br><span>vs.
                                                                                        last week</span></div>
                                                                            </div>
                                                                        </div>
                                                                    </div><!-- .card-inner -->
                                                                    <div
                                                                        class="nk-ck-wrap mt-auto overflow-hidden rounded-bottom">
                                                                        <div class="nk-ecwg3-ck">
                                                                            <canvas class="lms-line-chart-s1"
                                                                                id="activeStudents"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- .nk-ecwg -->
                                                            </div><!-- .card -->
                                                        </div><!-- .col -->
                                                        <div class="col-xxl-12 col-md-6">
                                                            <div class="card card-full card-bordered border-light">
                                                                <div class="nk-ecwg nk-ecwg3">
                                                                    <div class="card-inner pb-2">
                                                                        <div class="card-title-group">
                                                                            <div class="card-title">
                                                                                <h6 class="title"><a href="">New
                                                                                        Enrolment</a></h6>
                                                                            </div>
                                                                        </div>
                                                                        <div class="data">
                                                                            <div class="data-group">
                                                                                <div class="amount">194</div>
                                                                                <div class="info text-end"><span
                                                                                        class="change up text-danger"><em
                                                                                            class="icon ni ni-arrow-long-up"></em>4.63%</span><br><span>vs.
                                                                                        Yesterday</span></div>
                                                                            </div>
                                                                        </div>
                                                                    </div><!-- .card-inner -->
                                                                    <div
                                                                        class="nk-ck-wrap mt-auto overflow-hidden rounded-bottom">
                                                                        <div class="nk-ecwg3-ck">
                                                                            <canvas class="lms-line-chart-s1"
                                                                                id="newStudents"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- .nk-ecwg -->
                                                            </div><!-- .card -->
                                                        </div><!-- .col -->
                                                    </div><!-- .row -->
                                                </div><!-- .col -->
                                            </div><!-- .row -->
                                        </div><!-- .nk-block -->
                                    </div><!--tab pane-->
                                    <div class="tab-pane" id="profile-courses">
                                        <div class="nk-tb-list border border-light rounded overflow-hidden is-compact">
                                            <div class="nk-tb-item nk-tb-head">
                                                <div class="nk-tb-col">
                                                    <span class="lead-text">#</span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="lead-text">Courses List</span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="lead-text d-none d-sm-inline">Status</span>
                                                </div>
                                                <div class="nk-tb-col nk-tb-col-tools">
                                                    <span class="lead-text">&nbsp;</span>
                                                </div>
                                            </div>
                                            @if ($detailsInstructor)
                                                @foreach ($detailsInstructor->instructorCourses as $key => $instructorCourse)
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col">{{ $key + 1 }}</div>
                                                        <div class="nk-tb-col">
                                                            {{ $instructorCourse->course->course_title }}</div>
                                                        <div class="nk-tb-col">
                                                            <span
                                                                class="badge badge-dot badge-dot-xs bg-success">{{ $instructorCourse->course->course_status }}</span>
                                                        </div>
                                                        <!-- Add other columns as needed -->
                                                    </div>
                                                @endforeach
                                            @endif

                                        </div>
                                    </div>

                                    <!--tab pane-->

                                    {{-- <div class="tab-pane" id="profile-review">
                                    <div class="nk-tb-list border border-light rounded overflow-hidden">
                                        <div class="nk-tb-item nk-tb-head">
                                            <div class="nk-tb-col nk-tb-col-check">
                                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                                    <input type="checkbox" class="custom-control-input" id="uid">
                                                    <label class="custom-control-label" for="uid"></label>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col"><span class="lead-text">Student</span></div>
                                            <div class="nk-tb-col tb-col-sm"><span class="lead-text">Course name</span></div>
                                            <div class="nk-tb-col tb-col-md"><span class="lead-text">Rating</span></div>
                                            <div class="nk-tb-col tb-col-lg"><span class="lead-text">Review</span></div>
                                            <div class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1 my-n1">
                                                    <li>
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger me-n1" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="#"><em class="icon ni ni-mail"></em><span>Send Email to All</span></a></li>
                                                                    <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend Selected</span></a></li>
                                                                    <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete All</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- .nk-tb-item -->
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col nk-tb-col-check">
                                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                                    <input type="checkbox" class="custom-control-input" id="uid1">
                                                    <label class="custom-control-label" for="uid1"></label>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col">
                                                <div class="user-card">
                                                    <div class="user-avatar bg-primary">
                                                        <span>AB</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">Abu Bin Ishtiyak</span>
                                                        <span>info@softnio.com</span>
                                                        <ul class="d-flex d-md-none text-warning">
                                                            <li><em class="icon ni ni-star-fill"></em></li>
                                                            <li><em class="icon ni ni-star-fill"></em></li>
                                                            <li><em class="icon ni ni-star-fill"></em></li>
                                                            <li><em class="icon ni ni-star-fill"></em></li>
                                                            <li><em class="icon ni ni-star-fill"></em></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col tb-col-sm">
                                                <span>UI/UX Design with Adobe XD</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <ul class="d-flex text-warning">
                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                </ul>
                                            </div>
                                            <div class="nk-tb-col tb-col-lg">
                                                <span>The instructor was very knowledgable, worked at a good peace.</span>
                                            </div>
                                            <div class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1">
                                                    <li>
                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger me-n1"><em class="icon ni ni-trash-alt text-danger"></em></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- .nk-tb-item -->
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col nk-tb-col-check">
                                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                                    <input type="checkbox" class="custom-control-input" id="uid7">
                                                    <label class="custom-control-label" for="uid7"></label>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col">
                                                <div class="user-card">
                                                    <div class="user-avatar bg-warning">
                                                        <span>VL</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">Victoria Lynch</span>
                                                        <span>victoria@example.com</span>
                                                        <ul class="d-flex d-md-none text-warning">
                                                            <li><em class="icon ni ni-star-fill"></em></li>
                                                            <li><em class="icon ni ni-star-fill"></em></li>
                                                            <li><em class="icon ni ni-star-fill"></em></li>
                                                            <li><em class="icon ni ni-star-fill"></em></li>
                                                            <li><em class="icon ni ni-star-fill"></em></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col tb-col-sm">
                                                <span>UI/UX Design with Adobe XD</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <ul class="d-flex text-warning">
                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                </ul>
                                            </div>
                                            <div class="nk-tb-col tb-col-lg">
                                                <span> I will highly recommend this type of instructor.</span>
                                            </div>
                                            <div class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1">
                                                    <li>
                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger me-n1"><em class="icon ni ni-trash-alt text-danger"></em></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- .nk-tb-item -->
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col nk-tb-col-check">
                                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                                    <input type="checkbox" class="custom-control-input" id="uid8">
                                                    <label class="custom-control-label" for="uid8"></label>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col">
                                                <div class="user-card">
                                                    <div class="user-avatar bg-success">
                                                        <span>PN</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">Patrick Newman</span>
                                                        <span>patrick@example.com</span>
                                                        <ul class="d-flex d-md-none text-warning">
                                                            <li><em class="icon ni ni-star-fill"></em></li>
                                                            <li><em class="icon ni ni-star-fill"></em></li>
                                                            <li><em class="icon ni ni-star-fill"></em></li>
                                                            <li><em class="icon ni ni-star-fill"></em></li>
                                                            <li><em class="icon ni ni-star-fill"></em></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col tb-col-sm">
                                                <span>Learn Android Development with project</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <ul class="d-flex text-warning">
                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                </ul>
                                            </div>
                                            <div class="nk-tb-col tb-col-lg">
                                                <span>I look forward to taking more classes from here.</span>
                                            </div>
                                            <div class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1">
                                                    <li>
                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger me-n1"><em class="icon ni ni-trash-alt text-danger"></em></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- .nk-tb-item -->
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col nk-tb-col-check">
                                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                                    <input type="checkbox" class="custom-control-input" id="uid9">
                                                    <label class="custom-control-label" for="uid9"></label>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <img src="./images/avatar/d-sm.jpg" alt="">
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">Jane Harris</span>
                                                        <span>harris@example.com</span>
                                                        <ul class="d-flex d-md-none text-warning">
                                                            <li><em class="icon ni ni-star-fill"></em></li>
                                                            <li><em class="icon ni ni-star-fill"></em></li>
                                                            <li><em class="icon ni ni-star-fill"></em></li>
                                                            <li><em class="icon ni ni-star-fill"></em></li>
                                                            <li><em class="icon ni ni-star-fill"></em></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col tb-col-sm">
                                                <span>Learn Android Development with project</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <ul class="d-flex text-warning">
                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                </ul>
                                            </div>
                                            <div class="nk-tb-col tb-col-lg">
                                                <span>This was my first time it far exceeded my expectations.</span>
                                            </div>
                                            <div class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1">
                                                    <li>
                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger me-n1"><em class="icon ni ni-trash-alt text-danger"></em></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- .nk-tb-item -->
                                    </div>
                                </div> --}}

                                    <!--tab pane-->
                                </div><!--tab content-->
                            </div><!--card inner-->
                        </div><!--card-->
                    </div><!--nk block lg-->
                </div>
            </div>
        </div>
    </div>

@endsection
@section('modals')

@endsection
