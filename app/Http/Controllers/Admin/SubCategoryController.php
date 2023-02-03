<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index()
    {
        return view('admin.allsubcategories');
    }

    public function addSubcategory()
    {
        return view('admin.addsubcategory');
    }
}
