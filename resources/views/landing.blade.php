@extends('layouts.landing.landing')

@section('content')

@include('partials.landing.navbar')

   <header class="content" id="index">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      	
      	  <div class="carousel-caption">
              <div class="col-sm-12 heading">
               <div class="icon">
                <img src="{{ asset('assets/img/img-landing/logo.png') }}" width="80%" class="img-fluid" >
               </div>
            </div>
            <!--h3 class="title-a" style="border: #c1c1b5 2px solid">TOURNY</h3-->
              <h1 class="title-a " >Dedícale tiempo a tu salud!</h1><br>
              <h2 class="title-a2">El entretenimiento es parte de la salud y la salud parte de ésto!</h2><br>
              <a class="btn btn-primary" href="#" role="button">Inicia la Aventura</a>
            </div>
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
         <div class="carousel-item active">
           <img src="{{ asset('assets/img/img-landing/slider1.jpg') }}" alt="...">
           <div class="gradient"></div>
           <!--div class="carousel-caption">
            <h3 class="title-a" style="border: #c1c1b5 2px solid">TOURNY</h3>
              <h1 class="title-a">Hola y bienvenido a tourny</h1>
              <h2 class="title-a2">La criptomoneda que revolucionará las competencias del mundo</h2>
              <h5 class="title-a3">Conoce a Tourny y todos los usos que tiene en los torneos, e-sports etc</h5>
              <a class="btn btn-primary" href="#" role="button">Inicia la Aventura</a>
            </div-->
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
         <div class="carousel-item">
           <img src="{{ asset('assets/img/img-landing/slider2.jpg') }}" alt="...">
           <div class="gradient"></div>
           <!--div class="carousel-caption">
            <h3 class="title-a" style="border: #c1c1b5 2px solid">TOURNY</h3>
           <h1 class="title-a">Hola y bienvendido a tourny</h1>
              <h2 class="title-a2">La criptomoneda que revolucionará las competencias del mundo</h2>
              <h5 class="title-a3">Conoce a Tourny y todos los usos que tiene en los torneos, e-sports etc</h5>
              <a class="btn btn-primary" href="#" role="button">Inicia la Aventura</a>
            </div-->
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
         <div class="carousel-item">
           <img src="{{ asset('assets/img/img-landing/slider6.jpg') }}" alt="...">
           <div class="gradient"></div>
           <!--div class="carousel-caption">
            <h3 class="title-a" style="border: #c1c1b5 2px solid">TOURNY</h3>
          <h1 class="title-a">Hola y bienvendido a tourny</h1>
              <h2 class="title-a2">La criptomoneda que revolucionará las competencias del mundo</h2>
              <h5 class="title-a3">Conoce a Tourny y todos los usos que tiene en los torneos, e-sports etc</h5>
              <a class="btn btn-primary" href="#" role="button">Inicia la Aventura</a>
            </div-->
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Siguiente</span>
        </a>
      </div>
    </header>
    <section>

<section class="about" id="funny">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 heading">
               <div class="icon">
                <img src="images/logos.png" width="20%" class="img-fluid">
               </div>
            </div>
            <div class="col-sm-12 heading">
                <h3>HEALTHU</h3>
                <h4></h4>
            </div>
        </div>
        <div class="row" data-aos="fade-up">
            <div class="col-sm-4 col1">
                <div class="row">
                    <div class="col-sm-2 box1">
                        <i class="fa fa-certificate" aria-hidden="true"></i>
                    </div>
                    <div class="col-sm-10 inner-content">
                        <h3>ALCANCE.</h3>
                        <p style="text-align: justify;">LLega a las comunidades de toda america.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col2">
                <div class="row">
                    <div class="col-sm-2 box1">
                        <i class="fa fa-magic" aria-hidden="true"></i>
                    </div>
                    <div class="col-sm-10 inner-content">
                        <h3>RECOMPENSAS</h3>
                        <p style="text-align: justify;">En healthu no solo ganas el cuidado de tu cuerpo, tambien hay grandes recompensas.. conocelas </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col3">
                <div class="row">
                    <div class="col-sm-2 box1">
                        <i class="fa fa-asterisk" aria-hidden="true"></i>
                    </div>
                    <div class="col-sm-10 inner-content">
                        <h3>OBJETIVOS</h3>
                        <p style="text-align: justify;">Un mundo mas sano y que todos se sientan comodos con su cuerpo</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog" id="ours">
    <div id="features" class="section wb" style="background: linear-gradient(135deg, rgba(104, 150, 146, 0.78) 0%,rgb(0, 255, 243) 100%); padding-top: 40px; padding-bottom: 40px;">
    <div class="container">
      <div class="row" style="padding-bottom: 4%;">
        <div class="col-lg-12 ">
          <div class="section-title text-center">
            <h1 class="title-a" >PROYECTO Healthu</h1>
            <p class="title-a2">algo </p>
          </div><!-- end title -->
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-lg-7 col-md-6">
          <div class="about-left">
            <img src="{{ asset('assets/img/img-landing/ejercicio1.jpg') }}" width="100%" style="    border: 4px silver solid;" class="img-fluid" alt="" />
          </div>
        </div>
        <div class="col-lg-5 col-md-6">
          <div class="about-right">
            <center><h1 class="title-a">LA IDEA </h1></center>
            <p style="text-align: justify;" class="title-a2">healthu surge de la idea de imnovar la manera en la que hacemos ejericios, dandole un toque divertidi e interesante.</p>
          </div>
        </div>
      </div>
      
      <div class="row align-items-center">
        <div class="col-lg-5 col-md-6">
          <div class="about-right">
              <center><h1 class="title-a"> LA MISIÓN </h1></center>
            <p class="title-a2">Que entrenadores y usuarios se unan en un solo objetivo; promover la salud</p>
          </div>
        </div>
        <div class="col-lg-7 col-md-6">
          <div class="about-left">
            <img src="{{ asset('assets/img/img-landing/ejercicio3.jpg') }}" style="    border: 4px silver solid;" class="img-fluid" alt="" />
          </div>
        </div>
      </div>

         <div class="row align-items-center" style="padding-top: 5%;">
        <div class="col-lg-7 col-md-6">
          <div class="about-left">
            <img src="{{ asset('assets/img/img-landing/ejercicio5.jpg') }}" width="100%" style="    border: 4px silver solid;" class="img-fluid" alt="" />
          </div>
        </div>
        <div class="col-lg-5 col-md-6">
          <div class="about-right">
            <center><h1 class="title-a">OPORTUNIDAD </h1></center>
            <p style="text-align: justify;" class="title-a2">Puedes ser un entrenador, conseguir millones de seguidores y no solo mejorar tu estilo de vida sino el de miles de personas.</p>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  
   
</section>


 <!--/ Section Blog Star /-->
  <section id="blog" class="blog-mf sect-pt4 route" style="background: linear-gradient(135deg, rgba(104, 150, 146, 0.78) 0%,rgb(0, 255, 243) 100%); padding-top: 40px;">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Noticias
            </h3>
            <p class="subtitle-a">
              Conoce las ultimas actualizaciones sobre Healthu
            </p>
           
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card card-blog">
            <div class="card-img">
              <a href="blog-single.html"><img src="{{ asset('assets/img/img-landing/post-1.jpg')}}" alt="" class="img-fluid"></a>
            </div>
            <div class="card-body">
              <div class="card-category-box">
                <div class="card-category">
                  <h5 class="category">Ejercicios</h5>
                </div>
              </div>
              <h3 class="card-title"><a href="blog-single.html">Noticias sobre cryptomonedas</a></h3>
              <p class="card-description">
             El lanzanamiento de Healthu ha sido un exito total, las acciones en wallstret estan subiendo muchisimo
              </p>
            </div>
            <div class="card-footer">
              <div class="post-author">
                <a href="#">
                  <img src="{{ asset('assets/img/img-landing/avatars/testimonial-2.jpg') }}" alt="" class="avatar rounded-circle">
                  <span class="author">Cristhian Manzanares</span>
                </a>
              </div>
             
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-blog">
            <div class="card-img">
              <a href="blog-single.html"><img src="{{ asset('assets/img/img-landing/post-2.jpg') }}" alt="" class="img-fluid"></a>
            </div>
            <div class="card-body">
              <div class="card-category-box">
                <div class="card-category">
                  <h6 class="category">Entrenadores</h6>
                </div>
              </div>
              <h3 class="card-title"><a href="blog-single.html">Noticias sobre primer derrame de Healthu</a></h3>
              <p class="card-description">
                blablabla
              </p>
            </div>
            <div class="card-footer">
              <div class="post-author">
                <a href="#">
                  <img src="{{ asset('assets/img/img-landing/avatars/testimonial-2.jpg') }}" alt="" class="avatar rounded-circle">
                  <span class="author">Galadin Suarez</span>
                </a>
              </div>
        
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-blog">
            <div class="card-img">
              <a href="blog-single.html"><img src="{{ asset('assets/img/img-landing/post-2.jpg') }}" alt="" class="img-fluid"></a>
            </div>
            <div class="card-body">
              <div class="card-category-box">
                <div class="card-category">
                  <h6 class="category">Eventos</h6>
                </div>
              </div>
              <h3 class="card-title"><a href="blog-single.html">Vmperiun sigue dando de que hablar</a></h3>
              <p class="card-description">
                blablabla
              </p>
            </div>
            <div class="card-footer">
              <div class="post-author">
                <a href="#">
                  <img src="{{ asset('assets/img/img-landing/avatars/testimonial-2.jpg') }}" alt="" class="avatar rounded-circle">
                  <span class="author">Healthu Contact</span>
                </a>
              </div>
          
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Section Blog End /-->
    <section id="faqs" class="section lb" style="padding-top: 4%; margin-bottom: 400px;">

           <center> <h1 class="title-b">Preguntas Frecuentes</h1></center><br>
  
        
			<div class="container align-items-center">
				<div class="col-lg-8 col-md-8">
					<div class="accordion" id="accordionExample">
					  <div class="card">
						<div class="card-header" id="headingOne">
						  <h5 class="mb-0">
							<a href="" class="btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								¿Que es Healthu?
							</a>
						  </h5>
						</div>

						<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						  <div class="card-body">
							Healthu es la plataforma interactiva para el cuidado de la salud a traves de entrenamientos
						  </div>
						</div>
					  </div>
					  <div class="card">
						<div class="card-header" id="headingTwo">
						  <h5 class="mb-0">
							<a href="" class="btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								 ¿Por que Healthu?
							</a>
						  </h5>
						</div>
						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
						  <div class="card-body">
							Healthu surge  de 
						  </div>
						</div>
					  </div>
					  <div class="card">
						<div class="card-header" id="headingThree">
						  <h5 class="mb-0">
							<a href="" class="btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							 ¿Como puedo usar mis Healthu?
							</a>
						  </h5>
						</div>
						<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						  <div class="card-body">
						otra cosa
						  </div>
						</div>

					  </div>
					    <div class="card">
						<div class="card-header" id="headingFour">
						  <h5 class="mb-0">
							<a href="" class="btn-link" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseOne">
							¿Mis Healthu que valor tienen?
							</a>
						  </h5>
						</div>

						<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
						  <div class="card-body">
							El valor del Healthu varia segun el mercado, actualmente 1 Healthu equiale a un 1$ .
						  </div>
						</div>
					  </div>
					</div>					
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="faq-right">
						<img src="{{ asset('assets/img/img-landing/ask22.png') }}" class="img-fluid" alt="" />
					</div>
				</div>
			</div>
	
	
	</section>
 



<section id="contacto" style="background: linear-gradient(135deg, rgba(104, 150, 146, 0.78) 0%,rgb(0, 255, 243) 100%); padding-top: 40px;">
  <div id="contact" >
  <div class="container" >

                     <h2 class="title-a"><center>Contactanos</center></h2>
                    
            
  <div class="row">
     <div class="col-md-12" data-aos="fade-up" data-aos-duration="800">
         <p style="color: white;">Si quieres conocer mas sobre Healthu no dudes en contactarnos a traves de nuestro formulario de contacto, ingresa tu solicitud y nuestro equipo se pondra en contacto contigo para responder cualquier inquietud.</p>
         
     </div>
  </div>
     <div class="container py-5">
      <div class="row" data-aos="fade-up" data-aos-duration="800">
          <div class="col-md-12">
              <form>
                  <div class="form-group row">
                      <div class="col-sm-6">
                          <input type="text" class="form-control" placeholder="Tu Nombre" required>
                      </div>
                          <div class="col-sm-6">
                          <input type="text" class="form-control" placeholder="Tu Email" required>
                      </div>
                  </div>
                  <div class="form-group row">
                      <div class="col-xs-12 col-md-12">
                          <textarea type="text" class="form-control" placeholder="Tu Comentario" rows="6" required></textarea>
                      </div>
                  </div>
                  <button type="submit" class="btn btn-primary px-4">Enviar datos</button>
              </form>
          </div>
      </div>
     </div>
  </div>

  <!--div class="container" >
   <div class="Subscribe" data-aos="fade-up" >
        <div class="row main" >
        <div class="col-lg-6 col-sm-6 col1">
           <div class="heading">
              <h2>Subscribete para recibir noticias</h2>
           </div>
        </div>
        <div class="col-lg-6 col-sm-6 col1">
           <form>
              <div class="input-group">
                 <input name="email" id="email" type="email" placeholder="Ingresa tu Email" required>
                 <button class="btn btn-info" type="submit">Subscribete</button>
              </div>
           </form>
         </div>
        </div>
    </div>
  </div-->
</div>
</section>
<!-- Footer -->
<footer class="page-footer">
  <a href="#" class="back-to-top" style="display: inline;"><i class="fa fa-chevron-up"></i></a>
  <div class="gradient"></div>
    <!-- Footer Links -->
    <div class="container text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-lg-5 col-md-12 col-12 content">

          <!-- Content -->
          <a href="index.html"><img src="{{ asset('assets/img/img-landing/logos.png')}}" alt="footer-logo" width="20%"></a>
          <center><p>Healthu un estilo de vida.</p></center>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-3 col-md-4 mx-auto">

          <!-- Links -->
          <h5 class="mt-3 mb-3">Sitio de navegacion</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#index">Home</a>
            </li>
            <li>
              <a href="#funny">Healthu</a>
            </li>
          
            <li>
              <a href="#ours">QUIENES SOMOS</a>
            </li>
            <li>
              <a href="#contacto">CONTACTANOS</a>
            </li>
             <li>
              <a href="{{ url('/login') }}">Iniciar Sesion</a>
            </li>
            <li>
              <a href="{{ url('/register') }}">Registrarse</a>
            </li>
           
          </ul>

        </div>
      

        <!-- Grid column -->
        <div class="col-lg-3 col-md-4 mx-auto">


          <!-- Links -->
          <h5 class="mt-3 mb-3">Politicas y Terminos</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!">Terminos y condiciones</a>
            </li>
            <li>
              <a href="#!">Politicas </a>
            </li>
        
          </ul>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->
    <br/>
    <!-- Copyright -->
    <div class="footer-copyright text-center">
       <p>© 2020, All Rights Reserved. <a href=#>Healthu</a> , Diseñado por <a href="">Healthu</a></p>
    </div>
    <!-- Copyright -->

</footer>
@endsection
