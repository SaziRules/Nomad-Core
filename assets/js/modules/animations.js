/**
 * Scroll-triggered fade-up animations via IntersectionObserver.
 * Elements with [data-animate] start hidden and fade in when in view.
 */

export function initAnimations() {
	const elements = document.querySelectorAll( '[data-animate]' );

	if ( ! elements.length ) return;

	/* Fallback: no IntersectionObserver support — show everything */
	if ( ! ( 'IntersectionObserver' in window ) ) {
		elements.forEach( el => el.classList.add( 'is-visible' ) );
		return;
	}

	const observer = new IntersectionObserver(
		( entries ) => {
			entries.forEach( entry => {
				if ( entry.isIntersecting ) {
					entry.target.classList.add( 'is-visible' );
					observer.unobserve( entry.target );
				}
			} );
		},
		{ threshold: 0.12, rootMargin: '0px 0px -40px 0px' }
	);

	elements.forEach( el => observer.observe( el ) );
}
