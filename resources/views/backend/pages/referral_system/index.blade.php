@extends('backend.layouts.master')
@section('title', 'Referral system ')
@section('styles')
    <style>

    </style>
@endsection
@section('admin-content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Referral System</h3>
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
                                                <th class="nk-tb-col"><span class="sub-text">Referral code</span></th>
                                                <th class="nk-tb-col tb-col-mb"><span class="sub-text">Student Name</span>
                                                </th>
                                                <th class="nk-tb-col tb-col-mb"><span class="sub-text">Award Points</span>
                                                </th>
                                                <th class="nk-tb-col tb-col-md"><span class="sub-text">Withdraw
                                                        Status</span></th>
                                                <th class="nk-tb-col tb-col-md"><span class="sub-text">Created Date</span>
                                                </th>
                                                <th class="nk-tb-col nk-tb-col-tools text-end">
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($referral->isNotEmpty())
                                                @foreach ($referral as $key => $list)
                                                    <tr class="nk-tb-item">
                                                        <td class="nk-tb-col nk-tb-col-check">
                                                            {{ $key + 1 }}
                                                        </td>
                                                        <td class="nk-tb-col tb-col-md">
                                                            <div class="user-card">
                                                                <div class="user-info">
                                                                    <span
                                                                        class="tb-lead text-gray">{{ $list->referral_code ?? '' }}</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-md">
                                                            <div class="user-card">
                                                                <div class="user-info">
                                                                    <span
                                                                        class="tb-lead text-gray">{{ $list->student_name ?? '' }}</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-md">
                                                            <div class="user-card">
                                                                <div class="user-info">
                                                                    <span
                                                                        class="tb-lead text-gray">{{ $list->promote ?? '' }}</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-md">
                                                            <div class="user-card">
                                                                <div class="user-info">
                                                                    <span
                                                                        class="tb-lead text-gray">{{ $list->wallet_status ?? '' }}</span>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td class="nk-tb-col tb-col-md">
                                                            <div class="user-info">
                                                                <span
                                                                    class="tb-lead text-gray">{{ date('j F y', strtotime($list->create_date)) }}</span>
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
                                                                                    <a href="{{ route('referral.status', ['status' => $list->wallet_status]) }}"><em
                                                                                        class="icon ni ni-edit"></em>
                                                                                        <span> Update Status </span>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                            <!-- .nk-tb-item  -->

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
@section('script_js')
    <script></script>
@endsection
