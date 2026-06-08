<?php
/**
 * [SKIN] The skin layer — the one PHP file `colophon sync` never overwrites.
 *
 * Ligature's PHP-side personality: image crops for studio and case-study
 * layout, the LCP font preload (Newsreader 400 paints every h1 in the case-
 * study lead), the block styles the portfolio patterns depend on, and the
 * pattern category registrations.
 *
 * The [CORE] inc/ files stay portable because none of Ligature's specifics
 * leak into them. That separation is the whole point of the CORE/SKIN split.
 *
 * Pillar 8 (Kodawari): the LCP preload is the Newsreader 400 regular — the
 * specific discrete file that paints the first heading, not the full family.
 *
 * @package ligature
 */

namespace Ligature;

defined( 'ABSPATH' ) || exit;

// Opt this theme into GitHub-release self-updates (see inc/github-updater.php).
add_filter( 'ligature/github_updater_repo', static function (): string {{
	return 'thisismyurl/ligature';
}} );

/**
 * Register Ligature's image crop sizes.
 *
 * case-hero: 16:9 — the full-width case study opener.
 * case-card: 3:2 — work-index card thumbnail.
 * portrait:  1:1 — maker portrait or client logo in the roster.
 */
function skin_image_sizes(): void {
	add_image_size( 'ligature-case-hero', 1200, 675, true );   // 16:9 case study opener.
	add_image_size( 'ligature-case-card', 760, 507, true );    // 3:2 work-index card.
	add_image_size( 'ligature-portrait', 600, 600, true );     // 1:1 maker portrait.
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\\skin_image_sizes' );

/**
 * Preload Newsreader 400 — the LCP-critical font on every Ligature page.
 *
 * Newsreader variable covers the full weight range in one file — both 400
 * (body) and 700 (display) are available without a second fetch.
 *
 * Pillar 8 (Kodawari): preloading the right file, not the whole face.
 */
add_filter(
	'ligature/preload_fonts',
	static function ( array $fonts ): array {
		$fonts[] = 'assets/fonts/newsreader/newsreader-variable.woff2';
		return $fonts;
	}
);

/**
 * Register Ligature's block styles.
 *
 * Block styles are the is-style-{name} vocabulary patterns and editors apply.
 * CSS treatments live in skin.css @layer components. The labels here are the
 * editor-facing handles — plain English, self-evident in preview.
 *
 * Pillar 7 (High Agency): editors can apply these without developer help.
 */
function skin_block_styles(): void {

	// [SKIN] Paragraph as an overline — DM Sans 500, tracked, all-caps, lig-muted.
	// Used above section headings in studio-statement and case-study-lead.
	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'lig-overline',
			'label' => __( 'Overline', 'ligature' ),
		)
	);

	// [SKIN] Quote block as a pull-quote — Newsreader italic, larger, no border.
	// Used in case-study-lead to surface the client's key result.
	register_block_style(
		'core/quote',
		array(
			'name'  => 'lig-pull-quote',
			'label' => __( 'Pull quote', 'ligature' ),
		)
	);

	// [SKIN] Group as a numbered process stage — counter-increment auto-number,
	// indigo left rule, generous padding. Used in the process-section pattern.
	register_block_style(
		'core/group',
		array(
			'name'  => 'lig-process-stage',
			'label' => __( 'Process stage', 'ligature' ),
		)
	);

	// [SKIN] List styled as a credential list — no bullet, DM Sans 500, bottom rule
	// between items. Used in studio-statement to list client sectors or awards.
	register_block_style(
		'core/list',
		array(
			'name'  => 'lig-credential-list',
			'label' => __( 'Credential list', 'ligature' ),
		)
	);

	// [SKIN] Group as a case-study meta block — two-column grid, DM Sans 2xs,
	// lig-muted label above lig-ink value. Used in case-study-lead for scope/role.
	register_block_style(
		'core/group',
		array(
			'name'  => 'lig-case-meta',
			'label' => __( 'Case study meta', 'ligature' ),
		)
	);
}
add_action( 'init', __NAMESPACE__ . '\\skin_block_styles' );

/**
 * Register Ligature's block pattern categories.
 *
 * Patterns auto-register from patterns/ (WordPress 6.0+). These categories
 * give them a clear home under "Ligature: …" in the pattern library.
 */
function skin_pattern_categories(): void {

	register_block_pattern_category(
		'ligature-studio',
		array(
			'label'       => __( 'Ligature: Studio', 'ligature' ),
			'description' => __( 'Studio identity, statements, and homepage patterns.', 'ligature' ),
		)
	);

	register_block_pattern_category(
		'ligature-work',
		array(
			'label'       => __( 'Ligature: Work', 'ligature' ),
			'description' => __( 'Case studies, portfolio index, and selected-work patterns.', 'ligature' ),
		)
	);

	register_block_pattern_category(
		'ligature-about',
		array(
			'label'       => __( 'Ligature: About', 'ligature' ),
			'description' => __( 'Process, client roster, and studio credential patterns.', 'ligature' ),
		)
	);

	register_block_pattern_category(
		'ligature-contact',
		array(
			'label'       => __( 'Ligature: Contact', 'ligature' ),
			'description' => __( 'Enquiry CTA and contact patterns.', 'ligature' ),
		)
	);
}
add_action( 'init', __NAMESPACE__ . '\\skin_pattern_categories' );
