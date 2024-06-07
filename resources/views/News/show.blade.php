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
                                            <th style="color:red; font-weight:bold; width: 50%;">ID</th>
                                            <td style="width: 50%;">{{ $news->id }}</td>
                                        </tr>
                                        <tr>
                                            <th style="color:red; font-weight:bold;">Title</th>
                                            <td>{{ $news->blog_title }}</td>
                                        </tr>
                                        <tr>
                                            <th style="color:red; font-weight:bold;">Category</th>
                                            <td>{{ $news->category->category_title }}</td>
                                        </tr>
                                        <tr>
                                            <th style="color:red; font-weight:bold;">Slug</th>
                                            <td>{{ $news->blog_slug }}</td>
                                        </tr>
                                        <tr>
                                            <th style="color:red; font-weight:bold;">Description</th>
                                            <td>{!! nl2br(e($news->description)) !!}</td>
                                        </tr>
                                        <tr>
                                            <th style="color:red; font-weight:bold;">Main Image</th>
                                            <td>
                                                @if($news->main_image)
                                                    <img src="{{ asset('storage/' . $news->main_image) }}" alt="Main Image" class="img-thumbnail" width="150">
                                                @else
                                                    No image available
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th style="color:red; font-weight:bold;">Video URL</th>
                                            <td>{{ $news->video_url }}</td>
                                        </tr>
                                        <tr>
                                            <th style="color:red; font-weight:bold;">Meta Title</th>
                                            <td>{{ $news->meta_title }}</td>
                                        </tr>
                                        <tr>
                                            <th style="color:red; font-weight:bold;">Meta Description</th>
                                            <td>{{ $news->meta_description }}</td>
                                        </tr>
                                        <tr>
                                            <th style="color:red; font-weight:bold;">Author</th>
                                            <td>{{ $news->author->name }}</td>
                                        </tr>
                                        <tr>
                                            <th style="color:red; font-weight:bold;">Tags</th>
                                            <td>{{ $news->tags }}</td>
                                        </tr>
                                        <tr>
                                            <th style="color:red; font-weight:bold;">Created By</th>
                                            <td>{{ $news->created_by }}</td>
                                        </tr>
                                        <tr>
                                            <th style="color:red; font-weight:bold;">Created Date</th>
                                            <td>{{ $news->created_date }}</td>
                                        </tr>
                                        <tr>
                                            <th style="color:red; font-weight:bold;">Updated By</th>
                                            <td>{{ $news->updated_by }}</td>
                                        </tr>
                                        <tr>
                                            <th style="color:red; font-weight:bold;">Updated Date</th>
                                            <td>{{ $news->updated_date }}</td>
                                        </tr>
                                        <tr>
                                            <th style="color:red; font-weight:bold;">Status</th>
                                            <td>{{ $news->status ? 'Active' : 'Inactive' }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="{{ route('news.index') }}" class="btn btn-secondary">Back to List</a>
                            </div>
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end page-content -->
    </div><!-- end main-content -->
</div>
@endsection
