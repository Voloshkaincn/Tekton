<!DOCTYPE html>
<html  <?php language_attributes(); ?>>
<head>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-52D8F5Q');</script>
	<!-- End Google Tag Manager -->

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta content="telephone=no" name="format-detection">
    <meta name="HandheldFriendly" content="true">
	<title><?php echo get_bloginfo('name');?></title>
	<meta name="description" content="<?php echo get_bloginfo('description');?>">
	<!-- <?php wp_deregister_script('jquery'); ?> -->
	<?php wp_head(); ?>
<!-- 	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/src/css/libs.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/src/css/main.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css"> -->
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Roboto" rel="stylesheet">
    <!-- <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/src/favicon.png" type="image/png"> -->
</head>
<body  <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-52D8F5Q"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->



<div class="max-576"></div>	
<div class="header__top">
	<div class="container">
		<div class="row header__row">
			<a href="/" class="logo">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/src/img/logo.svg" alt="doctor dmitriy shamrai">
			</a>
			<div class="d-lg-flex d-md-block d-none">
				<div class="header__block">
					<a href="https://goo.gl/maps/7k77v2Z8r5mXjznR9" target="_blank" class="header__adress">
						<div class="location-icon header__icon">
						    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53 54" fill="none" style="height: calc(100% + 2px); width: 100%; top: -2px;">
						  	<path d="M36.5397 42C35.9874 42 35.5397 42.4477 35.5397 43C35.5397 43.5523 35.9874 44 36.5397 44L36.5397 42ZM16.3142 44C16.8664 44 17.3142 43.5523 17.3142 43C17.3142 42.4477 16.8664 42 16.3142 42L16.3142 44ZM36.5397 44C40.4017 44 44.059 44.6114 46.7702 45.5116C48.1294 45.9628 49.21 46.4733 49.9526 46.9866C50.7347 47.5273 50.9635 47.945 50.9954 48.1521C51.0092 48.242 51.0258 48.5381 50.3401 49.015C49.6487 49.4959 48.4316 50.0071 46.5102 50.4647C42.6872 51.3751 36.4036 52 26.8666 52V54C36.456 54 42.9233 53.3749 46.9735 52.4103C48.9886 51.9304 50.4887 51.3479 51.4821 50.6569C52.4814 49.9619 53.1506 49.008 52.9721 47.8479C52.8116 46.805 52.003 45.9727 51.0899 45.3415C50.1373 44.683 48.8649 44.0997 47.4004 43.6134C44.4645 42.6386 40.5921 42 36.5397 42L36.5397 44ZM26.8666 52C17.3318 52 10.937 51.3755 6.96175 50.4629C4.96659 50.0048 3.65 49.4892 2.86028 48.9904C2.05236 48.4802 1.99753 48.1292 2.00011 48.0247C2.00399 47.8675 2.13727 47.4927 2.84494 46.9665C3.51782 46.4662 4.5422 45.9604 5.8774 45.5101C8.53759 44.6129 12.2402 44 16.3142 44L16.3142 42C12.0612 42 8.13778 42.6371 5.23827 43.6149C3.79362 44.1021 2.55472 44.69 1.65157 45.3616C0.783208 46.0073 0.0277067 46.8825 0.000720036 47.9753C-0.027567 49.1208 0.744648 50.0198 1.79236 50.6814C2.85827 51.3546 4.4259 51.9327 6.51422 52.4121C10.7059 53.3745 17.2751 54 26.8666 54V52Z" fill="#FF850C"/>
						  	<path class="svg-location" d="M27.0017 47L40.6025 27.9818C45.7038 21.3975 44.9662 10.5747 39.0236 4.82214C35.8124 1.71238 31.5427 0 27.0017 0C22.4607 0 18.191 1.71238 14.9799 4.82128C9.03722 10.5739 8.2996 21.3966 13.3805 27.9552L27.0017 47ZM27.1586 10.3001C30.5808 10.3001 33.3646 12.9961 33.3646 16.3084C33.3646 19.6207 30.5808 22.3168 27.1586 22.3168C23.7365 22.3168 20.9527 19.6207 20.9527 16.3084C20.9527 12.9961 23.7365 10.3001 27.1586 10.3001Z" fill="#0D6073"/>
						  </svg>
					  	</div>
						<?php pll_e('Харьковское шоссе,121') ?>
					</a>
				</div>
				<div class="header__block">
					<a href="https://goo.gl/maps/DkkFLVW8anvijdGb8" target="_blank" class="header__adress">
						<div class="location-icon header__icon">
						    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53 54" fill="none" style="height: calc(100% + 2px); width: 100%; top: -2px;">
						  	<path d="M36.5397 42C35.9874 42 35.5397 42.4477 35.5397 43C35.5397 43.5523 35.9874 44 36.5397 44L36.5397 42ZM16.3142 44C16.8664 44 17.3142 43.5523 17.3142 43C17.3142 42.4477 16.8664 42 16.3142 42L16.3142 44ZM36.5397 44C40.4017 44 44.059 44.6114 46.7702 45.5116C48.1294 45.9628 49.21 46.4733 49.9526 46.9866C50.7347 47.5273 50.9635 47.945 50.9954 48.1521C51.0092 48.242 51.0258 48.5381 50.3401 49.015C49.6487 49.4959 48.4316 50.0071 46.5102 50.4647C42.6872 51.3751 36.4036 52 26.8666 52V54C36.456 54 42.9233 53.3749 46.9735 52.4103C48.9886 51.9304 50.4887 51.3479 51.4821 50.6569C52.4814 49.9619 53.1506 49.008 52.9721 47.8479C52.8116 46.805 52.003 45.9727 51.0899 45.3415C50.1373 44.683 48.8649 44.0997 47.4004 43.6134C44.4645 42.6386 40.5921 42 36.5397 42L36.5397 44ZM26.8666 52C17.3318 52 10.937 51.3755 6.96175 50.4629C4.96659 50.0048 3.65 49.4892 2.86028 48.9904C2.05236 48.4802 1.99753 48.1292 2.00011 48.0247C2.00399 47.8675 2.13727 47.4927 2.84494 46.9665C3.51782 46.4662 4.5422 45.9604 5.8774 45.5101C8.53759 44.6129 12.2402 44 16.3142 44L16.3142 42C12.0612 42 8.13778 42.6371 5.23827 43.6149C3.79362 44.1021 2.55472 44.69 1.65157 45.3616C0.783208 46.0073 0.0277067 46.8825 0.000720036 47.9753C-0.027567 49.1208 0.744648 50.0198 1.79236 50.6814C2.85827 51.3546 4.4259 51.9327 6.51422 52.4121C10.7059 53.3745 17.2751 54 26.8666 54V52Z" fill="#FF850C"/>
						  	<path class="svg-location" d="M27.0017 47L40.6025 27.9818C45.7038 21.3975 44.9662 10.5747 39.0236 4.82214C35.8124 1.71238 31.5427 0 27.0017 0C22.4607 0 18.191 1.71238 14.9799 4.82128C9.03722 10.5739 8.2996 21.3966 13.3805 27.9552L27.0017 47ZM27.1586 10.3001C30.5808 10.3001 33.3646 12.9961 33.3646 16.3084C33.3646 19.6207 30.5808 22.3168 27.1586 22.3168C23.7365 22.3168 20.9527 19.6207 20.9527 16.3084C20.9527 12.9961 23.7365 10.3001 27.1586 10.3001Z" fill="#0D6073"/>
						  </svg>
					  	</div>
						<?php pll_e('Стретенская,4/13') ?>
					</a>
				</div>
			</div>
			<div class="header__block d-sm-flex d-none">
				<div class="header__social">
					<a title="telegram" class="social__Link" href="https://web.telegram.org/#/im?p=@DrShamrai" target="_blank">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/src/icon/telegram.svg" alt="telegram">
					</a>
					<a title="viber" class="social__Link" href="viber://chat?number=380967990395" target="_blank">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/src/icon/viber.svg" alt="viber">
					</a>
					<a title="whatsapp"  class="social__Link" href="https://api.whatsapp.com/send?phone=380967990395" target="_blank">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/src/icon/whatsapp.svg" alt="whatsapp">
					</a>
					<a  title="facebook" class="social__Link" href="https://www.messenger.com/t/dmitriy.shamrai" target="_blank">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/src/icon/facebook.svg" alt="facebook">
					</a>
				</div>
			</div>
			<div class="header__block">
				<a href="tel:+380967990395" class="header__phone">
			        <span class="phone-icon header__icon">
			        	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 349 349" fill="none">
				            <path d="M309.893 280.854L260.938 231.367C251.187 221.55 235.039 221.849 224.948 232.051L200.284 256.975C198.726 256.107 197.113 255.2 195.417 254.238C179.842 245.516 158.525 233.56 136.093 210.871C113.594 188.133 101.755 166.554 93.0986 150.801C92.1851 149.132 91.3099 147.523 90.4457 145.995L106.999 129.289L115.137 121.053C125.243 110.835 125.522 94.5182 115.794 84.6734L66.838 35.1803C57.1097 25.3493 40.9544 25.6476 30.8482 35.8652L17.0508 49.891L17.4278 50.2693C12.8014 56.2361 8.93538 63.1178 6.05842 70.5389C3.40641 77.6029 1.75527 84.3438 1.00029 91.0985C-5.464 145.265 19.0252 194.769 85.4859 261.945C177.355 354.795 251.389 347.781 254.583 347.438C261.539 346.598 268.205 344.918 274.98 342.258C282.259 339.385 289.063 335.483 294.962 330.817L295.264 331.087L309.241 317.253C319.327 307.037 319.617 290.715 309.893 280.854Z" fill="#0d6073"/>
				    		<g class="svg-call">
					      		<path d="M187.464 116C211.558 116.027 231.083 134.559 231.113 157.429C231.113 162.005 235.022 165.714 239.842 165.714C244.663 165.714 248.571 162.005 248.571 157.429C248.533 125.411 221.197 99.4645 187.464 99.4286C182.643 99.4286 178.735 103.138 178.735 107.714C178.735 112.29 182.643 116 187.464 116Z" fill="#FF850C"/>
					      		<path d="M182.708 66.1161C235.588 66.1747 278.44 106.53 278.502 156.33C278.502 160.859 282.401 164.531 287.21 164.531C292.02 164.531 295.918 160.859 295.918 156.33C295.846 97.4751 245.202 49.7816 182.708 49.7143C177.898 49.7143 174 53.3856 174 57.9152C174 62.4448 177.898 66.1161 182.708 66.1161Z" fill="#FF850C"/>
					   			<path d="M182.7 16.4525C264.345 16.5383 330.509 79.1022 330.601 156.304C330.601 160.848 334.495 164.531 339.3 164.531C344.105 164.531 348 160.848 348 156.304C347.899 70.019 273.951 0.0944769 182.7 0C177.895 0 174 3.68268 174 8.22625C174 12.7698 177.895 16.4525 182.7 16.4525Z" fill="#FF850C"/>
					   		</g>   
				    	</svg>
			        </span>
 					+38 096 799 03 95
				</a>
				<button class="link header__link call-modal" data-modal="appointment"><?php pll_e('запись на прием') ?></button>
			</div>
		</div>
	</div>
</div>
<div class="header__navbar">
	<div class="container">
		<div class="row header__row">
			
			<div class="header__block navbar">
				<button class="menu__btn d-lg-none">
					<span class="menu__line"></span>
		          	<span class="menu__line"></span>
		          	<span class="menu__line"></span>
		          	<span class="menu__line mb-0"></span>
		        </button>
		        <div class="header__menu">
		        	<?php wp_nav_menu( [
		        		'menu'			  => 'top menu',
						'theme_location'  => 'top_menu',
						'menu_id'         => 'menuNav',
						'container'       => false, 
						'menu_class'      => 'nav header__nav', 
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 0,
					]);  ?>
					<div class="d-md-none mt-4">
						<div class="header__block">
							<a href="https://goo.gl/maps/7k77v2Z8r5mXjznR9" target="_blank" class="header__adress">
								<div class="location-icon header__icon">
								    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53 54" fill="none" style="height: calc(100% + 2px); width: 100%; top: -2px;">
								  	<path d="M36.5397 42C35.9874 42 35.5397 42.4477 35.5397 43C35.5397 43.5523 35.9874 44 36.5397 44L36.5397 42ZM16.3142 44C16.8664 44 17.3142 43.5523 17.3142 43C17.3142 42.4477 16.8664 42 16.3142 42L16.3142 44ZM36.5397 44C40.4017 44 44.059 44.6114 46.7702 45.5116C48.1294 45.9628 49.21 46.4733 49.9526 46.9866C50.7347 47.5273 50.9635 47.945 50.9954 48.1521C51.0092 48.242 51.0258 48.5381 50.3401 49.015C49.6487 49.4959 48.4316 50.0071 46.5102 50.4647C42.6872 51.3751 36.4036 52 26.8666 52V54C36.456 54 42.9233 53.3749 46.9735 52.4103C48.9886 51.9304 50.4887 51.3479 51.4821 50.6569C52.4814 49.9619 53.1506 49.008 52.9721 47.8479C52.8116 46.805 52.003 45.9727 51.0899 45.3415C50.1373 44.683 48.8649 44.0997 47.4004 43.6134C44.4645 42.6386 40.5921 42 36.5397 42L36.5397 44ZM26.8666 52C17.3318 52 10.937 51.3755 6.96175 50.4629C4.96659 50.0048 3.65 49.4892 2.86028 48.9904C2.05236 48.4802 1.99753 48.1292 2.00011 48.0247C2.00399 47.8675 2.13727 47.4927 2.84494 46.9665C3.51782 46.4662 4.5422 45.9604 5.8774 45.5101C8.53759 44.6129 12.2402 44 16.3142 44L16.3142 42C12.0612 42 8.13778 42.6371 5.23827 43.6149C3.79362 44.1021 2.55472 44.69 1.65157 45.3616C0.783208 46.0073 0.0277067 46.8825 0.000720036 47.9753C-0.027567 49.1208 0.744648 50.0198 1.79236 50.6814C2.85827 51.3546 4.4259 51.9327 6.51422 52.4121C10.7059 53.3745 17.2751 54 26.8666 54V52Z" fill="#FF850C"/>
								  	<path class="svg-location" d="M27.0017 47L40.6025 27.9818C45.7038 21.3975 44.9662 10.5747 39.0236 4.82214C35.8124 1.71238 31.5427 0 27.0017 0C22.4607 0 18.191 1.71238 14.9799 4.82128C9.03722 10.5739 8.2996 21.3966 13.3805 27.9552L27.0017 47ZM27.1586 10.3001C30.5808 10.3001 33.3646 12.9961 33.3646 16.3084C33.3646 19.6207 30.5808 22.3168 27.1586 22.3168C23.7365 22.3168 20.9527 19.6207 20.9527 16.3084C20.9527 12.9961 23.7365 10.3001 27.1586 10.3001Z" fill="#0D6073"/>
								  </svg>
							  	</div>
								<?php pll_e('Харьковское шоссе,121') ?>
							</a>
						</div>
						<div class="header__block">
							<a href="https://goo.gl/maps/RhxTmdhoBMhturuN9" target="_blank" class="header__adress">
								<div class="location-icon header__icon">
								    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53 54" fill="none" style="height: calc(100% + 2px); width: 100%; top: -2px;">
								  	<path d="M36.5397 42C35.9874 42 35.5397 42.4477 35.5397 43C35.5397 43.5523 35.9874 44 36.5397 44L36.5397 42ZM16.3142 44C16.8664 44 17.3142 43.5523 17.3142 43C17.3142 42.4477 16.8664 42 16.3142 42L16.3142 44ZM36.5397 44C40.4017 44 44.059 44.6114 46.7702 45.5116C48.1294 45.9628 49.21 46.4733 49.9526 46.9866C50.7347 47.5273 50.9635 47.945 50.9954 48.1521C51.0092 48.242 51.0258 48.5381 50.3401 49.015C49.6487 49.4959 48.4316 50.0071 46.5102 50.4647C42.6872 51.3751 36.4036 52 26.8666 52V54C36.456 54 42.9233 53.3749 46.9735 52.4103C48.9886 51.9304 50.4887 51.3479 51.4821 50.6569C52.4814 49.9619 53.1506 49.008 52.9721 47.8479C52.8116 46.805 52.003 45.9727 51.0899 45.3415C50.1373 44.683 48.8649 44.0997 47.4004 43.6134C44.4645 42.6386 40.5921 42 36.5397 42L36.5397 44ZM26.8666 52C17.3318 52 10.937 51.3755 6.96175 50.4629C4.96659 50.0048 3.65 49.4892 2.86028 48.9904C2.05236 48.4802 1.99753 48.1292 2.00011 48.0247C2.00399 47.8675 2.13727 47.4927 2.84494 46.9665C3.51782 46.4662 4.5422 45.9604 5.8774 45.5101C8.53759 44.6129 12.2402 44 16.3142 44L16.3142 42C12.0612 42 8.13778 42.6371 5.23827 43.6149C3.79362 44.1021 2.55472 44.69 1.65157 45.3616C0.783208 46.0073 0.0277067 46.8825 0.000720036 47.9753C-0.027567 49.1208 0.744648 50.0198 1.79236 50.6814C2.85827 51.3546 4.4259 51.9327 6.51422 52.4121C10.7059 53.3745 17.2751 54 26.8666 54V52Z" fill="#FF850C"/>
								  	<path class="svg-location" d="M27.0017 47L40.6025 27.9818C45.7038 21.3975 44.9662 10.5747 39.0236 4.82214C35.8124 1.71238 31.5427 0 27.0017 0C22.4607 0 18.191 1.71238 14.9799 4.82128C9.03722 10.5739 8.2996 21.3966 13.3805 27.9552L27.0017 47ZM27.1586 10.3001C30.5808 10.3001 33.3646 12.9961 33.3646 16.3084C33.3646 19.6207 30.5808 22.3168 27.1586 22.3168C23.7365 22.3168 20.9527 19.6207 20.9527 16.3084C20.9527 12.9961 23.7365 10.3001 27.1586 10.3001Z" fill="#0D6073"/>
								  </svg>
							  	</div>
								<?php pll_e('Стретенская,4/13') ?>
							</a>
						</div>
					</div>
					<div class="d-sm-none mt-4">
						<div class="header__social">
							<a title="telegram" class="social__Link" href="https://telegram.me/DrShamrai" target="_blank">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/src/icon/telegram.svg" alt="telegram">
							</a>
							<a title="viber" class="social__Link" href="viber://chat?number=380967990395" target="_blank">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/src/icon/viber.svg" alt="viber">
							</a>
							<a title="whatsapp"  class="social__Link" href="https://api.whatsapp.com/send?phone=380967990395" target="_blank">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/src/icon/whatsapp.svg" alt="whatsapp">
							</a>
							<a  title="facebook" class="social__Link" href="https://www.messenger.com/t/dmitriy.shamrai" target="_blank">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/src/icon/facebook.svg" alt="facebook">
							</a>
						</div>
					</div>
		        </div>
			</div>
			<div class="header__block sticky-show">
				<button class="btn btn-xl call-modal" data-modal="appointment"><?php pll_e('запись на прием') ?></button>
			</div>
			<div class="header__block sticky-hide ml-auto">
				<button class="search__btn" id="search"><span class="icon-search"></span></button>
			</div>
			<div class="header__block sticky-hide">
				<div class="lang">
					<div class="dropdown">
						<div class="dropdown__wrap">
					        <div class="dropdown__value"><?php echo pll_current_language('name'); ?></div>
					        <button class="dropdown__btn"><div class="icon-down"></div></button>
					    </div>
			        	<ul  class="dropdown__items">
			        		<?php pll_the_languages(array('hide_current'=>1));?>					        
			        	</ul>
				    </div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="header__search" id="headerSearch">
	<div class="container">
		<?php echo get_search_form(); ?>
	</div>
</div>
<div class="overlay"></div>