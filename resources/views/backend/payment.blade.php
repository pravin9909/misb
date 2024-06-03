@extends('backendlayouts.master')
@section('content')
<div class="main-content">

  <div class="page-content">
      <div class="container-fluid">
<div class="row">
  <div class="col-lg-12">
      <div class="card">
        

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
                              {{-- <a class="btn btn-success add-btn" href="{{ url('/admin/student/add-student')}}"><i class="ri-add-line align-bottom me-1"></i> Add</a> --}}
                              {{-- <button class="btn btn-soft-danger" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button> --}}
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
                                  <th class="sort" data-sort="customer_name">S. No</th>
                                  <th class="sort" data-sort="family_name">Family Name</th>
                                  <th class="sort" data-sort="first_name">First Name</th>
                                  <th class="sort" data-sort="passport_number">Passprot Number</th>
                                  <th class="sort" data-sort="telephone">Telephone</th>
                                  <th class="sort" data-sort="email">Email</th>
                                  <th class="sort" data-sort="total_fees">Total Fees</th>
                                  <th class="sort" data-sort="fees_paid">Fees Paid</th>
                                  <th class="sort" data-sort="balance_fees">Balance Fees</th>
                                  {{-- <th class="sort" data-sort="action">Action</th> --}}
                              </tr>
                          </thead>
                      
                          <tbody class="list form-check-all">
                            @if(count($student)>0)
                            @php
                            $i = 1;
                            @endphp
                             @foreach($student as $data)
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
                                  <td class="total_fees">{{$data->total_fees}}</td>
                        <td class="fees_paid">{{$data->fees_paid}}</td>
                                  <td class="balance_fees">{{$data->balance_fees}}</td>
                                  {{-- <td class="status"><span class="badge bg-success-subtle text-success text-uppercase">Active</span></td> --}}
                                  {{-- <td>
                                      <div class="d-flex gap-2">
                                          <div class="edit">
                                            <a class="btn btn-sm btn-success remove-item-btn" href="{{url('/admin/student/edit')}}/{{$data->id}}">Edit</a>
                                          </div>
                                          <div class="remove">
                                              <a class="btn btn-sm btn-danger remove-item-btn" href="{{url('/admin/student/delete')}}/{{$data->id}}">Remove</a>
                                          </div>
                                          <div class="view">
                                            <a class="btn btn-sm btn-info view-item-btn" href="{{url('/admin/student/view')}}/{{$data->id}}">View</a>
                                        </div>
                                      
                                      </div>
                                  </td> --}}
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