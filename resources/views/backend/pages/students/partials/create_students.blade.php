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
                <form id="StudentFormId" method="POST" class="mb-3" enctype="multipart/form-data">
                   @csrf
                    <div class="alert alert-danger print-error-msg-student mb-3" style="display:none">
                        <ul></ul>
                    </div>
                    <div class="tab-content m-2">
                        <div class="tab-pane active" id="student-info">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="studentsName">Student Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="studentsName"
                                            placeholder="Student name" name="studentsName">
                                    </div>
                                </div>
                               
                             
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Course to Enroll <span class="text-danger">*</span></label>
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
                                        <label class="form-label">User <span class="text-danger">*</span></label>
                                        <div class="form-control-wrap">
                                            <select class="form-select js-select2" name="user_id"
                                                data-placeholder="Select user">
                                                @php $users = DB::table('users')->get(); @endphp
                                                @foreach ($users as $user)
                                                    <option value="{{ $user->id }}">{{ $user->applicantName }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                              
                            
                               
                               
                            </div>
                        </div>
                        <div class="tab-pane" id="address-info">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="address">Address <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="address" name="address">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="city">City <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="city"
                                            name="city">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="division">Division</label>
                                        <input type="text" class="form-control" id="division" name="division">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="country">Country <span class="text-danger">*</span> </label>
                                        <input type="text" class="form-control" id="country"
                                            name="country">
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
