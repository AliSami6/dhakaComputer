@extends('backend.layouts.master')
@section('title', 'Page List')
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
                                <h3 class="nk-block-title page-title"> Page </h3>
                                <div class="nk-block-des text-soft">
                                </div>
                            </div><!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1"
                                        data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">
                                            <li class="nk-block-tools-opt"><a href="{{ route('pages.create') }}"
                                                    class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add New
                                                        Page</span></a></li>
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

                                </div>

                                <div class="card-inner">
                                    <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                        <thead>
                                            <tr class="nk-tb-item nk-tb-head">
                                                <th class="nk-tb-col" style="width:5%;"><span class="sub-text">#</span></th>
                                                <th class="nk-tb-col"style="width:10%;"><span class="sub-text">Page
                                                        Title</span></th>
                                                <th class="nk-tb-col tb-col-mb"><span class="sub-text">Page
                                                        Descripton</span></th>

                                                <th class="nk-tb-col nk-tb-col-tools text-end">
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($pages->isNotEmpty())
                                                @foreach ($pages as $page)
                                                    <tr class="nk-tb-item">
                                                        <td class="nk-tb-col nk-tb-col-check">
                                                            {{ $loop->index + 1 }}
                                                        </td>
                                                        <td class="nk-tb-col tb-col-md">
                                                            <div class="user-card">
                                                                <div class="user-info">
                                                                    <span class="tb-lead text-gray">{{ $page->page_title }}
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-md">
                                                            <div class="user-card">
                                                                <div class="user-info mt-3 mb-1">
                                                                    {!! $page->page_description !!}
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
                                                                                <li><a
                                                                                        href="{{ route('pages.edit', $page->id) }}"><em
                                                                                            class="icon ni ni-edit"></em><span>
                                                                                            Edit </span></a></li>
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
    <script type="text/javascript"></script>
@endsection
