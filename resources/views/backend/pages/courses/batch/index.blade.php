@extends('backend.layouts.master')
@section('title', 'All Batch ')
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
                                <h3 class="nk-block-title page-title"> Batch </h3>
                                <div class="nk-block-des text-soft">
                                </div>
                            </div><!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1"
                                        data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">
                                            <li class="nk-block-tools-opt"><a href="{{ route('create.batch') }}" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add New Batch</span></a></li>
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
                                                <th class="nk-tb-col"><span class="sub-text">#</span></th>
                                                <th class="nk-tb-col"><span class="sub-text">Batch no</span></th>
                                                <th class="nk-tb-col tb-col-mb"><span class="sub-text">Batch code</span></th>
                                                <th class="nk-tb-col tb-col-md"><span class="sub-text">Class type</span></th>
                                                <th class="nk-tb-col tb-col-md"><span class="sub-text">Class start</span></th>
                                                <th class="nk-tb-col tb-col-md"><span class="sub-text">Class rutine</span></th>
                                                <th class="nk-tb-col tb-col-md"><span class="sub-text">Class time</span></th>
                                                <th class="nk-tb-col tb-col-md"><span class="sub-text">Total class</span></th>
                                                <th class="nk-tb-col tb-col-md"><span class="sub-text">Total seat</span></th>
                                                <th class="nk-tb-col nk-tb-col-tools text-end">
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if($batch->isNotEmpty())
                                            @foreach($batch as $li)
                                            <tr class="nk-tb-item">
                                                <td class="nk-tb-col nk-tb-col-check">
                                                    1
                                                 </td>
                                                 <td class="nk-tb-col tb-col-md">
                                                    <div class="user-card">
                                                        <div class="user-info">
                                                            <span class="tb-lead text-gray">{{ $li->batch_no ?? '' }}</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="nk-tb-col tb-col-md">
                                                    <div class="user-card">
                                                        <div class="user-info">
                                                            <span class="tb-lead text-gray">{{ $li->batch_code ?? '' }}</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                
                                                <td class="nk-tb-col tb-col-md">
                                                   <div class="user-info">
                                                            <span class="tb-lead text-gray">{{ $li->class_type ?? ' ' }}</span>
                                                        </div>
                                                </td>
                                                <td class="nk-tb-col tb-col-md">
                                                    <div class="user-info">
                                                             <span class="tb-lead text-gray">{{ $li->class_start ?? ' ' }}</span>
                                                         </div>
                                                 </td>
                                               
                                                 <td class="nk-tb-col tb-col-md">
                                                    <div class="user-info">
                                                             <span class="tb-lead text-gray">{{ $li->class_rutine ?? ' ' }}</span>
                                                         </div>
                                                 </td>
                                                 <td class="nk-tb-col tb-col-md">
                                                    <div class="user-info">
                                                             <span class="tb-lead text-gray">{{ $li->class_time ?? ' ' }}</span>
                                                         </div>
                                                 </td>
                                                 <td class="nk-tb-col tb-col-md">
                                                    <div class="user-info">
                                                             <span class="tb-lead text-gray">{{ $li->total_class ?? ' ' }}</span>
                                                         </div>
                                                 </td>
                                                 <td class="nk-tb-col tb-col-md">
                                                    <div class="user-info">
                                                             <span class="tb-lead text-gray">{{ $li->total_seat ?? ' ' }}</span>
                                                         </div>
                                                 </td>
                                                
                                                <td class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-1">
                                                       
                                                        <li class="nk-tb-action-hidden">
                                                            <a href="{{ route('edit.batch',$li->id) }}" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                                <em class="icon ni ni-pen"></em>
                                                            </a>
                                                        </li>
                                                        <li class="nk-tb-action-hidden">
                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                                <em class="icon ni ni-trash"></em>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="{{ route('edit.batch',$li->id) }}"><em class="icon ni ni-edit"></em><span> Edit batch</span></a></li>
                                                                        <li class="divider"></li>
                                                                        <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            @endforeach
                                            <!-- .nk-tb-item  -->
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
