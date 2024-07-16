@extends('backend.layouts.master')
@section('title','Instructor List')
@section('styles')

@endsection
@section('admin-content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-between g-3">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Invoices</h3>
                                <div class="nk-block-des text-soft">
                                    <p>You have total 937 invoices.</p>
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
                                                <th class="nk-tb-col"><span class="sub-text">Student ID</span></th>
                                                <th class="nk-tb-col tb-col-mb"><span class="sub-text">Student Name</span></th>
                                                <th class="nk-tb-col tb-col-mb"><span class="sub-text">Amount</span></th>
                                                <th class="nk-tb-col tb-col-md"><span class="sub-text">Date</span></th>
                                                <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                                                <th class="nk-tb-col nk-tb-col-tools text-end">
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="nk-tb-item">
                                                <td class="nk-tb-col nk-tb-col-check">
                                                    1
                                                 </td>
                                                 <td class="nk-tb-col tb-col-md">
                                                    <div class="user-card">
                                                        <div class="user-info">
                                                            <span class="tb-lead text-gray">3O70U92</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="nk-tb-col tb-col-md">
                                                    <div class="user-card">
                                                        <div class="user-info">
                                                            <span class="tb-lead text-gray">3O70U92</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="nk-tb-col tb-col-md">
                                                    <div class="user-card">
                                                        <div class="user-info">
                                                            <span class="tb-lead text-gray">3O70U92</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="nk-tb-col tb-col-md">
                                                    <div class="user-card">
                                                        <div class="user-info">
                                                            <span class="tb-lead text-gray">Wed, 29-May-2024</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                
                                                <td class="nk-tb-col tb-col-md">
                                                   <div class="user-info">
                                                          
                                                            <span class="tb-odr-status">
                                                                <span class="badge badge-dot bg-success">Complete</span>
                                                            </span>
                                                        </div>
                                                </td>
                                                
                                                <td class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-1">
                                                       
                                                        
                                                        <li>
                                                            <div class="tb-odr-btns d-none d-sm-inline">
                                                                <a href="{{route('invoice.details')}}" target="_blank"
                                                                    class="btn btn-icon btn-white btn-dim btn-sm btn-primary"><em
                                                                        class="icon ni ni-printer-fill"></em></a>
                                                                <a href="{{route('invoice.details')}}"
                                                                    class="btn btn-dim btn-sm btn-primary">View</a>
                                                            </div>
                                                            <a href="{{route('invoice.details')}}"
                                                                class="btn btn-pd-auto d-sm-none"><em
                                                                    class="icon ni ni-chevron-right"></em></a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr><!-- .nk-tb-item  -->

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
    @include('backend.pages.profiles.partials.update-profile')
@endsection
