@extends('backendlayouts.master')
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="blog_title" class="form-label">Title</label>
                                    <input type="text" name="blog_title" class="form-control" id="blog_title" required>
                                </div>
                                <div class="mb-3">
                                    <label for="category_id" class="form-label">Category</label>
                                    <select name="category_id" class="form-control" id="category_id" required>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->category_title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="blog_slug" class="form-label">Slug</label>
                                    <input type="text" name="blog_slug" class="form-control" id="blog_slug" required>
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea name="description" class="form-control" id="description" rows="3" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="main_image" class="form-label">Main Image</label>
                                    <input type="file" name="main_image" class="form-control" id="main_image">
                                </div>
                                <div class="mb-3">
                                    <label for="video_url" class="form-label">Video URL</label>
                                    <input type="url" name="video_url" class="form-control" id="video_url">
                                </div>
                                <div class="mb-3">
                                    <label for="meta_title" class="form-label">Meta Title</label>
                                    <input type="text" name="meta_title" class="form-control" id="meta_title">
                                </div>
                                <div class="mb-3">
                                    <label for="meta_description" class="form-label">Meta Description</label>
                                    <textarea name="meta_description" class="form-control" id="meta_description" rows="3"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="author_id" class="form-label">Author</label>
                                    <select name="author_id" class="form-control" id="author_id" required>
                                        @foreach($authors as $author)
                                            <option value="{{ $author->id }}">{{ $author->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="tags" class="form-label">Tags</label>
                                    <input type="text" name="tags" class="form-control" id="tags">
                                </div>
                                <button type="submit" class="btn btn-primary">Create</button>
                            </form>
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end page-content -->
    </div><!-- end main-content -->
</div>
@endsection
