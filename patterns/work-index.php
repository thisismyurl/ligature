<?php
/**
 * Title: Work Index
 * Slug: ligature/work-index
 * Categories: ligature-work
 * Viewport Width: 1280
 * Inserter: true
 * Description: Two-column portfolio case study grid using wp:query. Newsreader post titles; DM Sans category and date. Featured image 3:2 crop.
 */
?>
<!-- wp:group {"className":"ligature-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|12","bottom":"var:preset|spacing|12","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group ligature-section" style="padding-top:var(--wp--preset--spacing--12);padding-bottom:var(--wp--preset--spacing--12);padding-left:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5)">

	<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|8"},"blockGap":"var:preset|spacing|2"},"border":{"bottom":{"color":"var:preset|color|lig-rule","style":"solid","width":"1px"}}},"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"baseline"}} -->
	<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--8);border-bottom:1px solid var(--wp--preset--color--lig-rule)">
		<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|newsreader","fontWeight":"400","fontSize":"var:preset|font-size|xl","letterSpacing":"-0.02em"},"color":{"text":"var:preset|color|lig-ink"}}} -->
		<h2 style="font-family:var(--wp--preset--font-family--newsreader);font-weight:400;font-size:var(--wp--preset--font-size--xl);letter-spacing:-0.02em;color:var(--wp--preset--color--lig-ink)">Selected Work</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|dm-sans","fontSize":"var:preset|font-size|sm","fontWeight":"500"},"color":{"text":"var:preset|color|lig-signal"}}} -->
		<p style="font-family:var(--wp--preset--font-family--dm-sans);font-size:var(--wp--preset--font-size--sm);font-weight:500;color:var(--wp--preset--color--lig-signal)"><a href="/work" style="color:inherit;text-decoration:none">All projects →</a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:query {"queryId":2,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":2}} -->
	<div class="wp-block-query" style="margin-top:var(--wp--preset--spacing--8)">
		<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}}} -->

			<!-- Featured image -->
			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|5"}}}} /-->

			<!-- Category overline -->
			<!-- wp:post-terms {"term":"category","className":"is-style-lig-overline","style":{"color":{"text":"var:preset|color|lig-muted"}}} /-->

			<!-- Title -->
			<!-- wp:post-title {"isLink":true,"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|newsreader","fontWeight":"400","lineHeight":"1.1","letterSpacing":"-0.02em","fontSize":"var:preset|font-size|2xl","textWrap":"balance"},"color":{"text":"var:preset|color|lig-ink"},"spacing":{"margin":{"top":"var:preset|spacing|3"}}}} /-->

			<!-- Excerpt -->
			<!-- wp:post-excerpt {"moreText":"View case study","showMoreOnNewLine":false,"style":{"typography":{"fontFamily":"var:preset|font-family|dm-sans","fontSize":"var:preset|font-size|sm","lineHeight":"1.7"},"color":{"text":"var:preset|color|lig-secondary"},"spacing":{"margin":{"top":"var:preset|spacing|3"}}}} /-->

		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|dm-sans"},"color":{"text":"var:preset|color|lig-muted"}}} -->
			<p style="font-family:var(--wp--preset--font-family--dm-sans);color:var(--wp--preset--color--lig-muted)">No case studies published yet.</p>
			<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->
