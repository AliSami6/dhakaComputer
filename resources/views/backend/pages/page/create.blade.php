@extends('backend.layouts.master')
@section('title', 'Create Page')
@section('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@endsection
@section('admin-content')
    <div class="nk-content">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title"> Create Page</h3>
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
                                <form action="{{ route('pages.save') }}" method="POST" >
                                    @csrf
                                    <div class="row g-4">
                                      
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-label" for="hero_title">Page Title</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="page_title"
                                                        name="page_title" value="{{ old('page_title') }}">
                                                </div>
                                                @if ($errors->has('page_title'))
                                                    <span class="text-danger">{{ $errors->first('page_title') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-label" for="hero_title">Page Description</label>
                                                <div class="form-control-wrap">
                                                    <textarea class="form-control form-control-sm py-2 mb-2" id="page_description" name="page_description">
                                                      
                                                    </textarea>
                                                </div>
                                                @if ($errors->has('page_description'))
                                                    <span class="text-danger">{{ $errors->first('page_description') }}</span>
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
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
         $('#page_description').summernote({
            tabsize: 2,
            height: 200
        });
    </script>
@endsection
