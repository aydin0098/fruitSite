<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::first();
        return view('admin.settings.setting',compact('settings'));
    }

    public function update(Request $request)
    {
        $setting = Setting::first();
        if (!$setting) {
            Setting::create([
                'site_name' => $request['site_name'],
                'site_logo' => $request['site_logo'] ? uploadImage('settings', $request['site_logo']) : null,
                'address' => $request['address'],
                'phone' => $request['phone'],
                'work_time' => $request['work_time'],
                'work_day' => $request['work_day'],
                'about_us_text' => $request['about_us_text'],
                'about_us_image' => $request['about_us_image'] ? uploadImage('settings', $request['about_us_image']) : null,
                'contact_us_image' => $request['contact_us_image'] ? uploadImage('settings', $request['contact_us_image']) : null,
                'about_us_banner' => $request['about_us_banner'] ? uploadImage('settings', $request['about_us_banner']) : null,
                'contact_us_banner' => $request['contact_us_banner'] ? uploadImage('settings', $request['contact_us_banner']) : null,
            ]);
        }else{
            $setting->update([
                'site_name' => $request['site_name'],
                'site_logo' => $request['site_logo'] ? updateImage('settings', $request['site_logo'],$setting['site_logo']) : $setting['site_logo'],
                'address' => $request['address'],
                'phone' => $request['phone'],
                'work_time' => $request['work_time'],
                'work_day' => $request['work_day'],
                'about_us_text' => $request['about_us_text'],
                'about_us_image' => $request['about_us_image'] ? updateImage('settings', $request['about_us_image'],$setting['about_us_image']) : $setting['about_us_image'],
                'contact_us_image' => $request['contact_us_image'] ? updateImage('settings', $request['contact_us_image'],$setting['contact_us_image']) : $setting['contact_us_image'],
                'about_us_banner' => $request['about_us_banner'] ? updateImage('settings', $request['about_us_banner'],$setting['about_us_banner']) : $setting['about_us_banner'],
                'contact_us_banner' => $request['contact_us_banner'] ? updateImage('settings', $request['contact_us_banner'],$setting['contact_us_banner']) : $setting['contact_us_banner'],
            ]);
        }

        session()->flash('success', 'عملیات با موفقیت انجام شد!');
        return redirect()->back();


    }
}
