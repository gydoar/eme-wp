<?php get_header(); ?>

<!-- page -->
    <div id="page">
       <div class="container" >
      
        <h2><img width="32" src="<?php bloginfo('template_url' ); ?>/library/img/01.png" alt=""> DISEÑO, PLANEACIÓN Y CONSTRUCCIÓN DE OBRAS NUEVAS</h2>
        
        <div class="row">
          
          <div class="five columns">
            <img class="twelve columns" src="<?php echo of_get_option( 'img-dis-const', 'no entry' ); ?>" alt="">
          </div>

          <div class="six columns">
            <br>
            <p><?php echo of_get_option( 'txt-dis-const', 'no entry' ); ?></p>
          </div>
        </div>
        <br>
         <p>EME CONSTRUCCIONES TECNICAS INTEGRALES SAS  ofrece los siguientes servicios:</p>
         <div class="row numbers">
           <div class="one columns">
             <span id="button-icon">1</span>
             <br><br>
             <span id="button-icon">2</span>
           </div>
           <div class="five columns">
            <p> <?php echo of_get_option( 'it-dis-const-1', 'no entry' ); ?></p>
            <p> <?php echo of_get_option( 'it-dis-const-2', 'no entry' ); ?></p>
           </div>

           <div class="one columns">
             <span id="button-icon">3</span>
             <br><br>
             <span id="button-icon">4</span>
           </div>
           <div class="five columns">
            <p> <?php echo of_get_option( 'it-dis-const-3', 'no entry' ); ?></p>
            <p> <?php echo of_get_option( 'it-dis-const-4', 'no entry' ); ?></p>
            <br><br>
            <a class="buttom" href="<?php echo home_url('/contactenos' ); ?>"> Cotice con nosotros </a>
           </div>
          </div>
      </div>
    </div>
   
<?php get_footer(); ?>