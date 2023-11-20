// $(window).on('load',function(){
// 	$('#loading').delay(10000).fadeOut('slow', function(){
// 		$('body').removeClass('js-hidden');
// 	});
// 	$('.loading-bg').on('animationend', function() {
// 		$('#loading').remove();
// 	});
// });

$(window).on('pageshow',function(){
	$('#loading').delay(1500).fadeOut('slow', function(){
		$('body').removeClass('js-hidden');
	});
	$('.loading-bg').on('animationend', function() {
		$('.loading-bg').remove();
		$('#loading').remove();
	});
});
