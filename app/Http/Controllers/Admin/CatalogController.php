<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Catalog;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $catalogs = Catalog::all();
        return view('admin.catalog.index',['catalogs'=>$catalogs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'nullable',
            'file' => 'required',
        ]);

        Catalog::query()->create([
            'name' => $request['name'],
            'file' =>uploadImage('catalogs',$request['file']),
        ]);

        session()->flash('success', 'عملیات با موفقیت انجام شد!');
        return redirect()->route('catalogs.index');
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
        $catalog = Catalog::find($id);
        $catalogs = Catalog::all();
        return view('admin.catalog.edit',['catalog'=>$catalog,'catalogs'=>$catalogs]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $catalog = Catalog::find($id);
        $request->validate([
            'name' => 'nullable',
            'file' => 'required',
        ]);

       $catalog->update([
            'name' => $request['name'],
            'file' =>$request->file ? uploadImage('catalogs',$request['file']) : $catalog->file,
        ]);

        session()->flash('success', 'عملیات با موفقیت انجام شد!');
        return redirect()->route('catalogs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $catalog = Catalog::find($id);
        if ($catalog->file) {
            unlink($catalog->file);
        }

        $catalog->delete();
        session()->flash('success', 'عملیات با موفقیت انجام شد!');
        return redirect()->route('catalogs.index');
    }
}
