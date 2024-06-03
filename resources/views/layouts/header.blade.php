<!-- Start Header Area -->
<?php
// session_start();
// // echo "mughis";
// // exit;

// // echo $_SESSION['lang'];
// // exit;
// include_once 'translate.php';
?>

<header class="header-area">
  <!-- Start Top Header -->
  <div class="top-header">
    <div class="container">
      <div class="row align-items-center">
      <div class="col-lg-8 col-sm-6">
            <p class="text-white"><marquee>Établissement d'enseignement supérieur privé</marquee></p>
        </div>
        <div class="col-lg-2 col-sm-6 col-6 text-right">
          <ul class="header-left-content">
            <li>
              <a href="tel:0955693252 ">
                <i class="ri-phone-fill"></i>
                0955693252
              </a>
            </li>
          </ul>
        </div>
        
        <div class="col-lg-2 col-sm-6 col-6">
          <div class="header-right-content">
          <div class="languages-switcher">
    <!-- <i class="ri-global-line"></i> -->
    <div id="google_translate_element"></div>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'fr',
            includedLanguages: 'en,es,zh-CN,fr',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
        }, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <!-- <div class="dropdown"> -->
  <!-- <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
    Select Language
  </button> -->
  <!-- <ul class="dropdown-menu">
    <li> <a href="{{ url('/setlocale/en') }}" >English</a></li>
    <li><a href="{{ url('/setlocale/fr') }}" >French</a></li>    
    <li><a href="{{ url('/setlocale/spanish') }}" >Spanish</a></li> 
    <li><a href="{{ url('/setlocale/chinese') }}" >Chinese</a></li>            
  </ul> -->
</div>
    <!-- <select onchange="changeLanguage(this.value)" > -->
    <!-- <select class="form-control changeLang">
                    <option value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>French</option>
                    <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                    <option value="spanish" {{ session()->get('locale') == 'spanish' ? 'selected' : '' }}>Spanish</option>
                    <option value="chinese" {{ session()->get('locale') == 'english' ? 'selected' : '' }}>Chinese</option>
    </select> -->
</div>

            <!-- <div class="my-account">
              <a href="#">
                <i class="ri-user-fill"></i>
              </a>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Start Top Header -->

  <!-- Start Navbar Area -->
  <div class="navbar-area">
    <div class="mobile-responsive-nav">
      <div class="container">
        <div class="mobile-responsive-menu">
          <div class="logo">
            <a href="{{ url('/')}}" style="width:12%">
              <img src="{{ asset('assets/images/Logo-transparent.png')}}" alt="logo" />
            </a>
          </div>

          <div class="others-options-for-mobile-devices">
             <ul>
              <li>
                <a href="{{ url('/to-apply' )}}" class="default-btn">
                 Postuler
                </a>
              </li>

            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="desktop-nav">
      <div class="container">
        <nav class="navbar navbar-expand-md navbar-light">
          <a class="navbar-brand" href="{{ url('/')}}" style="width:12%">
            <img src="{{asset('assets/images/Logo-transparent.png')}}" alt="logo" />
          </a>

          <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto">
              <li class="nav-item">
                <a href="{{ url('/')}}" class="nav-link active">
                Accueil
                  </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                L'Ecole
                  <i class="ri-arrow-down-s-line"></i>
                </a>

                <ul class="dropdown-menu">
                  <li class="nav-item">
                    <a href="{{ url('/le-mot-du-directeur')}}" class="nav-link">
                    LE MOT DU DIRECTEUR
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/le-mot-de-la-responsable')}}" class="nav-link">
                    Le mot de la responsable pédagogique
                      
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/vision')}}" class="nav-link">
                    Vision
                      </a>
                  </li>
                 
                </ul>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                Programmes
                  
                  <i class="ri-arrow-down-s-line"></i>
                </a>

                <ul class="dropdown-menu">
                  <li class="nav-item">
                    <a href="{{url('/bbs-programme')}}" class="nav-link">
                    BBS Programme
                    
                      <i class="ri-arrow-down-s-line"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li class="nav-item">
                        <a href="{{url('/gestion-des-affaires-internationales')}}" class="nav-link">
                        Gestion des affaires internationales
                         </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{url('/management-et-gestion-hoteliere')}}" class="nav-link">
                        Management et Gestion hôtelière
                           </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{url('/creation-entreprise-et-entrepreneuriat')}}" class="nav-link">
                        Création d'entreprise et entrepreneuriat
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{url('/marketing-international')}}" class="nav-link">
                        Marketing international
                         </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{url('/tourism-culture')}}" class="nav-link">
                        Tourisme & Culture
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{url('/management-du-luxe')}}" class="nav-link">
                        Management du luxe
                        </a>
                      </li>

                    </ul>
                    
                  </li>
                  <li class="nav-item">
                    <a href="{{url('/mba-programme')}}" class="nav-link">
                    MBA Programme
                    
                      <i class="ri-arrow-down-s-line"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li class="nav-item">
                        <a href="{{url('/mba-gestion-des-affaires-internationales')}}" class="nav-link">
                        Gestion des affaires internationales
                         </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{url('/mba-management-et-gestion-hoteliere')}}" class="nav-link">
                        Management et Gestion hôtelière
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{url('/mba-creation-entreprise-et-entrepreneuriat')}}" class="nav-link">
                        Création d'entreprise et entrepreneuriat
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{url('/mba-marketing-international')}}" class="nav-link">
                        Marketing international
                         </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{url('/mba-tourisme-culture')}}" class="nav-link">
                        Tourisme & Culture
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{url('/mba-management-du-luxe')}}" class="nav-link">
                        Management du luxe
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/dba-programme')}}" class="nav-link">
                    DBA Programme
                      
                      <i class="ri-arrow-down-s-line"></i>
                    </a>

                    <ul class="dropdown-menu">
                      <li class="nav-item">
                        <a href="{{url('/dba-management-et-creation-entreprise')}}" class="nav-link">
                        Management et création d'entreprise
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{url('/dba-management-et-gestion-hoteliere')}}" class="nav-link">
                        Management et Gestion hôtelière
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{url('/dba-marketing-digital-et-nouvelles-technologies')}}" class="nav-link">
                        Marketing digital et Nouvelles technologies
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{url('/dba-tourisme-culture')}}" class="nav-link">
                        Tourisme & Culture 
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{url('/dba-developpement-economique-durable-local-et-international')}}" class="nav-link">
                        Développement économique, durable, local et international
                         </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{url('/dba-management-du-luxe')}}" class="nav-link">
                        Management du Luxe
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/fle-Français-langue-étrangère')}}" class="nav-link">
                    F.L.E (Français langue étrangère)
                      
                     
                    </a>

                 
              </li>
                </ul>
              </li>
            

              <li class="nav-item">
                <a href="{{ url('/student-life' )}}" class="nav-link">
                Vie étudiante
                
                  <!-- <i class="ri-arrow-down-s-line"></i> -->
                </a>

                <!-- <ul class="dropdown-menu">
                  <li class="nav-item">
                    <a href="#" class="nav-link">Why MISB</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link"> Visa & Residency</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">Arrival & Accomodation</a>
                  </li>
                 
                </ul> -->
              </li>

              <li class="nav-item">
                <a href="{{ url('/gallery' )}}" class="nav-link">
                Galerie
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('/information' )}}" class="nav-link">
                Informations
                </a>
              </li>
            </ul>

            <div class="others-options">
              <ul>
                <li>
                  <a href="{{ url('/to-apply' )}}" class="default-btn">
                  Postuler
                  
                  </a>
                </li>

              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
  <!-- End Navbar Area -->
</header>
<!-- End Header Area -->

<!-- Search Modal -->
<div class="modal fade search-modal-area" id="exampleModalsrc">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <button type="button" data-bs-dismiss="modal" class="closer-btn">
        <i class="ri-close-line"></i>
      </button>

      <div class="modal-body">
        <form class="search-box">
          <div class="search-input">
            <input type="text" name="Search" placeholder="Search for..." class="form-control" />

            <button type="submit" class="search-btn">
              <i class="ri-search-line"></i>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script>

</script>
</script>
<!-- Search Modal -->