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
                                    <a class="nav-link" data-bs-toggle="tab" href="#profile-courses"><em
                                            class="icon ni ni-book-fill"></em><span>Courses</span></a>
                                </li>
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
