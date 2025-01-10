<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.slider.index',[
            'sliders' => $sliders
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'meta_title' => 'nullable',
            'meta_description' => 'nullable',
        ]);
        $slider = Slider::create([
            'title' => $request['title'],
            'image' => uploadImage('sliders',$request['image']),
            'meta_title' => $request['meta_title'],
            'meta_description' => $request['meta_description'],
        ]);

        session()->flash('success', 'عملیات با موفقیت انجام شد!');

//        return response()->json(['success' => 'اسلایدر با موفقیت اضافه شد!']);

        return redirect()->route('sliders.index');


    }

    public function destroy(string $id)
    {
        $slider = Slider::where('id',$id)->first();
        if ($slider->image) {
            unlink($slider->image);
        }
        $slider->delete();
        session()->flash('success', 'عملیات حذف با موفقیت انجام شد!');
        return redirect()->route('sliders.index');
    }
}
