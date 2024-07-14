@extends('backend.layouts.master')
@section('title', 'Create Blog')
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
                                <h3 class="nk-block-title page-title"> Update Blog</h3>
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
                                <form action="{{ route('blog.update',$blog->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row g-4">
                                          <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="hero_title">Blog Category</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="blog_category"
                                                        name="blog_category"
                                                        value="{{ isset($blog) ? $blog->blog_category : old('blog_category', 'Blog Category') }}">
                                                </div>
                                                @if ($errors->has('blog_category'))
                                                    <span class="text-danger">{{ $errors->first('blog_category') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="phone-no-1">Blog Title</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="blog_title"
                                                        name="blog_title" value="{{ isset($blog) ? $blog->blog_title : old('blog_title', 'Blog Title') }}">
                                                </div>
                                                @if ($errors->has('blog_title'))
                                                    <span class="text-danger">{{ $errors->first('blog_title') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="hero_title">Blog Content</label>
                                                <div class="form-control-wrap">
                                                    <textarea class="form-control form-control-sm py-2 mb-2" id="blog_content" name="blog_content">
                                                        {!! $blog ? $blog->blog_content : 'Content' !!}
                                                    </textarea>
                                                </div>
                                                @if ($errors->has('blog_content'))
                                                    <span class="text-danger">{{ $errors->first('blog_content') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-6 col-xxl-3">
                                            <div class="gallery card" style="width:70%">
                                                <a class="gallery-image popup-image" href="">
                                                    <img class="w-100 rounded-top blog-image-preview"
                                                        src="{{ isset($blog) && $blog->blog_image ? asset('uploaded_files/blog/' . $blog->blog_image) : asset('backend/assets/images/no.png') }}"
                                                        alt="{{ isset($blog) && $blog->blog_title ? $blog->blog_title : 'Default Blog Title' }}">
                                                </a>
                                                <div
                                                    class="gallery-body card-inner align-center justify-between flex-wrap g-2">
                                                    <div class="user-card form-group">
                                                        <label class="form-label" for="blog_image">Image</label>
                                                    </div>
                                                    <div class="form-control-wrap">
                                                        <div class="form-file">
                                                            <input type="file" class="form-file-input" id="blog_image"
                                                                name="blog_image">
                                                            <label class="form-file-label" for="blog_image">Upload
                                                                Image</label>
                                                        </div>
                                                    </div>
                                                    @if ($errors->has('blog_image'))
                                                        <span class="text-danger">{{ $errors->first('blog_image') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-lg btn-primary">Update
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
            const BlogImageInput = document.getElementById('blog_image');
            const BlogImagePreview = document.querySelector('.blog-image-preview');
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

            if (BlogImageInput) {
                BlogImageInput.addEventListener('change', function() {
                    previewSelectedImage(BlogImageInput, BlogImagePreview);
                });
            }
        });
    </script>
@endsection
