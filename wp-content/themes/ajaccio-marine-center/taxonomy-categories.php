<?php get_header(); ?>
<?php $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));?>
<?php $terms = get_terms('contrats');?>

<section id="choixBateaux">
	<article>
		<ul>

		<?php if (have_posts()) : ?>
    	<?php while (have_posts()) : the_post(); ?>
		
			<li>
				<a href="<?php the_permalink();?>">

					<p><?php the_title(); ?></p>
					<h4><?php echo $term->name; ?></h4>
					<?php the_post_thumbnail(); ?>

				</a>
			</li>
		
		<?php endwhile; ?>
		<?php endif ;?>

			
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
