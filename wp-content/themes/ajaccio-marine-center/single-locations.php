<?php get_header(); ?>


<section id="descriptionBateaux">

	<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>	

	<article>
		<div class="descriptionScroll">
			<h1><?php the_title(); ?></h1>
			<p><?php echo get_the_term_list(get_the_ID(), 'contrats', 'contrat :', ',','');  ?></p>
			<p><?php the_content(); ?></p>
			<dl>
				<dt>Chantier</dt><dd>CBN Lagoon</dd>
				<dt>Chantier</dt><dd>CBN Lagoon</dd>
				<dt>Chantier</dt><dd>CBN Lagoon</dd>
				<dt>Chantier</dt><dd>CBN Lagoon</dd>
				<dt>Chantier</dt><dd>CBN Lagoon</dd>
				<dt>Chantier</dt><dd>CBN Lagoon</dd>
				<dt>Chantier</dt><dd>CBN Lagoon</dd>
			</dl>
			<ul>
				<li>
					<a href="#">
						<img src="<?php bloginfo('template_directory'); ?>/img/bateau.jpg" alt=""/>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="<?php bloginfo('template_directory'); ?>/img/bateau.jpg" alt=""/>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="<?php bloginfo('template_directory'); ?>/img/bateau.jpg" alt=""/>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="<?php bloginfo('template_directory'); ?>/img/bateau.jpg" alt=""/>
					</a>
				</li>
			<ul>	
		</div>
	</article>

	<?php endwhile; ?>
	<?php endif; ?>

	<div id="slideShowBG">
		
	</div>
</section>

		
<?php get_footer(); ?>
