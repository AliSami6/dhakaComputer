@extends('layouts.frontend')
@section('title', 'Registration')
@push('styles')
<style>
.basic-login {
    background-color: #f8f9fa; /* Light background color */
    padding: 50px; /* Padding for inner content */
    border-radius: 10px; /* Rounded corners */
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1); /* Subtle shadow effect */
}

.or-divide {
    font-weight: bold; /* Bold text */
    color: #333; /* Dark text color */
    margin-top: 10px; /* Adjust spacing */
}

.or-divide span {
    padding: 0 10px; /* Add padding around the 'or' text */
}

.form-control {
    width: 100%;
    height: 50px;
    background-color: var(--tp-grey-1); /* Light grey background */
    border: 1px solid var(--tp-grey-1); /* Light grey border */
    padding: 0 20px; /* Padding inside input fields */
    border-radius: 25px; /* Rounded corners */
    margin-bottom: 15px; /* Adjust space between inputs */
}
.btn-primary {
    background-color: #ff6652; /* Primary button color */
    border-color: #ff6652; /* Primary button border color */
    color: #fff; /* Button text color */
}

.btn-outline-primary {
    color: #ff6652; /* Primary button text color */
    border-color: #ff6652; /* Primary button border color */
}

.btn-primary:hover,
.btn-outline-primary:hover {
    opacity: 0.8; /* Reduce opacity on hover for visual feedback */
    color: #ff6652; /* Hover state text color */
    border-color: #ff6652; /* Hover state border color */
}


</style>
@endpush
@section('content')
    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb__area include-bg pt-150 pb-150 breadcrumb__overlay"
            data-background="{{ asset('/') }}frontend/assets/img/banner/banner-bg-3.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="breadcrumb__content p-relative z-index-1">
                            <h3 class="breadcrumb__title mb-20">Register</h3>
                            <div class="breadcrumb__list">
                                <span><a href="{{ route('index') }}">Home</a></span>
                                <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                                <span><a href="#">Pages</a></span>
                                <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                                <span class="sub-page-black">Register</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- login-area-strat -->
        <section class="login-area pt-70 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="basic-login
                         rounded-0 bg-blend-screen" style="padding: 50px; background-color: aliceblue;">
                            <h3 class="text-center mb-4">Signup From Here</h3>
                            <form method="POST" action="{{ route('register.save') }}">
                                @csrf
                    
                                <div class="form-group">
                                    <label for="first_name">First Name <span>*</span></label>
                                    <input id="first_name" class="form-control @error('first_name') is-invalid @enderror"
                                        type="text" name="first_name" placeholder="Enter First Name" />
                                    @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                    
                                <div class="form-group">
                                    <label for="last_name">Last Name <span>*</span></label>
                                    <input id="last_name" class="form-control @error('last_name') is-invalid @enderror"
                                        type="text" name="last_name" placeholder="Enter Last Name" />
                                    @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                    
                                <div class="form-group">
                                    <label for="email">Email Address <span>*</span></label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" placeholder="Email address..." />
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                    
                                <div class="form-group">
                                    <label for="phone_no">Phone Number <span>*</span></label>
                                    <input id="phone_no" class="form-control @error('phone_no') is-invalid @enderror"
                                        type="text" name="phone_no" placeholder="Enter Phone Number" />
                                    @error('phone_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                    
                                <div class="form-group">
                                    <label for="password">Password <span>*</span></label>
                                    <input id="password" type="password" name="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        placeholder="Enter password..." />
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                    
                                <div class="form-group mt-4">
                                    <button type="submit" class="btn tp-btn btn-block">Register Now</button>
                                </div>
                    
                                <div class="or-divide text-center mb-3"><span>or</span></div>
                    
                                <div class="text-center">
                                    <a href="{{ route('sign_in') }}" class="btn tp-btn btn-block">Login Now</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- login-area-strat-end -->


        </main>

    @endsection
    @push('scripts')
        <script></script>
    @endpush
