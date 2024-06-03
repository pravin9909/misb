@extends('backendlayouts.master')
@section('content')
<div class="main-content">

  <div class="page-content">
      <div class="container-fluid">
<div class="row">
  <div class="col-lg-12">
      <div class="card">
        

          <div class="card-body">
            <h6><span style="color:red; font-weight:bold;">Family Name : </span>{{$applicationView->familyName}}</h6>
            <h6><span style="color:red; font-weight:bold;">First Name : </span>{{$applicationView->firstName}}</h6>
            <h6><span style="color:red; font-weight:bold;">Passprot Number : {{$applicationView->passportNumber}}</span></h6>
            <h6><span style="color:red; font-weight:bold;">Telephone : </span>{{$applicationView->telephone}}</h6>
            <h6><span style="color:red; font-weight:bold;">Email : </span>{{$applicationView->email}}</h6>
            <h6><span style="color:red; font-weight:bold;">Address : </span>{{$applicationView->address}}</h6>
            <h6><span style="color:red; font-weight:bold;">City : </span>{{$applicationView->city}}</h6>
            <h6><span style="color:red; font-weight:bold;">Zip Code : </span>{{$applicationView->zipcode}}</h6>
            <h6><span style="color:red; font-weight:bold;">DoB : </span>{{$applicationView->dob}}</h6>
            <h6><span style="color:red; font-weight:bold;">Nationality : </span>{{$applicationView->nationality}}</h6>
            <h6><span style="color:red; font-weight:bold;">Qualification : </span>{{$applicationView->qualification}}</h6>
            <h6><span style="color:red; font-weight:bold;">School : </span>{{$applicationView->School}}</h6>
            <h6><span style="color:red; font-weight:bold;">Level French : </span>{{$applicationView->level_french}}</h6>
            <h6><span style="color:red; font-weight:bold;">Level English : </span>{{$applicationView->level_english}}</h6>
            <h6><span style="color:red; font-weight:bold;">Intake Year : </span>{{$applicationView->intake_year}}</h6>
            <h6><span style="color:red; font-weight:bold;">Programme : </span>{{$applicationView->programSelect}}</h6>
            <h6><span style="color:red; font-weight:bold;">Programme Selected : </span>{{$applicationView->programSelected}}</h6>
            <h6><span style="color:red; font-weight:bold;">Visa : </span><a href="{{ asset('/assets/application/visa')}}/{{$applicationView->visa}}" download="Visa">            </a></h6>
            <h6><span style="color:red; font-weight:bold;">Diploma : </span><a href="{{ asset('/assets/application/diploma') }}/{{ $applicationView->diploma }}" download="diploma">

            </a></h6>
            <h6><span style="color:red; font-weight:bold;">Passport : </span><a href="{{ asset('/assets/application/passportsize') }}/{{ $applicationView->passportsize }}" download="passportsize">

            </a></h6>
            <h6><span style="color:red; font-weight:bold;">Id Card : </span><a href="{{ asset('/assets/application/idcard') }}/{{ $applicationView->idcard }}" download="idcard"></a></h6>
            <h6><span style="color:red; font-weight:bold;">MoI : </span><a href="{{ asset('/assets/application/moi') }}/{{ $applicationView->moi }}" download="moi"></a></h6>
            <h6><span style="color:red; font-weight:bold;">Motivational Letter : </span><a href="{{ asset('/assets/application/motivational_letter') }}/{{ $applicationView->moi }}" download="moi"></a></h6>
            <h6><span style="color:red; font-weight:bold;">C V : </span><a href="{{ asset('/assets/application/moi') }}/{{ $applicationView->curriculum_vitae }}" download="moi"></a></h6>
              {{-- <div class="listjs-table" id="customerList">
                  <div class="row g-4 mb-3"> --}}
                      {{-- <div class="col-sm-auto">
                          <div>
                              <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Add</button>
                              <button class="btn btn-soft-danger" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                          </div>
                      </div> --}}
                      {{-- <div class="col-sm">
                          <div class="d-flex justify-content-sm-end">
                              <div class="search-box ms-2">
                                  <input type="text" class="form-control search" placeholder="Search...">
                                  <i class="ri-search-line search-icon"></i>
                              </div>
                          </div>
                      </div>
                  </div> --}}

                  {{-- <div class="table-responsive table-card mt-3 mb-1">
                      <table class="table align-middle table-nowrap" id="customerTable">
                          <thead class="table-light">
                              <tr>
                                  {{-- <th scope="col" style="width: 50px;">
                                      <div class="form-check">
                                          <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                      </div>
                                  </th> --}}
                             
                                  {{-- <th class="sort" data-sort="family_name">Family Name</th>
                                  <th class="sort" data-sort="first_name">First Name</th>
                                  <th class="sort" data-sort="passport_number">Passprot Number</th>
                                  <th class="sort" data-sort="telephone">Telephone</th>
                                  <th class="sort" data-sort="email">Email</th>
                                  <th class="sort" data-sort="address">Address</th>
                                  <th class="sort" data-sort="city">City</th>
                                  <th class="sort" data-sort="zip_code">Zip Code</th>
                                  <th class="sort" data-sort="dob">DoB</th>
                                  <th class="sort" data-sort="nationality">Nationality</th>
                                  <th class="sort" data-sort="qualification">Qualification</th>
                                  <th class="sort" data-sort="school">School</th>
                                  <th class="sort" data-sort="french">Level French</th>
                                  <th class="sort" data-sort="english">Level English</th>
                                  <th class="sort" data-sort="year">Intake Year</th>
                                  <th class="sort" data-sort="programme">Programme</th>
                                  <th class="sort" data-sort="visa">Visa</th>
                                 <th class="sort" data-sort="diploma">Diploma</th>
                                 <th class="sort" data-sort="passport">Passport</th>
                                 <th class="sort" data-sort="id_card">Id Card</th>
                                 <th class="sort" data-sort="moi">MoI</th>
                                 <th class="sort" data-sort="motivational_letter">Motivational Letter</th>
                                 <th class="sort" data-sort="cv">C V</th> --}}
                                  {{-- <th class="sort" data-sort="action">Action</th> --}}
                              {{-- </tr>
                          </thead> --}}
                      
                      
                          {{-- <tbody class="list form-check-all">
                              <tr> --}}
                                  {{-- <th scope="row">
                                      <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                      </div>
                                  </th> --}}

                                  {{-- <td class="family_name">{{$applicationView->familyName}}</td>
                                  <td class="first_name">{{$applicationView->firstName}}</td>
                                  <td class="passport_number">{{$applicationView->passportNumber}}</td>
                                  <td class="telephone">{{$applicationView->telephone}}</td>
                                  <td class="email">{{$applicationView->email}}</td>
                                  <td class="address">{{$applicationView->address}}</td>
                                  <td class="city">{{$applicationView->city}}</td>
                                  <td class="zipcode">{{$applicationView->zipcode}}</td>
                                  <td class="dob">{{$applicationView->dob}}</td>
                                  <td class="nationality">{{$applicationView->nationality}}</td>
                                  <td class="qualification">{{$applicationView->qualification}}</td>
                                  <td class="school">{{$applicationView->School}}</td>
                                  <td class="level_french">{{$applicationView->level_french}}</td>
                                  <td class="level_english">{{$applicationView->level_english}}</td>
                                  <td class="intake_year">{{$applicationView->intake_year}}</td>
                                  <td class="program_select">{{$applicationView->programSelect}}</td>
                                  <td class="visa"><a href="{{ asset('/assets/application/visa')}}/{{$applicationView->visa}}" download="Visa"><img src="{{ asset('/assets/application/visa')}}/{{$applicationView->visa}}" alt="{{$applicationView->visa}}" style="height: 50px; width: 50px;"></a></td>
                                   <td class="diploma"><a href="{{ asset('/assets/application/diploma') }}/{{ $applicationView->diploma }}" download="diploma"><img src="{{ asset('/assets/application/diploma') }}/{{ $applicationView->diploma }}" alt="{{ $applicationView->diploma }}" style="height: 50px; width: 50px;"></a></td>
                                <td class="passport_size"><a href="{{ asset('/assets/application/passportsize') }}/{{ $applicationView->passportsize }}" download="passportsize"><img src="{{ asset('/assets/application/passportsize') }}/{{ $applicationView->passportsize }}" alt="{{ $applicationView->passportsize }}" style="height: 50px; width: 50px;"></a></td>
                                   <td class="id_card"><a href="{{ asset('/assets/application/idcard') }}/{{ $applicationView->idcard }}" download="idcard"><img src="{{ asset('/assets/application/idcard') }}/{{ $applicationView->idcard }}" alt="{{ $applicationView->idcard }}" style="height: 50px; width: 50px;"></a></td>
                                   <td class="diploma"><a href="{{ asset('/assets/application/moi') }}/{{ $applicationView->moi }}" download="moi"><img src="{{ asset('/assets/application/moi') }}/{{ $applicationView->moi }}" alt="{{ $applicationView->moi }}" style="height: 50px; width: 50px;" style="height: 50px; width: 50px;"></a></td> 
                                <td class="passport_size"><a href="{{ asset('/assets/application/motivational_letter') }}/{{ $applicationView->motivational_letter }}" download="motivationalLetter"><img src="{{ asset('/assets/application/motivational_letter') }}/{{ $applicationView->motivational_letter }}" alt="{{ $applicationView->motivational_letter }}" style="height: 50px; width: 50px;"></a></td>
                                   <td class="id_card"><a href="{{ asset('/assets/application/cv') }}/{{ $applicationView->curriculum_vitae }}" download="curriculum_vitae"><img src="{{ asset('/assets/application/cv') }}/{{ $applicationView->curriculum_vitae }}" alt="{{ $applicationView->curriculum_vitae }}" style="height: 50px; width: 50px;"></a></td>  --}}
                                  {{-- <td class="status"><span class="badge bg-success-subtle text-success text-uppercase">Active</span></td> --}}
                                  {{-- <td>
                                      <div class="d-flex gap-2">
                                          <div class="edit">
                                              <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModal">Edit</button>
                                          </div>
                                          <div class="remove">
                                              <a class="btn btn-sm btn-danger remove-item-btn" href="{{url('/admin/application')}}/{{$data->id}}">Remove</a>
                                          </div>
                                          <div class="view">
                                            <a class="btn btn-sm btn-info view-item-btn" href="{{url('/admin/application')}}/{{$data->id}}">View</a>
                                        </div>
                                      </div>
                                  </td> --}}
                              {{-- </tr>
                          </tbody>
                     
                      </table>
                      <div class="noresult" style="display: none">
                          <div class="text-center">
                              <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                              <h5 class="mt-2">Sorry! No Result Found</h5>
                              <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any orders for you search.</p>
                          </div>
                      </div>
                  </div>  --}}

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
              {{-- </div> --}}
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