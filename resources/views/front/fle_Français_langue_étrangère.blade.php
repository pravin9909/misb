@extends('layouts.masters')
@section('content')
<div class="page-title-area bg-21" style="background-image: URL('/assets/images/fle.jpeg');">
        <div class="container">
            <div class="page-title-content">
                <h2>Français langue étrangère</h2>

                <ul>
                    <li>
                        <a href="index.php"> Accueil </a>
                    </li>

                    <li class="active">Français langue étrangère</li>
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
                       
                     



                        <div class="gap-20"> </div>
                        <section class="simple-steps-area pb-70">
                            <div class="container">
                                <div class="section-title">
                                    <h2>F.L.E (Français langue étrangère)</h2>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single-simple-steps">
                                            <i class="flaticon-search"></i>
                                            <h3>FRANÇAIS NIVEAU</h3>
                                            <p>Cours général 10h/semaine
                                                <br>
                                                Du lundi au vendredi
                                                <br>
                                                1 cours = 2 heures
                                                <br>
                                                12 étudiants par classe
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single-simple-steps">
                                            <i class="flaticon-choosing"></i>
                                            <h3>ATELIERS</h3>
                                            <p>
                                                2-3 ateliers/semaine
                                                <br>
                                                Atelier = 1 heure
                                                <br>
                                                5-12 étudiants<br> par classe

                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single-simple-steps">
                                            <i class="flaticon-contract"></i>
                                            <h3>ATELIERS GÉNÉRAUX</h3>
                                            <p>
                                                Phonétique
                                                <br>
                                                Production orale
                                                <br>
                                                Conversation
                                            </p>
                                        </div>
</div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single-simple-steps">
                                            <i class="flaticon-presentation"></i>
                                            <h3>ATELIERS SPÉCIAUX</h3>
                                            <p>
                                                Français des affaires
                                                <br>
                                                Médiation culturelle
                                                <br>
                                                Histoire moderne
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section> 
                        <div class="gap-20"> </div>
                        <div class="col-lg-6">
                            <div class="courses-sidebar ml-15">
                                <div class="courses-single-sidebar mb-0">
                                    <h3>FRAIS D'INSCRIPTION PAR SEMAINES</h3>
                                    <ul>
                                        <li>
                                            4 Semaine:
                                            <span>250 €</span>
                                        </li>
                                        <li>
                                            8 Semaine:
                                            <span> 460 € </span>
                                        </li>
                                        <li>
                                            12 Semaine:
                                            <span> 700 € </span>
                                        </li>
                                        <li>
                                            24 Semaine:
                                            <span> 1300 € </span>
                                        </li>
                                        <li>
                                            28 Semaine:
                                            <span> 1800 € </span>
                                        </li>
                                        <li>
                                            36 Semaine:
                                            <span> 2100 € </span>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="gap-20"> </div>
                        <!-- <div class="course-odf-bg">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="course-pdf">
                                        <i class="ri-file-pdf-line"></i>
                                        <h3>DBA Brochure</h3>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="download-pdf">
                                        <a href="assets/DBA_MISB_BROCHURE.pdf" data-bs-toggle="modal"
                                            data-bs-target="#brochureModal" class="default-btn">
                                            Télécharger la brochure
                                            <i class="ri-arrow-right-line"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="download-pdf">
                                        <a href="application.php" class="default-btn">
                                            Postuler
                                            <i class="ri-arrow-right-line"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
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
                                        <input type="text" name="name" id="name" class="form-control" required=""
                                            data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Prénom</label>
                                        <input type="text" name="name" id="name" class="form-control" required=""
                                            data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Courriel</label>
                                        <input type="email" name="email" id="email" class="form-control" required=""
                                            data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Téléphone</label>
                                        <input type="text" name="phone_number" id="phone_number" required=""
                                            data-error="Please enter your number" class="form-control">
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
                                    <button type="submit" class="default-btn"
                                        style="pointer-events: all; cursor: pointer;">
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
@endsection