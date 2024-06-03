<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="{{ url('/admin/dashboard')}}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{asset('assets/images/white-logo.png')}}" alt=""  style="width: 72%">
            </span>
            <span class="logo-lg">
                <img src="{{asset('assets/images/white-logo.png')}}" alt=""  style="width: 72%">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="{{ url('/admin/dashboard')}}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{asset('assets/images/white-logo.png')}}" alt=""  style="width: 72%">
            </span>
            <span class="logo-lg">
                <img src="{{asset('assets/images/white-logo.png')}}" alt=""  style="width: 72%">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>
    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                {{-- <li class="menu-title"><span data-key="t-menu">Menu</span></li> --}}
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ url('/admin/dashboard')}}" >
                         <span data-key="t-widgets">Dashboards</span>
                    </a>                           
                </li>
               <!-- end Dashboard Menu -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarPages" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
                        <i class="ri-pages-line"></i> <span data-key="t-pages">Menu</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarPages">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ url('/admin/contact')}}" class="nav-link" data-key="t-starter"> Contact </a>
                            </li>
                           
                            <li class="nav-item">
                                <a href="{{ url('/admin/application')}}" class="nav-link" data-key="t-team"> Application </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/admin/student')}}" class="nav-link" data-key="t-team"> Student </a>
                            </li>
                                <li class="nav-item">
                                    <a href="{{ url('/admin/course')}}" class="nav-link" data-key="t-team"> Course </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('/admin/payment')}}" class="nav-link" data-key="t-team"> Payment </a>
                                </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
    <div class="sidebar-background"></div>
</div>