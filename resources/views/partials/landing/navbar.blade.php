  <nav id="myHeader" class="header navbar navbar-expand-lg navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="#index"><img src="{{ asset('assets/img/img-landing/logos.png')}}" alt="logo" style="width: 20px;"></a>
            <a  class="navbar-brand" href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                      <a class="navbar-brand" style="font-size: 17px;" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                      <a class="navbar-brand" style="font-size: 17px;" href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                      <a class="navbar-brand" style="font-size: 17px;" href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                      <a class="navbar-brand" style="font-size: 17px;" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="#index">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#ours">Quienes somos</a></li>
            <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a> </li>
              <li class="nav-item"><a class="nav-link" href="{{ url('/login') }}">Iniciar Sesion</a> </li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/register') }}">Registrarse</a> </li>
          </ul>
        </div>

      </div>

    </nav>