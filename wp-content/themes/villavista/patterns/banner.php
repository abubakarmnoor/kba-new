<?php
/**
 * Title: Banner
 * Slug: villavista/banner
 * Categories: villavista
 * Keywords: banner
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/banner-bg.jpg","id":141,"dimRatio":90,"isUserOverlayColor":true,"customGradient":"linear-gradient(135deg,rgb(0,0,0) 0%,rgb(1,27,7) 100%)","metadata":{"name":"Banner"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"className":"wow animate__animated animate__fadeInUp"} -->
<div class="wp-block-cover wow animate__animated animate__fadeInUp" style="margin-top:0;margin-bottom:0"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-90 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(135deg,rgb(0,0,0) 0%,rgb(1,27,7) 100%)"></span><img class="wp-block-cover__image-background wp-image-141" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/banner-bg.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"className":"animate__animated animate__fadeInUp","layout":{"type":"constrained","contentSize":"","wideSize":""}} -->
<main class="wp-block-group animate__animated animate__fadeInUp" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontSize":"56px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2","fontFamily":"body"} -->
<h2 class="wp-block-heading has-text-align-left has-base-2-color has-text-color has-link-color has-body-font-family" style="font-size:56px;font-style:normal;font-weight:600"><?php echo esc_html__( 'Unforgettable Moments Await: Stay in Our Exquisite', 'villavista' ); ?> <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color"><?php echo esc_html__( 'Villa', 'villavista' ); ?></mark></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"fontSize":"18px"},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"textColor":"base-2"} -->
<p class="has-text-align-left has-base-2-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);font-size:18px"><?php echo esc_html__( 'Fusce egestas elit eget lorem. Praesent nec nisl a purus blandit viverra. Praesent egestas neque eu enim. In ac felis quis tortor malesuada pretium. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc.', 'villavista' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"has-arrow","layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-buttons has-arrow" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:button {"backgroundColor":"primary","textColor":"contrast","style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-primary-background-color has-text-color has-background has-link-color wp-element-button" style="padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--40)"><?php echo esc_html__( 'Book Now', 'villavista' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"primary","style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"borderColor":"primary","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-primary-color has-text-color has-link-color has-border-color has-primary-border-color wp-element-button" style="padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--40)"><?php echo esc_html__( 'View Our Villa', 'villavista' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","className":"wow animate__animated animate__zoomIn "} -->
<div class="wp-block-column is-vertically-aligned-center wow animate__animated animate__zoomIn"><!-- wp:image {"lightbox":{"enabled":true},"id":36,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"15px"},"shadow":"var:preset|shadow|natural"}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/banner.jpg" alt="" class="wp-image-36" style="border-radius:15px;box-shadow:var(--wp--preset--shadow--natural)"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->