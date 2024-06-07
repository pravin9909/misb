@extends('backendlayouts.master')
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="blog_title" class="form-label">Blog Title</label>
                                            <input type="text" class="form-control" placeholder="Enter blog title"
                                                id="blog_title" name="blog_title" value="{{ old('blog_title') }}"
                                                required>
                                            @error('blog_title')
                                            <span style="color:red;"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="category_id" class="form-label">Category</label>
                                            <select class="form-control" id="category_id" name="category_id" required>
                                                <option value="">Select Category</option>
                                                @foreach ($categories as $id => $category)
                                                <option value="{{ $id }}"
                                                    {{ old('category_id') == $id ? 'selected' : '' }}>
                                                    {{ $category }}</option>
                                                @endforeach
                                            </select>
                                            @error('category_id')
                                            <span style="color:red;"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="blog_slug" class="form-label">Blog Slug</label>
                                            <input type="text" class="form-control" placeholder="Enter blog slug"
                                                id="blog_slug" name="blog_slug" value="{{ old('blog_slug') }}"
                                                required>
                                            @error('blog_slug')
                                            <span style="color:red;"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea class="form-control" id="description" name="description"
                                                rows="5" required>{{ old('description') }}</textarea>
                                            @error('description')
                                            <span style="color:red;"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="main_image" class="form-label">Main Image</label>
                                            <input type="file" class="form-control" id="main_image" name="main_image"
                                                accept="image/*" required>
                                            @error('main_image')
                                            <span style="color:red;"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="video_url" class="form-label">Video URL</label>
                                            <input type="url" class="form-control" placeholder="Enter video URL"
                                                id="video_url" name="video_url" value="{{ old('video_url') }}">
                                            @error('video_url')
                                            <span style="color:red;"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="meta_title" class="form-label">Meta Title</label>
                                            <input type="text" class="form-control" placeholder="Enter meta title"
                                                id="meta_title" name="meta_title" value="{{ old('meta_title') }}">
                                            @error('meta_title')
                                            <span style="color:red;"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="meta_description" class="form-label">Meta Description</label>
                                            <input type="text" class="form-control"
                                                placeholder="Enter meta description" id="meta_description"
                                                name="meta_description" value="{{ old('meta_description') }}">
                                            @error('meta_description')
                                            <span style="color:red;"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="author_id" class="form-label">Author</label>
                                            <select class="form-control" id="author_id" name="author_id">
                                                <option value="">Select Author</option>
                                                @foreach ($authors as $author)
                                                <option value="{{ $author->id }}"
                                                    {{ old('author_id') == $author->id ? 'selected' : '' }}>
                                                    {{ $author->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('author_id')
                                            <span style="color:red;"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!--end col-->
                                    {{-- <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="tags" class="form-label">Tags</label>
                                            <select class="form-control" id="tags" name="tags[]" multiple>
                                                @foreach ($tags as $tag)
                                                <option value="{{ $tag->id }}"
                                                    {{ in_array($tag->id, old('tags', [])) ? 'selected' : '' }}>
                                                    {{ $tag->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('tags')
                                            <span style="color:red;"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div> --}}
                                    <!--end col-->
                                    <div class="col-lg-12">
                                        <div class="text-end">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </form>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end page-content -->
</div><!-- end main-content -->
@push('scripts')
<script>
    function generateSlug(text) {
        return text.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
    }

    document.getElementById('blog_title').addEventListener('input', function() {
        var title = this.value.trim();
        var slugInput = document.getElementById('blog_slug');
        slugInput.value = generateSlug(title);
    });
</script>
@endpush
@endsection
