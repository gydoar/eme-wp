<!-- Footer -->
    <footer>
      <div class="container">
        <p>Calle 38D Sur No. 72Q - 71 piso 1 / Bogotá - Colombia</p>
        <a href="mailto:eme@eme-construcciones.com">eme@eme-construcciones.com</a>
        <p>804 4657 - 319 2671554</p>
        <ul id="redes">
          <li><a href="#"><img src="<?php bloginfo('template_url' ); ?>/library/img/facebook.png" alt=""></a></li>
          <li><a href="#"><img src="<?php bloginfo('template_url' ); ?>/library/img/twitter.png" alt=""></a></li>
        </ul>
      </div>
    </footer>
    <!--/ Footer -->

    <!-- Copyright -->
    <div id="copy">
      <div class="container">
         <p><strong>&copy; EME CONSTRUCCIONES TÉCNICAS INTEGRALES S.A.S&nbsp;&nbsp;</strong>
      HECHO CON&nbsp;<img width="10px" src="<?php bloginfo('template_url' ); ?>/library/img/corazon.png" alt="">&nbsp;POR <a target="_blank" href="http://suwwweb.com"> SUWWWEB S.A.S</a></p>
      </div>
    </div>
    <!--/Copyright -->

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->



<!-- script -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="<?php bloginfo('template_url' ); ?>/library/js/modernizr-custom-min.js"></script>

<!--/ script -->

<!-- Scripts Adiconales -->

<!-- Menu responsive -->

 <script>
        $(function() {
     
        var btn_movil = $('#nav-mobile'),
        menu = $('#menu').find('ul');
     
        // Al dar click agregar/quitar clases que permiten el despliegue del menú
        btn_movil.on('click', function (e) {
            e.preventDefault();
     
            var el = $(this);
     
            el.toggleClass('nav-active');
            menu.toggleClass('open-menu');
        });
    });
  </script>

<!--/ Menu responsive -->

<script src="<?php bloginfo('template_url' ); ?>/library/js/owl-carousel.js"></script>

<script>
    $(document).ready(function() {
 
    $("#owl-demo").owlCarousel({
   
        navigation : false, // Show next and prev buttons
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem:true
   
        // "singleItem:true" is a shortcut for:
        // items : 1, 
        // itemsDesktop : false,
        // itemsDesktopSmall : false,
        // itemsTablet: false,
        // itemsMobile : false
   
    });
   
  });
  </script>

<script src="<?php bloginfo('template_url' ); ?>/library/js/jquery.tinycarousel.js"></script>

  <script type="text/javascript">
    $(document).ready(function()
    {
      $('#slider1').tinycarousel();
    });
  </script>
<!--/ Scripts Adiconales -->

<?php wp_footer(); ?>

</body>
</html>