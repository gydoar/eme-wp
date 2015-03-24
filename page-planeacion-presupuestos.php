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
            <p> <?php echo of_get_option( 'it-pla-press-1', 'no entry' ); ?></p>
            <p> <?php echo of_get_option( 'it-pla-press-2', 'no entry' ); ?></p>
            <p> <?php echo of_get_option( 'it-pla-press-3', 'no entry' ); ?></p>
            <p> <?php echo of_get_option( 'it-pla-press-4', 'no entry' ); ?></p>
           </div>

           <div class="one columns">
             <span id="button-icon">5</span>
             <br><br>
             <span id="button-icon">6</span>
             <br><br>
             <span id="button-icon">7</span>
           </div>
           <div class="five columns spacing">
            <p> <?php echo of_get_option( 'it-pla-press-5', 'no entry' ); ?></p>
            <p> <?php echo of_get_option( 'it-pla-press-6', 'no entry' ); ?></p>
            <p> <?php echo of_get_option( 'it-pla-press-7', 'no entry' ); ?></p>
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
            <p> <?php echo of_get_option( 'it-pla-press-8', 'no entry' ); ?></p>
            <p> <?php echo of_get_option( 'it-pla-press-9', 'no entry' ); ?></p>
           </div>

           <div class="one columns">
             <span id="button-icon">3</span>
             <br><br>
           </div>
           <div class="five columns spacing">
            <p> <?php echo of_get_option( 'it-pla-press-10', 'no entry' ); ?></p>
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
            <p> <?php echo of_get_option( 'it-pla-press-11', 'no entry' ); ?></p>
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