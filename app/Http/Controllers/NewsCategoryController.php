<?php

namespace App\Http\Controllers;

use App\Models\NewsCategory;
use Illuminate\Http\Request;

class NewsCategoryController extends Controller
{
    public function index()
    {
        $categories = NewsCategory::all(); // Fetch all categories from the database
        return view('news-categories.index', compact('categories'));
    }

    public function create()
    {
        return view('news-categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:news_categories',
        ]);

        NewsCategory::create($request->all());
        return redirect()->route('news-categories.index')->with('success', 'News category created successfully.');
    }

    public function edit(NewsCategory $newsCategory)
    {
        return view('news-categories.edit', compact('newsCategory'));
    }

    public function update(Request $request, NewsCategory $newsCategory)
    {
        $request->validate([
            'category_title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:news_categories,slug,' . $newsCategory->id,
        ]);

        $newsCategory->update($request->all());
        return redirect()->route('news-categories.index')->with('success', 'News category updated successfully.');
    }

    public function destroy(NewsCategory $newsCategory)
    {
        $newsCategory->delete();
        return redirect()->route('news-categories.index')->with('success', 'News category deleted successfully.');
    }
}