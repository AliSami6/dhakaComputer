@extends('backend.layouts.master')
@section('title', 'Category')
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
                                <h3 class="nk-block-title page-title">Course Category</h3>
                                <div class="nk-block-des text-soft">
                                    <p>You have total {{ $categories->count() }}</p>
                                </div>
                            </div><!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1"
                                        data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">
                                            <li>
                                                <div class="drodown">
                                                    <a href="#"
                                                        class="dropdown-toggle btn btn-white btn-dim btn-outline-light"
                                                        data-bs-toggle="dropdown"><em
                                                            class="d-none d-sm-inline icon ni ni-filter-alt"></em><span>Filtered
                                                            By</span><em class="dd-indc icon ni ni-chevron-right"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><span>Web Development</span></a></li>
                                                            <li><a href="#"><span>Mobile Application</span></a></li>
                                                            <li><a href="#"><span>Graphics Design</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nk-block-tools-opt d-none d-sm-block">
                                                <a class="btn btn-primary" data-bs-toggle="modal" href="#modalCreate"><em
                                                        class="icon ni ni-plus"></em><span>Add Category</span></a>
                                            </li>
                                            <li class="nk-block-tools-opt d-block d-sm-none">
                                                <a class="btn btn-icon btn-primary" data-bs-toggle="modal"
                                                    href="#modalCreate"><em class="icon ni ni-plus"></em></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- .toggle-wrap -->
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="row g-gs">
                            @if (!$categories->isEmpty())
                                @foreach ($categories as $list)
                                    <div class="col-sm-6 col-lg-4 col-xxl-3">
                                        <div class="card h-100">
                                            <div class="card-inner">
                                                <div class="d-flex justify-content-between align-items-start mb-3">
                                                    <a href="#" class="d-flex align-items-center">
                                                        <div class="user-avatar bg-white">
                                                            <img src="{{ asset('uploaded_files/category/' . $list->cat_icon) }}"
                                                                alt="Category Icon" width="60px;">
                                                        </div>
                                                        <div class="ms-3">
                                                            <input type="hidden" class="category_id" name="category_id"
                                                                value="{{ $list->id }}">
                                                            <h6 class="title mb-1">{{ $list->category_name }}</h6>
                                                            <span class="sub-text">{{ $list->subcategories->count() }}
                                                                SubCategories</span>
                                                        </div>
                                                    </a>
                                                    <div class="dropdown">
                                                        <a href="#"
                                                            class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 me-n1"
                                                            data-bs-toggle="dropdown">
                                                            <em class="icon ni ni-more-h"></em>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li>
                                                                    <a data-bs-toggle="modal" href="#modalEdit"
                                                                        class="EditCategory" data-id="{{ $list->id }}">
                                                                        <em class="icon ni ni-edit"></em>
                                                                        <span>Edit Category</span>
                                                                    </a>

                                                                </li>
                                                                <form
                                                                    action="{{ route('category.courses.delete', $list->id) }}"
                                                                    method="post">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <li>
                                                                        <a href="#" class="delete_category">
                                                                            <em class="icon ni ni-trash"></em>
                                                                            <span>Delete</span>
                                                                        </a>
                                                                    </li>
                                                                </form>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="description">{{ $list->description }}</p>
                                                <ul class="d-flex flex-wrap g-1">
                                                    @foreach ($list->subcategories as $subcategory)
                                                        <li><span
                                                                class="badge badge-dim bg-primary">{{ $subcategory->subcategory_name }}</span>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection
@section('modals')
    @include('backend.pages.courses.partials.category-modal')
    @include('backend.pages.courses.partials.edit-category-modal')
@endsection
@section('script_js')
@include('backend.pages.courses.categories.inc.script')
@endsection
