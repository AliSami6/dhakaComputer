@extends('backend.layouts.master')
@section('title')
    Instructor Details - Admin Panel
@endsection
@section('styles')
    <style>
        .add-btn {
            display: block;
            margin-top: 32px;
            /* Adjust to align with the input fields */
        }

        /* Optional: If you want to ensure that the button is always centered vertically with the input fields */
        .align-items-end .form-group {
            display: flex;
            align-items: center;
        }
    </style>
@endsection
@section('admin-content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between g-3">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Instructor </h3>
                            </div>
                        </div>
                    </div><!--.nk-block-head -->
                    <div class="nk-block">
                        <div class="card">


                            <div class="card card-bordered card-preview">
                                <div class="card-inner">
                                    <div class="preview-block">
                                        <form action="{{ route('instructor.details.save') }}" method="POST">
                                            @csrf
                                            <div class="row gy-4 mb-2">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="professions"> Profession </label>
                                                        <div class="form-control-wrap">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="professions"
                                                                    name="professions[]" placeholder="Profession">
                                                                <div class="input-group-append">
                                                                    <button type="button" class="btn btn-sm btn-primary"
                                                                        onclick="addProfession()">
                                                                        <em class="icon ni ni-plus"></em>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="designation"> Designation </label>
                                                        <div class="form-control-wrap">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="designation"
                                                                    name="designation[]" placeholder="Designation">
                                                                <div class="input-group-append">
                                                                    <button type="button" class="btn btn-sm btn-primary"
                                                                        onclick="addDesignation()">
                                                                        <em class="icon ni ni-plus"></em>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row gy-4">
                                                <div class="col-sm-6 mb-2">
                                                    <div class="profession"></div>
                                                </div>
                                                <div class="col-sm-6 mb-2">
                                                    <div class="designation"></div>
                                                </div>
                                            </div>


                                            <div class="row gy-4 mt-1">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="instructor_id"> Instructor </label>
                                                        <div class="form-control-wrap">
                                                            <select class="form-select js-select2"
                                                                data-placeholder="Select Instructor" name="instructor_id"
                                                                id="instructor_id">
                                                                <option value="">Select Instructor</option>
                                                              
                                                                    <option value="{{ $instructors->id }}">
                                                                        {{ $instructors->first_name.' '.$instructors->last_name }}</option>
                                                               
                                                            </select>
                                                        </div>
                                                        @error('instructor_id')
                                                            <span class="text-danger">{{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="designation"> Course </label>
                                                        <div class="form-control-wrap">
                                                            <select class="form-select js-select2" multiple="multiple"
                                                                data-placeholder="Select Multiple Course" name="course_id[]"
                                                                id="course_id">
                                                                <option value="">Select Course</option>
                                                                @foreach ($course as $cr)
                                                                    <option value="{{ $cr->id }}">
                                                                        {{ $cr->course_title }}</option>
                                                                @endforeach

                                                            </select>
                                                        </div>
                                                        @error('course_id')
                                                            <span class="text-danger">{{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <button type="submit" class="btn btn-primary ">Save</button>
                                                </div>

                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div><!--card-->
                    </div><!--.nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection
@section('modals')
@endsection
@section('script_js')
    <script>
        let professionCount = 0; // Counter for profession fields
        let designationCount = 0; // Counter for designation fields

        function addProfession() {
            professionCount++;
            let newField = document.createElement('div');
            newField.className = `profession-field profession-${professionCount}`;
            newField.innerHTML = `
            <div class="form-group">
                <div class="input-group">
                    <input type="text" class="form-control" name="professions[]" placeholder="Profession">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-outline-danger btn-dim" onclick="removeField('.profession-${professionCount}')">
                            <em class="icon ni ni-minus"></em>
                        </button>
                    </div>
                </div>
            </div>
        `;
            document.querySelector('.profession').appendChild(newField);
        }

        function addDesignation() {
            designationCount++;
            let newField = document.createElement('div');
            newField.className = `designation-field designation-${designationCount}`;
            newField.innerHTML = `
            <div class="form-group">
                <div class="input-group">
                    <input type="text" class="form-control" name="designation[]" placeholder="Designation">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-outline-danger btn-dim" onclick="removeField('.designation-${designationCount}')">
                            <em class="icon ni ni-minus"></em>
                        </button>
                    </div>
                </div>
            </div>
        `;
            document.querySelector('.designation').appendChild(newField);
        }

        function removeField(selector) {
            // Remove the element with the specified selector
            document.querySelector(selector).remove();
        }
    </script>
@endsection
