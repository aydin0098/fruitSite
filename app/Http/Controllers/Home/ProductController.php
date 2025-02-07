<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        $setting = Setting::query()->first();
        $related_products = Product::query()->where('category_id', $product->category_id)->get();
        return view('home.product',[
            'product' => $product,
            'setting' => $setting,
            'related_products' => $related_products,
        ]);
    }

    public function productCategory($slug)
    {
       $category = Category::query()->firstWhere('slug',$slug);
       $categories = Category::all();
       $products = $category->products;
       $setting = Setting::query()->first();
       return view('home.category',['category' => $category,
           'setting' => $setting,
           'categories' => $categories,'products' => $products]);
    }

    public function products()
    {
        $products = Product::query()->orderByDesc('created_at')->get();
        $categories = Category::all();
        $setting = Setting::query()->first();
        return view('home.shop',['categories' => $categories,
            'setting' => $setting,
            'products' => $products]);


    }
}
