jQuery(document).ready(function ($) {
	$('.flowplayer').bind('finish', function() {
		$('.video-popup').fadeIn();
		$('body').addClass('fixed');
	} );
});
