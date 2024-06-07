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
                                        {{-- <tr>
                                            <th style="color:red; font-weight:bold; width: 50%;">ID</th>
                                            <td style="width: 50%;">{{ $category->id }}</td>
                                        </tr> --}}
                                        <tr>
                                            <th style="color:red; font-weight:bold;">Category Title</th>
                                            <td>{{ $category->category_title }}</td>
                                        </tr>
                                        <tr>
                                            <th style="color:red; font-weight:bold;">Slug</th>
                                            <td>{{ $category->slug }}</td>
                                        </tr>
                                        <tr>
                                            <th style="color:red; font-weight:bold;">Created At</th>
                                            <td>{{ $category->created_at->format('M d, Y H:i:s') }}</td>
                                        </tr>
                                        <tr>
                                            <th style="color:red; font-weight:bold;">Updated At</th>
                                            <td>{{ $category->updated_at->format('M d, Y H:i:s') }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex justify-content-end mt-3">
                                <a href="{{ route('blog-categories.index') }}" class="btn btn-secondary me-2">Back to Categories</a>
                                <a href="{{ route('blog-categories.edit', $category->id) }}" class="btn btn-primary me-2">Edit Category</a>
                                <form action="{{ route('blog-categories.destroy', $category->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category?')">Delete Category</button>
                                </form>
                            </div>
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end page-content -->
    </div><!-- end main-content -->
</div>
@endsection
