<?php
/*
 * Template Name: Accueil
 *
 * Description: Le template de la page d'accueil
 */
 ?>

<?php get_header(); ?>

<div class="main">
	<ul id="cbp-bislideshow" class="cbp-bislideshow">
		<li>
			<div class="cbp-bislideshow-description">
				<h1>la nouvelle gamme lagoon</h1>
				<p>Notre société propose des bâteaux d’exception à la vente, la location et s’occupe également de la maintenance
				de ceux-ci. Une équipe jeune et dynamique est à votre disposition pour toute demande d’informations ou toute
				visite dans nos locaux.</p>
				<a href="#">Découvrez la gamme</a>
			</div>
			<img src="<?php bloginfo('template_directory'); ?>/img/bateau.jpg" alt="image01"/>				
		</li>
		<li>
			<div class="cbp-bislideshow-description">
				<h1>la nouvelle gamme lagoon</h1>
				<p>Notre société propose des bâteaux d’exception à la vente, la location et s’occupe également de la maintenance
				de ceux-ci. Une équipe jeune et dynamique est à votre disposition pour toute demande d’informations ou toute
				visite dans nos locaux.</p>
				<a href="#">Découvrez la gamme</a>
			</div>
			<img src="<?php bloginfo('template_directory'); ?>/img/2.jpg" alt="image02"/>
		</li>
		<li>
			<div class="cbp-bislideshow-description">
				<h1>la nouvelle gamme lagoon</h1>
				<p>Notre société propose des bâteaux d’exception à la vente, la location et s’occupe également de la maintenance
				de ceux-ci. Une équipe jeune et dynamique est à votre disposition pour toute demande d’informations ou toute
				visite dans nos locaux.</p>
				<a href="#">Découvrez la gamme</a>
			</div>
			<img src="<?php bloginfo('template_directory'); ?>/img/3.jpg" alt="image03"/>
		</li>
		<li>
			<div class="cbp-bislideshow-description">
				<h1>la nouvelle gamme lagoon</h1>
				<p>Notre société propose des bâteaux d’exception à la vente, la location et s’occupe également de la maintenance
				de ceux-ci. Une équipe jeune et dynamique est à votre disposition pour toute demande d’informations ou toute
				visite dans nos locaux.</p>
				<a href="#">Découvrez la gamme</a>
			</div>
			<img src="<?php bloginfo('template_directory'); ?>/img/4.jpg" alt="image04"/>
		</li>
	</ul>
	<div id="cbp-bicontrols" class="cbp-bicontrols">
		<span class="cbp-biprev icon-arrow-left"></span>
		<span id="run-stop" class="cbp-bipause icon-play"></span>
		<span class="cbp-binext icon-arrow-right"></span>
	</div>
</div>
	
<script src="<?php bloginfo('template_directory'); ?>/js/modernizr.custom.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.imagesloaded.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/cbpBGSlideshow.js"></script>
<script>
	$(function() {
		cbpBGSlideshow.init();
	});


	$(document).ready(function(){

		runStop();
	});
	function runStop(){
		$("#run-stop").click(function(){
			if ($("#run-stop").hasClass("icon-play")) {
				$("#run-stop").toggleClass("icon-play");
				$("#run-stop").addClass("icon-pause");
			}
			else if ($("#run-stop").hasClass("icon-pause")) {
				$("#run-stop").toggleClass("icon-pause");
				$("#run-stop").addClass("icon-play");
			}
		});
	}
</script>
		
<?php get_footer(); ?>
