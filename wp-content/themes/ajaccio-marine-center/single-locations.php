<?php get_header(); ?>


<section id="descriptionBateaux">

	<?php if (have_posts()) : ?>
    	<?php while (have_posts()) : the_post(); ?>			
                
		    <article>
		    	<div class="descriptionScroll">
					<h1><?php the_title(); ?></h1>
					<p><?php the_field('grande_description') ?></p>
			
					<?php while(has_sub_field("fiche_technique")): ?>
			        	<?php if(get_row_layout() == "caracteristique"): ?>
			        		<dl>
								<dt><?php the_sub_field('nom_de_la_caracteristique'); ?></dt><dd><?php the_sub_field('valeur_de_la_caracteristique'); ?></dd>
							</dl>
						<?php endif; ?>
    				<?php endwhile; ?>

					<?php while(has_sub_field("images")): ?>
			        	<?php if(get_row_layout() == "image"): ?>
			        		<ul>
								<li>
									<a href="#">
										<?php echo wp_get_attachment_image( get_sub_field('photo'), ''); 	?>
									</a>
								</li>
							</ul>
						<?php endif; ?>
    				<?php endwhile; ?>
				</div>
			</article>

		<?php endwhile; ?>
	<?php endif; ?>
				
	<div id="slideShowBG">
		
	</div>
</section>

		
<?php get_footer(); ?>
