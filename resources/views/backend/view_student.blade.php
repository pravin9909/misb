@extends('backendlayouts.master')
@section('content')
<div class="main-content">

  <div class="page-content">
      <div class="container-fluid">
<div class="row">
  <div class="col-lg-12">
      <div class="card">
        

          <div class="card-body">
            <table class="table table-bordered">
                {{-- <thead>
<tr>
    <th></th>
    <td></td>
</tr>
                </thead> --}}
                <tbody>
                    <tr>
                        <th style="color:red; font-weight:bold; width: 50%;">Family Name</th>
                        <td style="width: 50%;">{{$studentView->familyName}}</td>
                    </tr>
                    <tr>
                        <th style="color:red; font-weight:bold;">First Name</th>
                        <td>{{$studentView->firstName}}</td>
                    </tr>
                    <tr>
                        <th style="color:red; font-weight:bold;">Passprot Number</th>
                        <td>{{$studentView->passportNumber}}</td>
                    </tr>
                    <tr>
                        <th style="color:red; font-weight:bold;">Telephone</th>
                        <td>{{$studentView->telephone}}</td>
                    </tr>
                    <tr>
                        <th style="color:red; font-weight:bold;">Email</th>
                        <td>{{$studentView->email}}</td>
                    </tr>
                    <tr>
                        <th style="color:red; font-weight:bold;">Address</th>
                        <td>{{$studentView->address}}</td>
                    </tr>
                    <tr>
                        <th style="color:red; font-weight:bold;">City</th>
                        <td>{{$studentView->city}}</td>
                    </tr>
                    <tr>
                        <th style="color:red; font-weight:bold;">Zip Code</th>
                        <td>{{$studentView->zipcode}}</td>
                    </tr>
                    <tr>
                        <th style="color:red; font-weight:bold;">DoB</th>
                        <td>{{$studentView->dob}}</td>
                    </tr>
                    <tr>
                        <th style="color:red; font-weight:bold;">Nationality</th>
                        <td>{{$studentView->nationality}}</td>
                    </tr>
                    <tr>
                        <th style="color:red; font-weight:bold;">Qualification</th>
                        <td>{{$studentView->qualification}}</td>
                    </tr>
                    <tr>
                        <th style="color:red; font-weight:bold;">School</th>
                        <td>{{$studentView->school}}</td>
                    </tr>
                    <tr>
                        <th style="color:red; font-weight:bold;">Level French</th>
                        <td>{{$studentView->level_french}}</td>
                    </tr>
                    <tr>
                        <th style="color:red; font-weight:bold;">Level English</th>
                        <td>{{$studentView->level_english}}</td>
                    </tr>
                    <tr>
                        <th style="color:red; font-weight:bold;">Intake Year</th>
                        <td>{{$studentView->intake_year}}</td>
                    </tr>
                    <tr>
                        <th style="color:red; font-weight:bold;">Programme</th>
                        <td>{{$studentView->programSelect}}</td>
                    </tr>
                    <tr>
                        <th style="color:red; font-weight:bold;">Programme Selected</th>
                        <td>{{$studentView->programSelected}}</td>
                    </tr>
                    <tr>
                        <th style="color:red; font-weight:bold;">Total Fees</th>
                        <td>{{$studentView->total_fees}}</td>
                    </tr>
                    <tr>
                        <th style="color:red; font-weight:bold;">Fees Paid</th>
                        <td>{{$studentView->fees_paid}}</td>
                    </tr>
                    <tr>
                        <th style="color:red; font-weight:bold;">Balance Fees</th>
                        <td>{{$studentView->balance_fees}}</td>
                    </tr>
                    <tr>
                        <th style="color:red; font-weight:bold;">Visa
                            <input type="hidden" class="form-control"  name="visa_old" value="{{$studentView->visa}}"></th>
                        <td class="download">
                            <a href="{{ asset('/assets/application/visa')}}/{{$studentView->visa}}" download="Visa">
                                
                                <span id="remove_visa"><i class="ri-download-2-fill align-middle me-1"></i> Download</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th style="color:red; font-weight:bold;">Diploma
                            <input type="hidden" class="form-control"  name="diploma_old" value="{{$studentView->diploma}}">
                        </th>
                        <td>
                            <a href="{{ asset('/assets/application/diploma') }}/{{ $studentView->diploma }}" download="diploma">
                                
                                <span id="remove_diploma"><i class="ri-download-2-fill align-middle me-1"></i> Download</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th style="color:red; font-weight:bold;">Passport
                            <input type="hidden" class="form-control"  name="passportsize_old" value="{{$studentView->passportsize}}">
                        </th>
                        <td>
                            <a href="{{ asset('/assets/application/passportsize') }}/{{ $studentView->passportsize }}" download="passportsize">
                                
                                <span id="remove_passportsize"><i class="ri-download-2-fill align-middle me-1"></i> Download</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th style="color:red; font-weight:bold;">Id Card
                            <input type="hidden" class="form-control"  name="idcard_old" value="{{$studentView->idcard}}">
                        </th>
                        <td>
                            <a href="{{ asset('/assets/application/idcard') }}/{{ $studentView->idcard }}" download="idcard">
                                
                                <span id="remove_idcard"><i class="ri-download-2-fill align-middle me-1"></i> Download</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th style="color:red; font-weight:bold;">MoI
                            <input type="hidden" class="form-control"  name="moi_old" value="{{$studentView->moi}}">
                        </th>
                        <td>
                            <a href="{{ asset('/assets/application/moi') }}/{{ $studentView->moi }}" download="moi">
                                
                                <span id="remove_moi"><i class="ri-download-2-fill align-middle me-1"></i> Download</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th style="color:red; font-weight:bold;">Motivational Letter
                            <input type="hidden" class="form-control"  name="motivational_letter_old" value="{{$studentView->moi}}">
                        </th>
                        <td>
                            <a href="{{ asset('/assets/application/motivational_letter') }}/{{ $studentView->moi }}" download="motivational_letter">
                                
                                <span id="remove_motivational_letter"><i class="ri-download-2-fill align-middle me-1"></i> Download</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th style="color:red; font-weight:bold;">C V 
                            <input type="hidden" class="form-control"  name="cv_old" value="{{$studentView->curriculum_vitae}}">
                        </th>
                        <td>
                            <a href="{{ asset('/assets/application/cv') }}/{{ $studentView->curriculum_vitae }}" download="cv" id="anchor_cv">
                                
                                <span id="remove_cv"><i class="ri-download-2-fill align-middle me-1"></i> Download</span>
                            </a>
                        </td>
                    </tr>
                  
                </tbody>
            </table>
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
@section('script')

    <script>
     $(document).ready(function() {
        var visa_old = $("input[name='visa_old']").val();
        var moi_old = $("input[name='moi_old']").val();
        var motivational_letter_old = $("input[name='motivational_letter_old']").val();
        var curriculum_vitae_old = $("input[name='cv_old']").val();
        var diploma_old = $("input[name='diploma_old']").val();
        var passportsize_old = $("input[name='passportsize_old']").val();
        var idcard_old = $("input[name='idcard_old']").val();
        if(visa_old == "") {
$('#remove_visa').css('display','none');
        }
        if(moi_old == "") {
$('#remove_moi').css('display','none');
        }
        if(motivational_letter_old == "") {
$('#remove_motivational_letter').css('display','none');
        }
        if(curriculum_vitae_old == "") {
$('#remove_cv').css('display','none');
        }
        if(diploma_old == "") {
$('#remove_diploma').css('display','none');
        }
        if(passportsize_old == "") {
$('#remove_passportsize').css('display','none');
        }
        if(idcard_old == "") {
$('#remove_idcard').css('display','none');
        }
    })
</script>

@endsection