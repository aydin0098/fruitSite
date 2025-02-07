<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return view('admin.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required',
            'meta_title' => 'nullable',
            'meta_description' => 'nullable',
            'meta_keywords' => 'nullable',
        ]);

        Article::query()->create([
            'title' => $request['title'],
            'slug' => Str::slug($request['title'],'-'),
            'author' => 'test',
            'content' => $request['content'],
            'meta_title' => $request['meta_title'],
            'meta_description' => $request['meta_description'],
            'meta_keywords' => $request['meta_keywords'],
            'image' => uploadImage('articles', $request['image'])
        ]);
        session()->flash('success', 'عملیات با موفقیت انجام شد!');
        return redirect()->route('articles.index');
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
        $article = Article::query()->where('id',$id)->first();

        return view('admin.articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'nullable',
            'content' => 'nullable',
            'image' => 'nullable',
            'meta_title' => 'nullable',
            'meta_description' => 'nullable',
            'meta_keywords' => 'nullable',
        ]);
        $article = Article::query()->where('id',$id)->first();

        $article->update([
            'title' => $request['title'],
            'slug' => Str::slug($request['title'],'-'),
            'content' => $request['content'],
            'meta_title' => $request['meta_title'],
            'meta_description' => $request['meta_description'],
            'meta_keywords' => $request['meta_keywords'],
            'image' => $request['image'] ? updateImage('articles', $request['image'],$article['image']) : $article->image,
        ]);
        session()->flash('success', 'عملیات با موفقیت انجام شد!');
        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article = Article::query()->where('id',$id)->first();
        if ($article->image)
        {
            unlink($article->image);
        }

        $article->delete();
        session()->flash('success', 'عملیات حذف با موفقیت انجام شد!');
        return redirect()->route('articles.index');
    }
}
