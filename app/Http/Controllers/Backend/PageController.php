<?php

namespace App\Http\Controllers\Backend;

use App\Models\Page;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Page\CreateRequest;
use App\Http\Requests\Page\UpdateRequest;
use Illuminate\Support\Facades\Validator;

class PageController extends Controller
{
    public function pageList(){
        $pages = Page::latest('id')->get();
        return view('backend.pages.page.index',compact('pages'));
    }
    public function create(){
        return view('backend.pages.page.create');
    }
    public function edit(Page $page){
        return view('backend.pages.page.edit',compact('page'));
    }
    public function store(CreateRequest $request){
        Page::create([
            'page_title'=>$request->page_title,
            'slug'=>Str::slug($request->page_title),
            'page_description'=>$request->page_description
        ]);
        return redirect()->back()->with('success','Page Created successfully!!');
    }
    public function update(UpdateRequest $request, Page $page){
        $page->update([
            'page_title'=>$request->page_title,
            'slug'=>Str::slug($request->page_title),
            'page_description'=>$request->page_description
        ]);
        return redirect()->back()->with('success','Page updated successfully!!');
    }
    public function destroy(Page $page){
        $page->delete();
        return redirect()->back()->with('success','Page deleted successfully!!');
    }
}
