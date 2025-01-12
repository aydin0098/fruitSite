<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Slider;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $categories = Category::all();
        return view('home.index',[
            'sliders' => $sliders,
            'categories' => $categories
        ]);

    }
}
