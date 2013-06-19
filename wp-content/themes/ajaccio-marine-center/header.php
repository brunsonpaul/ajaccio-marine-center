<!DOCTYPE html>
<html>
  <head <?php language_attributes(); ?>>
  
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <meta name="description" content="">

    <meta name="viewport" content="width=device-width,initial-scale=1">

    <meta name="author" content="Arthur CHAUFFAILLE, Priscillien Gac, Kevin LAGIER, Corentin Malvaux, Jean-Baptiste NIS" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
    <link rel="icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/img/default/favicon.png" />    

    <?php wp_head(); ?>
    
  </head>
  <body <?php body_class(); ?>>
    <div class="wrap">
      
	<header>
	    <a id="logo" href="<?php bloginfo('url'); ?>">
	        <h1><?php bloginfo('name'); ?></h1>
	        <img src="<?php bloginfo('template_directory'); ?>/img/default/logo-ajaccio-marine-center.svg">
	    </a><!--
	    !-->
	    <nav>  
	        <ul>
	           	<?php 
	        		wp_nav_menu( array(
					 'container' =>false,
					 'menu_class' => 'nav',
					 'echo' => true,
					 'before' => '',
					 'after' => '',
					 'link_before' => '',
					 'link_after' => '',
					 'depth' => 0,
					 'walker' => new description_walker())
					 );
                ?>
	        </ul>
	    </nav>
	</header>