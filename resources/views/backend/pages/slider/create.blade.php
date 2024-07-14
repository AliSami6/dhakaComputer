@extends('backend.layouts.master')
@section('title', 'Slider')
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
                                <h3 class="nk-block-title page-title"> Slider</h3>
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
                                <form action="{{ route('slider.save') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row g-4">
                                        <div class="col-sm-6 col-lg-6 col-xxl-3">
                                            <div class="gallery card" style="width:70%">
                                                <a class="gallery-image popup-image" href="">
                                                    <img class="w-100 rounded-top slider-image-preview"
                                                        src="{{ isset($slider) && $slider->slider_image ? asset('uploaded_files/slider/' . $slider->slider_image) : asset('backend/assets/images/no.png') }}"
                                                        alt="{{ isset($slider) && $slider->hero_title ? $slider->hero_title : 'Default Slider Title' }}" >
                                                </a>
                                                <div
                                                    class="gallery-body card-inner align-center justify-between flex-wrap g-2">
                                                    <div class="user-card form-group">
                                                        <label class="form-label" for="slider_image">Image</label>
                                                    </div>
                                                    <div class="form-control-wrap">
                                                        <div class="form-file">
                                                            <input type="file" class="form-file-input" id="slider_image"
                                                                name="slider_image">
                                                            <label class="form-file-label" for="slider_image">Upload
                                                                Image</label>
                                                        </div>
                                                    </div>
                                                    @if ($errors->has('slider_image'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('slider_image') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-lg-6 col-xxl-3">
                                            <div class="gallery card" style="width:70%">
                                                <a class="gallery-image popup-image" href="#">
                                                    <img class="w-100 rounded-top background-image-preview"
                                                        src="{{ isset($slider) && $slider->slider_image ? asset('uploaded_files/slider/background/' . $slider->background_image) : asset('backend/assets/images/no.png') }}"
                                                        alt="{{ isset($slider) && $slider->hero_title ? $slider->hero_title : 'Default Slider Title' }}" >
                                                </a>
                                                <div
                                                    class="gallery-body card-inner align-center justify-between flex-wrap g-2">
                                                    <div class="user-card form-group">
                                                        <label class="form-label" for="background_image">Background
                                                            Image</label>
                                                    </div>
                                                    <div class="form-control-wrap">
                                                        <div class="form-file">
                                                            <input type="file" class="form-file-input"
                                                                id="background_image" name="background_image">
                                                            <label class="form-file-label" for="background_image">Upload
                                                                Image</label>
                                                        </div>
                                                    </div>
                                                    @if ($errors->has('background_image'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('background_image') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="phone-no-1">Slider Title</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="hero_title"
                                                        name="hero_title"  value="{{ isset($slider) ? $slider->hero_title : old('hero_title', 'Default Hero Title') }}">
                                                </div>
                                                @if ($errors->has('hero_title'))
                                                    <span class="text-danger">{{ $errors->first('hero_title') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="hero_title">Slider Subtitle</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="hero_subtitle"
                                                        name="hero_subtitle" value="{{ isset($slider) ? $slider->hero_subtitle : old('hero_subtitle', 'Default Hero Sub Title') }}">
                                                </div>
                                                @if ($errors->has('hero_subtitle'))
                                                    <span class="text-danger">{{ $errors->first('hero_subtitle') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="hero_title">Slider Content</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="hero_content"
                                                        name="hero_content" value="{{ isset($slider) ? $slider->hero_content : old('hero_content', 'Default Hero Content') }}">
                                                </div>
                                                @if ($errors->has('hero_content'))
                                                    <span class="text-danger">{{ $errors->first('hero_content') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="hero_title">Button Text</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="button_text"
                                                        name="button_text" value="{{ isset($slider) ? $slider->button_text : old('button_text', 'Button Title') }}">
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
                                                        name="button_url" value="{{ isset($slider) ? $slider->button_url : old('button_url', 'Button Url') }}">
                                                </div>
                                                @if ($errors->has('button_url'))
                                                    <span class="text-danger">{{ $errors->first('button_url') }}</span>
                                                @endif
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
                const sliderImageInput = document.getElementById('slider_image');
                const backgroundImageInput = document.getElementById('background_image');
                const sliderImagePreview = document.querySelector('.slider-image-preview');
                const backgroundImagePreview = document.querySelector('.background-image-preview');

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

                if (sliderImageInput) {
                    sliderImageInput.addEventListener('change', function() {
                        previewSelectedImage(sliderImageInput, sliderImagePreview);
                    });
                }

                if (backgroundImageInput) {
                    backgroundImageInput.addEventListener('change', function() {
                        previewSelectedImage(backgroundImageInput, backgroundImagePreview);
                    });
                }
        });
    </script>
@endsection
