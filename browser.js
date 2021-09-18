$( document ).ready( function () {

	let windowWidth = $( window ).width();
	let windowHeight = $( window ).height();
	const copyArea = document.querySelector( '.debug-container' );
	const screenWidthContainer = document.querySelector( '.screen-width' );
	const screenHeightContainer = document.querySelector( '.screen-height' );
	const viewportWidthContainer = document.querySelector( '.viewport-width' );
	const viewportHeightContainer = document.querySelector( '.viewport-height' );

	/**
	 * Resize Event Watcher.
	 */
	$( window ).resize( function () {
		// Check for iOS fake resize
		if ( $( window ).width() != windowWidth ) {
			windowWidth = $( window ).width();
			load();
		}
		if ( $( window ).height() != windowHeight ) {
			windowHeight = $( window ).height();
			load();
		}
	} );

	/**
	 * Get window viewport dimensions
	 * @returns object
	 */
	function getViewportDimensions() {
		var doc = document;
		var w = window;
		var docEl = ( doc.compatMode && doc.compatMode === 'CSS1Compat' ) ?
			doc.documentElement : doc.body;
		var width = docEl.clientWidth;
		var height = docEl.clientHeight;

		// mobile zoomed in?
		if ( w.innerWidth && width > w.innerWidth ) {
			width = w.innerWidth;
			height = w.innerHeight;
		}

		return {
			width: width,
			height: height
		};
	}

	/**
	 * Watch Debug Container for Click, then Copy.
	 */
	copyArea.addEventListener( 'click',function () {

		var range = document.createRange();

		range.selectNode( copyArea );

		window.getSelection().addRange( range );

		try {

			var successful = document.execCommand( 'copy' );

			toastr.options.timeOut = 1000;
			toastr.options.fadeOut = 250;
			toastr.options.fadeIn = 0;
			toastr.options.showEasing = 'swing';
			toastr.options.hideEasing = 'swing';
			toastr.options.positionClass = 'toast-bottom-center';

			if ( successful ) {
				toastr.success( 'Copied' )
			} else {
				toastr.error( 'Error, please copy manually' )

			}
		} catch ( err ) {
			toastr.error( 'Error, please copy manually' )
		}
		window.getSelection().removeAllRanges();
	} );

	/**
	 * Load everyting.
	 */
	function load() {
		let viewport = getViewportDimensions();
		viewportWidthContainer.innerHTML = viewport.width;
		viewportHeightContainer.innerHTML = viewport.height;
		screenWidthContainer.innerHTML = window.screen.width;
		screenHeightContainer.innerHTML = window.screen.height;
	}

	( function () {
		load();
	} )();
} );