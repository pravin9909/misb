<!doctype html>
<html lang="en" data-layout="semibox" data-sidebar-visibility="show" data-topbar="light" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">


<!-- Mirrored from themesbrand.com/velzon/html/corporate/tables-listjs.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Aug 2023 17:12:05 GMT -->
<head>

    <meta charset="utf-8" />
    <title>MISB Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Sweet Alert css-->
    <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    {{-- <script src="{{ asset('assets/js/layout.js')}}"></script> --}}
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('assets/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.1/css/dataTables.dataTables.css" />
    
  

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

       @include('backendlayouts.header')

<!-- removeNotificationModal -->
<div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
            </div>
            <div class="modal-body">
                <div class="mt-2 text-center">
                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                        <h4>Are you sure ?</h4>
                        <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                </div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
        <!-- ========== App Menu ========== -->
       @include('backendlayouts.sidebar')
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
       @yield('content')
       @include('backendlayouts.footer')
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->
    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->
    <!--preloader-->
    {{-- <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div> --}}
    <!-- Theme Settings -->
    <!-- JAVASCRIPT -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}} "></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js')}} "></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js')}} "></script>
    <script src="{{ asset('assets/libs/feather-icons/feather.min.js')}} "></script>
    <script src="{{ asset('assets/js/pages/plugins/lord-icon-2.1.0.js')}} "></script>
    <script src="{{ asset('assets/js/plugins.js')}} "></script>
    <!-- prismjs plugin -->
    <script src="{{ asset('assets/libs/prismjs/prism.js')}} "></script>
    <script src="{{ asset('assets/libs/list.js/list.min.js')}} "></script>
    <script src="{{ asset('assets/libs/list.pagination.js/list.pagination.min.js')}} "></script>
    <!-- listjs init -->
    <script src="{{ asset('assets/js/pages/listjs.init.js')}} "></script>
    <!-- Sweet Alerts js -->
    <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js')}} "></script>
    <!-- App js -->
    {{-- <script src="{{ asset('assets/js/app.js')}} "></script> --}}
    <script src="https://cdn.datatables.net/2.0.1/js/dataTables.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
    @yield('script')
</body>
<!-- Mirrored from themesbrand.com/velzon/html/corporate/tables-listjs.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Aug 2023 17:12:06 GMT -->
</html>