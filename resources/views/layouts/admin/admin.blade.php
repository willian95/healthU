<!DOCTYPE html>
<html lang="en" class="default-style layout-fixed layout-navbar-fixed">

    <!-- Mirrored from html.phoenixcoded.net/empire/bootstrap/default/w-simple.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Mar 2020 05:05:46 GMT -->
    <head>
        <title>Empire Admin | B4+ admin template by Codedthemes</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="Empire is one of the unique admin template built on top of Bootstrap 4 framework. It is easy to customize, flexible code styles, well tested, modern & responsive are the topmost key factors of Empire Dashboard Template" />
        <meta name="keywords" content="bootstrap admin template, dashboard template, backend panel, bootstrap 4, backend template, dashboard template, saas admin, CRM dashboard, eCommerce dashboard">
        <meta name="author" content="" />
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">

        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

        <link rel="stylesheet" href="{{ url('admin/assets/fonts/fontawesome.css') }}">
        <link rel="stylesheet" href="{{ url('admin/assets/fonts/ionicons.css') }}">
        <link rel="stylesheet" href="{{ url('admin/assets/fonts/linearicons.css') }}">
        <link rel="stylesheet" href="{{ url('admin/assets/fonts/open-iconic.css') }}">
        <link rel="stylesheet" href="{{ url('admin/assets/fonts/pe-icon-7-stroke.css') }}">
        <link rel="stylesheet" href="{{ url('admin/assets/fonts/feather.css') }}">

        <link rel="stylesheet" href="{{ url('admin/assets/css/bootstrap-material.css') }}">
        <link rel="stylesheet" href="{{ url('admin/assets/css/shreerang-material.css') }}">
        <link rel="stylesheet" href="{{ url('admin/assets/css/uikit.css') }}">

        <link rel="stylesheet" href="{{ url('admin/assets/libs/perfect-scrollbar/perfect-scrollbar.css') }}">
    </head>
    <body>

        <div class="page-loader">
            <div class="bg-primary"></div>
        </div>


        <div class="layout-wrapper layout-2" id="dev-app">
            <div class="layout-inner">

                @include('partials.admin.sidebar')

                <div class="layout-container">

                    @include('partials.admin.navbar')

                    <div class="layout-content">

                        <div class="container-fluid flex-grow-1 container-p-y">
                            @yield('content')
                        </div>

                        @include('partials.admin.footer')

                    </div>
                </div>
            </div>

            <div class="layout-overlay layout-sidenav-toggle"></div>
        </div>


        <script src="{{ url('admin/assets/js/pace.js') }}"></script>
        <script src="{{ url('admin/assets/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ url('admin/assets/libs/popper/popper.js') }}"></script>
        <script src="{{ url('admin/assets/js/bootstrap.js') }}"></script>
        <script src="{{ url('admin/assets/js/sidenav.js') }}"></script>
        <script src="{{ url('admin/assets/js/layout-helpers.js') }}"></script>
        <script src="{{ url('admin/assets/js/material-ripple.js') }}"></script>

        <script src="{{ url('admin/assets/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

        <!--<script src="{{ url('admin/assets/js/demo.js') }}"></script>-->
        <script src="{{ url('admin/assets/js/analytics.js') }}"></script>
        <script src="{{ asset('/js/app.js') }}"></script>

        @stack('scripts')

    </body>

<!-- Mirrored from html.phoenixcoded.net/empire/bootstrap/default/w-simple.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Mar 2020 05:05:46 GMT -->
</html>
