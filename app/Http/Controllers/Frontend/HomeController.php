<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	$categories = Category::orderBy('id', 'DESC')->get();
    	$products = Product::orderBy('id', 'DESC')->get();
    	return view('frontend.home.index', compact('categories', 'products'));
    }
}
