@extends('backend.layouts.master')
@section('title', 'Students')
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
                                <h3 class="nk-block-title page-title">Students</h3>
                            </div><!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1"
                                        data-target="more-options"><em class="icon ni ni-more-v"></em></a>
                                    <div class="toggle-expand-content" data-content="more-options">
                                        <ul class="nk-block-tools g-3">
                                            <li>
                                                <div class="form-control-wrap">
                                                    <div class="form-icon form-icon-right">
                                                        <em class="icon ni ni-search"></em>
                                                    </div>
                                                    <input type="text" class="form-control" id="default-04"
                                                        placeholder="Search by name">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="drodown">
                                                    <a href="#"
                                                        class="dropdown-toggle dropdown-indicator btn btn-outline-light btn-white"
                                                        data-bs-toggle="dropdown">Status</a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><span>Actived</span></a></li>
                                                            <li><a href="#"><span>Inactived</span></a></li>
                                                            <li><a href="#"><span>Blocked</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nk-block-tools-opt">
                                                <a class="btn btn-icon btn-primary d-md-none" data-bs-toggle="modal"
                                                    href="#student-add"><em class="icon ni ni-plus"></em></a>
                                                <a class="btn btn-primary d-none d-md-inline-flex" data-bs-toggle="modal"
                                                    href="#student-add"><em
                                                        class="icon ni ni-plus"></em><span>Add</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block nk-block-lg">
                        <div class="row g-gs">
                            <div class="col-xxl-3 col-sm-6">
                                <div class="card">
                                    <div class="nk-ecwg nk-ecwg6">
                                        <div class="card-inner">
                                            <div class="card-title-group">
                                                <div class="card-title">
                                                    <h6 class="title">Active Students</h6>
                                                </div>
                                            </div>
                                            <div class="data">
                                                <div class="data-group">
                                                    <div class="amount">1</div>
                                                    <div class="nk-ecwg6-ck">
                                                        <canvas class="ecommerce-line-chart-s3" id="todayOrders"></canvas>
                                                    </div>
                                                </div>
                                                <div class="info"><span class="change up text-danger"><em
                                                            class="icon ni ni-arrow-long-up"></em>4.63%</span><span> vs.
                                                        last week</span></div>
                                            </div>
                                        </div><!-- .card-inner -->
                                    </div><!-- .nk-ecwg -->
                                </div><!-- .card -->
                            </div><!-- .col -->
                            <div class="col-xxl-3 col-sm-6">
                                <div class="card">
                                    <div class="nk-ecwg nk-ecwg6">
                                        <div class="card-inner">
                                            <div class="card-title-group">
                                                <div class="card-title">
                                                    <h6 class="title">Enrolled Courses</h6>
                                                </div>
                                            </div>
                                            <div class="data">
                                                <div class="data-group">
                                                    <div class="amount">23</div>
                                                    <div class="nk-ecwg6-ck">
                                                        <canvas class="ecommerce-line-chart-s3" id="todayRevenue"></canvas>
                                                    </div>
                                                </div>
                                                <div class="info"><span class="change down text-danger"><em
                                                            class="icon ni ni-arrow-long-down"></em>2.34%</span><span> vs.
                                                        last week</span></div>
                                            </div>
                                        </div><!-- .card-inner -->
                                    </div><!-- .nk-ecwg -->
                                </div><!-- .card -->
                            </div><!-- .col -->
                            <div class="col-xxl-3 col-sm-6">
                                <div class="card">
                                    <div class="nk-ecwg nk-ecwg6">
                                        <div class="card-inner">
                                            <div class="card-title-group">
                                                <div class="card-title">
                                                    <h6 class="title">Inactive Student</h6>
                                                </div>
                                            </div>
                                            <div class="data">
                                                <div class="data-group">
                                                    <div class="amount">7</div>
                                                    <div class="nk-ecwg6-ck">
                                                        <canvas class="ecommerce-line-chart-s3"
                                                            id="todayCustomers"></canvas>
                                                    </div>
                                                </div>
                                                <div class="info"><span class="change up text-danger"><em
                                                            class="icon ni ni-arrow-long-up"></em>4.63%</span><span> vs.
                                                        last week</span></div>
                                            </div>
                                        </div><!-- .card-inner -->
                                    </div><!-- .nk-ecwg -->
                                </div><!-- .card -->
                            </div><!-- .col -->
                            <div class="col-xxl-3 col-sm-6">
                                <div class="card">
                                    <div class="nk-ecwg nk-ecwg6">
                                        <div class="card-inner">
                                            <div class="card-title-group">
                                                <div class="card-title">
                                                    <h6 class="title">Total Students</h6>
                                                </div>
                                            </div>
                                            <div class="data">
                                                <div class="data-group">
                                                    <div class="amount">2</div>
                                                    <div class="nk-ecwg6-ck">
                                                        <canvas class="ecommerce-line-chart-s3"
                                                            id="todayVisitors"></canvas>
                                                    </div>
                                                </div>
                                                <div class="info"><span class="change down text-danger"><em
                                                            class="icon ni ni-arrow-long-down"></em>2.34%</span><span> vs.
                                                        last week</span></div>
                                            </div>
                                        </div><!-- .card-inner -->
                                    </div><!-- .nk-ecwg -->
                                </div><!-- .card -->
                            </div><!-- .col -->

                        </div>


                        <div class="card">
                            <div class="card-body">
                                <form action="" method="post" class="mt-4 mb-4">
                                    <div class="row ml-1">
                                        <div class="col-xxl-3 col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">Categories</label>
                                                <div class="form-control-wrap">
                                                    <select class="form-select js-select2" data-search="on">
                                                        <option value="default_option">Default Option</option>
                                                        <option value="option_select_name">Option select name</option>
                                                        <option value="option_select_name">Option select name</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">Status</label>
                                                <div class="form-control-wrap">
                                                    <select class="form-select js-select2" data-search="on">
                                                        <option value="default_option">Default Option</option>
                                                        <option value="option_select_name">Option select name</option>
                                                        <option value="option_select_name">Option select name</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-2 col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">Instructor</label>
                                                <div class="form-control-wrap">
                                                    <select class="form-select js-select2" data-search="on">
                                                        <option value="default_option">Default Option</option>
                                                        <option value="option_select_name">Option select name</option>
                                                        <option value="option_select_name">Option select name</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-2 col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">Price</label>
                                                <div class="form-control-wrap">
                                                    <select class="form-select js-select2" data-search="on">
                                                        <option value="default_option">Default Option</option>
                                                        <option value="option_select_name">Option select name</option>
                                                        <option value="option_select_name">Option select name</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-2 col-sm-6">
                                            <div class="form-group">
                                                <button type="submit"
                                                    class="btn btn-lg btn-primary mb-3 mt-4 float-end">Filter </button>
                                            </div>
                                        </div>


                                    </div>
                                </form>
                                <div class="card-inner-group">
                                    <div class="card-inner p-0">
                                        <div class="nk-tb-list nk-tb-ulist">
                                            <table class="datatable-init nk-tb-list nk-tb-ulist"
                                                data-auto-responsive="false">
                                                <thead>
                                                    <tr class="nk-tb-item nk-tb-head">
                                                        <th class="nk-tb-col"><span class="sub-text">Students</span></th>
                                                        <th class="nk-tb-col"><span class="sub-text">Enrolled
                                                                Courses</span>
                                                        </th>
                                                        <th class="nk-tb-col tb-col-mb"><span
                                                                class="sub-text">Country</span>
                                                        </th>
                                                        <th class="nk-tb-col tb-col-mb"><span
                                                                class="sub-text">Payments</span>
                                                        </th>
                                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">
                                                                Status</span></th>

                                                        <th class="nk-tb-col nk-tb-col-tools text-end">
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if ($students->isNotEmpty())
                                                        @foreach ($students as $student)
                                                            <tr class="nk-tb-item">
                                                                <td class="nk-tb-col nk-tb-col-check">
                                                                    <div class="user-card">
                                                                        <div class="user-avatar bg-primary">
                                                                            <span>{{ $student->studentsName[0] }}</span>
                                                                        </div>
                                                                        <div class="user-info">
                                                                            <span
                                                                                class="tb-lead">{{ $student->studentsName ?? '' }}
                                                                                <span
                                                                                    class="dot dot-success d-md-none ms-1"></span></span>

                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                @php
                                                                    $firstCourseTitle = '';
                                                                    $allCourseTitles = [];
                                                                @endphp
                                                                <td class="nk-tb-col tb-col-md">
                                                                    @foreach ($student->enrollments as $index => $enrollment)
                                                                        @if ($enrollment->course)
                                                                            @if ($index == 0)
                                                                                @php
                                                                                    $firstCourseTitle =
                                                                                        $enrollment->course
                                                                                            ->course_title;
                                                                                @endphp
                                                                            @endif
                                                                            @php
                                                                                $allCourseTitles[] =
                                                                                    $enrollment->course->course_title;
                                                                            @endphp
                                                                        @endif
                                                                    @endforeach

                                                                    @if ($firstCourseTitle)
                                                                        <span
                                                                            class="tb-lead d-lg-flex d-none">{{ $firstCourseTitle }}</span>
                                                                    @endif
                                                                    <div class="d-lg-flex d-none">
                                                                        <div class="drodown">
                                                                            <a href="#"
                                                                                class="dropdown-toggle pt-1 text-info"
                                                                                data-bs-toggle="dropdown">
                                                                                <span>View More</span>
                                                                            </a>
                                                                            <div class="dropdown-menu dropdown-menu-start">
                                                                                <ul class="link-list-opt no-bdr p-3">
                                                                                    @foreach ($allCourseTitles as $courseTitle)
                                                                                        <li class="tb-lead p-1">
                                                                                            {{ $courseTitle }}
                                                                                        </li>
                                                                                    @endforeach
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-md">
                                                                    <div class="user-card">
                                                                        <div class="user-info">
                                                                            <span
                                                                                class="tb-lead text-gray">{{ $student->country ?? '' }}</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-md">
                                                                    <div class="user-card">
                                                                        <div class="user-info">
                                                                            <span
                                                                                class="tb-lead text-gray">{{ $student->payment_status ?? '' }}</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-md">
                                                                    <div class="user-card">
                                                                        <div class="user-info">
                                                                            <span
                                                                                class="tb-lead text-gray">{{ $student->status ?? '' }}</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="nk-tb-col nk-tb-col-tools">
                                                                    <ul class="nk-tb-actions gx-1">
                                                                        <li>
                                                                            <div class="drodown">
                                                                                <a href="#"
                                                                                    class="dropdown-toggle btn btn-icon btn-trigger"
                                                                                    data-bs-toggle="dropdown"><em
                                                                                        class="icon ni ni-more-h"></em></a>
                                                                                <div
                                                                                    class="dropdown-menu dropdown-menu-end">
                                                                                    <ul class="link-list-opt no-bdr">
                                                                                        <li><a
                                                                                                href="{{ route('students.details', $student->id) }}"><em
                                                                                                    class="icon ni ni-eye"></em><span>View
                                                                                                    Details</span></a></li>
                                                                                        <li><a
                                                                                                href="{{ route('students_status.update', [$student->id, 'Active']) }}"><em
                                                                                                    class="icon ni ni-activity-round"></em><span>Student
                                                                                                    Active</span></a></li>
                                                                                        <li><a
                                                                                                href="{{ route('students_status.update', [$student->id, 'Inactive']) }}"><em
                                                                                                    class="icon ni ni-cross-circle-fill"></em><span>Student
                                                                                                    Inactive</span></a></li>
                                                                                        <li><a
                                                                                                href="{{ route('students_status.update', [$student->id, 'Suspend']) }}"><em
                                                                                                    class="icon ni ni-na"></em><span>Student
                                                                                                    Suspend</span></a></li>
                                                                                        <form
                                                                                            action="{{ route('student.delete', $student->id) }}"
                                                                                            method="post">
                                                                                            @csrf
                                                                                            @method('DELETE')
                                                                                            <li>
                                                                                                <a href="#"
                                                                                                    class="delete_student">
                                                                                                    <em
                                                                                                        class="icon ni ni-trash"></em>
                                                                                                    <span>Delete</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </form>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    @endif
                                                    <!-- .nk-tb-item  -->
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- .nk-tb-list -->
                                    </div>
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
    @include('backend.pages.students.partials.create_students')
@endsection
@section('script_js')
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#StudentFormId').on('submit', function(event) {
                event.preventDefault();
                let formData = new FormData(this);
                $.ajax({
                    url: "{{ route('students.save') }}", // Change this to your server endpoint
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.status === 'success') {
                            console.log(response);
                            flashMessage(response.status, response.message);
                            $("#StudentFormId")[0].reset();
                            location.reload();
                        } else {
                            printErrorMsgForStudents(response.error);
                        }
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            printErrorMsgForStudents(xhr.responseJSON.errors);
                        }
                    }
                });
            });


            function printErrorMsgForStudents(errors) {
                $(".print-error-msg-student").find("ul").html('');
                $(".print-error-msg-student").css('display', 'block');
                $.each(errors, function(key, value) {
                    $(".print-error-msg-student").find("ul").append('<li>' + value + '</li>');
                });
            }


        });
        // Delete Students

        document.querySelectorAll('.delete_student').forEach(function(element) {
            element.addEventListener('click', function(event) {
                event.preventDefault();
                var form = this.closest('form');
                Swal.fire({
                    title: 'Are you sure?',
                    text: 'You won\'t be able to revert this!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    </script>
@endsection
