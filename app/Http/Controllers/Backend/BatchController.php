<?php

namespace App\Http\Controllers\Backend;

use App\Models\Batch;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Batch\CreateRequest;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $batch = Batch::latest('id')->get();
        return view('backend.pages.courses.batch.index',compact('batch'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = Course::get();
        return view('backend.pages.courses.batch.create',compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
        Batch::create([
            'course_id'=>$request->course_id,
            'batch_no'=>$request->batch_no,
            'batch_code'=>$request->batch_code,
            'class_type'=>$request->class_type,
            'class_start'=>$request->class_start,
            'class_rutine'=>$request->class_rutine,
            'class_time'=>$request->class_time,
            'total_class'=>$request->total_class,
            'total_seat'=>$request->total_seat
        ]);
        return redirect()->route('batch.list')->with('success', 'Successfully Created !');
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
    public function edit( $id)
    {
        $batch = Batch::find($id);
        $courses = Course::get();
        return view('backend.pages.courses.batch.edit',compact('batch','courses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $batch = Batch::find($id);
        $batch->update([
            'course_id'=>$request->course_id,
            'batch_no'=>$request->batch_no,
            'batch_code'=>$request->batch_code,
            'class_type'=>$request->class_type,
            'class_start'=>$request->class_start,
            'class_rutine'=>$request->class_rutine,
            'class_time'=>$request->class_time,
            'total_class'=>$request->total_class,
            'total_seat'=>$request->total_seat
        ]);
        return redirect()->route('batch.list')->with('success', 'Successfully Updated !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $batch = Batch::find($id);
        $batch->delete();
        return redirect()->route('batch.list')->with('success', 'Successfully Deleted !');
    }
}
