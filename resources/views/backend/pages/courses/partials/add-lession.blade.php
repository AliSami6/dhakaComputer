<div class="modal fade" tabindex="-1" id="addLession">
    <div class="modal-dialog modal-dialog-top" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add new lesson</h5>
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                <div class="alert alert-primary alert-icon course_alerted" role="alert">
                    <strong>Course:</strong> {{ $editCourses->course_title }}. 
                </div>
                
                
                <form  class="form-validate is-alter" id="lessonForm" method="POST">
                  
                    <div class="mt-3 nextLessionAddNew">
                        <div class="alert alert-danger print-error-msg-lession mb-3" style="display:none">
                            <ul></ul>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="title">Title</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="lession_title" name="lession_title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="section">Module</label>
                            <div class="form-control-wrap">
                                @if($sections->count()>0)
                                <select class="form-select js-select2" name="section_id">
                                    @foreach($sections as $section)
                                       <option value="{{ $section->id }}">{{ $section->section_title }}</option>
                                    @endforeach
                                </select>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="description">Short Description</label>
                            <div class="form-control-wrap">
                                <textarea name="description" id="description" class="form-control  py-3 m-1 p-3" rows="4" cols="4"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="description">Summary</label>
                            <div class="form-control-wrap">
                                <textarea name="summary" id="summary" class="form-control  py-3 m-1 p-3" rows="4" cols="4"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12 text-center">
                                <button class="btn btn-primary" type="submit"> Add Lession </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
               
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
