<?php
/*
 * Template Name: Services
 *
 * Description: Le template de la page Services
 */
 ?>

<?php get_header(); ?>

<section id="services">

<?php while(has_sub_field("services")): ?>
             
                <?php if(get_row_layout() == "service"): ?>
                
            <article>
				
				<?php echo wp_get_attachment_image( get_sub_field('pictogramme'), ''); 	?>
				<h1><?php the_sub_field('titre'); ?></h1>
				<p><?php the_sub_field('description'); ?></p>
			</article>
               

             
                <?php endif; ?>

<?php endwhile; ?>

</section>


	
		
<?php get_footer(); ?>



