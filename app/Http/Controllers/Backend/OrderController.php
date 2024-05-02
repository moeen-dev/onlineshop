<?php

namespace App\Http\Controllers\Backend;

use App\Models\Order;
use App\Models\Status;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
    	$orders = Order::orderBy('id', 'DESC')->get();
    	return view('backend.order.index', compact('orders'));
    }

    public function show($id)
    {
    	$order = Order::findorFail(intval($id));
    	$statuses = Status::all();
    	return view('backend.order.show', compact('order', 'statuses'));
    }
}
