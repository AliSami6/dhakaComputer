@extends('backend.layouts.master')
@section('title', ' Choose us')
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
                                <h3 class="nk-block-title page-title"> Why Choose us</h3>
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
                                <form action="{{ route('chooseus.save') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row g-4">

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="choose_years">Years</label>
                                                <div class="form-control-wrap">
                                                    <input type="number" class="form-control" id="choose_years"
                                                        name="choose_years"
                                                        value="{{ isset($chooseus) ? $chooseus->choose_years : old('choose_years') }}">
                                                </div>
                                                @if ($errors->has('choose_years'))
                                                    <span class="text-danger">{{ $errors->first('choose_years') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="choose_title">Choose Title</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="choose_title"
                                                        name="choose_title"
                                                        value="{{ isset($chooseus) ? $chooseus->choose_title : old('choose_title', 'Choose Title') }}">
                                                </div>
                                                @if ($errors->has('choose_title'))
                                                    <span class="text-danger">{{ $errors->first('choose_title') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="choose_subtitle">Choose Subtitle</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="choose_subtitle"
                                                        name="choose_subtitle"
                                                        value="{{ isset($chooseus) ? $chooseus->choose_subtitle : old('choose_subtitle', 'Choose Sub Title') }}">
                                                </div>
                                                @if ($errors->has('choose_subtitle'))
                                                    <span class="text-danger">{{ $errors->first('choose_subtitle') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="short_description">Choose Short
                                                    Description</label>
                                                <div class="form-control-wrap">
                                                    <textarea class="form-control form-control-sm py-2 mb-2" id="short_description" name="short_description">
                                                        {!! $chooseus ? $chooseus->short_description : 'Description' !!}
                                                    </textarea>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="content_one">First List Content</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="content_one"
                                                        name="content_one"
                                                        value="{{ isset($chooseus) ? $chooseus->content_one : old('content_one', 'Content') }}">
                                                </div>
                                                @if ($errors->has('content_one'))
                                                    <span class="text-danger">{{ $errors->first('content_one') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="content_two">Second List Content</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="content_two"
                                                        name="content_two"
                                                        value="{{ isset($chooseus) ? $chooseus->content_two : old('content_two', 'Content') }}">
                                                </div>
                                                @if ($errors->has('content_two'))
                                                    <span class="text-danger">{{ $errors->first('content_two') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="content_three">Third List Content</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="content_three"
                                                        name="content_three"
                                                        value="{{ isset($chooseus) ? $chooseus->content_three : old('content_three', 'Content') }}">
                                                </div>
                                                @if ($errors->has('content_three'))
                                                    <span class="text-danger">{{ $errors->first('content_three') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="button_text">Button Text</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="button_text"
                                                        name="button_text"
                                                        value="{{ isset($chooseus) ? $chooseus->button_text : old('button_text', 'Button Title') }}">
                                                </div>
                                                @if ($errors->has('button_text'))
                                                    <span class="text-danger">{{ $errors->first('button_text') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="button_url">Button Url</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="button_url"
                                                        name="button_url"
                                                        value="{{ isset($chooseus) ? $chooseus->button_url : old('button_url', 'Button Url') }}">
                                                </div>
                                                @if ($errors->has('button_url'))
                                                    <span class="text-danger">{{ $errors->first('button_url') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-lg-6 col-xxl-3">
                                            <div class="gallery card" style="width:70%">
                                                <a class="gallery-image popup-image" href="">
                                                    <img class="w-100 rounded-top choose-image-preview"
                                                        src="{{ isset($chooseus) && $chooseus->choose_image ? asset('uploaded_files/choose/' . $chooseus->choose_image) : asset('backend/assets/images/no.png') }}"
                                                        alt="{{ isset($chooseus) && $chooseus->choose_title ? $chooseus->choose_title : 'Default Choose Title' }}">
                                                </a>
                                                <div
                                                    class="gallery-body card-inner align-center justify-between flex-wrap g-2">
                                                    <div class="user-card form-group">
                                                        <label class="form-label" for="choose_image">Image</label>
                                                    </div>
                                                    <div class="form-control-wrap">
                                                        <div class="form-file">
                                                            <input type="file" class="form-file-input"
                                                                id="choose_image" name="choose_image">
                                                            <label class="form-file-label" for="choose_image">Upload
                                                                Image</label>
                                                        </div>
                                                    </div>
                                                    @if ($errors->has('choose_image'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('choose_image') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-lg btn-primary">Save</button>
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
            const chooseImageInput = document.getElementById('choose_image');
            const chooseImagePreview = document.querySelector('.choose-image-preview');

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

            if (chooseImageInput) {
                chooseImageInput.addEventListener('change', function() {
                    previewSelectedImage(chooseImageInput, chooseImagePreview);
                });
            }
        });
    </script>
@endsection
