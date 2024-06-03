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
            <form action="{{ route('course.update', $course->id) }}" method="post">
                @method('put')
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select id="category" class="form-select" data-choices data-choices-sorting="true" name="category">
                                <option value="">Sélectionnez les programmes</option>
                                <option value="bbs" {{ $course->category == "bbs" ? "selected" : "" }}>BBS Programmes</option>
                                <option value="mba" {{ $course->category == "mba" ? "selected" : "" }}>MBA Programmes</option>
                                <option value="dba" {{ $course->category == "dba" ? "selected" : "" }}>DBA Programmes</option>
                            </select>
                            @error('region')
                               <span style="color:red;"> {{ $message }}</span> 
                            @enderror
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="course" class="form-label">Course Name</label>
                            <input type="text" class="form-control" placeholder="Enter your couse name" id="course" name="course" value="{{ $course->course}}">
                        </div>
                        @error('course')
                        <span style="color:red;"> {{ $message }}</span> 
                     @enderror
                    </div>
                    <!--end col-->
                   
                    <!--end col-->
                 
                    <!--end col-->
                 
                    <!--end col-->
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="fees" class="form-label">Fees</label>
                            <input type="text" class="form-control" placeholder="Enter fees" id="fees" name="fees" value="{{ $course->fees}}">
                        </div>
                        @error('fees')
                        <span style="color:red;"> {{ $message }}</span> 
                     @enderror
                    </div>
                    <!--end col-->
                   
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