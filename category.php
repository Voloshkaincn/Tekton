<?php
/*
Template Name: category
*/

get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>  data-cat="<?php the_field('category_name') ?>">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="breadcrumb">
					<?php get_breadcrumb(); ?>
				</div>		
				<h1 class="h1"><?php wp_title('')?></h1>
			</div>
			<div class="col-12">
				<div class="post">
					<?php
						while ( have_posts() ) :
							the_post();
							the_content();
						endwhile;
					?>
				</div>
			</div>
			<div class="col-12">
				
					<?php
					$cat = get_field('category_name');
					$args = array(
						'post_type'=>'post',
						 'post_status'=>'publish', 
						 'posts_per_page'=>-1,
						 'cat' =>$cat
					);
					// запрос
					$wpb_all_query = new WP_Query($args); ?>
					<?php if ( $wpb_all_query->have_posts() ) : ?>
					<div class="row">
						<div class="col-12">
							<h2 class="h2"><?php pll_e('Статьи по теме') ?></h2>
						</div>						
					</div>
					
					<div class="row mb-5">
					    <!-- the loop -->
					    <?php while ( $wpb_all_query->have_posts() ) : 
					    	$wpb_all_query->the_post();
					    ?>
					     <?php $category = get_the_category(); 
					     		$key = $category[0]->cat_ID; 
					     		$output =  $category[0]->cat_name; ?>
					     	<div class="col-12 col-md-6 col-lg-4 js_pacient_item category__block" data-key="<?php echo $key ?>">
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
										<?php pll_e('Читать далее')?>
						        	</a>
						        </div>
						    </div>

					    <?php endwhile; ?>
				    	<!-- end of the loop -->
					</div>
					<?php endif; ?>
				
			</div>
		</div>
	</div>
</article>

<?php get_footer(); ?>