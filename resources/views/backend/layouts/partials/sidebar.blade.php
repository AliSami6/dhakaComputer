 <!-- sidebar menu  start -->
 @php
     $usr = Auth::guard('admin')->user();
 @endphp
   <!-- sidebar @s -->
  <div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="html/index.html" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img" src="{{ asset('/') }}backend/assets/images/logo.png" srcset="{{ asset('/') }}backend/assets/images/logo2x.png 2x" alt="logo">
                <img class="logo-dark logo-img" src="{{ asset('/') }}backend/assets/images/logo-dark.png" srcset="{{ asset('/') }}backend/assets/images/logo-dark2x.png 2x" alt="logo-dark">
                <img class="logo-small logo-img logo-img-small" src="{{ asset('/') }}backend/assets/images/logo-small.png" srcset="{{ asset('/') }}backend/assets/images/logo-small2x.png 2x" alt="logo-small">
            </a>
        </div>
        <div class="nk-menu-trigger me-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                     
                    <li class="nk-menu-item">
                        <a href="{{ route('admin.dashboard') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                            <span class="nk-menu-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{ route('admin.admins.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-user-check"></em></span>
                            <span class="nk-menu-text">Admins</span>
                        </a>
                    </li>
                   
                      
                    <li class="nk-menu-item has-sub">
                        <a href="{{ route('courseList') }}" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-book-fill"></em></span>
                            <span class="nk-menu-text">Courses</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{route('category.courses')}}" class="nk-menu-link"><span class="nk-menu-text">Catagories</span></a>
                            </li>
                            {{-- <li class="nk-menu-item">
                                <a href="{{route('subcategory.index')}}" class="nk-menu-link"><span class="nk-menu-text">Subcatagories</span></a>
                            </li> --}}
                            <li class="nk-menu-item">
                                <a href="{{ route('courseList') }}" class="nk-menu-link"><span class="nk-menu-text">Course List</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-user-fill"></em></span>
                            <span class="nk-menu-text">Instructors</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route('instructor.list') }}" class="nk-menu-link"><span class="nk-menu-text">Instructor List</span></a>
                            </li>
                          
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{ route('students.all') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                            <span class="nk-menu-text">Students</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-property-add"></em></span>
                            <span class="nk-menu-text">Enrolment</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route('enrollments.all') }}" class="nk-menu-link"><span class="nk-menu-text">Enroll History</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('enrollments.student') }}" class="nk-menu-link"><span class="nk-menu-text">Enroll a Student</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{ route('batch.list') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-user-list-fill"></em></span>
                            <span class="nk-menu-text">Batch</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{ route('chooseus.create') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-menu-circled"></em></span>
                            <span class="nk-menu-text">Why Choose us</span>
                        </a>
                    </li>
                     <li class="nk-menu-item">
                        <a href="{{ route('blog.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-comments"></em></span>
                            <span class="nk-menu-text">Blog</span>
                        </a>
                    </li>
                      <li class="nk-menu-item">
                        <a href="{{ route('content.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-live"></em></span>
                            <span class="nk-menu-text">Live Course Content</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{ route('counter.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-folder-plus"></em></span>
                            <span class="nk-menu-text">Counter Section</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{ route('settings') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-setting-alt-fill"></em></span>
                            <span class="nk-menu-text">Settings</span>
                        </a>
                    </li>
                   
                  
                    <li class="nk-menu-item ">
                        <a href="{{ route('page.index') }}" class="nk-menu-link ">
                            <span class="nk-menu-icon"><em class="icon ni ni-view-group-fill"></em></span>
                            <span class="nk-menu-text">Pages</span>
                        </a>
                        
                    </li>
                    <li class="nk-menu-item ">
                        <a href="{{ route('referral.system') }}" class="nk-menu-link ">
                            <span class="nk-menu-icon">
                                <em class="icon ni ni-wallet"></em>
                                </span>
                            <span class="nk-menu-text">Referral System</span>
                        </a>
                        
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{route('invoice.all')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-file-docs"></em></span>
                            <span class="nk-menu-text">Invoice</span>
                        </a>
                        
                    </li>
                    {{-- <li class="nk-menu-item">
                        <a href="{{ route('profiles') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-account-setting-fill"></em></span>
                            <span class="nk-menu-text">Admin profile</span>
                        </a>
                    </li>
                   
                   --}}
                   {{-- <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Return to</h6>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="html/index.html" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-dashlite-alt"></em></span>
                            <span class="nk-menu-text">Main Dashboard</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="html/components.html" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-layers-fill"></em></span>
                            <span class="nk-menu-text">All Components</span>
                        </a>
                    </li> --}}
                    
                    <!-- .nk-menu-item -->
                </ul><!-- .nk-menu -->
            </div><!-- .nk-sidebar-menu -->
        </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-element -->
</div>
<!-- sidebar @e -->
