<?php
/**
 * Title: Selected Work
 * Slug: ligature/selected-work
 * Categories: ligature-work
 * Viewport Width: 1280
 * Inserter: true
 * Description: Asymmetric 60/40 featured case study — large image left, title and excerpt right with case meta. For the front-page featured slot; not a query block.
 */
?>
<!-- wp:group {"className":"ligature-section ligature-band--surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|16","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group ligature-section ligature-band--surface" style="padding-top:var(--wp--preset--spacing--16);padding-bottom:var(--wp--preset--spacing--16);padding-left:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5)">

	<!-- Section label -->
	<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|8"}},"border":{"bottom":{"color":"var:preset|color|lig-rule","style":"solid","width":"1px"}}},"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"baseline"}} -->
	<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--8);border-bottom:1px solid var(--wp--preset--color--lig-rule)">
		<!-- wp:paragraph {"className":"is-style-lig-overline"} --><p class="is-style-lig-overline">Featured Case Study</p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|dm-sans","fontSize":"var:preset|font-size|sm","fontWeight":"500"},"color":{"text":"var:preset|color|lig-signal"}}} --><p style="font-family:var(--wp--preset--font-family--dm-sans);font-size:var(--wp--preset--font-size--sm);font-weight:500;color:var(--wp--preset--color--lig-signal)"><a href="/work" style="color:inherit;text-decoration:none">See all work →</a></p><!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- 60/40 case study layout -->
	<!-- wp:columns {"className":"ligature-selected-work","isStackedOnMobile":true,"style":{"spacing":{"blockGap":"var:preset|spacing|10","padding":{"top":"var:preset|spacing|10"}}}} -->
	<div class="wp-block-columns ligature-selected-work" style="padding-top:var(--wp--preset--spacing--10)">

		<!-- Image column -->
		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%">
			<!-- wp:image {"aspectRatio":"3/2","scale":"cover","linkDestination":"none","style":{"color":{}}} -->
			<figure class="wp-block-image"><img src="" alt="Meridian Capital — Brand Identity" style="aspect-ratio:3/2;object-fit:cover" /></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- Content column -->
		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%">

			<!-- wp:paragraph {"className":"is-style-lig-overline","style":{"color":{"text":"var:preset|color|lig-muted"}}} -->
			<p class="is-style-lig-overline" style="color:var(--wp--preset--color--lig-muted)">Financial Services · 2025</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|newsreader","fontWeight":"400","fontSize":"var:preset|font-size|2xl","lineHeight":"1.1","letterSpacing":"-0.02em","textWrap":"balance"},"color":{"text":"var:preset|color|lig-ink"},"spacing":{"margin":{"top":"var:preset|spacing|4"}}}} -->
			<h3 style="margin-top:var(--wp--preset--spacing--4);font-family:var(--wp--preset--font-family--newsreader);font-weight:400;font-size:var(--wp--preset--font-size--2xl);line-height:1.1;letter-spacing:-0.02em;text-wrap:balance;color:var(--wp--preset--color--lig-ink)">Meridian Capital — Post-Merger Brand Relaunch</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|5"}},"typography":{"fontFamily":"var:preset|font-family|dm-sans","fontSize":"var:preset|font-size|base","lineHeight":"1.7"},"color":{"text":"var:preset|color|lig-secondary"}}} -->
			<p style="margin-top:var(--wp--preset--spacing--5);font-family:var(--wp--preset--font-family--dm-sans);font-size:var(--wp--preset--font-size--base);line-height:1.7;color:var(--wp--preset--color--lig-secondary)">Following a cross-border merger, Meridian needed a visual identity that unified two distinct institutional cultures without erasing either. The resulting system operates across wealth management, private equity, and public markets without contradiction.</p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|3"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--6)">
				<!-- wp:paragraph {"className":"is-style-lig-overline"} --><p class="is-style-lig-overline">Scope</p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|dm-sans","fontWeight":"500","fontSize":"var:preset|font-size|base"},"color":{"text":"var:preset|color|lig-ink"}}} --><p style="font-family:var(--wp--preset--font-family--dm-sans);font-weight:500;font-size:var(--wp--preset--font-size--base);color:var(--wp--preset--color--lig-ink)">Strategy · Naming · Identity · Guidelines · Motion</p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|8"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--8)">
				<!-- wp:button {"style":{"border":{"radius":"0"},"typography":{"fontFamily":"var:preset|font-family|dm-sans","fontSize":"var:preset|font-size|sm","fontWeight":"500"}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link" href="/work/meridian-capital" style="border-radius:0;font-family:var(--wp--preset--font-family--dm-sans);font-size:var(--wp--preset--font-size--sm);font-weight:500">Read case study →</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
