@extends('layouts.masters')
@section('content')
  <!-- Start Page Title Area -->
  <div class="page-title-area bg-21">
    <div class="container">
      <div class="page-title-content">
        <h2>Gestion des affaires internationales </h2>

        <ul>
          <li>
            <a href="index.php"> Accueil</a>
          </li>

          <li class="active">Gestion des affaires internationales </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- End Page Title Area -->

  <!-- Start Courses Details Area -->
  <section class="courses-details-area ptb-100">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="main-default-content mr-15">
            <h2> GESTION</h2>
            <p>À la Mash International School of Business, nos programmes
              BBS, MBA et DBA vont au-delà de l'éducation traditionnelle,
              formant des leaders visionnaires qui maîtrisent l'art de la
              gestion dans le domaine du commerce international.</p>
            <p>La gestion est le processus systématique de
              planification, d'organisation, de direction et de
              contrôle des ressources pour atteindre les objectifs
              organisationnels de manière efficiente.</p>


            <div class="gap-20"></div>
            <section class="our-campus-information-area pb-100">
              <div class="container">
                <div class="our-campus-bg our-campus-bg-style">
                  <div class="row align-items-center">
                    <div class="col-lg-5">
                      <div class="campus-content mr-15">
                        <h2>GESTION DES
                          AFFAIRES
                          INTERNATIONALES</h2>
                        <p> Explorez les marchés, les
                          cultures et les stratégies à
                          l'échelle mondiale et
                          maîtrisez le commerce
                          transfrontalier pour une
                          carrière passionnante et
                          pleine d'impact.</p>


                      </div>
                    </div>

                    <div class="col-lg-7">
                      <div class="campus-img-2 ml-15">
                        <img src="{{asset('assets/images/mba-Gestion-des-affaires-internationales.jpeg')}}" alt="Image" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <div class="gap-20"></div>

            <!-- <h3>Course descriptions</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis
              ipsum suspendisse ultrices gravida. Risus commodo viverra
              maecenas accumsan lacus vel facilisis. When an unknown printer
              took a galley of type and scrambled it to make a type specimen
              book. It has svived not only five centuries, but also the leap
              into electronic typesetting, remaining essentially unchanged.
              sed do eiusmod tempor incididunt ut labore et dolore magna
              aliqua. Quis ipsum suspendisse ultrices gravida.Risus commodo
              viverra maec enas ccumsan lacus vel facilisis.Curabitur aliquet
              quam id dui posuere blandit. essentially unchanged. sed do
              eiusmod
            </p> -->

            <div class="gap-20"></div>

            <!-- <h3>Professional experience</h3>
            <p>
              Vivamus suscipit tortor eget felis porttitor volutpat. Lorem
              ipsum dolor sit amet, consectetur adipiscing elit. Mauris
              blandit aliquet elit, eget tincidunt nibh pulvinar a. Proin eget
              tortor risus. Quisque velit nisi, pretium ut lacinia in,
              elementum id enim. Nulla quis lorem ut libero malesuada feugiat.
            </p> -->

            <div class="gap-20"></div>

            <!-- <h3>Career opportunities</h3>
            <p>
              Vivamus suscipit tortor eget felis porttitor volutpat. Lorem
              ipsum dolor sit amet, consectetur adipiscing elit. Mauris
              blandit aliquet elit, eget tincidunt nibh pulvinar a. Proin eget
              tortor risus. Quisque velit nisi, pretium ut lacinia in,
              elementum id enim. Nulla quis lorem ut libero malesuada feugiat.
            </p>

            <ul>
              <li>
                Curabitur non nulla sit amet nisl tempus convallis quis ac
                lectus
              </li>
              <li>Cras ultricies ligula sed magna dictum porta.</li>
              <li>
                Vivamus magna justo, lacinia eget consectetur sed, convallis
                at tellus.
              </li>
              <li>Curabitur aliquet quam id dui posuere blandit.</li>
              <li>
                Praesent sapien massa, convallis a pellentesque nec, egestas
                non nisi.
              </li>
            </ul> -->

            <div class="gap-20"></div>

            <!-- <h3>Credit and pathways</h3>
            <p>
              Quisque velit nisi, pretium ut lacinia in, elementum id enim.
              Curabitur aliquet quam id dui posuere blandit. Vestibulum ante
              ipsum primis in faucibus orci luctus et ultrices posuere cubilia
              Curae; Donec velit neque, auctor sit amet aliquam vel,
              ullamcorper sit amet ligula. Curabitur non nulla sit amet nisl
              tempus convallis quis ac lectus. Cras ultricies ligula sed magna
              dictum porta. Vivamus magna justo, lacinia eget consectetur sed,
              convallis at tellus. Curabitur aliquet quam id dui posuere
              blandit. Praesent sapien massa, convallis a pellentesque nec,
              egestas non nisi. Vivamus suscipit tortor.
            </p> -->

            <div class="gap-20"></div>

            <div class="course-odf-bg">
              <div class="row align-items-center">
                <div class="col-lg-6">
                  <div class="course-pdf">
                    <i class="ri-file-pdf-line"></i>
                    <h3>MBA Brochure</h3>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="download-pdf">
                    <a href="assets/MBA_MISB_BROCHURE.pdf" data-bs-toggle="modal" data-bs-target="#brochureModal" download="MBA_MISB_BROCHURE.pdf" class="default-btn">
                    Télécharger la brochure
                      <i class="ri-arrow-right-line"></i>
                    </a>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="download-pdf">
                    <a href="{{ url('to-apply' )}}" class="default-btn">
                    Postuler
                      <i class="ri-arrow-right-line"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
  </section>
  <!-- End Courses Details Area -->

  	<!-- Start Product View One Area -->
    <div class="modal fade product-view-one" id="brochureModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <button type="button" class="close" data-bs-dismiss="modal">
                        <span aria-hidden="true">
							<i class="ri-close-line"></i>
						</span>
					</button>
					
                    <div class="row align-items-center">
                        <div class="container">
            <div class="section-title">
                <h2>Brochure Download</h2>
               
            </div>

            <form id="formSubmit" novalidate="true" >
                  </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <label>Nom</label>
                            <input type="text" name="name" id="name" class="form-control" required="" data-error="Please enter your name">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <label>Prénom</label>
                            <input type="text" name="name" id="name" class="form-control" required="" data-error="Please enter your name">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <label>Courriel</label>
                            <input type="email" name="email" id="email" class="form-control" required="" data-error="Please enter your email">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <label>Téléphone</label>
                            <input type="text" name="phone_number" id="phone_number" required="" data-error="Please enter your number" class="form-control">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <!-- <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <label>Sujet</label>
                            <input type="text" name="msg_subject" id="msg_subject" class="form-control" required="" data-error="Please enter your subject">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div> -->

                    <!-- <div class="col-lg-12">
                        <div class="form-group">
                            <label>Message</label>
                            <textarea name="message" class="form-control" id="message" cols="30" rows="6" required="" data-error="Write your message"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div> -->

                    <div class="col-lg-12 col-md-12">
                        <div class="form-group checkboxs">
                            <input type="checkbox" id="chb2">
                            <p>J'accepte les conditions <a href="#">générales et la 
                               &amp; politique de</a><a href="#">confidentialité.</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <button type="submit" class="default-btn" style="pointer-events: all; cursor: pointer;">
                            <span>Envoyer un message</span>
                        </button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </form>
        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- End Product View One Area -->
@endsection
@section('script')
<script>
    // var pdfUrl = "https://misb.fr/assets/BBS_MISB_BROCHURE.pdf";
    var pdfUrl = "{{ asset('assets/MBA_MISB_BROCHURE.pdf') }}";
    $('#formSubmit').on('submit', function () {
        window.open(pdfUrl, '_blank');
    });
</script>
@endsection
	