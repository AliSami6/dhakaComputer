@extends('backend.layouts.master')
@section('title')
    Role Create - Admin Panel
@endsection
@section('styles')
    <style>
        .form-check-label {
            text-transform: capitalize;
        }
    </style>
@endsection
@section('admin-content')
    <div class="nk-content">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between g-3">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Create New Role</h3>
                            </div>
                        </div>
                    </div><!--.nk-block-head -->
                    <div class="nk-block">
                        <div class="card">
                            <div class="card-inner">
                                <form action="{{ route('admin.roles.store') }}" method="POST">
                                    @csrf
                                    <div class="row gy-4">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label" for="name">Role Name</label>
                                                <input type="text" class="form-control" id="name"
                                                    placeholder="Role Name" name="name">
                                            </div>
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        </div><!--col-->
                                        <div class="form-group">
                                            <label for="name">Permissions</label>

                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="checkPermissionAll"
                                                    value="1">
                                                <label class="form-check-label" for="checkPermissionAll">All</label>
                                            </div>
                                            <hr>
                                            @php $i = 1; @endphp
                                            @foreach ($permission_groups as $group)
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="{{ $i }}Management"
                                                                value="{{ $group->name }}"
                                                                onclick="checkPermissionByGroup('role-{{ $i }}-management-checkbox', this)">
                                                            <label class="form-check-label"
                                                                for="checkPermission">{{ $group->name }}</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-9 role-{{ $i }}-management-checkbox">
                                                        @php
                                                            $permissions = App\User::getpermissionsByGroupName(
                                                                $group->name,
                                                            );
                                                            $j = 1;
                                                        @endphp
                                                        @foreach ($permissions as $permission)
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input"
                                                                    name="permissions[]"
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
                                                    <button type="submit" class="btn btn-primary">Save </button>
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
