<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>LMS - @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend') }}/assets/img/favicon.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/meanmenu.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/animate.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/slick.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/backtotop.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/nice-select.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/ui-icon.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/elegentfonts.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/font-awesome-pro.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/spacing.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('/') }}backend/assets/css/toastr.min.css" />

    @stack('styles')
    <style>
        .submenu {
            list-style-type: none;
            padding-left: 0;
        }

        .submenu li {
            margin-bottom: 10px;
            /* Adjust this to your desired spacing */
        }

        li>form.logoutBtn {
            margin-left:25px !important;
        }

        .logoutBtn button span {
            margin-left: 4px !important;
        }


        .header__search-input {
            position: relative;
        }

        .header__search-input input.course_name {
            width: 200px;
            height: 50px;
            background-color: var(--tp-grey-1);
            border: 1px solid var(--tp-grey-1);
            padding: 0 20px;
            padding-left: 40px;
            border-radius: 50px;
            outline: none;
            margin-bottom: 10px;
            /* Adjust as needed */
        }

        .header__search-input .header__search-btn {
            position: absolute;
            left: 10px;
            top: 50%;
            /* Adjust to vertically center the icon */
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
        }

        #search_list {
            position: absolute;
            top: 100%;
            /* Position below the input */
            left: 0;
            z-index: 1000;
            /* Ensure it's above other elements */
            width: 100%;
            max-height: 200px;
            /* Adjust as needed */
            overflow-y: auto;
            background-color: #fff;
            border: 1px solid var(--tp-grey-1);
            border-top: none;
            /* Ensure no border on top */
            border-radius: 0 0 10px 10px;
            /* Rounded bottom corners */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            /* Optional: Add a shadow */
        }

        #search_list li {
            padding: 10px;
            list-style: none;
            border-bottom: 1px solid #ddd;
            /* Optional: Divider between items */
        }

        #search_list li a {
            text-decoration: none;
            color: #333;
            /* Adjust text color */
            display: block;
        }

        #search_list li:hover {
            background-color: #f9f9f9;
            /* Optional: Hover color for list items */
        }

        .main-menu ul>li.has-dropdown.HomeContent>a::after {
            content: none;
        }

        .main-menu ul>li.has-dropdown.CourseContent>a::after {
            content: none;
        }
      
        @media (min-width: 320px) and (max-width: 425px) {
            .header-meta ul li {
                margin-left: 0px;
                margin-right: 4px;
                /* Adjust spacing between items */
            }
        }

        @media (min-width: 320px) and (max-width: 768px) {

            html,
            body {
                overflow-x: hidden;

            }
        }
    </style>
</head>

<body>


    <!-- pre loader area start -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <!-- loading content here -->
            </div>
        </div>
    </div>
    <!-- pre loader area end -->

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->

    <!-- header area start -->
    <header class="header__transparent">
        <div class="header__area pl-220 pr-220 pt-30">
            <div class="main-header" id="header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xxl-3 col-xl-3 col-lg-5 col-md-6 col-6">
                            <div class="logo-area d-flex align-items-center">
                                <div class="logo">
                                    <a href="{{ route('index') }}">
                                        <img src="{{ asset('frontend') }}/assets/img/logo/Logo.png" alt="logo">
                                    </a>
                                </div>
                                <div class="header-cat-menu ml-40 d-none d-md-block">
                                    @php
                                        $cat = DB::table('categories')->get();
                                    @endphp
                                    <nav>
                                        <ul>
                                            <li><a> Categories <span><i class="arrow_carrot-down"></i></span></a>
                                                <ul class="sub-menu">
                                                    @if ($cat->isNotEmpty())
                                                        @foreach ($cat as $c)
                                                            <li><a
                                                                    href="{{ route('course.category_list', $c->id) }}">{{ $c->category_name }}</a>
                                                            </li>
                                                        @endforeach
                                                    @endif
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-9 col-xl-9 col-lg-7 col-md-6 col-6 d-flex align-items-center justify-content-end">
                            <div class="main-menu d-flex justify-content-end mr-15">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="has-dropdown HomeContent">
                                            <a href="{{ route('index') }}">Home</a>
                                        </li>
                                        <li class="has-dropdown CourseContent">
                                            <a href="{{ route('course.list') }}">Course</a>
                                        </li>

                                        <li class="has-dropdown">
                                            <a href="#">My Profile</a>
                                            <ul class="submenu">
                                                @if (Route::has('sign_in'))
                                                    @auth
                                                        <li><a href="{{ route('my_profile') }}">Student Dashboard</a></li>
                                                        <li class="d-flex flex-row wrap text-dark">
                                                            <form action="{{ route('logout.name') }}" method="POST" class="m-0 p-0 logoutBtn">
                                                                @csrf
                                                                <button type="submit" class="d-flex align-items-center p-0 m-0 fw-bold my-2">
                                                                    <i class="fi fi-rr-sign-out"></i>
                                                                    <span>Logout</span>
                                                                </button>
                                                            </form>
                                                        </li>
                                                        
                                                        
                                                    @else
                                                        <li>
                                                            <a href="{{ route('signUp') }}" class="text-decoration-none">
                                                                <i class="fi fi-rr-user"></i> Registration
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('sign_in') }}" class="text-decoration-none">
                                                                <i class="fi fi-rr-user"></i> Login / Sign In
                                                            </a>
                                                        </li>
                                                    @endauth
                                                @endif
                                            </ul>
                                        </li>

                                    </ul>
                                </nav>
                            </div>
                            <div class="header-right d-md-flex align-items-center">
                                <div class="header__search d-none d-lg-block">
                                    <form>
                                        <div class="header__search-input">
                                            <button class="header__search-btn">
                                                <i class="fa-regular fa-magnifying-glass"></i>
                                            </button>
                                            <input type="text" class="course_name" placeholder="Search Courses">
                                            <div id="search_list"></div>
                                        </div>
                                    </form>
                                </div>
                                <div class="header-meta">
                                    <ul>
                                        <li><a href="{{ route('cart') }}"
                                                class="text-decoration-none btn  position-relative d-flex align-items-center">
                                                <i class="fi fi-rr-shopping-bag me-2 mt-1"></i>
                                                <span
                                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                                    {{ count((array) session('cart')) }}
                                                </span>
                                            </a></li>
                                        <li><a href="#" class="tp-menu-toggle d-xl-none"><i
                                                    class="icon_ul"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->
    <div class="tp-sidebar-menu">
        <button class="sidebar-close"><i class="icon_close"></i></button>
        <div class="side-logo mb-30">
            <a href="{{ route('index') }}">
                <img src="{{ asset('/') }}frontend/assets/img/logo/logo-black.png" alt="logo">
            </a>
        </div>
        <div class="mobile-menu"></div>
        <div class="sidebar-info">
            <h4 class="mb-15">Contact Info</h4>
            <ul class="side_circle">
                <li>27 Division St, New York</li>
                <li><a href="tel:123456789">+1 800 123 456 78</a></li>
                <li><a href="mailto:epora@example.com">epora@example.com</a></li>
            </ul>
            <div class="side-social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
    <div class="body-overlay"></div>

    @yield('content')
    <!-- footer-area -->
    <footer>
        <div class="footer-bg theme-bg bg-bottom"
            data-background="{{ asset('frontend') }}/assets/img/bg/shape-bg-02.png">
            <div class="f-border pt-115 pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-2 col-md-4">
                            <div class="footer-widget footer-col-1 mb-50">
                                <div class="footer-widget__text mb-35">
                                    <h3 class="footer-widget__title">About</h3>
                                </div>
                                <div class="footer-widget__link">
                                    <ul>
                                        <li><a href="about.html">About us</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="#">Careers</a></li>
                                        <li><a href="#">Jobs</a></li>
                                        <li><a href="#">In Press</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4">
                            <div class="footer-widget footer-col-2 mb-50">
                                <div class="footer-widget__text mb-35">
                                    <h3 class="footer-widget__title">Quick Links</h3>
                                </div>
                                <div class="footer-widget__link">
                                    <ul>
                                        <li><a href="#">Refund Policy</a></li>
                                        <li><a href="#">Documentation</a></li>
                                        <li><a href="#">Chat online</a></li>
                                        <li><a href="#">Order Cancel</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4">
                            <div class="footer-widget footer-col-3 mb-50">
                                <div class="footer-widget__text mb-35">
                                    <h3 class="footer-widget__title">Support</h3>
                                </div>
                                <div class="footer-widget__link">
                                    <ul>
                                        <li><a href="contact.html">Contact us</a></li>
                                        <li><a href="#">Online Chat</a></li>
                                        <li><a href="#">Whatsapp</a></li>
                                        <li><a href="#">Telegram</a></li>
                                        <li><a href="#">Ticketing</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-8">
                            <div class="footer-widget footer-col-4  mb-50">
                                <div class="footer-widget__text mb-35">
                                    <h3 class="footer-widget__title">Support</h3>
                                </div>
                                <p>Be the first one to know about discounts, offers and events. Unsubscribe whenever you
                                    like.</p>
                                <div class="footer-widget__f-newsletter mb-40">
                                    <form action="index.html">
                                        <span><i class="icon_mail_alt"></i></span>
                                        <input type="email" placeholder="Enter your email">
                                        <button class="footer-widget__submit tp-border-btn2">Subscribe Now</button>
                                    </form>
                                </div>
                                <div class="footer-widget__social d-flex align-items-center">
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                    <a href="#"><i class="fa-light fa-basketball"></i></a>
                                    <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="f-copyright pt-60 pb-30">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="f-copyright__logo mb-30">
                                <a href="{{ route('index') }}">
                                    <img src="{{ asset('/') }}frontend/assets/img/logo/logo-black.png"
                                        alt="logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="f-copyright__text text-md-end mb-30">
                                <span>Copyright &copy; Qbit LMS <?php echo date('Y'); ?> , All Rights Reserved</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area-end -->
    <!-- JS here -->
    <script src="{{ asset('frontend') }}/assets/js/vendor/jquery.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/waypoints.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/bootstrap-bundle.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/meanmenu.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/slick.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/magnific-popup.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/parallax.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/backtotop.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/nice-select.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/counterup.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/wow.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/isotope-pkgd.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/imagesloaded-pkgd.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/ajax-form.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/main.js"></script>
    <script src="{{ asset('/') }}backend/assets/js/toastr.min.js"></script>


    <script>
        // toastr message
        function flashMessage(status, message) {
            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "500",
                "timeOut": "1000",
                "extendedTimeOut": "500",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }

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

        $(document).ready(function() {
            $('.course_name').on('keyup', function() {
                var query = $(this).val();
                // alert(query);
                $.ajax({
                    url: "{{ route('autocomplete') }}",
                    data: {
                        'query': query
                    },
                    success: function(data) {
                        console.log(data);
                        $('#search_list').html(data);
                    }
                });
            })
        });
    </script>
    <script>
        (function(window, document) {
            var loader = function() {
                var script = document.createElement("script"),
                    tag = document.getElementsByTagName("script")[0];
                script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(
                    7);
                tag.parentNode.insertBefore(script, tag);
            };

            window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload",
                loader);
        })(window, document);
    </script>
    @stack('scripts')
</body>

</html>
