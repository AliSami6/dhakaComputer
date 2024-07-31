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
                        @if (isset($blogFeature))
                            <img src="{{ asset('uploaded_files/blog/feature/' . $blogFeature->blog_feature_banner_image) }}"
                                class="card-img-top" alt="...">
                        @else
                            <img src="{{ asset('frontend') }}/assets/images/Blog.png" class="card-img-top" alt="...">
                        @endif
                        <div class="card-body">
                            <h4 class="blog_card-title mt-3 mb-3">{{ $blogFeature->blog_feature_banner_title ?? '' }}</h4>
                            <p class="blog_card-text mb-3">{!! $blogFeature->blog_feature_banner_short_desc !!} </p>
                            <p class="blog_card-text mb-3"><small
                                    class="text-body-secondary">{{ date('j F y', strtotime($blogFeature->created_at)) }}</small>
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 mt-5">
                    <h2 class="blog-title">Featured Blogs</h2>
                    <div class="featured-blogs">
                        <ul class="blog-list">
                            @if ($blog_fea_title->isNotEmpty())
                                @foreach ($blog_fea_title as $blogFeature)
                                    <li class="blog-item">
                                        <a href="{{ route('blog.details',$blogFeature->slug) }}">
                                            <h3>{{ $blogFeature->blog_title ?? '' }}</h3>
                                            <p>{{ date('j F y', strtotime($blogFeature->created_at)) }}</p>
                                        </a>
                                    </li>
                                @endforeach
                            @endif

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if ($blogCategories->isNotEmpty())
        @foreach ($blogCategories as $category)
            <section class="pt-5">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="d-flex justify-content-between">
                                <h2 class="blog-title">{{ $category->blog_category }}</h2>
                                <!-- Adjust based on your category field -->
                                <a class="see-more" href="#">See More ></a> <!-- Adjust route if necessary -->
                            </div>
                            <div class="line"></div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($category->blog as $blog)
                        
                            <div class="col-lg-3">

                                <div class="card blog_card blog_single_card mt-3 mb-3">
                                  
                                    <img src="{{ asset('uploaded_files/blog/' . $blog->blog_image) }}"
                                        class="card-img-top card-pm" alt="{{ $blog->blog_title }}">
                                    <div class="card-body">
                                        <h4 class="blog_card-title mt-3 mb-3 " >  <a class="text-decoration-none " href="{{ route('blog.details',$blog->slug) }}" style="color:#0d0d0d;">{{ $blog->blog_title }}  </a></h4>
                                        <p class="blog_card-text mb-3">
                                           
                                            {!! Str::words(strip_tags($blog->blog_description), 10, '...') !!}
                                        </p>
                                        <p class="blog_card-text mb-3"><small
                                                class="text-body-secondary">{{ $blog->created_at->format('d F Y') }}</small>
                                        </p>
                                    </div>
                              
                                </div>
                            </div>
                        
                        @endforeach
                    </div>
                </div>
            </section>
        @endforeach
    @endif

@endsection
@push('scripts')
    <script></script>
@endpush
