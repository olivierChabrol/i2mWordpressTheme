/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
jQuery(function($) {

	$(".site-title").replaceWith('<p class="site-title"><a href="/" rel="home">INSTITUT DE <br/>MATHÉMATIQUES DE <br/>MARSEILLE</a></p>');
	console.log($(".site-title").text());

	var container, button, menu, links, i, len;

	container = document.getElementById( 'site-navigation' );
	if ( ! container ) {
		return;
	}

	button = container.getElementsByTagName( 'button' )[0];
	if ( 'undefined' === typeof button ) {
		return;
	}

	menu = container.getElementsByTagName( 'ul' )[0];

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}

	if ( -1 === menu.className.indexOf( 'nav-menu' ) ) {
		menu.className += ' nav-menu';
	}

	button.onclick = function() {
		if ( -1 !== container.className.indexOf( 'toggled' ) ) {
			container.className = container.className.replace( ' toggled', '' );
			button.setAttribute( 'aria-expanded', 'false' );
		} else {
			container.className += ' toggled';
			button.setAttribute( 'aria-expanded', 'true' );
		}
	};

	// Close small menu when user clicks outside
	document.addEventListener( 'click', function( event ) {
		var isClickInside = container.contains( event.target );

		if ( ! isClickInside ) {
			container.className = container.className.replace( ' toggled', '' );
			button.setAttribute( 'aria-expanded', 'false' );
		}
	} );

	// Get all the link elements within the menu.
	links = menu.getElementsByTagName( 'a' );

	// Each time a menu link is focused or blurred, toggle focus.
	for ( i = 0, len = links.length; i < len; i++ ) {
		links[i].addEventListener( 'focus', toggleFocus, true );
		links[i].addEventListener( 'blur', toggleFocus, true );
	}

	/**
	 * Sets or removes .focus class on an element.
	 */
	function toggleFocus() {
		var self = this;

		// Move up through the ancestors of the current link until we hit .nav-menu.
		while ( -1 === self.className.indexOf( 'nav-menu' ) ) {
			// On li elements toggle the class .focus.
			if ( 'li' === self.tagName.toLowerCase() ) {
				if ( -1 !== self.className.indexOf( 'focus' ) ) {
					self.className = self.className.replace( ' focus', '' );
				} else {
					self.className += ' focus';
				}
			}

			self = self.parentElement;
		}
	}

	/**
	 * Toggles `focus` class to allow submenu access on tablets.
	 */
	( function() {
		var touchStartFn,
			parentLink = container.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

		if ( 'ontouchstart' in window ) {
			touchStartFn = function( e ) {
				var menuItem = this.parentNode;

				if ( ! menuItem.classList.contains( 'focus' ) ) {
					e.preventDefault();
					for ( i = 0; i < menuItem.parentNode.children.length; ++i ) {
						if ( menuItem === menuItem.parentNode.children[i] ) {
							continue;
						}
						menuItem.parentNode.children[i].classList.remove( 'focus' );
					}
					menuItem.classList.add( 'focus' );
				} else {
					menuItem.classList.remove( 'focus' );
				}
			};

			for ( i = 0; i < parentLink.length; ++i ) {
				parentLink[i].addEventListener( 'touchstart', touchStartFn, false );
			}
		}
	}( container ) );

	if ($(window).width() > 992) {
		var initialPadding = $('#site-navigation').css('padding-top');
		$(window).scroll(function() {
			var adminBarSize = 0;
			
			//var initialPadding = $('#site-navigation').css('padding-top');
			if($("#wpadminbar")) {
				adminBarSize += $("#wpadminbar").outerHeight();
			}
			var size = $('.site-branding').outerHeight();
			if ($(this).scrollTop() > size) {
				$('#site-navigation').addClass('fixed-top');
				$('#site-navigation').css('margin-top', '0em');
				$('#site-navigation').css('padding-top', adminBarSize+"px");
				$('body').css('padding-top',$('#site-navigation').outerHeight() + 'px');
			} else {
				$('#site-navigation').removeClass('fixed-top');
				$('#site-navigation').css('margin-top', '1em');
				$('#site-navigation').css('padding-top', initialPadding);
				$('body').css('padding-top','0');
			}
		});
	}

	// dropdown menu on hover 
	var $screensize = $(window).width();
	$('.dropdown').on("mouseover", function() {													
		$(this).find('> .dropdown-menu').stop(true, true).slideDown('fast');
		$(this).bind('mouseleave', function() {
			$(this).find('> .dropdown-menu').stop(true, true).css('display', 'none');
		});
	});

	$(".dropdown li").on('mouseenter mouseleave', function (e) {
		if ($('.dropdown-menu', this).length) {
			var elm = $('.dropdown-menu', this);
			var off = elm.offset();
			var l = off.left;
			var w = elm.width();
			var docW = $(window).width();

			var isEntirelyVisible = (l + w <= docW);

			if (!isEntirelyVisible) {
				$(elm).addClass('dropdown-reverse');
			} else {
				$(elm).removeClass('dropdown-reverse');
			}
		}
	});

	//scroll top
	$('#returnTop').hide();

	$('#returnTop').click(function() {;
		$('html').animate({scrollTop:0}, 'slow');
		return false;
	});

	$(window).scroll(function() {
		if ($(window).scrollTop() == 0)
			$('#returnTop').fadeOut();
		else
			$('#returnTop').fadeIn(1500);
	});
});