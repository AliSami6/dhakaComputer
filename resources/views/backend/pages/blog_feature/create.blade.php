@extends('backend.layouts.master')
@section('title', 'Create Blog Feature')
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
                                <h3 class="nk-block-title page-title"> Create Blog Feature</h3>
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
                                <form action="{{ route('blog.save') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row g-4">
                                      
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="hero_title">Blog Banner Title</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="blog_banner_title"
                                                        name="blog_banner_title" value="{{ old('blog_banner_title') }}">
                                                </div>
                                                @if ($errors->has('blog_banner_title'))
                                                    <span class="text-danger">{{ $errors->first('blog_banner_title') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="phone-no-1">Blog Banner Description </label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="blog_banner_description"
                                                        name="blog_banner_description" value="{{ old('blog_banner_description') }}">
                                                </div>
                                                @if ($errors->has('blog_banner_description'))
                                                    <span class="text-danger">{{ $errors->first('blog_banner_description') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                      
                                         <div class="col-sm-6 col-lg-6 col-xxl-3">
                                            <div class="gallery card" style="width:70%">
                                                <a class="gallery-image popup-image" href="">
                                                    <img class="w-100 rounded-top blog-image-preview"
                                                        src="{{ asset('backend/assets/images/no.png') }}" alt="">
                                                </a>
                                                <div
                                                    class="gallery-body card-inner align-center justify-between flex-wrap g-2">
                                                    <div class="user-card form-group">
                                                        <label class="form-label" for="blog_banner_image">Blog Banner Image</label>
                                                    </div>
                                                    <div class="form-control-wrap">
                                                        <div class="form-file">
                                                            <input type="file" class="form-file-input" id="blog_banner_image"
                                                                name="blog_banner_image">
                                                            <label class="form-file-label" for="blog_banner_image">Upload
                                                                Image</label>
                                                        </div>
                                                    </div>
                                                    @if ($errors->has('blog_banner_image'))
                                                        <span class="text-danger">{{ $errors->first('blog_banner_image') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                       <div class="row" id="blog-feature-titles">
            <div class="col-lg-12 blog-feature-title">
                <div class="form-group">
                    <label class="form-label" for="blog_feature_title_1">Blog Feature Title</label>
                    <div class="form-control-wrap">
                        <input type="text" class="form-control" id="blog_feature_title_1" name="blog_feature_title[]"
                               value="{{ old('blog_feature_title.0') }}">
                    </div>
                </div>
            </div>
        </div>
        <button type="button" id="addBlogFeatureTitle" class="btn btn-primary">Add More Feature Title</button>
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
            const blogImageInput = document.getElementById('blog_image');
            const blogImagePreview = document.querySelector('.blog-image-preview');
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
            if (blogImageInput) {
                blogImageInput.addEventListener('change', function() {
                    previewSelectedImage(blogImageInput,blogImagePreview);
                });
            }
        });
        $(document).ready(function() {
        let titleIndex = 1;

        $('#addBlogFeatureTitle').click(function() {
            titleIndex++;
            let newTitleField = `
                <div class="col-lg-12 blog-feature-title">
                    <div class="form-group">
                        <label class="form-label" for="blog_feature_title_${titleIndex}">Blog Feature Title</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" id="blog_feature_title_${titleIndex}" name="blog_feature_title[]">
                        </div>
                    </div>
                </div>
            `;
            $('#blog-feature-titles').append(newTitleField);
        });

        // Optional: Remove a feature title
        $(document).on('click', '.removeBlogFeatureTitle', function() {
            $(this).closest('.blog-feature-title').remove();
        });
    });
    </script>
@endsection
