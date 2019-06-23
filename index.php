<?php
/*
Template Name: main Page
*/
?>

<!DOCTYPE html>
<html  <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta content="telephone=no" name="format-detection">
    <meta name="HandheldFriendly" content="true">
	<title>Tekton</title>
	<?php wp_deregister_script('jquery'); ?>
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/src/css/libs.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/src/css/main.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Roboto" rel="stylesheet">
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/src/img/favicon.png" type="image/png">
</head>
<body  <?php body_class(); ?>>
<style>
	@media(min-width: 992px) and (min-height: 725px){
		.line__wrap{
			position: absolute;
			top: 0;
			left: 0;
			width: 100vw;
			height: 100%;
		}
		.line__wrap .container{
			height: 100%;
		}
		.line__wrap .row{
			height: 100%;
		}
		.line-v{
			width: 1px;
			height: 0vh;
			background-color: rgba(255,255,255,0.1);
			position: absolute;
			transition: all 0s;
			z-index: 6;
			top: 0;
		}
		.line-anim .line-v{
			height: 100%;
			transition: height 1s 1s;
		}
		.line-anim .line-v:nth-child(1){
	    		transition: height 1s 1s;
	    	}
	    .line-anim .line-v:nth-child(2){
				transition: height 2s 1.5s;
	    	}
	    .line-anim .line-v:nth-child(3){
				transition: height 1s 1.2s;
	    	}
	    .line-anim .line-v:nth-child(4){
				transition: height 1.5s 1.7s;
	    	}
	    .line-anim .line-v:nth-child(5){
				transition: height 1s 1s;
	    	}
		.line-anim .line-v:nth-child(6){
				transition: height 1s 2s;
	    	}
	    .line-anim .line-v:nth-child(7){
				transition: height 1.5s 1s;
	    	}
	    .line-anim .line-v:nth-child(8){
				transition: height 0.5s 1s;
	    	}	
	}
		.line-h{
			width: 0%;
			height: 1px;
			background-color: rgba(255,255,255,0.1);
			position: absolute;
			transition: all 0s;
			z-index: 9;
			left: 0;
		}
		.line-anim .line-h{
			position: fixed;
			width: 100%;
			top: 83px;
			transition: width 1s 1s;
			
		}
		@media (max-width: 991px){
			.line-anim .line-h{
				top:  60px;
			}
		}
		.slide-left{
			transform: translateX(-150%);
		    transition: all 1s;
		}
		.slide-left-anim{
		    	transform: translateX(0); 
		}
		.showup{
			opacity: 0;
			transition: all 1s;
		}
		.showup-anim{
			opacity: 1;
		}
	    
</style>
	<div class="line__wrap">
		<div class="line-v line-v1"></div>
		<div class="line-v line-v2"></div>
		<div class="line-v line-v3"></div>
		<div class="line-v line-v4"></div>
		<div class="line-v line-v5"></div>
		<div class="line-v line-v6"></div>
		<div class="line-v line-v7"></div>
		<div class="line-h"></div>
		<div class="container">
			<div class="row">
				<div class="line-v line-v8"></div>
				<div class="line-v line-v9"></div>
				<div class="line-v line-v10"></div>
				<div class="line-v line-v11"></div>
				<div class="line-v line-v12"></div>
				<div class="line-v line-v13"></div>
			</div>
		</div>
	</div>
<div id="fullpage" class="showup">
		<div class="header">
			<div class="full__container header__container">
				<a data-menuanchor="mainPage" href="#mainPage" class="logo">
					<img class="logo__img" src="<?php bloginfo('stylesheet_directory'); ?>/src/img/Logo.svg" alt="">
					<span class="logo__name"><span class="main-color">T</span>EKTON</span>
				</a>
				<div class="navbar">
					<button class="menu__btn">
						<span class="menu__line"></span>
			          	<span class="menu__line"></span>
			          	<span class="menu__line"></span>
			        </button>
					<ul id="menuNav" class="nav">
						<!-- <li data-menuanchor="firstPage" class="nav__item"><a href="#firstPage" class="nav__link"></a></li> -->
						<li data-menuanchor="aboutUs" class="nav__item"><a href="#aboutUs" class="nav__link">
							<?php pll_e('о нас') ?>
							</a>
						</li>
						<li data-menuanchor="ourLocation" class="nav__item"><a href="#ourLocation" class="nav__link">
							<?php pll_e('локации') ?>
							</a>
						</li>
						<li data-menuanchor="ourServices" class="nav__item"><a href="#ourServices" class="nav__link">
							<?php pll_e('услуги') ?>
							</a>
						</li>
						<li data-menuanchor="ourPortfolio" class="nav__item"><a href="#ourPortfolio" class="nav__link">
							<?php pll_e('портфолио') ?>
							</a>
						</li>
						<li data-menuanchor="ourTeam" class="nav__item"><a href="#ourTeam" class="nav__link">
							<?php pll_e('команда') ?>
							</a>
						</li>
						<li data-menuanchor="ourContacts" class="nav__item"><a href="#ourContacts" class="nav__link">
						<?php pll_e('контакты') ?>
							</a>
						</li>
						<li class="nav__item lang__item">
							<div class="dropdown">
								<div class="dropdown__wrap">
							        <div class="dropdown__value"><?php echo pll_current_language('name'); ?></div>
							        <button class="dropdown__btn"><div class="icon-down"></div></button>
							    </div>
					        	<ul  class="dropdown__items">
					        		<?php pll_the_languages(array('hide_current'=>1));?>					        
					        	</ul>
					            <!-- <a href="<?php pll_e('/') ?>" class="dropdown__item"><?php pll_e('En') ?></a> -->
						    </div>
						</li>
					</ul>

				</div>
			</div>
		</div>

		<div data-anchor="mainPage" id="main" class="section main showup">
			<div class="main__slider">
				<div class="main__slide">
					<div class="main__desc">
						<div class="full__container">
							<div class="main__title"><?php pll_e('Современные архитектурные решения') ?></div>
						</div>
					</div>	
					<img src="<?php bloginfo('stylesheet_directory'); ?>/src/img/portfolio1.jpg" alt="" class="main__img" style="    object-position: bottom;">
				</div>
				<div class="main__slide">
					<div class="main__desc">
						<div class="full__container">				
							<div class="main__title"><?php pll_e('Высочайший профессиональный уровень') ?></div>
						</div>
					</div>
					<img src="<?php bloginfo('stylesheet_directory'); ?>/src/img/portfolio2.jpg" alt="" class="main__img">
				</div>
				<div class="main__slide">
					<div class="main__desc">
						<div class="full__container">
							<div class="main__title"><?php pll_e('Индивидуальный креативный подход') ?></div>
						</div>
					</div>
					<img src="<?php bloginfo('stylesheet_directory'); ?>/src/img/portfolio3.jpg" alt="" class="main__img">		
				</div>
			</div>
		</div>

		<div data-anchor="aboutUs" id="first" class="section first showup">
			<div class="container">
				<div class="row mb-lg-5 mb-3">
					<div class="col-12">
						<h1 class="h1 text-left slide-left"><?php pll_e('Архитектурная мастерская') ?>
						<!-- <span class="fz-mega"><span class="main-color">т</span><?php pll_e('ектон') ?></span></h1> -->
					</div>
					<div class="col-md-8 col-12">
						<p class="mt-0 mb-4 slide-left"><?php the_field('screen1-text'); ?>.
						</p>
						<a href="#contactForm" class="btn mb-md-5 my-0 mt-md-3 showup">
							<?php pll_e('напишите нам') ?>
						</a>
					</div>
				</div>
			</div>
			<div class="social first__social">
				<button class="social__btn"><span class="icon-facebook"></span></button>
				<button class="social__btn"><span class="icon-instagram"></span></button>
			</div>
		</div>

		<div data-anchor="ourLocation" id="work" class="section">
			<div class="work">
				<div class="h1 px-3"><?php the_field('work-title'); ?></div>		
				<div id="workMap" class="work__map mt-xl-3 mt-0"></div>
			</div>
		</div>

		<?php
		 	$service = get_field('servises');
		?>

		<div data-anchor="ourServices" id="services" class="section">
			<div class="container services">
				<div class="row">		
					<div class="col-lg-8 col-12 mx-auto">
						<h2 class="h1"><?php pll_e('услуги') ?></h2>
						<p class="text-center"><?php echo $service['services-desc']; ?></p>			
					</div>
					
					<div class="services__row">
						<div class="services__block">
							<div class="services__icon"><span class="icon-903"></span></div>
							<div class="services__name"><?php echo $service['service-2-title']; ?></div>	
							<div class="services__text"><?php echo $service['service-text-2']; ?></div>	
						</div>
						<div class="services__block">
							<div class="services__icon"><span class="icon-918"></span></div>
							<div class="services__name"><?php echo $service['service-3-title']; ?></div>	
							<div class="services__text"><?php echo $service['service-text-3']; ?></div>	
						</div>
						<div class="services__block">
							<div class="services__icon"><span class="icon-917"></span></div>
							<div class="services__name"><?php echo $service['service-4-title']; ?></div>	
							<div class="services__text"><?php echo $service['service-text-4']; ?></div>	
						</div>
						<div class="services__block">
							<div class="services__icon"><span class="icon-919"></span></div>
							<div class="services__name"><?php echo $service['service-1-title']; ?></div>	
							<div class="services__text"><?php echo $service['service-text-1']; ?></div>				
						</div>
						<div class="services__block">
							<div class="services__icon"><span class="icon-916"></span></div>
							<div class="services__name"><?php echo $service['service-5-title']; ?></div>	
							<div class="services__text"><?php echo $service['service-text-5']; ?></div>		
						</div>
					</div>

				</div>
			</div>
		</div>

		<div data-anchor="ourPortfolio" id="portfolio" class="section portfolio">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2 class="h1"><?php pll_e('портфолио') ?></h2>
						<p class="text-center mx-auto"><?php the_field('portfolio-desc'); ?></p>
					</div>					
				</div>
			</div>
			<div id="portfolioSlider">
				<?php 
		            if (get_post_gallery()) :
		                $gallery = get_post_gallery( get_the_ID(), false );
		                $gallery_image_ids = explode(",", $gallery['ids']);	               
		                foreach( $gallery_image_ids as $id ) : ?>

						<div class="slider__item">

							<div class="slider__wrap">
								<a class="slider__image" href="<?php echo wp_get_attachment_url($id);  ?>" data-lightbox="gallery" data-title="<?php echo wp_get_attachment_caption( $id);  ?>">
									<img class="slider__img" 
									srcset="<?php echo wp_get_attachment_thumb_url($id);?> 991w,
									<?php echo wp_get_attachment_image_url($id, 'medium');?> 1360w, <?php echo wp_get_attachment_image_url($id, 'large');?>"
									src="<?php echo wp_get_attachment_url($id);?>"
								 	alt="<?php echo get_post_meta($id, '_wp_attachment_image_alt', true );  ?>"/>			
								</a>
								<div class="slider__desc"><?php echo wp_get_attachment_caption( $id);  ?></div>
							</div>
						</div>

					<?php
                	endforeach;
              	endif; 
              ?>
			</div>
			<div class="row jastify-content-center mx-0">
				<div class="slider__nav">
				</div>
			</div>
		</div>

		<div data-anchor="ourTeam" id="team" class="section team">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2 class="h1"><?php pll_e('команда') ?></h2>
						<p class="text-center mb-5"><?php the_field('team-text'); ?></p>
					</div>
					<div class="row team__row">
						<div class="col-lg-4 col-md-6 col-12">
							<div class="team__block">
								<div class="team__img">
									<img class="" data-src="<?php bloginfo('stylesheet_directory'); ?>/src/img/phpto1.jpg" alt="" >
								</div>		
								<div class="team__text">
									<div class="team__name"><?php pll_e('Вакула Александр Григорьевич') ?></div>
									<div class="team__prof"><?php pll_e('Директор, ведущий архитектор') ?></div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<div class="team__block">
								<div class="team__img">
									<img class="" data-src="<?php bloginfo('stylesheet_directory'); ?>/src/img/photo3.jpg" alt="" >
								</div>		
								<div class="team__text">
									<div class="team__name"><?php pll_e('Вакула Ирина Михайловна') ?></div>
									<div class="team__prof"><?php pll_e('Ведущий архитектор') ?></div>
								</div>
							</div>
						</div>		
						<div class="col-lg-4 col-md-6 col-12">
							<div class="team__block">
								<div class="team__img">
									<img class="" data-src="<?php bloginfo('stylesheet_directory'); ?>/src/img/phpto7.jpg" alt="" >
								</div>		
								<div class="team__text">
									<div class="team__name"><?php pll_e('Ткачук Тарас Владимирович') ?></div>
									<div class="team__prof"><?php pll_e('Ведущий архитектор') ?></div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<div class="team__block">
								<div class="team__img">
									<img class="" data-src="<?php bloginfo('stylesheet_directory'); ?>/src/img/phpto2.jpg" alt="" >
								</div>		
								<div class="team__text">
									<div class="team__name"><?php pll_e('Майстер Алексей Александрович') ?></div>
									<div class="team__prof"><?php pll_e('Ведущий архитектор') ?></div>
								</div>
							</div>
						</div>	
						<div class="col-lg-4 col-md-6 col-12">
							<div class="team__block">
								<div class="team__img">
									<img class="" data-src="<?php bloginfo('stylesheet_directory'); ?>/src/img/phpto8.jpg" alt="" >
								</div>		
								<div class="team__text">
									<div class="team__name"><?php pll_e('Майстер Мария Владимировна') ?></div>
									<div class="team__prof"><?php pll_e('Ведущий архитектор') ?></div>
								</div>
							</div>
						</div>	
						<div class="col-lg-4 col-md-6 col-12">
							<div class="team__block">
								<div class="team__img">
									<img class="" data-src="<?php bloginfo('stylesheet_directory'); ?>/src/img/photo4.jpg" alt="" >
								</div>		
								<div class="team__text">
									<div class="team__name"><?php pll_e('Бабенко Вероника Игоревна') ?></div>
									<div class="team__prof"><?php pll_e('Архитектор') ?></div>
								</div>
							</div>
						</div>						
						
					</div>
				</div>
			</div>
		</div>

		<div data-anchor="ourContacts" id="contacts" class="section">
			<div class="contacts__screen">
				<div class="contacts__map">
					<div id="contactsMap"></div>
				</div>
				<div class="contacts">
					<div class="h1 text-md-left text-center"><?php pll_e('контакты') ?></div>
					<p class=" text-md-left text-center"><?php the_field('work_time'); ?></p>
					<div class="contacts__content">
						<div class="contacts__info">
							<div class="contacts__title">
								<?php pll_e('Свяжитесь с нами') ?>
							</div>
							<div class="contacts__phone contacts__icon">
								<div class="phone__item">(044) 234 76 17</div>
								<div class="phone__item">(067) 466 51 65</div>
								<div class="phone__item">(050) 339 01 78</div>
							</div>
							<div class="contacts__email contacts__icon"  >
								<div class="email__item">tekton@i.ua</div>
								<div class="email__item" id="contactForm">tekton@ukr.net</div>	
							</div>
							<div class="contacts__adress contacts__icon"><?php pll_e('г.Киев, Чеховский переулок, дом 3, офис 3')?></div>
						</div>
						<div class="contacts__form">
							<div class="contacts__title"><?php pll_e('Или напишите нам')?></div>
							<?php if ( is_active_sidebar( 'pet-contact-page-form' ) ) : ?>
				                <?php dynamic_sidebar( 'pet-contact-page-form' ); ?>
				              <?php endif; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="footer">
				<div class="full__container">
					<div class="footer__row">
						<div class="copyright">tekton.kiev.ua © 2009-2014</div>
						<div class="social footer__social">
							<button class="social__btn"><span class="icon-facebook"></span></button>
							<button class="social__btn"><span class="icon-instagram"></span></button>
						</div>
					</div>					
				</div>
			</div>
		</div>
		

	</div>

	<script>
        var map, contacts_map,
	        coordinates  = [
		        {lat: 50.458602, lng: 30.507418},
		        {lat: 46.481543, lng: 30.725583},
		        {lat: 49.839386, lng: 24.026861},
		        {lat: 49.418551, lng: 26.995956},
		        {lat: 49.432425, lng: 32.058159},
		        {lat: 48.757076, lng: 30.220213},
		        {lat: 50.075859, lng: 14.437836},
		        {lat: 40.130152, lng: 9.009840},
		        {lat: 41.305681, lng: 69.249188},
	        ],
	        contacts = {lat: 50.450607, lng: 30.502241};

	    var zoom_val;
		function setZoom(x){
			if (x.matches) { // If media query matches
			   zoom_val = 3;
			} else {
			   zoom_val = 5;
			}
		};
		var x = window.matchMedia("(max-width: 767px)")
		setZoom(x);
		console.log(zoom_val);
		x.addListener(setZoom);
	       

	    function initMap() {
	        map = new google.maps.Map(document.getElementById('workMap'), {
	        center: {lat: 46.615224, lng: 20.605069},
	        zoom: zoom_val,
	        disableDefaultUI: true
	
	    	});
	       //   var marker, i;
			     //    for (i = 0; i < coordinates.length; i++) {  
		      // marker = new google.maps.Marker({
		      //   position: new google.maps.LatLng(coordinates[i][1], coordinates[i][2]),
		      //   map: map
		      // });

		    var markerImage = new google.maps.MarkerImage('<?php bloginfo('stylesheet_directory'); ?>/src/img/marker4.png',
	            new google.maps.Size(48, 48),
	            new google.maps.Point(0, 0),
	            new google.maps.Point(24, 24));

	    	var markers = coordinates.map(function(coordinates) {
	          return new google.maps.Marker({
	            position: coordinates,
	            center:  coordinates,
	            map: map,
		        icon: markerImage,
			    });
	  
	        });

			var map_options = 
				[
				  {
				    "elementType": "geometry",
				    "stylers": [
				      {
				        "color": "#acacac"
				      }
				    ]
				  },
				  {
				    "elementType": "geometry.fill",
				    "stylers": [
				      {
				        "color": "#acacac"
				      }
				    ]
				  },
				  {
				    "elementType": "geometry.stroke",
				    "stylers": [
				      {
				        "color": "#8e8e8e"
				      }
				    ]
				  },
				  {
				    "elementType": "labels.icon",
				    "stylers": [
				      {
				        "visibility": "off"
				      }
				    ]
				  },
				  {
				    "elementType": "labels.text.fill",
				    "stylers": [
				      {
				        "color": "#2c2c2c"
				      }
				    ]
				  },
				  {
				    "elementType": "labels.text.stroke",
				    "stylers": [
				      {
				        "visibility": "off"
				      }
				    ]
				  },
				  {
				    "featureType": "administrative",
				    "elementType": "geometry.fill",
				    "stylers": [
				      {
				        "color": "#acacac"
				      }
				    ]
				  },
				  {
				    "featureType": "administrative",
				    "elementType": "labels.icon",
				    "stylers": [
				      {
				        "saturation": 5
				      },
				      {
				        "visibility": "simplified"
				      }
				    ]
				  },
				  {
				    "featureType": "administrative",
				    "elementType": "labels.text.fill",
				    "stylers": [
				      {
				        "color": "#2e2d28"
				      }
				    ]
				  },
				  {
				    "featureType": "administrative.country",
				    "elementType": "labels.text.fill",
				    "stylers": [
				      {
				        "color": "#2e2d28"
				      }
				    ]
				  },
				  {
				    "featureType": "administrative.land_parcel",
				    "elementType": "labels.text.fill",
				    "stylers": [
				      {
				        "color": "#2e2d28"
				      }
				    ]
				  },
				  {
				    "featureType": "administrative.locality",
				    "elementType": "labels.text.fill",
				    "stylers": [
				      {
				        "color": "#2e2d28"
				      }
				    ]
				  },
				  {
				    "featureType": "administrative.neighborhood",
				    "elementType": "labels.text.fill",
				    "stylers": [
				      {
				        "color": "#2e2d28"
				      }
				    ]
				  },
				  {
				    "featureType": "administrative.province",
				    "elementType": "labels.text.fill",
				    "stylers": [
				      {
				        "color": "#2e2d28"
				      }
				    ]
				  },
				  {
				    "featureType": "landscape",
				    "elementType": "geometry.fill",
				    "stylers": [
				      {
				        "color": "#acacac"
				      }
				    ]
				  },
				  {
				    "featureType": "poi",
				    "elementType": "geometry",
				    "stylers": [
				      {
				        "color": "#eeeeee"
				      },
				      {
				        "visibility": "off"
				      }
				    ]
				  },
				  {
				    "featureType": "poi",
				    "elementType": "labels.text.fill",
				    "stylers": [
				      {
				        "color": "#757575"
				      }
				    ]
				  },
				  {
				    "featureType": "poi.park",
				    "elementType": "geometry",
				    "stylers": [
				      {
				        "color": "#e5e5e5"
				      }
				    ]
				  },
				  {
				    "featureType": "poi.park",
				    "elementType": "labels.text.fill",
				    "stylers": [
				      {
				        "visibility": "off"
				      }
				    ]
				  },
				  {
				    "featureType": "road",
				    "elementType": "geometry",
				    "stylers": [
				      {
				        "color": "#8e8e8e"
				      }
				    ]
				  },
				  {
				    "featureType": "road.highway",
				    "elementType": "geometry",
				    "stylers": [
				      {
				        "color": "#8e8e8e"
				      },
				      {
				        "visibility": "off"
				      }
				    ]
				  },
				  {
				    "featureType": "road.highway",
				    "elementType": "labels.text.fill",
				    "stylers": [
				      {
				        "visibility": "off"
				      }
				    ]
				  },
				  {
				    "featureType": "transit.line",
				    "elementType": "geometry",
				    "stylers": [
				      {
				        "visibility": "off"
				      }
				    ]
				  },
				  {
				    "featureType": "transit.station",
				    "elementType": "geometry",
				    "stylers": [
				      {
				        "visibility": "off"
				      }
				    ]
				  },
				  {
				    "featureType": "water",
				    "elementType": "geometry",
				    "stylers": [
				      {
				        "color": "#9c9c9c"
				      }
				    ]
				  },
				  {
				    "featureType": "water",
				    "elementType": "labels.text.fill",
				    "stylers": [
				      {
				        "color": "#9e9e9e"
				      }
				    ]
				  }
				];
			map.setOptions({styles: map_options});
			//marker.setAnimation('pulse');


			contacts_map = new google.maps.Map(document.getElementById('contactsMap'), {
		        center: contacts,
		        zoom: 17,
		        disableDefaultUI: true
	    	});
	    	var contacts_marker = new google.maps.Marker({
	            position: contacts,
	            map: contacts_map,
		        icon: '<?php bloginfo('stylesheet_directory'); ?>/src/img/contact_marker.png'
	        });
	    	contacts_map.setOptions({styles: map_options});
		};
    </script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQAFM5yg80i3SV-iJJMrioCP8YrBhbMy0&callback=initMap" async defer></script>

<!-- 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/src/js/libs.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/src/js/common.min.js"></script> -->
<script>
    document.addEventListener( 'wpcf7mailsent', function( event ) {
            var elements = document.querySelectorAll('.input-hoshi.focus');
            for (i = 0; i < elements.length; i++){
	            document.querySelector('.input-hoshi.focus').classList.remove('focus');
	        }
    }, false );
</script>

	<?php wp_footer(); ?>
</body>
</html>



