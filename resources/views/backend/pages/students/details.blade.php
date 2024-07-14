@extends('backend.layouts.master')
@section('title','Studens Details')
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
                                                    <h4 class="nk-block-title">Students Information</h4>
                                                    <div class="nk-block-des">
                                                        <p>Basic info, like students name and address .</p>
                                                    </div>
                                                </div>
                                                <div class="nk-tab-actions me-n1">
                                                    <a class="btn btn-icon btn-trigger" data-bs-toggle="modal" href="#profile-edit">
                                                        <em class="icon ni ni-edit"></em>
                                                    </a>
                                                </div>
                                            </div>
                                        </div><!-- .nk-block-head -->
                                        <div class="nk-block">
                                            <div class="nk-data data-list">
                                                <div class="data-head">
                                                    <h6 class="overline-title">Basics</h6>
                                                </div>
                                                <div class="data-item">
                                                    <div class="data-col">
                                                        <span class="data-label">Full Name</span>
                                                        <span class="data-value">{{ $editStudents->firstName }} {{ $editStudents->lastName }}</span>
                                                    </div>
                                                </div><!-- data-item -->
                                               
                                                <div class="data-item">
                                                    <div class="data-col">
                                                        <span class="data-label">Email</span>
                                                        <span class="data-value">{{ $editStudents->email }}</span>
                                                    </div>
                                                </div><!-- data-item -->
                                                <div class="data-item">
                                                    <div class="data-col">
                                                        <span class="data-label">Phone Number</span>
                                                        <span class="data-value text-soft">{{ $editStudents->phone_no }}</span>
                                                    </div>
                                                </div><!-- data-item -->
                                                <div class="data-item">
                                                    <div class="data-col">
                                                        <span class="data-label">Date of Birth</span>
                                                        <span class="data-value">{{ $editStudents->date_of_birth }}</span>
                                                    </div>
                                                </div><!-- data-item -->
                                                <div class="data-item">
                                                    <div class="data-col">
                                                        <span class="data-label">Nationality</span>
                                                        <span class="data-value">{{ $editStudents->nationality }}</span>
                                                    </div>
                                                </div><!-- data-item -->
                                                <div class="data-item" data-tab-target="#address">
                                                    <div class="data-col">
                                                        <span class="data-label">Address</span>
                                                        <span class="data-value">{{ $editStudents->address_one }},<br>{{ $editStudents->address_two }}, {{ $editStudents->country }}</span>
                                                    </div>
                                                </div><!-- data-item -->
                                            </div><!-- data-list -->
                                        </div><!-- .nk-block -->
                                    </div><!-- .tab-pan -->
                                </div><!-- .tab-content -->
                            </div>
                            <!-- .card-inner -->
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
   @include('backend.pages.students.partials.edit_students')
@endsection
