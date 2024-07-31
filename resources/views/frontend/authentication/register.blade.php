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
                        <h4 class="registration_from text-center text-danger">Registration Form 55555555</h4>
                        <form method="POST" action="{{ route('register.save') }}">
                            @csrf
                            <div class="mb-3">


                                <div class="form-group">
                                    <label for="applicantName" class="form-label form_label">Applicant's Name
                                        <span>*</span></label>
                                    <input type="text" class="form-control @error('applicantName') is-invalid @enderror"
                                        id="applicantName" name="applicantName">
                                    @error('applicantName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="fatherName" class="form-label form_label">Father's Name:</label>
                                        <input type="text" class="form-control" id="fatherName" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="fatherOccupation" class="form-label form_label">Occupation:</label>
                                        <input type="text" class="form-control" id="fatherOccupation" required>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="motherName" class="form-label form_label">Mother's Name:</label>
                                        <input type="text" class="form-control" id="motherName" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="motherOccupation" class="form-label form_label">Occupation:</label>
                                        <input type="text" class="form-control" id="motherOccupation" required>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="presentAddress" class="form-label form_label"> Present Address:</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                                        value="option2">
                                    <label class="form-check-label form_label_1" for="exampleRadios2">
                                        Permanent Address Same as Present
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="permanentAddress" class="form-label form_label">Permanent Address:</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>

                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="contactNumber" class="form-label form_label">Contact No.:</label>
                                        <input type="text" class="form-control" id="telephone" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="emailAddress" class="form-label form_label">Email:</label>
                                        <input type="text" class="form-control" id="telephone" required>
                                    </div>
                                </div>

                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="dob" class="form-label form_label">Date of birth:</label>
                                        <input type="date" class="form-control" id="dob" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="registrationNumber" class="form-label form_label">Reg. No.:</label>
                                        <input type="text" class="form-control" id="registrationNumber" required>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="race" class="form-label form_label">Race:</label>
                                <div class="form-check form_check d-inline-block">
                                    <input class="form-check-input" type="radio" name="race" id="exampleRadios2"
                                        value="muslim">
                                    <label class="form-check-label form_label_1" for="exampleRadios2">
                                        Muslim
                                    </label>
                                </div>
                                <div class="form-check form_check d-inline-block">
                                    <input class="form-check-input" type="radio" name="race" id="exampleRadios2"
                                        value="hindu">
                                    <label class="form-check-label form_label_1" for="exampleRadios2">
                                        Hindu
                                    </label>
                                </div>
                                <div class="form-check form_check d-inline-block">
                                    <input class="form-check-input" type="radio" name="race" id="exampleRadios2"
                                        value="buddist">
                                    <label class="form-check-label form_label_1" for="exampleRadios2">
                                        Buddist
                                    </label>
                                </div>
                                <div class="form-check form_check d-inline-block">
                                    <input class="form-check-input" type="radio" name="race" id="exampleRadios2"
                                        value="christan">
                                    <label class="form-check-label form_label_1" for="exampleRadios2">
                                        Christan
                                    </label>
                                </div>
                                <!-- <input type="text" class="form-control" id="race" required> -->
                            </div>

                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="sex" class="form-label form_label">Gender</label>
                                        <div class="form-check gender_check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="male"
                                                value="Male">
                                            <label class="form-check-label form_label_1" for="male">Male</label>
                                        </div>
                                        <div class="form-check gender_check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="female"
                                                value="Female">
                                            <label class="form-check-label form_label_1" for="female">Female</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="occupation" class="form-label form_label">Occupation:</label>
                                        <select class="form-select form_select" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">Student</option>
                                            <option value="2">Business</option>
                                            <option value="3">Service</option>
                                            <option value="4">Housewife</option>
                                            <option value="5">Others</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="nationalId" class="form-label form_label">National ID No.:</label>
                                        <input type="text" class="form-control" id="nationalId" required>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="education" class="form-label form_label">Education:</label>
                                        <select class="form-select form_select" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">PEC/JSC</option>
                                            <option value="2">SSC</option>
                                            <option value="3">HSC</option>
                                            <option value="4"></option>
                                            <option value="5"></option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="photo" class="form-label form_label">Photo:</label>
                                        <label for="image" class="label_img">
                                            <div class="img_output">
                                                <img id="output" width="180" height="200" alt="Image Here"
                                                    style="display:none;" />
                                            </div>
                                            <input type="file" name="image" id="image">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="courseDay" class="form-label form_label">Course Day:</label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="saturday" value="Saturday">
                                        <label class="form-check-label form_label_1" for="saturday">Saturday</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="monday" value="Monday">
                                        <label class="form-check-label form_label_1" for="monday">Monday</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="courseTime" class="form-label form_label">Time:</label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="courseTime" id="time1"
                                            value="9:00 am - 11:00 am">
                                        <label class="form-check-label form_label_1" for="time1">9:00 am - 11:00
                                            am</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="courseTime" id="time2"
                                            value="11:00 am - 1:00 pm">
                                        <label class="form-check-label form_label_1" for="time2">11:00 am - 1:00
                                            pm</label>
                                    </div>
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
