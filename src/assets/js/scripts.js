/* ========================================================================================== */
/*  DOCUMENT READY
/* ========================================================================================== */

$(document).ready(function() {


/* ============================== */
/*  Responsive Video Container
/* ============================== */

	// Wraps videos in a container that makes videos responsive.
	$('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').each(function() {
		$(this).wrap('<div class="container__video"></div>');
	});


	$('.banner-carousel').slick({
		dots: false,
		infinite: true,
		appendArrows: '.banner-nav',
		prevArrow: '<div class="left-arrow"><img src="/wp-content/themes/liquid/assets/img/common/left-arrow-nav.png"></div>',
		nextArrow: '<div class="right-arrow"><img src="/wp-content/themes/liquid/assets/img/common/right-arrow-nav.png"></div>',
		slidesToShow: 1,
		centerMode: true,
		mobileFirst: true,
		responsive: [
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1

				}
			}
		]
	});


	$('.portfolio-carousel').each(function (idx, item) {

		var carouselId = "portfolio-0" + idx;
		this.id = carouselId;
		$(this).parent('.portfolio').attr('data-slider', idx);


		$(this).slick({
			appendArrows: '[data-slider="' + idx + '"] .portfolio-nav',
			prevArrow: '<div class="left-arrow"><img src="/wp-content/themes/liquid/assets/img/common/left-arrow-nav.png"></div>',
			nextArrow: '<div class="right-arrow"><img src="/wp-content/themes/liquid/assets/img/common/right-arrow-nav.png"></div>',
			dots: false,
			infinite: true,
			slidesToShow: 1,
			centerMode: true,
			mobileFirst: true,
			responsive: [
				{
					breakpoint: 768,
					settings: {
						slidesToShow: 1

					}
				}
			]
		});
	});



	$('.project-carousel').each(function (idx, item) {

		var carouselId = "project-0" + idx;
		this.id = carouselId;
		$(this).parent('.project').attr('data-slider', idx);

		var $status1 = $('.pagingInfo-bottom-left');
		var $status2 = $('.pagingInfo-top-right');

		var $slickElement = $('.project-carousel');

		$slickElement.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
			//currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
			var i = (currentSlide ? currentSlide : 0) + 1;
			$status1.html('<span>' + i + '</span>' + '/' + slick.slideCount);

			var x = (currentSlide ? currentSlide : 0) + 2;
			$status2.html('<span>' + x + '</span>' + '/' + slick.slideCount);
		});

		$(this).slick({
			appendArrows: '[data-slider="' + idx + '"] .project-nav',
			prevArrow: '<span class="arrow arrow-bar is-left"></span>',
			nextArrow: '<span class="arrow arrow-bar is-right"></span>',
			dots: false,
			infinite: true,
			slidesToScroll: 2,
			slidesToShow: 2,
			responsive: [
				{
					breakpoint: 768,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
			]
		});
	});











/* ============================== */
/*  Hamburger Menu
/* ============================== */

	var menuButton = document.getElementById('menuButton');
	menuButton.addEventListener('click', function (e) {
		menuButton.classList.toggle('is-active');
		$('.inner-nav').toggle('show');
	});



/* ============================== */
/*  Footer Copyright Year
/* ============================== */

	// Fills in the current year.
	$('.copyright__year').text((new Date()).getFullYear());
});
