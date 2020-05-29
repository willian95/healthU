<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>HEALTHU</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
    <link rel="stylesheet" href="{{ asset('assets/css/css-landing/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/css-landing/main.css') }}">
    
      <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('assets/css/css-landing/base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/css-landing/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/css-landing/principal.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/css/css-landing/style.css') }}">    
   
     
       <!---hola-->


  </head>
        <body >
               @yield('content')

            
                <!-- /#wrapper -->
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
    <!-- Custom JavaScript -->
    <script src="{{ asset('assets/js/js-landing/animate.js') }}"></script>
    <script src="{{ asset('assets/js/js-landing/custom.js') }}"></script>
<script>
$('.carousel').carousel({
  interval: 2000,
   pause: 'none'
})
    
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>
     <script>
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
    </script>
      <script type="text/javascript">$( document ).ready(function() {
  $(".navbar-nav a").on("click", function(){
    $(".navbar-nav ").find(".activa").removeClass("activa");
    $(this).addClass("activa");
  });
});



</script>
 <script src="{{ asset('assets/js/js-landing/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/js-landing/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/js-landing/main.js') }}"></script>







  <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
 

  <!-- Template Main Javascript File -->
  <script src="{{ asset('assets/js/js-landing/up.js') }}"></script>
  </body>
</html>