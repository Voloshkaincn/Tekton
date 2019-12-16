<?php
/*
Template Name: for patient
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
<article id="post-<?php the_ID(); ?>" class="blog__wrap">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="h1 mb-5"><?php wp_title('')?></h1>
			</div>
			<!-- <div class="col-lg-10 col-12 mb-5 mx-auto">
					<blockquote>
						<p class="text-md text-center">Знаете ли вы, что...</p>
						<p class="text-md">✔️80% вмешательств в проктологии выполняются амбулаторно (без госпитализации)</p>
						<p class="text-md">✔️60-70% операций можно выполнить под местной анестезией</p>
					</blockquote>
			</div> -->
			<div class="col-12">
				<div class="pacient__nav mb-3">
					<ul class="btn__list">
			            <li class="btn__item">
			              <button class="js_categorie btn__tab active" data-key="all">Все статьи</button>
			            </li>

			            <?php $categories = get_categories( array(
			                  'orderby' => 'ID',
			                  'order'   => 'ASC'
			              ) );
			              foreach( $categories as $category ) { ?>
			                <li class="btn__item">
			                  <button class="js_categorie btn__tab" data-key="<?php echo $category->cat_ID ?>">
			                  	    <?php echo $category->cat_name; ?>
			                   </button>
			                </li>
			              <?php }
			            ?>
			          </ul>
				</div>

				<div class="row mb-5">
					<?php
					$args = array(
						'post_type'=>'post',
						 'post_status'=>'publish', 
						 'posts_per_page'=>-1
					);
					// запрос
					$wpb_all_query = new WP_Query($args); ?>
					<?php if ( $wpb_all_query->have_posts() ) : ?>

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

			    <?php wp_reset_postdata(); ?>
				<?php else : ?>
				    <p><?php _e( 'Извините, нет записей, соответствуюших Вашему запросу.' ); ?></p>
				<?php endif; ?>

			</div>
		</div>
	</div>
</article>

<?php get_footer(); ?>