@extends('layouts.student_layout')
@section('title', 'Student Profle')
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
              <div class="bg-dark overflow-hidden">
    <div class="px-3 py-4">
        <div class="text-center text-secondary mb-1">Exchange rate</div>
        <div class="text-center text-white fw-bold fs-1">5 Points = $1.000 Wallet Money</div>
    </div>
</div>

            </div>
        </div>
    </main>

@endsection
@push('scripts')
@endpush
