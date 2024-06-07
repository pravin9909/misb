<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage; // Import the Storage facade

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);
        return view('blogs.index', compact('blogs'));
    }

    public function create()
    {
        $categories = BlogCategory::pluck('category_title', 'id');
        $authors = User::all(); // Fetch all users as authors

        return view('blogs.create', compact('categories', 'authors'));
    }

    public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'blog_title' => 'required|max:255',
        'category_id' => 'required|exists:blog_categories,id',
        'blog_slug' => 'required|unique:blogs',
        'description' => 'required',
        'main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'video_url' => 'nullable|url',
        'meta_title' => 'nullable|max:255',
        'meta_description' => 'nullable|max:255',
        'author_id' => 'nullable|exists:users,id',
        'tags' => 'nullable|array',
        'tags.*' => 'nullable|string|max:255',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $blog = new Blog();
    $blog->blog_title = $request->input('blog_title');
    $blog->category_id = $request->input('category_id');
    $blog->blog_slug = $request->input('blog_slug');
    $blog->description = $request->input('description');
    $blog->video_url = $request->input('video_url');
    $blog->meta_title = $request->input('meta_title');
    $blog->meta_description = $request->input('meta_description');
    $blog->author_id = $request->input('author_id');

    // Handle file upload if provided
    if ($request->hasFile('main_image')) {
        $imagePath = $request->file('main_image')->store('public/images'); // Store image in storage/app/public/images directory
        $blog->main_image = str_replace('public/', '', $imagePath); // Save path relative to storage/app/public/
    }

    $blog->save();

    // Sync tags if provided
    if ($request->has('tags')) {
        $blog->tags()->sync($request->tags);
    }

    return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
}

    public function edit(Blog $blog)
    {
        $categories = BlogCategory::pluck('category_title', 'id');
        $authors = User::all();
        return view('blogs.edit', compact('blog', 'categories', 'authors'));
    }

    public function update(Request $request, Blog $blog)
{
    $validator = Validator::make($request->all(), [
        'blog_title' => 'required|max:255',
        'category_id' => 'required|exists:blog_categories,id',
        'blog_slug' => 'required|unique:blogs,blog_slug,' . $blog->id,
        'description' => 'required',
        'main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'video_url' => 'nullable|url',
        'meta_title' => 'nullable|max:255',
        'meta_description' => 'nullable|max:255',
        'author_id' => 'nullable|exists:users,id',
        'tags' => 'nullable|array',
        'tags.*' => 'nullable|string|max:255',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Handle file upload if provided
    if ($request->hasFile('main_image')) {
        // Delete old image if exists
        if ($blog->main_image) {
            Storage::delete('public/' . $blog->main_image);
        }

        // Store new image
        $imagePath = $request->file('main_image')->store('public/images');
        $blog->main_image = str_replace('public/', '', $imagePath);
    }

    // Update blog data
    $blog->update([
        'blog_title' => $request->blog_title,
        'category_id' => $request->category_id,
        'blog_slug' => $request->blog_slug,
        'description' => $request->description,
        'video_url' => $request->video_url,
        'meta_title' => $request->meta_title,
        'meta_description' => $request->meta_description,
        'author_id' => $request->author_id,
    ]);

    // Sync tags if provided
    // if ($request->has('tags')) {
    //     $blog->tags()->sync($request->tags);
    // } else {
    //     $blog->tags()->detach(); // Clear existing tags if none provided
    // }

    return redirect()->route('blogs.index')->with('success', 'Blog updated successfully.');
}


    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully.');
    }
    public function show(Blog $blog)
    {
        $blog->load('author');
        return view('blogs.show', compact('blog'));
    }
}
