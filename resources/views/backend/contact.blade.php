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
                      {{-- <div class="col-sm-auto">
                          <div>
                              <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Add</button>
                              <button class="btn btn-soft-danger" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                          </div>
                      </div> --}}
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
                      <table class="table align-middle table-nowrap" id="customerTable">
                          <thead class="table-light">
                              <tr>
                                  {{-- <th scope="col" style="width: 50px;">
                                      <div class="form-check">
                                          <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                      </div>
                                  </th> --}}
                                  <th class="sort" data-sort="customer_name">Serial Number</th>
                                  <th class="sort" data-sort="name">Name</th>
                                  <th class="sort" data-sort="email">Email</th>
                                  <th class="sort" data-sort="phone">Phone</th>
                                  
                                  <th class="sort" data-sort="subject">Subject</th>
                                  <th class="sort" data-sort="message">Message</th>
                                  <th class="sort" data-sort="action">Action</th>
                              </tr>
                          </thead>
                          @if(count($contact)>0)
                          @php
                          $i = 1;
                          @endphp
                          @foreach($contact as $contacts)
                          <tbody class="list form-check-all">
                              <tr>
                                  {{-- <th scope="row">
                                      <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                      </div>
                                  </th> --}}
                                  <td class="id" style=""><a href="javascript:void(0);" class="fw-medium link-primary">{{ $i }}</a></td>
                                  <td class="name">{{$contacts->name}}</td>
                                  <td class="email">{{$contacts->email}}</td>
                                  <td class="phone">{{$contacts->phone_number}}</td>
                                  <td class="subject">{{$contacts->msg_subject}}</td>
                                  <td class="message">{{$contacts->message}}</td>
                                  {{-- <td class="status"><span class="badge bg-success-subtle text-success text-uppercase">Active</span></td> --}}
                                  <td>
                                      <div class="d-flex gap-2">
                                          <div class="edit">
                                              <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModal">Edit</button>
                                          </div>
                                          <div class="remove">
                                              <a class="btn btn-sm btn-danger remove-item-btn" href="{{url('/admin/contact')}}/{{$contacts->id}}">Remove</a>
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
          No data found
                          @endif
                      </table>
                      <div class="noresult" style="display: none">
                          <div class="text-center">
                              <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                              <h5 class="mt-2">Sorry! No Result Found</h5>
                              <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any orders for you search.</p>
                          </div>
                      </div>
                  </div>

                  <div class="d-flex justify-content-end">
                      <div class="pagination-wrap hstack gap-2">
                          <a class="page-item pagination-prev disabled" href="javascript:void(0);">
                              Previous
                          </a>
                          <ul class="pagination listjs-pagination mb-0"></ul>
                          <a class="page-item pagination-next" href="javascript:void(0);">
                              Next
                          </a>
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