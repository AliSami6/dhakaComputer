<?php

namespace App\Http\Controllers\Backend;

use App\Models\Counter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CounterUp\CreateRequest;

class CounterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $counter = Counter::latest('id')->get();
        return view('backend.pages.counter.index',compact('counter'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.counter.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
        Counter::create([
            'count_number' => $request->count_number,
            'count_title' => $request->count_title,
            'count_color' => $request->count_color
        ]);
        return redirect()->route('counter.index')->with('success', 'Successfully Created !');
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
        $counter = Counter::find($id);
        return view('backend.pages.counter.edit',compact('counter'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $counter = Counter::find($id);
        $counter->update([
            'count_number' => $request->count_number,
            'count_title' => $request->count_title,
            'count_color' => $request->count_color
        ]);
        return redirect()->route('counter.index')->with('success', 'Successfully Updated !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $counter = Counter::find($id);
        $counter->delete();
        return redirect()->route('counter.index')->with('success', 'Successfully deleted!');
    }
}