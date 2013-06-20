<?php
/*
 * Template Name: Choix du contrat
 *
 * Description: Le template de la page Choix du contrat
 */
 ?>


<?php get_header(); ?>

<?php $terms = get_terms('contrats');?>

<section style="margin-top: 200px" >
	<ul>
		<?php foreach ($terms as $t): ?>
		
		<li><a href="<?php echo get_term_link($t->slug, 'contrats'); ?>"><?php echo $t->name;?></a></li>

		<?php endforeach; ?>
	</ul>
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
