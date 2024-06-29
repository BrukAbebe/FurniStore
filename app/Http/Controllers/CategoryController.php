<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index')->with('categories', $categories);
    }

    public function create()
    {
        return view('admin.categories.create');
    }

  
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);
    
        $category = new Category([
            'name' => $request->name,
            'description' => $request->description,
        ]);
    
        if ($request->hasFile('image')) {
            $originalFilename = $request->file('image')->getClientOriginalName();
            $imagePath = $request->file('image')->storeAs('categories', $originalFilename, 'public');
            $category->image = $imagePath;
        }
    
        $category->save();
    
        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }
    
    
    

    public function edit(Category $category)
    {
        return view('admin.categories.edit')->with('category', $category);
    }

   
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);
    
        $category = Category::findOrFail($id);
    
        $category->name = $request->name;
        $category->description = $request->description;
    
        if ($request->hasFile('image')) {
            // Delete the old image file if it exists
            if ($category->image && Storage::disk('public')->exists($category->image)) {
                Storage::disk('public')->delete($category->image);
            }
    
            // Store the new image file with its original name
            $originalFilename = $request->file('image')->getClientOriginalName();
            $imagePath = $request->file('image')->storeAs('categories', $originalFilename, 'public');
            $category->image = $imagePath;
        }
    
        $category->save();
    
        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }
    
    

   
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
    
    
        $category->delete();
    
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }

    public function showProducts($id)
       {
            $category = Category::findOrFail($id);
            $products = $category->products; 

             return view('user.pages.products', compact('category', 'products'));
    }

    
}
