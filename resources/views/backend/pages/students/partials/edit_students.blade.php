 <!-- @@ Student Edit Modal @e -->
 <div class="modal fade" role="dialog" id="profile-edit">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-md">
                <h5 class="title">Update Student</h5>
                <ul class="nk-nav nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#personal-01">Personal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#address">Address</a>
                    </li>
                </ul><!-- .nav-tabs -->
                <form action="{{ route('students.details.update',$editStudents->id) }}" method="POST">
                    @csrf
                <div class="tab-content mb-3 mt-2">
                  
                    <div class="tab-pane active" id="personal-01">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="firstName">First Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="firstName" value="{{$editStudents->firstName}}" placeholder="Enter First Name" name="firstName">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="lastName">Last Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="lastName" value="{{ $editStudents->lastName }}" placeholder="Enter Last Name" name="lastName">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="fathersName">Father's Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="fathersName" value="{{ $editStudents->fathersName }}" placeholder="Enter Father's Name" name="fathersName">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="profession">Father Profession <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="profession"  placeholder="Enter profession" name="profession"  value="{{ $editStudents->profession }}">
                                </div>
                            </div>
                           
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Course to Enrol <span class="text-danger">*</span></label>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2" name="course_id" data-placeholder="Select course">
                                            @if($courses->isNotEmpty())
                                            @foreach($courses as $course)
                                           <option value="{{ $course->id }}">{{ $course->course_title }}</option>
                                           @endforeach
                                          @endif
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="email">Email Address <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email"
                                        placeholder="Email Address" name="email" value="{{ $editStudents->email }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="password">Password <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control" id="password"
                                        placeholder="Enter Password" name="password" value="{{ $editStudents->password }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Phone Number <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="phone_no" value="{{ $editStudents->phone_no }}" placeholder="Phone Number" name="phone_no">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="date_of_birth">Date of Birth</label>
                                    <input type="text" class="form-control date-picker" id="date_of_birth" value="{{ $editStudents->date_of_birth }}" placeholder="Date of Birth" name="date_of_birth">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="birth-day">Image</label>
                                    <input type="file" class="form-control" id="image"
                                        name="image" placeholder="Upload image">
                                </div>
                            </div>
                          
                          
                        </div>
                    </div><!-- .tab-pane -->
                    <div class="tab-pane" id="address">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="address">Address <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="address" name="address"  value="{{ $editStudents->address }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="city">City <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="city" value="{{ $editStudents->city }}"
                                        name="city">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="division">Division</label>
                                    <input type="text" class="form-control" id="division" name="division" value="{{ $editStudents->division }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="country">Country <span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control" id="country" value="{{ $editStudents->country }}"
                                        name="country">
                                </div>
                            </div>
                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <button class="btn btn-primary" type="submit">Update Student</button >
                                    </li>
                                    <li>
                                        <a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- .tab-pane -->
                
                </div><!-- .tab-content -->
            </form>
            </div><!-- .modal-body -->
        </div><!-- .modal-content -->
    </div><!-- .modal-dialog -->
</div><!-- .modal -->