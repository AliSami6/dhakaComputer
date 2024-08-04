@extends('layouts.frontend')
@section('title', 'Login Page')
@push('styles')
    <style>
         .custom-container {
            margin-top: 50px;
            margin-bottom: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: 
        }
        .custom-card-wrapper {
            width: 100%;
            display: flex;
            justify-content: center;
           
        }
        .custom-card {
            width:40%;
           
        }
        .custom-card-body {
            width: 100%;
        }
        .custom-registration-form {
            text-align: center;
            color: #dc3545;
            margin-top: 20px;
            margin-bottom: 15px;
        }
        .custom-form {
            min-height: 200px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .custom-form-label {
            font-weight: bold;
        }
        .custom-submit-btn {
            margin-top: 14px;
        }
        .custom-btn-primary {
            background-color: #007bff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            color:#fff;
        }
        .custom-btn-primary:hover {
            background-color: #c8ddf3;
            color:#fff;
        }
      
    </style>
@endpush
@section('content')
  <div class="container custom-container">
        <div class="custom-card-wrapper">
            <div class="card custom-card mt-3">
                <div class="card-body custom-card-body">
                    <h4 class="custom-registration-form">Login Form</h4>
                    <form method="POST" action="{{ route('login.save') }}" class="custom-form">
                        @csrf
                        <div class="mb-4">
                            <div class="form-group">
                                <label for="contactNumber" class="form-label custom-form-label">Phone Number
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
                       
                        <div class="form-group custom-submit-btn">
                           
                                <button type="submit" class="btn custom-btn-primary">Login</button>
                           
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>

@endsection
@push('scripts')
    <script></script>
@endpush
