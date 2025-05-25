<?php
/**
 * Title: Content Section
 * Slug: corporate-theme-v3/section
 * Categories: corporate-theme-v3
 * Description: A generic content section with title and content
 */

return array(
    'title'      => __( 'Content Section', 'corporate-theme-v3' ),
    'categories' => array( 'corporate-theme-v3' ),
    'content'    => '<!-- wp:group {"className":"section","style":{"spacing":{"padding":{"top":"36px","bottom":"36px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group section" style="padding-top:36px;padding-bottom:36px"><!-- wp:heading {"textAlign":"center","className":"section-title","style":{"typography":{"fontSize":"1.2rem","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"bottom":"12px"}}}} -->
<h2 class="wp-block-heading has-text-align-center section-title" style="margin-bottom:12px;font-size:1.2rem;font-style:normal;font-weight:600">Section Title</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"section-content","style":{"spacing":{"margin":{"right":"auto","left":"auto"}},"layout":{"selfStretch":"fixed","flexSize":"90vw"}}} -->
<p class="has-text-align-center section-content" style="margin-right:auto;margin-left:auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->',
);