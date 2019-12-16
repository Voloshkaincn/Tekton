<?php

get_header();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">
		<div class="row">
			<div class="col-12 mb-4">
				<div class="breadcrumb">
					<?php get_breadcrumb(); ?>
				</div>		
				<h1 class="h1"><?php wp_title('')?></h1>
			</div>
			<div class="col-12">
				<div class="row">
					<?php
					if (have_posts()) :
					while (have_posts()) : the_post();
					?>
					        <div class="col-12 col-md-6 col-lg-4 js_pacient_item  category__block">
						        <div class="category__item">
						        	<a class="category__image" href="<?php the_permalink(); ?>">
						        		<?php if(get_the_post_thumbnail_url()): ?>
						        			<img class="category__img" src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
						        		<?php else: ?>
						        			<img class="category__img" src="<?php bloginfo('stylesheet_directory'); ?>/src/img/img.jpg" alt="">
						        		<?php endif; ?>
									</a>
									<div class="category__data">
										<span class="category__date"><?php echo get_the_date(); ?></span>
										<span class="category__name"><?php echo $output ?></span>
									</div>
									<a class="category__title" href="<?php the_permalink(); ?>">
						        		<?php the_title(); ?>
						        	</a>
						        	<a class="link mt-auto" href="<?php the_permalink(); ?>">
										<?php pll_e('читать далее')?>
						        	</a>
						        </div>
						    </div>
					    <?php endwhile; ?>
					    <!-- end of the loop -->
				    <?php wp_reset_postdata(); ?>
					<?php else : ?>
					    <p><?php _e( 'Извините, нет записей, соответствуюших Вашему запросу.' ); ?></p>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</article>

<?php get_footer(); ?>