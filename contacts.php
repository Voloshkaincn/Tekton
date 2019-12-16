<?php
/*
Template Name: contacts
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

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQAFM5yg80i3SV-iJJMrioCP8YrBhbMy0&callback=initMap" async defer></script>


<?php get_footer(); ?>