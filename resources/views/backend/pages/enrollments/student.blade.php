@extends('backend.layouts.master')
@section('title')
    Students - Admin Panel
@endsection
@section('styles')
@endsection
@section('admin-content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between g-3">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Enroll a student</h3>
                            </div>
                        </div>
                    </div><!--.nk-block-head -->
                    <div class="nk-block">
                        <div class="card">

                            <div class="card-inner">
                                <form action="{{ route('enrollments.save') }}" method="POST">
                                    @csrf
                                    <div class="row gy-4">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="form-label">Select an user</label>
                                                <div class="form-control-wrap">
                                                    <select class="form-select js-select2" data-search="on"
                                                        name="student_id">
                                                        @if ($students->isNotEmpty())
                                                            @foreach ($students as $student)
                                                                <option value="{{ $student->id }}">
                                                                    {{ $student->firstName }} {{ $student->lastName }}
                                                                </option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                    @error('student_id')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="form-label">Course to enrol</label>
                                                <div class="form-control-wrap">

                                                    <select class="form-select js-select2" multiple="multiple"
                                                        data-placeholder="Select Multiple Course" name="course_id[]"
                                                        id="course_id">
                                                        <option value="">Select course</option>
                                                        @foreach ($courses as $course)
                                                            <option value="{{ $course->id }}">{{ $course->course_title }}
                                                            </option>
                                                        @endforeach

                                                    </select>

                                                </div>
                                            </div>
                                        </div><!--col-->
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="form-label">Country</label>
                                                <div class="form-control-wrap">

                                                    <input type="text" class="form-control" id="country" name="country"
                                                        placeholder="Country">
                                                    @error('country')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div><!--col-->
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="form-label">State</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="state" name="state"
                                                        placeholder="State">
                                                    @error('state')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div><!--col-->
                                      
                                    </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="form-label" for="mobile_no">Phone</label>
                                                <input type="text" class="form-control" id="mobile_no" name="mobile_no"
                                                    placeholder="Phone no">
                                                @error('mobile_no')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div><!--col-->
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="form-label" for="email">Email Address</label>
                                                <input type="email" class="form-control" id="email" name="email"
                                                    placeholder="Email Address">
                                                @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div><!--col-->
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="form-label" for="current_address">Current address</label>
                                                <input type="text" class="form-control" id="current_address"
                                                    name="current_address" placeholder="Current address">
                                                @error('current_address')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div><!--col-->
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="form-label" for="studentID">Student Id</label>
                                                <input type="text" class="form-control" id="studentID" name="studentID"
                                                    placeholder="Student Id">
                                                @error('studentID')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <ul class="preview-list ">
                                                <li class="preview-item">
                                                    <button type="submit" class="btn btn-primary">Enroll Student</button>
                                                </li>
                                            </ul>
                                        </div><!--col-->
                                    </div><!--row-->
                                </form>
                            </div><!--card inner-->

                        </div><!--card-->
                    </div><!--.nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection
@section('modals')
    @include('backend.pages.students.partials.create_students')
@endsection
