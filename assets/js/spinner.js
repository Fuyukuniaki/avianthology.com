// $(window).on('pageshow',function(){
// 	setTimeout(function(){
// 		$('#loading').delay(2000).animate({
// 			'left': '+=100%', 'opacity': '0'},'slow'
// 	)}, 800);
// });

$(window).on('pageshow',function(){
	setTimeout(function(){
		$('#loading').animate({'left': '100svw','opacity':'0'}, 2000 )
	}, 3000);
	setTimeout(function(){
		$('body').addClass('js-view');
		$('#loading').remove();
	}, 10000);
});