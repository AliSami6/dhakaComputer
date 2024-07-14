<!-- Add instructor-->
<div class="modal fade" role="dialog" id="modalEdit">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-md">
                <h5 class="title">Update Instructor</h5>
                <form class="pt-2" method="POST" id="EditInstructorFormID">
                    <div class="alert alert-danger print-error-msg" style="display:none">
                        <ul></ul>
                    </div>
                    @csrf
                    <div class="row gy-4">
                        <input type="hidden" name="instructor_id" id="instructor_id"/>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="first-name">First Name</label>
                                <input type="text" class="form-control" id="e_first_name" placeholder="First name"
                                    name="first_name" value="{{old('first_name') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="last-name">Last Name</label>
                                <input type="text" class="form-control " id="e_last_name" placeholder="Last name"
                                    name="last_name" value="{{old('last_name') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="email">Email Address</label>
                                <input type="email" class="form-control" id="e_email" placeholder="Email Address"
                                    name="email" value="{{old('email') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="phone">Phone Number</label>
                                <input type="text" class="form-control " id="e_phone" name="phone"
                                    placeholder="Phone Number" value="{{ old('phone') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="address_one">Address 1</label>
                                <input type="text" class="form-control " id="e_address_one" name="address_one"
                                    value="{{old('address_one') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="address_two">Address 2</label>
                                <input type="text" class="form-control " id="e_address_two" name="address_two"
                                    value="{{old('address_two') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="state">State/District</label>
                                <input type="text" class="form-control" id="e_state" name="state"
                                    value="{{old('state') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="country">Country</label>
                                <input type="text" class="form-control " id="e_country" name="country"
                                    value="{{ old('country') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="nationality">Nationality</label>
                                <input type="text" class="form-control" id="e_nationality" name="nationality"
                                    value="{{ old('nationality') }}">
                            </div>
                        </div>
                         <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="job_title">Job Title</label>
                                <input type="text" class="form-control" id="e_job_title" name="job_title"
                                    placeholder="Job Title">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="skill_level">Skill Level</label>
                                <input type="text" class="form-control" id="e_skill_level" name="skill_level"
                                    placeholder="Skill level">
                            </div>
                        </div>
                          <div class="col-md-6">
                            <div class="form-group">
                                  <label class="form-label" for="language">Language</label>
                                    <input type="text" class="form-control" id="e_language" name="language"
                                        placeholder="Language">
                            </div>
                        </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                   <label class="form-label" for="dob">Date of Birth</label>
                                    <input type="text" class="form-control date-picker" id="e_dob"
                                        name="dob" placeholder="Date of Birth">
                            </div>
                        </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                   <label class="form-label" for="join_date">Joining Date</label>
                                    <input type="text" class="form-control date-picker" id="e_join_date"
                                        name="join_date" placeholder="Joining Date">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label" for="image">Update Instructor Profile Image</label>
                                <div class="form-control-wrap">
                                    <div class="form-file">
                                        <input type="file" name="image" class="form-file-input" id="image">
                                        <label class="form-file-label" for="image">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label" for="about-instractor">About Instructor</label>
                                <textarea class="form-control textarea-sm " id="e_about" placeholder="Describe a little bit" name="about">{{$EditInstructors->about ?? old('about') }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                <li>
                                    <button type="submit" class="btn btn-primary">Update Instructor</button>
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
