<?php

namespace App\Http\Controllers\Backend;

use App\Models\Course;
use App\Models\LiveClass;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LiveClass\CreateRequest;

class LiveClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $liveClass = LiveClass::with('livecourses')->latest('id')->get();
        return view('backend.pages.live_class.index',['liveClass'=>$liveClass]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = Course::where('course_status','Active')->get();
        return view('backend.pages.live_class.create',['courses'=>$courses]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
        LiveClass::create([
            'course_id'=>$request->course_id,
            'class_date'=>$request->class_date,
            'start_time'=>$request->start_time,
            'end_time'=>$request->end_time,
            'metting_link'=>$request->metting_link,
            'class_rutine'=>$request->class_rutine,
            'metting_platform'=>$request->metting_platform
        ]);
        return redirect()->route('live.index')->with('success', 'Successfully Created !');
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
        $liveClass = LiveClass::find($id);
        $courses = Course::where('course_status','Active')->get();
        return view('backend.pages.live_class.edit',['liveClass'=>$liveClass,'courses'=>$courses]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $liveClass = LiveClass::find($id);
        $liveClass->update([
            'course_id'=>$request->course_id,
            'class_date'=>$request->class_date,
            'start_time'=>$request->start_time,
            'end_time'=>$request->end_time,
            'metting_link'=>$request->metting_link,
            'class_rutine'=>$request->class_rutine,
            'metting_platform'=>$request->metting_platform
        ]);
        return redirect()->route('live.index')->with('success', 'Successfully Updated !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $liveClass = LiveClass::find($id);
        $liveClass->delete();
        return redirect()->route('live.index')->with('success', 'Successfully Deleted !');
    }
}
