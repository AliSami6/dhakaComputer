@extends('backend.layouts.master')
@section('title')
    Admin Create - Admin Panel
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
                                <h3 class="nk-block-title page-title">Admin Create</h3>
                            </div>
                        </div>
                    </div><!--.nk-block-head -->
                    <div class="nk-block">
                        <div class="card">
                            <div class="card-inner">
                                <form action="{{ route('admin.admins.store') }}" method="POST">
                                    @csrf
                                    <div class="row gy-4">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="name">Admin Name</label>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    placeholder="Enter Name">
                                            </div>
                                            @error('name')
                                            <span class="text-danger" >
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="name">Admin Email</label>
                                                <input type="text" class="form-control" id="email" name="email"
                                                    placeholder="Enter Email">
                                            </div>
                                            @error('email')
                                            <span class="text-danger" >
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="name">Password</label>
                                                <input type="password" class="form-control" id="password" name="password"
                                                    placeholder="Enter Password">
                                            </div>
                                            @error('password')
                                            <span class="text-danger" >
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="name">Confirm Password</label>
                                                <input type="password" class="form-control" id="password_confirmation"
                                                    name="password_confirmation" placeholder="Enter Password">
                                            </div>
                                                @error('password_confirmation')
                                                    <span class="text-danger" >
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="username">Admin Username</label>
                                                <input type="text" class="form-control" id="username" name="username"
                                                    placeholder="Enter Username">
                                                    @error('username')
                                                        <span class="text-danger" >
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="status">Admin Status</label>
                                                <select class="form-select js-select2" id="status" name="status">
                                                    <option value="Active">Active</option>
                                                    <option value="Inactive">Inactive</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-12">
                                            <ul class="preview-list ">
                                                <li class="preview-item">
                                                    <button type="submit" class="btn btn-primary">Save </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

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
@endsection
