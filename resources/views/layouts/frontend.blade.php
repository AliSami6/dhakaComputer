<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LMS - @yield('title') </title>
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/plugins/font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/lms.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/plugins/font-awesome/css/fontawesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap" >
    @stack('styles')
    <style></style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar_nav sticky-lg-top">
        <div class="container-fluid">
            <a class="navbar-brand nav_img" href="index.html"><img src="{{ asset('frontend') }}/assets/images/logo.jpg">
                <span>LMS</span></a>
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
                        <a class="nav-link nav_hover" href="all-courses.html">ALL COURSES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav_hover" href="#">BLOG</a>
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
                    <a class="btn btn-primary" href="login.html">LOG IN <i class="fas fa-arrow-right"></i></a>
                    <!-- <a href="">SIGN UP</a> -->
                </div>
            </div>
        </div>
    </nav>

 
    @yield('content')
    <!-- footer-area -->
  <!-- footer start -->
    <section id="footer_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer_img">
                        <a href=""><img src="{{ asset('frontend') }}/assets/images/logo.jpg">
                            <span>LMS</span></a>
                        <div class="company_text">
                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."</p>
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
                            <a href="">support@ostad.app</a>
                        </li>
                        <li class="page_link_part3">
                        <li class="page_link_part3">
                            <i class="fa-solid fa-location-dot"></i>
                            <a href="">Ka-6/a, Navana Sylvania, Baridhara Road, Nadda, Gulshan-2, Dhaka-1212</a>
                        </li>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <div class="page_link_part1">
                        <span>COMPANY</span>
                    </div>
                    <ul class="page_link_part2">
                        <li class="page_link_part3">
                            <a href="about-us.html">About Us</a>
                        </li>
                        <li class="page_link_part3">
                            <a href="return-policy.html">Refund Policy</a>
                        </li>
                        <li class="page_link_part3">
                            <a href="privecy-policy.html">Privacy Policy</a>
                        </li>
                        <li class="page_link_part3">
                            <a href="tearms&condition.html">Terms & Conditions</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer_bottom border-top-1">
                        <p class="text-center footer-bottom-text">2024 &#169;<span>All right reserved.</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer end -->
    <script type="text/javascript" src="{{ asset('frontend') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="{{ asset('frontend') }}/assets/plugins/font-awesome/js/fontawesome.min.js"></script>
    <script type="text/javascript" src="{{ asset('frontend') }}/assets/js/lms.js"></script>
    @stack('scripts')
</body>

</html>
