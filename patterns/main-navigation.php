<?php
/**
 * Title: Main Navigation
 * Slug: ligature/main-navigation
 * Categories: ligature-work
 * Viewport Width: 1280
 * Inserter: true
 * Description: Clean horizontal site header — italic Newsreader wordmark left, DM Sans navigation links right, and a signal-blue start-a-project button. Static markup, not a navigation block.
 */
?>
<!-- wp:group {"className":"ligature-section ligature-nav","backgroundColor":"lig-paper","style":{"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}},"border":{"bottom":{"color":"var:preset|color|lig-rule","style":"solid","width":"1px"}}},"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center","flexWrap":"nowrap"}} -->
<div class="wp-block-group ligature-section ligature-nav has-lig-paper-background-color has-background" style="border-bottom:1px solid var(--wp--preset--color--lig-rule);padding-top:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5)">

	<!-- Wordmark -->
	<!-- wp:paragraph {"className":"ligature-nav__wordmark","style":{"typography":{"fontFamily":"var:preset|font-family|newsreader","fontStyle":"italic","fontWeight":"400","fontSize":"var:preset|font-size|xl","letterSpacing":"-0.02em"},"color":{"text":"var:preset|color|lig-ink"}}} -->
	<p class="ligature-nav__wordmark" style="font-family:var(--wp--preset--font-family--newsreader);font-style:italic;font-weight:400;font-size:var(--wp--preset--font-size--xl);letter-spacing:-0.02em;color:var(--wp--preset--color--lig-ink)"><a href="/" style="color:inherit;text-decoration:none">Ligature</a></p>
	<!-- /wp:paragraph -->

	<!-- Links + CTA -->
	<!-- wp:group {"className":"ligature-nav__links","style":{"spacing":{"blockGap":"var:preset|spacing|7"}},"layout":{"type":"flex","justifyContent":"right","verticalAlignment":"center","flexWrap":"wrap"}} -->
	<div class="wp-block-group ligature-nav__links">

		<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|dm-sans","fontSize":"var:preset|font-size|sm","fontWeight":"500"},"color":{"text":"var:preset|color|lig-secondary"}}} -->
		<p style="font-family:var(--wp--preset--font-family--dm-sans);font-size:var(--wp--preset--font-size--sm);font-weight:500;color:var(--wp--preset--color--lig-secondary)"><a href="/work" style="color:inherit;text-decoration:none">Work</a></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|dm-sans","fontSize":"var:preset|font-size|sm","fontWeight":"500"},"color":{"text":"var:preset|color|lig-secondary"}}} -->
		<p style="font-family:var(--wp--preset--font-family--dm-sans);font-size:var(--wp--preset--font-size--sm);font-weight:500;color:var(--wp--preset--color--lig-secondary)"><a href="/studio" style="color:inherit;text-decoration:none">Studio</a></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|dm-sans","fontSize":"var:preset|font-size|sm","fontWeight":"500"},"color":{"text":"var:preset|color|lig-secondary"}}} -->
		<p style="font-family:var(--wp--preset--font-family--dm-sans);font-size:var(--wp--preset--font-size--sm);font-weight:500;color:var(--wp--preset--color--lig-secondary)"><a href="/journal" style="color:inherit;text-decoration:none">Journal</a></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|dm-sans","fontSize":"var:preset|font-size|sm","fontWeight":"500"},"color":{"text":"var:preset|color|lig-secondary"}}} -->
		<p style="font-family:var(--wp--preset--font-family--dm-sans);font-size:var(--wp--preset--font-size--sm);font-weight:500;color:var(--wp--preset--color--lig-secondary)"><a href="/contact" style="color:inherit;text-decoration:none">Contact</a></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"lig-signal","textColor":"lig-white","style":{"border":{"radius":"0"},"typography":{"fontFamily":"var:preset|font-family|dm-sans","fontSize":"var:preset|font-size|sm","fontWeight":"500"},"spacing":{"padding":{"top":"var:preset|spacing|3","bottom":"var:preset|spacing|3","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}}} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-lig-white-color has-lig-signal-background-color has-text-color has-background" href="/contact" style="border-radius:0;padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--5);font-family:var(--wp--preset--font-family--dm-sans);font-size:var(--wp--preset--font-size--sm);font-weight:500">Start a Project</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
