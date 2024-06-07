<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('news.index', compact('news'));
    }

    public function create()
    {
        $categories = NewsCategory::all();
        return view('news.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'blog_title' => 'required|string|max:255',
            'category_id' => 'required|exists:news_categories,id',
            'blog_slug' => 'required|string|max:255|unique:news',
            'description' => 'required',
            'main_image' => 'required|image',
            'video_url' => 'nullable|url',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'author_id' => 'required|exists:users,id',
            'tags' => 'nullable|string',
        ]);

        News::create($request->all());
        return redirect()->route('news.index')->with('success', 'News created successfully.');
    }

    public function edit(News $news)
    {
        $categories = NewsCategory::all();
        return view('news.edit', compact('news', 'categories'));
    }

    public function update(Request $request, News $news)
    {
        $request->validate([
            'blog_title' => 'required|string|max:255',
            'category_id' => 'required|exists:news_categories,id',
            'blog_slug' => 'required|string|max:255|unique:news,blog_slug,' . $news->id,
            'description' => 'required',
            'main_image' => 'nullable|image',
            'video_url' => 'nullable|url',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'author_id' => 'required|exists:users,id',
            'tags' => 'nullable|string',
        ]);

        $news->update($request->all());
        return redirect()->route('news.index')->with('success', 'News updated successfully.');
    }

    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->route('news.index')->with('success', 'News deleted successfully.');
    }
}