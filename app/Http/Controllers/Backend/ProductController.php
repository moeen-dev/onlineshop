<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
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

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id', 'DESC')->get();
        return view('backend.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name', 'ASC')->get();
        return view('backend.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:255',
            'slug' => 'required|string|min:3|max:255|unique:products',
            'image' => 'required|image|min:3|mimes:jpeg,jpg,gif,png|max:2048',
            'price' => 'required',
            'actual_price' => 'required',
            'category_id' => 'required',
            'description' => 'required',
        ]);

        $input = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time().'-image-'.$extension;
            $file->move('upload/images/', $filename);
            $input['image'] = $filename;
        }

        Product::create($input);

        return redirect()->route('product.index')->with('success', 'New Product has been added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::orderBy('name', 'ASC')->get();

        $product = Product::findOrFail(intval($id));
        return view('backend.product.edit', compact('categories', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        if ($product->slug == $request->slug) {
            $request->validate([
                'name' => 'required|string|min:3|max:255',
                'slug' => 'required|string|min:3|max:255',
                'image' => 'nullable|image|min:3|mimes:jpeg,jpg,gif,png|max:2048',
                'price' => 'required',
                'actual_price' => 'required',
                'category_id' => 'required',
                'description' => 'required',
            ]);
        }else{
            $request->validate([
                'name' => 'required|string|min:3|max:255',
                'slug' => 'required|string|min:3|max:255|unique:products',
                'image' => 'nullable|image|min:3|mimes:jpeg,jpg,gif,png|max:2048',
                'price' => 'required',
                'actual_price' => 'required',
                'category_id' => 'required',
                'description' => 'required',
            ]);
        }

        $input = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time().'-image-'.$extension;
            $file->move('upload/images/', $filename);
            $input['image'] = $filename;
        }

        $product->update($input);

        return redirect()->route('product.index')->with('success', 'Product has been Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail(intval($id));

        $product->delete();

        return redirect()->route('product.index')->with('success', 'Product has been deleted successfully.');
    }
}
