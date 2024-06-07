@extends('backendlayouts.master')
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $category->category_title }}</h5>
                            <p><strong>ID:</strong> {{ $category->id }}</p>
                            <p><strong>Category Title:</strong> {{ $category->category_title }}</p>
                            <p><strong>Slug:</strong> {{ $category->slug }}</p>
                            <p><strong>Created At:</strong> {{ $category->created_at->format('M d, Y H:i:s') }}</p>
                            <p><strong>Updated At:</strong> {{ $category->updated_at->format('M d, Y H:i:s') }}</p>
                            <a href="{{ route('news_categories.index') }}" class="btn btn-secondary">Back to Categories</a>
                            <a href="{{ route('news_categories.edit', $category->id) }}" class="btn btn-primary">Edit Category</a>
                            <form action="{{ route('news_categories.destroy', $category->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category?')">Delete Category</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
