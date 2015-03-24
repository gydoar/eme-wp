<?php get_header(); ?>

<!-- Banner rotable -->
    <div id="owl-demo" class="owl-carousel owl-theme">
     
      <div class="item"><img src="<?php echo of_get_option( 'banner-1', 'no entry' ); ?>" alt="Banner 1"></div>
      <div class="item"><img src="<?php echo of_get_option( 'banner-2', 'no entry' ); ?>" alt="Banner 2"></div>
      <div class="item"><img src="<?php echo of_get_option( 'banner-3', 'no entry' ); ?>" alt="Banner 3"></div>
     
    </div>
    <!--/ Banner rotable -->

    <!-- Contenido -->
    <div class="container" id="contenido">
      <div class="four columns">
        <h2><img width="32" src="<?php bloginfo('template_url' ); ?>/library/img/01.png" alt="">&nbsp;<?php echo of_get_option( 'titulo-serv-1', 'no entry' ); ?></h2>
        <img class="twelve columns" src="<?php echo of_get_option( 'img-serv-1', 'no entry' ); ?>" alt="">
        <p><?php echo of_get_option( 'txt-serv-1', 'no entry' ); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <a href="<?php echo home_url('/diseno-construccion' ); ?>"><img width="54" src="<?php bloginfo('template_url' ); ?>/library/img/info.png" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Más información</a>
      </div>

      <div class="four columns">
        <div class="two columns">
          <img width="32" src="<?php bloginfo('template_url' ); ?>/library/img/02.png" alt="">
        </div>
        
        <h2 class="ten columns"><?php echo of_get_option( 'titulo-serv-2', 'no entry' ); ?></h2>
        <img class="twelve columns" src="<?php echo of_get_option( 'img-serv-2', 'no entry' ); ?>" alt="">
        <p><?php echo of_get_option( 'txt-serv-2', 'no entry' ); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <a href="<?php echo home_url('/remodelacion-mantenimiento' ); ?>"><img width="54" src="<?php bloginfo('template_url' ); ?>/library/img/info.png" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Más información</a>
      </div>

      <div class="four columns">
        <div class="two columns">
          <img width="32" src="<?php bloginfo('template_url' ); ?>/library/img/03.png" alt="">
        </div>
        
        <h2 class="ten columns"><?php echo of_get_option( 'titulo-serv-3', 'no entry' ); ?></h2>
        <img class="twelve columns" src="<?php echo of_get_option( 'img-serv-3', 'no entry' ); ?>" alt="">
        <p><?php echo of_get_option( 'txt-serv-3', 'no entry' ); ?>&nbsp;&nbsp;</p>
        <br>
        <a href="<?php echo home_url('/planeacion-presupuestos' ); ?>"><img width="54" src="<?php bloginfo('template_url' ); ?>/library/img/info.png" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Más información</a>
      </div>

    </div>
    <!--/ Contenido -->

    <!-- Personas -->
    <div id="personas">
      <div class="container">
        <div class="offset-by-two eight columns" id="slider1">
          <div class="viewport">
            <ul class="overview">
              <li>
                  <h3><img src="<?php bloginfo('template_url' ); ?>/library/img/003.png" alt=""><?php echo of_get_option( 'nom-ing-1', 'no entry' ); ?><img src="<?php bloginfo('template_url' ); ?>/library/img/004.png" alt=""></h3>
                    <span><?php echo of_get_option( 'cargo-ing-1', 'no entry' ); ?></span>
                <br><br>
                <p><?php echo of_get_option( 'texto-ing-1', 'no entry' ); ?></p>
              </li>
              <li>
                  <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="<?php bloginfo('template_url' ); ?>/library/img/003.png" alt=""><?php echo of_get_option( 'nom-ing-2', 'no entry' ); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="<?php bloginfo('template_url' ); ?>/library/img/004.png" alt=""></h3>
                    <span><?php echo of_get_option( 'cargo-ing-2', 'no entry' ); ?></span>
                <br><br>
                <p><?php echo of_get_option( 'texto-ing-2', 'no entry' ); ?></p>
              </li>      
            </ul>
          </div>
          <a class="next" href="#"><img width="39" src="<?php bloginfo('template_url' ); ?>/library/img/boton-sig.png" alt=""></a>
        </div>
      </div>
    </div>
    <!--/ Personas -->

<?php get_footer(); ?>