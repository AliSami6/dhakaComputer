<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Lession;
use Illuminate\Support\Facades\Validator;

class LessionController extends Controller
{
    public function LessionSave(Request $request)
    {
        // dd($request->video_url);
        $validator = Validator::make($request->all(), [
            'lession_title' => 'required|string|max:255',
            'section_id' => 'required|integer|exists:sections,id',
            'summary' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->all(),
            ]);
        }

        // Prepare data for insertion
        $data = $request->only(['select_lession_type', 'lession_title', 'section_id', 'summary', 'document_type', 'video_url', 'duration', 'description', 'is_free_lession']);

        if ($request->hasFile('attachment')) {
            $file = $request->file('attachment');

            // Generate a unique file name
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            // Get the file type and size
            $type = $file->getClientMimeType();
            $size = $file->getSize();
            // Move the file to the public directory
            $file->move(public_path('uploaded_files/attachments'), $fileName);

            // Store the file path in the data array
            $data['attachment'] = $fileName;
        }

        if ($request->hasFile('image')) {
            $data['image'] = $this->image_upload($request->file('image'), 'uploaded_files/video_images/', 90, 80);
        }

        if ($request->hasFile('video_resource')) {
            $file = $request->file('video_resource');
            $videoFile = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploaded_files/videos'), $videoFile);
            $data['video_resource'] = $videoFile;
        }

        // Create the lesson
        $lesson = Lession::create($data);

        if ($lesson) {
            return response()->json(['status' => 'success', 'message' => 'Successfully created']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Something went wrong!']);
        }
    }
    public function EditLesson(Request $request)
    {
        $id = $request->id;
        $lessons = Lession::findOrFail($id);
        return response()->json(['lessons' => $lessons]);
    }

    public function updateLesson(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'lesson_id' => 'required|integer|exists:lessions,id',
            'lession_title' => 'string|max:255',
            'section_id' => 'required|integer|exists:sections,id',
            'document_type' => 'nullable|string|in:Pdf,Text,document',
            'attachment' => 'nullable|file|mimes:pdf,doc,docx,txt|max:10240', // 10 MB max
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:1024', // 1 MB max
            'video_url' => 'nullable|url',
            'video_resource' => 'nullable|file|mimetypes:video/mp4,video/wmv,video/mov|max:100040', // 100 MB max
            'is_free_lesson' => 'nullable|boolean',
            'summary' => 'required', // Ensure summary is validated
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->all(),
            ]);
        }

        $id = $request->lesson_id;
        $lesson = Lession::findOrFail($id);

        $data = $request->only(['lession_title', 'section_id', 'summary', 'document_type', 'video_url', 'duration', 'description', 'is_free_lesson']);

        if ($request->hasFile('attachment')) {
            $file = $request->file('attachment');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploaded_files/attachments'), $fileName);
            $data['attachment'] = $fileName;
        }

        if ($request->hasFile('image')) {
            $data['image'] = $this->image_updated($request->file('image'), 'uploaded_files/video_images/', $lesson->image);
        }

        if ($request->hasFile('video_resource')) {
            $file = $request->file('video_resource');
            $videoFile = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploaded_files/videos'), $videoFile);
            $data['video_resource'] = $videoFile;
        }

        $lesson->update($data);

        if ($lesson) {
            return response()->json(['status' => 'success', 'message' => 'Successfully updated']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Something went wrong!']);
        }
    }

    public function LessonDelete($id)
    {
        $lesson = Lession::findOrFail($id);

        if ($lesson) {
            $lesson->delete();
            return response()->json(['status' => 'success', 'message' => 'Lesson has been deleted!']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Lesson not found!'], 404);
        }
    }
}
