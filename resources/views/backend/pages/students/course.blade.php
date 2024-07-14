@extends('backend.layouts.master')
@section('title','Students Course')
@section('styles')

@endsection
@section('admin-content')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                @include('backend.pages.students.partials.student_header')
                <!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="card">
                        <div class="card-aside-wrap">
                            <div class="card-inner card-inner-lg">
                                <div class="tab-content">
                                    <div class="tab-pan active" id="personal">
                                        <div class="nk-block-head">
                                            <div class="nk-block-between d-flex justify-content-between">
                                                <div class="nk-block-head-content">
                                                    <h4 class="nk-block-title">Enrolled Courses</h4>
                                                    <div class="nk-block-des">
                                                        <p>Basic info, like what Courses they Enrolled now.</p>
                                                    </div>
                                                </div>
                                                <div class="nk-tab-actions me-n1">
                                                    <a class="btn btn-icon btn-trigger" data-bs-toggle="modal" href="#add-couses">
                                                        <em class="icon ni ni-property-add"></em>
                                                    </a>
                                                </div>
                                            </div>
                                        </div><!-- .nk-block-head -->
                                        <div class="nk-block">
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
                                                @if($courses->isNotEmpty())
                                                @foreach($courses as $course)
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col">{{ $loop->index + 1 }}</div>
                                                        <div class="nk-tb-col">{{ $course->course_title }}</div>
                                                        <div class="nk-tb-col">
                                                            <span class="badge badge-dot badge-dot-xs bg-success">{{ $course->course_status }}</span>
                                                        </div>
                                                       
                                                    </div>
                                                @endforeach
                                            @else
                                                <span class="d-flex align-items-center ">No courses found for this student.</span>
                                            @endif
                                            
                                            </div>
                                        </div><!-- .nk-block -->
                                    </div><!-- .tab-pan -->
                                </div><!-- .tab-content -->
                            </div><!-- .card-inner -->
                            @include('backend.pages.students.partials.student_info')
                            
                            <!-- .card-aside -->
                        </div><!-- .card-aside-wrap -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
@endsection
@section('modals')
 @include('backend.pages.students.partials.create_course')
@endsection
@section('script_js')

@endsection
