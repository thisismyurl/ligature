<?php
/**
 * Title: Enquiry CTA
 * Slug: ligature/enquiry-cta
 * Categories: ligature-contact
 * Viewport Width: 1280
 * Inserter: true
 * Description: Enquiry call-to-action — Newsreader heading, DM Sans body, two action buttons (primary email link, secondary portfolio link). Clean, un-desperate.
 */
?>
<!-- wp:group {"className":"ligature-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}},"border":{"top":{"color":"var:preset|color|lig-rule","style":"solid","width":"1px"}}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group ligature-section" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);border-top:1px solid var(--wp--preset--color--lig-rule)">

	<!-- wp:paragraph {"className":"is-style-lig-overline","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|6"}}}} -->
	<p class="is-style-lig-overline" style="margin-bottom:var(--wp--preset--spacing--6)">New Projects</p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|newsreader","fontWeight":"400","fontSize":"var:preset|font-size|4xl","lineHeight":"1.05","letterSpacing":"-0.025em","textWrap":"balance"},"color":{"text":"var:preset|color|lig-ink"}}} -->
	<h2 style="font-family:var(--wp--preset--font-family--newsreader);font-weight:400;font-size:var(--wp--preset--font-size--4xl);line-height:1.05;letter-spacing:-0.025em;text-wrap:balance;color:var(--wp--preset--color--lig-ink)">We take two to three new clients per quarter. Currently reviewing briefs for Q3 2026.</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|6"}},"typography":{"fontFamily":"var:preset|font-family|dm-sans","fontSize":"var:preset|font-size|md","lineHeight":"1.7","fontWeight":"400"},"color":{"text":"var:preset|color|lig-secondary"}}} -->
	<p style="margin-top:var(--wp--preset--spacing--6);font-family:var(--wp--preset--font-family--dm-sans);font-size:var(--wp--preset--font-size--md);line-height:1.7;color:var(--wp--preset--color--lig-secondary)">Send a brief or a conversation starter — what the organisation does, what's changing, and what you're trying to solve for. We respond within two business days.</p>
	<!-- /wp:paragraph -->

	<!-- Demo links: repoint the email button (mailto:hello@yourstudio.com) and the
	     "View selected work" button (/work) to your own address and pages. -->
	<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|10"},"blockGap":"var:preset|spacing|4"}}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--10)">
		<!-- wp:button {"style":{"border":{"radius":"0"},"typography":{"fontFamily":"var:preset|font-family|dm-sans","fontSize":"var:preset|font-size|sm","fontWeight":"500"}}} -->
		<div class="wp-block-button"><a class="wp-block-button__link" href="mailto:hello@yourstudio.com" style="border-radius:0;font-family:var(--wp--preset--font-family--dm-sans);font-size:var(--wp--preset--font-size--sm);font-weight:500">Send a brief →</a></div>
		<!-- /wp:button -->
		<!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"0"},"typography":{"fontFamily":"var:preset|font-family|dm-sans","fontSize":"var:preset|font-size|sm","fontWeight":"500"}}} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="/work" style="border-radius:0;font-family:var(--wp--preset--font-family--dm-sans);font-size:var(--wp--preset--font-size--sm);font-weight:500">View selected work</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

</div>
<!-- /wp:group -->
