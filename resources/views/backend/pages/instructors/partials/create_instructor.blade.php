<!-- Add instructor-->
<div class="modal fade " role="dialog" id="instructor-add">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-md">
                <h5 class="title">Add Instructor</h5>
                <form class="pt-2" method="POST" id="InstructorFormId">
                    <div class="alert alert-danger print-error-msg" style="display:none">
                        <ul></ul>
                    </div>
                    @csrf
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="first-name">First Name</label>
                                <input type="text" class="form-control" id="first_name" placeholder="First name"
                                    name="first_name" value="{{ old('first_name') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="last-name">Last Name</label>
                                <input type="text" class="form-control" id="last_name" placeholder="Last name"
                                    name="last_name" value="{{ old('last_name') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="email">Email Address</label>
                                <input type="email" class="form-control" id="email" placeholder="Email Address"
                                    name="email" value="{{ old('email') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="phone">Phone Number</label>
                                <input type="text" class="form-control" id="phone" name="phone"
                                    placeholder="Phone Number" value="{{ old('phone') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="address_one">Address 1</label>
                                <input type="text" class="form-control" id="address_one" name="address_one"
                                    value="{{ old('address_one') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="address_two">Address 2</label>
                                <input type="text" class="form-control" id="address_two" name="address_two"
                                    value="{{ old('address_two') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="state">State/District</label>
                                <input type="text" class="form-control" id="state" name="state"
                                    value="{{ old('state') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="country">Country</label>
                                <input type="text" class="form-control" id="country" name="country"
                                    value="{{ old('country') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="nationality">Nationality</label>
                                <input type="text" class="form-control" id="nationality" name="nationality"
                                    value="{{ old('nationality') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="job_title">Job Title</label>
                                <input type="text" class="form-control" id="job_title" name="job_title"
                                    placeholder="Job Title">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="skill_level">Skill Level</label>
                                <input type="text" class="form-control" id="skill_level" name="skill_level"
                                    placeholder="Skill level">
                            </div>
                        </div>
                          <div class="col-md-6">
                            <div class="form-group">
                                  <label class="form-label" for="language">Language</label>
                                    <input type="text" class="form-control" id="language" name="language"
                                        placeholder="Language">
                            </div>
                        </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                   <label class="form-label" for="dob">Date of Birth</label>
                                    <input type="text" class="form-control date-picker" id="dob"
                                        name="dob" placeholder="Date of Birth">
                            </div>
                        </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                   <label class="form-label" for="join_date">Joining Date</label>
                                    <input type="text" class="form-control date-picker" id="join_date"
                                        name="join_date" placeholder="Joining Date">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label" for="image">Instructor Profile Image</label>
                                <div class="form-control-wrap">
                                    <div class="form-file">
                                        <input type="file" class="form-file-input" id="image" name="image">
                                        <label class="form-file-label" for="image">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label" for="about-instractor">About Instructor</label>
                                <textarea class="form-control textarea-sm" id="about" placeholder="Describe a little bit" name="about">{{ old('about') }}</textarea>
                            </div>
                        </div>

                        <!-- Additional Form Fields Start -->
                        <div class="row gy-4">
                            <div class="col-sm-6">
                                <div class="form-group">

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                 
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                  
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                  
                                </div>
                            </div>
                        </div>
                        <!-- Additional Form Fields End -->

                        <div class="col-md-12">
                            <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                <li>
                                    <button type="submit" class="btn btn-primary addInsBtn">Add Instructor</button>
                                </li>
                                <li>
                                    <a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </form>

            </div><!-- .modal-body -->
        </div><!-- .modal-content -->
    </div><!-- .modal-dialog -->
</div><!-- .modal -->
