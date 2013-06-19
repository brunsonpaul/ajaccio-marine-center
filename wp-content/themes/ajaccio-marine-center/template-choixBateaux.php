<?php
/*
 * Template Name: Choix Bateaux
 *
 * Description: Le template de la page Choix Bateaux
 */
 ?>

<?php get_header(); ?>

<section id="choixBateaux">
	<article>
		<ul>
			<li>
				<a href="#">
					<p>Catamaran</p>
					<img src="<?php bloginfo('template_directory'); ?>/img/choixBateau.jpg" alt=""/>	
				</a>
			</li>	
			<li>
				<a href="#">
					<p>Catamaran</p>
					<img src="<?php bloginfo('template_directory'); ?>/img/choixBateau.jpg" alt=""/>	
				</a>
			</li>	
			<li>
				<a href="#">
					<p>Catamaran</p>
					<img src="<?php bloginfo('template_directory'); ?>/img/choixBateau.jpg" alt=""/>	
				</a>
			</li>	
			<li>
				<a href="#">
					<p>Catamaran</p>
					<img src="<?php bloginfo('template_directory'); ?>/img/choixBateau.jpg" alt=""/>	
				</a>
			</li>			
		</ul>
	</article>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script>
	$(document).ready(function(){
	    choixBateaux();
	    $(window).resize(function(){ 
	        choixBateaux();
	    })
	});

	function choixBateaux() {
	    var screenHeight = innerHeight;
	    var screenWidth = innerWidth;

	    $("#choixBateaux article ul li a").css({
	        "height" : screenHeight,
	    });
	    $("#choixBateaux article ul li a p").css({
	        "margin-top" : screenHeight-150,
	    });
	    $("#choixBateaux article ul li a img").css({
	        "clip" : 'rect(0,screenWidth,screenHeight,0)',
	    });
	}
</script>

<?php get_footer(); ?>
