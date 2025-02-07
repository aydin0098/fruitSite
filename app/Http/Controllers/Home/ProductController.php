<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        $related_products = Product::query()->where('category_id', $product->category_id)->get();
        return view('home.product',[
            'product' => $product,
            'related_products' => $related_products,
        ]);
    }

    public function productCategory($slug)
    {
       $category = Category::query()->firstWhere('slug',$slug);
       $categories = Category::all();
       $products = $category->products;
       return view('home.category',['category' => $category,'categories' => $categories,'products' => $products]);
    }

    public function products()
    {
        $products = Product::query()->orderByDesc('created_at')->get();
        $categories = Category::all();
        return view('home.shop',['categories' => $categories,'products' => $products]);


    }
}
