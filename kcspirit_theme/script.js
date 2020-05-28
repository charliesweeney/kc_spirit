(function ($) {
	$('#overlay-button').click(function ($this) {
		if ($('.mobile-nav').hasClass('active')) {
			$('.mobile-nav').removeClass('active');
		} else {
			$('.mobile-nav').addClass('active');
		}
	});

	// On Scroll –– Menu on Scroll
	function menuFixer() {
		$(window).scrollTop() > 150
			? $('body').addClass('scrolled')
			: $('body').removeClass('scrolled');
	}
	$(window).ready(function () {
		menuFixer(), $('.owl-nav button').append('<div></div>');
	}),
		$(window).scroll(function () {
			menuFixer();
		});

	$(document).ready(function () {
		$('a').on('click', function (event) {
			if (this.hash !== '') {
				event.preventDefault();
				var hash = this.hash;
				$('html, body').animate(
					{
						scrollTop: $(hash).offset().top,
					},
					1000,
					function () {
						window.location.hash = hash;
					}
				);
			}
		});

		// Initialising Swiper
		var swiper = new Swiper('.swiper-container', {
			spaceBetween: 30,
			centeredSlides: true,
			loop: true,
			speed: 1500,
			autoplay: {
				delay: 12000,
				disableOnInteraction: true,
			},
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
			},
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
		});

		// Pause Slider on Hover
		$('.swiper-container').mouseenter(function () {
			swiper.autoplay.stop();
			console.log('slider stopped');
		});

		$('.swiper-container').mouseleave(function () {
			swiper.autoplay.start();
			console.log('slider started again');
		});

		// Input value check
		$('.form-input').blur(function () {
			console.log($(this).attr('aria-required'));
			if (!$(this).val() && $(this).attr('aria-required') == 'true') {
				$(this).addClass('warning');
			} else if ($(this).val()) {
				$(this).removeClass('warning');
				$(this).css('border-color', '#4bbde8');
			}
		});
	});

	$(document).ready(function () {});

	$(window).on('load', function () {
		var text = document.querySelectorAll('.text-block');
		new simpleParallax(text, {
			overflow: true,
		});

		var image = document.querySelectorAll('.floated-image');
		new simpleParallax(image, {
			overflow: true,
			scale: 1.5,
		});
	});
})(jQuery);
