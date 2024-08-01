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
                                <tr>
                                    <td>John</td>
                                    <td>Doe</td>
                                    <td>john@example.com</td>
                                    <td>john@example.com</td>
                                    <td>john@example.com</td>
                                    <td>john@example.com</td>
                                </tr>
                             
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
