<?php

namespace App\Http\Controllers\Frontend;

use Auth;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Notification;
use App\Notifications\OrderNotification;

class OrderController extends Controller
{

	/**
     * Create a new controller instance.
     *
     * @return void
     */
	public function __construct()
	{
		$this->middleware('auth');
	}


	public function index($slug)
	{
		if (Auth::user()->shipping_address == null || Auth::user()->billing_address == null ) {
			return redirect()->route('address');
		}else{
			$product = Product::where('slug', $slug)->firstOrFail();
			return view('frontend.order.index', compact('product'));
		}

		
	}

	public function order(Request $request)
	{
		$order = Order::create($request->all());

		$users = User::where('is_admin', 1)->get();

		$data = [
			'user_id' => Auth::user()->id,
			'product_id' => $request->product_id,
			'order_id' => $order->id,
		];

		foreach ($users as $user) {
			Notification::send($user, new OrderNotification($data));
		}

		return redirect()->route('order.confirm');
	}

	public function confirm()
	{
		return view('frontend.order.confirm');
	}

}
