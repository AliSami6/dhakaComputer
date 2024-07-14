@extends('backend.layouts.master')
@section('title')
    Role Edit - Admin Panel
@endsection
@section('styles')
    <style>
        .form-check-label {
            text-transform: capitalize;
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
                                <h3 class="nk-block-title page-title">Edit Role</h3>
                            </div>
                        </div>
                    </div><!--.nk-block-head -->
                    <div class="nk-block">
                        <div class="card">
                            <div class="card-inner">
                                <form action="{{ route('admin.roles.update', $role->id) }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <div class="row gy-4">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label" for="name">Role Name</label>
                                                <input type="text" class="form-control" value="{{ $role->name }}"
                                                    name="name" placeholder="Enter a Role Name">
                                            </div>
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        </div><!--col-->
                                        <div class="form-group">
                                            <label for="name">Permissions</label>

                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="checkPermissionAll"
                                                    value="1"
                                                    {{ App\User::roleHasPermissions($role, $all_permissions) ? 'checked' : '' }}>
                                                <label class="form-check-label" for="checkPermissionAll">All</label>
                                            </div>
                                            <hr>
                                            @php $i = 1; @endphp
                                            @foreach ($permission_groups as $group)
                                                <div class="row">
                                                    @php
                                                        $permissions = App\User::getpermissionsByGroupName(
                                                            $group->name,
                                                        );
                                                        $j = 1;
                                                    @endphp

                                                    <div class="col-3">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="{{ $i }}Management"
                                                                value="{{ $group->name }}"
                                                                onclick="checkPermissionByGroup('role-{{ $i }}-management-checkbox', this)"
                                                                {{ App\User::roleHasPermissions($role, $permissions) ? 'checked' : '' }}>
                                                            <label class="form-check-label"
                                                                for="checkPermission">{{ $group->name }}</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-9 role-{{ $i }}-management-checkbox">

                                                        @foreach ($permissions as $permission)
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input"
                                                                    onclick="checkSinglePermission('role-{{ $i }}-management-checkbox', '{{ $i }}Management', {{ count($permissions) }})"
                                                                    name="permissions[]"
                                                                    {{ $role->hasPermissionTo($permission->name) ? 'checked' : '' }}
                                                                    id="checkPermission{{ $permission->id }}"
                                                                    value="{{ $permission->name }}">
                                                                <label class="form-check-label"
                                                                    for="checkPermission{{ $permission->id }}">{{ $permission->name }}</label>
                                                            </div>
                                                            @php  $j++; @endphp
                                                        @endforeach
                                                        <br>
                                                    </div>

                                                </div>
                                                @php  $i++; @endphp
                                            @endforeach
                                        </div>
                                        <div class="col-sm-12">
                                            <ul class="preview-list ">
                                                <li class="preview-item">
                                                    <button type="submit" class="btn btn-primary">Update </button>
                                                </li>
                                            </ul>
                                        </div><!--col-->
                                    </div><!--row-->
                                </form>
                            </div><!--card inner-->
                        </div><!--card-->
                    </div><!--.nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script_js')
    @include('backend.pages.roles.partials.scripts')
@endsection
