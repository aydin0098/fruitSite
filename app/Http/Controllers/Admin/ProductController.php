<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'nullable',
            'description' => 'required',
            'image' => 'required',
            'category_id' => 'required',
            'meta_title' => 'nullable',
            'meta_description' => 'nullable',
        ]);

        Product::query()->create([
            'title' => $request['title'],
            'slug' => Str::slug($request['title'],'-'),
            'price' => $request['price'],
            'description' => $request['description'],
            'category_id' => $request['category_id'],
            'meta_title' => $request['meta_title'],
            'meta_description' => $request['meta_description'],
            'image' => uploadImage('products', $request['image'])
        ]);
        session()->flash('success', 'عملیات با موفقیت انجام شد!');
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::query()->where('id',$id)->first();
        $categories = Category::all();

        return view('admin.products.edit', compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'nullable',
            'price' => 'nullable',
            'description' => 'nullable',
            'image' => 'nullable',
            'category_id' => 'nullable',
            'meta_title' => 'nullable',
            'meta_description' => 'nullable',
        ]);
        $product = Product::query()->where('id',$id)->first();

        $product->update([
            'title' => $request['title'],
            'slug' => Str::slug($request['title'],'-'),
            'price' => $request['price'],
            'description' => $request['description'],
            'category_id' => $request['category_id'],
            'meta_title' => $request['meta_title'],
            'meta_description' => $request['meta_description'],
            'image' => $request['image'] ? uploadImage('products', $request['image']) : $product->image,
        ]);
        session()->flash('success', 'عملیات با موفقیت انجام شد!');
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::query()->where('id',$id)->first();
        if ($product->image)
        {
            unlink($product->image);
        }

        $product->delete();
        session()->flash('success', 'عملیات حذف با موفقیت انجام شد!');
        return redirect()->route('products.index');
    }
}
