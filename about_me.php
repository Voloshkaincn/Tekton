<?php
/*
Template Name: about me
*/

get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="breadcrumb">
					<?php get_breadcrumb(); ?>
				</div>		
				<h1 class="h1"><?php wp_title('')?></h1>
			</div>
			<div class="col-12">
				<h2 class="h2 text-center"><?php the_field('top_subtitle'); ?></h2>
				<div id="aboutmeSlider" class="aboutme__slider">
					<?php 
		            	if (get_post_gallery()) :
		                $gallery = get_post_gallery( get_the_ID(), false );
		                $gallery_image_ids = explode(",", $gallery['ids']);	               
		                foreach( $gallery_image_ids as $id ) : ?>

						<div class="aboutme__slide">
							<div class="slider__wrap">
								<a class="slider__image" href="<?php echo wp_get_attachment_url($id);  ?>" data-lightbox="gallery" data-title="<?php echo wp_get_attachment_caption( $id);  ?>">
									<img class="slider__img"
				
									src="<?php echo wp_get_attachment_image_url($id, 'medium');?>"
								 	alt="<?php echo get_post_meta($id, '_wp_attachment_image_alt', true );  ?>"/>			
								</a>
							</div>
						</div>
					<?php
                	endforeach;
              		endif; 
              		?>
				</div>
				<div class="text-center">
					<div class="slider__nav"></div>
				</div>				
			</div>
		</div>
		<div class="row my-5">
			<div class="col-lg-4 col-sm-5 aboutme__chronology">
				<div class="aboutme__block">
						<?php the_field('chronology'); ?>				
				</div>				
			</div>
			<div class="col-lg-8 col-sm-7">
				<div class="aboutme__block">
						<?php the_field('biography'); ?>
				</div>
			</div>
		</div>
	</div>
</article>

<?php get_footer(); ?>