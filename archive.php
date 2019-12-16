<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

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
				<div class="blog">
					<?php
					// запрос
					$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
					<?php if ( $wpb_all_query->have_posts() ) : ?>
					<ul>
					    <!-- the loop -->
					    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
					        <li>
					        	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					        </li>
					    <?php endwhile; ?>
					    <!-- end of the loop -->
					</ul>
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