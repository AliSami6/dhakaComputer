<?php

namespace App\Http\Controllers\Backend;

use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BlogCategory\CreateRequest;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogcategory = BlogCategory::latest('id')->get();
        return view('backend.pages.blogCategory.index',['blogcategory'=>$blogcategory]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.blogCategory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
        BlogCategory::create([
            'blog_category'=>$request->blog_category
        ]);
        return redirect()->route('blog.category.index')->with('success', 'Successfully Created !');
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
        $blogcategory = BlogCategory::find($id);
        return view('backend.pages.blogCategory.edit',['blogcategory'=>$blogcategory]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateRequest $request,$id)
    {
        $blogcategory = BlogCategory::find($id);
        $blogcategory->update([
            'blog_category'=>$request->blog_category
        ]);
        return redirect()->route('blog.category.index')->with('success', 'Successfully Updated !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $blogcategory = BlogCategory::find($id);
        $blogcategory->delete();
        return redirect()->route('blog.category.index')->with('success', 'Successfully Deleted !');
    }
}