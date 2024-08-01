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
                <div class="card-body ">

                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card mb-4" style="width: 18rem;">
                                <img src="{{ asset('/') }}frontend/assets/images/wb2.jpg" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>

                                    <a href="#" class="btn btn-secondary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card mb-4" style="width: 18rem;">
                                <img src="{{ asset('/') }}frontend/assets/images/wb1.jpg" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card mb-4" style="width: 18rem;">
                                <img src="{{ asset('/') }}frontend/assets/images/wb1.jpg" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card mb-4" style="width: 18rem;">
                                <img src="{{ asset('/') }}frontend/assets/images/wb1.jpg" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
@push('scripts')
@endpush
