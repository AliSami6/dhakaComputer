@extends('layouts.frontend')
@section('title', 'Blog Page')
@push('styles')
<style>

</style>
@endpush
@section('content')

    <section class="pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mt-5">
                <h2 class="blog-title">Blog Of The Day</h2>
                <div class="line"></div>
                <div class="blog_card mt-3 mb-3">
                    @if(isset($blogFeature))
                     <img src="{{ asset('uploaded_files/blog/feature/'.$blogFeature->blog_feature_banner_image) }}" class="card-img-top" alt="...">
                    @else
                    <img src="{{ asset('frontend') }}/assets/images/Blog.png" class="card-img-top" alt="...">
                    @endif
                    <div class="card-body">
                      <h4 class="blog_card-title mt-3 mb-3">{{$blogFeature->blog_feature_banner_title ?? ''}}</h4>
                      <p class="blog_card-text mb-3">{!! $blogFeature->blog_feature_banner_short_desc !!} </p>
                      <p class="blog_card-text mb-3"><small class="text-body-secondary">{{date('j F y',strtotime($blogFeature->created_at))}}</small></p>
                    </div>
                  </div>
                  
            </div>
            <div class="col-lg-6 mt-5">
                <h2 class="blog-title">Featured Blogs</h2>
                <div class="featured-blogs">
                    <ul class="blog-list">
                        <li class="blog-item">
                            <a href="#">
                                <h3>এসইও অপটিমাইজেশন: ডাটা ড্রিভেন ডিজিটাল মার্কেটিং এর ব্যবহার</h3>
                                <p>28 December 2023</p>
                            </a>
                        </li>
                        <li class="blog-item">
                            <a href="#">
                                <h3>কিভাবে ডিজিটাল মার্কেটিং নিয়ে স্ট্রাটেজি তৈরি করবেন</h3>
                                <p>06 March 2024</p>
                            </a>
                        </li>
                        <li class="blog-item">
                            <a href="#">
                                <h3>ডিজিটাল মার্কেটিং এর গুরুত্বপূর্ণ টিপস এবং ট্রিকস</h3>
                                <p>12 March 2024</p>
                            </a>
                        </li>
                        <li class="blog-item">
                            <a href="#">
                                <h3>চ্যাটজিপিটি ইউজেস ফর লার্নারেল ডেভেলপারস</h3>
                                <p>12 March 2024</p>
                            </a>
                        </li>
                        <li class="blog-item">
                            <a href="#">
                                <h3>মার্কেটিং মানে কি বুঝেন?</h3>
                                <p>12 February 2024</p>
                            </a>
                        </li>
                        <li class="blog-item">
                            <a href="#">
                                <h3>আর্ট অব প্রোডাক্ট ম্যানেজমেন্ট: ৮টি গুরুত্বপূর্ণ প্রোডাক্ট ম্যানেজমেন্ট স্কিল</h3>
                                <p>28 December 2023</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex justify-content-between">
                    <h2 class="blog-title">PRODUCT MANAGEMENT AND DESIGN</h2>
                <a class="see-more" href="">See More ></a>
            </div>
            <div class="line"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                    
                <div class="card blog_card blog_single_card mt-3 mb-3">
                    <img src="{{ asset('frontend') }}/assets/images/pm1.jpg" class="card-img-top card-pm" alt="...">
                    <div class="card-body">
                      <h4 class="blog_card-title mt-3 mb-3">একজন ফ্রেশার কি প্রোডাক্ট ম্যানেজার হতে পারে? || Can A Fresher Become A Product...</h4>
                      <p class="blog_card-text mb-3">আমাদের চারপাশের প্রতিটি সেক্টরের পরিচালনার মূলে থাকে ম্যানেজমেন্ট...</p>
                      <p class="blog_card-text mb-3"><small class="text-body-secondary">3 July 2024</small></p>
                    </div>
                  </div>
                  
            </div>
            <div class="col-lg-3">
                
                <div class="card blog_card blog_single_card mt-3 mb-3">
                    <img src="{{ asset('frontend') }}/assets/images/pm2.jpg" class="card-img-top card-pm" alt="...">
                    <div class="card-body">
                      <h4 class="blog_card-title mt-3 mb-3">প্রোডাক্ট ম্যানেজমেন্ট ইন্টারভিউ ক্র্যাক করার ৫ টি টিপস...</h4>
                      <p class="blog_card-text mb-3">চারদিকে প্রোডাক্ট ম্যানেজারের ভীরে প্রোডাক্ট ম্যানেজার আসলে কাকে ...</p>
                      <p class="blog_card-text mb-3"><small class="text-body-secondary">15 May 2024</small></p>
                    </div>
                  </div>
                  
            </div>
            <div class="col-lg-3">
                <div class="card blog_card blog_single_card mt-3 mb-3">
                    <img src="{{ asset('frontend') }}/assets/images/pm3.jpg" class="card-img-top card-pm" alt="...">
                    <div class="card-body">
                      <h4 class="blog_card-title mt-3 mb-3">জুনিয়র প্রোডাক্ট ডিজাইনারদের কাছে কোম্পানিরা কী এক্সপেক্ট করেন...</h4>
                      <p class="blog_card-text mb-3">একজন জুনিয়র প্রোডাক্ট ডিজাইনার হল এন্ট্রি-লেভেলের ডিজাইন...</p>
                      <p class="blog_card-text mb-3"><small class="text-body-secondary">15 May 2024</small></p>
                    </div>
                  </div>
            </div>
            <div class="col-lg-3">
                <div class="card blog_card blog_single_card mt-3 mb-3">
                    <img src="{{ asset('frontend') }}/assets/images/pm4.jpg" class="card-img-top card-pm" alt="...">
                    <div class="card-body">
                      <h4 class="blog_card-title mt-3 mb-3">প্রোডাক্ট ম্যানেজমেন্ট বনাম প্রোজেক্ট ম্যানেজমেন্ট...</h4>
                      <p class="blog_card-text mb-3">প্রোডাক্ট ম্যানেজমেন্ট এবং প্রোজেক্ট ম্যানেজমেন্টের মধ্যে পার্থক্য আছে...</p>
                      <p class="blog_card-text mb-3"><small class="text-body-secondary">2 January 2024</small></p>
                    </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
               <div class="d-flex justify-content-between">
                <h2 class="blog-title">WEB AND APP DEVELOPMENT</h2>
                <a class="see-more" href="">See More ></a>
               </div>
                <div class="line"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                    
                <div class="card blog_card blog_single_card mt-3 mb-3">
                    <img src="{{ asset('frontend') }}/assets/images/wb1.jpg" class="card-img-top card-pm" alt="...">
                    <div class="card-body">
                      <h4 class="blog_card-title mt-3 mb-3">What Are The Benefits Of Flutter App Development?...</h4>
                      <p class="blog_card-text mb-3">ফ্লাটার অ্যাপ ডেভেলপমেন্টের সুবিধা || What Are The Benefits Of...</p>
                      <p class="blog_card-text mb-3"><small class="text-body-secondary">3 July 2024</small></p>
                    </div>
                  </div>
                  
            </div>
            <div class="col-lg-3">
                
                <div class="card blog_card blog_single_card mt-3 mb-3">
                    <img src="{{ asset('frontend') }}/assets/images/wb2.jpg" class="card-img-top card-pm" alt="...">
                    <div class="card-body">
                      <h4 class="blog_card-title mt-3 mb-3">ফ্লাটার কি ফ্রন্টেড নাকি ব্যাকেন্ড? ।। Is Flutter Frontend Or Backend (Uses of Flutter)?...</h4>
                      <p class="blog_card-text mb-3">অ্যাপ ডেভেলমেন্টের এই যুগে কতশত ফ্রেমওয়ার্কের আলাপ আসে আর যা...</p>
                      <p class="blog_card-text mb-3"><small class="text-body-secondary">15 May 2024</small></p>
                    </div>
                  </div>
                  
            </div>
            <div class="col-lg-3">
                <div class="card blog_card blog_single_card mt-3 mb-3">
                    <img src="{{ asset('frontend') }}/assets/images/wb3.jpg" class="card-img-top card-pm" alt="...">
                    <div class="card-body">
                      <h4 class="blog_card-title mt-3 mb-3">ডাটা সায়েন্টিস্ট হওয়ার ৮ টি স্টেপ...</h4>
                      <p class="blog_card-text mb-3">আপনার কি মনে হচ্ছে না, ডেটা সাইনটিস্ট হওয়ার এখনি সময়? একবা...</p>
                      <p class="blog_card-text mb-3"><small class="text-body-secondary">15 May 2024</small></p>
                    </div>
                  </div>
            </div>
            <div class="col-lg-3">
                <div class="card blog_card blog_single_card mt-3 mb-3">
                    <img src="{{ asset('frontend') }}/assets/images/wb4.jpg" class="card-img-top card-pm" alt="...">
                    <div class="card-body">
                      <h4 class="blog_card-title mt-3 mb-3">দ্য ফিউচার অফ আর্টিফিশিয়াল ইন্টেলিজেন্স...</h4>
                      <p class="blog_card-text mb-3">আমি যদি সাম্প্রতিক সময়ের কথা বলি সেখানে কৃত্রিম বুদ্ধিমত্তা...</p>
                      <p class="blog_card-text mb-3"><small class="text-body-secondary">2 January 2024</small></p>
                    </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex justify-content-between">
                    <h2 class="blog-title">HIGHER STUDY ABROAD</h2>
                <a class="see-more" href="">See More ></a>
                </div>
                <div class="line"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                    
                <div class="card blog_card blog_single_card mt-3 mb-3">
                    <img src="{{ asset('frontend') }}/assets/images/ht1.jpg" class="card-img-top card-pm" alt="...">
                    <div class="card-body">
                      <h4 class="blog_card-title mt-3 mb-3">যেভাবে সিভি/ রেজিউমে বানালে তা আপনাকে চাকরির নিশ্চয়তা দেবে...</h4>
                      <p class="blog_card-text mb-3">ডিজাইন সিভি তৈরি করে কঠিন হলে ও অসম্ভব নয় কিন্তু-----লার্ন ডিজাইন...</p>
                      <p class="blog_card-text mb-3"><small class="text-body-secondary">3 July 2024</small></p>
                    </div>
                  </div>
                  
            </div>
            <div class="col-lg-3">
                
                <div class="card blog_card blog_single_card mt-3 mb-3">
                    <img src="{{ asset('frontend') }}/assets/images/ht2.jpg" class="card-img-top card-pm" alt="...">
                    <div class="card-body">
                      <h4 class="blog_card-title mt-3 mb-3">ফর্মাল ইমেইল লেখার খুঁটিনাটি...</h4>
                      <p class="blog_card-text mb-3">ইমেইল আমাদের একটি অতি পরিচিত মাধ্যম হলেও, ফরমাল ইমেইল লেখা...</p>
                      <p class="blog_card-text mb-3"><small class="text-body-secondary">15 May 2024</small></p>
                    </div>
                  </div>
                  
            </div>
            <div class="col-lg-3">
                <div class="card blog_card blog_single_card mt-3 mb-3">
                    <img src="{{ asset('frontend') }}/assets/images/ht3.jpg" class="card-img-top card-pm" alt="...">
                    <div class="card-body">
                      <h4 class="blog_card-title mt-3 mb-3">IELTS Listening Test...</h4>
                      <p class="blog_card-text mb-3">Academic এবং General উভয় ক্ষেত্রেই IELTS Listening Test এর...</p>
                      <p class="blog_card-text mb-3"><small class="text-body-secondary">15 May 2024</small></p>
                    </div>
                  </div>
            </div>
            <div class="col-lg-3">
                <div class="card blog_card blog_single_card mt-3 mb-3">
                    <img src="{{ asset('frontend') }}/assets/images/ht4.jpg" class="card-img-top card-pm" alt="...">
                    <div class="card-body">
                      <h4 class="blog_card-title mt-3 mb-3">IELTS Speaking Test...</h4>
                      <p class="blog_card-text mb-3">IELTS Speaking Test হল IELTS পরীক্ষার চারটি সেকশনের মধ্যে...</p>
                      <p class="blog_card-text mb-3"><small class="text-body-secondary">2 January 2024</small></p>
                    </div>
            </div>
        </div>
    </div>
</section>

@endsection
@push('scripts')
    <script>
        
    </script>
@endpush
