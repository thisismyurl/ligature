<?php
/**
 * Ligature — required PHP entry point for WordPress.
 *
 * Block themes serve templates from the templates/ directory. WordPress still
 * requires index.php to exist in the theme root; without it the theme cannot be
 * activated. The file intentionally does nothing — the block system handles
 * every request through the template hierarchy defined in templates/.
 *
 * Pillar 6 (Resilience): even the fallback has a fallback — index.php ensures
 * WordPress can always render something rather than showing a fatal error.
 *
 * @package ligature
 */
