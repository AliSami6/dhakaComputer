@extends('backend.layouts.master')
@section('title', 'Create Live Class')
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
                                <h3 class="nk-block-title page-title"> Create Live Class</h3>
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
                                <form action="{{ route('live.save') }}" method="POST" >
                                    @csrf
                                    <div class="row g-4">
                                        
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="course_id">Select Course</label>
                                                <div class="form-control-wrap">
                                                    <select class="form-select js-select2" id="edit-course-id"
                                                        name="course_id">
                                                        @foreach($courses as $course)
                                                        <option value="{{ $course->id }}">{{ $course->course_title }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="phone-no-1">Live Class Date </label>
                                                <div class="form-control-wrap">
                                                    <input type="date" class="form-control" id="class_date"
                                                        name="class_date" value="{{ old('class_date') }}">
                                                </div>
                                                @if ($errors->has('class_date'))
                                                    <span class="text-danger">{{ $errors->first('class_date') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="phone-no-1">Live Class Start Time </label>
                                                <div class="form-control-wrap">
                                                    <input type="time" class="form-control" id="start_time"
                                                        name="start_time" value="{{ old('start_time') }}">
                                                </div>
                                                @if ($errors->has('start_time'))
                                                    <span class="text-danger">{{ $errors->first('start_time') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="phone-no-1">Live Class End Time </label>
                                                <div class="form-control-wrap">
                                                    <input type="time" class="form-control" id="end_time"
                                                        name="end_time" value="{{ old('end_time') }}">
                                                </div>
                                                @if ($errors->has('end_time'))
                                                    <span class="text-danger">{{ $errors->first('end_time') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="phone-no-1">Meeting Link </label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="metting_link"
                                                        name="metting_link" value="{{ old('metting_link') }}">
                                                </div>
                                                @if ($errors->has('metting_link'))
                                                    <span class="text-danger">{{ $errors->first('metting_link') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="phone-no-1">Meeting Platform </label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="metting_platform"
                                                        name="metting_platform" value="{{ old('metting_platform') }}">
                                                </div>
                                                @if ($errors->has('metting_platform'))
                                                    <span class="text-danger">{{ $errors->first('metting_platform') }}</span>
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
