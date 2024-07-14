@extends('backend.layouts.master')
@section('title','Instructor Payments')
@section('styles')

@endsection
@section('admin-content')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-head-content">
                        <h4 class="title nk-block-title">Instructor Payment</h4>
                        <div class="nk-block-des">
                            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, ea.</p> -->
                        </div>
                    </div>
                </div><!--nk-block head-->
                <div class="nk-block">
                    <div class="card">
                        <ul class="nav nav-tabs nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#tabItem5"><em class="icon ni ni-check-circle"></em><span>Completed payment</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tabItem6"><em class="icon ni ni-loader"></em><span>Pending payment </span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content mt-0">
                            <div class="tab-pane active" id="tabItem5">
                                <div class="nk-tb-list nk-tb-ulist border-bottom border-light">
                                    <div class="nk-tb-item nk-tb-head">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid">
                                                <label class="custom-control-label" for="uid"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col"><span class="sub-text">Instructor</span></div>
                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Account Number</span></div>
                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">Amount</span></div>
                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">Payment date</span></div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1 my-n1">
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend Selected</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Seleted</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- .nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid1">
                                                <label class="custom-control-label" for="uid1"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="html/lms/student-invoice-details.html">
                                                <div class="user-card">
                                                    <div class="user-avatar bg-primary">
                                                        <span>AB</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">Abu Bin Ishtiyak <span class="dot dot-success d-md-none ms-1"></span></span>
                                                        <span>info@softnio.com</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>9834/paypal</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>$7000</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>10-01-21</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                        <em class="icon ni ni-mail-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="html/lms/student-invoice-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid2">
                                                <label class="custom-control-label" for="uid2"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="html/lms/student-invoice-details.html">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <img src="./images/avatar/c-sm.jpg" alt="">
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">Alan Butler <span class="dot dot-info d-md-none ms-1"></span></span>
                                                        <span>butler@example.com</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>7623/paypal</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>$2000</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>10-01-21</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                        <em class="icon ni ni-mail-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="html/lms/student-invoice-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid3">
                                                <label class="custom-control-label" for="uid3"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="html/lms/student-invoice-details.html">
                                                <div class="user-card">
                                                    <div class="user-avatar bg-warning">
                                                        <span>VL</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">Victoria Lynch <span class="dot dot-success d-md-none ms-1"></span></span>
                                                        <span>victoria@example.com</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>98754/paypal</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>$2500</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>10-01-21</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                        <em class="icon ni ni-mail-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="html/lms/student-invoice-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid4">
                                                <label class="custom-control-label" for="uid4"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="html/lms/student-invoice-details.html">
                                                <div class="user-card">
                                                    <div class="user-avatar bg-success">
                                                        <span>PN</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">Patrick Newman <span class="dot dot-success d-md-none ms-1"></span></span>
                                                        <span>patrick@example.com</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>7634/paypal</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>$5000</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>12-01-21</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                        <em class="icon ni ni-mail-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="html/lms/student-invoice-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid5">
                                                <label class="custom-control-label" for="uid5"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="html/lms/student-invoice-details.html">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <img src="./images/avatar/d-sm.jpg" alt="">
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">Jane Harris <span class="dot dot-warning d-md-none ms-1"></span></span>
                                                        <span>harris@example.com</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>1245/paypal</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>$3000</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>11-01-21</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                        <em class="icon ni ni-mail-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="html/lms/student-invoice-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid6">
                                                <label class="custom-control-label" for="uid6"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="html/lms/student-invoice-details.html">
                                                <div class="user-card">
                                                    <div class="user-avatar bg-purple">
                                                        <span>EW</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">Emma Walker <span class="dot dot-success d-md-none ms-1"></span></span>
                                                        <span>walker@example.com</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>6675/paypal</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>$2100</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>16-01-21</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                        <em class="icon ni ni-mail-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="html/lms/student-invoice-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid7">
                                                <label class="custom-control-label" for="uid7"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="html/lms/student-invoice-details.html">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <img src="./images/avatar/a-sm.jpg" alt="">
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">Alan Butler <span class="dot dot-info d-md-none ms-1"></span></span>
                                                        <span>alan@example.com</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>5623/paypal</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>$1500</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>10-05-21</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                        <em class="icon ni ni-mail-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="html/lms/student-invoice-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid8">
                                                <label class="custom-control-label" for="uid8"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="html/lms/student-invoice-details.html">
                                                <div class="user-card">
                                                    <div class="user-avatar bg-warning">
                                                        <span>VL</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">Victoria Lynch <span class="dot dot-success d-md-none ms-1"></span></span>
                                                        <span>victoria@example.com</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>78754/paypal</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>$1978</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>14-04-21</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                        <em class="icon ni ni-mail-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="html/lms/student-invoice-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid9">
                                                <label class="custom-control-label" for="uid9"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="html/lms/student-invoice-details.html">
                                                <div class="user-card">
                                                    <div class="user-avatar bg-success">
                                                        <span>PN</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">Patrick Newman <span class="dot dot-success d-md-none ms-1"></span></span>
                                                        <span>patrick@example.com</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>7634/paypal</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>$5000</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>12-01-21</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                        <em class="icon ni ni-mail-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="html/lms/student-invoice-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid10">
                                                <label class="custom-control-label" for="uid10"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="html/lms/student-invoice-details.html">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <img src="./images/avatar/c-sm.jpg" alt="">
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">Jane Harris <span class="dot dot-warning d-md-none ms-1"></span></span>
                                                        <span>harris@example.com</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>1245/paypal</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>$3000</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>11-01-21</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                        <em class="icon ni ni-mail-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="html/lms/student-invoice-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                </div>
                                <!-- .nk-tb-list -->
                                <div class="card-inner">
                                    <div class="nk-block-between-md g-3">
                                        <div class="g">
                                            <ul class="pagination justify-content-center justify-content-md-start">
                                                <li class="page-item"><a class="page-link" href="#"><em class="icon ni ni-chevrons-left"></em></a></li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
                                                <li class="page-item"><a class="page-link" href="#">6</a></li>
                                                <li class="page-item"><a class="page-link" href="#">7</a></li>
                                                <li class="page-item"><a class="page-link" href="#"><em class="icon ni ni-chevrons-right"></em></a></li>
                                            </ul>
                                            <!-- .pagination -->
                                        </div>
                                        <div class="g">
                                            <div class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                                <div>Page</div>
                                                <div>
                                                    <select class="form-select js-select2" data-search="on" data-dropdown="xs center">
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
                                        </div>
                                        <!-- .pagination-goto -->
                                    </div>
                                    <!-- .nk-block-between -->
                                </div>
                            </div><!--tab pan active-->
                            <div class="tab-pane" id="tabItem6">
                                <div class="nk-tb-list nk-tb-ulist border-bottom border-light">
                                    <div class="nk-tb-item nk-tb-head">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid0">
                                                <label class="custom-control-label" for="uid0"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col"><span class="sub-text">Instructor</span></div>
                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Account Number</span></div>
                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">pending Amount</span></div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1 my-n1">
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend Selected</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Seleted</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid11">
                                                <label class="custom-control-label" for="uid11"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="html/lms/student-invoice-details.html">
                                                <div class="user-card">
                                                    <div class="user-avatar bg-info">
                                                        <span>JL</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">Joe Larson <span class="dot dot-success d-md-none ms-1"></span></span>
                                                        <span>larson@example.com</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>7632/paypal</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>$8000</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                        <em class="icon ni ni-mail-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="html/lms/student-invoice-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid12">
                                                <label class="custom-control-label" for="uid12"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="html/lms/student-invoice-details.html">
                                                <div class="user-card">
                                                    <div class="user-avatar bg-success">
                                                        <span>JD</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">Jhon Doe <span class="dot dot-success d-md-none ms-1"></span></span>
                                                        <span>jhon@example.com</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>8769/payoneer</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>$7900</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                        <em class="icon ni ni-mail-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="html/lms/student-invoice-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid13">
                                                <label class="custom-control-label" for="uid13"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="html/lms/student-invoice-details.html">
                                                <div class="user-card">
                                                    <div class="user-avatar bg-primary">
                                                        <span>AM</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">Alex Marchol <span class="dot dot-success d-md-none ms-1"></span></span>
                                                        <span>alex@example.com</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>8632/paypal</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>$9050</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                        <em class="icon ni ni-mail-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="html/lms/student-invoice-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid14">
                                                <label class="custom-control-label" for="uid14"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="html/lms/student-invoice-details.html">
                                                <div class="user-card">
                                                    <div class="user-avatar bg-warning">
                                                        <span>JL</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">Joe Larson <span class="dot dot-success d-md-none ms-1"></span></span>
                                                        <span>larson@example.com</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>7632/paypal</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>$8000</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                        <em class="icon ni ni-mail-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="html/lms/student-invoice-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid15">
                                                <label class="custom-control-label" for="uid15"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="html/lms/student-invoice-details.html">
                                                <div class="user-card">
                                                    <div class="user-avatar bg-info">
                                                        <span>JS</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">Jane Smith <span class="dot dot-success d-md-none ms-1"></span></span>
                                                        <span>smith@example.com</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>7458/paypal</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>$9860</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                        <em class="icon ni ni-mail-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="html/lms/student-invoice-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid16">
                                                <label class="custom-control-label" for="uid16"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="html/lms/student-invoice-details.html">
                                                <div class="user-card">
                                                    <div class="user-avatar bg-success">
                                                        <span>JD</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">Jhon Doe <span class="dot dot-success d-md-none ms-1"></span></span>
                                                        <span>jhon@example.com</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>8769/payoneer</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>$7900</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                        <em class="icon ni ni-mail-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="html/lms/student-invoice-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid17">
                                                <label class="custom-control-label" for="uid17"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="html/lms/student-invoice-details.html">
                                                <div class="user-card">
                                                    <div class="user-avatar bg-danger">
                                                        <span>LW</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">lara Watson <span class="dot dot-success d-md-none ms-1"></span></span>
                                                        <span>watson@example.com</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>7458/paypal</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>$9860</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                        <em class="icon ni ni-mail-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="html/lms/student-invoice-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid18">
                                                <label class="custom-control-label" for="uid18"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="html/lms/student-invoice-details.html">
                                                <div class="user-card">
                                                    <div class="user-avatar bg-info">
                                                        <span>JL</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">Joe Larson <span class="dot dot-success d-md-none ms-1"></span></span>
                                                        <span>larson@example.com</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>7632/paypal</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>$8000</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                        <em class="icon ni ni-mail-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="html/lms/student-invoice-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid19">
                                                <label class="custom-control-label" for="uid19"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="html/lms/student-invoice-details.html">
                                                <div class="user-card">
                                                    <div class="user-avatar bg-primary">
                                                        <span>MM</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">Max Marchol <span class="dot dot-success d-md-none ms-1"></span></span>
                                                        <span>marchol@example.com</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>8902/paypal</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>$5050</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                        <em class="icon ni ni-mail-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="html/lms/student-invoice-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid20">
                                                <label class="custom-control-label" for="uid20"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="html/lms/student-invoice-details.html">
                                                <div class="user-card">
                                                    <div class="user-avatar bg-warning">
                                                        <span>PL</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">Peri larason <span class="dot dot-success d-md-none ms-1"></span></span>
                                                        <span>larason@example.com</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>7850/payoneer</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>$5684</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                        <em class="icon ni ni-mail-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="html/lms/student-invoice-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- nk-tb-item -->
                                </div>
                                <!-- .nk-tb-list -->
                                <div class="card-inner">
                                    <div class="nk-block-between-md g-3">
                                        <div class="g">
                                            <ul class="pagination justify-content-center justify-content-md-start">
                                                <li class="page-item"><a class="page-link" href="#"><em class="icon ni ni-chevrons-left"></em></a></li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
                                                <li class="page-item"><a class="page-link" href="#">6</a></li>
                                                <li class="page-item"><a class="page-link" href="#">7</a></li>
                                                <li class="page-item"><a class="page-link" href="#"><em class="icon ni ni-chevrons-right"></em></a></li>
                                            </ul>
                                            <!-- .pagination -->
                                        </div>
                                        <div class="g">
                                            <div class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                                <div>Page</div>
                                                <div>
                                                    <select class="form-select js-select2" data-search="on" data-dropdown="xs center">
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
                                        </div>
                                        <!-- .pagination-goto -->
                                    </div>
                                    <!-- .nk-block-between -->
                                </div>
                            </div><!--tab pan-->
                        </div><!--tab content-->
                    </div><!--card-->
                </div><!--nk block-->
            </div>
        </div>
    </div>
</div>

@endsection
@section('modals')
   
@endsection
