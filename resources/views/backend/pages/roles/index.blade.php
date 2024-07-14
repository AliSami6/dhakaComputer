@extends('backend.layouts.master')
@section('title')
    Role Page - Admin Panel
@endsection

@section('admin-content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Roles List</h3>
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

                                            <li class="nk-block-tools-opt">
                                                <a href="html/lms/enroll-student.html"
                                                    class="btn btn-icon btn-primary d-md-none"><em
                                                        class="icon ni ni-plus"></em></a>
                                                @if (Auth::guard('admin')->user()->can('role.create'))
                                                    <a href="{{ route('admin.roles.create') }}"
                                                        class="btn btn-primary d-none d-md-inline-flex"><em
                                                            class="icon ni ni-plus"></em><span>Add</span></a>
                                                @endif
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

                                            <div class="nk-tb-col"><span class="sub-text">Name</span></div>
                                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Permissions</span></div>

                                            <div class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1 my-n1">
                                                    <li>
                                                        {{-- <div class="drodown">
                                                            <a href="#"
                                                                class="dropdown-toggle btn btn-sm btn-icon btn-trigger"
                                                                data-bs-toggle="dropdown"><em
                                                                    class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
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
                                                            </div>
                                                        </div> --}}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!-- .nk-tb-item -->
                                        @foreach ($roles as $role)
                                            <div class="nk-tb-item">

                                                <div class="nk-tb-col">
                                                    <a href="#">
                                                        <div class="user-card">

                                                            <div class="user-info">
                                                                <span class="tb-lead">{{ $role->name }} </span>

                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="nk-tb-col tb-col-md">
                                                    @foreach ($role->permissions as $perm)
                                                        <span class="badge rounded-pill bg-primary mr-1">
                                                            {{ $perm->name }}
                                                        </span>
                                                    @endforeach
                                                </div>


                                                <div class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-1">
                                                        {{-- <li class="nk-tb-action-hidden">
                                                            <a href="#" class="btn btn-sm btn-trigger btn-icon"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Send Email">
                                                                <em class="icon ni ni-mail-fill"></em>
                                                            </a>
                                                        </li>
                                                        <li class="nk-tb-action-hidden">
                                                            <a href="#" class="btn btn-sm btn-trigger btn-icon"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Suspend">
                                                                <em class="icon ni ni-user-cross-fill"></em>
                                                            </a>
                                                        </li> --}}
                                                        <li>
                                                            <div class="drodown">
                                                                <a href="#"
                                                                    class="dropdown-toggle btn btn-sm btn-icon btn-trigger"
                                                                    data-bs-toggle="dropdown"><em
                                                                        class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    @if ($role->name !== 'superadmin')
                                                                        <ul class="link-list-opt no-bdr">
                                                                            @if (Auth::guard('admin')->user()->can('admin.edit'))
                                                                                <li><a
                                                                                        href="{{ route('admin.roles.edit', $role->id) }}"><em
                                                                                            class="icon ni ni-edit"></em><span>Edit
                                                                                        </span></a></li>
                                                                            @endif
                                                                            @if (Auth::guard('admin')->user()->can('admin.delete'))
                                                                                <li>
                                                                                    <a href="#"
                                                                                        onclick="event.preventDefault(); confirmDelete('{{ $role->id }}');">
                                                                                        <em
                                                                                            class="icon ni ni-trash-alt edit_role"></em><span>Delete</span>
                                                                                    </a>
                                                                                </li>
                                                                                <form id="delete-form-{{ $role->id }}"
                                                                                    action="{{ route('admin.roles.destroy', $role->id) }}"
                                                                                    method="POST" style="display: none;">
                                                                                    @method('DELETE')
                                                                                    @csrf
                                                                                </form>
                                                                            @endif

                                                                        </ul>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        @endforeach
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
                                        <div class="g">
                                            <div
                                                class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                                <div>Page</div>
                                                <div>
                                                    <select class="form-select js-select2" data-search="on"
                                                        data-dropdown="xs center">
                                                        <option value="page-1">1</option>
                                                        <option value="page-2">2</option>
                                                        <option value="page-4">4</option>
                                                        <option value="page-5">5</option>
                                                        <option value="page-6">6</option>
                                                        <option value="page-7">7</option>
                                                        <option value="page-8">8</option>
                                                        <option value="page-9">9</option>
                                                        <option value="page-10">10</option>
                                                        <option value="page-11">11</option>
                                                        <option value="page-12">12</option>
                                                        <option value="page-13">13</option>
                                                        <option value="page-14">14</option>
                                                        <option value="page-15">15</option>
                                                        <option value="page-16">16</option>
                                                        <option value="page-17">17</option>
                                                        <option value="page-18">18</option>
                                                        <option value="page-19">19</option>
                                                        <option value="page-20">20</option>
                                                    </select>
                                                </div>
                                                <div>OF 102</div>
                                            </div>
                                        </div><!-- .pagination-goto -->
                                    </div><!-- .nk-block-between -->
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
    <script type="text/javascript">
       function confirmDelete(roleId) {
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
                document.getElementById('delete-form-' + roleId).submit();
            }
        })
    }
    </script>
@endsection
