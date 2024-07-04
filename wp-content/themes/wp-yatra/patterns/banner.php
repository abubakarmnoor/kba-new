<?php
/**
 * Title: Banner
 * Slug: wp-yatra/banner
 * Categories: wp-yatra
 *
 * @package WP Yatra
 * @since 1.0.0
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/about.jpg","id":680,"dimRatio":50,"minHeight":700,"contentPosition":"center center","isDark":false,"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"right":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light" style="padding-right:0;padding-left:0;min-height:700px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-680" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/about.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"right":"var:preset|spacing|80","left":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-right:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":1.4}},"textColor":"bright","fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-text-align-center has-bright-color has-text-color has-xx-large-font-size" style="font-style:normal;font-weight:700;line-height:1.4"><?php echo __( 'Tour Travel ', 'wp-yatra' ); ?>&amp; <?php echo __( 'Adventure Campaign', 'wp-yatra' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"bright"} -->
<p class="has-text-align-center has-bright-color has-text-color"><?php echo esc_html( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'wp-yatra' );?> </p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"primary","textColor":"bright","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"radius":"5px"},"typography":{"fontStyle":"normal","fontWeight":"100","letterSpacing":"0.7px"}},"className":"is-style-fill","fontSize":"extra-small"} -->
<div class="wp-block-button has-custom-font-size is-style-fill has-extra-small-font-size" style="font-style:normal;font-weight:100;letter-spacing:0.7px"><a class="wp-block-button__link has-bright-color has-primary-background-color has-text-color has-background has-text-align-center wp-element-button" href="#" style="border-radius:5px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)"><?php echo __( 'Lets Get Started', 'wp-yatra' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->