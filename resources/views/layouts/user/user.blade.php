<!DOCTYPE html>
<html lang="en">
   
    <!-- Mirrored from askbootstrap.com/preview/vidoe-v2-1/theme-three/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Apr 2020 22:49:33 GMT -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Askbootstrap">
        <meta name="author" content="Askbootstrap">
        <title>VIDOE - Video Streaming Website HTML Template</title>
        <!-- Favicon Icon -->
        <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
        <!-- Bootstrap core CSS-->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet" type="text/css">
        <!-- Custom styles for this template-->
        <link href="{{ asset('assets/css/osahan.css') }}" rel="stylesheet">
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.css') }}">
    </head>
        <body id="page-top">

            <div id="dev-app">
                @yield('content')

            
                <!-- /#wrapper -->
                <!-- Scroll to Top Button-->
                <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fas fa-angle-up"></i>
                </a>
            </div>
            
            <!-- Bootstrap core JavaScript-->
            <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
            <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
            <!-- Core plugin JavaScript-->
            <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
            <!-- Owl Carousel -->
            <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
            <!-- Custom scripts for all pages-->
            <script src="{{ asset('assets/js/custom.js') }}"></script>
            <script src="{{ asset('/js/app.js') }}"></script>

            <script>
                var isOpen = false

                function toggle(){
                    
                    if(isOpen == false){
                        $("#user-dropdown").addClass('show')
                        isOpen = true
                    }
                    else{
                        $("#user-dropdown").removeClass('show')
                        isOpen = false
                    }


                }

            </script>

            @stack('scripts')

        </body>

<!-- Mirrored from askbootstrap.com/preview/vidoe-v2-1/theme-three/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Apr 2020 22:49:33 GMT -->
</html>