<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        return view('admin.allproducts');
    }

    public function addProduct()
    {
        $categories = Category::latest()->get();
        $subcategories=Subcategory::latest()->get();
        return view('admin.addproduct', compact('categories', 'subcategories'));
    }
    public function storeProduct(Request $request)
    {
        $request->validate([
            'product_name' => 'required|unique:products',
            'price' => 'required',
            'quantity' => 'required',
            'product_short_des' => 'required',
            'product_long_des' => 'required',
            'product_category_id' => 'required',
            'product_subcategory_id' => 'required',
            // 'category_name' => 'required|unique:categories',
            'product_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('product_image');
        $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $request->product_image->move(public_path('upload'),$image_name);
        $image_url='upload/' . $image_name;

        $category_id = $request->product_category_id;
        $subcategory_id = $request->product_subcategory_id;

        $category_name=Category::where('id', $category_id)->value('category_name');
        $subcategory_name=Subcategory::where('id', $subcategory_id)->value('subcategory_name');

        Product::insert([
            'product_name' => $request->product_name,
            'product_short_des' => $request->product_short_des,
            'product_long_des' => $request->product_long_des,
            'price' => $request->price,
            'product_category_name' => $category_name,
            'product_subcategory_name' => $subcategory_name,
            // 'subcategory_name' => $subcategory_name,
            'product_category_id' => $request->product_category_id,
            'product_subcategory_id' => $request->product_subcategory_id,
            'product_image'=>$image_url,
            'quantity'=>$request->quantity,
            'slug' => strtolower(str_replace('', '-', $request->product_name))   
        ]);

        Category::where('id', $category_id)->increment('product_count', 1);
        Subcategory::where('id', $subcategory_id)->increment('product_count', 1);

        return redirect()->route('allProduct')->with('message', 'Product added succesfuly');
    }
}
