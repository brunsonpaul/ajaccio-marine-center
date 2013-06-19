<?php
/*
 * Template Name: Services
 *
 * Description: Le template de la page Services
 */
 ?>

<?php get_header(); ?>

<section id="services">
	<?php if (have_posts()) : ?>
    	<?php while (have_posts()) : the_post(); ?>
			<article>
				<img src="<?php bloginfo('template_directory'); ?>/img/icone_achatvente.svg" alt=""/><!--				
				!--><h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
			</article><!--
			!--><article>
				<img src="<?php bloginfo('template_directory'); ?>/img/icone_location.svg" alt=""/><!--				
				!--><h1>Location</h1>
				<p>
					Vous pouvez acheter, par notre intermédiaire, un modèle de catamaran qui puisse nous convenir pour la location, équipé pour celle-ci, soit au départ de Hyères, de la Corse, de Saint tropez, de Saint raphael, d' Antibes, de Menton, de St Martin aux Antilles (défiscalisation Girardin) et la Réunion (Ocean indien).
					Le navire est mis en gestion à l'année ou sur des périodes déterminées à l'avance. Nous prenons une commission de 40% sur le montant des locations pour la rémunération de notre travail de commercialisation et de gestion des locataires.
					N'hésitez pas si vous avez un projet à échéance de 2, 3 ou 4 ans. Les délais de livraison des chantiers sont très longs et vous pouvez retenir votre bateau dès maintenant
					Si cette formule vous intéresse, nous pouvons vous établir un étude de gestion chiffrée, il vous suffit de remplir une fiche de renseignement.
				</p>
			</article><!--
			!--><article>
				<img src="<?php bloginfo('template_directory'); ?>/img/icone_maintenance.svg" alt=""/><!--				
				!--><h1>Maintenance</h1>
				<p>
					Vous pouvez acheter, par notre intermédiaire, un modèle de catamaran qui puisse nous convenir pour la location, équipé pour celle-ci, soit au départ de Hyères, de la Corse, de Saint tropez, de Saint raphael, d' Antibes, de Menton, de St Martin aux Antilles (défiscalisation Girardin) et la Réunion (Ocean indien).
					Le navire est mis en gestion à l'année ou sur des périodes déterminées à l'avance. Nous prenons une commission de 40% sur le montant des locations pour la rémunération de notre travail de commercialisation et de gestion des locataires.
					N'hésitez pas si vous avez un projet à échéance de 2, 3 ou 4 ans. Les délais de livraison des chantiers sont très longs et vous pouvez retenir votre bateau dès maintenant
					Si cette formule vous intéresse, nous pouvons vous établir un étude de gestion chiffrée, il vous suffit de remplir une fiche de renseignement.
				</p>
			</article>
		<?php endwhile; ?>
	<?php endif; ?>
</section>
	
		
<?php get_footer(); ?>



