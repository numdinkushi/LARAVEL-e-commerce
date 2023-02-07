<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index()
    {
        $allSubcategories = Subcategory::latest()->get();
  
        return view('admin.allsubcategories', compact('allSubcategories'));
    }

    public function addSubcategory()
    {
        $categories = Category::latest()->get();
        return view('admin.addsubcategory', compact('categories'));
    }

    public function storeSubcategory(Request $request)
    {
        // dd($request);
        $request->validate([
            'subcategory_name' => 'required|unique:subcategories',
            'category_id'=>'required'
        ]);
        $category_id = $request->category_id;

        $category_name = Category::where('id', $category_id)->value('category_name');
        
        Subcategory::insert([
            'subcategory_name' => $request->subcategory_name	,
            'slug' => strtolower(str_replace('', '-', $request->category_name)),
            'category_id'=>$category_id,
            'category_name'=>$category_name,
        ]);

        Category::where('id', $category_id)->increment('subcategory_count', 1);

        return redirect()->route('allSubcategory')->with('message', 'subcategory added succesfuly');

    }

    public function editSubcat($id)
    {        $subcatInfo=Subcategory::FindorFail($id);
        return view('admin.editSubcategory', compact('subcatInfo'));
    }

    public function updateSubcategory(Request $request)
    {        $request->validate([
        'subcategory_name' => 'required|unique:subcategories',
    ]);

    $subcatid=$request->subcatId;
        Subcategory::FindorFail($subcatid)->update([
            'subcategory_name' => $request->subcategory_name,
            'slug' => strtolower(str_replace('', '-', $request->subcategory_name))
        ]);
        return redirect()->route('allSubcategory')->with('message', 'subcategory updated succesfuly');
    }

    public function deleteSubcat($id)
    {
        $catId = Subcategory::where('id', $id)->value('category_id');

        Subcategory::FindorFail($id)->delete();
      
        Category::where('id', $catId)->decrement('subcategory_count', 1);
        
        return redirect()->route('allSubcategory')->with('message', 'Subcategory deleted succesfuly');
    }
}
