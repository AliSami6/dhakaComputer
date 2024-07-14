<!-- .modal -->

<div class="modal fade" role="dialog" id="student-add">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-md">
                <h5 class="title">Add Students</h5>
                <ul class="nk-nav nav nav-tabs mt-n2">
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#student-info">Student Infomation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#address-info">Address</a>
                    </li>
                </ul><!-- .nav-tabs -->
                <form id="StudentFormId" method="POST" class="mb-3">
                    @csrf
                    <div class="alert alert-danger print-error-msg-student mb-3" style="display:none">
                        <ul></ul>
                    </div>
                    <div class="tab-content m-2">
                        <div class="tab-pane active" id="student-info">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="firstName">First Name</label>
                                        <input type="text" class="form-control" id="firstName"
                                            placeholder="First name" name="firstName">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="lastName">Last Name</label>
                                        <input type="text" class="form-control" id="lastName"
                                            placeholder="Last name" name="lastName">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Course to Enroll</label>
                                        <div class="form-control-wrap">
                                            <select class="form-select js-select2" name="course_id"
                                                data-placeholder="Select course">
                                                @foreach ($courses as $course)
                                                    <option value="{{ $course->id }}">{{ $course->course_title }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="email">Email Address</label>
                                        <input type="email" class="form-control" id="email"
                                            placeholder="Email Address" name="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone_no">Phone Number</label>
                                        <input type="text" class="form-control" id="phone_no"
                                            placeholder="Phone Number" name="phone_no">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="birth-day">Date of Birth</label>
                                        <input type="text" class="form-control date-picker" id="date_of_birth"
                                            name="date_of_birth" placeholder="Date of Birth">
                                    </div>
                                </div>
                               
                               
                            </div>
                        </div>
                        <div class="tab-pane" id="address-info">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="address_one">Address Line 1</label>
                                        <input type="text" class="form-control" id="address_one" name="address_one">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="address_two">Address Line 2</label>
                                        <input type="text" class="form-control" id="address_two"
                                            name="address_two">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="state">State</label>
                                        <input type="text" class="form-control" id="state" name="state">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="state">Nationality</label>
                                        <input type="text" class="form-control" id="nationality"
                                            name="nationality">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="country">Country</label>
                                        <select class="form-select js-select2" id="country" name="country">
                                            <option value="Canada">Canada</option>
                                            <option value="United State">United State</option>
                                            <option value="United Kindom">United Kindom</option>
                                            <option value="Australia">Australia</option>
                                            <option value="India">India</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <button class="btn btn-primary" type="submit">Save</button>
                                        </li>
                                        <li>
                                            <a href="#" data-bs-dismiss="modal"
                                                class="link link-light">Cancel</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div><!-- .modal-body -->
        </div><!-- .modal-content -->
    </div>
</div>

<!-- .modal -->
