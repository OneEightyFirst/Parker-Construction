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

		$(this).slick({
			appendArrows: '.pn-' + idx,
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
