@extends('backendlayouts.master')
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('news.create') }}" class="btn btn-success mb-3">Add News</a>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Author</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($news as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->blog_title }}</td>
                                        <td>{{ $item->category->category_title }}</td>
                                        <td>{{ $item->author->name }}</td>
                                        <td>
                                            <a href="{{ route('news.show', $item->id) }}" class="btn btn-info">View</a>
                                            <a href="{{ route('news.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                                            <form action="{{ route('news.destroy', $item->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end page-content -->
    </div><!-- end main-content -->
</div>
@endsection
