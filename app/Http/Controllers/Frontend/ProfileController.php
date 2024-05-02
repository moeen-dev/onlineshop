<?php

namespace App\Http\Controllers\Frontend;

use Auth;
use App\Models\User;
use App\Models\Order;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
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


    public function index()
    {
    	return view('frontend.profile.index');
    }

    public function address()
    {
        return view('frontend.profile.address');
    }

    public function addAddress(Request $request)
    {
        $user = User::where('id', Auth::user()->id)->first();

        $user->shipping_address = $request->shipping_address;
        $user->billing_address = $request->billing_address;

        $user->save();

        return redirect()->route('user.profile');

    }

    public function order()
    {
        $orders = Order::where('user_id', Auth::user()->id)->get();
        return view('frontend.profile.order', compact('orders'));   
    }
}
