@extends('layouts.masters')
@section('content')
	<!-- Start Page Title Area -->
	<div class="page-title-area bg-27">
		<div class="container">
			<div class="page-title-content">
				<h2>OTP Verification</h2>

				<ul>
					<li>
						<a href="index.php">
						Home
						</a>
					</li>

					<li class="active">Verification</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- End Page Title Area -->

	<!-- Start Candidates Resume Area -->
	<section class="candidates-resume-area ptb-100">
		<div class="container">
			<div class="candidates-resume-content">
				<form class="resume-info" method="post" action="otpVerification.php">					
					<div class="row">
                            <div class="col-lg-6 col-md-6 text-center" style="margin:0 auto;">
                                 <h3 id="msgBox"></h3>
                            </div>
                    </div>
					<div class="row" >

							<div class="col-lg-6 col-md-6 text-center" id="textBox" style="margin:0 auto">
                            <h3>Entrez OTP pour vérifier votre identifiant de messagerie</h3>
								<div class="form-group">
									<label for="img">OTP </label>
									<input type="number" class="form-control" name="otp" id="otp" required>
									<input type="hidden" name="otp_get" id="otp_get" value="{{ Session::get('otp') }}">
                                    <input type="hidden" name="lastId" id="lastId" value="{{ Session::get('lastId') }}">
									<input type="hidden" name="pay_de_residence" id="pay_de_residence" value="{{ Session::get('pay_de_residence') }}">
                                    <span style="color:red; display:none;" id="otpRemark">OTP a tort ! Veuillez saisir le bon OTP</span>
								</div>
                                <button type="button" name="submitForm" id="checkOTP" class="default-btn">
									Déposer une Demande
									<i class="ri-arrow-right-line"></i>
								</button>
							</div>
					</div>
				</form>
			</div>
		</div>
	</section>
@endsection
@section('script')
<script>
    $(document).ready(function() {
   $("#checkOTP").click(function(){ 
           // alert("mughis");
		   var otp_get = $("#otp_get").val();
		   //alert(otp_get);
            if($("#otp").val()== otp_get ){
                //alert('OTP Valid');
                $("#textBox").hide();
                $("#msgBox").html("Merci d'avoir déposé votre candidature. Nous reviendrons vers vous très prochainement.");
                $.ajax({
                    type: "post",
                    url: "{{ route('submission.email') }}",
                    data: { 
                        id: $("#lastId").val(),
						pay_de_residence:$("#pay_de_residence").val(),
						_token: "{{ csrf_token() }}" // < note use of 'this' here
                    },
                    success: function(result) {
                       console.log(result);
                    },
                    error: function(result) {
                       // alert('error');
                    }
                });
            }else{
                $("#otpRemark").show();
            }
         });
    })
      
	</script>
@endsection