<div class="modal fade" id="modalEdit">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close"> <em
                    class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-md">
                <h5 class="title">Edit Category</h5>
                <form method="POST" class="pt-2" enctype="multipart/form-data" id="editCategoryFormId">
                   
                    <div class="alert alert-danger print-error-msg" style="display:none">
                        <ul></ul>
                    </div>

                    <input type="hidden" name="category_id" id="category_id" />

                    <div class="form-group">
                        <label class="form-label" for="category_name">Category Name</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" id="e_category_name" name="category_name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="edit-description">Description</label>
                        <div class="form-control-wrap">
                            <textarea class="form-control" name="description" id="e_description"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="cat_icon">Category icon</label>
                        <div class="form-control-wrap">
                            <div class="form-file">
                                <input type="file" name="cat_icon" class="form-file-input" id="cat_icon">
                                <label class="form-file-label" for="cat_icon">Choose file</label>
                            </div>
                        </div>
                    </div>
                  
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary updateCategoryBtn">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
