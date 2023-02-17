$(function () {
	/* Inits */
	initScroll();
	initToggle();
	initLazy();

	/* Functions */

	function initScroll() {
		if (!$('.scroll').length) return;

		$(document).on('click scroll.init', '.scroll', function(event) {
			event.preventDefault();
			$.fancybox.close();

			var
			hrefId = $(this).attr('href') || $(this).data('href'),
			posTop = $(hrefId).offset().top;
			$('html, body').animate({scrollTop: posTop}, 1000);
		});
	}


	function initToggle() {

		$('.program__block-controls').on('click', function() {
			$(this).hasClass('active') ? $(this).removeClass('active') : $(this).addClass('active');
			$(this).next().toggle();
		});
	}

	function initLazy() {

		let
		lazyArr = [].slice.call(document.querySelectorAll('.lazy')),
		active = false,
		threshold = 200
		;

		const lazyLoad = function(e) {
			if (active === false) {
				active = true;

				setTimeout(function() {
					lazyArr.forEach(function(lazyObj) {
						if ((lazyObj.getBoundingClientRect().top <= window.innerHeight + threshold && lazyObj.getBoundingClientRect().bottom >= -threshold) && getComputedStyle(lazyObj).display !== 'none') {

							if ( lazyObj.dataset.src ) {
								let
								img = new Image(),
								src = lazyObj.dataset.src
								;
								img.src = src;
								img.onload = function() {
									if (!! lazyObj.parent) {
										lazyObj.parent.replaceChild(img, lazyObj);
									} else {
										lazyObj.src = src;
									}
								}
								lazyObj.removeAttribute('data-src');
							}

							if ( lazyObj.dataset.srcset ) {
								lazyObj.srcset = lazyObj.dataset.srcset;
								lazyObj.removeAttribute('data-srcset');
							}

							lazyObj.classList.remove('lazy');
							lazyObj.classList.add('lazy-loaded');

							lazyArr = lazyArr.filter(function(obj) {
								return obj !== lazyObj;
							});

							if (lazyArr.length === 0) {
								document.removeEventListener('scroll', lazyLoad);
								window.removeEventListener('resize', lazyLoad);
								window.removeEventListener('orientationchange', lazyLoad);
							}
						}
					});

					active = false;
				}, 200);
			}
		};

		lazyLoad();

		document.addEventListener('scroll', lazyLoad);
		window.addEventListener('resize', lazyLoad);
		window.addEventListener('orientationchange', lazyLoad);

	}

	$('#ok').on('click', function() {
		$.fancybox.close();
	})

  $(".public-offer").fancybox({
		  toolbar  : false,
		  smallBtn : true,
		  iframe : {
		    preload : false
		  }
  });

});

let formSubmited;
	let formCloned;
	returnForm();

	function returnForm() {

		$('.form').submit(function(){

			formSubmited = $(this);
			formCloned = formSubmited.find('.form__wrapper').clone(true);

		})

	}

	function initPopupSuccess(popupIdString) {

		$.fancybox.close();

		formSubmited.html(formCloned);

		$.fancybox.open($(popupIdString));
	}
