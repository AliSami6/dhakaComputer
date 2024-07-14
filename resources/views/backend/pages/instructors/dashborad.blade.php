@extends('backend.layouts.master')
@section('title','Dashboard')
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
                                
                                <h3 class="nk-block-title page-title">Instructor Overview</h3>
                            </div><!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1"
                                        data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">
                                            <li>
                                                <div class="drodown">
                                                    <a href="#"
                                                        class="dropdown-toggle btn btn-white btn-dim btn-outline-light"
                                                        data-bs-toggle="dropdown"><em
                                                            class="d-none d-sm-inline icon ni ni-calender-date"></em><span><span
                                                                class="d-none d-md-inline">Last</span> 30 Days</span><em
                                                            class="dd-indc icon ni ni-chevron-right"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><span>Last 30 Days</span></a></li>
                                                            <li><a href="#"><span>Last 6 Months</span></a></li>
                                                            <li><a href="#"><span>Last 1 Years</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- .toggle-wrap -->
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="row g-gs">
                            <div class="col-xxl-8 col-lg-12">
                                <div class="card h-100">
                                    <div class="nk-ecwg nk-ecwg5">
                                        <div class="card-inner">
                                            <div class="card-title-group align-start pb-3 g-2">
                                                <div class="card-title">
                                                    <h6 class="title">Total Earning</h6>
                                                </div>
                                                <div class="card-tools">
                                                    <em class="card-hint icon ni ni-help" data-bs-toggle="tooltip"
                                                        data-bs-placement="left" title="Revenue of this month"></em>
                                                </div>
                                            </div>
                                            <div class="data-group">
                                                <div class="data">
                                                    <div class="title">Monthly</div>
                                                    <div class="amount amount-sm">9.28K</div>
                                                    <div class="change up"><em class="icon ni ni-arrow-long-up"></em>4.63%
                                                    </div>
                                                </div>
                                                <div class="data">
                                                    <div class="title">Weekly</div>
                                                    <div class="amount amount-sm">2.69K</div>
                                                    <div class="change down"><em
                                                            class="icon ni ni-arrow-long-down"></em>1.92%</div>
                                                </div>
                                                <div class="data">
                                                    <div class="title">Daily (Avg)</div>
                                                    <div class="amount amount-sm">0.94K</div>
                                                    <div class="change up"><em class="icon ni ni-arrow-long-up"></em>3.45%
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nk-ecwg5-ck">
                                                <canvas class="lms-line-chart-s4" id="storeVisitors"></canvas>
                                            </div>
                                            <div class="chart-label-group">
                                                <div class="chart-label">01 Jul, 2020</div>
                                                <div class="chart-label">30 Jul, 2020</div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .card -->
                            </div><!-- .col -->
                            <div class="col-xxl-4">
                                <div class="row g-gs">
                                    <div class="col-xxl-12 col-md-6">
                                        <div class="card">
                                            <div class="nk-ecwg nk-ecwg3">
                                                <div class="card-inner pb-2">
                                                    <div class="card-title-group">
                                                        <div class="card-title">
                                                            <h6 class="title"><a href="">Active Students</a></h6>
                                                        </div>
                                                    </div>
                                                    <div class="data">
                                                        <div class="data-group">
                                                            <div class="amount">329</div>
                                                            <div class="info text-end"><span
                                                                    class="change up text-danger"><em
                                                                        class="icon ni ni-arrow-long-up"></em>4.63%</span><br><span>vs.
                                                                    last week</span></div>
                                                        </div>
                                                    </div>
                                                </div><!-- .card-inner -->
                                                <div class="nk-ck-wrap mt-auto overflow-hidden rounded-bottom">
                                                    <div class="nk-ecwg3-ck">
                                                        <canvas class="lms-line-chart-s1" id="activeStudents"></canvas>
                                                    </div>
                                                </div>
                                            </div><!-- .nk-ecwg -->
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                    <div class="col-xxl-12 col-md-6">
                                        <div class="card">
                                            <div class="nk-ecwg nk-ecwg3">
                                                <div class="card-inner pb-2">
                                                    <div class="card-title-group">
                                                        <div class="card-title">
                                                            <h6 class="title"><a href="">New Enrolment</a></h6>
                                                        </div>
                                                    </div>
                                                    <div class="data">
                                                        <div class="data-group">
                                                            <div class="amount">194</div>
                                                            <div class="info text-end"><span
                                                                    class="change up text-danger"><em
                                                                        class="icon ni ni-arrow-long-up"></em>4.63%</span><br><span>vs.
                                                                    Yesterday</span></div>
                                                        </div>
                                                    </div>
                                                </div><!-- .card-inner -->
                                                <div class="nk-ck-wrap mt-auto overflow-hidden rounded-bottom">
                                                    <div class="nk-ecwg3-ck">
                                                        <canvas class="lms-line-chart-s1" id="newStudents"></canvas>
                                                    </div>
                                                </div>
                                            </div><!-- .nk-ecwg -->
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div><!-- .col -->
                            <div class="col-xxl-4 col-lg-6">
                                <div class="card h-100">
                                    <div class="card-inner">
                                        <div class="card-title-group mb-2">
                                            <div class="card-title">
                                                <h6 class="title">My Courses</h6>
                                            </div>
                                            <div class="card-tools">
                                                <a href="#" class="link">View All</a>
                                            </div>
                                        </div>
                                        <ul class="nk-top-products">
                                            <li class="item">
                                                <div class="user-avatar sq bg-success-dim me-3">
                                                    <span>UI/X</span>
                                                </div>
                                                <div class="info">
                                                    <div class="title">UI/UX Design with Adobe XD</div>
                                                    <div class="price">$89.00</div>
                                                </div>
                                                <div class="total">
                                                    <div class="amount">$1780.00</div>
                                                    <div class="count">20 Sold</div>
                                                </div>
                                            </li>
                                            <li class="item">
                                                <div class="user-avatar sq bg-primary-dim me-3">
                                                    <span>WDR</span>
                                                </div>
                                                <div class="info">
                                                    <div class="title">Front-end Web Development with React</div>
                                                    <div class="price">$99.00</div>
                                                </div>
                                                <div class="total">
                                                    <div class="amount">$990.00</div>
                                                    <div class="count">9 Sold</div>
                                                </div>
                                            </li>
                                            <li class="item">
                                                <div class="user-avatar sq bg-danger-dim me-3">
                                                    <span>PHP</span>
                                                </div>
                                                <div class="info">
                                                    <div class="title">Learn PHP Basic to Advance</div>
                                                    <div class="price">$99.00</div>
                                                </div>
                                                <div class="total">
                                                    <div class="amount">$990.00</div>
                                                    <div class="count">10 Sold</div>
                                                </div>
                                            </li>
                                            <li class="item">
                                                <div class="user-avatar sq bg-info-dim me-3">
                                                    <span>AD</span>
                                                </div>
                                                <div class="info">
                                                    <div class="title">Learn Android Development with project</div>
                                                    <div class="price">$99.00</div>
                                                </div>
                                                <div class="total">
                                                    <div class="amount">$990.00</div>
                                                    <div class="count">10 Sold</div>
                                                </div>
                                            </li>
                                            <li class="item">
                                                <div class="user-avatar sq bg-warning-dim me-3">
                                                    <span>WDR</span>
                                                </div>
                                                <div class="info">
                                                    <div class="title">Front-end Web Development with React</div>
                                                    <div class="price">$99.00</div>
                                                </div>
                                                <div class="total">
                                                    <div class="amount">$990.00</div>
                                                    <div class="count">9 Sold</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div><!-- .card-inner -->
                                </div><!-- .card -->
                            </div><!-- .col -->
                            <div class="col-md-6 col-xxl-4">
                                <div class="card card-full">
                                    <div class="card-inner-group">
                                        <div class="card-inner">
                                            <div class="card-title-group">
                                                <div class="card-title">
                                                    <h6 class="title">Student's Feedback</h6>
                                                </div>
                                                <div class="card-tools">
                                                    <a href="#" class="link">View All</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-inner card-inner-md">
                                            <div class="review-item d-flex justify-content-between">
                                                <div class="user-card">
                                                    <div class="user-avatar bg-primary-dim">
                                                        <span>AB</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text">Abu Bin Ishtiyak</span>
                                                        <span class="sub-text">info@softnio.com</span>
                                                    </div>
                                                </div>
                                                <div class="review-status">
                                                    <ul class="review-stars d-flex">
                                                        <li><em class="icon ni ni-star-fill text-warning"></em></li>
                                                        <li><em class="icon ni ni-star-fill text-warning"></em></li>
                                                        <li><em class="icon ni ni-star-fill text-warning"></em></li>
                                                        <li><em class="icon ni ni-star-fill text-warning"></em></li>
                                                        <li><em class="icon ni ni-star-fill text-warning"></em></li>
                                                    </ul>
                                                    <div>
                                                        <a href="#">Full Review</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-inner card-inner-md">
                                            <div class="review-item d-flex justify-content-between">
                                                <div class="user-card">
                                                    <div class="user-avatar bg-info-dim">
                                                        <span>AL</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text">Ashley Lawson</span>
                                                        <span class="sub-text">ashley@softnio.com</span>
                                                    </div>
                                                </div>
                                                <div class="review-status">
                                                    <ul class="review-stars d-flex">
                                                        <li><em class="icon ni ni-star-fill text-warning"></em></li>
                                                        <li><em class="icon ni ni-star-fill text-warning"></em></li>
                                                        <li><em class="icon ni ni-star-fill text-warning"></em></li>
                                                        <li><em class="icon ni ni-star-fill text-warning"></em></li>
                                                        <li><em class="icon ni ni-star-half-fill text-warning"></em></li>
                                                    </ul>
                                                    <div>
                                                        <a href="#">Full Review</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-inner card-inner-md">
                                            <div class="review-item d-flex justify-content-between">
                                                <div class="user-card">
                                                    <div class="user-avatar bg-warning-dim">
                                                        <span>JM</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text">Jane Montgomery</span>
                                                        <span class="sub-text">jane84@example.com</span>
                                                    </div>
                                                </div>
                                                <div class="review-status">
                                                    <ul class="review-stars d-flex">
                                                        <li><em class="icon ni ni-star-fill text-warning"></em></li>
                                                        <li><em class="icon ni ni-star-fill text-warning"></em></li>
                                                        <li><em class="icon ni ni-star-fill text-warning"></em></li>
                                                        <li><em class="icon ni ni-star-fill text-warning"></em></li>
                                                        <li><em class="icon ni ni-star-half-fill text-warning"></em></li>
                                                    </ul>
                                                    <div>
                                                        <a href="#">Full Review</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-inner card-inner-md">
                                            <div class="review-item d-flex justify-content-between">
                                                <div class="user-card">
                                                    <div class="user-avatar bg-pink-dim">
                                                        <span>LH</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text">Larry Henry</span>
                                                        <span class="sub-text">larry108@example.com</span>
                                                    </div>
                                                </div>
                                                <div class="review-status">
                                                    <ul class="review-stars d-flex">
                                                        <li><em class="icon ni ni-star-fill text-warning"></em></li>
                                                        <li><em class="icon ni ni-star-fill text-warning"></em></li>
                                                        <li><em class="icon ni ni-star-fill text-warning"></em></li>
                                                        <li><em class="icon ni ni-star-fill text-warning"></em></li>
                                                        <li><em class="icon ni ni-star text-warning"></em></li>
                                                    </ul>
                                                    <div>
                                                        <a href="#">Full Review</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .card-inner-group -->
                                </div><!-- .card -->
                            </div><!-- .col -->
                            <div class="col-md-6 col-xxl-4">
                                <div class="card h-100">
                                    <div class="card-inner border-bottom">
                                        <div class="card-title-group">
                                            <div class="card-title">
                                                <h6 class="title">Student Support Requests</h6>
                                            </div>
                                            <div class="card-tools">
                                                <a href="#" class="link">All Requests</a>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nk-support">
                                        <li class="nk-support-item">
                                            <div class="user-avatar">
                                                <img src="./images/avatar/a-sm.jpg" alt="">
                                            </div>
                                            <div class="nk-support-content">
                                                <div class="title">
                                                    <span>Vincent Lopez</span>
                                                    <div class="status delivered">
                                                        <em class="icon ni ni-check-circle-fill"></em>
                                                    </div>
                                                </div>
                                                <p>Thanks for contact us with your issues...</p>
                                                <span class="time">6 min ago</span>
                                            </div>
                                        </li>
                                        <li class="nk-support-item">
                                            <div class="user-avatar bg-purple-dim">
                                                <span>DM</span>
                                            </div>
                                            <div class="nk-support-content ">
                                                <div class="title">
                                                    <span>Daniel Moore</span>
                                                    <div class="status unread">
                                                        <em class="icon ni ni-bullet-fill"></em>
                                                    </div>
                                                </div>
                                                <p>Thanks for contact us with your issues...</p>
                                                <span class="time">2 Hours ago</span>
                                            </div>
                                        </li>
                                        <li class="nk-support-item">
                                            <div class="user-avatar">
                                                <img src="./images/avatar/b-sm.jpg" alt="">
                                            </div>
                                            <div class="nk-support-content">
                                                <div class="title">
                                                    <span>Larry Henry</span>
                                                    <div class="status sent">
                                                        <em class="icon ni ni-check-circle"></em>
                                                    </div>
                                                </div>
                                                <p>Thanks for contact us with your issues...</p>
                                                <span class="time">3 Hours ago</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div><!-- .card -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection
@section('modals')
   
@endsection
