<?php

namespace App\Http\Controllers\Backend;

use App\Models\Training;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Content\CreateRequest;

class LiveCourseContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $training = Training::latest('id')->get();
        return view('backend.pages.live_course_content.index',compact('training'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.live_course_content.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
        if (!empty($request->file('train_image'))) {
            $image = $this->image_upload($request->file('train_image'), 'uploaded_files/training/', 90, 80);
        } else {
            return redirect()->back()->with('error', 'Image is required!');
        }
        Training::create([
            'train_image' =>  $image,
            'train_title' => $request->train_title,
            'train_description' => $request->train_description
        ]);
        return redirect()->route('content.index')->with('success', 'Live Content Created !');
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
        $training = Training::find($id);
        return view('backend.pages.live_course_content.edit',compact('training'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $training = Training::find($id);
        if (!empty($request->file('train_image'))) {
            $image = $this->image_updated($request->file('train_image'), 'uploaded_files/training/', $training->train_image);
        } else {
            $image = $training->train_image;
        }
        $training->update([
          'train_image' =>  $image,
          'train_title' => $request->train_title,
          'train_description' => $request->train_description
        ]);
        return redirect()->route('content.index')->with('success', 'Content Updated !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $training = Training::find($id);
        $this->imageDelete('uploaded_files/training/'.$training->train_image);
        $training->delete();
        return redirect()->route('content.index')->with('success', 'Content has been deleted!');
    }
}