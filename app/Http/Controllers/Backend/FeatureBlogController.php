<?php

namespace App\Http\Controllers\Backend;

use App\Models\BlogFeature;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\FeatureBlog\CreateRequest;

class FeatureBlogController extends Controller
{
    
    public function create()
    {
        $blogFeature = BlogFeature::first();
        return view('backend.pages.blog-feature.create',compact('blogFeature'));
    }

    public function store(Request $request)
    {
       $blogFeature = BlogFeature::first();
      
        if ($request->hasFile('blog_feature_banner_image')) {
          $image = $this->image_updated($request->file('blog_feature_banner_image'), 'uploaded_files/blog/feature/',$blogFeature->blog_feature_banner_image);
          //$image = $this->image_upload($request->file('blog_feature_banner_image'), 'uploaded_files/blog/feature/',90,80);
        } 
        else {
            $image = $blogFeature->blog_feature_banner_image;
        }
    
        $blogFeature->update([
            'blog_feature_banner_title' => $request->blog_feature_banner_title,
            'blog_feature_banner_short_desc' =>$request->blog_feature_banner_short_desc,
            'blog_feature_banner_image' => $image
        ]);
       
        return redirect()->back()->with('success','Successfully Updated !'); 
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
