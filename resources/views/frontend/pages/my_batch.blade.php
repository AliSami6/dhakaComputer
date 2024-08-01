@extends('layouts.student_layout')
@section('title', 'My Batch')
@push('styles')
    <style>
     

    </style>
@endpush
@section('student_content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">My Batch</h1>
            
            <div class="card mb-4">
              
                <div class="card p-3">
                    <div class="card-header">
                        <h4>Batch History</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-sm">
                            <thead>
                                <tr>
                                    <th>Batch No</th>
                                    <th>Batch Code</th>
                                    <th>Class Rutine</th>
                                    <th>Class Start Date</th>
                                    <th>Class Start Time</th>
                                    <th>Total Class </th>
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
