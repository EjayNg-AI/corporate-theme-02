<?php
/**
 * Title: Hero Section
 * Slug: corporate-theme-v3/hero
 * Categories: corporate-theme-v3
 * Description: A hero section with background image, title, subtitle, and call-to-action button
 */

return array(
    'title'      => __( 'Hero Section', 'corporate-theme-v3' ),
    'categories' => array( 'corporate-theme-v3' ),
    'content'    => '<!-- wp:cover {"url":"https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1500&q=80","dimRatio":45,"overlayColor":"light-primary","minHeight":260,"minHeightUnit":"px","contentPosition":"center center","isDark":false,"className":"hero","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<div class="wp-block-cover is-light hero" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:260px"><span aria-hidden="true" class="wp-block-cover__background has-light-primary-background-color has-background-dim-50 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1500&q=80" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"hero-content","layout":{"type":"constrained"}} -->
<div class="wp-block-group hero-content"><!-- wp:heading {"textAlign":"center","level":1,"className":"hero-title","style":{"typography":{"fontSize":"1.5rem","fontStyle":"normal","fontWeight":"700","letterSpacing":"1px"},"spacing":{"margin":{"bottom":"12px"}}},"textColor":"white"} -->
<h1 class="wp-block-heading has-text-align-center hero-title has-white-color has-text-color" style="margin-bottom:12px;font-size:1.5rem;font-style:normal;font-weight:700;letter-spacing:1px">Empowering Your Business for the Future</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"hero-subtitle","textColor":"white"} -->
<p class="has-text-align-center hero-subtitle has-white-color has-text-color">Innovative solutions tailored for your success.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","textColor":"light-primary","className":"hero-cta","style":{"border":{"radius":"30px"},"spacing":{"padding":{"top":"12px","right":"28px","bottom":"12px","left":"28px"}},"typography":{"fontSize":"1rem","fontStyle":"normal","fontWeight":"600"}}} -->
<div class="wp-block-button hero-cta" style="font-size:1rem;font-style:normal;font-weight:600"><a class="wp-block-button__link has-light-primary-color has-white-background-color has-text-color has-background wp-element-button" href="#contact" style="border-radius:30px;padding-top:12px;padding-right:28px;padding-bottom:12px;padding-left:28px">Get Started</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->',
);