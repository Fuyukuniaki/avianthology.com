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
	if(window.matchMedia("(max-width: 750px)").matches){
			let headerHeight = Number($('.l-header').css('height').slice(0,-2));
			$('a[href^="#"]').on('touchstart', function () {
				let href = $(this).attr('href');
				let target = $(href == '#' || href == '' ? 'html' : href);
				let position = target.offset().top - headerHeight;
				$('.l-header').removeClass('js-open');
				$('.c-icon__hamburger').removeClass('js-open');
				$('.c-author-list__lists--title').removeClass('menu-open');
				$('.c-project__detail--title').removeClass('menu-open');
				$.when($('.p-hamburger-menu').removeClass('js-open'))
					.done($('html, body').animate({ scrollTop: position }, 300, "swing"));
			return false;
			});
		
			$('.p-hamburger-menu__button').each(function(){
				$(this).on('touchstart', function(){
					if($(this).children('.c-icon__hamburger').hasClass('js-open')){
						$(this).children('.c-icon__hamburger').removeClass('js-open');
						$('.p-hamburger-menu').removeClass('js-open');
						$('.c-author-list__lists--title').toggleClass('menu-open');
						$('.c-project__detail--title').toggleClass('menu-open');
						$('.l-header').removeClass('js-open');
					} else {
						$(this).children('.c-icon__hamburger').addClass('js-open');
						$('.p-hamburger-menu').addClass('js-open');
						$('.c-author-list__lists--title').toggleClass('menu-open');
						$('.c-project__detail--title').toggleClass('menu-open');
						$('.l-header').addClass('js-open');
					}
				});
			});
			$('.c-button__close').each(function(){
				$(this).on('touchstart', function(){
					$('.p-hamburger-menu').removeClass('js-open');
					$('.c-author-list__lists--title').toggleClass('menu-open');
					$('.c-project__detail--title').toggleClass('menu-open');
					$('.l-header').removeClass('js-open');
					$('.c-icon__hamburger').removeClass('js-open');
				});
			});
		
			$('.c-author-list__lists--title').each(function(){
				$(this).on('touchstart', function(){
					$(this).next('.c-author-list__lists--wrap').toggleClass('js-open');
					$('.l-header').toggleClass('js-open');
				});
			});
		
			$('.c-button__modal-close').each(function(){
				$(this).on('touchstart', function () {
					let href = $(this).attr('href');
					let target = $(href == '#' || href == '' ? 'html' : href);
					let position = target.offset().top - headerHeight;
					$('.l-header').removeClass('js-open');
					$.when($(this).parent('.c-author-list__lists--wrap').toggleClass('js-open'))
					.done($('html, body').animate({ scrollTop: position }, 300, "swing"));
				return false;
				});
			});
		
			$('.c-project__detail--title').each(function(){
				$(this).on('touchstart', function(){
					$(this).next('.c-project__detail--text').toggleClass('js-open');
					$('.l-header').toggleClass('js-open');
				});
			});
		
			$('.c-button__modal-close').each(function(){
				$(this).on('touchstart', function(){
					let href = $(this).attr('href');
					let target = $(href == '#' || href == '' ? 'html' : href);
					let position = target.offset().top - headerHeight;
					$('.l-header').removeClass('js-open');
					$.when($(this).parent('.c-project__detail--text').removeClass('js-open'))
					.done($('html, body').animate({ scrollTop: position }, 300, "swing"));
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
				$('.c-author-list__lists--title').removeClass('menu-open');
				$('.c-project__detail--title').removeClass('menu-open');
				$.when($('.p-hamburger-menu').removeClass('js-open'))
					.done($('html, body').animate({ scrollTop: position }, 700, "swing"));
			return false;
			});
		
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
		
			$('.c-author-list__lists--title').each(function(){
				$(this).on('click', function(){
					$(this).next('.c-author-list__lists--wrap').toggleClass('js-open');
					$('.l-header').toggleClass('js-open');
				});
			});
		
			$('.c-button__modal-close').each(function(){
				$(this).on('click', function () {
					let href = $(this).attr('href');
					let target = $(href == '#' || href == '' ? 'html' : href);
					let position = target.offset().top - headerHeight;
					$('.l-header').removeClass('js-open');
					$.when($(this).parent('.c-author-list__lists--wrap').toggleClass('js-open'))
					.done($('html, body').animate({ scrollTop: position }, 700, "swing"));
				return false;
				});
			});
		
			$('.c-project__detail--title').each(function(){
				$(this).on('click', function(){
					$(this).next('.c-project__detail--text').toggleClass('js-open');
					$('.l-header').toggleClass('js-open');
				});
			});
		
			$('.c-button__modal-close').each(function(){
				$(this).on('click', function(){
					let href = $(this).attr('href');
					let target = $(href == '#' || href == '' ? 'html' : href);
					let position = target.offset().top - headerHeight;
					$('.l-header').removeClass('js-open');
					$.when($(this).parent('.c-project__detail--text').removeClass('js-open'))
					.done($('html, body').animate({ scrollTop: position }, 700, "swing"));
				});
			});	
	}
});	
