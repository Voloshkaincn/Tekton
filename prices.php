<?php
/*
Template Name: prices
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
				<div class="prices__nav">
					<ul class="btn__list">
			            <li class="btn__item">
			              <a href="#PriceProctology" class="btn__tab"><?php pll_e('Проктология') ?></a>
			            </li>
			            <li class="btn__item">
			              <a href="#PriceOncology" class="btn__tab"><?php pll_e('Онкология') ?></a>
			            </li>
			            <li class="btn__item">
			              <a href="#PriceSurgery" class="btn__tab"><?php pll_e('Общая хирургия') ?></a>
			            </li>
			          </ul>
				</div>
				<div id="PriceProctology" class="price__block">

					<?php the_field('price_proctology'); ?>
				</div>
				<div id="PriceOncology" class="price__block">
					<?php the_field('price_oncology'); ?>
				</div>
				<div id="PriceSurgery" class="price__block">
					<?php the_field('price_surgery'); ?>
				</div>
										
			</div>
		</div>
	</div>
</article>

<?php get_footer(); ?>