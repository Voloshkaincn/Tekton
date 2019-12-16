<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
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
				<div class="post">
					<?php
						while ( have_posts() ) :
							the_post();
							the_content();
						endwhile;
					?>
				</div>
			</div>
		</div>
	</div>
</article>

<?php get_footer(); ?>