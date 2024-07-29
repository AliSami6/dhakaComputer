@extends('backend.layouts.master')
@section('title', 'Settings ')
@section('styles')
    <style>
        .gallery-image {
            display: block;
            margin-top: 6%;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }
    </style>
@endsection
@section('admin-content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Settings</h3>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block nk-block-lg">
                        <div class="card">
                            <div class="card-inner">
                                <h4 class="title nk-block-title">Web store setting</h4>
                                <p>Here is your basic store setting of your website.</p>
                                <form action="{{ route('settings.update') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row g-4">

                                        <div class="col-lg-6">
                                            <div class="form-group">

                                                <label class="form-label" for="site-name">Company Name</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="site_name"
                                                        name="site_name"
                                                        value="{{ isset($websettings) ? $websettings->site_name : old('site_name') }}">
                                                </div>
                                                @if ($errors->has('site_name'))
                                                    <span class="text-danger">{{ $errors->first('site_name') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="site-email">Website Email</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="site_email"
                                                        name="site_email"
                                                        value="{{ isset($websettings) ? $websettings->site_email : old('site_email') }}">
                                                </div>
                                                @if ($errors->has('site_email'))
                                                    <span class="text-danger">{{ $errors->first('site_email') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="site-copyright">Address</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="address" name="address"
                                                        value="{{ isset($websettings) ? $websettings->address : old('address') }}">
                                                </div>
                                                @if ($errors->has('address'))
                                                    <span class="text-danger">{{ $errors->first('address') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Website Title</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="website_title"
                                                        name="website_title"
                                                        value="{{ isset($websettings) ? $websettings->website_title : old('website_title') }}">

                                                </div>
                                                @if ($errors->has('website_title'))
                                                    <span class="text-danger">{{ $errors->first('website_title') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-xxl-3 col-sm-6 text-center">
                                            <div class="gallery card">
                                                <a class="gallery-image popup-image d-flex">
                                                    <img class="rounded-top logo-image-preview align-items-center"
                                                        src="{{ isset($websettings) && $websettings->logo ? asset('uploaded_files/website/logo/' . $websettings->logo) : asset('frontend/assets/img/logo/Logo.png') }}"
                                                        alt="{{ isset($websettings) && $websettings->site_name ? $websettings->site_name : 'Logo' }}">
                                                </a>
                                                <div
                                                    class="gallery-body card-inner align-center justify-between flex-wrap g-2">
                                                    <div class="user-card form-group">
                                                        <label class="form-label" for="logo">Website logo</label>
                                                    </div>
                                                    <div class="form-control-wrap">
                                                        <div class="form-file">
                                                            <input type="file" class="form-file-input" id="logo"
                                                                name="logo">
                                                            <label class="form-file-label p-1" for="logo">Upload
                                                                Image</label>
                                                        </div>
                                                    </div>
                                                    @if ($errors->has('logo'))
                                                        <span class="text-danger">{{ $errors->first('logo') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-6 col-xxl-3">
                                            <div class="gallery card" >
                                                <a class="gallery-image popup-image ">
                                                    <img class="rounded-top favicon-image-preview "
                                                        src="{{ isset($websettings) && $websettings->favicon ? asset('uploaded_files/website/favicon/' . $websettings->favicon) : asset('frontend/assets/img/favicon.png') }}"
                                                        alt="{{ isset($websettings) && $websettings->site_name ? $websettings->site_name : 'Favicon' }}">
                                                </a>
                                                <div
                                                    class="gallery-body card-inner align-center justify-between flex-wrap g-2">
                                                    <div class="user-card form-group">
                                                        <label class="form-label" for="favicon">Website
                                                            Fav icon</label>
                                                    </div>
                                                    <div class="form-control-wrap">
                                                        <div class="form-file">
                                                            <input type="file" class="form-file-input" id="favicon"
                                                                name="favicon">
                                                            <label class="form-file-label" for="favicon">Upload
                                                                Image</label>
                                                        </div>
                                                    </div>
                                                    @if ($errors->has('favicon'))
                                                        <span class="text-danger">{{ $errors->first('favicon') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-6 col-xxl-3">
                                            <div class="gallery card">
                                                <a class="gallery-image popup-image ">
                                                    <img class="rounded-top banner-image-preview "
                                                        src="{{ isset($websettings) && $websettings->banner ? asset('uploaded_files/website/banner/' . $websettings->banner) : asset('frontend/assets/img/favicon.png') }}"
                                                        alt="{{ isset($websettings) && $websettings->site_name ? $websettings->site_name : 'banner' }}">
                                                </a>
                                                <div
                                                    class="gallery-body card-inner align-center justify-between flex-wrap g-2">
                                                    <div class="user-card form-group">
                                                        <label class="form-label" for="banner">Website
                                                            Banner </label>
                                                    </div>
                                                    <div class="form-control-wrap">
                                                        <div class="form-file">
                                                            <input type="file" class="form-file-input" id="banner"
                                                                name="banner">
                                                            <label class="form-file-label" for="banner">Upload
                                                                Image</label>
                                                        </div>
                                                    </div>
                                                    @if ($errors->has('banner'))
                                                        <span class="text-danger">{{ $errors->first('banner') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="site-name"> Website footer
                                                    description</label>
                                                <div class="form-control-wrap">
                                                    <textarea class="form-control form-control" id="website_description" name="website_description">
                                                        {!! $websettings ? $websettings->website_description : 'Description' !!}
                                                    </textarea>
                                                </div>
                                                @if ($errors->has('website_description'))
                                                    <span
                                                        class="text-danger">{{ $errors->first('website_description') }}</span>
                                                @endif
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
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script_js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const logoImageInput = document.getElementById('logo');
            const bannerImageInput = document.getElementById('banner');
            const faviconImageInput = document.getElementById('favicon');
            const bannerImagePreview = document.querySelector('.banner-image-preview');
            const logoImagePreview = document.querySelector('.logo-image-preview');
            const faviconImagePreview = document.querySelector('.favicon-image-preview');

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
            if (faviconImageInput) {
                faviconImageInput.addEventListener('change', function() {
                    previewSelectedImage(faviconImageInput, faviconImagePreview);
                });
            }
            if (logoImageInput) {
                logoImageInput.addEventListener('change', function() {
                    previewSelectedImage(logoImageInput, logoImagePreview);
                });
            }
            if (bannerImageInput) {
                bannerImageInput.addEventListener('change', function() {
                    previewSelectedImage(bannerImageInput, bannerImagePreview);
                });
            }
        });
    </script>
@endsection
