=== Ligature ===

Contributors: thisismyurl
Tags: portfolio, full-site-editing, block-patterns, two-columns, custom-colors, custom-logo, custom-menu, editor-style, featured-images, accessibility-ready, wide-blocks, translation-ready
Tested up to: 7.0
Requires at least: 6.5
Requires PHP: 8.1
Stable tag: 1.6163.2237
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A WordPress theme for brand identity studios. Newsreader for the case study feed; DM Sans for the confident interface layer.

== Description ==

Ligature is a full-site-editing theme for brand identity studios — the independent consultancies, naming agencies, and visual identity practices that build what clients stand on. Named for the typographic character that joins two letterforms into one: the connection is the point.

Newsreader brings editorial seriousness to the case study index and detail page. DM Sans keeps the interface layer clean and system-confident. The studio statement pattern is the first credential; the client roster is the second. Case studies close the argument.

The client roster pattern uses the WordPress Interactivity API for client-category filtering — visitors browse by sector without a page reload. The work is filterable; the trust is categorical.

WCAG 2.2 AA accessible, Core Web Vitals optimised, self-hosted SIL OFL fonts, RTL-ready via CSS logical properties, zero plugin dependencies.

**Signature patterns:** case-study-lead, work-index, studio-statement, client-roster (with Interactivity API filter), process-section, enquiry-cta, selected-work.

== Installation ==

1. In your WordPress admin, go to Appearance → Themes → Add New.
2. Search for "Ligature" or upload the theme zip.
3. Activate the theme.
4. Go to Appearance → Ligature: Get started for setup steps.

== Frequently Asked Questions ==

= Is this theme free? =

Yes. Licensed GPLv2 or later, with no upsells or required paid extensions.

= Does the client roster filter require JavaScript? =

The client roster uses the WordPress Interactivity API (stable since WP 6.5) for client-category filtering. The full roster is visible without JavaScript — the filter is progressive enhancement.

= How do I add case studies? =

Publish posts and assign them to categories by client sector (Fintech, Retail, Healthcare, etc.). The work-index pattern pulls from the post loop automatically. The case-study-lead pattern is designed for the single post template.

= Does the theme require WooCommerce? =

No. WooCommerce is not required and not assumed.

= Are the fonts included? =

Newsreader and DM Sans are bundled as WOFF2 files in assets/fonts/ and loaded via theme.json @font-face declarations. They never phone home to Google or any external service.

== Changelog ==

= 1.6163.2237 =
* Accessibility (WCAG 2.1 1.3.1): the archive and search titles are now explicit
  h1 headings; the index template gains an h1 page heading; the blank-canvas page
  template gains an empty, editor-fillable h1. (Front page and 404 already had one.)
* Hardened comment-form attribute injection: a guarded preg_replace (single
  replacement, null-check, no-match fallback) replaces a naive str_replace that
  could double-inject or mangle markup.
* oEmbed content width now reads theme.json contentSize (pixel-validated, 720px
  fallback) instead of a hardcoded literal.
* The Get started developer-guide URL is filterable via ligature/developer_guide_url.

= 1.158.1749 =
* Initial release.
* Patterns: case-study-lead, work-index, studio-statement, client-roster, process-section, enquiry-cta, selected-work.
* Templates: front-page, index, single, archive, page, page-wide, page-blank, search, 404.
* Block styles: lig-overline, lig-pull-quote, lig-process-stage, lig-credential-list, lig-case-meta.

== Credits ==

= Newsreader =
* Copyright 2020 Production Type (https://github.com/productiontype/Newsreader)
* License: SIL OFL 1.1 (https://openfontlicense.org/open-font-license-official-text/)
* Source: https://github.com/productiontype/Newsreader

= DM Sans =
* Copyright 2014 Colophon Foundry (https://github.com/googlefonts/dm-fonts)
* License: SIL OFL 1.1 (https://openfontlicense.org/open-font-license-official-text/)
* Source: https://github.com/googlefonts/dm-fonts

== License ==

Ligature WordPress Theme is licensed under the GNU General Public License v2 or later.

This program is free software: you can redistribute it and/or modify it under the
terms of the GNU General Public License as published by the Free Software Foundation,
either version 2 of the License, or (at your option) any later version.

== Copyright ==

Ligature WordPress Theme, Copyright 2026 Christopher Ross
Ligature is distributed under the terms of the GNU GPL.
