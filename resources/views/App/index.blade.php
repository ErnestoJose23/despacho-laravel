@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-light" id="pb-navbar">
      <div class="container">
        <a class="navbar-brand" href="#">Noelia Custodio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-navbar" aria-controls="probootstrap-navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="ion-navicon"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="probootstrap-navbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="#section-home">INICIO</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-about">SOBRE MI</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-practicing-areas">AREAS</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-contact">CONTACTO</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <section class="pb_cover_v1 text-left cover-bg-black cover-bg-opacity-4" style="background-image: url(assets/images/slide.jpg);     background-position: inherit;" id="section-home">
      <div class="container">
        <div class="row align-items-center justify-content-end">
          <div class="col-md-6  order-md-1">

            <h2 class="heading mb-3">Lorem ipsum</h2>
            <div class="sub-heading"><p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <p><a href="#section-contact" role="button" class="btn smoothscroll pb_outline-light btn-xl pb_font-13 p-4 rounded-0 pb_letter-spacing-2">Reserva una cita</a></p>
            </div>
            
          </div>  
        </div>
      </div>
      
    </section>
    <!-- END section -->
    
    
    <section class="pb_section pb_section_v1" data-section="about" id="section-about">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 pr-md-5 pr-sm-0">
            <h2 class="mt-0 heading-border-top mb-3 font-weight-normal">Sobre mí</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non porta diam. Vestibulum semper porttitor egestas. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse potenti. Vivamus ut eros eget neque ultrices imperdiet. Donec aliquam orci magna, at sollicitudin libero efficitur eu. </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non porta diam. Vestibulum semper porttitor egestas. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse potenti. Vivamus ut eros eget neque ultrices imperdiet. </p>
          </div>
          <div class="col-lg-7">
            <div class="images">
              <img class="img1 img-fluid" src="assets/images/600x450_img_2.jpg" alt="free Template by uicookies.com">
              <img class="img2" src="assets/images/800x500_img_1.jpg" alt="free Template by uicookies.com">
            </div>
          </div>
          
        </div>
      </div>  
    </section>
    <!-- END section -->

    
    <section class="pb_section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md">
            <div class="media pb_media_v2 d-block text-center mb-3">
              <div class="icon border border-gray rounded-circle d-block mr-3 display-4 mx-auto mb-4"><i class="flaticon text-secondary flaticon-jury"></i></div>
              <div class="media-body">
                <h3 class="mt-0 pb_font-20">Group of Lawyers</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="media pb_media_v2 d-block text-center  mb-3">
              <div class="icon border border-gray rounded-circle d-flex mr-3 display-4 mx-auto mb-4"><i class="flaticon text-secondary flaticon-law"></i></div>
              <div class="media-body">
                <h3 class="mt-0 pb_font-20">No One is Above The Law</h3>
                <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="media pb_media_v2 d-block text-center  mb-3">
              <div class="icon border border-gray rounded-circle d-flex mr-3 display-4 mx-auto mb-4"><i class="flaticon text-secondary flaticon-courthouse"></i></div>
              <div class="media-body">
                <h3 class="mt-0 pb_font-20">Hall of Justice</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
      
    <section class="pb_sm_py_cover text-center cover-bg-black cover-bg-opacity-4" style="background-image: url(assets/images/1900x1200_img_3.jpg)">
      <div class="container">

        <div class="row align-items-center">
          <div class="col-md-12">
            <h2 class="heading mb-3 titulo">Reserva una cita</h2>
            <p class="sub-heading mb-5 pb_color-light-opacity-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non porta diam. </p>
            <p><a href="#section-contact" role="button" class="btn smoothscroll pb_outline-light p-3 rounded-0 pb_font-13 pb_letter-spacing-2">Get Started</a></p>
          </div>  
        </div>

      </div>
    </section>
    <!-- END section -->
    <section class="pb_section pb_bg-half" data-section="practicing-areas" id="section-practicing-areas">
      <div class="container">
        <div class="row justify-content-md-center text-center mb-5">
          <div class="col-lg-7">
            <h2 class="mt-0 heading-border-top font-weight-normal">En que estas especializada</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">

            <div class="single-item pb_slide_v2">
              <div>
                <div class="d-lg-flex d-md-block slide_content">
                  <div class="pb_content-media" style="background-image: url(assets/images/1900x1200_img_4.jpg);"></div>
                  <div class="slide_content-text text-center">
                    <div class="pb_icon_v1"><i class="flaticon text-primary flaticon-handcuffs"></i></div>
                    <h3 class="font-weight-normal mt-0 mb-4">Criminal</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                  </div>
                </div>
              </div>

              <div>
                <div class="d-lg-flex d-md-block slide_content">
                  <div class="pb_content-media" style="background-image: url(assets/images/1900x1200_img_4.jpg);"></div>
                  <div class="slide_content-text text-center">
                    <div class="pb_icon_v1"><i class="flaticon text-primary flaticon-wallet"></i></div>
                    <h3 class="font-weight-normal mt-0 mb-4">blabla</h3>
                    <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>

                    <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                  </div>
                </div>
              </div>

              <div>
                <div class="d-lg-flex d-md-block slide_content">
                  <div class="pb_content-media" style="background-image: url(assets/images/1900x1200_img_4.jpg);"></div>
                  <div class="slide_content-text text-center">
                    <div class="pb_icon_v1"><i class="flaticon text-primary flaticon-computer-security"></i></div>
                    <h3 class="font-weight-normal mt-0 mb-4">Lorem Ipsum</h3>
                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. And if she hasn’t been rewritten, then they are still using her.</p>
                    <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
                  </div>
                </div>
              </div>

              <div>
                <div class="d-lg-flex d-md-block slide_content">
                  <div class="pb_content-media" style="background-image: url(assets/images/1900x1200_img_4.jpg);"></div>
                  <div class="slide_content-text text-center">
                    <div class="pb_icon_v1"><i class="flaticon text-primary flaticon-courthouse"></i></div>
                    <h3 class="font-weight-normal mt-0 mb-4">Lorem Ipsum</h3>
                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. And if she hasn’t been rewritten, then they are still using her. Original article: Web Designer Notebook | Text from Dummy Text Generator</p>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. And if she hasn’t been rewritten, then they are still using her.</p>
                  </div>
                </div>
              </div>

              <div>
                <div class="d-lg-flex d-md-block slide_content">
                  <div class="pb_content-media" style="background-image: url(assets/images/1900x1200_img_4.jpg);"></div>
                  <div class="slide_content-text text-center">
                    <div class="pb_icon_v1"><i class="flaticon text-primary flaticon-jury"></i></div>
                    <h3 class="font-weight-normal mt-0 mb-4">Lorem Ipsum</h3>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. And if she hasn’t been rewritten, then they are still using her.</p>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>
      </div>  
    </section>
 
    
  


    <section class="pb_section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg">

            <div class="media pb_media_v1 mb-5">
              <div class="icon border border-gray rounded-circle d-flex mr-3 display-4 text-primary"><i class="flaticon flaticon-jury"></i></div>
              <div class="media-body">
                <h3 class="mt-0 pb_font-17">Group of Lawyers</h3>
                <p class="pb_font-14">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>

          </div>
          <div class="col-lg">
            <div class="media pb_media_v1 mb-5">
              <div class="icon border border-gray rounded-circle d-flex mr-3 display-4 text-primary"><i class="flaticon flaticon-law"></i></div>
              <div class="media-body">
                <h3 class="mt-0 pb_font-17">No One is Above The Law</h3>
                <p class="pb_font-14">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              </div>
            </div>
          </div>
          <div class="col-lg">
            <div class="media pb_media_v1 mb-5">
              <div class="icon border border-gray rounded-circle d-flex mr-3 display-4 text-primary"><i class="flaticon flaticon-courthouse"></i></div>
              <div class="media-body">
                <h3 class="mt-0 pb_font-17">Hall of Justice</h3>
                <p class="pb_font-14">It is a paradisematic country, in which roasted parts of sentences fly into your mouth decided to leave for the far World of Grammar.</p>
              </div>
            </div>
          </div>
          <div class="w-100"></div>
          <div class="col-lg">

            <div class="media pb_media_v1 mb-5">
              <div class="icon border border-gray rounded-circle d-flex mr-3 display-4 text-primary"><i class="flaticon flaticon-jury"></i></div>
              <div class="media-body">
                <h3 class="mt-0 pb_font-17">Family Law</h3>
                <p class="pb_font-14">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>

          </div>
          <div class="col-lg">
            <div class="media pb_media_v1 mb-5">
              <div class="icon border border-gray rounded-circle d-flex mr-3 display-4 text-primary"><i class="flaticon flaticon-courthouse"></i></div>
              <div class="media-body">
                <h3 class="mt-0 pb_font-17">No One is Above The Law</h3>
                <p class="pb_font-14">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              </div>
            </div>
          </div>
          <div class="col-lg">
            <div class="media pb_media_v1 mb-5">
              
              <div class="icon border border-gray rounded-circle d-flex mr-3 display-4 text-primary"><i class="flaticon flaticon-law"></i></div>
              <div class="media-body">
                <h3 class="mt-0 pb_font-17">Hall of Justice</h3>
                <p class="pb_font-14">It is a paradisematic country, in which roasted parts of sentences fly into your mouth decided to leave for the far World of Grammar.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    
    
    <section class="pb_section" data-section="contact" id="section-contact">
      <div class="container">

        <div class="row justify-content-md-center text-center">
          <div class="col-lg-7">
            <h2 class="mt-0 heading-border-top font-weight-normal">Ponte en contacto</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
          </div>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Dirección</h3>
              <address>C/ Maldonado.... Los Barrios, Cádiz</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Teléfono</h3>
              <p><a href="tel:+155895548855" style="color: black;">+1 5589 55488 55</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com" style="color: black;">info@example.com</a></p>
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
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="8" data-rule="required" data-msg="Escribe algo..." placeholder="Mensaje"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><div class="form-group">
              <input type="submit" class="btn pb_outline-dark pb_font-13 pb_letter-spacing-2 p-3 rounded-0" value="Enviar">
            </div></div>
          </form>
        </div>
        
      </div>

    </section>
    
    <!-- END section -->

@endsection