<div class="modal fade" id="subcategoryEdit">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close"> <em
                    class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-md">
                <h5 class="title">Edit SubCategory</h5>
                <form method="POST" class="pt-2" action="{{ route('subcategory.update') }}">
                    
                    <div class="alert alert-danger print-error-msg" style="display:none">
                        <ul></ul>
                    </div>
                    @csrf
                    <div class="form-group">
                        <label class="form-label" for="category_name">Category Name</label>
                       
                        <div class="form-control-wrap">
                            <select class="form-select js-select2" id="status" name="category_id">
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                
                                @endforeach
                            </select>
                        </div>
                       
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="edit-subcategory">Subcategory Name</label>
                        <div class="form-control-wrap">
                            @foreach($categories as $category)
                                @foreach($category->subcategories as $subcat)
                                    <input type="text" class="form-control" id="subcategory_name" name="subcategory_name[]" value="{{ $subcat->subcategory_name }}">
                                @endforeach
                            @endforeach
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
