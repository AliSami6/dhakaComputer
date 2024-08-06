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

                    <div class="nk-block nk-block-lg">
                        <div class="row g-gs">
                            <div class="card card-bordered card-preview">
                                <div class="card-title ml-5">
                                    <h6 class="title pt-3 mt-3 pl-5 text-uppercase">&nbsp;&nbsp;&nbsp; </h6>
                                </div>

                                <div class="card-inner">
                                    <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                        <thead>
                                            <tr class="nk-tb-item nk-tb-head">
                                                <th class="nk-tb-col"><span class="sub-text">#</span></th>
                                                <th class="nk-tb-col tb-col-mb"><span class="sub-text">Instructor</span></th>
                                                <th class="nk-tb-col tb-col-mb"><span class="sub-text">Email</span></th>
                                                <th class="nk-tb-col tb-col-mb"><span class="sub-text">Phone</span></th>
                                                <th class="nk-tb-col tb-col-mb"><span class="sub-text">Country</span></th>
                                                <th class="nk-tb-col tb-col-mb"><span class="sub-text">Description</span></th>
                                                <th class="nk-tb-col tb-col-mb"><span class="sub-text">Active Courses</span></th>
                                                <th class="nk-tb-col tb-col-mb"><span class="sub-text">Status</span></th>
                                                <th class="nk-tb-col nk-tb-col-tools text-end"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @if ($instructors->isNotEmpty())
                                            @foreach ($instructors as $key => $item)
                                                <tr class="nk-tb-item">
                                                    <td class="nk-tb-col tb-col-md">
                                                        <div class="user-card">
                                                            <div class="user-info">
                                                                <span class="tb-lead text-gray">{{ $key + 1 }}</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-md">
                                                        <div class="user-card">
                                                            <div class="user-info">
                                                                @if ($item->image!=null)
                                                                    <span>
                                                                        <img src="{{ asset('uploaded_files/Instructor/' . $item->image) }}" width="60"/>
                                                                    </span>
                                                                @else
                                                                    <span>{{ $item->first_name[0] ?? '' }}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </td>
                                                   
                                                    <td class="nk-tb-col tb-col-md">
                                                        <div class="user-card">
                                                            <div class="user-info">
                                                                <span class="tb-lead text-gray">{{ $item->email ?? '' }}</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-md">
                                                        <div class="user-card">
                                                            <div class="user-info">
                                                                <span class="tb-lead text-gray">{{ $item->phone ?? '' }}</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-md">
                                                        <div class="user-card">
                                                            <div class="user-info">
                                                                <span class="tb-lead text-gray">{{ $item->country ?? '' }}</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-md">
                                                        <div class="user-card">
                                                            <div class="user-info">
                                                                <span class="tb-lead text-gray">{{ Str::limit($item->about, 50, '...') ?? '' }}</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-md">
                                                        <div class="user-card">
                                                            <div class="user-info">
                                                                @php
                                                                    $activeCourseCount = $item->instructorCourses
                                                                        ->filter(function ($instructorCourse) {
                                                                            return $instructorCourse->course !== null;
                                                                        })
                                                                        ->count();
                                                                @endphp
                                                                <span class="tb-lead text-gray">{{ $activeCourseCount ?? '' }}</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-md">
                                                        <div class="user-card">
                                                            <div class="user-info">
                                                                <span class="tb-lead text-gray">{{ $item->status ?? '' }}</span>
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
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li>
                                                                                <a href="{{ route('instructor.details', $item->id) }}">
                                                                                    <em class="icon ni ni-eye"></em>
                                                                                    <span>View Details</span>
                                                                                </a>
                                                                            </li>
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
                                                                            <form id="delete-form-{{ $item->id }}"
                                                                                action="{{ route('instructor.delete', $item->id) }}"
                                                                                method="POST" style="display: none;">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                            </form>
                                                                            <li>
                                                                                <a href="#"
                                                                                    onclick="event.preventDefault(); confirmDelete('{{ $item->id }}');">
                                                                                    <em class="icon ni ni-trash"></em>
                                                                                    <span>Delete</span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr><!-- .nk-tb-item  -->
                                            @endforeach
                                            @else
                                                <p class="text-danger">No instructors found</p>
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
@section('modals')
    @include('backend.pages.instructors.partials.create_instructor')
    @include('backend.pages.instructors.partials.edit_instructor')
@endsection
@section('script_js')
    @include('backend.pages.instructors.inc.script')
    <script>
        function confirmDelete(id) {
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
                    document.getElementById('delete-form-' + id).submit();
                }
            });
        }
    </script>
@endsection
