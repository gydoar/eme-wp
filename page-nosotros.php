<?php get_headeR(); ?>

<!-- Nosotros -->
  
    <div id="nosotros" class="container">
      
       <h2><img width="32" src="<?php bloginfo('template_url' ); ?>/library/img/01.png" alt=""> NOSOTROS</h2>
      
      <div class="row">
        
        <div class="five columns">
          <img class="twelve columns"src="<?php echo of_get_option( 'img-nosotros', 'no entry' ); ?>" alt="">
        </div>

        <div class="six columns">
          <p><?php echo of_get_option( 'txt-nosotros', 'no entry' ); ?></p>
        </div>

        <div id="corchete" class="one columns">
          <img width="53" src="<?php bloginfo('template_url' ); ?>/library/img/corchete-der.png" alt="">
        </div>

      </div>
    </div>
    <!--/ Nosotros -->
   
    <!-- Mision vision -->
    <div id="vision-mision">
        <div class="container">
            <div class="offset-by-one five columns">
              <h3><img width="38" src="<?php bloginfo('template_url' ); ?>/library/img/icon-vision.png" alt=""> VISIÓN</h3>
              <p><?php echo of_get_option( 'txt-vision', 'no entry' ); ?></p>
            </div>

            <div class="five columns">
              <br><br>
              <img class="twelve columns" src="<?php echo of_get_option( 'img-vision', 'no entry' ); ?>" alt="">
            </div>
        </div>


        <div class="container">
            <div class="offset-by-one five columns">
              <h3><img width="38" src="<?php bloginfo('template_url' ); ?>/library/img/icon-mision.png" alt=""> MISIÓN</h3>
              <p><?php echo of_get_option( 'txt-mision', 'no entry' ); ?></p>
            </div>
            
            <div class="five columns">
              <br><br>
              <img class="twelve columns" src="<?php echo of_get_option( 'img-mision', 'no entry' ); ?>" alt="">
            </div>
          </div> 
    </div>
    <!--/ Mision vision -->

<?php get_footer(); ?>