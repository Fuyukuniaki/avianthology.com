const webStorage = function () {
	if (sessionStorage.getItem('visit')) {
			$('#loading').animate({ 'left': '100svw', 'opacity': '0' }, 2000);
			$('#loading').remove();
			$('body').addClass('js-view');
	} else {
		sessionStorage.removeItem('visit');
		$(window).on('pageshow', function () {
			sessionStorage.setItem('visit', 'true'); 
			setTimeout(function () {
				$('#loading').animate({ 'left': '100svw', 'opacity': '0' }, 2000)
			}, 3000);
			setTimeout(function () {
				$('body').addClass('js-view');
				$('#loading').remove();
			}, 1000);
		});
	}
};


$(window).on('load resize', function () {
	webStorage();
});