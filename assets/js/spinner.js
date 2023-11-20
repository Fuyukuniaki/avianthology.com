$(window).on('load',function(){
	$('#loading').delay(10000).fadeOut('slow', function(){
		$('body').removeClass('js-hidden');
	});
	$('.loading-bg').on('animationend', function() {
		$('#loading').remove();
	});
});

