<?php

namespace App\Http\Controllers\Backend;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\CreateRequest;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog = Blog::latest('id')->get();
        return view('backend.pages.blog.index',compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
        // dd($request->toArray());
        if (!empty($request->file('blog_image'))) {
            $image = $this->image_upload($request->file('blog_image'), 'uploaded_files/blog/', 90, 80);
        } else {
            return redirect()->back()->with('error', 'Image is required!');
        }
        Blog::create([
            'blog_category' => $request->blog_category,
            'blog_title' => $request->blog_title,
            'blog_content' => $request->blog_content,
            'blog_image' =>  $image
        ]);
        return redirect()->route('blog.index')->with('success', 'Blog Created !');
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
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('backend.pages.blog.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $blog = Blog::find($id);
        if (!empty($request->file('blog_image'))) {
            $image = $this->image_updated($request->file('blog_image'), 'uploaded_files/blog/', $blog->blog_image);
        } else {
            $image = $blog->blog_image;
        }
        $blog->update([
            'blog_category' => $request->blog_category,
            'blog_title' => $request->blog_title,
            'blog_content' => $request->blog_content,
            'blog_image' =>  $image
        ]);
        return redirect()->route('blog.index')->with('success', 'Blog Updated !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::find($id);
        $this->imageDelete('uploaded_files/blog/'.$blog->blog_image);
        $blog->delete();
        return redirect()->route('blog.index')->with('success', 'Blog has been deleted!');
    }
}