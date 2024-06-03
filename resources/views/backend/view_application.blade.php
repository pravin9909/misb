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
                        <td style="width: 50%;">{{$applicationView->familyName}}</td>
                    </tr>
                    <tr>
                        <th style="color:red; font-weight:bold;">First Name</th>
                        <td>{{$applicationView->firstName}}</td>
                    </tr>
                    <tr>
                        <th style="color:red; font-weight:bold;">Passprot Number</th>
                        <td>{{$applicationView->passportNumber}}</td>
                    </tr>
                    <tr>
                        <th style="color:red; font-weight:bold;">Telephone</th>
                        <td>{{$applicationView->telephone}}</td>
                    </tr>
                    <tr>
                        <th style="color:red; font-weight:bold;">Email</th>
                        <td>{{$applicationView->email}}</td>
                    </tr>
                    <tr>
                        <th style="color:red; font-weight:bold;">Address</th>
                        <td>{{$applicationView->address}}</td>
                    </tr>
                    <tr>
                        <th style="color:red; font-weight:bold;">City</th>
                        <td>{{$applicationView->city}}</td>
                    </tr>
                    <tr>
                        <th style="color:red; font-weight:bold;">Zip Code</th>
                        <td>{{$applicationView->zipcode}}</td>
                    </tr>
                    <tr>
                        <th style="color:red; font-weight:bold;">DoB</th>
                        <td>{{$applicationView->dob}}</td>
                    </tr>
                    <tr>
                        <th style="color:red; font-weight:bold;">Nationality</th>
                        <td>{{$applicationView->nationality}}</td>
                    </tr>
                    <tr>
                        <th style="color:red; font-weight:bold;">Qualification</th>
                        <td>{{$applicationView->qualification}}</td>
                    </tr>
                    <tr>
                        <th style="color:red; font-weight:bold;">School</th>
                        <td>{{$applicationView->School}}</td>
                    </tr>
                    <tr>
                        <th style="color:red; font-weight:bold;">Level French</th>
                        <td>{{$applicationView->level_french}}</td>
                    </tr>
                    <tr>
                        <th style="color:red; font-weight:bold;">Level English</th>
                        <td>{{$applicationView->level_english}}</td>
                    </tr>
                    <tr>
                        <th style="color:red; font-weight:bold;">Intake Year</th>
                        <td>{{$applicationView->intake_year}}</td>
                    </tr>
                    <tr>
                        <th style="color:red; font-weight:bold;">Programme</th>
                        <td>{{$applicationView->programSelect}}</td>
                    </tr>
                    <tr>
                        <th style="color:red; font-weight:bold;">Programme Selected</th>
                        <td>{{$applicationView->programSelected}}</td>
                    </tr>
                  
                    <tr>
                        <th style="color:red; font-weight:bold;">Visa
                            <input type="hidden" class="form-control"  name="visa_old" value="{{$applicationView->visa}}">
                        </th>
                        <td class="download">
                            <a href="{{ asset('/assets/application/visa')}}/{{$applicationView->visa}}" download="Visa">
                                
                                <span id="remove_visa"><i class="ri-download-2-fill align-middle me-1"></i> Download</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th style="color:red; font-weight:bold;">Diploma
                            <input type="hidden" class="form-control"  name="diploma_old" value="{{$applicationView->diploma}}">
                        </th>
                        <td>
                            <a href="{{ asset('/assets/application/diploma') }}/{{ $applicationView->diploma }}" download="diploma">
                                
                                <span id="remove_diploma"><i class="ri-download-2-fill align-middle me-1"></i> Download</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th style="color:red; font-weight:bold;">Passport
                            <input type="hidden" class="form-control"  name="passport_old" value="{{$applicationView->passportsize}}">
                        </th>
                        <td>
                            <a href="{{ asset('/assets/application/passportsize') }}/{{ $applicationView->passportsize }}" download="passportsize">
                                
                                <span id="remove_passportsize"><i class="ri-download-2-fill align-middle me-1"></i> Download</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th style="color:red; font-weight:bold;">Id Card
                            <input type="hidden" class="form-control"  name="idcard_old" value="{{$applicationView->idcard}}">
                        </th>
                        <td>
                            <a href="{{ asset('/assets/application/idcard') }}/{{ $applicationView->idcard }}" download="idcard">
                                
                                <span id="remove_idcard"><i class="ri-download-2-fill align-middle me-1"></i> Download</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th style="color:red; font-weight:bold;">MoI
                            <input type="hidden" class="form-control"  name="moi_old" value="{{$applicationView->moi}}">
                        </th>
                        <td>
                            <a href="{{ asset('/assets/application/moi') }}/{{ $applicationView->moi }}" download="moi">
                                
                                <span id="remove_moi"><i class="ri-download-2-fill align-middle me-1"></i> Download</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th style="color:red; font-weight:bold;">Motivational Letter
                            <input type="hidden" class="form-control"  name="motivational_letter_old" value="{{$applicationView->moi}}">
                        </th>
                        <td>
                            <a href="{{ asset('/assets/application/motivational_letter') }}/{{ $applicationView->moi }}" download="motivational_letter">
                                
                                <span id="remove_motivational_letter"><i class="ri-download-2-fill align-middle me-1"></i> Download</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th style="color:red; font-weight:bold;">C V 
                            <input type="hidden" class="form-control"  name="cv_old" value="{{$applicationView->curriculum_vitae}}">
                        </th>
                        <td>
                            <a href="{{ asset('/assets/application/cv') }}/{{ $applicationView->curriculum_vitae }}" download="cv" id="anchor_cv">
                                
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
    //     function handleImageError() {
    //     $("#remove_cv").css("display", "none");
    // }
//      $(document).ready(function() {
   
//     var visa = $("#visa");
//     var diploma = $("#diploma");
//     var passportsize = $("#passportsize");
//     var idCard = $("#idCard");
//     var moi = $("#moi");
//     var motivational_letter = $("#motivational_letter");
//     var cv = $("#cv");
//     visa.on('error', function() {
//       if (visa.attr('alt') === 'No Image') {
//         $("#remove_visa").css("display","none");
//       }
//     });
//     diploma.on('error', function() {
//       if (diploma.attr('alt') === 'No Image') {
//         $("#remove_diploma").css("display","none");
//       }
//     });
//     passportsize.on('error', function() {
//       if (passportsize.attr('alt') === 'No Image') {
//         $("#remove_passportsize").css("display","none");
//       }
//     });
//     idCard.on('error', function() {
//       if (idCard.attr('alt') === 'No Image') {
//         $("#remove_idCard").css("display","none");
//       }
//     });
//     moi.on('error', function() {
//       if (moi.attr('alt') === 'No Image') {
//       //  cv.find("#remove_cv").css("display","none");
//         $("#remove_moi").css("display","none");
//         //alert("cv");
//       }
//     });
//     motivational_letter.on('error', function() {
//       if (motivational_letter.attr('alt') === 'No Image') {
//         $("#remove_motivational_letter").css("display","none");
//       }
//     });
//     cv.on('error', function() {
//       if (cv.attr('alt') === 'No Image') {
//       //  cv.find("#remove_cv").css("display","none");
//         $("#remove_cv").css("display","none");
//         //alert("cv");
//       }
//     });
//  });   
    </script>
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