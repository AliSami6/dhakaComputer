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
                                    <label class="form-label" for="firstName">First Name</label>
                                    <input type="text" class="form-control" id="firstName" value="{{$editStudents->firstName}}" placeholder="Enter First Name" name="firstName">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="lastName">Last Name</label>
                                    <input type="text" class="form-control" id="lastName" value="{{ $editStudents->lastName }}" placeholder="Enter Last Name" name="lastName">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Course to Enrol</label>
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
                                    <label class="form-label" for="email">Email Address</label>
                                    <input type="email" class="form-control" id="email" value="{{ $editStudents->email }}" placeholder="Email Address" name="email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Phone Number</label>
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
                                    <label class="form-label" for="date_of_birth">Nationality</label>
                                    <input type="text" class="form-control date-picker" id="nationality" value="{{ $editStudents->nationality }}" placeholder="Nationality" name="nationality">
                                </div>
                            </div>
                          
                            {{-- <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                      
                                        <button class="btn btn-primary" type="submit">Update Student</button >
                                    </li>
                                    <li>
                                        <a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a>
                                    </li>
                                </ul>
                            </div> --}}
                        </div>
                    </div><!-- .tab-pane -->
                    <div class="tab-pane" id="address">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="address_one">Address Line 1</label>
                                    <input type="text" class="form-control" id="address_one" value="{{ $editStudents->address_one }}" name="address_one">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="state">Address Line 2</label>
                                    <input type="text" class="form-control" id="address_two" value="{{ $editStudents->address_two }}" name="address_two">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="address-st">State</label>
                                    <input type="text" class="form-control" id="state" value="{{ $editStudents->state }}" name="state">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="country">Country</label>
                                    <select class="form-select js-select2" id="country" name="country">
                                        <option value="Canada" {{ $editStudents->country == 'Canada' ? 'selected' : '' }}>Canada</option>
                                        <option value="United State" {{ $editStudents->country == 'United State' ? 'selected' : '' }}>United State</option>
                                        <option value="United Kingdom" {{ $editStudents->country == 'United Kingdom' ? 'selected' : '' }}>United Kingdom</option>
                                        <option value="Australia" {{ $editStudents->country == 'Australia' ? 'selected' : '' }}>Australia</option>
                                        <option value="India" {{ $editStudents->country == 'India' ? 'selected' : '' }}>India</option>
                                        <option value="Bangladesh" {{ $editStudents->country == 'Bangladesh' ? 'selected' : '' }}>Bangladesh</option>
                                    </select>
                                    
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