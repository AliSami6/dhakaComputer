@extends('layouts.frontend')
@section('title', 'Blog Details')
@push('styles')
    <style>

    </style>
@endpush
@section('content')

<section class="b-details ">
    <div class="container ">
        <div class="bgc_yellow">
            <div class="row">
                <div class="col-lg-6">
                    <div class="Blog-Banner ml-5">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb pb-5">
                                <li class="breadcrumb-item"><a href="#">Blog</a></li>
                                <li class="breadcrumb-item " aria-current="page">Category</li>
                                <li class="breadcrumb-item active" aria-current="page">Details</li>
                            </ol>
                        </nav>
                        <a class="blog_title" style="background-color: rgb(255, 255, 255);" href="">
                            {{ $blogDetails->blogCategory->blog_category ?? '' }}
                        </a>
                            &nbsp;&nbsp;&nbsp;
                      
                        <h2 class="blog-titlee pt-3 "style="
                       font-size: 22px ; font-weight: 700; width: ;">{{$blogDetails->blog_title ?? ''}}</h2>
                        <p style="font-size:10px; color: rgb(102 112 133);">{{ date('j F y',strtotime($blogDetails->created_at)) }} </p>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="Blog-Banner_img">
                        <img src="{{asset('uploaded_files/blog/' . $blogDetails->blog_image)}}" alt="{{$blogDetails->blog_title ?? ''}}">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="">
                    {!! $blogDetails->blog_description !!}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Details End -->

<!--Social Icon Start  -->
<section>
    <div class="container">
        <h2 class="shear">Shear This Artical</h2>
        <div class="line"></div>
        <div class="row">
            <div class="col lg-12">
                <div class="Social_icon pt-3 mb-3">
                    <ul class="list-group list-group-horizontal" style="list-style: none;">
                        <li class="mr-1">
                            <a href="" class="p-2">
                                <i class="fa-brands fa-facebook fs-2 "></i>
                            </a>
                        </li>
                        <li class="mr-1">
                            <a href="" class="p-2">
                                <i class="fa-brands fa-linkedin fs-2 "></i>

                            </a>
                        </li>
                        <li class="mr-1">
                            <a href="" class="p-2">
                                <i class="fa-brands fa-x-twitter fs-2"></i>

                            </a>
                        </li>
                        <li class="mr-1" class="p-2">
                            <a href="">
                                <i class="fa-regular fa-message fs-2"></i>

                            </a>
                        </li>

                    </ul>
                  
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@push('scripts')
    <script></script>
@endpush
