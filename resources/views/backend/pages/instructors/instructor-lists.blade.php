@extends('backend.layouts.master')
@section('title', 'Instructor List')
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
                                <h3 class="nk-block-title page-title">Instructors</h3>
                            </div>
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
                                                <a href="#" class="btn btn-icon btn-primary d-md-none"><em
                                                        class="icon ni ni-plus"></em></a>
                                                <a class="btn btn-primary d-none d-md-inline-flex" data-bs-toggle="modal"
                                                    href="#instructor-add"><em
                                                        class="icon ni ni-plus"></em><span>Add</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="card">
                            <div class="card-inner-group">
                                <div class="card-inner p-0">
                                    <div class="nk-tb-list nk-tb-ulist">
                                        <div class="nk-tb-item nk-tb-head">

                                            <div class="nk-tb-col"><span class="sub-text">Instructor</span></div>
                                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Phone</span></div>
                                            <div class="nk-tb-col tb-col-lg"><span class="sub-text">Country</span></div>
                                            <div class="nk-tb-col tb-col-lg"><span class="sub-text">Description</span></div>
                                            <div class="nk-tb-col tb-col-mb"><span class="sub-text"></span>Active courses
                                            </div>
                                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></div>
                                            <div class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1 my-n1">
                                                    <li>
                                                        <div class="drodown">
                                                            <a href="#"
                                                                class="dropdown-toggle btn btn-icon btn-trigger"
                                                                data-bs-toggle="dropdown"><em
                                                                    class="icon ni ni-more-h"></em></a>
                                                            {{-- <div class="dropdown-menu dropdown-menu-end">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="#"><em
                                                                                class="icon ni ni-mail"></em><span>Send
                                                                                Email to All</span></a></li>
                                                                    <li><a href="#"><em
                                                                                class="icon ni ni-na"></em><span>Suspend
                                                                                Selected</span></a></li>
                                                                    <li><a href="#"><em
                                                                                class="icon ni ni-trash"></em><span>Remove
                                                                                Seleted</span></a></li>
                                                                </ul>
                                                            </div> --}}
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- .header end -->
                                        @if ($instructors->isNotEmpty())
                                            @forelse ($instructors as $item)
                                                <div class="nk-tb-item">

                                                    <div class="nk-tb-col">
                                                        <a href="#">
                                                            <div class="user-card">
                                                                <div class="user-avatar bg-primary">
                                                                    @if ($item->image != null)
                                                                        <span>
                                                                            <img
                                                                                src="{{ asset('uploaded_files/Instructor/' . $item->image) }}" />
                                                                        </span>
                                                                    @else
                                                                        <span>{{ $item->first_name[0] }}</span>
                                                                    @endif
                                                                </div>
                                                                <div class="user-info">
                                                                    <span
                                                                        class="tb-lead">{{ $item->first_name . ' ' . $item->last_name }}
                                                                        <span
                                                                            class="dot dot-success d-md-none ms-1"></span></span>
                                                                    <span>{{ $item->email }}</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-md">
                                                        <span>{{ $item->phone }}</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-lg">
                                                        <span>{{ $item->country }}</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-lg">
                                                        <span>{{ $item->about }}</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-mb">
                                                        @php
                                                            $activeCourseCount = $item->instructorCourses
                                                                ->filter(function ($instructorCourse) {
                                                                    return $instructorCourse->course !== null;
                                                                })
                                                                ->count();
                                                        @endphp
                                                        <span>{{ $activeCourseCount }} active courses</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-md">
                                                        <span class="tb-status text-success">{{ $item->status }}</span>
                                                    </div>
                                                    <div class="nk-tb-col nk-tb-col-tools">
                                                        <ul class="nk-tb-actions gx-1">

                                                            <li>
                                                                <div class="drodown">
                                                                    <a href="#"
                                                                        class="dropdown-toggle btn btn-icon btn-trigger"
                                                                        data-bs-toggle="dropdown"><em
                                                                            class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        @if (Auth::guard('admin')->user()->status == 'Active')
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a
                                                                                        href="{{ route('instructor.details', $item->id) }}"><em
                                                                                            class="icon ni ni-eye"></em><span>View
                                                                                            Details</span></a></li>
                                                                                <li><a data-bs-toggle="modal"
                                                                                        href="#modalEdit"
                                                                                        class="EditInstructor"
                                                                                        data-id="{{ $item->id }}"><em
                                                                                            class="icon ni ni-pen2"></em><span>Edit</span></a>
                                                                                </li>
                                                                                <li><a
                                                                                        href="{{ route('instructor_status.update', [$item->id, 'Active']) }}"><em
                                                                                            class="icon ni ni-activity-round"></em><span>Active</span></a>
                                                                                </li>
                                                                                <li><a
                                                                                        href="{{ route('instructor_status.update', [$item->id, 'Inactive']) }}"><em
                                                                                            class="icon ni ni-lock"></em><span>Inactive</span></a>
                                                                                </li>
                                                                                <li><a
                                                                                        href="{{ route('instructor_status.update', [$item->id, 'Pending']) }}"><em
                                                                                            class="icon ni ni-history"></em><span>Pending</span></a>
                                                                                </li>
                                                                                <li><a
                                                                                        href="{{ route('instructor_status.update', [$item->id, 'Suspend']) }}"><em
                                                                                            class="icon ni ni-article"></em><span>Suspend</span></a>
                                                                                </li>

                                                                                <form
                                                                                    action="{{ route('instructor.delete', $item->id) }}"
                                                                                    method="post">
                                                                                    @csrf
                                                                                    @method('DELETE')
                                                                                    <li>
                                                                                        <a href="#"
                                                                                            class="delete_instructor">
                                                                                            <em
                                                                                                class="icon ni ni-trash"></em>
                                                                                            <span>Delete</span>
                                                                                        </a>
                                                                                    </li>
                                                                                </form>

                                                                            </ul>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            @empty
                                                <p class="text-danger">Not Found </p>
                                            @endforelse
                                        @endif
                                        <!-- .nk-tb-item -->

                                    </div><!-- .nk-tb-list -->
                                </div>
                                <div class="card-inner">
                                    <div class="nk-block-between-md g-3">
                                        <div class="g">
                                            <ul class="pagination justify-content-center justify-content-md-start">
                                                <li class="page-item"><a class="page-link" href="#"><em
                                                            class="icon ni ni-chevrons-left"></em></a></li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><span class="page-link"><em
                                                            class="icon ni ni-more-h"></em></span></li>
                                                <li class="page-item"><a class="page-link" href="#">6</a></li>
                                                <li class="page-item"><a class="page-link" href="#">7</a></li>
                                                <li class="page-item"><a class="page-link" href="#"><em
                                                            class="icon ni ni-chevrons-right"></em></a></li>
                                            </ul><!-- .pagination -->
                                        </div>

                                    </div><!-- .nk-block-between -->
                                </div><!--card inner-->
                            </div>
                        </div><!--card-->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection
@section('modals')
    @include('backend.pages.instructors.partials.create_instructor')
    @include('backend.pages.instructors.partials.edit_instructor')
@endsection
@section('script_js')
    @include('backend.pages.instructors.inc.script')
@endsection
