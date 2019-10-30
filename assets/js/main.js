jQuery(document).ready(function ($) {
	// $("body").on("contextmenu", false);

	if ($('#js-history-slider').length) {
		let historySlider = function () {
			$('#js-history-slider').slick({
				arrows: false,
				fade: true,
				dots: true,
				responsive: [{
					breakpoint: 500,
					settings: {
						dots: false
					}
				}]
			});

			$('.history__buttons .history-arow--left').on('click', function (e) {
				$('#js-history-slider').slick('slickNext');
			});

			$('.history__buttons .history-arow--right').on('click', function (e) {
				$('#js-history-slider').slick('slickPrev');
			});
		};
		historySlider();
	}

	if ($('#js-partners__slider').length) {
		let partnersSlider = function () {
			$('#js-partners__slider').slick({
				arrows: false,
				dots: true,
				slidesToShow: 2,
				slidesToScroll: 2,
				responsive: [{
					breakpoint: 900,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
					}
				}]
			});

			$('.partners .slider__arrow-right').on('click', function (e) {
				$('#js-partners__slider').slick('slickNext');
			});

			$('.partners .slider__arrow-left').on('click', function (e) {
				$('#js-partners__slider').slick('slickPrev');
			});
		};
		partnersSlider();
	}

	if ($('#js-idea__slider').length) {
		let ideaSlider = function () {
			$('#js-idea__slider').slick({
				arrows: false,
				dots: true,
				slidesToShow: 2,
				slidesToScroll: 2,
				responsive: [{
					breakpoint: 1250,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
					}

				}]
			});

			$('.idea .slider__arrow-right').on('click', function (e) {
				$('#js-idea__slider').slick('slickNext');
			});

			$('.idea .slider__arrow-left').on('click', function (e) {
				$('#js-idea__slider').slick('slickPrev');
			});
		};
		ideaSlider();
	}

	let sandwitch = function () {
		$('.sandwitch-wrap').on('click', function () {
			$('.main-menu').toggleClass('active');

			$(this).find('.sandwitch').toggleClass('sandwitch--active');
		});
	};
	sandwitch();

	let navigation = function () {

		if ($("#js-reimbursabile").length > 0 && $("#js-partners").length > 0 && $("#js-consultation").length > 0) {
			let navigation = $('#js-navigation');
			let reimbursabile = $("#js-reimbursabile");
			let history = $("#js-history");
			let partners = $("#js-partners");
			let consultation = $("#js-consultation");
			let contacts = $("#js-footer");

			$(document).on('scroll', function () {
				if (
					(navigation.offset().top > reimbursabile.offset().top && navigation.offset().top < (reimbursabile.offset().top + reimbursabile.innerHeight())) ||
					(navigation.offset().top > history.offset().top && navigation.offset().top < (history.offset().top + history.innerHeight())) ||
					(navigation.offset().top > partners.offset().top && navigation.offset().top < (partners.offset().top + partners.innerHeight())) ||
					(navigation.offset().top > consultation.offset().top && navigation.offset().top < (consultation.offset().top + consultation.innerHeight()))
				) {
					if (!navigation.hasClass('light')) {
						navigation.addClass('light');
					}
				} else {
					navigation.removeClass('light');
				}

				if (
					(navigation.offset().top > reimbursabile.offset().top && navigation.offset().top < (reimbursabile.offset().top + reimbursabile.innerHeight()))
				) {
					let iranbursabileA = $('#js-navigation a[href="#js-reimbursabile"]');
					if (!iranbursabileA.hasClass('active')) {
						iranbursabileA.addClass('active');
						iranbursabileA.parent().addClass('active');
					}
					iranbursabileA.addClass('active');
				} else if ((navigation.offset().top > history.offset().top && navigation.offset().top < (history.offset().top + history.innerHeight()))) {
					let iranbursabileA = $('#js-navigation a[href="#js-history"]');
					if (!iranbursabileA.hasClass('active')) {
						iranbursabileA.addClass('active');
						iranbursabileA.parent().addClass('active');
					}
					iranbursabileA.addClass('active');
				} else if ((navigation.offset().top > contacts.offset().top && navigation.offset().top < (contacts.offset().top + contacts.innerHeight()))) {
					let iranbursabileA = $('#js-navigation a[href="#js-footer"]');
					if (!iranbursabileA.hasClass('active')) {
						iranbursabileA.addClass('active');
						iranbursabileA.parent().addClass('active');
					}
					iranbursabileA.addClass('active');
				} else {
					$('#js-navigation a').removeClass('active');
					$('#js-navigation a').parent().removeClass('active');
				}


			});


			$('#js-navigation a').on('click', function (event) {
				let target = $($(this).attr('href'));

				if (target.length) {
					event.preventDefault();
					$('html, body').animate({
						scrollTop: target.offset().top
					}, 1000);
				}
			});

		}

	};
	navigation();

	let popup = function () {
		$('.popup-btn').on('click', function (e) {
			e.preventDefault();
			$('#js-popup').fadeIn();
		});

		$('.close_popup').on('click', function (e) {
			e.preventDefault();

			$('#js-popup').fadeOut();
		});
	};
	popup();

	let showSearch = function () {
		$('#js-show-search').on('click', function () {
			$('#js-news__search-block').show();
		});
		$('#js-news__search-close').on('click', function () {
			$('#js-news__search-block').hide();
		});
	};
	showSearch();

	let newsShowLink = function () {
		$('.news__item-circle').on('click', function () {
			$(this).parent().find('.news__item-link').toggleClass('active');
		});
	};
	newsShowLink();

	let newsList = function () {
		let jsNewsItem = $('#js-news__list-mobile .news__list-mobile__item');
		let jsNewsListMobileShow = $('#js-news__list-mobile-show');
		let jsNewsMobile = $('#js-news__list-mobile');

		$('#js-news__navigation').on('click', function () {
			if ($(window).width() < 978) {
				$('#js-news__list-mobile').fadeIn();
			}
		});

		jsNewsItem.on('click', function () {
			if ($(window).width() < 978) {
				if (!$(this).hasClass('active')) {
					let thisItemText = $(this).text();
					jsNewsListMobileShow.text(thisItemText);
					jsNewsItem.removeClass('active');
					$(this).addClass('active');
					setTimeout(function () {
						jsNewsMobile.fadeOut();
					}, 500);
				}
			}
		});
	};
	newsList();

	let historyMixitup = function () {
		if ($('#js-news__container').length) {
			let mixer = mixitup('#js-news__container');
		}
	};
	historyMixitup();

	let rusLang = function () {
		let url = location.href;
		if (url == 'https://euconsult.md/ru/' || url == 'https://euconsult.md/ru/finantari-nerambursabile/') {
			$('.finance-gallery').addClass('rus');
		}
	};
	rusLang();
	
	$('#js-main-menu a[href="#js-footer"]').on('click', function () {
		if($(window).width() < 1300){
			$('#js-main-menu').removeClass('active');
			$('.sandwitch').removeClass('sandwitch--active');
		}
	});

	let mainMenuFirstItemActive = function () {
		let url = location.href;
		if (url == 'https://euconsult.md/ru/' || url == 'https://euconsult.md/en/') {
			$('#js-main-menu li:first-child').addClass('current-menu-item');
		}
	};
	mainMenuFirstItemActive();

	let mainMenuActiveElemOfSubMenu = function () {
		let url = location.href;
		let finance = 'finance';
		let moldova = 'moldova';
		let romania = 'romania';
		let news = 'news';
		let idea = 'idea';

		if(url.includes(finance)) {
			$('#js-main-menu li:nth-child(4)').addClass('current-menu-item');
		}

		if(url.includes(news)) {
			$('#js-main-menu li:nth-child(7)').addClass('current-menu-item');
		}

		if(url.includes(idea)) {
			$('#js-main-menu li:nth-child(6)').addClass('current-menu-item');
		}

		if(url.includes(moldova) || url.includes(romania)) {
			$('#js-main-menu li:nth-child(4)').addClass('current-menu-item');
		}
	};
	mainMenuActiveElemOfSubMenu();

	let disabelVideoBar = function () {
		$('.flowplayer .fp-ui').on('click', function () {
			alert('ok');
			return false;
		});
	};
	disabelVideoBar();

	let closeVideoPopup = function () {
		$('.video-popup input[type="submit"]').on('click', function () {
			setTimeout(function(){
				$('.video-popup').fadeOut();
				$('body').removeClass('fixed');
			}, 3500);
		});
	};
	closeVideoPopup();

});
