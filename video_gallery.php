<?php
/*
Template Name: video gallery
*/

get_header();
?>
<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="breadcrumb">
				<?php get_breadcrumb(); ?>
			</div>
		</div>
	</div>
</div>
<article id="post-<?php the_ID(); ?>" class="">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="h1 mb-5"><?php wp_title('')?></h1>
			</div>
		</div>
		<div class="row mb-5">
			
				<!-- Video loop START -->
		        <?php $args = array('post_type' => 'video_gallery'); ?>
		        <?php $video_loop = new WP_Query($args); ?>
		        <?php if ( $video_loop->have_posts() ) : while ( $video_loop->have_posts() ) : $video_loop->the_post(); ?>
		          <!-- Video item START -->
		          <div class="col-12 col-md-6 col-lg-4">
		          	<div class="call-modal video__call category__item"  data-modal="video" data-iframe='<?php the_field("video_iframe"); ?>' >
			        	<div class="category__image video__image">
			        		<?php if(get_the_post_thumbnail_url()): ?>
			        			<img class="category__img" src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
			        		<?php else: ?>
			        			<img class="category__img" src="<?php bloginfo('stylesheet_directory'); ?>/src/img/img.jpg" alt="">
			        		<?php endif; ?>
						</div>
						<div class="category__description">
			        		<?php echo the_field('video_deacription'); ?>
			        	</div>
			        </div>
		          </div>
		          
		          <!-- Video item END -->
		        <?php endwhile; ?>
		        <?php else: ?>
		            <h1>No video found!</h1>
		        <?php endif; ?>
		        <?php wp_reset_postdata(); ?>
		        <!-- video loop END -->

		</div>
	</div>
</article>

<div id="video" class="name-modal modal">
  <div class="container modal__container video__container">
    <div class="row modal__row">
      
		<div class="modal__wrap">
			<button class="modal_close"><span class="icon-close"></span></button>
			<div class="modal__content">
			  	<div id="VideoWrap" class="video__wrap">
			  		
			  	</div>
			</div>
		</div>

		</div>
	</div>
      </div>
  </div>
</div>

<?php get_footer(); ?>