@extends('layouts.masters')
@section('content')
@push('styles')
<style>
        table {
            width: 50%;
            border-collapse: collapse;

        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            text-align: center;
        }

        /* Responsive table styles */
        @media (max-width: 600px) {
            .table-responsive {
                overflow-x: auto;
            }
        }
    </style>
@endpush
<div class="page-title-area bg-21">
        <div class="container">
            <div class="page-title-content">
                <h2>Vie étudiante</h2>

                <ul>
                    <li>
                        <a href="index.php"> Accueil </a>
                    </li>

                    <li class="active">Vie étudiante</li>
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


                    


                        <section class="our-campus-information-area pb-100">
                            <div class="container">
                                <div class="our-campus-bg our-campus-bg-style">
                                    <div class="row align-items-center">
                                        <div class="col-lg-5">
                                            <div class="campus-content mr-15">
                                                <h2>Vie étudiante</h2>
                                                <p> Nous disposons d'un service d'assistance dédié aux étudiants. Le service d'assistance fournit différents types de services et d'aide aux étudiants en ce qui concerne les admissions. Voici quelques-uns des services que nous proposons :</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="campus-img-2 ml-15">
                                                <img src="{{ asset('assets/images/courses-details-img.jpg')}}" alt="Image" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>


                      



  <!-- <div class="gap-10"> </div> -->
			<div class="container">
				<div class="section-title"></div>
                  <div class="row justify-content-center">
					<div class="col-lg-6 col-md-6">
						<div class="single-study study-f3f3f4">
							<i class="flaticon-finance"></i>
							<h3>
								<a href="#">Assistance générale pour la vie quotidienne à Paris et en Ile de France </a>
							</h3>
							<ul >
                            <li>Compte bancaire français</li>
                            <li>Forfait téléphonique français</li>
                            <li>Cartes de transports en commun</li>
                            <li>Programme culturel</li> 
                            </ul>
                        </div>
					</div>

					<div class="col-lg-6 col-md-6">
						<div class="single-study study-f3f3f4">
							<i class="flaticon-contract"></i>
							<h3>
								<a href="#">Assistance administrative</a>
							</h3>
							<ul>
                            <li>Logement</li>
                            <li>Service aux étudiants ( Visa,titre de séjour, etc...)</li>
                            <li>Sports et loisirs</li>
                            <li>Santé et bien-être</li>
                        </ul>
                       </div>
					</div>
                    </div>
                  </div>
	             </div>
              </div>
            </div>
          </div>
        </div>
    </section>
@endsection