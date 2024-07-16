<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\Backend\Category\CreateRequest;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::with('subcategories')->get();
        return view('backend.pages.courses.categories.category-list', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'category_name' => 'required|string|min:2|max:100',
            'description' => 'required|string|min:2|max:100',
            'cat_icon' => 'required|image|mimes:jpeg,png,jpg,gif|max:1024',
            'subcategory_name' => 'required|array',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->all(),
            ]);
        }
        if (!empty($request->file('cat_icon'))) {
            $image = $this->image_upload($request->file('cat_icon'), 'uploaded_files/category/', 90, 80);
        } else {
            return response()->json(['error' => 'Image is required']);
        }
        $cat = Category::create([
            'category_name' => $request->category_name,
            'description' => $request->description,
            'cat_icon' => $image,
        ]);
        if (!empty($request->input('subcategory_name'))) {
            foreach ($request->input('subcategory_name') as $subcategory_name) {
                SubCategory::create([
                    'category_id' => $cat->id,
                    'subcategory_name' => $subcategory_name,
                ]);
            }
        }
        if ($cat) {
            return response()->json(['status' => 'success', 'message' => 'Successfully created']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Something went wrong!']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        $categories = Category::findOrFail($id);
        return response()->json(['categories' => $categories]);
    }

    public function deleteSubCategory($id)
    {
        $subcategory = SubCategory::where('category_id', $id);
        $category = Category::findOrFail($id);
        // Remove associated image file
        $this->imageDelete('uploaded_files/category/' . $category->cat_icon);

        $category->delete();
        $subcategory->delete();
        return redirect()->back()->with('success', 'SubCategory has been deleted!');
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_name' => 'string|min:2|max:100',
            'description' => 'string|min:2|max:100',
            'cat_icon' => 'image|mimes:jpeg,png,jpg,gif|max:1024',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->all(),
            ]);
        }

        $id = $request->category_id;
        $category = Category::findOrFail($id);

        if (!$category) {
            return response()->json([
                'status' => 'error',
                'message' => 'Category not found',
            ]);
        }

        if ($request->hasFile('cat_icon')) {
            $image = $this->image_updated($request->file('cat_icon'), 'uploaded_files/category/', $category->cat_icon);
        } else {
            $image = $category->cat_icon;
        }

        $category->update([
            'category_name' => $request->category_name,
            'description' => $request->description,
            'cat_icon' => $image,
        ]);
        if ($category) {
            return response()->json(['status' => 'success', 'message' => 'Successfully updated']);
        } else {
            return response()->json(['status' => 'success', 'message' => 'An error occured']);
        }
    }
    public function SubCategoryList()
    {
        // Fetch all categories with their subcategories
        $categories = Category::with('subcategories')->latest('id')->get();

        // Optionally, if you need all subcategories separately
        $subcategories = SubCategory::whereIn('category_id', $categories->pluck('id'))->get();

        return view('backend.pages.courses.subcategories.index', compact('categories', 'subcategories'));
    }
    public function editSbcategory($id)
    {
        $category = Category::findOrFail($id);
        $subcategories = SubCategory::where('category_id', $id)->get();

        return view('backend.pages.courses.subcategories.edit', compact('subcategories', 'category'));
    }

    public function SubcatUpdate(Request $request)
    {
        foreach ($request->id as $index => $subcategoryId) {
            SubCategory::where('id', $subcategoryId)->update([
                'subcategory_name' => $request->subcategory_name[$index],
            ]);
        }

        return redirect()->back()->with('success', 'Subcategories have been updated!');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        // Remove associated image file
        $this->imageDelete('uploaded_files/category/' . $category->cat_icon);
        $category->subcategories()->delete();
        // Delete the category record
        $category->delete();
        return redirect()->back()->with('success', 'Category has been deleted!');
    }
}