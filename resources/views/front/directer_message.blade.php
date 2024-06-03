@extends('layouts.masters')
@section('content')
<div class="page-title-area bg-21">
    <div class="container">
      <div class="page-title-content">
        <h2>LE MOT DU DIRECTEUR</h2>

        <ul>
          <li>
            <a href="index.php"> Accueil</a>
          </li>

          <li class="active">LE MOT DU DIRECTEUR</li>
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
           <div class="gap-20"></div>
            <section class="our-campus-information-area pb-100">
              <div class="container">
                <div class="our-campus-bg our-campus-bg-style">
                  <div class="row align-items-center">
                    <div class="col-lg-7">
                      <div class="campus-content mr-15">
                       <h2>LE MOT DU DIRECTEUR</h2>
                        <p> Dans un monde qui subit des transformations rapides, façonnées par des avancées technologiques, des paysages de marché changeants et des défis sans précédent pour la planète, la Mash International School of Business s’est donné pour mission de proposer une formation ouverte sur le monde
                        qui place l’humain au coeur de toutes les préoccupations.</p>
                        <p>Nos programmes fournissent aux étudiants une base solide dans des domaines tels que la gestion, la finance, le marketing, l'entreprenariat et l'innovation mais pas seulement. A une époque où la responsabilité environnementale et sociale fait partie intégrante de la réussite des entreprises, notre formation commerciale met l'accent sur les pratiques éthiques, la responsabilité sociale des entreprises et les modèles d'entreprise durables.</p>
                       <p>Notre objectif est de former des individus qui ne 
                          sont pas seulement préparés au monde des affaires d'aujourd'hui, mais qui façonneront également le
                          paysage commercial et notre espace de vie de demain.</p>

                        <h4>Pascal Mallen </h4>
                      </div>
                    </div>
                    <div class="col-lg-5">
                      <div class="campus-img-2 ml-15">
                        <img src="{{asset('assets/images/dir-1.jpg')}}" alt="Image" style="border-radius: 50%;"/>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection