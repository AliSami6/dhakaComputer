@extends('layouts.frontend')
@section('title', 'Registration')
@push('styles')
    <style>

    </style>
@endpush
@section('content')

    <div class="container mt-5 mb-5">

        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="registration_from text-center text-danger">Registration Form </h4>
                        <form method="POST" action="{{ route('register.save') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">


                                <div class="form-group">
                                    <label for="applicantName" class="form-label form_label">Applicant's Name
                                        <span>*</span></label>
                                    <input type="text" class="form-control @error('applicantName') is-invalid @enderror"
                                        id="applicantName" name="applicantName">
                                    @error('applicantName')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="fatherName" class="form-label form_label">Father's Name:</label>
                                        <input type="text" class="form-control @error('fatherName') is-invalid @enderror"
                                            id="fatherName" name="fatherName">
                                        @error('fatherName')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="fatherOccupation" class="form-label form_label"> Occupation:</label>
                                        <input type="text"
                                            class="form-control @error('fatherOccupation') is-invalid @enderror"
                                            id="fatherOccupation" name="fatherOccupation">
                                        @error('fatherOccupation')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="motherName" class="form-label form_label">Mother's Name:</label>
                                        <input type="text" class="form-control @error('motherName') is-invalid @enderror"
                                            id="motherName" name="motherName">
                                        @error('motherName')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="motherOccupation" class="form-label form_label">Occupation:</label>
                                        <input type="text"
                                            class="form-control  @error('motherOccupation') is-invalid @enderror"
                                            id="motherOccupation" name="motherOccupation">
                                        @error('motherOccupation')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="presentAddress" class="form-label form_label">Present Address:</label>
                                <textarea class="form-control @error('presentAddress') is-invalid @enderror" id="presentAddress" rows="4"
                                    name="presentAddress"></textarea>
                                @error('presentAddress')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="addressOption"
                                        id="sameAddressRadio" value="same">
                                    <label class="form-check-label form_label_1" for="sameAddressRadio">
                                        Permanent Address Same as Present
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="permanentAddress" class="form-label form_label">Permanent Address:</label>
                                <textarea class="form-control @error('permanentAddress') is-invalid @enderror" id="permanentAddress" rows="4"
                                    name="permanentAddress"></textarea>
                                @error('permanentAddress')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="contactNumber" class="form-label form_label">Contact No.:</label>
                                        <input type="text"
                                            class="form-control @error('contactNumber') is-invalid @enderror"
                                            id="contactNumber" name="contactNumber">
                                        @error('contactNumber')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="emailAddress" class="form-label form_label">Email:</label>
                                        <input type="email"
                                            class="form-control @error('emailAddress') is-invalid @enderror"
                                            id="emailAddress" name="emailAddress">
                                        @error('emailAddress')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="dob" class="form-label form_label">Date of birth:</label>
                                        <input type="date" class="form-control @error('dob') is-invalid @enderror"
                                            id="dob" name="dob">
                                        @error('dob')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="registrationNumber" class="form-label form_label">Reg. No.:</label>
                                        <input type="text"
                                            class="form-control @error('registrationNumber') is-invalid @enderror"
                                            id="registrationNumber" name="registrationNumber">
                                        @error('registrationNumber')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="race" class="form-label form_label">Race:</label>
                                <div class="form-check form_check d-inline-block">
                                    <input class="form-check-input @error('race') is-invalid @enderror" type="radio"
                                        name="race" id="raceMuslim" value="1">
                                    <label class="form-check-label form_label_1" for="raceMuslim">Muslim</label>
                                </div>
                                <div class="form-check form_check d-inline-block">
                                    <input class="form-check-input @error('race') is-invalid @enderror" type="radio"
                                        name="race" id="raceHindu" value="2">
                                    <label class="form-check-label form_label_1" for="raceHindu">Hindu</label>
                                </div>
                                <div class="form-check form_check d-inline-block">
                                    <input class="form-check-input @error('race') is-invalid @enderror" type="radio"
                                        name="race" id="raceBuddhist" value="3">
                                    <label class="form-check-label form_label_1" for="raceBuddhist">Buddhist</label>
                                </div>
                                <div class="form-check form_check d-inline-block">
                                    <input class="form-check-input @error('race') is-invalid @enderror" type="radio"
                                        name="race" id="raceChristian" value="4">
                                    <label class="form-check-label form_label_1" for="raceChristian">Christian</label>
                                </div>
                                @error('race')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="gender" class="form-label form_label">Gender</label>
                                        <div class="form-check gender_check form-check-inline">
                                            <input class="form-check-input @error('gender') is-invalid @enderror"
                                                type="radio" name="gender" id="male" value="1">
                                            <label class="form-check-label form_label_1" for="1">Male</label>
                                        </div>
                                        <div class="form-check gender_check form-check-inline">
                                            <input class="form-check-input @error('gender') is-invalid @enderror"
                                                type="radio" name="gender" id="female" value="2">
                                            <label class="form-check-label form_label_1" for="female">Female</label>
                                        </div>
                                        @error('gender')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="occupation" class="form-label form_label">Occupation:</label>
                                        <select class="form-select form_select  @error('occupation') is-invalid @enderror"
                                            aria-label="Default select example" name="occupation">
                                            <option selected>Open this select menu</option>
                                            <option value="Student">Student</option>
                                            <option value="Business">Business</option>
                                            <option value="Service">Service</option>
                                            <option value="Housewife">Housewife</option>
                                            <option value="Others">Others</option>
                                        </select>
                                        @error('occupation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="nationalId" class="form-label form_label">National ID No.:</label>
                                        <input type="text"
                                            class="form-control  @error('nationalId') is-invalid @enderror"
                                            id="nationalId" name="nationalId">
                                        @error('nationalId')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="education" class="form-label form_label">Education:</label>
                                        <select class="form-select form_select @error('education') is-invalid @enderror"
                                            aria-label="Default select example" name="education">
                                            <option selected>Open this select menu</option>
                                            <option value="PEC/JSC">PEC/JSC</option>
                                            <option value="SSC">SSC</option>
                                            <option value="HSC">HSC</option>
                                            <option value="Bechelor">Bechelor</option>
                                            <option value="Masters">Masters</option>
                                        </select>
                                        @error('education')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="photo" class="form-label form_label">Photo:</label>
                                        <label for="image" class="label_img">
                                            <div class="img_output">
                                                <img id="output" width="180" height="200" alt="Image Here"
                                                    style="display:none;" />
                                            </div>
                                            <input type="file" name="image" id="image">
                                            @error('image')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="courseDay" class="form-label form_label">Course Day:</label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input @error('courseDay') is-invalid @enderror"
                                            type="checkbox" id="saturday" value="1" name="courseDay">
                                        <label class="form-check-label form_label_1" for="saturday">Saturday</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input @error('courseDay') is-invalid @enderror"
                                            type="checkbox" id="monday" value="2" name="courseDay">
                                        <label class="form-check-label form_label_1" for="monday">Monday</label>
                                    </div>
                                </div>
                                @error('courseDay')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="courseTime" class="form-label form_label">Time:</label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input @error('courseTime') is-invalid @enderror"
                                            type="radio" name="courseTime" id="time1" value="1">
                                        <label class="form-check-label form_label_1" for="time1">9:00 am - 11:00
                                            am</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input @error('courseTime') is-invalid @enderror"
                                            type="radio" name="courseTime" id="time2" value="2">
                                        <label class="form-check-label form_label_1" for="time2">11:00 am - 1:00
                                            pm</label>
                                    </div>
                                </div>
                                @error('courseTime')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
    <script>
        document.getElementById('sameAddressRadio').addEventListener('change', function() {
            if (this.checked) {
                const presentAddress = document.getElementById('presentAddress').value;
                document.getElementById('permanentAddress').value = presentAddress;
            }
        });
    </script>
@endpush
