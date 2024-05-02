<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
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
        $categories = Category::orderBy('id', 'DESC')->get();
        return view('backend.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.category.create');
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
            'slug' => 'required|string|min:3|max:255|unique:categories',
            'image' => 'required|image|min:3|mimes:jpeg,jpg,gif,png,webp|max:2048',
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->slug = $request->slug;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time().'-image-'.$extension;
            $file->move('upload/images/', $filename);
            $category->image = $filename;
        }

        $category->save();

        return redirect()->route('category.index')->with('success', 'New category has been added.');
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
        $category = Category::findOrFail(intval($id));

        return view('backend.category.edit', compact('category'));
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
        $category = Category::findOrFail(intval($id));

        if ($category->slug == $request->slug) {
            $request->validate([
                'name' => 'required|string|min:3|max:255',
                'slug' => 'required|string|min:3|max:255',
                'image' => 'nullable|image|min:3|mimes:jpeg,jpg,gif,png|max:2048',
            ]);
        }else{
            $request->validate([
                'name' => 'required|string|min:3|max:255',
                'slug' => 'required|string|min:3|max:255|unique:categories',
                'image' => 'nullable|image|min:3|mimes:jpeg,jpg,gif,png|max:2048',
            ]);
        }
        
        $category->name = $request->name;
        $category->slug = $request->slug;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time().'-image-'.$extension;
            $file->move('upload/images/', $filename);
            $category->image = $filename;
        }

        $category->save();

        return redirect()->route('category.index')->with('success', 'Category has been Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail(intval($id));

        if ($category->products->count() > 0) {
            return redirect()->route('category.index')->with('error', 'Category can not be deleted.');
        }else{
            $category->delete();
        }

        return redirect()->route('category.index')->with('success', 'Category has been deleted successfully.');

    }
}
