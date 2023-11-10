$(window).on('resize',function(){
	$(window).on('pageshow', function() {
		$(window).location.reload();
	});
});

$(window).on('load resize', function(){

	$(function () {
		let headerHight = 100;
		$('a[href^="#"]').click(function () {
		let href = $(this).attr("href");
		let target = $(href == "#" || href == "" ? "html" : href);
		let position = target.offset().top - headerHight;
		$("html, body").animate({
		scrollTop: position
		}, 500, "swing");
		return false;
		});
	});

	$(function () {
		$('.c-icon__hamburger').each(function(){
			$(this).on('click', function(){
				$(this).toggleClass('js-open');
				$('.p-hamburger-menu').toggleClass('js-open');
				$('.c-author-list__lists--title').toggleClass('menu-open');
				$('.c-project__detail--title').toggleClass('menu-open');
				$('.l-header').toggleClass('js-open');
			});
		});
		$('.c-button__close').each(function(){
			$(this).on('click', function(){
				$('.p-hamburger-menu').toggleClass('js-open');
				$('.c-author-list__lists--title').toggleClass('menu-open');
				$('.c-project__detail--title').toggleClass('menu-open');
				$('.l-header').toggleClass('js-open');
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
		$('.c-button__modal-close').each(function(){
			$(this).on('click', function(){
				$(this).parent('.c-author-list__lists--wrap').toggleClass('js-open');
				$('.l-header').toggleClass('js-open');
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
		$('.c-button__modal-close').each(function(){
			$(this).on('click', function(){
				$(this).parent('.c-project__detail--text').removeClass('js-open');
				$('.l-header').toggleClass('js-open');
			});
		});
	});	
});