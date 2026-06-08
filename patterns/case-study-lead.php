<?php
/**
 * Title: Case Study Lead
 * Slug: ligature/case-study-lead
 * Categories: ligature-work
 * Viewport Width: 1280
 * Inserter: true
 * Description: Case study hero — full-width featured image, project overline, Newsreader display title, pull quote from client, and case meta grid (sector, scope, year, role). Designed for the single post template.
 */
?>
<!-- wp:group {"className":"ligature-section","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|12"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group ligature-section" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--12)">

	<!-- Featured image — full wide -->
	<!-- wp:post-featured-image {"isLink":false,"align":"full","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} /-->

	<!-- Content wrapper -->
	<!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|5","right":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|8"}},"layout":{"type":"constrained","contentSize":"900px"}} -->
	<div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5)">

		<!-- Overline: sector + year -->
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"baseline"}} -->
		<div class="wp-block-group">
			<!-- wp:post-terms {"term":"category","className":"is-style-lig-overline"} /-->
			<!-- wp:separator {"className":"is-style-dots","style":{"color":{"text":"var:preset|color|lig-muted"}}} /-->
			<!-- wp:post-date {"format":"Y","className":"is-style-lig-overline","style":{"color":{"text":"var:preset|color|lig-muted"}}} /-->
		</div>
		<!-- /wp:group -->

		<!-- Post title -->
		<!-- wp:post-title {"level":1,"isLink":false,"style":{"typography":{"fontFamily":"var:preset|font-family|newsreader","fontWeight":"400","lineHeight":"1.05","letterSpacing":"-0.025em","textWrap":"balance"},"color":{"text":"var:preset|color|lig-ink"}}} /-->

		<!-- Pull quote from client -->
		<!-- wp:quote {"className":"is-style-lig-pull-quote","style":{"spacing":{"margin":{"top":"var:preset|spacing|8","bottom":"var:preset|spacing|8"}}}} -->
		<blockquote class="wp-block-quote is-style-lig-pull-quote" style="margin-top:var(--wp--preset--spacing--8);margin-bottom:var(--wp--preset--spacing--8)">
			<!-- wp:paragraph -->
			<p>They understood that we weren't just updating our logo — we were announcing who we'd become after the merger. The system they built has held up across three product lines and two new markets without modification.</p>
			<!-- /wp:paragraph -->
			<!-- wp:cite {"style":{"typography":{"fontFamily":"var:preset|font-family|dm-sans","fontSize":"var:preset|font-size|sm"},"color":{"text":"var:preset|color|lig-muted"}}} -->
			<cite style="font-family:var(--wp--preset--font-family--dm-sans);font-size:var(--wp--preset--font-size--sm);color:var(--wp--preset--color--lig-muted)">CEO, Meridian Capital</cite>
			<!-- /wp:cite -->
		</blockquote>
		<!-- /wp:quote -->

		<!-- Case meta grid -->
		<!-- wp:group {"className":"is-style-lig-case-meta","style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|4"},"border":{"top":{"color":"var:preset|color|lig-rule","style":"solid","width":"1px"},"bottom":{"color":"var:preset|color|lig-rule","style":"solid","width":"1px"}}}} -->
		<div class="wp-block-group is-style-lig-case-meta" style="padding-top:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);border-top:1px solid var(--wp--preset--color--lig-rule);border-bottom:1px solid var(--wp--preset--color--lig-rule)">

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"is-style-lig-overline"} --><p class="is-style-lig-overline">Sector</p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|dm-sans","fontWeight":"500","fontSize":"var:preset|font-size|base"},"color":{"text":"var:preset|color|lig-ink"}}} --><p style="font-family:var(--wp--preset--font-family--dm-sans);font-weight:500;font-size:var(--wp--preset--font-size--base);color:var(--wp--preset--color--lig-ink)">Financial Services</p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"is-style-lig-overline"} --><p class="is-style-lig-overline">Scope</p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|dm-sans","fontWeight":"500","fontSize":"var:preset|font-size|base"},"color":{"text":"var:preset|color|lig-ink"}}} --><p style="font-family:var(--wp--preset--font-family--dm-sans);font-weight:500;font-size:var(--wp--preset--font-size--base);color:var(--wp--preset--color--lig-ink)">Strategy · Identity · Guidelines</p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"is-style-lig-overline"} --><p class="is-style-lig-overline">Year</p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|dm-sans","fontWeight":"500","fontSize":"var:preset|font-size|base"},"color":{"text":"var:preset|color|lig-ink"}}} --><p style="font-family:var(--wp--preset--font-family--dm-sans);font-weight:500;font-size:var(--wp--preset--font-size--base);color:var(--wp--preset--color--lig-ink)">2025</p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"is-style-lig-overline"} --><p class="is-style-lig-overline">Role</p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|dm-sans","fontWeight":"500","fontSize":"var:preset|font-size|base"},"color":{"text":"var:preset|color|lig-ink"}}} --><p style="font-family:var(--wp--preset--font-family--dm-sans);font-weight:500;font-size:var(--wp--preset--font-size--base);color:var(--wp--preset--color--lig-ink)">Lead Studio</p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
