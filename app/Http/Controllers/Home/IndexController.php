<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Slider;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $categories = Category::all();
        $products = Product::latest()->take(6)->get();
        $setting = Setting::query()->first();
        return view('home.index',[
            'sliders' => $sliders,
            'categories' => $categories,
            'products' => $products,
            'setting' => $setting
        ]);

    }

    public function aboutUs()
    {
        $setting = Setting::query()->first();
        return view('home.about-us',compact('setting'));
    }

    public function contactUs()
    {
        $setting = Setting::query()->first();
        return view('home.contact-us',compact('setting'));
    }
}
