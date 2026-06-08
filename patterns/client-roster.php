<?php
/**
 * Title: Client Roster
 * Slug: ligature/client-roster
 * Categories: ligature-about
 * Viewport Width: 1280
 * Inserter: true
 * Description: Filterable client grid using the WordPress Interactivity API. Category filter buttons (All, Fintech, Retail, Healthcare, Media) toggle visible clients via data-wp-bind--hidden. Full roster visible without JavaScript.
 */
?>
<!-- wp:group {"className":"ligature-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|16","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group ligature-section" style="padding-top:var(--wp--preset--spacing--16);padding-bottom:var(--wp--preset--spacing--16);padding-left:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5)">

	<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|8"},"blockGap":"var:preset|spacing|2"},"border":{"bottom":{"color":"var:preset|color|lig-rule","style":"solid","width":"1px"}}},"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"baseline","flexWrap":"wrap"}} -->
	<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--8);border-bottom:1px solid var(--wp--preset--color--lig-rule)">
		<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|newsreader","fontWeight":"400","fontSize":"var:preset|font-size|xl","letterSpacing":"-0.02em"},"color":{"text":"var:preset|color|lig-ink"}}} -->
		<h2 style="font-family:var(--wp--preset--font-family--newsreader);font-weight:400;font-size:var(--wp--preset--font-size--xl);letter-spacing:-0.02em;color:var(--wp--preset--color--lig-ink)">Clients</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"className":"is-style-lig-overline"} -->
		<p class="is-style-lig-overline">Selected engagements</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- Interactivity API filter buttons + roster grid -->
	<!-- wp:html -->
	<div
		data-wp-interactive="ligature-client-roster"
		data-wp-init="callbacks.init"
		style="margin-top:var(--wp--preset--spacing--8)"
	>
		<!-- Filter buttons -->
		<div role="group" aria-label="Filter clients by sector" style="display:flex;flex-wrap:wrap;gap:var(--wp--preset--spacing--3);margin-bottom:var(--wp--preset--spacing--8)">
			<button
				class="wp-element-button"
				data-wp-on--click="callbacks.filter"
				data-filter="all"
				data-wp-class--is-active="state.activeFilter === 'all'"
				style="font-family:var(--wp--preset--font-family--dm-sans);font-size:var(--wp--preset--font-size--sm);font-weight:500;background:var(--wp--preset--color--lig-ink);color:var(--wp--preset--color--lig-white);border:1px solid var(--wp--preset--color--lig-ink);padding:0.5rem 1.25rem;cursor:pointer;border-radius:0"
			>All</button>
			<button
				class="wp-element-button"
				data-wp-on--click="callbacks.filter"
				data-filter="fintech"
				data-wp-class--is-active="state.activeFilter === 'fintech'"
				style="font-family:var(--wp--preset--font-family--dm-sans);font-size:var(--wp--preset--font-size--sm);font-weight:500;background:transparent;color:var(--wp--preset--color--lig-ink);border:1px solid var(--wp--preset--color--lig-rule);padding:0.5rem 1.25rem;cursor:pointer;border-radius:0"
			>Fintech</button>
			<button
				class="wp-element-button"
				data-wp-on--click="callbacks.filter"
				data-filter="retail"
				data-wp-class--is-active="state.activeFilter === 'retail'"
				style="font-family:var(--wp--preset--font-family--dm-sans);font-size:var(--wp--preset--font-size--sm);font-weight:500;background:transparent;color:var(--wp--preset--color--lig-ink);border:1px solid var(--wp--preset--color--lig-rule);padding:0.5rem 1.25rem;cursor:pointer;border-radius:0"
			>Retail</button>
			<button
				class="wp-element-button"
				data-wp-on--click="callbacks.filter"
				data-filter="media"
				data-wp-class--is-active="state.activeFilter === 'media'"
				style="font-family:var(--wp--preset--font-family--dm-sans);font-size:var(--wp--preset--font-size--sm);font-weight:500;background:transparent;color:var(--wp--preset--color--lig-ink);border:1px solid var(--wp--preset--color--lig-rule);padding:0.5rem 1.25rem;cursor:pointer;border-radius:0"
			>Media</button>
		</div>

		<!-- Client grid -->
		<div class="ligature-client-roster">
			<div class="ligature-client-card" data-sector="fintech" data-wp-bind--hidden="!state.showClient" data-wp-context='{"sector":"fintech"}'>
				<p style="font-family:var(--wp--preset--font-family--dm-sans);font-weight:500;font-size:var(--wp--preset--font-size--base);text-align:center;color:var(--wp--preset--color--lig-ink)">Meridian Capital</p>
				<p style="font-family:var(--wp--preset--font-family--dm-sans);font-size:var(--wp--preset--font-size--xs);text-align:center;color:var(--wp--preset--color--lig-muted);margin-top:0.25rem">Fintech</p>
			</div>
			<div class="ligature-client-card" data-sector="media">
				<p style="font-family:var(--wp--preset--font-family--dm-sans);font-weight:500;font-size:var(--wp--preset--font-size--base);text-align:center;color:var(--wp--preset--color--lig-ink)">Folio Press</p>
				<p style="font-family:var(--wp--preset--font-family--dm-sans);font-size:var(--wp--preset--font-size--xs);text-align:center;color:var(--wp--preset--color--lig-muted);margin-top:0.25rem">Media</p>
			</div>
			<div class="ligature-client-card" data-sector="retail">
				<p style="font-family:var(--wp--preset--font-family--dm-sans);font-weight:500;font-size:var(--wp--preset--font-size--base);text-align:center;color:var(--wp--preset--color--lig-ink)">North Collective</p>
				<p style="font-family:var(--wp--preset--font-family--dm-sans);font-size:var(--wp--preset--font-size--xs);text-align:center;color:var(--wp--preset--color--lig-muted);margin-top:0.25rem">Retail</p>
			</div>
			<div class="ligature-client-card" data-sector="media">
				<p style="font-family:var(--wp--preset--font-family--dm-sans);font-weight:500;font-size:var(--wp--preset--font-size--base);text-align:center;color:var(--wp--preset--color--lig-ink)">Beacon Media</p>
				<p style="font-family:var(--wp--preset--font-family--dm-sans);font-size:var(--wp--preset--font-size--xs);text-align:center;color:var(--wp--preset--color--lig-muted);margin-top:0.25rem">Media</p>
			</div>
			<div class="ligature-client-card" data-sector="fintech">
				<p style="font-family:var(--wp--preset--font-family--dm-sans);font-weight:500;font-size:var(--wp--preset--font-size--base);text-align:center;color:var(--wp--preset--color--lig-ink)">Render Labs</p>
				<p style="font-family:var(--wp--preset--font-family--dm-sans);font-size:var(--wp--preset--font-size--xs);text-align:center;color:var(--wp--preset--color--lig-muted);margin-top:0.25rem">Fintech</p>
			</div>
			<div class="ligature-client-card" data-sector="retail">
				<p style="font-family:var(--wp--preset--font-family--dm-sans);font-weight:500;font-size:var(--wp--preset--font-size--base);text-align:center;color:var(--wp--preset--color--lig-ink)">Common Ground</p>
				<p style="font-family:var(--wp--preset--font-family--dm-sans);font-size:var(--wp--preset--font-size--xs);text-align:center;color:var(--wp--preset--color--lig-muted);margin-top:0.25rem">Retail</p>
			</div>
			<div class="ligature-client-card" data-sector="media">
				<p style="font-family:var(--wp--preset--font-family--dm-sans);font-weight:500;font-size:var(--wp--preset--font-size--base);text-align:center;color:var(--wp--preset--color--lig-ink)">Aperture Health</p>
				<p style="font-family:var(--wp--preset--font-family--dm-sans);font-size:var(--wp--preset--font-size--xs);text-align:center;color:var(--wp--preset--color--lig-muted);margin-top:0.25rem">Media</p>
			</div>
			<div class="ligature-client-card" data-sector="fintech">
				<p style="font-family:var(--wp--preset--font-family--dm-sans);font-weight:500;font-size:var(--wp--preset--font-size--base);text-align:center;color:var(--wp--preset--color--lig-ink)">Lumen Data</p>
				<p style="font-family:var(--wp--preset--font-family--dm-sans);font-size:var(--wp--preset--font-size--xs);text-align:center;color:var(--wp--preset--color--lig-muted);margin-top:0.25rem">Fintech</p>
			</div>
		</div>
	</div>
	<!-- /wp:html -->

</div>
<!-- /wp:group -->
