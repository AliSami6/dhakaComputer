<?php

namespace App\Http\Controllers;

use App\Models\BlogFeature;
use Illuminate\Http\Request;

class FeatureWithBlogController extends Controller
{
    public function BlogList()
    {
        $blogFeature = BlogFeature::first();
        return view('frontend.pages.blog',compact('blogFeature'));
    }
}