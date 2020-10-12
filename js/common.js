jQuery(function($) {

	"use strict";



	$('.fa-bars').on("click",function(){
		$('.menu_button').css('top', '10px');
		$('.fa-times').css('display', 'block');
		$('.fa-bars').css('display', 'none');
		$('.header_main_menu').css('display', 'block');
	});

	$('.fa-times').on("click",function(){
		$('.menu_button').css('top', '10px');
		$('.fa-bars').css('display', 'block');
		$('.fa-times').css('display', 'none');
		$('.header_main_menu').css('display', 'none');
	});



	$('.main_slider_home').slick({
		dots: true,
		infinite: true,
		speed: 300,
		slidesToShow: 1,
		autoplay: true,
		fade: true,
		vertical: false
	});





	$('.product_slider_full_img').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: '.product_slider_full_nav_img',
	});
	$('.product_slider_full_nav_img').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		asNavFor: '.product_slider_full_img',
		dots: false,
		centerMode: false,
		focusOnSelect: true,
		arrows: false,
	});

	$('.ac').simpleAccordion({
		useLinks: false
	});
});


