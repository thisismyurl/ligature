<?php
/**
 * Title: Site Footer
 * Slug: ligature/site-footer
 * Categories: ligature-work
 * Viewport Width: 1280
 * Inserter: true
 * Description: Dark three-column site footer — studio name and descriptor left, navigation links centre, and a start-a-project call-to-action with a signal-blue button right.
 */
?>
<!-- Demo links: the footer navigation (/work, /contact) and the call-to-action
     button point to placeholder pages — repoint them to your own pages.

     The band uses the edition-stable .ligature-band--overlay ground (fixed dark +
     pinned light text), not backgroundColor:lig-ink / textColor:lig-paper. The
     lig-ink ground inverts to a light tone in the dark editions (Leaded, Midnight
     Brief), which turned every cream label on this band light-on-light. -->
<!-- wp:group {"className":"ligature-section ligature-footer ligature-band--overlay","style":{"spacing":{"padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|12","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group ligature-section ligature-footer ligature-band--overlay" style="padding-top:var(--wp--preset--spacing--16);padding-bottom:var(--wp--preset--spacing--12);padding-left:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5)">

	<!-- wp:columns {"className":"ligature-footer__columns","isStackedOnMobile":true,"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|10"}}}} -->
	<div class="wp-block-columns ligature-footer__columns">

		<!-- Left: studio name + descriptor -->
		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%">
			<!-- Heading, descriptor, nav, and labels take their colour from the
			     edition-stable band rule (assets/css/skin.css), not per-edition
			     tokens or cream rgba literals. -->
			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|newsreader","fontStyle":"italic","fontWeight":"400","fontSize":"var:preset|font-size|2xl","letterSpacing":"-0.02em"}}} -->
			<h2 style="font-family:var(--wp--preset--font-family--newsreader);font-style:italic;font-weight:400;font-size:var(--wp--preset--font-size--2xl);letter-spacing:-0.02em">Ligature</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"ligature-footer-fine","style":{"spacing":{"margin":{"top":"var:preset|spacing|4"}},"typography":{"fontFamily":"var:preset|font-family|dm-sans","fontSize":"var:preset|font-size|base","lineHeight":"1.6"}}} -->
			<p class="ligature-footer-fine" style="margin-top:var(--wp--preset--spacing--4);font-family:var(--wp--preset--font-family--dm-sans);font-size:var(--wp--preset--font-size--base);line-height:1.6">A typography and brand identity studio for names that need to last.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- Centre: navigation links -->
		<!-- wp:column {"width":"30%"} -->
		<div class="wp-block-column" style="flex-basis:30%">
			<!-- wp:paragraph {"className":"is-style-lig-overline","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|5"}}}} -->
			<p class="is-style-lig-overline" style="margin-bottom:var(--wp--preset--spacing--5)">Studio</p>
			<!-- /wp:paragraph -->
			<!-- wp:list {"className":"is-style-lig-footer-nav","style":{"typography":{"fontFamily":"var:preset|font-family|dm-sans","fontSize":"var:preset|font-size|base","lineHeight":"2.0"}}} -->
			<ul class="is-style-lig-footer-nav" style="font-family:var(--wp--preset--font-family--dm-sans);font-size:var(--wp--preset--font-size--base);line-height:2.0">
				<!-- wp:list-item -->
				<li><a href="/work" style="color:inherit;text-decoration:none">Work</a></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><a href="/studio" style="color:inherit;text-decoration:none">Studio</a></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><a href="/journal" style="color:inherit;text-decoration:none">Journal</a></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><a href="/contact" style="color:inherit;text-decoration:none">Contact</a></li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:column -->

		<!-- Right: start-a-project CTA -->
		<!-- wp:column {"width":"30%"} -->
		<div class="wp-block-column" style="flex-basis:30%">
			<!-- Colour inherited from the edition-stable band rule. -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|newsreader","fontWeight":"400","fontSize":"var:preset|font-size|lg","lineHeight":"1.3"},"spacing":{"margin":{"bottom":"var:preset|spacing|5"}}}} -->
			<p style="margin-bottom:var(--wp--preset--spacing--5);font-family:var(--wp--preset--font-family--newsreader);font-weight:400;font-size:var(--wp--preset--font-size--lg);line-height:1.3">Have a name worth getting right?</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"lig-signal","textColor":"lig-white","style":{"border":{"radius":"0"},"typography":{"fontFamily":"var:preset|font-family|dm-sans","fontSize":"var:preset|font-size|base","fontWeight":"500"},"spacing":{"padding":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|4","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-lig-white-color has-lig-signal-background-color has-text-color has-background" href="/contact" style="border-radius:0;padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--6);font-family:var(--wp--preset--font-family--dm-sans);font-size:var(--wp--preset--font-size--base);font-weight:500">Start a Project</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"className":"ligature-footer__baseline","style":{"spacing":{"margin":{"top":"var:preset|spacing|12"},"padding":{"top":"var:preset|spacing|6"}},"border":{"top":{"color":"rgba(247,246,243,0.15)","style":"solid","width":"1px"}}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
	<div class="wp-block-group ligature-footer__baseline" style="border-top:1px solid rgba(247,246,243,0.15);margin-top:var(--wp--preset--spacing--12);padding-top:var(--wp--preset--spacing--6)">
		<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|dm-sans","fontSize":"var:preset|font-size|xs"}},"className":"ligature-footer-fine"} -->
		<p class="ligature-footer-fine" style="font-family:var(--wp--preset--font-family--dm-sans);font-size:var(--wp--preset--font-size--xs)">&copy; 2026 Ligature Studio</p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|dm-sans","fontSize":"var:preset|font-size|xs"}},"className":"ligature-footer-fine"} -->
		<p class="ligature-footer-fine" style="font-family:var(--wp--preset--font-family--dm-sans);font-size:var(--wp--preset--font-size--xs)">Newsreader &amp; DM Sans</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
