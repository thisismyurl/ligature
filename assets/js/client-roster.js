/**
 * [SKIN] Client-roster sector filter — WordPress Interactivity API store.
 *
 * Progressive enhancement for patterns/client-roster.php. The full roster
 * renders server-side and is visible with no JavaScript; this store only adds
 * client-side filtering on top. Each card carries a `data-wp-context` sector and
 * binds its `hidden` attribute to `state.isHidden`, which compares the card's
 * own sector to the single shared `state.activeFilter`. The filter buttons set
 * that active filter; "all" shows everything.
 *
 * Store namespace must match the pattern's data-wp-interactive value.
 *
 * @since 1.6163.2237
 */

import { store, getContext } from '@wordpress/interactivity';

store( 'ligature-client-roster', {
	state: {
		/**
		 * The active sector filter. 'all' shows every card.
		 *
		 * @type {string}
		 */
		activeFilter: 'all',

		/**
		 * Whether the current card is hidden under the active filter.
		 *
		 * Read inside a card's `data-wp-bind--hidden`, where getContext() returns
		 * that card's `{ sector }`. A card is hidden when a specific sector is
		 * active and does not match the card's own sector.
		 *
		 * @return {boolean} True when the card should be hidden.
		 */
		get isHidden() {
			const { activeFilter } = store( 'ligature-client-roster' ).state;
			const { sector } = getContext();
			return 'all' !== activeFilter && sector !== activeFilter;
		},
	},
	callbacks: {
		/**
		 * Seed the active filter from the wrapper's initial context, so the
		 * server-rendered state and the client store agree on first paint.
		 */
		init() {
			const context = getContext();
			if ( context && 'string' === typeof context.activeFilter ) {
				store( 'ligature-client-roster' ).state.activeFilter =
					context.activeFilter;
			}
		},

		/**
		 * Set the active sector filter from the clicked button's data-filter.
		 *
		 * @param {Event} event The click event from a filter button.
		 */
		filter( event ) {
			const filter = event.currentTarget.getAttribute( 'data-filter' );
			if ( filter ) {
				store( 'ligature-client-roster' ).state.activeFilter = filter;
			}
		},
	},
} );
