@extends('backendlayouts.master')
@section('content')
<div class="main-content">

  <div class="page-content">
      <div class="container-fluid">
<div class="row">
  <div class="col-lg-12">
      <div class="card">
        @php
        $student_application_id = [];
            foreach ($student as $key => $stu) {
                $student_application_id[] = $stu->application_id;
            }
            // echo "<pre>";
            //     print_r($student_application_id);
            //     echo "</pre>";
        @endphp

          <div class="card-body">
              <div class="listjs-table" id="customerList">
                  <div class="row g-4 mb-3">
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        {{ session('success') }}
                      </div>
                    @endif
                      <div class="col-sm-auto">
                          <div>
                              <a class="btn btn-success add-btn" href="{{ url('/admin/application/create') }}"><i class="ri-add-line align-bottom me-1"></i> Add</a>

                          </div>
                      </div>
                      {{-- <div class="col-sm">
                          <div class="d-flex justify-content-sm-end">
                              <div class="search-box ms-2">
                                  <input type="text" class="form-control search" placeholder="Search...">
                                  <i class="ri-search-line search-icon"></i>
                              </div>
                          </div>
                      </div> --}}
                  </div>

                  <div class="table-responsive table-card mt-3 mb-1">
                      <table class="table align-middle table-nowrap" id="myTable">
                          <thead class="table-light">
                              <tr>
                                  {{-- <th scope="col" style="width: 50px;">
                                      <div class="form-check">
                                          <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                      </div>
                                  </th> --}}
                                  <th class="" data-sort="customer_name">S. No</th>
                                  <th class="" data-sort="family_name">Family Name</th>
                                  <th class="" data-sort="first_name">First Name</th>
                                  <th class="" data-sort="passport_number">Passprot Number</th>
                                  
                                  <th class="" data-sort="telephone">Telephone</th>
                                  <th class="" data-sort="email">Email</th>
                                  <th class="" data-sort="action">Action</th>
                              </tr>
                          </thead>
                         
                          <tbody class="list form-check-all">
                            @if(count($application)>0)
                            @php
                            $i = 1;
                            @endphp
                             @foreach($application as $data)
                              <tr>
                                  {{-- <th scope="row">
                                      <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                      </div>
                                  </th> --}}
                                  <td class="id" style="">{{ $i }}</td>
                                  <td class="name">{{$data->familyName}}</td>
                                  <td class="email">{{$data->firstName}}</td>
                                  <td class="phone">{{$data->passportNumber}}</td>
                                  <td class="subject">{{$data->telephone}}</td>
                                  <td class="message">{{$data->email}}</td>
                                  {{-- <td class="status"><span class="badge bg-success-subtle text-success text-uppercase">Active</span></td> --}}
                                  <td>
                                      <div class="d-flex gap-2">
                                          {{-- <div class="edit">
                                              <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModal">Edit</button>
                                          </div> --}}
                                          <div class="create_student">
                                            <a  href="{{url('/admin/student/create-student')}}/{{$data->id}}" {{ in_array($data->id, $student_application_id) ? "disabled": ""}}><i class="ri-add-fill me-1 align-bottom" style="font-size: 24px; color:green;"></i></a>
                                        </div>
                                          <div class="view">
                                            <a  href="{{url('/admin/application/view')}}/{{$data->id}}" ><i class="ri-eye-fill align-bottom " style="font-size: 24px; color:blue;"></i></a>
                                        </div>
                                        
                                        <div class="remove">
                                            <a  href="{{url('/admin/application')}}/{{$data->id}}"><i class="ri-delete-bin-fill align-bottom" style="font-size: 24px; color:red;" ></i></a>
                                        </div>
                                        {{-- @foreach($student as $stu) --}}
                                        <div class="status_change">
                                            <a  href="#" class="btn btn-primary" >@php
                                            if (in_array($data->id, $student_application_id))
                                            {
                                           echo "Student created";
                                            } else {
                                           echo "Not Created";
                                            }
                                            @endphp</a>
                                        </div>
                                        {{-- @endforeach --}}
                                      </div>
                                  </td>
                              </tr>
                              @php
                              $i++
                              @endphp
                              @endforeach
                              @else 
              No data found
                              @endif
                          </tbody>
                         
                      </table>
                      <div class="noresult" style="display: none">
                          <div class="text-center">
                              <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                              <h5 class="mt-2">Sorry! No Result Found</h5>
                              <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any orders for you search.</p>
                          </div>
                      </div>
                  </div>

                  {{-- <div class="d-flex justify-content-end">
                      <div class="pagination-wrap hstack gap-2">
                          <a class="page-item pagination-prev disabled" href="javascript:void(0);">
                              Previous
                          </a>
                          <ul class="pagination listjs-pagination mb-0"></ul>
                          <a class="page-item pagination-next" href="javascript:void(0);">
                              Next
                          </a>
                      </div>
                  </div> --}}
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
@section('script')
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
    //  $('#searchInput').on('keyup', function() {
    //             dataTable.search($(this).val()).draw();
    //         });
} );

</script>

@endsection