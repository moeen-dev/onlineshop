<?php

namespace App\Http\Controllers\Backend;

use Auth;
use App\Models\Order;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function show($id)
    {
    	$notification = Auth::user()->notifications->where('id', $id)->first();

    	if ($notification) {
            $notification->markAsRead();
            $order = Order::where('id', $notification->data['data']['order_id'])->first();
            return redirect()->route('admin.order.show', $order->id);
        }else{
          return back();
      }
  }
}
