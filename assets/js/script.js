window.addEventListener('load resize', function(){

	const myHoverElements = document.getElementsByClassName('c-hidden-menu__link');

	for (let i = 0; i < myHoverElements.length; i++) {
		myHoverElements[i].addEventListener("touchstart", function() {
			myHoverElements[i].classList.add('js-hover')
		})

		myHoverElements[i].addEventListener("touchend", function() {
			myHoverElements[i].classList.remove('js-hover')
		})
	}

	const myCloseButton = document.getElementsByClassName('c-button__close');
	const myHiddenMenue = document.getElementsByClassName('p-hamburger-menu');
	const myHamburgerBtn = document.getElementsByClassName('c-icon__hamburger');

	if ( ! myHiddenMenue[0].classList.contains('js-open') ){
		myHamburgerBtn[0].addEventListener("touched", function() {
			myHiddenMenue[0].classList.add('js-open')
		})
		myCloseButton[0].addEventListener("click", function() {
			myHiddenMenue[0].classList.add('js-open')
		})
	} else {
		myHamburgerBtn[0].addEventListener("touched", function() {
			myHiddenMenue[0].classList.remove('js-open')
		})
		myCloseButton[0].addEventListener("click", function() {
			myHiddenMenue[0].classList.remove('js-open')
		})
		myCloseButton[0].addEventListener("touchend", function() {
			myHiddenMenue[0].classList.remove('js-open')
		})
		myCloseButton[0].addEventListener("click", function() {
			myHiddenMenue[0].classList.remove('js-open')
		})
	}
})