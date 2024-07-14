<div class="modal fade" tabindex="-1" id="updateLession">
    <div class="modal-dialog modal-dialog-top" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update lesson</h5>
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                <form  class="form-validate is-alter" id="UpdateLessonFormID"   method="POST">
                    @csrf
                    <div class="mt-3 ">
                        <input type="hidden" name="lesson_id" id="e_lesson_id" value=""/>
                        <div class="form-group">
                            <label class="form-label" for="title">Title</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="e_ls_title" name="lession_title">
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
                        <div class="form-group Text ">
                            <label class="form-label" for="description"> Description </label>
                            <div class="form-control-wrap">
                                <textarea name="description" id="update_lesson_text" class="form-control  py-3 m-1 p-3" rows="4" cols="4"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="Summary">Summary</label>
                            <div class="form-control-wrap">
                                <textarea name="summary" id="update_lesson_summernote" class="form-control py-3 m-1 p-3 summary" rows="4" cols="4" ></textarea>
                            </div>
                        </div>
                        
                       
                        <div class="form-group">
                            <div class="col-sm-12 text-center">
                                <button class="btn btn-primary btn-sm" type="submit"> Update Lession </button>
                            </div>
                            
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
               
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
