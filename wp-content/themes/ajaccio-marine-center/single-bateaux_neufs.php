<?php get_header(); ?>


<section id="descriptionBateaux">

	<?php if (have_posts()) : ?>
    	<?php while (have_posts()) : the_post(); 
    		$aPhotos = array()?>			
                
		    <article>
		    	<div class="descriptionScroll">
					<h1><?php the_title(); ?></h1>
					<span><?php the_field('type_de_bateau') ?></span>
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
									<a href="#" class="image-select">
										<?php array_push($aPhotos, wp_get_attachment_image( get_sub_field('photo'), ''));echo wp_get_attachment_image( get_sub_field('photo'), ''); 	?>
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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<?php if($aPhotos){ ?>
		<script>
			var aPhoto = [];
			var focusedOn = 0;
	<?php foreach($aPhotos as $Photo){ ?>
			aPhoto.push('<?php echo $Photo ?>');
	<?php } ?>
			$("#slideShowBG").append(aPhoto[focusedOn]);
			(function(){
				$('.image-select').bind('click',function(e){
					changePhoto($('.image-select').index(this));
				});
				function changePhoto(id){
					$("#slideShowBG").html('');
					$("#slideShowBG").append(aPhoto[id]);
					focusedOn = id;
				}
			}())
		</script>
<?php } ?>

<?php get_footer(); ?>
