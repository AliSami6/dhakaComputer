@extends('layouts.frontend')
@section('title', 'Home Page')
@push('styles')
@endpush
@section('content')
    <div class="container">
        <!-- banner section start -->
        <section id="banner-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner-image">
                            <div class="card bg-dark text-white">
                                <img src="{{ asset('frontend') }}/assets/images/banner.jpg" class="card-img"
                                    alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner section end -->
        <!-- course start -->
        <section id="course_section">
            <div class="course_home">
                <section class="course_category">
                    <div class="course_title">
                        <span>আমাদের কোর্সসমুহ <i class="fas fa-book"></i></span>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card category_card">
                                <div class="card-body category_body d-flex ">
                                    <div class="category_icon">
                                        <a class="laptop" href=""><i class="fas fa-laptop"></i></a>
                                    </div>
                                    <div class="category_name">
                                        <h6>Web & App Development</h6>
                                        <p>• ২৯ কোর্স • ৫ ওয়ার্কশপ</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card category_card ">
                                <div class="card-body category_body d-flex ">
                                    <div class="category_icon">
                                        <a class="laptop" href=""><i class="fas fa-bell"></i></a>
                                    </div>
                                    <div class="category_name">
                                        <h6>Product Management & Design</h6>
                                        <p>• ১২ কোর্স • ৩ ওয়ার্কশপ</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card category_card">
                                <div class="card-body category_body d-flex ">
                                    <div class="category_icon">
                                        <a class="laptop" href=""><i class="fas fa-briefcase"></i></a>
                                    </div>
                                    <div class="category_name">
                                        <h6>Business & Marketing</h6>
                                        <p>• ৭ কোর্স</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card category_card">
                                <div class="card-body category_body d-flex ">
                                    <div class="category_icon">
                                        <a class="laptop" href=""><i class="fas fa-server"></i></a>
                                    </div>
                                    <div class="category_name">
                                        <h6>Data Engineering</h6>
                                        <p>• ৬ কোর্স • ১ ওয়ার্কশপ</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="courses">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card course_card">
                                <div class="card-header">
                                    <div class="course_img">
                                        <img src="{{ asset('frontend') }}/assets/images/2024-06-05T12-44-58.450Z-Full-Stack-Web-Development-with-Python-and-Django-2.jpg"
                                            class="card-img-top" alt="...">
                                    </div>
                                    <div class="course_btn">
                                        <a href="">ব্যাচ ২</a>
                                        <a href=""><i class="fab fa-mendeley"></i>১০৮ সিট বাকি</a>
                                        <a href=""><i class="fas fa-clock"></i>১৭ দিন বাকি</a>
                                    </div>
                                </div>
                                <div class="card-body course_text">
                                    <h5 class="card-title">Full Stack Web Development with Python, Django & React</h5>
                                    <a href="course-details.html" class="btn btn-secondary">বিস্তারিত দেখি<i
                                            class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card course_card" style="width: 18rem;">
                                <div class="card-header">
                                    <div class="course_img">
                                        <img src="{{ asset('frontend') }}/assets/images/2024-06-05T12-44-58.450Z-Full-Stack-Web-Development-with-Python-and-Django-2.jpg"
                                            class="card-img-top" alt="...">
                                    </div>
                                    <div class="course_btn">
                                        <a href="">ব্যাচ ২</a>
                                        <a href=""><i class="fab fa-mendeley"></i>১০৮ সিট বাকি</a>
                                        <a href=""><i class="fas fa-clock"></i>১৭ দিন বাকি</a>
                                    </div>
                                </div>
                                <div class="card-body course_text">
                                    <h5 class="card-title">Full Stack Web Development with Python, Django & React</h5>
                                    <a href="course-details.html" class="btn btn-secondary">বিস্তারিত দেখি<i
                                            class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card course_card" style="width: 18rem;">
                                <div class="card-header">
                                    <div class="course_img">
                                        <img src="{{ asset('frontend') }}/assets/images/2024-06-05T12-44-58.450Z-Full-Stack-Web-Development-with-Python-and-Django-2.jpg"
                                            class="card-img-top" alt="...">
                                    </div>
                                    <div class="course_btn">
                                        <a href="">ব্যাচ ২</a>
                                        <a href=""><i class="fab fa-mendeley"></i>১০৮ সিট বাকি</a>
                                        <a href=""><i class="fas fa-clock"></i>১৭ দিন বাকি</a>
                                    </div>
                                </div>
                                <div class="card-body course_text">
                                    <h5 class="card-title">Full Stack Web Development with Python, Django & React</h5>
                                    <a href="#" class="btn btn-secondary">বিস্তারিত দেখি<i
                                            class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card course_card" style="width: 18rem;">
                                <div class="card-header">
                                    <div class="course_img">
                                        <img src="{{ asset('frontend') }}/assets/images/2024-06-05T12-44-58.450Z-Full-Stack-Web-Development-with-Python-and-Django-2.jpg"
                                            class="card-img-top" alt="...">
                                    </div>
                                    <div class="course_btn">
                                        <a href="">ব্যাচ ২</a>
                                        <a href=""><i class="fab fa-mendeley"></i>১০৮ সিট বাকি</a>
                                        <a href=""><i class="fas fa-clock"></i>১৭ দিন বাকি</a>
                                    </div>
                                </div>
                                <div class="card-body course_text">
                                    <h5 class="card-title">Full Stack Web Development with Python, Django & React</h5>
                                    <a href="#" class="btn btn-secondary">বিস্তারিত দেখি<i
                                            class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card course_card" style="width: 18rem;">
                                <div class="card-header">
                                    <div class="course_img">
                                        <img src="{{ asset('frontend') }}/assets/images/2024-06-05T12-44-58.450Z-Full-Stack-Web-Development-with-Python-and-Django-2.jpg"
                                            class="card-img-top" alt="...">
                                    </div>
                                    <div class="course_btn">
                                        <a href="">ব্যাচ ২</a>
                                        <a href=""><i class="fab fa-mendeley"></i>১০৮ সিট বাকি</a>
                                        <a href=""><i class="fas fa-clock"></i>১৭ দিন বাকি</a>
                                    </div>
                                </div>
                                <div class="card-body course_text">
                                    <h5 class="card-title">Full Stack Web Development with Python, Django & React</h5>
                                    <a href="#" class="btn btn-secondary">বিস্তারিত দেখি<i
                                            class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card course_card" style="width: 18rem;">
                                <div class="card-header">
                                    <div class="course_img">
                                        <img src="{{ asset('frontend') }}/assets/images/2024-06-05T12-44-58.450Z-Full-Stack-Web-Development-with-Python-and-Django-2.jpg"
                                            class="card-img-top" alt="...">
                                    </div>
                                    <div class="course_btn">
                                        <a href="">ব্যাচ ২</a>
                                        <a href=""><i class="fab fa-mendeley"></i>১০৮ সিট বাকি</a>
                                        <a href=""><i class="fas fa-clock"></i>১৭ দিন বাকি</a>
                                    </div>
                                </div>
                                <div class="card-body course_text">
                                    <h5 class="card-title">Full Stack Web Development with Python, Django & React</h5>
                                    <a href="#" class="btn btn-secondary">বিস্তারিত দেখি<i
                                            class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card course_card" style="width: 18rem;">
                                <div class="card-header">
                                    <div class="course_img">
                                        <img src="{{ asset('frontend') }}/assets/images/2024-06-05T12-44-58.450Z-Full-Stack-Web-Development-with-Python-and-Django-2.jpg"
                                            class="card-img-top" alt="...">
                                    </div>
                                    <div class="course_btn">
                                        <a href="">ব্যাচ ২</a>
                                        <a href=""><i class="fab fa-mendeley"></i>১০৮ সিট বাকি</a>
                                        <a href=""><i class="fas fa-clock"></i>১৭ দিন বাকি</a>
                                    </div>
                                </div>
                                <div class="card-body course_text">
                                    <h5 class="card-title">Full Stack Web Development with Python, Django & React</h5>
                                    <a href="#" class="btn btn-secondary">বিস্তারিত দেখি<i
                                            class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card course_card" style="width: 18rem;">
                                <div class="card-header">
                                    <div class="course_img">
                                        <img src="{{ asset('frontend') }}/assets/images/2024-06-05T12-44-58.450Z-Full-Stack-Web-Development-with-Python-and-Django-2.jpg"
                                            class="card-img-top" alt="...">
                                    </div>
                                    <div class="course_btn">
                                        <a href="">ব্যাচ ২</a>
                                        <a href=""><i class="fab fa-mendeley"></i>১০৮ সিট বাকি</a>
                                        <a href=""><i class="fas fa-clock"></i>১৭ দিন বাকি</a>
                                    </div>
                                </div>
                                <div class="card-body course_text">
                                    <h5 class="card-title">Full Stack Web Development with Python, Django & React</h5>
                                    <a href="#" class="btn btn-secondary">বিস্তারিত দেখি<i
                                            class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="all_course_button">
                    <a href="" class="btn btn-secondary">সব দেখুন<i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </section>
        <!-- course end -->
        <!-- carriergoal start -->
        <section id="carrier_section">
            <div class="carrier_home">
                <section class="carrier_category">
                    <div class="carrier_title">
                        <h4>ক্যারিয়ার গোল সেট করুন</h4>
                        <p>নিচের অপশন গুলো থেকে আপনার গোল সিলেক্ট করে শেখা শুরু করুন</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 mb-4 col-md-3">
                            <div class="card carrier_card">
                                <div class="card-body carrier_body ">
                                    <div class="carrier_icon">
                                        <a class="carrier_laptop" href=""><i class="fas fa-laptop"></i></a>
                                    </div>
                                    <div class="carrier_name">
                                        <h6>Web & App Development</h6>
                                        <ul class="carrier_text">
                                            <li>২৯ কোর্স</li>
                                            <li>৫ ওয়ার্কশপ</li>
                                        </ul>
                                        <!-- <p>•  • </p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-4 col-md-3">
                            <div class="card carrier_card">
                                <div class="card-body carrier_body">
                                    <div class="carrier_icon">
                                        <a class="carrier_laptop" href=""><i class="fas fa-bell"></i></a>
                                    </div>
                                    <div class="carrier_name">
                                        <h6>Product Management & Design</h6>
                                        <ul class="carrier_text">
                                            <li>২৯ কোর্স</li>
                                            <li>৫ ওয়ার্কশপ</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-4 col-md-3">
                            <div class="card carrier_card">
                                <div class="card-body carrier_body ">
                                    <div class="carrier_icon">
                                        <a class="carrier_laptop" href=""><i class="fas fa-briefcase"></i></a>
                                    </div>
                                    <div class="carrier_name">
                                        <h6>Business & Marketing</h6>
                                        <ul class="carrier_text">
                                            <li>২৯ কোর্স</li>
                                            <li>৫ ওয়ার্কশপ</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-4 col-md-3">
                            <div class="card carrier_card">
                                <div class="card-body carrier_body">
                                    <div class="carrier_icon">
                                        <a class="carrier_laptop" href=""><i class="fas fa-server"></i></a>
                                    </div>
                                    <div class="carrier_name">
                                        <h6>Data Engineering</h6>
                                        <ul class="carrier_text">
                                            <li>২৯ কোর্স</li>
                                            <li>৫ ওয়ার্কশপ</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-4 col-md-3">
                            <div class="card carrier_card">
                                <div class="card-body carrier_body">
                                    <div class="carrier_icon">
                                        <a class="carrier_laptop" href=""><i class="fab fa-wpressr"></i></a>
                                    </div>
                                    <div class="carrier_name">
                                        <h6>Creatives</h6>
                                        <ul class="carrier_text">
                                            <li>২৯ কোর্স</li>
                                            <li>৫ ওয়ার্কশপ</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-4 col-md-3">
                            <div class="card carrier_card">
                                <div class="card-body carrier_body">
                                    <div class="carrier_icon">
                                        <a class="carrier_laptop" href=""><i
                                                class="fab fa-steam-symbol"></i></a>
                                    </div>
                                    <div class="carrier_name">
                                        <h6>Blockchain Development</h6>
                                        <ul class="carrier_text">
                                            <li>২৯ কোর্স</li>
                                            <li>৫ ওয়ার্কশপ</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-4 col-md-3">
                            <div class="card carrier_card">
                                <div class="card-body carrier_body">
                                    <div class="carrier_icon">
                                        <a class="carrier_laptop" href=""><i class="fas fa-lock"></i></a>
                                    </div>
                                    <div class="carrier_name">
                                        <h6>Cyber Security</h6>
                                        <ul class="carrier_text">
                                            <li>২৯ কোর্স</li>
                                            <li>৫ ওয়ার্কশপ</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
        <!-- carriergoal end -->
        <!-- live course start -->
        <section id="live_course_section">
            <div class="live_course_title">
                <h4>কি কি পাচ্ছেন লাইভ কোর্সে</h4>
                <p>নিচের অপশন গুলো থেকে আপনার গোল সিলেক্ট করে শেখা শুরু করুন</p>
            </div>
            <div class="card live_course_card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 live_home">
                            <div class="live_course_icon">
                                <a class="live_course_video" href=""><i class="fas fa-play"></i></i></a>
                            </div>
                            <div class="live_course_name">
                                <h6>ইন্ডাস্ট্রি ফোকাসড লাইভ কোর্সেস</h6>
                                <p>জয়েন করুন গাইডলাইন সমৃদ্ধ ইন্ডাস্ট্রি ফোকাসড লাইভ কোর্সে, শুরু করুন আপনার ক্যারিয়ারের
                                    জার্নি।</p>
                            </div>
                        </div>
                        <div class="col-md-4 live_home">
                            <div class="live_course_icon">
                                <a class="live_course_video" href=""><i class="fas fa-play"></i></i></a>
                            </div>
                            <div class="live_course_name">
                                <h6>ইন্ডাস্ট্রি ফোকাসড লাইভ কোর্সেস</h6>
                                <p>জয়েন করুন গাইডলাইন সমৃদ্ধ ইন্ডাস্ট্রি ফোকাসড লাইভ কোর্সে, শুরু করুন আপনার ক্যারিয়ারের
                                    জার্নি।</p>
                            </div>
                        </div>
                        <div class="col-md-4 live_home">
                            <div class="live_course_icon">
                                <a class="live_course_video" href=""><i class="fas fa-play"></i></i></a>
                            </div>
                            <div class="live_course_name">
                                <h6>ইন্ডাস্ট্রি ফোকাসড লাইভ কোর্সেস</h6>
                                <p>জয়েন করুন গাইডলাইন সমৃদ্ধ ইন্ডাস্ট্রি ফোকাসড লাইভ কোর্সে, শুরু করুন আপনার ক্যারিয়ারের
                                    জার্নি।</p>
                            </div>
                        </div>
                        <div class="col-md-4 live_home">
                            <div class="live_course_icon">
                                <a class="live_course_video" href=""><i class="fas fa-play"></i></i></a>
                            </div>
                            <div class="live_course_name">
                                <h6>ইন্ডাস্ট্রি ফোকাসড লাইভ কোর্সেস</h6>
                                <p>জয়েন করুন গাইডলাইন সমৃদ্ধ ইন্ডাস্ট্রি ফোকাসড লাইভ কোর্সে, শুরু করুন আপনার ক্যারিয়ারের
                                    জার্নি।</p>
                            </div>
                        </div>
                        <div class="col-md-4 live_home">
                            <div class="live_course_icon">
                                <a class="live_course_video" href=""><i class="fas fa-play"></i></i></a>
                            </div>
                            <div class="live_course_name">
                                <h6>ইন্ডাস্ট্রি ফোকাসড লাইভ কোর্সেস</h6>
                                <p>জয়েন করুন গাইডলাইন সমৃদ্ধ ইন্ডাস্ট্রি ফোকাসড লাইভ কোর্সে, শুরু করুন আপনার ক্যারিয়ারের
                                    জার্নি।</p>
                            </div>
                        </div>
                        <div class="col-md-4 live_home">
                            <div class="live_course_icon">
                                <a class="live_course_video" href=""><i class="fas fa-play"></i></i></a>
                            </div>
                            <div class="live_course_name">
                                <h6>ইন্ডাস্ট্রি ফোকাসড লাইভ কোর্সেস</h6>
                                <p>জয়েন করুন গাইডলাইন সমৃদ্ধ ইন্ডাস্ট্রি ফোকাসড লাইভ কোর্সে, শুরু করুন আপনার ক্যারিয়ারের
                                    জার্নি।</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- live course end -->
        <!-- course graduet start-->
        <section id="count_graduate_section">
            <div class="container">
                <div class="course_count">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card count_card">
                                <div class="card-body count_body_1">
                                    <div class="count_list">
                                        <h6 class="counter">৭০০+</h6>
                                        <p>জব প্লেসমেন্ট</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card count_card">
                                <div class="card-body count_body_2">
                                    <div class="count_list">
                                        <h6 class="counter">৭০০+</h6>
                                        <p>জব প্লেসমেন্ট</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card count_card">
                                <div class="card-body count_body_3">
                                    <div class="count_list">
                                        <h6 class="counter">৭০০+</h6>
                                        <p>জব প্লেসমেন্ট</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card count_card">
                                <div class="card-body count_body_4">
                                    <div class="count_list">
                                        <h6 class="counter">৭০০+</h6>
                                        <p>জব প্লেসমেন্ট</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course_graduate">
                    <div class="course_graduate_title">
                        <h4>দেখে নিন কি বলছেন ওস্তাদ গ্র্যাজুয়েটরা</h4>
                        <p>২০০০- র বেশি গ্র্যাজুয়েট যারা পেয়েছেন জব, দেখে নিন কি বলছেন তাদের একাংশ</p>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col-md-12 px-1">
                                    <div class="card mb-2">
                                        <div class="card-header graduate_header_text">
                                            <p>ওস্তাদ-এর MERN কোর্সটি স্কিল ডেভেলপমেন্টের জন্য অনেক হেল্পফুল একটি কোর্স।
                                                আমার প্রতিটি প্রবলেমই তারা লাইভ ক্লাসেই সলভ করার চেষ্টা করেছে। এছাড়াও
                                                সাপোর্ট ইন্সট্রাক্টররাও অনেক ভালো। এসব কারণেই MERN এর লার্নিং জার্নিটা
                                                আমার জন্য ছিল অসাধারণ।</p>
                                        </div>
                                        <div class="card-body graduate_body">
                                            <div class="graduate_body_text">
                                                <p class="graduate_body_icon">BA <span>
                                                    </span>
                                                </p>
                                                <div class="team_header">
                                                    <h6>BADRUJJAMAN ADOR</h6>
                                                    <p>Full Stack Web Development with MERN Batch 1</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 px-1">
                                    <div class="card mb-2">
                                        <div class="card-header graduate_header_text">
                                            <p>ওস্তাদ-এর MERN কোর্সটি স্কিল ডেভেলপমেন্টের জন্য অনেক হেল্পফুল একটি কোর্স।
                                                আমার প্রতিটি প্রবলেমই তারা লাইভ ক্লাসেই সলভ করার চেষ্টা করেছে। এছাড়াও
                                                সাপোর্ট ইন্সট্রাক্টররাও অনেক ভালো। এসব কারণেই MERN এর লার্নিং জার্নিটা
                                                আমার জন্য ছিল অসাধারণ।</p>
                                        </div>
                                        <div class="card-body graduate_body">
                                            <div class="graduate_body_text">
                                                <p class="graduate_body_icon">BA <span>
                                                    </span>
                                                </p>
                                                <h6>BADRUJJAMAN ADOR</h6>
                                                <p>Full Stack Web Development with MERN Batch 1</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="row">
                                <div class="col-md-12 px-1">
                                    <div class="card mb-2">
                                        <div class="card-header graduate_header_text_2">
                                            <p>Ostad এর বিশেষত্ত্ব হচ্ছে ওনারা ডিজাইনের চেয়েও ডিজাইন সাইকোলজিতে ফোকাস
                                                বেশি দেয়। যা একজন শিক্ষার্তীর চাকরির ক্ষেত্রে খুব কাজে দেয় ও অন্য দশজন
                                                থেকে নিজেকে আলাদা করা যায়। ইন্ডাস্ট্রি ফোকাসড এই প্র্যাক্টিস আমাকে
                                                প্রোফেশনালি অনেক হেল্প করেছে।</p>
                                        </div>
                                        <div class="card-body graduate_body">
                                            <div class="graduate_body_text">
                                                <p class="graduate_body_icon">BA <span>
                                                    </span>
                                                </p>
                                                <h6>BADRUJJAMAN ADOR</h6>
                                                <p>Full Stack Web Development with MERN Batch 1</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 px-1">
                                    <div class="card mb-2">
                                        <div class="card-header graduate_header_text">
                                            <p>Even though I come from a non-CS background, I felt that understanding
                                                data science would help me advance in my profession. In order to do so,
                                                I enrolled in an Ostad Data Science course. I believed it would be tough
                                                for me to understand without prior knowledge, but after taking the Ostad
                                                Data course, I learned that it is simple to crack and that they made it
                                                even easier</p>
                                        </div>
                                        <div class="card-body graduate_body">
                                            <div class="graduate_body_text">
                                                <p class="graduate_body_icon">BA <span>
                                                    </span>
                                                </p>
                                                <h6>BADRUJJAMAN ADOR</h6>
                                                <p>Full Stack Web Development with MERN Batch 1</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 px-1">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card mb-2">
                                                <div class="card-header graduate_header_text_2">
                                                    <p>সাজানো গোছানো একদম পরিপূর্ণ গাইডলাইন সমৃদ্ধ একটি কোর্স। আমার মতে
                                                        এই কোর্স এর মডিউল এর বাইরে আলাদা করে আর কোনো সাহায্যের প্রয়োজন
                                                        হয়না।</p>
                                                </div>
                                                <div class="card-body graduate_body">
                                                    <div class="graduate_body_text">
                                                        <p class="graduate_body_icon">BA <span>
                                                            </span>
                                                        </p>
                                                        <h6>BADRUJJAMAN ADOR</h6>
                                                        <p>Full Stack Web Development with MERN Batch 1</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="card mb-2">
                                                <div class="card-header graduate_header_text_2">
                                                    <p>The Data Science program delivered by Ostad is perfect for me, I
                                                        would recommend to anyone who might be interested to take the
                                                        course.</p>
                                                </div>
                                                <div class="card-body graduate_body">
                                                    <div class="graduate_body_text">
                                                        <p class="graduate_body_icon">BA <span>
                                                            </span>
                                                        </p>
                                                        <h6>BADRUJJAMAN ADOR</h6>
                                                        <p>Full Stack Web Development with MERN Batch 1</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col-md-12 px-1">
                                    <div class="card mb-2">
                                        <div class="card-header graduate_header_text">
                                            <p>ওস্তাদ-এর MERN কোর্সটি স্কিল ডেভেলপমেন্টের জন্য অনেক হেল্পফুল একটি কোর্স।
                                                আমার প্রতিটি প্রবলেমই তারা লাইভ ক্লাসেই সলভ করার চেষ্টা করেছে। এছাড়াও
                                                সাপোর্ট ইন্সট্রাক্টররাও অনেক ভালো। এসব কারণেই MERN এর লার্নিং জার্নিটা
                                                আমার জন্য ছিল অসাধারণ।</p>
                                        </div>
                                        <div class="card-body graduate_body">
                                            <div class="graduate_body_text">
                                                <p class="graduate_body_icon">BA <span>
                                                    </span>
                                                </p>
                                                <h6>BADRUJJAMAN ADOR</h6>
                                                <p>Full Stack Web Development with MERN Batch 1</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 px-1">
                                    <div class="card mb-2">
                                        <div class="card-header graduate_header_text">
                                            <p>ওস্তাদ-এর MERN কোর্সটি স্কিল ডেভেলপমেন্টের জন্য অনেক হেল্পফুল একটি কোর্স।
                                                আমার প্রতিটি প্রবলেমই তারা লাইভ ক্লাসেই সলভ করার চেষ্টা করেছে। এছাড়াও
                                                সাপোর্ট ইন্সট্রাক্টররাও অনেক ভালো। এসব কারণেই MERN এর লার্নিং জার্নিটা
                                                আমার জন্য ছিল অসাধারণ।</p>
                                        </div>
                                        <div class="card-body graduate_body">
                                            <div class="graduate_body_text">
                                                <p class="graduate_body_icon">BA <span>
                                                    </span>
                                                </p>
                                                <h6>BADRUJJAMAN ADOR</h6>
                                                <p>Full Stack Web Development with MERN Batch 1</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- course graduet end-->
    </div>
@endsection
@push('scripts')
@endpush
