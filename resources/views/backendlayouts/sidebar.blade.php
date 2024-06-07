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
                     <!-- Blogs Menu -->
            <li class="nav-item">
                <a class="nav-link menu-link" href="#sidebarBlogs" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarBlogs">
                    <i class="ri-book-line"></i> <span data-key="t-blogs">Blogs</span>
                </a>
                <div class="collapse menu-dropdown" id="sidebarBlogs">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="{{ route('blog-categories.create') }}" class="nav-link" data-key="t-create-blog-category"> Create Blog Category </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('blog-categories.index') }}" class="nav-link" data-key="t-list-blog-category"> List Blog Categories </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('blogs.create') }}" class="nav-link" data-key="t-create-blog"> Create Blog </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('blogs.index') }}" class="nav-link" data-key="t-list-blogs"> List Blogs </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- End Blogs Menu -->
             <!-- News Menu -->
             <li class="nav-item">
                <a class="nav-link menu-link" href="#sidebarNews" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarNews">
                    <i class="ri-newspaper-line"></i> <span data-key="t-news">News</span>
                </a>
                <div class="collapse menu-dropdown" id="sidebarNews">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="{{ route('news-categories.create') }}" class="nav-link" data-key="t-create-news-category"> Create News Category </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('news-categories.index') }}" class="nav-link" data-key="t-list-news-categories"> List News Categories </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('news.create') }}" class="nav-link" data-key="t-create-news"> Create News </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('news.index') }}" class="nav-link" data-key="t-list-news"> List News </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- End News Menu -->
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
    <div class="sidebar-background"></div>
</div>