<?php get_header(); ?>

<section id="choixBateaux">
	<article>
		<ul>

		<?php

		$the_query_neuf = new WP_Query(array(
		'post_type' => 'bateaux',
		'posts_per_page' => '4',
		'taxonomy' => 'vente-neuf'
		);


		while ($the_query_neuf->have_posts()) :

		$the_query_neuf ->the_post();
		
		?>	
		
			<li>
				<a href="<?php the_permalink();?>">
					<p><?php the_title(); ?></p>
					<?php the_post_thumbnail(); ?>

				</a>
			</li>

		<?php endwhile; ?>

			
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
