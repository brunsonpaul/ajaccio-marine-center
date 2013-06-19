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
	<iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.fr/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=&amp;q=1+Rue+Lefebvre+paris&amp;aq=t&amp;sll=48.680793,2.502588&amp;sspn=2.194254,4.938354&amp;ie=UTF8&amp;hq=&amp;hnear=1+Rue+Lefebvre,+75015+Paris,+%C3%8Ele-de-France&amp;t=m&amp;z=14&amp;ll=48.8318,2.292436&amp;output=embed"></iframe>
</div>

<?php get_footer(); ?>
