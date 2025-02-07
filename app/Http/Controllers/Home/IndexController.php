<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Catalog;
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
        $articles = Article::query()->latest()->take(6)->get();
        return view('home.index',[
            'sliders' => $sliders,
            'categories' => $categories,
            'products' => $products,
            'setting' => $setting,
            'articles' => $articles,
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

    public function catalogs()
    {
        $setting = Setting::query()->first();
        $catalogs = Catalog::all();
        return view('home.catalogs',[
            'catalogs' => $catalogs,
            'setting' => $setting
        ]);

    }

    public function articles()
    {
        $setting = Setting::query()->first();
        $articles = Article::all();
        return view('home.articles',[
            'articles' => $articles,
            'setting' => $setting
        ]);

    }

    public function article($slug)
    {
        $article = Article::query()->where('slug', $slug)->firstOrFail();
        $setting = Setting::query()->first();
        return view('home.article',['article' => $article,'setting' => $setting]);

    }
}
