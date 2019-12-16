$(document).ready(function() {

	 lightbox.option({
      'disableScrolling': true
    })
/*=========== input-hoshi ==========*/
	$('.input-hoshi input').on('focus',function(){
		$(this).parents('.input-hoshi').addClass('focus');
	});

	$('.input-hoshi input').on('focusout', function(){
		//if field is NOT empty
		if($(this).val().trim() != ''){
			$(this).removeClass('error')
					.parent('.input-hoshi').addClass('focus')
					.find('.error__mess').hide();

		//validation on data correctli
			var name = $(this).attr('name'),
			value = $(this).val(),
			mess = $(this).data('error'),
			regExp;
			switch (name){
				case 'name': 
					regExp = [A-Za-z];
					break;
				default: 
					regExp = "";
					break;
			}
			if(regExp != "" && !regExp.test(value)){
				$(this).addClass("error");
				$(this).parent('.input-hoshi').find('.error__mess').show().text(mess);
			};
		}

		//if field is empty and data has not yet been submitted 
		else if(!$(this).hasClass('error')){
			$(this).parents('.input-hoshi').removeClass('focus')
		}
	});


	$(".input-phone").on('input', function(){
		$(this).val($(this).val().replace(/[^\d]/g, ''));
	})



/*=========== mobile menu button - hamburger ==========*/
	$(".menu__btn").click(function(){ 
	    $(this).toggleClass("menu__btn-active");
	    $('body').toggleClass("overflow-hidden");
	    $('.overlay').toggle();
	    $('.nav__link').on('click', function(){
	    		$(".menu__btn").removeClass('menu__btn-active');
	    });
	});

/*=========== dropdown menu ==========*/
	$('.dropdown').on('click', function(e){
	  e.stopPropagation();
	  if(!$(this).hasClass('dropdown-open')){
	    $(this).addClass('dropdown-open');  
	    $('html').one('click', function(){
	      $('.dropdown.dropdown-open').removeClass('dropdown-open');
	    });
	    $('.dropdown__item').on('click', function(e){
	      e.stopPropagation();
	      var value = $(this).text();
	      $(this).parents('.dropdown').removeClass('dropdown-open').find('.dropdown__input').val(value)
	    });
	  } else {
	    e.stopPropagation();
	    $(this).removeClass('dropdown-open');
	  }
	});

//======modal windows=====
	$('.call-modal').click(function(){
	  var modal_id = '#' + $(this).data('modal');
	  $(modal_id).fadeIn(300);
	  $('body').addClass('noscroll');
	});
	$('.modal__wrap').on("click", function(e){
	  //return false;
	  e.stopPropagation();
	});
	$('.modal_close').on("click", function(){
	  $('body').removeClass('noscroll');
	  $(this).parents('.modal').fadeOut(300);
	});
	$('.modal').on('click', function(){
	  $('body').removeClass('noscroll');
	  $('.modal').fadeOut(300);
	});

	$('.video__call').on('click', function(){
		var iframe = $(this).data('iframe');
		$('#VideoWrap').html(iframe);
	});
	$('#video .modal_close').on('click', function(){
		$('#VideoWrap').html('');
	});

/*========ixed menu========*/
$(window).scroll(function(){
	var scroll_pos = $(window).scrollTop();
	if(scroll_pos >= 68){
		$('.header__navbar').addClass('header__navbar-sticky');
		if($('.header__search').hasClass('open')){
			$('.header__search').removeClass('open');
			$('.search__btn').removeClass('open');
		};
	} else {
		$('.header__navbar').removeClass('header__navbar-sticky')
	}
});


/*========about me slider=========*/
	$('#aboutmeSlider').slick({
		infinite: true,
  		slidesToShow: 3,
  		dots: true,
  		speed: 500,
  		centerMode: true,
  		centerPadding: '0',
  		appendArrows: '.slider__nav',
  		appendDots: '.slider__nav',
  		prevArrow: '<button type="button" class="slick-prev"><span class="icon-double_arrow_left"></span></button>',
  		nextArrow: '<button type="button" class="slick-next"><span class="icon-double_arrow_right"></span></button>',
  		responsive: [
  			{
  				breakpoint: 576,
  				settings: {
  					slidesToShow: 1,
  				}

  			}
  		]
	});

/*========reviews slider=========*/
	$('.reviews__slider').slick({
		infinite: true,
  		slidesToShow: 3,
  		dots: true,
  		speed: 500,
  		// centerMode: true,
  		// centerPadding: '0',
  		appendArrows: '.slider__nav',
  		appendDots: '.slider__nav',
  		prevArrow: '<button type="button" class="slick-prev"><span class="icon-double_arrow_left"></span></button>',
  		nextArrow: '<button type="button" class="slick-next"><span class="icon-double_arrow_right"></span></button>',
  		responsive: [
  			{
  				breakpoint: 576,
  				settings: {
  					slidesToShow: 2,
  				}

  			},
  			{
  				breakpoint: 425,
  				settings: {
  					slidesToShow: 1,
  				}

  			}
  		]
	});


/*========category filter =========*/
$('.js_categorie').on('click', function (e) {
    e.preventDefault();
    var key = $(this).data("key");
    if(!$(this).hasClass('active')){
    	$('.js_categorie.active').removeClass('active');
    	$(this).addClass('active');
    }else{
    	return false;
    }
    
    // show|hide media
    var blog = $('.js_pacient_item');

    $.each(blog, function () {
        var is_filtered = true;
        var _item = $(this);

        if (key !== 'all') {
            if (_item.data('key') != key) {
                is_filtered = false;
            }
        }
        if (is_filtered) {
            _item.show();
        } else {
            _item.hide();
        }
    });
});

/*======== maps loader after the scrolling =========*/
 if($('body').hasClass('home')){
	$(window).on('scroll', function(e){
		var body_h =  $('body').height();
		var scroll_pos = $(window).scrollTop();
		var map_pos = $("#contactsMap").offset().top;
		var window_h = $(window).height();
		if(scroll_pos >= (map_pos - 2 * window_h)){
			$('.map').append('<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQAFM5yg80i3SV-iJJMrioCP8YrBhbMy0&callback=initMap" async defer></script>');
			$('window').off(e);
		}
	});

	// $(window).on('scroll', function(e){
	// 	var body_h =  $('body').height();
	// 	var scroll_pos = $(window).scrollTop();
	// 	var youtube_pos = $(".youtube").offset().top;
	// 	var window_h = $(window).height();
	// 	if(scroll_pos >= (youtube_pos - 2 * window_h)){
	// 		$('.youtube').append('<iframe  class="youtube__el" src="https://www.youtube.com/embed/TTqgJCEB-m4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen  loading="lazy"></iframe>');
	// 		$('window').off(e);
	// 	}
	// });
}


/*=======scroll animation==========*/
function prevHeight(el){
	var height = 0;
  	$.each(el.prevAll(), function (index, elem) {height += $(elem).outerHeight(true); });
  	return height;
};   

//animate srolling to anchors on a price page
$('.prices__nav a').click(function(){
	var elementClick = $(this).attr("href");
	var firstEl = $('.prices__nav a:first-child').attr("href");
	var topHeight = $('.header__top').height();
  	var scrollTop = prevHeight($(elementClick)) - $('.prices__nav').height() + topHeight;
  	console.log('elementClick - ' + prevHeight($(elementClick)));
	console.log('topHeight - ' + topHeight);
	console.log('scrollTop - ' + scrollTop);
  	$("html, body").animate({
      scrollTop: scrollTop
    }, 800);
});

$( ".search__btn" ).click(function() {
  $(this).toggleClass("open");
  $('.header__search').toggleClass("open");
});



});