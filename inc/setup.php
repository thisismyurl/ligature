<?php
/**
 * [CORE] Theme setup — feature supports, i18n, navigation, a11y scaffolding.
 *
 * Every value in this file is the same for every theme in the Colophon line —
 * it is the shared floor. Anything design-specific (image crop sizes, which
 * fonts to preload, block styles) lives in inc/skin.php instead, so this file
 * can be overwritten by `colophon sync` without ever clobbering a theme's
 * personality. The separation is intentional and load-bearing.
 *
 * Pillar 5 (Safe by Default): the WooCommerce guard and emoji removal are
 * here by default. The skip link lives in parts/header.html — one skip link
 * per theme, in the DOM, targeting #main-content.
 * Pillar 9 (Archaeological Records): [CORE] tag marks what the CLI owns.
 *
 * @package ligature
 */

namespace Ligature;

defined( 'ABSPATH' ) || exit;

/**
 * Register theme feature supports, the text domain, and navigation menus.
 */
function setup(): void {

	// i18n. The domain is the literal 'ligature' (a constant would break make-pot —
	// see bootstrap.php); the path uses DIR so it travels with a re-skin. The
	// CLI rewrites the literal when it generates a theme.
	load_theme_textdomain( 'ligature', DIR . '/languages' );

	// Content width for oEmbeds. Reads from theme.json contentSize if set;
	// otherwise defaults to 720px. This ensures oEmbeds respect the theme's reading column width.
	$layout = wp_get_global_settings( array( 'layout' ) );
	$content_width = 720; // Default fallback for all non-pixel or malformed values.

	if ( isset( $layout['contentSize'] ) && is_string( $layout['contentSize'] ) ) {
		// Trim whitespace and validate pixel-based format only ("XXXpx").
		// Rejects viewport-relative (vw), calc(), clamp(), or other CSS functions.
		$size = trim( $layout['contentSize'] );
		if ( preg_match( '/^(\d+)px$/i', $size, $matches ) ) {
			$content_width = (int) $matches[1];
		}
	}

	$GLOBALS['content_width'] = $content_width;

	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'align-wide' );
	add_theme_support(
		'html5',
		array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
			'navigation-widgets',
		)
	);

	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Navigation', 'ligature' ),
			'footer'  => esc_html__( 'Footer Navigation', 'ligature' ),
		)
	);

	/**
	 * Fires after the theme has registered its supports and menus.
	 *
	 * Extension point for companion plugins and inc/skin.php to add supports,
	 * image sizes, or menus without editing this CORE file.
	 *
	 * @since 1.0.0
	 */
	do_action( 'ligature/setup' );
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\\setup' );

/**
 * Declare WooCommerce support.
 *
 * Ligature is not a shop design, but "not a shop design" must never mean "broken
 * shop." On a block theme, WooCommerce ships its own block-based fallback
 * templates and resolves them automatically; declaring support clears the
 * persistent admin notice and enables the product-gallery features.
 *
 * Guarded on the WooCommerce class so the declaration only fires when the
 * plugin is active — no dead code on the common case.
 *
 * Pillar 6 (Resilience): we handle the 'when', not the 'if'.
 */
function woocommerce_support(): void {
	if ( ! class_exists( 'WooCommerce' ) ) {
		return;
	}
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\\woocommerce_support' );

/**
 * Register the editor stylesheet so the block editor mirrors the front end.
 *
 * The theme.json file supplies the editor's tokens and global styles; the editor sheet
 * carries only the ::before/::after and custom-block personality that
 * theme.json cannot express.
 */
function editor_styles(): void {
	add_editor_style( array( 'assets/css/editor-style.css' ) );
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\\editor_styles' );

/**
 * Drop the emoji-detection script and its styles.
 *
 * Modern browsers render emoji natively. Core's polyfill is a render-blocking
 * inline script plus a stylesheet — dead weight on the critical path.
 * Removing it is a Core Web Vitals baseline improvement at zero cost.
 *
 * Pillar 2 (Innovation over Compliance): we don't ship dead weight because
 * it ships by default.
 */
function disable_emoji_assets(): void {
	// Front-end only — leave the admin emoji picker intact.
	// Themes must not alter admin-area behaviour users haven't opted into.
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
}
add_action( 'init', __NAMESPACE__ . '\\disable_emoji_assets' );

/**
 * Add autocomplete and enterkeyhint hints to the comment-form fields.
 *
 * Lets mobile keyboards offer the right input mode and autofill, and gives the
 * on-screen Enter key a sensible label — a small a11y + mobile-UX win at zero cost.
 *
 * Pillar 5 (Safe by Default): accessibility and mobile UX improvements are
 * on by default, not opt-in.
 *
 * @param array $fields The default comment-form field markup, keyed by field.
 * @return array The fields with input attributes added.
 */
function comment_form_field_attributes( array $fields ): array {
	$attributes = array(
		'author' => 'autocomplete="name" enterkeyhint="next"',
		'email'  => 'autocomplete="email" inputmode="email" enterkeyhint="next"',
		'url'    => 'autocomplete="url" inputmode="url" enterkeyhint="done"',
	);

	foreach ( $attributes as $field => $attrs ) {
		if ( ! isset( $fields[ $field ] ) ) {
			continue;
		}

		$pattern     = '/<input\s+([^>]*)/';
		$replacement = '<input ' . $attrs . ' $1';
		$count       = 0;
		$updated     = preg_replace( $pattern, $replacement, $fields[ $field ], 1, $count );

		// Regex error: preg_replace returns null on failure (e.g., invalid regex).
		// Skip this field to preserve the original HTML; no attributes added.
		if ( null === $updated ) {
			continue;
		}

		// Pattern matched: $count will be 1 (limit of 1 replacement).
		// Update the field with the modified HTML.
		if ( $count > 0 ) {
			$fields[ $field ] = $updated;
		}
		// Non-match ($count === 0): the field HTML doesn't contain the expected <input tag.
		// This is safe: field stays unchanged, no attributes added.
		// Silent fallback preserves the field's original markup.
	}

	return $fields;
}
add_filter( 'comment_form_default_fields', __NAMESPACE__ . '\\comment_form_field_attributes' );

/**
 * Print the skip-to-content link at the very top of the document body.
 *
 * Rendered in PHP (not in parts/header.html) for one reason: the label must be
 * translatable, and a static wp:html block in a template part ships
 * untranslatable English. wp_body_open fires once, immediately after <body>, so
 * the link lands in the correct DOM position and there is exactly one of it —
 * the same single-instance guarantee the template-part approach gave, now with
 * a gettext-wrapped label. The target #main-content matches the <main> landmark
 * every template renders.
 *
 * Pillar 5 (Safe by Default): the keyboard skip link is on by default.
 */
function render_skip_link(): void {
	printf(
		'<a class="skip-link screen-reader-text" href="#main-content">%s</a>',
		esc_html__( 'Skip to content', 'ligature' )
	);
}
add_action( 'wp_body_open', __NAMESPACE__ . '\\render_skip_link' );
