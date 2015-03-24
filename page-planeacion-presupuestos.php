<?php get_header(); ?>

<!-- page -->
    <div id="page">
       <div class="container" >
      
        <h2><img width="32" src="<?php bloginfo('template_url' ); ?>/library/img/01.png" alt=""> PLANEACIÓN DE PRESUPUESTOS Y PROGRAMACIÓN DE OBRA</h2>
        
        <div class="row">
          
          <div class="five columns">
            <img class="twelve columns" src="<?php echo of_get_option( 'img-pla-pres', 'no entry' ); ?>" alt="">
          </div>

          <div class="six columns">
            <br>
            <p><?php echo of_get_option( 'txt-pla-pres', 'no entry' ); ?></p>
          </div>
        </div>
        <br>
         <p>PRESUPUESTOS DE COSTOS:</p>
         <div class="row numbers">
           <div class="one columns">
             <span id="button-icon">1</span>
             <br><br>
             <span id="button-icon">2</span>
              <br><br>
             <span id="button-icon">3</span>
              <br><br>
             <span id="button-icon">4</span>
           </div>
           <div class="five columns spacing">
            <p> Estimativo preliminar de costos.</p>
            <p> Revisión, valoración o realización Cantidades de obra.</p>
            <p> Análisis Precios Unitarios.</p>
            <p> Cotizaciones y listado de precios de materiales.</p>
           </div>

           <div class="one columns">
             <span id="button-icon">5</span>
             <br><br>
             <span id="button-icon">6</span>
             <br><br>
             <span id="button-icon">7</span>
           </div>
           <div class="five columns spacing">
            <p> Revisión y validación de presupuestos de obra.</p>
            <p> Presupuesto definitivo de obra.</p>
            <p> Análisis del A.I.U.</p>
            <br><br>
           </div>
          </div>
          <br>
          <p>PRESUPUESTOS DE TIEMPOS:</p>
          <div class="row numbers">
           <div class="one columns">
             <span id="button-icon">1</span>
             <br><br>
             <span id="button-icon">2</span>
           </div>
           <div class="five columns spacing">
            <p> Programación de obra.</p>
            <p> Plan de inversión del anticipo.</p>
           </div>

           <div class="one columns">
             <span id="button-icon">3</span>
             <br><br>
           </div>
           <div class="five columns spacing">
            <p> Programa de flujo de inversión mes a mes.</p>
            <br><br>
           </div>
          </div>
          <br>
          <p>OTROS SERVICIOS:</p>
          <div class="row numbers">
           <div class="one columns">
             <span id="button-icon">1</span>
           </div>
           <div class="five columns spacing">
            <p> Especificaciones de obra.</p>
           </div>
           <div class="one columns">
            <br><br>
           </div>
           <div class="five columns spacing">
            <br><br>
            <a class="buttom" href="<?php echo home_url('/contactenos' ); ?>">Cotice con nosotros</a>
           </div>
          </div>
          
      </div>
    </div>

<?php get_footer(); ?>