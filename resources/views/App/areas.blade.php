@extends('layouts.app')

@section('content')

<section class="pb_cover_v1 text-left cover-bg-black cover-bg-opacity-4" style="background-image: url(assets/images/slide.jpg);     background-position: inherit;" id="inicio">
    <div class="container">
      
      <div class="row align-items-center justify-content-end">
        <div class="col-md-6  order-md-1">
         

          <h2 class="heading mb-3">Areas</h2>
          <div class="sub-heading"><p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
          </div>
          
        </div>  
      </div>
    </div>
    
  </section>

<section class="pb_section pb_section_v1" >
      <div class="row">
        <div class="col-1"></div>
        <div class="col-5 areas_section">
          <h2 class="mt-0 heading-border-top mb-3 font-weight-normal ">Derecho Civil</h2>
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
        <div class="col-6 ">
          
            <img src="assets/images/Civil.jpg" alt="derecho-civil" class="areas-img"/>
          
        </div>
        
      </div>

  </section>

  <section class="pb_section pb_section_v1" >
    <div class="row">
      <div class="col-6 ">
        
        <img src="assets/images/Civil.jpg" alt="derecho-civil" class="areas-img"/>
      
    </div>
      <div class="col-5 areas_section">
        <h2 class="mt-0 heading-border-top mb-3 font-weight-normal ">Derecho Penal</h2>
        <p>El Derecho Civil es el referido a todas aquellas cuestiones relacionadas con la persona y sus
          derechos, contratos y obligaciones, reclamaciones de renta, resolución de
          arrendamientos, derecho de familia , sucesiones y muchas más cuestiones donde podemos
          asesorarte para que tomes las decisiones correctas y que tu litigio siempre salga favorable para
          ti prestando unos servicios totalmente profesional y cualificado, con un trato personal, con total
          confidencialidad y una dedicación absoluta.</p>
      </div>

      
    </div>

</section>

@endsection