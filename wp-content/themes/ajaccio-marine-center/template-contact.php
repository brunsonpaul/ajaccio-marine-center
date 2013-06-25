<?php
/*
 * Template Name: Contact
 *
 * Description: Le template de la page Contact
 */
 ?>

<?php get_header(); ?>

<section id="contact">
	<?php if (have_posts()) : ?>
    	<?php while (have_posts()) : the_post(); ?>
			<article>
				<h1><?php the_title(); ?></h1>
				<ul>
					<li>Informations pratiques</li>
					<li><?php the_field('adresse') ?></li>
					<li><?php the_field('telephone') ?></li>
					<li><a href="mailto:<?php the_field('email') ?>"><?php the_field('email') ?></a></li>
				</ul>
				<?php the_content(); ?>
			</article>
		<?php endwhile; ?>
	<?php endif; ?>
</section>
<div id="map">
	<iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
	src="https://maps.google.fr/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=&amp;q=27+Rue+Sergent+Casalonga+20000+Ajaccio+France&amp;aq=t&amp;sll=41.92010270,8.735249399999999&amp;ie=UTF8&amp;hq=&amp;hnear=27+Rue+Sergent+Casalonga+20000+Ajaccio+France&amp;t=m&amp;z=17&amp;ll=41.92010270,8.735249399999999&amp;output=embed"></iframe>
</div>
<?php get_footer(); ?>
