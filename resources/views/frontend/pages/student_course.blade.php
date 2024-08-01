@extends('layouts.student_layout')
@section('title', 'Course')
@push('styles')
    <style>
        .center-content {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
    </style>
@endpush
@section('student_content')
    <main>
        <div class="container-fluid px-4">


            <div class="card mb-4 mt-3">
                <div class="card-header">

                    আমার কোর্সসমূহ
                </div>
                <div class="card-body ">

                    <div class="row">
                        @foreach ($enrollmentClass as $enroll)
                            <div class="col-lg-3">
                                <div class="card mb-4" style="width: 18rem;">
                                    @foreach($enroll->studentEnrollment->course->media as $img)
                                    <img src="{{asset('uploaded_files/course_thumbnails/'.$img->course_thumbnail)  ?? asset('frontend/assets/images/default.jpg') }}" class="card-img-top" alt="{{ $enroll->studentEnrollment->course->course_title }}">
                                   @endforeach
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $enroll->studentEnrollment->course->course_title }}</h5>
                                       
                                        <a href="{{ route('course.details', $enroll->studentEnrollment->course->slug) }}" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    
                </div>
            </div>
        </div>
    </main>

@endsection
@push('scripts')
@endpush