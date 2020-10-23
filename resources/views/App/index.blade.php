@extends('layouts.app')

@section('content')
  <nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-light" id="pb-navbar">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="assets/images/Logo-Blanco.png" alt="" class="logo Logo-Blanco">
        <img src="assets/images/Logo-Color.png" alt=""  class="logo Logo-Color">
      
      <a class="navbar-brand" href="#">Noelia Custodio</a>
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-navbar" aria-controls="probootstrap-navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span><i class="ion-navicon"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="probootstrap-navbar">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a class="nav-link" href="#inicio">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">Sobre mí</a></li>
          <li class="nav-item"><a class="nav-link" href="#areas">Servicios</a></li>
          <li class="nav-item"><a class="nav-link" href="#galeria">Galería</a></li>
          <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
        </ul>
      </div>
    </div>
  </nav>

    <section class="pb_cover_v1 text-left cover-bg-black cover-bg-opacity-4" style="background-image: url(assets/images/slide.jpg);     background-position: inherit;" id="inicio">
      <div class="container">
        
        <div class="row align-items-center justify-content-end">
          <div class="col-md-6  order-md-1">
           

            <h2 class="heading mb-3">Abogada Noelia Custodio</h2>

            
          </div>  
        </div>
      </div>
      
    </section>
    
    
    <section class="pb_section pb_section_v1" data-section="about" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 pr-md-6 pr-sm-0 mr-3">
            <h2 class="mt-0 heading-border-top mb-3 font-weight-normal ">Sobre mí</h2>
            <p class="about_me">Licenciada en Derecho por la Universidad de Cádiz (UCA), abogada ejerciente del Ilustre Colegio
              de Abogados de Cádiz desde el 2016,
              realizé el Curso de Práctica Jurídica y Forense.
            </p>
            <p>
              Especialidad en ramas : Derecho de Familia, civil, penal, menores, Violencia de genero y Extranjeria
              abogada en turno de oficio desde 2018.</p>
          </div>
          <div class="col-lg-6 ">
            <div class="images aboutUsImage">
              <img class="img1 img-fluid rounded" src="assets/images/AboutUs.jpg" alt="About us" width="70%">
              {{--<img class="img2" src="assets/images/Tarjeta.jpg" alt="free Template by uicookies.com" width="85%">--}}
            </div>
          </div>
          
        </div>
      </div>  
    </section>

    
    
      
    <section class="pb_sm_py_cover text-center cover-bg-black cover-bg-opacity-4" style="background-image: url(assets/images/Bg.jpg)">
      <div class="container">

        <div class="row align-items-center">
          <div class="col-md-12">
            <h2 class="heading mb-3 titulo">Cuéntanos tu caso</h2>
            <p class="sub-heading mb-5 pb_color-light-opacity-8">Solicita una cita precia. </p>
            <p><a href="#contacto" role="button" class="btn smoothscroll pb_outline-light p-3 rounded-0 pb_font-13 pb_letter-spacing-2">Reservar cita</a></p>
          </div>  
        </div>

      </div>
    </section>
    <!-- END section -->
    <section class="pb_section bg-light " data-section="practicing-areas" id="areas">
      <div class="container">
        <div class="row justify-content-md-center text-center mb-5">
          <div class="col-lg-7">
            <h2 class="mt-0 heading-border-top font-weight-normal">Servicios</h2>
            <p></p>
          </div>
        </div>
        <div class="row">
          <div class="col-md">
  
            <div class="media pb_media_v2 d-block text-center mb-3">
              <div class="icon border border-gray rounded-circle d-block mr-3 display-4 mx-auto mb-4"><img src="assets/images/pluma.png" width="40px"/></div>
              <div class="media-body">
                <h3 class="mt-0 pb_font-20">Civil</h3>
                <p>Todas aquellas cuestiones relacionadas con la persona y sus
                  derechos, contratos y obligaciones...</p>
              </div>
            </div>
  
          </div>
          <div class="col-md">
            <div class="media pb_media_v2 d-block text-center mb-3">
              <div class="icon border border-gray rounded-circle d-block mr-3 display-4 mx-auto mb-4"><i class="flaticon text-secondary flaticon-handcuffs"></i></div>
              <div class="media-body">
                <h3 class="mt-0 pb_font-20">Penal</h3>
                <p>Defensa a cualquier persona o empresa acusada de algún delito ante los
                  juzgados y tribunales de justicia.</p>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="media pb_media_v2 d-block text-center  mb-3">
              <div class="icon border border-gray rounded-circle d-flex mr-3 display-4 mx-auto mb-4"><img src="assets/images/divorcio.png" width="40px" height="40px" class="area-icon" /></i></div>
              <div class="media-body">
                <h3 class="mt-0 pb_font-20">Familia</h3>
                <p>Separaciones, divorcios, custodia compartida, etc...</p>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="media pb_media_v2 d-block text-center  mb-3">
              <div class="icon border border-gray rounded-circle d-flex mr-3 display-4 mx-auto mb-4"><i class="flaticon text-secondary flaticon-courthouse"></i></div>
              <div class="media-body">
                <h3 class="mt-0 pb_font-20">Violencia de género</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
        </div>
        <p class="button-info"><a href="{{url('/areas')}}" role="button" class="btn pb_outline-dark pb_font-13 pb_letter-spacing-2 p-3 rounded-0 ">Más información</a></p>
      </div>

    </section>
    <section class="pb_section"  id="galeria">
      <div class="container">
        <div class="row justify-content-md-center text-center mb-5">
          <div class="col-lg-7">
            <h2 class="mt-0 heading-border-top font-weight-normal">Galeria</h2>
          </div>
        </div>
        <div class="gallery">
          <div class="row">
            <img src="assets/images/Miniature/Tarjeta.jpg" alt="" width="100%" height="auto" class="img-fluid  gallery-img col-12 col-md-6 rounded" />
            <img src="assets/images/Miniature/Exterior.jpg" alt="" width="100%" height="auto" class="img-fluid  gallery-img col-12 col-md-6  rounded" />
          </div>
          <div class="row">
            <img id="ImageMobile" src="assets/images/Miniature/Interior2.jpg" alt="" width="100%" height="auto" class="gallery-img col-12  rounded" />
           
          </div>
        </div>
      </div>
      <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body">
            </div>
          </div>
        </div>
      </div>
    </section> 
    <section class="pb_section bg-light" data-section="contact" id="contacto" >
      <div class="container">
        @if(Session::has('success'))
          <div class="alert alert-success ">
              {{Session::get('success')}}
          </div>
          <script> 
            $(document).ready(function() { 
              document.getElementById( 'contacto' ).scrollIntoView();
              window.setTimeout( function () { top(); }, 2000 );
            }); 
          </script> 
         @endif
        <div class="row justify-content-md-center text-center ">
          <div class="col-lg-7">
            <h2 class="mt-0 heading-border-top font-weight-normal">Ponte en contacto</h2>
            <p></p>
          </div>
        </div>
        <div class="row contact-info">
          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Dirección</h3>
              <p>C/ Maldonado, 25, 11370 Los Barrios, Cádiz</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Teléfono</h3>
              <p><a href="tel:626072598" style="color: black;">626 07 25 98</a></p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:noelia.custodiogomez@gmail.com" style="color: black;">noelia.custodiogomez@gmail.com</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="container mb-4">
        <iframe class="border-w-color" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d782.1566466985914!2d-5.490767676484406!3d36.183530311192854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2ses!4v1590489784955!5m2!1ses!2ses" width="100%" height="380"  allowfullscreen></iframe>
      </div>
      <div class="container">
        <div class="form">
          <div id="errormessage"></div>
          <form action="{{ route('contact.store') }}" method="post" role="form" class="contactForm">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control bg-light" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required/>
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control bg-light" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" required/>
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
              <input type="text" class="form-control bg-light" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required/>
              <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="text" class="form-control bg-light" name="phone" id="phone" placeholder="Telefono (Opcional)" data-rule="phone" data-msg="Please enter a valid phone" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <textarea class="form-control bg-light" name="message" rows="8" data-rule="required" data-msg="Escribe algo..." placeholder="Mensaje" required></textarea>
              <div class="validation"></div>
            </div>
            <label><input type="checkbox" name="acceptance-881" value="1" required><span class="pl-2">He leído y acepto la <a href="{{url('/politica')}}" target="_blank">Política de Privacidad</a>.</span></label>
            <div class="text-center"><div class="form-group">
              <input type="submit" class="btn pb_outline-dark pb_font-13 pb_letter-spacing-2 p-3 rounded-0" value="Enviar">
            </div></div>
            
          </form>
        </div>
        
      </div>

    </section>
    <div class="alert text-center cookiealert" role="alert">
      Utilizamos cookies para asegurar que damos la mejor experiencia al usuario en nuestro sitio web. Si continúa utilizando este sitio asumiremos que está de acuerdo.
     
        <button type="button" class="btn btn-primary btn-sm acceptcookies">
            OK
        </button>
    </div>

@endsection