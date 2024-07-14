<?php

namespace App\Http\Controllers\Backend;

use App\Models\Choose;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Choose\CreateRequest;

class WhyChooseController extends Controller
{
    
   
    public function create()
    {
        $chooseus = Choose::first();
        return view('backend.pages.why-choose-us.create',compact('chooseus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
       $chooseus = Choose::first();
      
        if ($request->hasFile('choose_image')) {
          $image = $this->image_updated($request->file('choose_image'), 'uploaded_files/choose/',$chooseus->choose_image);
        } 
        else {
            $image = $chooseus->choose_image;
        }
    
        $chooseus->update([
            'choose_image' => $image,
            'choose_years' =>$request->choose_years,
            'choose_title' => $request->choose_title,
            'choose_subtitle' => $request->choose_subtitle,
            'short_description' => $request->short_description,
            'content_one' => $request->content_one,
            'content_two' => $request->content_two,
            'content_three' => $request->content_three,
            'button_text' =>  $request->button_text,
            'button_url' => $request->button_url
        ]);
       
        return redirect()->back()->with('success','Choose us Updated !'); 
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