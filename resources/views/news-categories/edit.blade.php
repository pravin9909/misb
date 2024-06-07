@extends('backendlayouts.master')
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Edit News Category</h5>
                            <form action="{{ route('news_categories.update', $category->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="category_title" class="form-label">Category Title</label>
                                    <input type="text" class="form-control" id="category_title" name="category_title" value="{{ $category->category_title }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="slug" class="form-label">Slug</label>
                                    <input type="text" class="form-control" id="slug" name="slug" value="{{ $category->slug }}" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{ route('news_categories.index') }}" class="btn btn-secondary">Back to Categories</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
