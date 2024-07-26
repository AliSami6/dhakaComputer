@extends('backend.layouts.master')
@section('title', 'Create Counter')
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
                                <h3 class="nk-block-title page-title"> Create Counter</h3>
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
                                <form action="{{ route('counter.save') }}" method="POST" >
                                    @csrf
                                    <div class="row g-4">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="count_number">Counter Number</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="count_number"
                                                        name="count_number" value="{{ old('count_number') }}">
                                                </div>
                                                @if ($errors->has('count_number'))
                                                    <span class="text-danger">{{ $errors->first('count_number') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="count_title">Count Title</label>
                                                 <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="count_title"
                                                        name="count_title" value="{{ old('count_title') }}">
                                                </div>
                                                @if ($errors->has('count_title'))
                                                    <span class="text-danger">{{ $errors->first('count_title') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                         <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="count_color">Background Color</label>
                                                 <div class="form-control-wrap">
                                                    <input type="color" class="form-control" id="count_color"
                                                        name="count_color" value="{{ old('count_color') }}">
                                                </div>
                                                @if ($errors->has('count_color'))
                                                    <span class="text-danger">{{ $errors->first('count_color') }}</span>
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
       
    </script>
@endsection
