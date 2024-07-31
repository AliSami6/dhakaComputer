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
                                    <label for="contactNumber" class="form-label form_label">Phone Number
                                        <span>*</span></label>
                                    <input type="text" class="form-control @error('contactNumber') is-invalid @enderror"
                                        id="phone_no" name="contactNumber">
                                    @error('contactNumber')
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
