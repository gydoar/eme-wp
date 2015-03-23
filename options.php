<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 */
function optionsframework_option_name() {
	// Change this to use your theme slug
	return 'options-framework-theme';
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'theme-textdomain'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

	// Test data
	$test_array = array(
		'one' => __( 'One', 'theme-textdomain' ),
		'two' => __( 'Two', 'theme-textdomain' ),
		'three' => __( 'Three', 'theme-textdomain' ),
		'four' => __( 'Four', 'theme-textdomain' ),
		'five' => __( 'Five', 'theme-textdomain' )
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __( 'French Toast', 'theme-textdomain' ),
		'two' => __( 'Pancake', 'theme-textdomain' ),
		'three' => __( 'Omelette', 'theme-textdomain' ),
		'four' => __( 'Crepe', 'theme-textdomain' ),
		'five' => __( 'Waffle', 'theme-textdomain' )
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );

	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}


	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages( 'sort_column=post_parent,menu_order' );
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/images/';

	$options = array();

	$options[] = array(
		'name' => __( 'INICIO', 'theme-textdomain' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __( 'Banner 1', 'theme-textdomain' ),
		'desc' => __( 'Banner 1', 'theme-textdomain' ),
		'id' => 'banner-1',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'Banner 2', 'theme-textdomain' ),
		'desc' => __( 'Banner 2', 'theme-textdomain' ),
		'id' => 'banner-2',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'Banner 3', 'theme-textdomain' ),
		'desc' => __( 'Banner 3', 'theme-textdomain' ),
		'id' => 'banner-3',
		'type' => 'upload'
	);
	

	//Servicios

	$options[] = array(
		'name' => __( 'Servicios 1', 'theme-textdomain' ),
		'desc' => __( 'Titulo Servicios 1', 'theme-textdomain' ),
		'id' => 'titulo-serv-1',
		'std' => 'DISEÑO Y CONSTRUCCIÓN',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Servicios 2', 'theme-textdomain' ),
		'desc' => __( 'Titulo Servicios 2', 'theme-textdomain' ),
		'id' => 'titulo-serv-2',
		'std' => 'REMODELACIÓN Y MANTENIMIENTO',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Servicios 3', 'theme-textdomain' ),
		'desc' => __( 'Titulo Servicios 3', 'theme-textdomain' ),
		'id' => 'titulo-serv-3',
		'std' => 'PLANEACIÓN DE TIEMPOS Y COSTOS DE OBRA',
		'type' => 'text'
	);



	$options[] = array(
		'name' => __( 'Servicios 1', 'theme-textdomain' ),
		'desc' => __( 'Imagen Servicios 1', 'theme-textdomain' ),
		'id' => 'img-serv-1',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'Servicios 2', 'theme-textdomain' ),
		'desc' => __( 'Imagen Servicios 2', 'theme-textdomain' ),
		'id' => 'img-serv-2',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'Servicios 3', 'theme-textdomain' ),
		'desc' => __( 'Imagen Servicios 3', 'theme-textdomain' ),
		'id' => 'img-serv-3',
		'type' => 'upload'
	);




	$options[] = array(
		'name' => __( 'Servicios 1', 'theme-textdomain' ),
		'desc' => __( 'Texto Servicios 1', 'theme-textdomain' ),
		'id' => 'txt-serv-1',
		'std' => 'Construcción de obras con coordinación técnica desde el levantamiento de necesidades, diseño, construcción y entrega final de las obras de proyectos de vivienda, comercio e institucional.',
		'type' => 'textarea'
	);

	$options[] = array(
		'name' => __( 'Servicios 2', 'theme-textdomain' ),
		'desc' => __( 'Texto Servicios 2', 'theme-textdomain' ),
		'id' => 'txt-serv-2',
		'std' => 'Remodelación o mantenimiento de viviendas, oficinas y espacios comerciales, reformas arquitectónicas puntuales, ampliación de espacios, adecuaciones eléctricas e hidrosanitarias.',
		'type' => 'textarea'
	);

	$options[] = array(
		'name' => __( 'Servicios 3', 'theme-textdomain' ),
		'desc' => __( 'Texto Servicios 3', 'theme-textdomain' ),
		'id' => 'txt-serv-3',
		'std' => 'Análisis de costos directos e indirectos, tiempos de ejecución y flujo de desembolsos mes a mes de la construcción de su vivienda o edificio.',
		'type' => 'textarea'
	);


	//Ingenieros
	$options[] = array(
		'name' => __( 'Ingeniero 1', 'theme-textdomain' ),
		'desc' => __( 'Nombre Ingeniero 1', 'theme-textdomain' ),
		'id' => 'nom-ing-1',
		'std' => 'MAURICIO RODRIGUEZ MUÑOZ',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Ingeniero 1', 'theme-textdomain' ),
		'desc' => __( 'Cargo ingeniero 1', 'theme-textdomain' ),
		'id' => 'cargo-ing-1',
		'std' => 'Arquitecto / Director de proyectos',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Ingeniero 1', 'theme-textdomain' ),
		'desc' => __( 'Texto ingeniero 1', 'theme-textdomain' ),
		'id' => 'texto-ing-1',
		'std' => 'Arquitecto egresado de la Universidad la Gran Colombia con especialización en Gerencia Integral de Obras.
		</br></br>

		Tiene 10 años de experiencia en ejecución y control de proyectos de mediana y gran escala. Construccion, remodelación y mantenimiento de oficinas, bodegas industriales y vivienda; cimentaciones, estructura metálica, manejo de concreto y acabados arquitectonicos.
		</br></br>
		Elaboración, ejecución y control de presupuestos y programaciones de obra, seguimiento de seguridad industrial y salud ocupacional.',
		'type' => 'textarea'
	);



	$options[] = array(
		'name' => __( 'Ingeniero 2', 'theme-textdomain' ),
		'desc' => __( 'Nombre Ingeniero 2', 'theme-textdomain' ),
		'id' => 'nom-ing-2',
		'std' => 'ERIC SERRANO LÓPEZ',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Ingeniero 2', 'theme-textdomain' ),
		'desc' => __( 'Cargo ingeniero 2', 'theme-textdomain' ),
		'id' => 'cargo-ing-2',
		'std' => 'Arquitecto / Diseño de proyectos',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Ingeniero 2', 'theme-textdomain' ),
		'desc' => __( 'Texto ingeniero 2', 'theme-textdomain' ),
		'id' => 'texto-ing-2',
		'std' => 'Arquitecto egresado de la Universidad Católica de Colombia, Especialista en Gerencia de proyectos de la Universidad Piloto de Colombia.
		</br></br>
		Con experiencia general de 10 años en el área de diseño, gestión, coordinación y seguimiento a proyectos.
		</br></br>
		Ha diseñado y desarrollado proyectos de  vivienda multifamiliar, unifamiliar, oficinas y arquitectura comercial corporativa en los últimos 6 años.',
		'type' => 'textarea'
	);

		//Nosotros

	$options[] = array(
		'name' => __( 'NOSOTROS', 'theme-textdomain' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __( 'Imagen nosotros', 'theme-textdomain' ),
		'desc' => __( 'Nosotros', 'theme-textdomain' ),
		'id' => 'img-nosotros',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'Texto nosotros', 'theme-textdomain' ),
		'desc' => __( 'Nosotros', 'theme-textdomain' ),
		'id' => 'txt-nosotros',
		'std' => '<strong>EME CONSTRUCCIONES TECNICAS INTEGRALES SAS</strong> es una empresa que tiene como objetivo ser un referente en el sector constructivo a través de servicios de REMODELACION, MANTENIMIENTO, CONSTRUCCION Y REALIZACIÓN DE PRESUPUESTOS Y PROGRAMACIONES DE OBRAS. Actualmente tenemos presencia en la ciudad de Bogotá y los municipios de la Sabana, además contamos con un grupo de profesionales, proveedores y contratistas de experiencia que ofrecen el mejor servicio, garantizando la satisfacción de nuestros clientes, con una excelente relación de costo, tiempo y calidad.',
		'type' => 'textarea'
	);

	$options[] = array(
		'name' => __( 'Texto Vision', 'theme-textdomain' ),
		'desc' => __( 'Vision', 'theme-textdomain' ),
		'id' => 'txt-vision',
		'std' => 'Ser una empresa consolidada en el sector de la construcción, ejecutando nuestra labor bajo los principios de eficiencia, eficacia y efectividad, utilizando procesos constructivos acordes con las normas técnicas colombianas y empleando altos estándares de calidad con el amplio conocimiento de nuestro excelente equipo de profesionales, contratistas y proveedores.',
		'type' => 'textarea'
	);

	$options[] = array(
		'name' => __( 'Imagen Vision', 'theme-textdomain' ),
		'desc' => __( 'Vision', 'theme-textdomain' ),
		'id' => 'img-vision',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'Texto Mision', 'theme-textdomain' ),
		'desc' => __( 'Mision', 'theme-textdomain' ),
		'id' => 'txt-mision',
		'std' => 'EME CONSTRUCCIONES TECNICAS INTEGRALES SAS busca satisfacer las necesidades de habitabilidad, confort, estilo y actualización de los inmuebles de nuestros clientes. Diseñamos y construimos obras nuevas; remodelamos viviendas, oficinas y establecimientos comerciales; además hacemos mantenimientos locativos de edificaciones. Realizamos presupuestos, programaciones de obras de construcción y asesorías técnicas teniendo en cuenta valores de ética, honestidad y responsabilidad, comprometidos con nuestros clientes y con el medio ambiente.',
		'type' => 'textarea'
	);

	$options[] = array(
		'name' => __( 'Imagen Mision', 'theme-textdomain' ),
		'desc' => __( 'Mision', 'theme-textdomain' ),
		'id' => 'img-mision',
		'type' => 'upload'
	);

	// Diseño y construccion
		$options[] = array(
		'name' => __( 'DISEÑO, PLANEACIÓN Y CONSTRUCCIÓN', 'theme-textdomain' ),
		'type' => 'heading'
	);


	$options[] = array(
		'name' => __( 'Imagen Diseño y Construccion', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'img-dis-const',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'Texto Diseño y Construccion', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'txt-dis-const',
		'std' => 'Construcción de obras con coordinación técnica desde el levantamiento de sus necesidades hasta la entrega final de las obras de proyectos de vivienda, comercio e institucional.',
		'type' => 'textarea'
	);

	$options[] = array(
		'name' => __( 'Texto item 1', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'it-dis-const-1',
		'std' => 'Levantamiento de la información y necesidades.',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( 'Texto item 2', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'it-dis-const-2',
		'std' => 'Diseño arquitectónico, estructural, eléctrico e hidrosanitario y realización de renders.',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( 'Texto item 3', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'it-dis-const-3',
		'std' => 'Realización del presupuesto y programación de obra.',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( 'Texto item 4', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'it-dis-const-4',
		'std' => 'Construcción de obra y entrega final al cliente.',
		'type' => 'text'
	);

	// Remodelacion y mantenimiento
		$options[] = array(
		'name' => __( 'DISEÑO Y MANTENIMIENTO', 'theme-textdomain' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __( 'Imagen Remodelacion y Mantenimiento', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'img-rem-mant',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'Texto Remodelacion y Mantenimiento', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'txt-rem-mant',
		'std' => 'Remodelación completa de su vivienda, oficina o espacio comercial, Reformas puntuales de su cocina, baño, piso, Cielorraso, iluminación, pintura de muros, Ampliaciones de espacios y Adecuaciones Eléctricas e hidrosanitarias.
			</br></br>
			Mantenimiento y rehabilitación de viviendas y edificios, impermeabilización de cubiertas y patios, pinturas exteriores de fachadas, tratamiento de humedades, habilitación de bajantes, desagües, fontanería en general.',
		'type' => 'textarea'
	);

	$options[] = array(
		'name' => __( 'Texto item 1', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'it-rem-mant-1',
		'std' => 'Levantamiento Arquitectónico, de información y necesidades.',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( 'Texto item 2', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'it-rem-mant-2',
		'std' => 'Diseño arquitectónico, renders y diseños técnicos.',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( 'Texto item 3', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'it-rem-mant-3',
		'std' => 'Presupuesto y programación de obra.',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( 'Texto item 4', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'it-rem-mant-4',
		'std' => 'Remodelación de espacios y entrega final al cliente.',
		'type' => 'text'
	);

	//Planeacion de presupuestos
	$options[] = array(
		'name' => __( 'PLANEACIÓN DE PRESUPUESTOS', 'theme-textdomain' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __( 'Imagen Planeacion y Presupuestos', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'img-pla-pres',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'Texto Remodelacion y Mantenimiento', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'txt-rem-mant',
		'std' => 'Remodelación completa de su vivienda, oficina o espacio comercial, Reformas puntuales de su cocina, baño, piso, Cielorraso, iluminación, pintura de muros, Ampliaciones de espacios y Adecuaciones Eléctricas e hidrosanitarias.
			</br></br>
			Mantenimiento y rehabilitación de viviendas y edificios, impermeabilización de cubiertas y patios, pinturas exteriores de fachadas, tratamiento de humedades, habilitación de bajantes, desagües, fontanería en general.',
		'type' => 'textarea'
	);
	// contacto
	$options[] = array(
		'name' => __( 'CONTACTO', 'theme-textdomain' ),
		'type' => 'heading'
	);

	
	$options[] = array(
		'name' => __( 'Dirección', 'theme-textdomain' ),
		'desc' => __( 'Direccion empresa', 'theme-textdomain' ),
		'id' => 'dir',
		'std' => 'Calle 38D Sur No. 72Q - 71 piso 1 / Bogotá - Colombia',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Email', 'theme-textdomain' ),
		'desc' => __( 'Email', 'theme-textdomain' ),
		'id' => 'email',
		'std' => 'eme@eme-construcciones.com',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Telefonos', 'theme-textdomain' ),
		'desc' => __( 'Telefonos', 'theme-textdomain' ),
		'id' => 'tel',
		'std' => '804 4657 - 319 2671554',
		'type' => 'text'
	);

		$options[] = array(
		'name' => __( 'Mapa', 'theme-textdomain' ),
		'desc' => __( 'Link Mapa Google', 'theme-textdomain' ),
		'id' => 'mapa',
		'std' => 'http://goo.gl/maps/C9EKU',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Facebook', 'theme-textdomain' ),
		'desc' => __( 'Link Facebook', 'theme-textdomain' ),
		'id' => 'facebook',
		'std' => 'https://www.facebook.com/EMEconstruccionestecnicasintegrales',
		'type' => 'text'
	);

		$options[] = array(
		'name' => __( 'Twitter', 'theme-textdomain' ),
		'desc' => __( 'Link Twitter', 'theme-textdomain' ),
		'id' => 'twitter',
		'std' => 'https://twitter.com/EMEconstr',
		'type' => 'text'
	);


	return $options;
}