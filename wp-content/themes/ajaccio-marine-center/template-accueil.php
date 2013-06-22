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

		<?php while(has_sub_field("slides")): ?>
             
            <?php if(get_row_layout() == "slide"): ?>
                
            <li>

			<div class="cbp-bislideshow-description">
				<h1><?php the_sub_field('titre'); ?></h1>
				<p><?php the_sub_field('description'); ?></p>
				<a href="<?php the_sub_field('lien'); ?>">Découvrez la gamme</a>
			</div>

			<?php echo wp_get_attachment_image( get_sub_field('photo'), ''); 	?>

			</li>
		
             
            <?php endif; ?>

    	<?php endwhile; ?>
		
	</ul>
	<div id="cbp-bicontrols" class="cbp-bicontrols">
	    <span class="cbp-biprev"><img src="<?php bloginfo('template_directory'); ?>/img/default/fleche_gauche.svg"></span>
		<span id="run-stop" class="cbp-bipause play"><img src="<?php bloginfo('template_directory'); ?>/img/default/pause.svg"></span>
		<span class="cbp-binext"><img src="<?php bloginfo('template_directory'); ?>/img/default/fleche_droite.svg"></span>
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
			if ($("#run-stop").hasClass("play")) {
				$("#run-stop img").attr('src', "<?php bloginfo('template_directory'); ?>/img/default/play.svg")
				$("#run-stop").toggleClass("play");
				$("#run-stop").addClass("pause");
			}
			else if ($("#run-stop").hasClass("pause")) {
				$("#run-stop img").attr('src', "<?php bloginfo('template_directory'); ?>/img/default/pause.svg")
				$("#run-stop").toggleClass("pause");
				$("#run-stop").addClass("play");
			}
		});
	}
</script>
		
<?php get_footer(); ?>
