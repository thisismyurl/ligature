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
<!-- wp:group {"className":"ligature-section ligature-footer","backgroundColor":"lig-ink","textColor":"lig-paper","style":{"spacing":{"padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|12","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group ligature-section ligature-footer has-lig-paper-color has-lig-ink-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--16);padding-bottom:var(--wp--preset--spacing--12);padding-left:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5)">

	<!-- wp:columns {"className":"ligature-footer__columns","isStackedOnMobile":true,"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|10"}}}} -->
	<div class="wp-block-columns ligature-footer__columns">

		<!-- Left: studio name + descriptor -->
		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%">
			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|newsreader","fontStyle":"italic","fontWeight":"400","fontSize":"var:preset|font-size|2xl","letterSpacing":"-0.02em"},"color":{"text":"var:preset|color|lig-paper"}}} -->
			<h2 style="font-family:var(--wp--preset--font-family--newsreader);font-style:italic;font-weight:400;font-size:var(--wp--preset--font-size--2xl);letter-spacing:-0.02em;color:var(--wp--preset--color--lig-paper)">Ligature</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|4"}},"typography":{"fontFamily":"var:preset|font-family|dm-sans","fontSize":"var:preset|font-size|base","lineHeight":"1.6"},"color":{"text":"rgba(247,246,243,0.7)"}}} -->
			<p style="margin-top:var(--wp--preset--spacing--4);font-family:var(--wp--preset--font-family--dm-sans);font-size:var(--wp--preset--font-size--base);line-height:1.6;color:rgba(247,246,243,0.7)">A typography and brand identity studio for names that need to last.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- Centre: navigation links -->
		<!-- wp:column {"width":"30%"} -->
		<div class="wp-block-column" style="flex-basis:30%">
			<!-- wp:paragraph {"className":"is-style-lig-overline","style":{"color":{"text":"rgba(247,246,243,0.45)"},"spacing":{"margin":{"bottom":"var:preset|spacing|5"}}}} -->
			<p class="is-style-lig-overline" style="color:rgba(247,246,243,0.45);margin-bottom:var(--wp--preset--spacing--5)">Studio</p>
			<!-- /wp:paragraph -->
			<!-- wp:list {"className":"is-style-lig-footer-nav","style":{"typography":{"fontFamily":"var:preset|font-family|dm-sans","fontSize":"var:preset|font-size|base","lineHeight":"2.0"},"color":{"text":"var:preset|color|lig-paper"}}} -->
			<ul class="is-style-lig-footer-nav has-lig-paper-color has-text-color" style="font-family:var(--wp--preset--font-family--dm-sans);font-size:var(--wp--preset--font-size--base);line-height:2.0">
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
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|newsreader","fontWeight":"400","fontSize":"var:preset|font-size|lg","lineHeight":"1.3"},"color":{"text":"var:preset|color|lig-paper"},"spacing":{"margin":{"bottom":"var:preset|spacing|5"}}}} -->
			<p style="margin-bottom:var(--wp--preset--spacing--5);font-family:var(--wp--preset--font-family--newsreader);font-weight:400;font-size:var(--wp--preset--font-size--lg);line-height:1.3;color:var(--wp--preset--color--lig-paper)">Have a name worth getting right?</p>
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
		<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|dm-sans","fontSize":"var:preset|font-size|xs"},"color":{"text":"rgba(247,246,243,0.5)"}}} -->
		<p style="font-family:var(--wp--preset--font-family--dm-sans);font-size:var(--wp--preset--font-size--xs);color:rgba(247,246,243,0.5)">&copy; 2026 Ligature Studio</p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|dm-sans","fontSize":"var:preset|font-size|xs"},"color":{"text":"rgba(247,246,243,0.5)"}}} -->
		<p style="font-family:var(--wp--preset--font-family--dm-sans);font-size:var(--wp--preset--font-size--xs);color:rgba(247,246,243,0.5)">Newsreader &amp; DM Sans</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
