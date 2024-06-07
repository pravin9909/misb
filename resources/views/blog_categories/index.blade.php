@extends('backendlayouts.master')
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="listjs-table" id="blogCategoryList">
                                <div class="row g-4 mb-3">
                                    <div class="col-sm">
                                        <div class="d-flex justify-content-sm-end">
                                            <div class="search-box ms-2">
                                                <input type="text" class="form-control search" placeholder="Search...">
                                                <i class="ri-search-line search-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-responsive table-card mt-3 mb-1">
                                    <table class="table align-middle table-nowrap" id="blogCategoryTable">
                                        <thead class="table-light">
                                            <tr>
                                                <th class="sort" data-sort="id">ID</th>
                                                <th class="sort" data-sort="category_title">Title</th>
                                                <th class="sort" data-sort="slug">Slug</th>
                                                <th class="sort" data-sort="actions">Actions</th>
                                            </tr>
                                        </thead>
                                        @if(count($categories)>0)
                                        @php
                                        $i = 1;
                                        @endphp
                                        @foreach($categories as $category)
                                        <tbody class="list form-check-all">
                                            <tr>
                                                <td class="id">{{ $i }}</td>
                                                <td class="category_title">{{ $category->category_title }}</td>
                                                <td class="slug">{{ $category->slug }}</td>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <div class="view">
                                                            <a href="{{ route('blog-categories.show', $category->id) }}" class="btn btn-info btn-sm">View</a>
                                                        </div>
                                                        <div class="edit">
                                                            <a href="{{ route('blog-categories.edit', $category->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                                        </div>
                                                        <div class="remove">
                                                            <form action="{{ route('blog-categories.destroy', $category->id) }}" method="POST" style="display: inline;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                        @php
                                        $i++
                                        @endphp
                                        @endforeach
                                        @else 
                                        <tr>
                                            <td colspan="4" class="text-center">No data found</td>
                                        </tr>
                                        @endif
                                    </table>
                                    <div class="noresult" style="display: none">
                                        <div class="text-center">
                                            <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                            <h5 class="mt-2">Sorry! No Result Found</h5>
                                            <p class="text-muted mb-0">We've searched more than 150+ categories. We did not find any categories for your search.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end">
                                    <div class="pagination-wrap hstack gap-2">
                                        {{ $categories->links() }}
                                    </div>
                                </div>
                            </div>
                        </div><!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end col -->
            </div>
        </div>
    </div>
</div>
@endsection
