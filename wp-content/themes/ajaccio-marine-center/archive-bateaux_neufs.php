<?php get_header(); ?>

<?php $terms = get_terms('contrats');?>
<section id="choixBateaux">
	<?php the_title(); ?>
	<?php if (have_posts()) : ?>
    	<?php while (have_posts()) : the_post(); ?>			
                
		    <article>
				<?php the_post_thumbnail(); ?>
				<div class="mini-description">
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
					<a href="<?php the_permalink();?>">Plus de détails</a>
				</div>
			</article>

		<?php endwhile; ?>
	<?php endif; ?>			
</section>

<?php get_footer(); ?>
