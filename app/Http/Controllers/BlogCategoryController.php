<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BlogCategoryController extends Controller
{
    public function index()
    {
        $categories = BlogCategory::latest()->paginate(10);
        return view('blog_categories.index', compact('categories'));
    }

    public function create()
    {
        return view('blog_categories.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_title' => 'required|max:255',
            'slug' => 'required|unique:blog_categories',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        BlogCategory::create($request->all());

        return redirect()->route('blog-categories.index')->with('success', 'Category created successfully.');
    }

    public function edit(BlogCategory $category)
    {
        return view('blog_categories.edit', compact('category'));
    }

    public function update(Request $request, BlogCategory $category)
    {
        $validator = Validator::make($request->all(), [
            'category_title' => 'required|max:255',
            'slug' => 'required|unique:blog_categories,slug,' . $category->id,
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $category->update($request->all());

        return redirect()->route('blog-categories.index')->with('success', 'Category updated successfully.');
    }

    public function destroy(BlogCategory $category)
    {
        $category->delete();

        return redirect()->route('blog-categories.index')->with('success', 'Category deleted successfully.');
    }
    public function show(BlogCategory $category)
    {
        return view('blog_categories.show', compact('category'));
    }
}
