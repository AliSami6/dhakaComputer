@extends('backend.layouts.master')
@section('title')
    Edit Subcategory - Admin Panel
@endsection
@section('styles')
    <style>
        .form-check-label {
            text-transform: capitalize;
        }
    </style>
@endsection
@section('admin-content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between g-3">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title"> Update Subcategory</h3>
                            </div>
                        </div>
                    </div><!--.nk-block-head -->
                    <div class="nk-block">
                        <div class="card">
                            <div class="card-inner">
                           <form action="{{ route('subcategory.update') }}" method="POST">
    @csrf
    @method('POST') {{-- Ensure to include this for update method --}}
    <div class="row gy-4">
        <div class="form-group">
            <label class="form-label" for="category_id">Category Name</label>
            <div class="form-control-wrap">
                <select class="form-select js-select2" id="edit-category-id" name="category_id">
                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="form-label" for="edit-subcategory-name">Subcategory Names</label>
            <div class="form-control-wrap">
                @foreach ($subcategories as $subcategory)
                    <input type="hidden" name="id[]" value="{{ $subcategory->id }}">
                    <input type="text" class="form-control" id="edit-subcategory-name"
                           name="subcategory_name[]" value="{{ $subcategory->subcategory_name }}"><br>
                @endforeach
            </div>
        </div>
        <div class="col-sm-12">
            <ul class="preview-list">
                <li class="preview-item">
                    <button type="submit" class="btn btn-primary">Save</button>
                </li>
            </ul>
        </div>
    </div>
</form>

                            </div><!--row-->
                        </div><!--card inner-->
                    </div><!--card-->
                </div><!--.nk-block -->
            </div>
        </div>
    </div>
    </div>
@endsection
@section('script_js')
@endsection
