@extends('backendlayouts.master')
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive table-card mt-3 mb-1">
                                <table class="table align-middle table-nowrap">
                                    <tbody>
                                        <tr>
                                            <th style="color:red; font-weight:bold;">Blog Title</th>
                                            <td>{{ $blog->blog_title }}</td>
                                        </tr>
                                        <tr>
                                            <th style="color:red; font-weight:bold;">Category</th>
                                            <td>{{ $blog->category->category_title }}</td>
                                        </tr>
                                        <tr>
                                            <th style="color:red; font-weight:bold;">Description</th>
                                            <td>{!! $blog->description !!}</td>
                                        </tr>
                                        <tr>
                                            <th style="color:red; font-weight:bold;">Main Image</th>
                                            <td>
                                                @if ($blog->main_image)
                                                <img src="{{ asset('storage/' . $blog->main_image) }}" class="img-fluid mb-3" alt="Main Image">
                                                @else
                                                N/A
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th style="color:red; font-weight:bold;">Video URL</th>
                                            <td>
                                                @if ($blog->video_url)
                                                <a href="{{ $blog->video_url }}">{{ $blog->video_url }}</a>
                                                @else
                                                N/A
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th style="color:red; font-weight:bold;">Blog Slug</th>
                                            <td>{{ $blog->blog_slug }}</td>
                                        </tr>
                                        <tr>
                                            <th style="color:red; font-weight:bold;">Meta Title</th>
                                            <td>{{ $blog->meta_title ?? 'N/A' }}</td>
                                        </tr>
                                        <tr>
                                            <th style="color:red; font-weight:bold;">Meta Description</th>
                                            <td>{{ $blog->meta_description ?? 'N/A' }}</td>
                                        </tr>
                                        <tr>
                                            <th style="color:red; font-weight:bold;">Created By</th>
                                            <td>{{ $blog->author->name ?? 'N/A' }}</td>
                                        </tr>
                                        <tr>
                                            <th style="color:red; font-weight:bold;">Created At</th>
                                            <td>{{ $blog->created_at->format('M d, Y H:i:s') }}</td>
                                        </tr>
                                        <tr>
                                            <th style="color:red; font-weight:bold;">Last Updated By</th>
                                            <td>{{ $blog->updatedBy->name ?? 'N/A' }}</td>
                                        </tr>
                                        <tr>
                                            <th style="color:red; font-weight:bold;">Last Updated At</th>
                                            <td>{{ $blog->updated_at->format('M d, Y H:i:s') }}</td>
                                        </tr>
                                        <tr>
                                            <th style="color:red; font-weight:bold;">Published At</th>
                                            <td>{{ $blog->published_at ? $blog->published_at->format('M d, Y H:i:s') : 'Not published' }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex justify-content-end mt-3">
                                <a href="{{ route('blogs.index') }}" class="btn btn-secondary me-2">Back to Blogs</a>
                                <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-primary me-2">Edit Blog</a>
                                <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this blog?')">Delete Blog</button>
                                </form>
                            </div>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end page-content -->
</div><!-- end main-content -->
@endsection
