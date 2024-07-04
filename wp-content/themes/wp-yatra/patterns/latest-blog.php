<?php
/**
 * Title: Latest Blog
 * Slug: wp-yatra/latest-blog
 * Categories: wp-yatra
 *
 * @package WP Yatra
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|50"}}},"layout":{"type":"constrained"},"fontSize":"large"} -->
<div class="wp-block-group alignfull has-large-font-size" style="padding-top:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"center","level":4,"align":"wide","style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"textColor":"contrast","fontSize":"medium"} -->
<h4 class="wp-block-heading alignwide has-text-align-center has-contrast-color has-text-color has-medium-font-size" style="padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20);font-style:normal;font-weight:600;text-transform:capitalize"><?php echo __( 'Featured Posts', 'wp-yatra' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","align":"wide","style":{"spacing":{"margin":{"bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"x-large"} -->
<h2 class="wp-block-heading alignwide has-text-align-center has-x-large-font-size" style="margin-bottom:0;font-style:normal;font-weight:600"><?php echo __( 'Latest Travel Blog', 'wp-yatra' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":0,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"14px","top":{"color":"var:preset|color|transparent","width":"0px","style":"none"},"right":{"color":"var:preset|color|transparent","width":"0px","style":"none"},"bottom":{"radius":"14px","width":"0px","color":"var:preset|color|vivid-green-cyan","style":"none"},"left":{"color":"var:preset|color|transparent","width":"0px","style":"none"}},"color":{"background":"#c4d3ca4a"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="border-radius:14px;border-top-color:var(--wp--preset--color--transparent);border-top-style:none;border-top-width:0px;border-right-color:var(--wp--preset--color--transparent);border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--vivid-green-cyan);border-bottom-style:none;border-bottom-width:0px;border-left-color:var(--wp--preset--color--transparent);border-left-style:none;border-left-width:0px;background-color:#c4d3ca4a;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"auto","width":"","height":"300px","align":"full","style":{"spacing":{"margin":{"right":"0","left":"0","top":"0","bottom":"0"}},"border":{"radius":{"topLeft":"11px","topRight":"11px"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}},"dimensions":{"minHeight":"222px"}},"backgroundColor":"transparent","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-transparent-background-color has-background" style="min-height:222px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group">
<!-- wp:post-author-name {"style":{"color":{"text":"#b1b1b1"},"typography":{"fontSize":"0.86rem"}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group">

<!-- wp:post-date {"style":{"typography":{"fontSize":"0.86rem"}},"textColor":"cyan-bluish-gray"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"},"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} /-->

<!-- wp:post-excerpt {"moreText":"Read More","excerptLength":15,"style":{"typography":{"fontSize":"0.95rem"},"spacing":{"padding":{"right":"0","left":"0"}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->