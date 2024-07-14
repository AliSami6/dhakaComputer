@extends('backend.layouts.master')
@section('title', 'Course List')
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
                                <h3 class="nk-block-title page-title">Courses</h3>
                                <div class="nk-block-des text-soft">
                                    <p>You have total 20 Courses.</p>
                                </div>
                            </div><!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1"
                                        data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">

                                            <li class="nk-block-tools-opt"><a href="{{ route('create.courses') }}"
                                                    class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add
                                                        Course</span></a></li>
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
                                                    <h6 class="title">Active Courses</h6>
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
                                                    <h6 class="title">Paid Courses</h6>
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
                                                    <h6 class="title">Pending Courses</h6>
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
                                                    <h6 class="title">Free Courses</h6>
                                                </div>
                                            </div>
                                            <div class="data">
                                                <div class="data-group">
                                                    <div class="amount">2</div>
                                                    <div class="nk-ecwg6-ck">
                                                        <canvas class="ecommerce-line-chart-s3" id="todayVisitors"></canvas>
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

                            <div class="card card-bordered card-preview">
                                <div class="card-title ml-5">
                                    <h6 class="title pt-3 mt-3 pl-5 text-uppercase">&nbsp;&nbsp;&nbsp; Course List</h6>
                                </div>

                                <div class="card-body">
                                    <form action="" method="post">
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
                                </div>
                                <div class="card-inner">
                                    <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                        <thead>
                                            <tr class="nk-tb-item nk-tb-head">

                                                <th class="nk-tb-col"><span class="sub-text">#</span></th>
                                                <th class="nk-tb-col"><span class="sub-text">Title</span></th>
                                                <th class="nk-tb-col tb-col-mb"><span class="sub-text">Category</span>
                                                </th>
                                                <th class="nk-tb-col tb-col-md"><span class="sub-text">
                                                        Modules</span></th>
                                                <th class="nk-tb-col tb-col-lg"><span class="sub-text">Enrolled
                                                        Student</span></th>
                                                <th class="nk-tb-col tb-col-lg"><span class="sub-text">Status</span></th>
                                                <th class="nk-tb-col tb-col-md"><span class="sub-text">Price</span></th>
                                                <th class="nk-tb-col nk-tb-col-tools text-end">
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($courses->isNotEmpty())
                                                @foreach ($courses as $key => $course)
                                                    <tr class="nk-tb-item">
                                                        <td class="nk-tb-col nk-tb-col-check">
                                                            {{ $key + 1 }}
                                                        </td>
                                                        <td class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-info">

                                                                    <span class="tb-lead"><a
                                                                            href="#">{{ $course->course_title }}</a><span
                                                                            class="dot dot-success d-md-none ms-1"></span></span>
                                                                  
                                                                        @foreach ($course->instructors as $instructorCourse)
                                                                            <span>Instructor:
                                                                                {{ $instructorCourse->instructor->first_name . ' ' . $instructorCourse->instructor->last_name }}</span>
                                                                        @endforeach
                                                                  
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-info">
                                                                    <span
                                                                        class="badge badge-dim bg-light text-gray"><span>{{ $course->categories->category_name }}</span></span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">

                                                            <div class="user-card">
                                                                <div class="user-info">

                                                                    <span class="tb-lead text-gray">Module
                                                                        {{ $course->sections->count() }}</span>
                                                                    
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-md">
                                                            <div class="user-card">
                                                                <div class="user-info">

                                                                    <span class="tb-lead text-gray">Enrollments:
                                                                        {{ $course->studentEnrollments->count() }}</span>

                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td class="nk-tb-col tb-col-md">
                                                            <span
                                                                class="tb-status text-success">{{ $course->course_status }}</span>
                                                        </td>
                                                        <td class="nk-tb-col nk-tb-col-check">

                                                            <div class="user-card">
                                                                <div class="user-info">
                                                                    <span
                                                                        class="tb-lead badge badge-dim bg-light text-gray"><span>$
                                                                            {{ $course->price }}
                                                                        </span></span>
                                                                   
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="View">

                                                                        <em class="icon ni ni-eye"></em>
                                                                    </a>
                                                                </li>
                                                                @if (Auth::guard('admin')->user()->can('course.edit'))
                                                                    <li class="nk-tb-action-hidden">
                                                                        <a href="{{ route('edit.courses', $course->id) }}"
                                                                            class="btn btn-trigger btn-icon"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top" title="Edit">
                                                                            <em class="icon ni ni-pen"></em>
                                                                        </a>
                                                                    </li>
                                                                @endif
                                                                @if (Auth::guard('admin')->user()->can('course.delete'))
                                                                    <li class="nk-tb-action-hidden">
                                                                        <form
                                                                            action="{{ route('courses.delete', $course->id) }}"
                                                                            method="post">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <a href="#"
                                                                                class="btn btn-trigger btn-icon delete_course"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-placement="top" title="Delete">
                                                                                <em class="icon ni ni-trash"></em>
                                                                            </a>
                                                                        </form>
                                                                    </li>
                                                                @endif
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#"
                                                                            class="dropdown-toggle btn btn-icon btn-trigger"
                                                                            data-bs-toggle="dropdown"><em
                                                                                class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            @if (Auth::guard('admin')->user()->can('course.edit'))
                                                                                <ul class="link-list-opt no-bdr">
                                                                                    {{-- <li><a href="#"><em class="icon ni ni-eye"></em><span>View course on frontend</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-repeat"></em><span>Go to course playing page</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-bar-chart-alt"></em><span>Academic progress</span></a></li> --}}

                                                                                    <li><a
                                                                                            href="{{ route('edit.courses', $course->id) }}"><em
                                                                                                class="icon ni ni-edit"></em><span>
                                                                                                Edit this course</span></a>
                                                                                    </li>

                                                                                    <li><a
                                                                                            href="{{ route('course_status.update', [$course->id, 'Active']) }}"><em
                                                                                                class="icon ni ni-activity"></em><span>Active</span></a>
                                                                                    </li>
                                                                                    <li><a
                                                                                            href="{{ route('course_status.update', [$course->id, 'Private']) }}"><em
                                                                                                class="icon ni ni-lock"></em><span>Private</span></a>
                                                                                    </li>
                                                                                    <li><a
                                                                                            href="{{ route('course_status.update', [$course->id, 'Upcoming']) }}"><em
                                                                                                class="icon ni ni-signal"></em><span>Upcoming</span></a>
                                                                                    </li>


                                                                                </ul>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                <!-- .nk-tb-item  -->
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- .card-preview -->

                        </div><!-- .row -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script_js')
    <script>
        document.querySelectorAll('.delete_course').forEach(function(element) {
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
