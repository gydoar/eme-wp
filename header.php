<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>
		<?php
 			global $page, $paged; 
 			wp_title( '|', true, 'right' ); 
 			bloginfo( 'name' ); 
 			$site_description = get_bloginfo( 'description', 'display' ); 
 				if ( $site_description && ( is_home() || is_front_page() ) ) echo " | $site_description"; 
 				if ( $paged >= 2 || $page >= 2 ) echo ' | ' . sprintf( __( 'Page %s', 'nakeme' ), max( $paged, $page ) ); 
 		?>
 	</title>
 	<meta name="description" content="<?php bloginfo('description' ); ?>">

 	<link rel="apple-touch-icon" href="<?php bloginfo('template_url' ); ?>/library/img/apple-touch-icon.png">
 	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name') ?> - RSS" href="<?php bloginfo('rss2_url') ?>" />
    <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name') ?> - Atom" href="<?php bloginfo('atom_url') ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	 <!-- FONT
	 –––––––––––––––––––––––––––––––––––––––––––––––––– -->
	 <link href='http://fonts.googleapis.com/css?family=Dosis:300,500,600,800' rel='stylesheet' type='text/css'>

	<!-- css  indispensables -->
	
	<link rel="stylesheet" href="<?php bloginfo('template_url' ); ?>/library/css/normalize.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url' ); ?>/library/css/skeleton.css">
	<!--/ css indispensables -->

	<!-- css adicionales -->

	<link rel="stylesheet" href="<?php bloginfo('template_url' ); ?>/library/css/owl-carousel.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url' ); ?>/library/css/owl-theme.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url' ); ?>/library/css/tinycarousel.css">
	
	<!--/ css adicionales -->

	<link rel="stylesheet" href="<?php bloginfo('template_url' ); ?>/style.css">

	<?php wp_head(); ?>

</head>
<body>
	
	<div id="esquina-verde"></div>

	<header class="container">
        <a class="five columns" href="#"><img id="logo" class="twelve columns" src="<?php bloginfo('template_url' ); ?>/library/img/logo.png" alt=""></a>
        <nav id="menu" class="offset-by-two five columns">
            <a href="#" class="nav-mobile" id="nav-mobile"></a>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Nosotros</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Contactenos</a></li>
                
            </ul>
        </nav>
    </header>

