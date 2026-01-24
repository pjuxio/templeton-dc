<?php
/**
 * Title: Feature Card
 * Slug: templeton-blocks/feature-card
 * Categories: featured
 * Description: A centered feature card with image, label, heading, and description
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.jpg" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","fontSize":"small","style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.05em"},"spacing":{"margin":{"top":"1.5rem","bottom":"1rem"}}},"textColor":"white","fontFamily":"nexa-text"} -->
<p class="has-text-align-center has-white-color has-text-color has-nexa-text-font-family has-small-font-size" style="margin-top:1.5rem;margin-bottom:1rem;font-weight:600;letter-spacing:0.05em;text-transform:uppercase">Label</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":3,"textColor":"white","fontSize":"xx-large","fontFamily":"nexa"} -->
<h3 class="wp-block-heading has-text-align-center has-white-color has-text-color has-nexa-font-family has-xx-large-font-size">Feature Title</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"medium","style":{"typography":{"lineHeight":"1.6"}},"textColor":"white","fontFamily":"nexa-text"} -->
<p class="has-text-align-center has-white-color has-text-color has-nexa-text-font-family has-medium-font-size" style="line-height:1.6">Feature description goes here.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
