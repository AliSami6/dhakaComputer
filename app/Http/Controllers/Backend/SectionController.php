<?php

namespace App\Http\Controllers\Backend;

use App\Models\Lession;
use App\Models\Section;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class SectionController extends Controller
{
    public function SectionSave(Request $request)
    {
        $validator = Validator::make($request->only('section_title'), [
            'section_title' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $section = Section::create([
            'course_id' => $request->course_id,
            'section_title' => $request->section_title,
        ]);
        if ($section) {
            return response()->json(['status' => 'success', 'message' => 'Successfully created']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Something went wrong!']);
        }
    }
    public function sectionEdit(Request $request)
    {
       // dd($request);
        $id = $request->section_id; // Changed to 'section_id'
       // dd($id);
        $sectionEdit = Section::findOrFail($id);
        return response()->json($sectionEdit);
    }

    public function updateSection(Request $request)
    {
        $id = $request->section_id;
        $section = Section::findOrFail($id);
        $section->update([
            'section_title' => $request->section_title,
        ]);

        return response()->json(['status' => 'success', 'message' => 'Successfully updated']);
    }
    public function sectionDelete($id){
        $section = Section::find($id);
        Lession::where('section_id',$section->id)->delete();
        if (!$section) {
            return response()->json(['status' => 'error', 'message' => 'Section not found'], 404);
        }
        $section->delete();
        return response()->json(['status' => 'success', 'message' => 'Section deleted successfully']);
    
    }
}