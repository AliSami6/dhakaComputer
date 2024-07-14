<?php

namespace App\Http\Controllers\Backend;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Slider\CreateRequest;

class SliderController extends Controller
{
   
   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $slider = Slider::first();
        return view('backend.pages.slider.create',compact('slider'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
        $slider = Slider::first();
    
        if ($request->hasFile('slider_image')) {
              $image = $this->image_updated($request->file('slider_image'), 'uploaded_files/slider/', $slider->slider_image);
        } 
        else {
            $image = $slider->slider_image;
        }
        if (!empty($request->file('background_image'))) {
           $background_image = $this->image_updated($request->file('background_image'), 'uploaded_files/slider/background/',$slider->background_image);
        } 
        else {
            $background_image = $slider->background_image;
        }
     
        $slider->update([
            'slider_image' => $image,
            'background_image' =>   $background_image,
            'hero_title' =>$request->hero_title,
            'hero_subtitle' => $request->hero_subtitle,
            'hero_content' => $request->hero_content,
            'button_text' =>  $request->button_text,
            'button_url' => $request->button_url
        ]);
       
             return redirect()->back()->with('success','Slider Updated !'); 
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