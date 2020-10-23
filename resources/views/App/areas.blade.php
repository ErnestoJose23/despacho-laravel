@extends('layouts.app')

@section('content')

<nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-light" id="pb-navbar">
  <div class="container">
    <a class="navbar-brand" href="/">
      <img src="assets/images/Logo-Blanco.png" alt="" class="logo Logo-Blanco">
      <img src="assets/images/Logo-Color.png" alt=""  class="logo Logo-Color">
    </a>
    <a class="navbar-brand" href="/">Noelia Custodio</a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-navbar" aria-controls="probootstrap-navbar" aria-expanded="false" aria-label="Toggle navigation">
      <span><i class="ion-navicon"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="probootstrap-navbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link" href="#civil">Civil</a></li>
        <li class="nav-item"><a class="nav-link" href="#penal">Penal</a></li>
        <li class="nav-item"><a class="nav-link" href="#familia">Familia</a></li>
        <li class="nav-item"><a class="nav-link" href="#vgenero">Violencia de género</a></li>
      </ul>
    </div>
  </div>
</nav>

<section class="pb_cover_v1 text-left cover-bg-black cover-bg-opacity-4" style="background-image: url(assets/images/slide-areas.jpg);     background-position: inherit;" id="inicio">
    <div class="container">
      
      <div class="row align-items-center justify-content-end">
        <div class="col-md-6  order-md-1">
         

          <h2 class="heading mb-3">Areas</h2>
          <div class="sub-heading"><p class="mb-5">En esta sección se muestran las areas donde ofrecemos. </p>
          </div>
          
        </div>  
      </div>
    </div>
    
  </section>

  <section class="pb_section bg-light " id="areas-scroll">
    <div class="container">
   
      <div class="row">
        <div class="col-md">
          <a href="#civil" class="areas-a">
          <div class="media pb_media_v2 d-block text-center mb-3">
            <div class="icon border border-gray rounded-circle d-block mr-3 display-4 mx-auto mb-4"><img src="assets/images/pluma.png" width="40px"/></div>
            <div class="media-body">
              <h3 class="mt-0 pb_font-20">Civil</h3>
              <p>Todas aquellas cuestiones relacionadas con la persona y sus
                derechos, contratos y obligaciones...</p>
            </div>
          </div>
        </a>

        </div>
        <div class="col-md">
          <a href="#penal" class="areas-a">
          <div class="media pb_media_v2 d-block text-center mb-3">
            <div class="icon border border-gray rounded-circle d-block mr-3 display-4 mx-auto mb-4"><i class="flaticon text-secondary flaticon-handcuffs"></i></div>
            <div class="media-body">
              <h3 class="mt-0 pb_font-20">Penal</h3>
              <p>Defensa a cualquier persona o empresa acusada de algún delito ante los
                juzgados y tribunales de justicia.</p>
            </div>
          </div>
          </a>
        </div>
        <div class="col-md">
          <a href="#familia" class="areas-a">
          <div class="media pb_media_v2 d-block text-center  mb-3">
            <div class="icon border border-gray rounded-circle d-flex mr-3 display-4 mx-auto mb-4"><img src="assets/images/divorcio.png" width="40px" height="40px" class="area-icon" /></i></div>
            <div class="media-body">
              <h3 class="mt-0 pb_font-20">Familia</h3>
              <p>Separaciones, divorcios, custodia compartida, etc...</p>
            </div>
          </div>
          </a>
        </div>
        <div class="col-md">
          <a href="#vgenero" class="areas-a">
          <div class="media pb_media_v2 d-block text-center  mb-3">
            <div class="icon border border-gray rounded-circle d-flex mr-3 display-4 mx-auto mb-4"><i class="flaticon text-secondary flaticon-courthouse"></i></div>
            <div class="media-body">
              <h3 class="mt-0 pb_font-20">Violencia de género</h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
          </div>
          </a>
        </div>
      </div>
    </div>

  </section>

  <section class="pb_sm_py_cover text-center cover-bg-black cover-bg-opacity-4" style="background-image: url(assets/images/Civil.png)" id="civil">
    <div class="container">

      <div class="row align-items-center">
        <div class="col-md-12">
          <h2 class="heading mb-3 titulo">Derecho Civil</h2>
      </div>

    </div>
  </section>

  

  <section class="pb_section pb_section_v1" data-section="civil" >
    <div class="container">
      <div class="row">
        <div class="col-12 areas_section">
         
          <p>El Derecho Civil es el referido a todas aquellas cuestiones relacionadas con la persona y sus
            derechos, contratos y obligaciones, reclamaciones de renta, resolución de
            arrendamientos, derecho de familia , sucesiones y muchas más cuestiones donde podemos
            asesorarte para que tomes las decisiones correctas y que tu litigio siempre salga favorable para
            ti prestando unos servicios totalmente profesional y cualificado, con un trato personal, con total
            confidencialidad y una dedicación absoluta.</p>
            <ul>
              <li>Contratos de compraventa.</li>
              <li>Reclamaciones civiles provenientes de accidentes de circulación (lesiones, fallecimientos,
                incapacidades).</li>
              <li>Comunidad de propietarios. Monitorios por impago
                Derechos Fundamentales (infracción del derecho al honor, intimidad y propia
                imagen).</li>
              <li>Derecho Sucesorio (declaración de herederos, adjudicación y partición del
                caudal hereditario, informes de testamentaría).</li>
              <li>Arrendamientos.</li>
              <li>Desahucios.</li>
              <li>Obligaciones y contratos.</li>
              <li>Responsabilidad civil y derecho de daños.</li>
              <li>Defensa de los consumidores.</li>
              
            </ul>
        </div>
        
      </div>
    </div>

  </section>

  <section class="pb_sm_py_cover text-center cover-bg-black cover-bg-opacity-4" style="background-image: url(assets/images/Penal.png)" id="penal">
    <div class="container">

      <div class="row align-items-center">
        <div class="col-md-12">
          <h2 class="heading mb-3 titulo">Derecho Penal</h2>
      </div>

    </div>
  </section>

  

  <section class="pb_section pb_section_v1" data-section="penal" >
    <div class="container">
      <div class="row">
        <div class="col-12 areas_section">
         
          <p>En derecho penal se defenderá a cualquier persona o empresa acusada de algún delito ante los
            juzgados y tribunales de justicia garantizándote la mejor defensa de tu caso y un seguimiento
            constante de la evolución del procedimiento.</p>
            <p>Disciplinas en las que prestamos nuestros servicios:</p>
            <ul>
              <li>Delitos económicos: apropiación indebida, estafa, falsedades, delitos societarios, blanqueo de capitales,
                insolvencia punible, falsificaciones, etc.</li>
              <li>Delitos contra la persona: lesiones, homicidio, asesinato, etc.</li>
              <li>Delitos de tráfico: alcoholemias, exceso de velocidad, conducción sin carné, desobediencia a la autoridad,
                conducción temeraria y omisión del deber de socorro.</li>
              <li>Delitos contra el patrimonio: robo, hurto, receptación, daños, defraudaciones, etc.</li>
              <li>Delitos contra la salud pública: tráfico de estupefacientes.</li>
              <li>Asistencia al detenido.</li>
            </ul>
              
            </ul>
        </div>
        
      </div>
    </div>

  </section>

  <section class="pb_sm_py_cover text-center cover-bg-black cover-bg-opacity-4" style="background-image: url(assets/images/Familia.png)" id="familia">
    <div class="container">

      <div class="row align-items-center">
        <div class="col-md-12">
          <h2 class="heading mb-3 titulo">Familia</h2>
      </div>

    </div>
  </section>


  <section class="pb_section pb_section_v1" data-section="familia" >
    <div class="container">
      <div class="row">
        <div class="col-12 areas_section">
          <p>Asesoramos y defendemos a nuestros clientes cuando deseen extinguir el vínculo
            matrimonial, ya sea de mutuo acuerdo o contencioso, así como las posibles
            modificaciones de medidas. Le prestamos un asesoramiento completo en todo lo
            relacionado con esta materia, informándole de todos los derechos y obligaciones que le
            corresponden y aconsejándole cual sería la forma más adecuada de proceder en cada
            caso.</p>
            <ul>
              <li>Separaciones, custodia compartida, divorcios, pensión alimenticia.</li>
              <li>Ejecución de sentencias de divorcio, separación y guarda y custodia.</li>
              <li>Convenios de separación y divorcio de mutuo acuerdo.</li>
              <li>Reclamación de pensiones impagadas, alimentos, compensatorias.</li>
              <li>Liquidación régimen económico matrimonial.</li>
              <li>Modificación de medidas de sentencias de divorcio, separación y guarda y
                custodia.</li>
              <li>Reconciliación de los cónyuges.</li>
              <li>Reclamación de derechos de visitas a los abuelos.</li>
              <li>Regulación de parejas de hecho.</li>
              <li>Procedimientos de menores, (medidas de protección, oposiciones a
                declaraciones de desamparo y adopciones).</li>
              <li>Procesos de filiación.</li>
              <li>Capitulaciones matrimoniales (separaciones de bienes).</li>
            </ul>
        </div>
        
      </div>
    </div>

  </section>

  <section class="pb_sm_py_cover text-center cover-bg-black cover-bg-opacity-4" style="background-image: url(assets/images/vgenero.png)" id="vgenero">
    <div class="container">

      <div class="row align-items-center">
        <div class="col-md-12">
          <h2 class="heading mb-3 titulo">Violencia de género</h2>
      </div>

    </div>
  </section>


  <section class="pb_section pb_section_v1" data-section="vgenero" >
    <div class="container">
      <div class="row">
        <div class="col-12 areas_section">
          <ul>
            <li>Lesiones, amenazas e injurias.</li>
            <li>Malos tratos psicológicos.</li>
            <li>Orden de alejamiento.</li>
            <li>Divorcio, guarda y custodia de menores.</li>
            <li>Reclamación de pensiones.</li>
            <li>Quebrantamiento de condena.</li>
            <li>Asistencia al detenido en sede policial y judicial.</li>
            <li>Juicios rápidos.</li>
          </ul>
        </div>
        
      </div>
    </div>

  </section>
  
@endsection