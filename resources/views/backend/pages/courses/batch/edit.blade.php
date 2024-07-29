@extends('backend.layouts.master')
@section('title', 'Update Batch')
@section('styles')

@endsection
@section('admin-content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h6 class="nk-block-title page-title">Update Batch</h6>
                            </div><!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1"
                                        data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">
                                            <li class="nk-block-tools-opt"><a href="{{route('batch.list')}}" class="btn btn-primary"> <em
                                                        class="icon ni ni-arrow-left"></em><span>Back</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block nk-block-lg">
                        <div class="card">
                            <div class="card-inner">
                                <form action="{{ route('batch.update',$batch->id) }}" method="POST">
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
                                                <label class="form-label" for="batch_no">Batch No*</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="batch_no" name="batch_no" value="{{$batch->batch_no ??  old('batch_no') }}">
                                                </div>
                                                @if ($errors->has('batch_no'))
                                                    <span class="text-danger">{{ $errors->first('batch_no') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="discounts_percentage">Batch Code * </label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="batch_code" name="batch_code" value="{{$batch->batch_code ?? old('batch_code') }}">
                                                </div>
                                                        @if ($errors->has('batch_code'))
                                                        <span class="text-danger">{{ $errors->first('batch_code') }}</span>
                                                    @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="class_type">Class Type </label>
                                                <div class="form-control-wrap">
                                                    <select class="form-select js-select2" id="edit-class-type-id"
                                                        name="class_type">
                                                        <option value="Offline">Offline
                                                        </option>
                                                        <option value="Online">Online
                                                        </option>
                                                        <option value="Both">Both
                                                        </option>
                                                    </select>
                                                </div>
                                                        @if ($errors->has('class_type'))
                                                        <span class="text-danger">{{ $errors->first('class_type') }}</span>
                                                    @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="class_start">Class Start</label>
                                                <div class="form-control-wrap">
                                                    <input type="date" class="form-control" id="class_start" name="class_start" value="{{$batch->class_start ??  old('class_start') }}">
                                                </div>
                                                @if ($errors->has('class_start'))
                                                    <span class="text-danger">{{ $errors->first('class_start') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="expire_date">Class Rutine</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="class_rutine" name="class_rutine" value="{{$batch->class_rutine ?? old('class_rutine') }}">
                                                </div>
                                                @if ($errors->has('class_rutine'))
                                                    <span class="text-danger">{{ $errors->first('class_rutine') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="expire_date">Class time</label>
                                                <div class="form-control-wrap">
                                                    <input type="time" class="form-control" id="class_time" name="class_time" value="{{$batch->class_time ?? old('class_time') }}">
                                                </div>
                                                @if ($errors->has('class_time'))
                                                    <span class="text-danger">{{ $errors->first('class_time') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="expire_date">Total Class </label>
                                                <div class="form-control-wrap">
                                                    <input type="number" class="form-control" id="total_class" name="total_class" value="{{$batch->total_class ?? old('total_class') }}">
                                                </div>
                                                @if ($errors->has('total_class'))
                                                    <span class="text-danger">{{ $errors->first('total_class') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="expire_date">Total Seat </label>
                                                <div class="form-control-wrap">
                                                    <input type="number" class="form-control" id="total_seat" name="total_seat" value="{{$batch->total_seat ?? old('total_seat') }}">
                                                </div>
                                                @if ($errors->has('total_seat'))
                                                    <span class="text-danger">{{ $errors->first('total_seat') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                      
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-lg btn-primary">Submit </button>
                                        </div>
                                </form>

                            </div><!-- .card-preview -->

                        </div><!-- .row -->
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script_js')
   
    
@endsection
