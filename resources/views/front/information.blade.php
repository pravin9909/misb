@extends('layouts.masters')
@section('style')
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11"> -->
@endsection
@section('content')

    <!-- Start Courses Details Area -->
    <div class="page-title-area bg-13">
        <div class="container">
            <div class="page-title-content">
                <h2>Informations</h2>

                <ul>
                    <li>
                        <a href="index.php">
                        Accueil
                        </a>
                    </li>

                    <li class="active">Informations</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->


    <!-- Start Contact Info Area -->
    <section class="contact-info-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="map-area">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.776384484907!2d2.3228976!3d48.8434039!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6713bf1889deb%3A0x3691a5f8eaaf09a6!2sMASH%20International%20School%20of%20Business%20(MISB)!5e0!3m2!1sen!2sin!4v1715170910321!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                </div> 
                <div class="col-lg-5">
                    <div class="contact-info">
                        

                        <ul class="address">
                            <li class="location">
                                <i class="ri-map-pin-2-fill"></i>
                                <span> Adresse</span>
                                TOUR CIT, 3 Rue de l'Arrivée ,75015 Paris (5ème étage, bureau 513)
                            </li>
                            <li>
                                <i class="ri-mail-line"></i>
                                <span>Courriel</span>
                                <a href="mailto:info@misb.fr">info@misb.fr</a>
                            </li>
                            <li>
                                <i class="ri-phone-fill"></i>
                                <span>Téléphone</span>
                                <a href="tel:+33955693252 "></a>
                                +33955693252 
                            </li>
                            <li>
                                <i class="ri-whatsapp-fill"></i>
                                <span>WhatsApp</span>
                                <a href="tel:+33777183810 "></a>
                                +33777183810
                            </li>
                        </ul>

                        <h3>Follow Us</h3>

                        <ul class="social-link">
                            <li>
                                <a href="https://facebook.com/misb.fr" target="_blank">
                                <img src="{{asset('/assets/images/social_media/facebook.png')}}" class="social_media">
                                </a>
                            </li>
                            <li>
                                <a href="https://instagram.com/misb.fr" target="_blank">
                                <img src="{{asset('/assets/images/social_media/instagram.png')}}" class="social_media">
                                </a>
                            </li>
                             <li>
                                <a href="https://www.linkedin.com/company/misb-fr" target="_blank">
                                <img src="{{asset('/assets/images/social_media/linkedin.png')}}" class="social_media">
                                </a>
                            </li>
                            <li>
              <a href="https://twitter.com/" target="_blank">
              <img src="{{asset('/assets/images/social_media/twitter.png')}}" class="social_media">
              </a>
            </li>
            <li>
              <a href="https://www.youtube.com/channel/UCCof6Vq_AcmvNVW_-p9Pi_w" target="_blank">
              <img src="{{asset('/assets/images/social_media/youtube.png')}}" class="social_media">
              </a>
            </li>
            <li>
              <a href="https://api.whatsapp.com/send?phone=33777183810&text=Hi" target="_blank">
              <img src="{{asset('/assets/images/social_media/whatsapp.png')}}" class="social_media">
              </a>
            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Info Area -->

    <!-- Start Contact Area -->
 
    <section class="contact-area pb-100">
        <div class="container">
            <div class="section-title">
                <!-- @if(Session('message'))
                <div class="alert alert-success alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  {{Session('message')}}
</div>
@endif -->


                <h2>Envoyez-nous un message rapide </h2>
            </div>
<!--id="contactform" -->
<div class="candidates-resume-content">
<form  method="post" action="{{url('/information')}}" class="resume-info">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <label>Nom</label>
                            <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name">
                            @error('name')
                            <span style="color:red;">{{$message}}</span>
                            @enderror
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <label>Courriel</label>
                            <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email">
                            @error('email')
                            <span style="color:red;">{{$message}}</span>
                            @enderror
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <label>Téléphone</label>
                            <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control">
                            @error('phone_number')
                            <span style="color:red;">{{$message}}</span>
                            @enderror
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <label>Sujet</label>
                            <input type="text" name="msg_subject" id="msg_subject" class="form-control"  required data-error="Please enter your subject">
                            @error('msg_subject')
                            <span style="color:red;">{{$message}}</span>
                            @enderror
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Message</label>
                            <textarea name="message" class="form-control" id="message" cols="30" rows="6"  required data-error="Write your message"></textarea>
                            @error('message')
                            <span style="color:red;">{{$message}}</span>
                            @enderror
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="form-group checkboxs">
                            <input type="checkbox" id="chb2">
                            <a href="{{ url('/admission-policy') }}" target="_blank" style="color:#fb1300; margin-left:24px;">J'accepte les conditions générales et la 
                               &amp; politique de confidentialité.</a>
                            
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <button type="submit" name="submitButton" class="default-btn">
                            <span>Envoyer un message </span>
                        </button>
                        
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </form>
         
                    </div>

            
        </div>
    </section>

@endsection
@section('script')
<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@if(Session::has('message'))
           
           <script>
           swal("Message","{{ Session::get('message') }}", 'success' , {
           button:true,
           button:"ok",
           timer:3000
           });
               </script>
                       @endif
@endsection