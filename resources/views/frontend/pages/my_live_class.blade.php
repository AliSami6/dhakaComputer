@extends('layouts.student_layout')
@section('title', 'Live Class')
@push('styles')
    <style>
     

    </style>
@endpush
@section('student_content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">My Live Class</h1>
            
            <div class="card mb-4">
              
                <div class="card p-3">
                    <div class="card-header">
                        <h4>Live Class History</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-sm">
                            <thead>
                                <tr>
                                    <th>Course Name</th>
                                    <th>Class  Date</th>
                                    <th>Class Start Time</th>
                                    <th>Class End Time</th>
                                    <th>Meeting Link</th>
                                    <th>Meeting Platform </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($live_class->isNotEmpty())
                                @foreach($live_class as $enroll)
                                    @foreach($enroll->course->liveclass as $class)
                                        <tr>
                                            <td>{{ $enroll->course->course_title ?? '' }}</td>
                                            <td>{{ date('j F y', strtotime($class->class_date)) }}</td>
                                            <td>{{ $class->start_time ?? '' }}</td>
                                            <td>{{ $class->end_time ?? '' }}</td>
                                            <td>{{ $class->metting_link ?? '' }}</td>
                                            <td>{{ $class->metting_platform ?? '' }}</td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
@push('scripts')
@endpush
