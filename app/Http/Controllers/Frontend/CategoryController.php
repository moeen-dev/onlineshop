<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
    	$categories = Category::orderBy('id', 'DESC')->get();
    	return view('frontend.category.index', compact('categories'));
    }

    public function show($slug)
    {
    	$category = Category::where('slug', $slug)->first();
    	return view('frontend.category.show', compact('category'));
    }
}
