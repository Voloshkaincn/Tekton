$(document).ready(function() {
	$('.line__wrap').addClass('line-anim');
	$(window).on('load', function(){
		$('.header').addClass('header-anim');
		setTimeout(function(){
			$('#fullpage').addClass('showup-anim');
		}, 1000);
		setTimeout(function(){
			$('.main').addClass('showup-anim');
			$('.first').addClass('showup-anim');
			setTimeout(function(){
				$('.slide-left:first-child').addClass('slide-left-anim')
			}, 500);
			setTimeout(function(){
				$('.slide-left:nth-child(2)').addClass('slide-left-anim')
			}, 1000);
			setTimeout(function(){
				$('.btn.showup').addClass('showup-anim')
			}, 2000);
			$('.main__slider').slick('slickPlay');
		}, 2000);
		
	});
	$('#fullpage').fullpage({
		//options here
		autoScrolling: true,
		anchors: ['mainPage',  'aboutUs', 'ourLocation', 'ourServices', 'ourPortfolio', 'ourTeam', 'ourContacts'],
		menu: '.header',
		verticalCentered: false,
		//paddingTop: '84px',
		navigation: true,
		navigationPosition: 'right',
		responsiveWidth: 992,
		responsiveHeight: 725,
		// afterRender: function(el){
		// 	console.log(el);
		// 	$('.header').addClass('header-anim');
		// 	$('.line__wrap').addClass('line-anim');
		// 	$('#fullpage').addClass('showup-anim');
		// },
		// afterLoad: function(origin){
		// 	var loadedSection = this;
		// 	if(origin == 'mainPage'){
		// 		$('.main').addClass('showup-anim');
		// 	}
		// 	if(origin == 'firstPage'){
		// 		$(window).on('load', function(){
		// 			$('.first').addClass('showup-anim');
		// 			setTimeout(function(){
		// 				$('.slide-left:first-child').addClass('slide-left-anim')
		// 			}, 500);
		// 			setTimeout(function(){
		// 				$('.slide-left:nth-child(2)').addClass('slide-left-anim')
		// 			}, 1000);
		// 			setTimeout(function(){
		// 				$('.btn.showup').addClass('showup-anim')
		// 			}, 2000);
		// 		});
		// 	}
		// }
	});

	$('.main__slider').slick({
		infinite: true,
		dots: true,
		arrows: false,
		autoplay: false,
 		autoplaySpeed: 6000,
 		fade: true,
 		speed: '1000'
	});


	$('#portfolioSlider').slick({
		infinite: true,
  		slidesToShow: 3,
  		dots: true,
  		speed: 500,
  		centerMode: true,
  		centerPadding: '0',
  		appendArrows: '.slider__nav',
  		appendDots: '.slider__nav',
  		prevArrow: '<button type="button" class="slick-prev"><span class="icon-left"></span></button>',
  		nextArrow: '<button type="button" class="slick-next"><span class="icon-right"></span></button>',
  		responsive: [
  			{
  				breakpoint: 576,
  				settings: {
  					slidesToShow: 1,
  				}

  			}
  		]
	});
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

	$(".menu__btn").click(function(){ 
	    $(this).toggleClass("menu__btn-active");
	});

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
	})

});