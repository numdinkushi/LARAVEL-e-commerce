<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('admin.pendingorders');
    }

    public function completedOrder()
    {
        return view('admin.completedorders');
    }
    

    public function cancelledOrder()
    {
        return view('admin.cancelledOrders');
    }
}
