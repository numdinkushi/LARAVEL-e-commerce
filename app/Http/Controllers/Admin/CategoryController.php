<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->get();
        return view('admin.allcategories', compact('categories'));
    }

    public function addCategory()
    {
        return view('admin.addcategory',);
    }

    public function storeCategory(Request $request)
    {
        $request->validate([
            'category_name' => 'required|unique:categories'
        ]);

        Category::insert([
            'category_name' => $request->category_name,
            'slug' => strtolower(str_replace('', '-', $request->category_name))
        ]);
        return redirect()->route('allCategory')->with('message', 'Category added succesfuly');
    }

    public function editCategory($id)
    {
        $categoryInfo=Category::FindorFail($id);
        return view('admin.editCategory', compact('categoryInfo'));
    }

    public function updateCategory(Request $request)
    {
        $category_id = $request->category_id;
        $request->validate([
            'category_name' => 'required|unique:categories'
        ]);
        Category::FindorFail($category_id)->update([
            'category_name' => $request->category_name,
            'slug' => strtolower(str_replace('', '-', $request->category_name))
        ]);

        return redirect()->route('allCategory')->with('message', 'Category updated succesfuly');
    }

    public function deleteCategory($id)
    {
        Category::FindorFail($id)->delete();
      
        return redirect()->route('allCategory')->with('message', 'Category deleted succesfuly');
    }
}
