$(window).on('load',function(){
	$(window).on('pageshow', function() {
		if(window.name != 'avi'){
			// location.reload(true);
			window.name = 'avi';
		} else {
			window.name = '';
		}
	});
});

$(window).on('load resize', function(){
	if(window.matchMedia("(max-width: 750px)").matches){
		let headerHeight = Number($('.l-header').css('height').slice(0,-2));
		$('a[href^="#"]').on('touchstart', function () {
			let href = $(this).attr('href');
			let target = $(href == '#' || href == '' ? 'html' : href);
			let position = target.offset().top - headerHeight;
			$('.l-header').removeClass('js-open');
			$('.c-icon__hamburger').removeClass('js-open');
			$.when($('.p-hamburger-menu').removeClass('js-open'))
				.done(document.body.scrollTop = document.documentElement.scrollTop = position);
		return false;
		});
	
		$('.p-hamburger-menu__button').each(function(){
			$(this).on('touchstart', function(){
				if($(this).children('.c-icon__hamburger').hasClass('js-open')){
					$(this).children('.c-icon__hamburger').removeClass('js-open');
					$('.p-hamburger-menu').removeClass('js-open');
					$('.l-header').removeClass('js-open');
				} else {
					$(this).children('.c-icon__hamburger').addClass('js-open');
					$('.p-hamburger-menu').addClass('js-open');
					$('.l-header').addClass('js-open');
				}
			});
		});
		$('.c-button__close').each(function(){
			$(this).on('touchstart', function(){
				$('.p-hamburger-menu').removeClass('js-open');
				$('.l-header').removeClass('js-open');
				$('.c-icon__hamburger').removeClass('js-open');
			});
		});
	
		$('.c-author-list__lists--title').each(function(){
			$(this).on('touchstart', function(){
				if($(this).next('.c-author-list__lists--wrap').hasClass('js-open')){
					$(this).next('.c-author-list__lists--wrap').removeClass('js-open');
					$('.l-header').removeClass('js-open');
				} else {
					$(this).next('.c-author-list__lists--wrap').addClass('js-open');
					$('.l-header').addClass('js-open');
				}
			});
		});
	
		$('.c-button__modal-close').each(function(){
			$(this).on('touchstart', function () {
				let href = $(this).attr('href');
				let target = $(href == '#' || href == '' ? 'html' : href);
				let position = target.offset().top - headerHeight;
				$('.l-header').removeClass('js-open');
				$.when($(this).parent('.c-author-list__lists--wrap').removeClass('js-open'))
				.done(document.body.scrollTop = document.documentElement.scrollTop = position);
			return false;
			});
		});
	
		$('.c-project__detail--title').each(function(){
			$(this).on('touchstart', function(){
				if($(this).next('.c-project__detail--text').hasClass('js-open')){
					$(this).next('.c-project__detail--text').removeClass('js-open');
					$(this).removeClass('js-open');
					$('.l-header').removeClass('js-open');	
				} else {
					$(this).next('.c-project__detail--text').addClass('js-open');
					$(this).addClass('js-open');
					$('.l-header').addClass('js-open');	
				}
			});
		});
	
		$('.c-button__modal-close').each(function(){
			$(this).on('touchstart', function(){
				let href = $(this).attr('href');
				let target = $(href == '#' || href == '' ? 'html' : href);
				let position = target.offset().top - headerHeight;
				$('.l-header').removeClass('js-open');
				$(this).removeClass('js-open');
				$.when($(this).parent('.c-project__detail--text').removeClass('js-open'))
				.done(document.body.scrollTop = document.documentElement.scrollTop = position);
			});
		});

	} else {
		let headerHeight = 100;
		$('a[href^="#"]').on('click', function () {
			let href = $(this).attr('href');
			let target = $(href == '#' || href == '' ? 'html' : href);
			let position = target.offset().top - headerHeight;
			$('.l-header').removeClass('js-open');
			$('.c-icon__hamburger').removeClass('js-open');
			$.when($('.p-hamburger-menu').removeClass('js-open'))
				.done($('html, body').animate({ scrollTop: position }, 700, 'linear'));
		return false;
		});
	
		$('.c-icon__hamburger').each(function(){
			$(this).on('click', function(){
				if($(this).hasClass('js-open')){
					$(this).removeClass('js-open');
					$('.p-hamburger-menu').removeClass('js-open');
					$('.l-header').removeClass('js-open');
				} else {
					$(this).addClass('js-open');
					$('.p-hamburger-menu').addClass('js-open');
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
	
		$('.c-author-list__lists--title').each(function(){
			$(this).on('click', function(){
				if($(this).next('.c-author-list__lists--wrap').hasClass('js-open')){
					$(this).next('.c-author-list__lists--wrap').removeClass('js-open');
					$('.l-header').removeClass('js-open');
				} else {
					$(this).next('.c-author-list__lists--wrap').addClass('js-open');
					$('.l-header').addClass('js-open');
				}
			});
		});
	
		$('.c-button__modal-close').each(function(){
			$(this).on('click', function () {
				let href = $(this).attr('href');
				let target = $(href == '#' || href == '' ? 'html' : href);
				let position = target.offset().top - headerHeight;
				$('.l-header').removeClass('js-open');
				$.when($(this).parent('.c-author-list__lists--wrap').removeClass('js-open'))
				.done($('html, body').animate({ scrollTop: position }, 700, 'linear'));
			return false;
			});
		});
	
		$('.c-project__detail--title').each(function(){
			$(this).on('click', function(){
				if($(this).hasClass('js-open')){
					$(this).next('.c-project__detail--text').removeClass('js-open');
					$(this).removeClass('js-open');
					$('.l-header').removeClass('js-open');
				} else {
					$(this).next('.c-project__detail--text').addClass('js-open');
					$(this).addClass('js-open');
					$('.l-header').addClass('js-open');	
				}
			});
		});
	
		$('.c-button__modal-close').each(function(){
			$(this).on('click', function(){
				let href = $(this).attr('href');
				let target = $(href == '#' || href == '' ? 'html' : href);
				let position = target.offset().top - headerHeight;
				$('.l-header').removeClass('js-open');
				$.when($(this).parent('.c-project__detail--text').removeClass('js-open'))
				.done($('html, body').animate({ scrollTop: position }, 700, 'linear'));
			});
		});	
	}
});	
