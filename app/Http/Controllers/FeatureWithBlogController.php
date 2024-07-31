<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogFeature;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class FeatureWithBlogController extends Controller
{
    public function BlogList()
    {
        $blogFeature = BlogFeature::first();
        $blog_fea_title = Blog::where('is_featured','=', 1)->get();
        $blogCategories = BlogCategory::with('blog')
        ->whereHas('blog', function ($query) {
            $query->where('is_featured', null);
        })->oldest('id')->get();
        return view('frontend.pages.blog',[
            'blogFeature'=>$blogFeature,
        'blog_fea_title'=>$blog_fea_title,
        'blogCategories'=>$blogCategories]
        );
    }
    public function BlogDetails($slug){
        $bolgDetails = Blog::with('blogCategory')->where('slug',$slug)->first();
        return view('frontend.pages.blogDetails',['blogDetails'=>$bolgDetails]);
    }
}