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
            <form action="{{ route('blog-categories.update', $category->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="category_title" class="form-label">Category Title</label>
                            <input type="text" class="form-control" placeholder="Enter category title" id="category_title" name="category_title" value="{{ old('category_title', $category->category_title) }}" required>
                            @error('category_title')
                               <span style="color:red;"> {{ $message }}</span> 
                            @enderror
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control" placeholder="Enter slug" id="slug" name="slug" value="{{ old('slug', $category->slug) }}" required>
                        </div>
                        @error('slug')
                        <span style="color:red;"> {{ $message }}</span> 
                     @enderror
                    </div>
                    <!--end col-->
                   
                    <!--end col-->
                 
                    <!--end col-->
                 
                    <!--end col-->
                    <div class="col-lg-12">
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </form>
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
