@extends('errors.errors_layout')
@section('title')
   403 - Access Denied
@endsection
@section('error-content')
    <div class="nk-main ">
        <!-- wrap @s -->
        <div class="nk-wrap nk-wrap-nosidebar">
            <div class="nk-content ">
                <div class="nk-block nk-block-middle wide-xs mx-auto">
                    <div class="nk-block-content nk-error-ld text-center">
                        <h1 class="nk-error-head">403</h1>
                        <h3 class="nk-error-title">   {{ $exception->getMessage() }}</h3>
                        <p class="nk-error-text">Access to this resource on the server is denied</p>
                        <a href="#" class="btn btn-lg btn-primary mt-2">Back To Home</a>
                    </div>
                </div><!-- .nk-block -->
            </div>
                <!-- wrap @e -->
        </div>
            <!-- content @e -->
    </div>
@endsection


