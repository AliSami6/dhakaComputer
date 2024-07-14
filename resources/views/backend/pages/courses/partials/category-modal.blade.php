 <div class="modal fade" id="modalCreate">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close"> <em
                     class="icon ni ni-cross-sm"></em></a>
             <div class="modal-body modal-body-md">
                 <h5 class="title">Add Category</h5>
                 <form class="pt-2" method="POST" enctype="multipart/form-data" id="categoryFormID">
                     <div class="alert alert-danger print-error-msg" style="display:none">
                         <ul></ul>
                     </div>
                     @csrf
                     <div class="form-group">
                         <label class="form-label" for="category_name">Category Name</label>
                         <div class="form-control-wrap">
                             <input type="text" class="form-control"
                                 id="category_name" name="category_name" placeholder="Category Name">

                         </div>
                     </div>

                     <div class="form-group">
                         <label class="form-label" for="description">Description</label>
                         <div class="form-control-wrap">
                             <textarea class="form-control" name="description" id="description" placeholder="Write Category Description"></textarea>

                         </div>
                     </div>
                     <div class="form-group">
                         <label class="form-label" for="cat_icon">Category Icon</label>
                         <div class="form-control-wrap">
                             <div class="form-file">
                                 <input type="file" class="form-file-input" id="cat_icon" name="cat_icon">
                                 <label class="form-file-label" for="cat_icon">Choose file</label>
                             </div>
                         </div>
                     </div>
                     <div class="form-group">
                         <label class="form-label">Subcategory</label>
                         <div class="d-flex gx-3 mb-3">
                             <div class="g w-100 ">
                                 <div class="form-control-wrap Subcategory">
                                     <input type="text" class="form-control" id="Subcat" name="subcategory_name[]"
                                         placeholder="Sub Category Name">
                                 </div>
                             </div>
                             <div class="g">
                                 <button type="button" class="btn btn-icon btn-outline-light" onclick="addInput()"><em
                                         class="icon ni ni-plus"></em></button>
                             </div>
                         </div>
                     </div>
                     <div class="form-group">
                         <button type="submit" class="btn btn-primary saveBtn">Save
                         </button>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>
