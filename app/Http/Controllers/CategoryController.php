<?php

namespace App\Http\Controllers;

use App\Helpers\FileUploader;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function allCategory()
    {
        $categories = Category::all();
        return view('pages.categories.all-categories', compact('categories'));
    }

    public function createView()
    {
        return view('pages.categories.create-category');
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'image' => 'required|image'
        ]);

        try {

            $imagePath = FileUploader::upload($request->file('image'));

            Category::create([
                'name' => $request->input('name'),
                'image' => $imagePath
            ]);

            return redirect()->route('category.all')->with('success', 'Category created successfully.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Failed to create category: ');
        }
    }

    public function updateView(Category $category)
    {
        return view('pages.categories.update-category', compact('category'));
    }

    public function update(Request $request, Category $category)
    {

        $request->validate([
            'name' => 'required|string',
            'image' => 'nullable|image'
        ]);

        $imagePath = $request->hasFile('image') ? FileUploader::upload($request->file('image')) : $category->image;


        $category->update([
            'name' => $request->input('name'),
            'image' => $imagePath
        ]);;

        return redirect()->route('category.all')->with('success', 'Category updated successfully.');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.all')->with('success', 'Category deleted successfully.');
    }
}
