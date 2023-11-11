$(window).on('load resize',function(){
	$(window).on('pageshow', function() {
		if(window.name != 'avi'){
			location.reload(true);
			window.name = 'avi';
		} else {
			window.name = '';
		}
	});
});

$(window).on('load resize', function(){

	// if(window.matchMedia("(min-width: 750px)").matches){
	// 	$('.c-video').append($('#video'));
	// } else {
	// 	$('#video').remove();
	// }

	$(function () {
		let headerHeight = 100;
		$('a[href^="#"]').on('click', function () {
			let href = $(this).attr('href');
			let target = $(href == '#' || href == '' ? 'html' : href);
			let position = target.offset().top - headerHeight;
			$('html, body').animate({ scrollTop: position }, 500, "swing");
			$('.p-hamburger-menu').removeClass('js-open');
			$('.l-header').removeClass('js-open');
			$('.c-icon__hamburger').removeClass('js-open');
			$('.c-author-list__lists--title').removeClass('menu-open');
			$('.c-project__detail--title').removeClass('menu-open');
		return false;
		});
	});

	$(function () {
		$('.c-icon__hamburger').each(function(){
			$(this).on('click', function(){
				if($(this).hasClass('js-open')){
					$(this).removeClass('js-open');
					$('.p-hamburger-menu').removeClass('js-open');
					$('.c-author-list__lists--title').toggleClass('menu-open');
					$('.c-project__detail--title').toggleClass('menu-open');
					$('.l-header').removeClass('js-open');
				} else {
					$(this).addClass('js-open');
					$('.p-hamburger-menu').addClass('js-open');
					$('.c-author-list__lists--title').toggleClass('menu-open');
					$('.c-project__detail--title').toggleClass('menu-open');
					$('.l-header').addClass('js-open');
				}
			});
		});
		$('.c-button__close').each(function(){
			$(this).on('click', function(){
				$('.p-hamburger-menu').removeClass('js-open');
				$('.c-author-list__lists--title').toggleClass('menu-open');
				$('.c-project__detail--title').toggleClass('menu-open');
				$('.l-header').removeClass('js-open');
				$('.c-icon__hamburger').removeClass('js-open');
			});
		});
	});
	$(function () {
		$('.c-author-list__lists--title').each(function(){
			$(this).on('click', function(){
				$(this).next('.c-author-list__lists--wrap').toggleClass('js-open');
				$('.l-header').toggleClass('js-open');
			});
		});

		let headerHeight = 100;
		$('.c-button__modal-close').each(function(){
			$(this).on('click', function () {
				let href = $(this).attr('href');
				let target = $(href == '#' || href == '' ? 'html' : href);
				let position = target.offset().top - headerHeight;
				$('html, body').animate({ scrollTop: position }, 500, "swing");
				$(this).parent('.c-author-list__lists--wrap').toggleClass('js-open');
				$('.l-header').removeClass('js-open');
			return false;
			});
		});
	});
	$(function () {
		$('.c-project__detail--title').each(function(){
			$(this).on('click', function(){
				$(this).next('.c-project__detail--text').toggleClass('js-open');
				$('.l-header').toggleClass('js-open');
			});
		});
		let headerHeight = 100;
		$('.c-button__modal-close').each(function(){
			$(this).on('click', function(){
				let href = $(this).attr('href');
				let target = $(href == '#' || href == '' ? 'html' : href);
				let position = target.offset().top - headerHeight;
				$(this).parent('.c-project__detail--text').removeClass('js-open');
				$('html, body').animate({ scrollTop: position }, 500, "swing");
				$('.l-header').removeClass('js-open');
			});
		});
	});	
});