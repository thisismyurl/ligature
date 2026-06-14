<?php
/**
 * Title: Studio Statement
 * Slug: ligature/studio-statement
 * Categories: ligature-studio
 * Viewport Width: 1280
 * Inserter: true
 * Description: Dark overlay studio identity section — studio name at display scale, discipline list, and selected client sectors. The first credential: confident, not apologetic.
 */
?>
<!-- wp:group {"className":"ligature-section ligature-band--overlay","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group ligature-section ligature-band--overlay" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5)">

	<!-- wp:columns {"isStackedOnMobile":true,"style":{"spacing":{"blockGap":"var:preset|spacing|16"}}} -->
	<div class="wp-block-columns">

		<!-- Left: name + statement -->
		<!-- wp:column {"width":"55%"} -->
		<div class="wp-block-column" style="flex-basis:55%">

			<!-- wp:paragraph {"className":"is-style-lig-overline","style":{"color":{"text":"rgba(255,255,255,0.5)"},"spacing":{"margin":{"bottom":"var:preset|spacing|5"}}}} -->
			<p class="is-style-lig-overline" style="color:rgba(255,255,255,0.5);margin-bottom:var(--wp--preset--spacing--5)">Brand Identity Studio</p>
			<!-- /wp:paragraph -->

			<!-- This heading is the front page's single h1 (level:1); front-page.html
			     documents that the page title is sourced here. The demo name is a
			     placeholder the editor replaces with the studio's own. The heading
			     colour comes from the edition-stable .ligature-band--overlay rule,
			     not a colour token (lig-white inverts to a dark value in some
			     editions and would vanish on this dark band). -->
			<!-- wp:heading {"level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|newsreader","fontWeight":"400","fontSize":"var:preset|font-size|display","lineHeight":"1.0","letterSpacing":"-0.025em"}}} -->
			<h1 style="font-family:var(--wp--preset--font-family--newsreader);font-weight:400;font-size:var(--wp--preset--font-size--display);line-height:1.0;letter-spacing:-0.025em">Ligature &amp; Co</h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|8"}},"typography":{"fontFamily":"var:preset|font-family|dm-sans","fontWeight":"400","fontSize":"var:preset|font-size|lg","lineHeight":"1.6"},"color":{"text":"rgba(247,246,243,0.8)"}}} -->
			<p style="margin-top:var(--wp--preset--spacing--8);font-family:var(--wp--preset--font-family--dm-sans);font-size:var(--wp--preset--font-size--lg);font-weight:400;line-height:1.6;color:rgba(247,246,243,0.8)">We build visual identities for organisations at inflection points — the ones where the existing brand no longer fits what the work has become. Strategy first, always. Systems that survive the second year.</p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->

		<!-- Right: disciplines + selected clients -->
		<!-- wp:column {"width":"45%"} -->
		<div class="wp-block-column" style="flex-basis:45%">

			<!-- Disciplines -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3","padding":{"bottom":"var:preset|spacing|8"}},"border":{"bottom":{"color":"rgba(255,255,255,0.15)","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--8);border-bottom:1px solid rgba(255,255,255,0.15)">
				<!-- wp:paragraph {"className":"is-style-lig-overline","style":{"color":{"text":"rgba(255,255,255,0.4)"},"spacing":{"margin":{"bottom":"var:preset|spacing|4"}}}} -->
				<p class="is-style-lig-overline" style="color:rgba(255,255,255,0.4);margin-bottom:var(--wp--preset--spacing--4)">Disciplines</p>
				<!-- /wp:paragraph -->
				<!-- On the dark overlay band the credential list takes its colour from
				     the edition-stable .ligature-band--overlay rule, not lig-white. -->
				<!-- wp:list {"className":"is-style-lig-credential-list"} -->
				<ul class="is-style-lig-credential-list">
					<li>Brand Strategy &amp; Naming</li>
					<li>Visual Identity Systems</li>
					<li>Brand Architecture</li>
					<li>Motion &amp; Digital Brand</li>
				</ul>
				<!-- /wp:list -->
			</div>
			<!-- /wp:group -->

			<!-- Selected clients -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3","padding":{"top":"var:preset|spacing|8"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--8)">
				<!-- wp:paragraph {"className":"is-style-lig-overline","style":{"color":{"text":"rgba(255,255,255,0.4)"},"spacing":{"margin":{"bottom":"var:preset|spacing|4"}}}} -->
				<p class="is-style-lig-overline" style="color:rgba(255,255,255,0.4);margin-bottom:var(--wp--preset--spacing--4)">Selected Clients</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|dm-sans","fontSize":"var:preset|font-size|base","lineHeight":"1.8"},"color":{"text":"rgba(247,246,243,0.72)"}}} -->
				<p style="font-family:var(--wp--preset--font-family--dm-sans);font-size:var(--wp--preset--font-size--base);line-height:1.8;color:rgba(247,246,243,0.72)">Meridian Capital · Folio Press · North Collective · Common Ground · Beacon Media · Aperture Health · Render Labs</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
