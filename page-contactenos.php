<?php get_header(); ?>

 <!-- page -->
    <div id="page">
       <div class="container" >
      
        <h2><img width="32" src="<?php bloginfo('template_url' ); ?>/library/img/icon-contacto.png" alt=""> CONTACTENOS</h2>
        
        <div class="row">
          <div class="six columns">
           <iframe class="border-gray twelve columns" width="457" height="214" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.es/maps?q=4.705647,-74.096649&amp;num=1&amp;ie=UTF8&amp;t=m&amp;z=14&amp;ll=4.705647,-74.096646&amp;output=embed"></iframe>

          <div id="contac">
             <p class="icon-map">&nbsp;&nbsp;&nbsp;Calle 38D Sur No. 72Q - 71 piso 1 / Bogotá - Colombia </p>
             <p class="icon-sms">&nbsp;&nbsp;<a href="mailto:eme@eme-construcciones.com">eme@eme-construcciones.com</a></p>
             <p class="icon-tel">&nbsp;&nbsp;&nbsp;&nbsp;804 4657 - 319 2671554</p>
          </div>
           
          </div>

          <div class="five columns">
            <form action="">
              <input type="text" nombre="name" placeholder="NOMBRE">
              <input type="text" nombre="name" placeholder="NOMBRE">
              <input type="text" nombre="name" placeholder="NOMBRE">
              <textarea name="mensaje" id="" cols="30" rows="10" placeholder="MENSAJE"></textarea>
              <input class="buttom" type="submit" value="Enviar">
            </form>
            <a class="buttom" href="#">Enviar</a>
          </div>
        </div>
       
        
       </div>
    </div>

<?php get_footer(); ?>