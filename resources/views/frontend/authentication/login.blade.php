@extends('layouts.frontend')
@section('title', 'Login Page')
@push('styles')
    <style>
        
    </style>
@endpush
@section('content')
    <div class="container mt-5 mb-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card mt-3">
                    <div class="card-body">
                        <h4 class="registration_from text-center text-danger mt-4 mb-3">Login  Form</h4>
                        <form method="POST" action="{{ route('login.save') }}" style="min-height: 400px; display: flex; flex-direction: column; justify-content: center;">
                            @csrf
                            <div class="mb-4">
                                <div class="form-group">
                                    <label for="phone_no" class="form-label form_label">Phone Number
                                        <span>*</span></label>
                                    <input type="text" class="form-control @error('phone_no') is-invalid @enderror"
                                        id="phone_no" name="phone_no">
                                    @error('phone_no')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="form-group">
                                    <label for="password" class="form-label form_label">Password
                                        <span>*</span></label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        id="password" name="password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group submit_btn mt-4">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script></script>
@endpush
