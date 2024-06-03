@extends('layouts.masters')
@section('content')

  <!-- Start Page Title Area -->
  <div class="page-title-area bg-21">
        <div class="container">
            <div class="page-title-content">
                <h2>MASTER IN BUSINESS ADMINISTRATION</h2>

                <ul>
                    <li>
                        <a href="index"> Accueil </a>
                    </li>

                    <li class="active">MASTER IN BUSINESS ADMINISTRATION</li>
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


                        <h3>GESTION</h3>
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
                                                <h2>Master in Business Administration</h2>
                                                <p>Il s'adresse principalement aux cadres d'entreprises qui souhaitent
                                                    compléter leur formation technique par un enseignement approfondi en
                                                    sciences de gestion, en administration des affaires, etc. Le
                                                    programme attire
                                                    de plus en plus d'étudiants en formation initiale.</p>
                                                <p>Ce programme correspond à un standard international, répandu dans les
                                                    mondes anglo-saxon et asiatique. Il bénéficie donc d'une
                                                    reconnaissance
                                                    internationale.</p>
                                                <p>Il peut être proposé en mode continu, ou adapté pour être compatible
                                                    avec
                                                    une activité professionnelle de cadre.</p>


                                            </div>
                                        </div>

                                        <div class="col-lg-7">
                                            <div class="campus-img-2 ml-15">
                                                <img src="assets/images/mba-programme.jpeg" alt="Image" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>






                        <!-- <div class="gap-20"> </div> -->

                        <div class="col-lg-5">
                            <div class="courses-sidebar ml-15">
                                <div class="courses-single-sidebar mb-0">
                                    <h3>CURSUS</h3>
                                    <ul>
                                        <li>6 spécialités</li>
                                        <li>Durée: 2 Ans (4 semestres 120 ECTS)</li>
                                        <li>Accessible Bac+3 & Bac +4</li>
                                        <li>Niveau de sortie: Équivalent Bac+5</li>
                                        <li>Integration possible en 2e annee</li>
                                        <li>Accessible Bac+2</li>
                                        <li>Niveau de sortie: Équivalent Bac+3</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="gap-20"> </div>
                        <!-- <div class="container">
                            <form class="cart-controller">
                                <div class="cart-table table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">FRAIS D'INSCRIPTION PAR AN</th>
                                                <th scope="col">FRAIS DE SCOLARITÉ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>MBA 1ère année</td>
                                                <td>1900 €</td>
                                            </tr>
                                            <tr>
                                                <td>MBA 2ème année</td>
                                                <td>1900 €</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div> -->
                        <div class="container">
                            <form class="cart-controller">
                                <div class="cart-table table-responsive">
                                    <h6>FRAIS DE SCOLARITE MBA</h6>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr class="head-color">
                                                <th scope="col" style="text-align:center;" class="text-white"></th>
                                                <th scope="col" style="text-align:center;" class="text-white">Niveau</th>
                                                <th scope="col" style="text-align:center;" class="text-white">Frais de Dossier</th>
                                                <th scope="col" style="text-align:center;" class="text-white">Inscription</th>
                                                <th scope="col" style="text-align:center;" class="text-white">Frais de Scolarité</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="table-blue">
                                                <td rowspan="2" class="align_fees text-white"><b>Resident Français étudiant</b></td>
                                                <td class="align_fees text-white">Master 1</td>
                                                <td rowspan="2" class="align_fees text-white"></td>
                                                <td rowspan="2" class="align_fees text-white">300 €</td>
                                                <td rowspan="2" class="align_fees text-white">1,600 €</td>
                                            </tr>
                                            <tr class="table-blue">
                                                <td class="align_fees text-white">Master 2</td>
                                               
                                                
                                            </tr>
                                            <tr>
                                            <td rowspan="2" class="align_fees"><b>Européen</b></td>
                                                <td class="align_fees">Master 1</td>
                                                <td rowspan="2" class="align_fees">30€</td>
                                                <td rowspan="2" class="align_fees">300 €</td>
                                                <td class="align_fees">2,900 €</td>
                                            </tr>
                                            <tr >
                                                
                                                <td class="align_fees">Master 2</td>
                                            
                                       
                                                <td class="align_fees">1,600 €</td>
                                            </tr>
                                            <tr class="table-red">
                                            <td rowspan="2" class="align_fees text-white"><b>Non Européen</b></td>
                                                <td class="align_fees text-white">Master 1</td>
                                                <td rowspan="2" class="align_fees text-white">30 €</td>
                                                <td rowspan="2" class="align_fees text-white">300 €</td>
                                                <td class="align_fees text-white">4,500 €</td>
                                            </tr>
                                            <tr class="table-red">
                                                <td class="align_fees text-white">Master 2</td>
                                              
                                                <td class="align_fees  text-white">1,600 €</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>

                        <div class="gap-20"> </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-sm-6">
                                <div class="inner-single-study">
                                    <h3>
                                        <a href="mba-gestion-des-affaires-internationales">Gestion des affaires
                                            internationales</a>
                                    </h3>
                                    <p>
                                        Explorez les marchés, les <br>
                                        cultures et les stratégies à<br>
                                        l'échelle mondiale et<br>
                                        maîtrisez le commerce
                                        international.
                                    </p>
                                    <a href="mba-gestion-des-affaires-internationales" class="read-more">
                                        Find out more
                                        <span class="ri-arrow-right-line"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="inner-single-study">
                                    <h3>
                                        <a href="mba-management-et-gestion-hoteliere">Management et Gestion
                                            hôtelière</a>
                                    </h3>
                                    <p>
                                        Apprenez à superviser les <br>
                                        opérations d'accueil et de
                                        gestion hôtelière et à jouer <br>
                                        un rôle de premier plan dans un
                                        secteur en plein
                                        développement.
                                    </p>
                                    <a href="mba-management-et-gestion-hoteliere" class="read-more">
                                        Find out more
                                        <span class="ri-arrow-right-line"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="inner-single-study">
                                    <h3>
                                        <a href="mba-creation-entreprise-et-entrepreneuriat">Création d'entreprise
                                            et entrepreneuriat</a>
                                    </h3>
                                    <p>
                                        Renforcez votre esprit
                                        d'innovation, développez<br>
                                        des idées commerciales et
                                        cultivez les<br> compétences
                                        nécessaires à la réussite de
                                        vos projets.
                                    </p>
                                    <a href="mba-creation-entreprise-et-entrepreneuriat" class="read-more">
                                        Find out more
                                        <span class="ri-arrow-right-line"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="inner-single-study">
                                    <h3>
                                        <a href="mba-marketing-international">Marketing international</a>
                                    </h3>
                                    <p>
                                        Maîtrisez les nuances
                                        culturelles,<br> l'image de marque
                                        mondiale et la<br> portée
                                        stratégique,en façonnant<br> des
                                        produits à destination<br> d’une
                                        clientèle international.
                                    </p>
                                    <a href="mba-marketing-international" class="read-more">
                                        Find out more
                                        <span class="ri-arrow-right-line"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="inner-single-study">
                                    <h3>
                                        <a href="mba-tourisme-culture"> Tourisme & Culture</a>
                                    </h3>
                                    <p>
                                        Explorez le patrimoine culturel,
                                        analysez les évolutions du
                                        secteur du voyage et les <br>
                                        stratégies de gestion des
                                        destinations, pour concevoir <br>
                                        des expériences de voyage
                                        uniques.
                                    </p>
                                    <a href="mba-tourisme-culture" class="read-more">
                                        Find out more
                                        <span class="ri-arrow-right-line"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="inner-single-study">
                                    <h3>
                                        <a href="mba-management-du-luxe">Management du luxe</a>
                                    </h3>
                                    <p>
                                        Plongez dans l'univers<br> de
                                        l'exception, perfectionnez<br>
                                        l'art du branding <br>et
                                        développez votre
                                        expertise dans le<br> domaine
                                        du domaine du luxe
                                    </p>
                                    <a href="mba-management-du-luxe" class="read-more">
                                        Find out more
                                        <span class="ri-arrow-right-line"></span>
                                    </a>
                                </div>
                            </div>
                        </div>



                        <div class="gap-20"> </div>

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
                                        <a href="assets/MBA_MISB_BROCHURE.pdf" data-bs-toggle="modal"
                                            data-bs-target="#brochureModal" download="MBA_MISB_BROCHURE.pdf"
                                            class="default-btn">
                                            Télécharger la brochure
                                            <i class="ri-arrow-right-line"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="download-pdf">
                                        <a href="{{ url('to-apply') }}" class="default-btn">
                                            Postuler
                                            <i class="ri-arrow-right-line"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="gap-20"></div>
                        <h3>PRATIQUE,
                            IMMERSIF,
                            PERFORMANT,</h3>
                        <p>La Mash Business School met l'accent sur l'aspect
                            pratique de l'éducation, en proposant des séminaires
                            pour une meilleure compréhension du monde réel,
                            des stages pour une expérience pratique et des
                            visites pour une exposition directe au monde de
                            l'industrie et des affaires au cours de votre parcours.</p>

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