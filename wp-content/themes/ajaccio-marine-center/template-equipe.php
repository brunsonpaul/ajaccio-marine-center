<?php
/*
 * Template Name: Equipe
 *
 * Description: Le template de la page Equipe
 */
 ?>

<?php get_header(); ?>

<section id="equipe">
	
	<?php while(has_sub_field("equipe")): ?>
             
            <?php if(get_row_layout() == "membre"): ?>
                
    <article>
		<?php echo wp_get_attachment_image( get_sub_field('photo'), ''); 	?>				
		<h1><?php the_sub_field('nom'); ?></h1>
		<h2><?php the_sub_field('fonction'); ?></h2>
		<p><?php the_sub_field('presentation'); ?></p>
	</article>

     
             
            <?php endif; ?>

    <?php endwhile; ?>

</section>
	
		
<?php get_footer(); ?>
