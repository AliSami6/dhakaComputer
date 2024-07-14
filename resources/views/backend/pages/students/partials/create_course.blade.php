 <!-- Modal Add Courses -->
 <div class="modal fade" role="dialog" id="add-couses">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-lg">
                <h5 class="title">Update Profile</h5>
                <ul class="nk-nav nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#courses-01">Courses</a>
                    </li>
                </ul><!-- .nav-tabs -->
                <div class="tab-content">
                    <div class="tab-pane active" id="personal-01">
                        <form action="{{ route('students.courses.save') }}" method="POST">
                            @csrf
                        <div class="row gy-4">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Course to Enrol</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2" multiple="multiple" data-placeholder="Select Multiple Course" name="course_id[]" id="course_id">
                                            <option value="default_option">Select  Course</option>
                                            @foreach ($course_all as $course)
                                                <option value="{{ $course->id }}">{{ $course->course_title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <input type="hidden" name="student_id" value="{{ $editStudents->id }}"/>
                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <button type="submit" class="btn btn-lg btn-primary">Update Courses</button>
                                    </li>
                                </ul>
                            </div><!-- .col -->
                       
                        </div><!-- .row -->
                    </form>
                    </div><!-- .tab-pane -->
                </div><!-- .tab-content -->
            </div><!-- .modal-body -->
        </div><!-- .modal-content -->
    </div><!-- .modal-dialog -->
</div>
<!-- .modal -->