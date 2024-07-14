<div class="modal fade" tabindex="-1" id="editSection">
    <div class="modal-dialog modal-dialog-top" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update section</h5>
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                <form id="UpdateSectionFormID" class="form-validate is-alter" method="POST">
                    <div class="alert alert-danger print-error-msg-section" style="display:none;">
                        <ul></ul>
                    </div>
                    @csrf
                    <input type="hidden" id="e_section_id" name="section_id" value=""/>
                    <div class="form-group">
                        <label class="form-label" for="section_title">Title</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" id="e_section_title" name="section_title">
                        </div>
                    </div>
                    <input type="hidden" name="course_id" value="{{ $editCourses->id }}"/>
                    <div class="form-group">
                        <button type="submit" class="btn btn-sm btn-primary float-end updateSectionBtn">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>