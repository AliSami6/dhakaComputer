@extends('backend.layouts.master')
@section('title', 'Create Live Course Content')
@section('styles')

@endsection
@section('admin-content')
    <div class="nk-content">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title"> Create Live Course Content</h3>
                            </div><!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1"
                                        data-target="more-options"><em class="icon ni ni-more-v"></em></a>
                                    <div class="toggle-expand-content" data-content="more-options">
                                        <ul class="nk-block-tools g-3">

                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block nk-block-lg">
                        <div class="card">
                            <div class="card-inner">
                                <form action="{{ route('content.save') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row g-4">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-label" for="phone-no-1">Live Course Content Title</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="train_title"
                                                        name="train_title" value="{{ old('train_title') }}">
                                                </div>
                                                @if ($errors->has('train_title'))
                                                    <span class="text-danger">{{ $errors->first('train_title') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="train_description">Live Course Content Description</label>
                                                <div class="form-control-wrap">
                                                    <textarea class="form-control form-control-sm py-2 mb-2" id="train_description" name="train_description">
                                                      
                                                    </textarea>
                                                </div>
                                                @if ($errors->has('train_description'))
                                                    <span class="text-danger">{{ $errors->first('train_description') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                         <div class="col-sm-6 col-lg-6 col-xxl-3">
                                            <div class="gallery card" style="width:60%">
                                                <a class="gallery-image popup-image" href="">
                                                    <img class="w-100 rounded-top content-image-preview"
                                                        src="{{ asset('backend/assets/images/no.png') }}" alt="">
                                                </a>
                                                <div
                                                    class="gallery-body card-inner align-center justify-between flex-wrap g-2">
                                                    <div class="user-card form-group">
                                                        <label class="form-label" for="train_image">Image</label>
                                                    </div>
                                                    <div class="form-control-wrap">
                                                        <div class="form-file">
                                                            <input type="file" class="form-file-input" id="train_image"
                                                                name="train_image">
                                                            <label class="form-file-label" for="train_image">Upload
                                                                Image</label>
                                                        </div>
                                                    </div>
                                                    @if ($errors->has('train_image'))
                                                        <span class="text-danger">{{ $errors->first('train_image') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-lg btn-primary">Save
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
    </div>
@endsection
@section('modals')

@endsection
@section('script_js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const contentImageInput = document.getElementById('train_image');
            const contentImagePreview = document.querySelector('.content-image-preview');
            function previewSelectedImage(input, preview) {
                const file = input.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.readAsDataURL(file);
                    reader.onload = function(e) {
                        preview.src = e.target.result;
                    }
                }
            }
            if (contentImageInput) {
                contentImageInput.addEventListener('change', function() {
                    previewSelectedImage(contentImageInput,contentImagePreview);
                });
            }
        });
    </script>
@endsection
