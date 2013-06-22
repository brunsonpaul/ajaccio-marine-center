<?php get_header(); ?>

<?php $terms = get_terms('contrats');?>
<section id="choixBateaux">
	<h1>Locations</h1>
	<?php if (have_posts()) : ?>
    	<?php while (have_posts()) : the_post(); ?>			
                
		    <article>
				<?php the_post_thumbnail(); ?>
				<div class="mini-description">
					<h2><?php the_title(); ?></h2>
					<p><?php the_field('petite_description') ?></p>
					<a href="<?php the_permalink();?>">Plus de détails</a>
				</div>
			</article>

		<?php endwhile; ?>
	<?php endif; ?>			
</section>

<?php get_footer(); ?>
