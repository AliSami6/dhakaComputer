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
                    আমার প্রোফাইল
                </div>
                <div class="card-body ">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card shadow-lg border-1 rounded-lg">
                                <div class="card-header text-center  my-4 mt-0">
                                    @if(auth()->user()->image)
                                    <img src="{{ asset('uploaded_files/users/'.auth()->user()->image) }}"
                                         class="rounded-circle mx-auto d-block" width="200" />
                                @else
                                    <img src="{{ asset('frontend/assets/images/user_1.png') }}"
                                         class="rounded mx-auto d-block" width="200" />
                                @endif
                                
                                </div>
                                <div class="card-body">
                                    <ul class="list-group">
                                        <li class="list-group-item">Student Name <span
                                                class="fs-6 fw-bold">{{ auth()->user()->applicantName }}</span></li>
                                        <li class="list-group-item">National ID <span
                                                class="fs-6 fw-bold">{{ auth()->user()->nationalId }} </span></li>
                                        <li class="list-group-item">Education <span
                                                class="fs-6 fw-bold">{{ auth()->user()->education }}</span></li>
                                        <li class="list-group-item">Present Address <span
                                                class="fs-6 fw-bold">{{ auth()->user()->presentAddress }}</span></li>
                                        <li class="list-group-item">Phone Number <span
                                                class="fs-6 fw-bold">{{ auth()->user()->contactNumber }}</span></li>
                                        <li class="list-group-item">Email Address <span
                                                class="fs-6 fw-bold">{{ auth()->user()->emailAddress }}</span></li>
                                        <li class="list-group-item">Registration Number <span
                                                class="fs-6 fw-bold">{{ auth()->user()->registrationNumber }}</span></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="card shadow-lg border-1 rounded-lg ">
                                <div class="card-header">
                                    <h3 class=" font-weight-light my-4">Update Profile</h3>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('user.update') }}" enctype="multipart/form-data" method="POST">
                                        @csrf
                                        <div class="row mb-3">
                                           
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control @error('applicantName') is-invalid @enderror"
                                                        id="applicantName" type="text" placeholder="Enter applicant name"
                                                        name="applicantName"
                                                        value="{{ auth()->user()->applicantName ?? '' }}">
                                                    <label for="applicantName">Student name</label>
                                                </div>
                                                @error('applicantName')
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input class="form-control  @error('fatherName') is-invalid @enderror"
                                                        id="fatherName" type="text" placeholder="Enter father name"
                                                        name="fatherName" value="{{ auth()->user()->fatherName ?? '' }}">
                                                    <label for="fatherName">Father name</label>
                                                </div>
                                                @error('fatherName')
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control  @error('fatherOccupation') is-invalid @enderror"
                                                        id="fatherOccupation" type="text"
                                                        placeholder="Enter applicant name" name="fatherOccupation"
                                                        value="{{ auth()->user()->fatherOccupation ?? '' }}">
                                                    <label for="fatherOccupation">Father Occupation</label>
                                                </div>
                                                @error('fatherOccupation')
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input class="form-control @error('motherName') is-invalid @enderror"
                                                        id="motherName" type="text" placeholder="Enter mather name"
                                                        name="motherName" value="{{ auth()->user()->motherName ?? '' }}">
                                                    <label for="motherName">Mother name</label>
                                                </div>
                                                @error('motherName')
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control @error('motherOccupation') is-invalid @enderror"
                                                        id="motherOccupation" type="text"
                                                        placeholder="Enter applicant name" name="motherOccupation"
                                                        value="{{ auth()->user()->motherOccupation ?? '' }}">
                                                    <label for="motherOccupation">Mother Occupation</label>
                                                </div>
                                                @error('motherOccupation')
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                           
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <select class="form-select form_select  @error('occupation') is-invalid @enderror"
                                                    aria-label="Default select example" name="occupation">
                                                    <option selected>Open this select menu</option>
                                                    <option value="Student">Student</option>
                                                    <option value="Business">Business</option>
                                                    <option value="Service">Service</option>
                                                    <option value="Housewife">Housewife</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                                </div>
                                                @error('occupation')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <div class="form-floating">
                                                    <input class="form-control @error('nationalId') is-invalid @enderror"
                                                        id="nationalId" type="text" placeholder="Enter mather name"
                                                        name="nationalId" value="{{ auth()->user()->nationalId ?? '' }}">
                                                    <label for="nationalId">National ID </label>
                                                </div>
                                                @error('nationalId')
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control @error('presentAddress') is-invalid @enderror" id="presentAddress" rows="4"
                                                name="presentAddress">{!! auth()->user()->presentAddress ?? '' !!}</textarea>
                                            @error('presentAddress')
                                                <span class="invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label for="presentAddress">Present address</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control @error('permanentAddress') is-invalid @enderror" id="permanentAddress" rows="4"
                                                name="presentAddress">{!! auth()->user()->permanentAddress ?? '' !!}</textarea>
                                            @error('permanentAddress')
                                                <span class="invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label for="permanentAddress">Permanent address</label>
                                        </div>
                                        <div class="mb-3">

                                            <input class="form-control" type="file" id="image" name="image">
                                            @error('image')
                                                <span class="invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mt-4 mb-0">
                                            <button type="submit" class="btn btn-primary btn-block float-end">Update</a>
                                        </div>
                                    </form>
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
