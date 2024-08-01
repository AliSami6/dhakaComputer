<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LMS - @yield('title') </title>
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @php
        $web_settings = DB::table('website_infos')->first();
    @endphp
    @if (isset($web_settings->favicon))
        <link rel="shortcut icon" href="{{ asset('uploaded_files/website/favicon/' . $web_settings->favicon) }}">
    @else
        <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.png') }}">
    @endif

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/plugins/font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/lms.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/responsive.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('frontend') }}/assets/plugins/font-awesome/css/fontawesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    @stack('styles')
    <style></style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar_nav sticky-lg-top">
        <div class="container-fluid">
            <a class="navbar-brand nav_img" href="{{ route('index') }}">
                @if (isset($web_settings->logo))
                    <img src="{{ asset('uploaded_files/website/logo/' . $web_settings->logo) }}">
                @else
                    <img src="{{ asset('frontend') }}/assets/images/logo.jpg">
                @endif
                @if (isset($web_settings->site_name))
                    <span>{{ $web_settings->site_name }}</span>
                @else
                    <span>LMS</span>
                @endif
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <form class="d-flex search_btn">
                <i class="fas fa-search"></i>
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
            </form>
            <div class="collapse navbar-collapse custom-nav" id="navbarSupportedContent">
                <ul class="navbar-nav navbar me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active nav_active" aria-current="page" href="#">SPECIAL OFFER</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav_hover" href="{{ route('course.list') }}">ALL COURSES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav_hover" href="{{ route('all.blog') }}">BLOG</a>
                    </li>
                </ul>
                <div class="login_btn">
                    <a class="language" href="">
                        <span class="flag_img">
                            <img src="{{ asset('frontend') }}/assets/images/united-kingdom.png">
                        </span>
                        <span>EN</span>
                    </a>
                    <div class="btn-group">
                        <a class="btn btn-light dropdown-toggle " href="#" data-bs-toggle="dropdown"
                            data-bs-auto-close="true" aria-expanded="false">
                            ALL COURSES
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Menu item</a></li>
                            <li><a class="dropdown-item" href="#">Menu item</a></li>
                            <li><a class="dropdown-item" href="#">Menu item</a></li>
                        </ul>
                    </div>
                    <a class="btn btn-primary" href="{{ route('sign_in') }}">LOG IN <i
                            class="fas fa-arrow-right"></i></a>
                    <!-- <a href="">SIGN UP</a> -->
                </div>
            </div>
        </div>
    </nav>


    @yield('content')
    <!-- footer-area -->
    <!-- footer start -->
    <section id="footer_section" style="background-color: aliceblue" class="mt-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer_img">
                        <a href="">
                            @if (isset($web_settings->logo))
                                <img src="{{ asset('uploaded_files/website/logo/' . $web_settings->logo) }}">
                            @else
                                <img src="{{ asset('frontend') }}/assets/images/logo.jpg">
                            @endif
                            @if (isset($web_settings->site_name))
                                <span>{{ $web_settings->site_name }}</span>
                            @else
                                <span>LMS</span>
                            @endif

                        </a>
                        <div class="company_text">
                            <p>{!! $web_settings->website_description !!}</p>
                        </div>
                        <div class="social_icon_lms">
                            <div class="lms_icon_part_left">
                                <a class="fb_icon" href=""><i class="fab fa-facebook"></i></a>
                                <a class="youtube" href=""><i class="fab fa-youtube"></i></a>
                                <a class="instragram" href=""><i class="fab fa-instagram-square"></i></a>
                                <a class="linkedin" href=""><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="page_link_part1">
                        <span>QUICK LINK</span>
                    </div>
                    <ul class="page_link_part2">
                        <li class="page_link_part3">
                            <a href="#">Upcoming Live Batch</a>
                        </li>
                        <li class="page_link_part3">
                            <a href="#">Free Courses</a>
                        </li>
                        <li class="page_link_part3">
                            <a href="#">Live Workshop</a>
                        </li>
                        <li class="page_link_part3">
                            <a href="#">Blog</a>
                        </li>
                        <!-- <li class="page_link_part3">
                        <a href="#"></a>
                        </li> -->
                    </ul>
                </div>
                <div class="col-md-2">
                    <div class="page_link_part1">
                        <span>Contact</span>
                    </div>
                    <ul class="page_link_part2">
                        <li class="page_link_part3">
                            <i class="fa-solid fa-envelope"></i>
                            <a href="">{{ $web_settings->site_email ?? '' }}</a>
                        </li>
                        <li class="page_link_part3">
                        <li class="page_link_part3">
                            <i class="fa-solid fa-location-dot"></i>
                            <a href="">{!! $web_settings->address !!}</a>
                        </li>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <div class="page_link_part1">
                        <span>{{ $web_settings->site_name ?? '' }}</span>
                    </div>
                    <ul class="page_link_part2">
                        <li class="page_link_part3">
                            <a href="{{ route('dhaka.about') }}" target="_blank">About Us</a>
                        </li>
                        <li class="page_link_part3">
                            <a href="{{ route('dhaka.refund') }}">Refund Policy</a>
                        </li>
                        <li class="page_link_part3">
                            <a href="{{ route('dhaka.privacy') }}">Privacy Policy</a>
                        </li>
                        <li class="page_link_part3">
                            <a href="{{ route('dhaka.terms') }}">Terms & Conditions</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer_bottom border-top-1">
                        <p class="text-center footer-bottom-text">{{ date('Y') }} &#169;<span>All right
                                reserved.</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer end -->
    <script type="text/javascript" src="{{ asset('frontend') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="{{ asset('frontend') }}/assets/plugins/font-awesome/js/fontawesome.min.js">
    </script>
    <script type="text/javascript" src="{{ asset('frontend') }}/assets/js/lms.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        // toastr message
        function flashMessage(status, message) {
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };

            switch (status) {
                case 'success':
                    toastr.success(message, 'Success');
                    break;
                case 'error':
                    toastr.error(message, 'Error');
                    break;
                case 'warning':
                    toastr.warning(message, 'Warning');
                    break;
                case 'info':
                    toastr.info(message, 'Info');
                    break;
            }
        }

        // session toastr
        @if (session()->get('success'))
            flashMessage('success', "{{ session()->get('success') }}");
        @elseif (session()->get('error'))
            flashMessage('error', "{{ session()->get('error') }}");
        @elseif (session()->get('info'))
            flashMessage('info', "{{ session()->get('info') }}");
        @elseif (session()->get('warning'))
            flashMessage('warning', "{{ session()->get('warning') }}");
        @endif
    </script>
    @stack('scripts')
</body>

</html>
