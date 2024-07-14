@extends('layouts.frontend')
@section('title', 'Login Page')
@push('styles')
<style>

</style>
@endpush
@section('content')
<main>
    <!-- breadcrumb-area -->

    <section class="breadcrumb__area include-bg pt-150 pb-150 breadcrumb__overlay" data-background="{{ asset('/') }}frontend/assets/img/banner/banner-bg-3.jpg">
       <div class="container">
          <div class="row">
             <div class="col-xxl-12">
                <div class="breadcrumb__content p-relative z-index-1">
                   <h3 class="breadcrumb__title mb-20">Log In</h3>
                   <div class="breadcrumb__list">
                      <span><a href="#">Home</a></span>
                      <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                      <span><a href="#">Pages</a></span>
                      <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                     
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- login-area-strat -->
    <div class="d-flex justify-content-center align-items-center pt-90 pb-150">
        <div class="col-md-6">
            <div class="border border-3 border-success"></div>
            <div class="card  bg-white shadow p-5">
                <div class="mb-4 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="75" height="75"
                        fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path
                            d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                    </svg>
                </div>
                <div class="text-center">
                    <h1 class="fs-1 mb-3">Thank You !</h1>
                    <p class="mt-2">You are enrolled the course </p>
                    <a href="{{ route('index') }}" class="btn btn-outline-success">Back Home</a>
                </div>
            </div>
        </div>
    </div>
  
    <!-- login-area-strat-end -->               
         

 </main>
@endsection
@push('scripts')
    <script>
        
    </script>
@endpush
