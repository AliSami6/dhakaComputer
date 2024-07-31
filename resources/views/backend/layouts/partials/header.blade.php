<!-- header area start -->
  @php
        $web_settings = DB::table('website_infos')->first();
    @endphp
<div class="nk-header nk-header-fixed is-light">
    <div class="container-fluid">
        <div class="nk-header-wrap">
            <div class="nk-menu-trigger d-xl-none ms-n1">
                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
            </div>
            <div class="nk-header-brand d-xl-none">
                <a href="{{route('admin.dashboard')}}" class="logo-link">
                    <img class="logo-light logo-img" src="{{ asset('uploaded_files/website/logo/'.$web_settings->logo) }}" srcset="{{asset('uploaded_files/website/logo/'.$web_settings->logo) }}" alt="logo">
                    <img class="logo-dark logo-img" src="{{ asset('uploaded_files/website/logo/'.$web_settings->logo) }}" srcset="{{ asset('uploaded_files/website/logo/'.$web_settings->logo) }}" alt="logo-dark">
                </a>
            </div><!-- .nk-header-brand -->
            <div class="nk-header-search ms-3 ms-xl-0">
                <a href="#" class="btn btn-primary"><span>Website</span></a>
            </div><!-- .nk-header-news -->
            <div class="nk-header-tools">
                <ul class="nk-quick-nav">
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle me-n1" data-bs-toggle="dropdown">
                            <div class="user-toggle">
                                <div class="user-avatar sm">
                                    <em class="icon ni ni-user-alt"></em>
                                </div>
                                <div class="user-info d-none d-xl-block">
                                    <div class="user-status user-status-active">{{ Auth::guard('admin')->user()->username }}</div>
                                    <div class="user-name dropdown-indicator">{{Auth::guard('admin')->user()->email }}</div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><a href="html/lms/admin-profile.html"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                    <li><a href="html/lms/admin-profile-setting.html"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><a href="{{ route('admin.logout.submit') }}" 
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"
                                        ><em class="icon ni ni-signout"></em><span>Sign out</span></a>
                                        <form id="logout-form" action="{{ route('admin.logout.submit') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div><!-- .nk-header-wrap -->
    </div><!-- .container-fliud -->
</div>
<!-- header area end -->


