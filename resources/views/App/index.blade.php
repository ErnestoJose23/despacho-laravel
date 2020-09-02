@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-light" id="pb-navbar">
      <div class="container">
        <img src="assets/images/Logo-Blanco.png" alt="" class="logo Logo-Blanco">
        <img src="assets/images/Logo-Color.png" alt=""  class="logo Logo-Color">
        <a class="navbar-brand" href="#">Noelia Custodio</a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-navbar" aria-controls="probootstrap-navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="ion-navicon"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="probootstrap-navbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="#inicio">INICIO</a></li>
            <li class="nav-item"><a class="nav-link" href="#about">SOBRE MI</a></li>
            <li class="nav-item"><a class="nav-link" href="#areas">AREAS</a></li>
            <li class="nav-item"><a class="nav-link" href="#contacto">CONTACTO</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <section class="pb_cover_v1 text-left cover-bg-black cover-bg-opacity-4" style="background-image: url(assets/images/slide.jpg);     background-position: inherit;" id="inicio">
      <div class="container">
        <div class="row align-items-center justify-content-end">
          <div class="col-md-6  order-md-1">

            <h2 class="heading mb-3">Lorem ipsum</h2>
            <div class="sub-heading"><p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <p><a href="#contacto" role="button" class="btn smoothscroll pb_outline-light btn-xl pb_font-13 p-4 rounded-0 pb_letter-spacing-2">Reserva una cita</a></p>
            </div>
            
          </div>  
        </div>
      </div>
      
    </section>
    <!-- END section -->
    
    
    <section class="pb_section pb_section_v1" data-section="about" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 pr-md-5 pr-sm-0 mr-3">
            <h2 class="mt-0 heading-border-top mb-3 font-weight-normal">Sobre mí</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non porta diam. Vestibulum semper porttitor egestas. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse potenti. Vivamus ut eros eget neque ultrices imperdiet. Donec aliquam orci magna, at sollicitudin libero efficitur eu. </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non porta diam. Vestibulum semper porttitor egestas. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse potenti. Vivamus ut eros eget neque ultrices imperdiet. </p>
          </div>
          <div class="col-lg-6 ">
            <div class="images aboutUsImage">
              <img class="img1 img-fluid rounded" src="assets/images/AboutUs.jpg" alt="About us" width="85%">
              {{--<img class="img2" src="assets/images/Tarjeta.jpg" alt="free Template by uicookies.com" width="85%">--}}
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
      
    <section class="pb_sm_py_cover text-center cover-bg-black cover-bg-opacity-4" style="background-image: url(assets/images/Bg.jpg)">
      <div class="container">

        <div class="row align-items-center">
          <div class="col-md-12">
            <h2 class="heading mb-3 titulo">Reserva una cita</h2>
            <p class="sub-heading mb-5 pb_color-light-opacity-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non porta diam. </p>
            <p><a href="#contacto" role="button" class="btn smoothscroll pb_outline-light p-3 rounded-0 pb_font-13 pb_letter-spacing-2">Get Started</a></p>
          </div>  
        </div>

      </div>
    </section>
    <!-- END section -->
    <section class="pb_section pb_bg-half" data-section="practicing-areas" id="areas">
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
                    <div class="pb_icon_v1"><image src="/assets/images/Divorce.png" class="icono-Areas"></image></div>
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
 
    
    <section class="pb_section "  id="galeria">
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
  
      <!-- partial -->
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
      <script>

      if( isMobile() || (screen.width <= 1024)) {
            $(".gallery-img").unbind('click');
        } 
      
      var mediaqueryList = window.matchMedia("(min-width: 1024px)");
      
      $(document).ready(function () {
        $(".gallery-img").click(function(){
          var t = $(this).attr("src");
          var res = t.replace("Miniature", "Big");
          if(mediaqueryList.matches) {
            $(".modal-body").html("<img src='"+res+"' class='modal-img'>");
            $("#myModal").modal();
          }
        });
      });

      function isMobile() {
        var isMobile = false; //initiate as false
        // device detection
        if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) isMobile = true;
        return isMobile;
      }
      
      $(window).resize(function(e){
        if($(window).width() < 768) {
        console.log($(window).width());
          $("#ImageMobile").each(function() {
            $(this).attr("src", "assets/images/Miniature/Interior.jpg");
                      });
                  }   
      });
    </script>
   
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

    
    
    <section class="pb_section" data-section="contact" id="contacto">
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