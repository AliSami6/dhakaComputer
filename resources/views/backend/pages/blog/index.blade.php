@extends('backend.layouts.master')
@section('title', 'Blog')
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
                                <h3 class="nk-block-title page-title">Blog</h3>
                            </div><!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1"
                                        data-target="more-options"><em class="icon ni ni-more-v"></em></a>
                                    <div class="toggle-expand-content" data-content="more-options">
                                        <ul class="nk-block-tools g-3">
                                            <li class="nk-block-tools-opt">
                                                {{-- <a class="btn btn-icon btn-primary d-md-none" data-bs-toggle="modal"
                                                    href="#student-add"><em class="icon ni ni-plus"></em></a> --}}
                                                <a class="btn btn-primary d-none d-md-inline-flex"
                                                    href="{{ route('blog.create') }}"><em
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
                                               
                                                <th class="nk-tb-col"><span class="sub-text">Blog Image</span></th>
                                                <th class="nk-tb-col tb-col-mb"><span class="sub-text">Blog Category</span>
                                                </th>
                                                <th class="nk-tb-col tb-col-mb"><span class="sub-text">Blog Title</span>
                                                </th>
                                               

                                                <th class="nk-tb-col nk-tb-col-tools text-end">
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($blog->isNotEmpty())
                                                @foreach ($blog as $list)
                                                    <tr class="nk-tb-item">
                                                        
                                                        <td class="nk-tb-col tb-col-md">
                                                            <div class="user-card">
                                                                <div class="user-info">
                                                                    <img class="" width="100"
                                                                        src="{{ asset('uploaded_files/blog/' . $list->blog_image) }}" />
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-md">
                                                            <div class="user-card">
                                                                <div class="user-info">
                                                                    <span
                                                                        class="tb-lead text-gray">{{ $list->blogCategory->blog_category }}</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-md">
                                                            <div class="user-card">
                                                                <div class="user-info">
                                                                    <span
                                                                        class="tb-lead text-gray">{{ $list->blog_title }}</span>
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
                                                                                    <a
                                                                                        href="{{ route('blog.edit', $list->id) }}">
                                                                                        <em class="icon ni ni-pen"></em>
                                                                                        <span>Edit</span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="divider"></li>
                                                                                <li>
                                                                                    <a href="#"
                                                                                        onclick="event.preventDefault(); confirmDelete('{{ $list->id }}');">
                                                                                        <em
                                                                                            class="icon ni ni-trash delete_blog"></em>
                                                                                        <span>Delete</span>
                                                                                    </a>
                                                                                </li>
                                                                                <form id="delete-form-{{ $list->id }}"
                                                                                    action="{{ route('blog.destroy', $list->id) }}"
                                                                                    method="POST" style="display: none;">
                                                                                    @method('DELETE')
                                                                                    @csrf
                                                                                </form>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr><!-- .nk-tb-item  -->
                                                @endforeach
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

@endsection
@section('script_js')
    <script type="text/javascript">
        function confirmDelete(listId) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + listId).submit();
                }
            })
        }
    </script>
@endsection
