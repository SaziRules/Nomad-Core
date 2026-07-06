/**
 * Navigation — mobile toggle and sticky scroll state.
 */

export function initNavigation() {
	const header  = document.querySelector( '#site-header' );
	const toggle  = document.querySelector( '[data-nav-toggle]' );
	const menu    = document.querySelector( '[data-nav-menu]' );

	// ── Sticky shadow ────────────────────────────────────────────────
	if ( header ) {
		window.addEventListener( 'scroll', () => {
			header.classList.toggle( 'is-scrolled', window.scrollY > 10 );
		}, { passive: true } );
	}

	// ── Mobile menu toggle ───────────────────────────────────────────
	if ( ! toggle || ! menu ) return;

	toggle.addEventListener( 'click', () => {
		const isOpen = toggle.getAttribute( 'aria-expanded' ) === 'true';

		toggle.setAttribute( 'aria-expanded', String( ! isOpen ) );
		menu.hidden = isOpen;
		menu.setAttribute( 'aria-hidden', String( isOpen ) );
		document.body.classList.toggle( 'overflow-hidden', ! isOpen );
	} );

	// Close on resize to desktop
	window.addEventListener( 'resize', () => {
		if ( window.innerWidth >= 1024 && ! menu.hidden ) {
			toggle.setAttribute( 'aria-expanded', 'false' );
			menu.hidden = true;
			menu.setAttribute( 'aria-hidden', 'true' );
			document.body.classList.remove( 'overflow-hidden' );
		}
	}, { passive: true } );

	// Close on Escape
	document.addEventListener( 'keydown', ( e ) => {
		if ( e.key === 'Escape' && ! menu.hidden ) {
			toggle.setAttribute( 'aria-expanded', 'false' );
			menu.hidden = true;
			menu.setAttribute( 'aria-hidden', 'true' );
			document.body.classList.remove( 'overflow-hidden' );
			toggle.focus();
		}
	} );
}
