<?php
/*
Template Name: main Page
*/

get_header(); ?>

<section class="banner">
	<div class="container">
		<div class="row">
			<div class="banner__image">
				<img class="banner__img" src="<?php bloginfo('stylesheet_directory'); ?>/src/img/top_photo3.png" alt="doctor shamrai" srcset="<?php bloginfo('stylesheet_directory'); ?>/src/img/top_photo3.png 1440w, <?php bloginfo('stylesheet_directory'); ?>/src/img/top_photo3.png 991w, <?php bloginfo('stylesheet_directory'); ?>/src/img/top_photo3_sm.png 540w ">
			</div>
			<div class="banner__content">
				<h1 class="banner__text h1">
					<?php the_field('banner-title'); ?>
				</h1>
				<h2 class="banner__text h2">
					<?php the_field('banner-subtitle'); ?>
				</h2>
				<div class="h3 banner__text">
					<?php the_field('banner-text'); ?>
				</div>
				<div class="">
					<button class="btn btn-xl call-modal" data-modal="appointment"><?php pll_e('запись на прием'); ?></button>
				</div>
				<!-- <a href="about_doctor.html" class="banner__text banner__link link">Читать подроблнее</a> -->
			</div>
		</div>
	</div>
</section>

<section class="specialization">
	<div class="container">
		<div class="row">
			<?php
			 	$specialization1 = get_field('specialization1');
			 	$specialization2 = get_field('specialization2');
			 	$specialization3 = get_field('specialization3');
			?>
			<div class="col-12 col-sm-10 col-md-4 mx-auto mb-3">
				<a href="<?php echo $specialization1['link']; ?>" class="spec__item">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/src/icon/proctology.svg" alt="icon" class="spec__img"  loading="lazy">
					<div class="title"><?php echo $specialization1['name']; ?></div>
					<div class="spec__text"><?php echo $specialization1['description']; ?></div>
					<div class="spec__link link">
						<?php pll_e('читать далее')?>
					</div>
				</a>
			</div>
			<div class="col-12 col-sm-10 col-md-4 mx-auto mb-3">
				<a href="<?php echo $specialization2['link']; ?>" class="spec__item">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/src/icon/surgery.svg" alt="icon" class="spec__img"  loading="lazy">
					<div class="title"><?php echo $specialization2['name']; ?></div>
					<div class="spec__text"><?php echo $specialization2['description']; ?></div>
					<div class="spec__link link">
						<?php pll_e('читать далее')?>
					</div>
				</a>
			</div>
			<div class="col-12 col-sm-10 col-md-4 mx-auto mb-3">
				<a href="<?php echo $specialization3['link']; ?>" class="spec__item">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/src/icon/oncology.svg" alt="icon" class="spec__img"  loading="lazy">
					<div class="title"><?php echo $specialization3['name']; ?></div>
					<div class="spec__text"><?php echo $specialization3['description']; ?></div>
					<div class="spec__link link">
						<?php pll_e('читать далее'); ?>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>

<section class="advantages mb-5">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-10 mx-auto">
				<div class="h2 text-center mb-5"><?php pll_e('Приемущества');?></div>
				<div class="advantages__list">
					<?php
					 	$advantages = get_field('advantages');
					 	foreach ($advantages as $i => $advantage):
					?>
					<div class="col-12 col-md-6">
						<div class="advantages__item">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/src/icon/<?php echo $advantage['image']; ?>.svg" alt="" class="advantages__img"  loading="lazy">
							<div class="advantages__text"><?php echo $advantage['text']; ?></div>
						</div>
					</div>
					<?php
					 	endforeach;
					?>
				</div>
				<div class="text-center">
					<button class="btn btn-xl call-modal" data-modal="appointment"><?php pll_e('запись на прием') ?></button>
				</div>
				
			</div>
		</div>
	</div>
</section>

<section class="facts">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6 d-flex">
				<div class="instagramm">
					<h2 class="h2"><?php pll_e('Мой Instagram'); ?></h2>
					<?php echo do_shortcode( '[jr_instagram id="2"]' ); ?>
				</div>
			</div>
			<div class="col-12 col-md-6 mt-5 mt-md-0  pl-md-0 pl-lg-3">
				<?php
				 	$aboutme = get_field('about_me');
				?>
				<div class="h2 text-center mb-5"><?php echo $aboutme['title']; ?></div>
				<?php echo  $aboutme['facts']; ?>
			</div>
		</div>
<!-- 		<div class="row">
			<div class="col-lg-10 col-12 my-5 mx-auto">
				<div class="youtube">
					<iframe  class="youtube__el" src="https://www.youtube.com/embed/TTqgJCEB-m4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen  loading="lazy"></iframe>
				</div>
			</div>
		</div> -->
	</div>
</section>

<?php 
	if (get_post_gallery()) :
?>
<section class="reviews">
	<div class="container">
		<h2 class="h2 text-center mb-5"><?php pll_e('Отзывы'); ?></h2>
		<div class="reviews__slider">
			<?php 
            	if (get_post_gallery()) :
                $gallery = get_post_gallery( get_the_ID(), false );
                $gallery_image_ids = explode(",", $gallery['ids']);	               
                foreach( $gallery_image_ids as $id ) : ?>
				
			<div class="reviews__slide">
				<a href="<?php echo wp_get_attachment_caption( $id);  ?>" target="_blanc">
					<img src="<?php echo wp_get_attachment_image_url($id, 'large');?>" alt="" class="reviews__img">
				</a>
			</div>

            <?php
            	endforeach;
          		endif; 
          		?>
		</div>
		<div class="row">
			<div class="slider__nav"></div>
		</div>
		
	</div>
</section>
<?php
	endif; 
?>

<section class="map">
	<div id="contactsMap"></div>
</section>

<script>
	
    var map,
    contact = {lat: 50.433991, lng: 30.581139},
    contacts = [
        {lat: 50.413850, lng: 30.665848},
        {lat: 50.454005, lng: 30.510829}
        ],
    zoom_val = 12,
    content0 = '<div>'+
		'<p>контакт 1</p>'+
		'</div>',
	content1 = '<div>'+
		'<p>контакт 2</p>'+
		'</div>';
	// contentAll = [content1, content2]
    if(window.innerWidth < 767 ){
		zoom_val = 11;
    }
    function initMap() {
		var map_options = 
			[
			  {
			    "featureType": "administrative",
			    "elementType": "geometry",
			    "stylers": [
			      {
			        "color": "#c0af7a"
			      }
			    ]
			  },
			  {
			    "featureType": "administrative",
			    "elementType": "geometry.fill",
			    "stylers": [
			      {
			        "color": "#c0af7a"
			      }
			    ]
			  },
			  {
			    "featureType": "administrative",
			    "elementType": "geometry.stroke",
			    "stylers": [
			      {
			        "color": "#c0af7a"
			      }
			    ]
			  },
			  {
			    "featureType": "administrative.locality",
			    "elementType": "labels.text.fill",
			    "stylers": [
			      {
			        "color": "#233456"
			      }
			    ]
			  },
			  {
			    "featureType": "administrative.neighborhood",
			    "elementType": "labels.text.fill",
			    "stylers": [
			      {
			        "color": "#4a737b"
			      }
			    ]
			  },
			  {
			    "featureType": "landscape",
			    "elementType": "geometry.fill",
			    "stylers": [
			      {
			        "color": "#f2f4f0"
			      }
			    ]
			  },
			  {
			    "featureType": "poi",
			    "elementType": "geometry.fill",
			    "stylers": [
			      {
			        "color": "#b8db95"
			      }
			    ]
			  },
			  {
			    "featureType": "road",
			    "elementType": "geometry.fill",
			    "stylers": [
			      {
			        "color": "#c1b8a8"
			      }
			    ]
			  },
			  {
			    "featureType": "road",
			    "elementType": "geometry.stroke",
			    "stylers": [
			      {
			        "color": "#ff8000"
			      }
			    ]
			  },
			  {
			    "featureType": "water",
			    "elementType": "geometry",
			    "stylers": [
			      {
			        "color": "#8fcdcd"
			      }
			    ]
			  }
			];
		map = new google.maps.Map(document.getElementById('contactsMap'), {
	        center: contact,
	        zoom: zoom_val,
	        disableDefaultUI: true,
	        zoomControl: true
    	});

    	var markers = contacts.map(function(contacts) {
          return new google.maps.Marker({
            position: contacts,
            map: map,
	        icon: '<?php bloginfo('stylesheet_directory'); ?>/src/icon/location.svg'
          });
        });
	    markers.forEach(function(el, i){
	       	el.addListener('click', function() {
	          map.setZoom(17);
	          map.setCenter(el.getPosition());
	        });
	    });
	};
	
</script>

<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQAFM5yg80i3SV-iJJMrioCP8YrBhbMy0&callback=initMap" async defer></script> -->

<?php get_footer(); ?>
