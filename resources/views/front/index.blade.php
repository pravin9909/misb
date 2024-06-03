@extends('layouts.masters')
@section('content')
<section class="banner-area bg-1 jarallax" data-jarallax='{"speed": 0.3}' style="padding:0px;">
  <div style="position: relative;">
    <video autoplay="" muted="" loop="" id="myVideo" class="videoSection" style="width: 100%;">
      <source src="assets/videoBanner.mp4" type="video/mp4">
      Your browser does not support HTML5 video.
    </video>   
    <div class="videoText">Bienvenue à <br> MASH INTERNATIONAL SCHOOL OF BUSINESS</div>
  </div>
  <div class="d-table">
    <div class="d-table-cell">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <div class="banner-content">
             
              <h1>
                Donner aux étudiants les moyens de créer des solutions pour relever les défis de demain.

              </h1>

              <div class="banner-btn">
                <a href="#about" class="default-btn">
                  À Propos De Nous
                  <i class="ri-arrow-right-line"></i>
                </a>
              </div>


            </div>
          </div>

          <div class="col-lg-7">
            <div class="banner-img" style="margin-top:75px;">
              <img src="{{asset('assets/images/banner/homeBanner.jpeg')}}" style="border-radius:20px" alt="Image" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <ul class="social-link">
    <li>
      <a href="https://www.facebook.com/misb.fr" target="_blank"> <img src="{{asset('/assets/images/social_media/facebook.png')}}" class="social_media"> </a>
    </li>
    <li>
      <a href="https://www.instagram.com/misb.fr" target="_blank"> <img src="{{asset('/assets/images/social_media/instagram.png')}}" class="social_media"> </a>
    </li>
    <li>
      <a href="https://www.linkedin.com/company/misb-fr" target="_blank"> <img src="{{asset('/assets/images/social_media/linkedin.png')}}" class="social_media"> </a>
    </li>
    <li>
      <a href="https://www.youtube.com/channel/UCCof6Vq_AcmvNVW_-p9Pi_w" target="_blank"> <img src="{{asset('/assets/images/social_media/youtube.png')}}" class="social_media"> </a>
    </li>
    <li>
      <a href="https://api.whatsapp.com/send?phone=33777183810&text=Hi" target="_blank"> <img src="{{asset('/assets/images/social_media/whatsapp.png')}}" class="social_media"> </a>
    </li>
  </ul>
</section>
<!-- End Banner Area -->

<!-- Stat About Area -->
<section class="about-area ptb-100" id="about">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="about-img mr-15">
          <img src="{{asset('assets/images/banner/homebanner2.jpeg')}}" style="border-radius:20px" alt="Image" />
        </div>
      </div>

      <div class="col-lg-6">
        <div class="about-content ml-15">
          <span style="color:#0a3c7f">
            À propos de notre établissement
          </span>
          <h2>
            L'éducation ouvre la voie à un avenir radieux
          </h2>

          <p>
            Bienvenue à la Mash International School of Business (MISB) installée au cœur de Paris ! Plus qu'une école, c'est un centre dynamique d'apprentissage, de croissance et d'expériences incomparables pour les étudiants.Que vous soyez attiré par l’entreprenariat, la finance, le marketing, la communication ou la gestion, à la MISB nous vous proposons un large éventail de programmes bilingues et spécialement conçus pour vous conduire vers la réussite.
          </p>
          <!-- <a href="#" class="default-btn">
            À Propos De Nous
              <i class="ri-arrow-right-line"></i>
            </a> -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End About Area -->

<!-- Start Study Area -->
<section class="study-area pt-100 pb-70">
  <div class="container">
    <div class="section-title white-title">
      <h2>
        Spécialités Management
      </h2>
      <p>
        Excellence assurée dans votre parcours d’apprentissage avec le programme de gestion de la Mash International School of Business
        .
      </p>
    </div>

    <div class="row justify-content-center">
      <div class="study-slider owl-carousel owl-theme">
        <div class="single-study ">
          <i class="flaticon-data-scientist"></i>
          <h3>
            <a href="gestion-des-affaires-internationales">
              GESTION DES AFFAIRES INTERNATIONALES
            </a>
          </h3>
          <p>
            Explorez les marchés, les cultures et les stratégies à l'échelle mondiale et maîtrisez le commerce international.

          </p>
          <a href="gestion-des-affaires-internationales" class="read-more">
            En savoir plus

            <span class="ri-arrow-right-line"></span>
          </a>
        </div>


        <div class="single-study">
          <i class="flaticon-compliant"></i>
          <h3>
            <a href="management-et-gestion-hoteliere">MANAGEMENT ET GESTION HÔTELIÈRE</a>
          </h3>
          <p>
            Apprenez à superviser les opérations d'accueil et degestion hôtelière et à jouer un rôle de premier plan dans un secteur en plein développement.
          </p>

          <a href="management-et-gestion-hoteliere" class="read-more">
            En savoir plus
            <span class="ri-arrow-right-line"></span>
          </a>
        </div>

        <div class="single-study">
          <i class="flaticon-health"></i>
          <h3>
            <a href="creation-entreprise-et-entrepreneuriat">Création d'entreprise et entrepreneuriat</a>
          </h3>
          <p>
            Renforcez votre esprit d'innovation, développez des idées commerciales et cultivez les compétences nécessaires à la réussite de vos projets.
          </p>

          <a href="creation-entreprise-et-entrepreneuriat" class="read-more">
            En savoir plus
            <span class="ri-arrow-right-line"></span>
          </a>
        </div>

        <div class="single-study">
          <i class="flaticon-data-scientist"></i>
          <h3>
            <a href="marketing-international">Marketing international</a>
          </h3>
          <p>
            Maîtrisez les nuances culturelles, l'image de marque mondiale et la portée stratégique, en façonnant des produits à destination d’une clientèle internationale
            .
          </p>
          <a href="marketing-international" class="read-more">
            En savoir plus
            <span class="ri-arrow-right-line"></span>
          </a>
        </div>

        <div class="single-study">
          <i class="flaticon-data-scientist"></i>
          <h3>
            <a href="tourism-culture">Tourisme & Culture</a>
          </h3>
          <p>
            Explorez le patrimoine culturel, analysez les évolutions du secteur du voyage et les stratégies de gestion des destinations, pour concevoir des expériences de voyage uniques.
          </p>

          <a href="tourism-culture" class="read-more">
            En savoir plus
            <span class="ri-arrow-right-line"></span>
          </a>
        </div>
        <div class="single-study">
          <i class="flaticon-data-scientist"></i>
          <h3>
            <a href="management-du-luxe">
              MANAGEMENT DULUXE
            </a>
          </h3>
          <p>
            Plongez dans l'univers de l'exception, perfectionnez l'art du branding et développez votre expertise dans le domaine du domaine du luxe

          </p>
          <a href="management-du-luxe" class="read-more">
            En savoir plus
            <span class="ri-arrow-right-line"></span>
          </a>
        </div>
        <div class="single-study">
          <i class="flaticon-data-scientist"></i>
          <h3>
            <a href="dba-management-et-creation-entreprise">
              MANAGEMENT ET CRÉATION D'ENTREPRISE
            </a>
          </h3>
          <p>
            L'enseignement de la gestion et de la création d'entreprise inclut esprit entrepreneurial, planification, finance, et marketing.

          </p>

          <a href="dba-management-et-creation-entreprise" class="read-more">
            En savoir plus
            <span class="ri-arrow-right-line"></span>
          </a>
        </div>
        <div class="single-study">
          <i class="flaticon-data-scientist"></i>
          <h3>
            <a href="dba-management-et-gestion-hoteliere">
              MANAGEMENT ET GESTION HÔTELIÈRE
            </a>
          </h3>
          <p>
            Expertise en matière d'initiatives et d'innovations dans le domaine de l'hôtellerie et de la restauration, visant à stimuler le secteur.
          </p>

          <a href="dba-management-et-gestion-hoteliere" class="read-more">
            En savoir plus
            <span class="ri-arrow-right-line"></span>
          </a>
        </div>
        <div class="single-study">
          <i class="flaticon-data-scientist"></i>
          <h3>
            <a href="dba-marketing-digital-et-nouvelles-technologies">
              MARKETING DIGITAL ET NOUVELLES TECHNOLOGIES</a>
          </h3>
          Le marketing numérique dans l'apprentissage universitaire couvre la promotion en ligne, les stratégies basées sur les données et les activités liées aux médias sociaux, offrant des compétences pratiques et innovantes dans le domaine.<p>
          </p>

          <a href="dba-marketing-digital-et-nouvelles-technologies" class="read-more">
            En savoir plus
            <span class="ri-arrow-right-line"></span>
          </a>
        </div>
        <div class="single-study">
          <i class="flaticon-data-scientist"></i>
          <h3>
            <a href="dba-developpement-economique-durable-local-et-international">
              DÉVELOPPEMENT ÉCONOMIQUE, DURABLE,LOCAL ET INTERNATIONAL
               </a>
          </h3>
          <p>
            Le doctorat favorise le développement économique, durable et global par le biais de la recherche de pointe.
          </p>

          <a href="dba-developpement-economique-durable-local-et-international" class="read-more">
            En savoir plus
            <span class="ri-arrow-right-line"></span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="" style="padding-top:30px; padding-bottom:30px">
  <div class="container">
    <div class="row">
        <div class="col-md-12">
          <h2 class="text-center " style="padding-bottom:20px;">
            <a href="https://www.youtube.com/@misbschool" target="_blank">MISB VIDEOS</a>
          </h2>
        <iframe width="100%" height="450" src="https://www.youtube.com/embed/KVEaLw8kKSM?si=HjFO3BsAdbLUNom-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </div>
  </div>
</section>



    @endsection