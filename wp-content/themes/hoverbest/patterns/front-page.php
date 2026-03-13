<?php
/**
 * Title: front-page
 * Slug: hoverbest/front-page
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"main"},"layout":{"type":"constrained"}} -->
<main class="wp-block-group"><!-- wp:group {"tagName":"section","metadata":{"name":"Hero-Section"},"align":"full","style":{"color":{"background":"#110b01"},"background":{"backgroundImage":{"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/bg2-1.png","id":87,"source":"file","title":"bg2"},"backgroundSize":"cover","backgroundPosition":"64% 49%"}},"layout":{"type":"default"}} -->
<section class="wp-block-group alignfull has-background" style="background-color:#110b01"><!-- wp:group {"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0"}},"dimensions":{"minHeight":"70vh"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"bottom"}} -->
<div class="wp-block-group" style="min-height:70vh;padding-top:0"><!-- wp:heading {"style":{"typography":{"fontSize":"100px","fontStyle":"normal","fontWeight":"400"}},"fontFamily":"abhaya-libre"} -->
<h2 class="wp-block-heading has-abhaya-libre-font-family" style="font-size:100px;font-style:normal;font-weight:400"><?php /* Translators: 1. is a 'br' HTML element, 2. is the start of a 'em' HTML element, 3. is the end of a 'em' HTML element */ 
echo sprintf( esc_html__( 'Fly to be the %1$s%2$sBest%3$s, fly with us', 'hoverbest' ), '<br>', '<em>', '</em>' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|80"}}}} -->
<div class="wp-block-buttons" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:button {"style":{"border":{"radius":"27px"},"typography":{"fontStyle":"normal","fontWeight":"400"},"color":{"gradient":"linear-gradient(135deg,rgb(221,185,85) 0%,rgb(214,121,55) 100%)"}},"fontSize":"medium"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background has-medium-font-size has-custom-font-size wp-element-button" href="#" style="border-radius:27px;background:linear-gradient(135deg,rgb(221,185,85) 0%,rgb(214,121,55) 100%);font-style:normal;font-weight:400"><?php esc_html_e('Get started', 'hoverbest');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","style":{"border":{"top":{"color":"#ffffff7a","width":"1px"},"right":{"color":"#ffffff7a","width":"1px"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|70","right":"var:preset|spacing|70"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="border-top-color:#ffffff7a;border-top-width:1px;border-right-color:#ffffff7a;border-right-width:1px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"bottom":"var:preset|spacing|40"}}}} -->
<h2 class="wp-block-heading" style="padding-bottom:var(--wp--preset--spacing--40);font-style:normal;font-weight:500"><?php esc_html_e('Top team', 'hoverbest');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-gray"}}},"spacing":{"padding":{"top":"0","bottom":"0"}}},"textColor":"light-gray","fontSize":"medium"} -->
<p class="has-light-gray-color has-text-color has-link-color has-medium-font-size" style="padding-top:0;padding-bottom:0"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pretium ligula a mattis tincidunt. Maecenas iaculis venenatis leo nec dictum. ', 'hoverbest');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"border":{"top":{"color":"#ffffff7a","width":"1px"},"right":{"color":"#ffffff7a","width":"1px"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|70","right":"var:preset|spacing|70"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="border-top-color:#ffffff7a;border-top-width:1px;border-right-color:#ffffff7a;border-right-width:1px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"bottom":"var:preset|spacing|40"}}}} -->
<h2 class="wp-block-heading" style="padding-bottom:var(--wp--preset--spacing--40);font-style:normal;font-weight:500"><?php esc_html_e('Full customized', 'hoverbest');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-gray"}}},"spacing":{"padding":{"top":"0","bottom":"0"}}},"textColor":"light-gray","fontSize":"medium"} -->
<p class="has-light-gray-color has-text-color has-link-color has-medium-font-size" style="padding-top:0;padding-bottom:0"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pretium ligula a mattis tincidunt. Maecenas iaculis venenatis leo nec dictum. ', 'hoverbest');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"border":{"top":{"color":"#ffffff7a","width":"1px"},"right":{"color":"#ffffff7a","width":"1px"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|70","right":"var:preset|spacing|70"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="border-top-color:#ffffff7a;border-top-width:1px;border-right-color:#ffffff7a;border-right-width:1px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"bottom":"var:preset|spacing|40"}}}} -->
<h2 class="wp-block-heading" style="padding-bottom:var(--wp--preset--spacing--40);font-style:normal;font-weight:500"><?php esc_html_e('Be on top', 'hoverbest');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-gray"}}},"spacing":{"padding":{"top":"0","bottom":"0"}}},"textColor":"light-gray","fontSize":"medium"} -->
<p class="has-light-gray-color has-text-color has-link-color has-medium-font-size" style="padding-top:0;padding-bottom:0"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pretium ligula a mattis tincidunt. Maecenas iaculis venenatis leo nec dictum. ', 'hoverbest');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","metadata":{"name":"About-Section"},"align":"full","className":"padding-all","style":{"spacing":{"padding":{"top":"5vw","bottom":"5vw","left":"10%","right":"10%"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull padding-all has-white-background-color has-background" style="padding-top:5vw;padding-right:10%;padding-bottom:5vw;padding-left:10%"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"top":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|orange"}}}},"textColor":"orange","fontSize":"medium"} -->
<h2 class="wp-block-heading has-orange-color has-text-color has-link-color has-medium-font-size" style="padding-top:var(--wp--preset--spacing--50);font-style:normal;font-weight:500"><?php esc_html_e('That\'s how we can hell you', 'hoverbest');?></h2>
<!-- /wp:heading -->

<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"49px"},"spacing":{"padding":{"top":"0"}},"elements":{"link":{"color":{"text":"#222222"}}},"color":{"text":"#222222"}},"fontFamily":"abhaya-libre"} -->
<h2 class="wp-block-heading has-text-color has-link-color has-abhaya-libre-font-family" style="color:#222222;padding-top:0;font-size:49px;font-style:normal;font-weight:700"><?php esc_html_e('That\'s how we can hell you', 'hoverbest');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"padding":{"bottom":"24px"}},"typography":{"fontSize":"22px"},"elements":{"link":{"color":{"text":"var:preset|color|light-gray"}}}},"textColor":"light-gray"} -->
<p class="has-text-align-left has-light-gray-color has-text-color has-link-color" style="padding-bottom:24px;font-size:22px"><?php /* Translators: 1. is a 'br' HTML element, 2. is a 'br' HTML element, 3. is a 'br' HTML element, 4. is a 'br' HTML element */ 
echo sprintf( esc_html__( 'Hoverbest is not just another design agency it’s a creative and also%1$sinnovative to helping businesses amplify their growth through%2$sexceptional design solutions. At Hoverbest, the mission is clear to%3$scraft designs that are stunning but also strategically aligned with%4$sthe goals and values of our team and clients', 'hoverbest' ), '<br>', '<br>', '<br>', '<br>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50"},"blockGap":{"left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-buttons" style="padding-top:var(--wp--preset--spacing--50)"><!-- wp:button {"style":{"border":{"radius":"27px"},"typography":{"fontStyle":"normal","fontWeight":"400"},"color":{"gradient":"linear-gradient(135deg,rgb(221,185,85) 0%,rgb(214,121,55) 100%)"}},"fontSize":"medium"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background has-medium-font-size has-custom-font-size wp-element-button" href="#" style="border-radius:27px;background:linear-gradient(135deg,rgb(221,185,85) 0%,rgb(214,121,55) 100%);font-style:normal;font-weight:400"><?php esc_html_e('Get started', 'hoverbest');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"9px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/work-light-wood-technology-window-building-832551-pxhere.com_-1024x563.jpg" alt="" style="border-radius:9px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","metadata":{"name":"Blog-Section"},"align":"full","className":"scroll-container padding-all","style":{"spacing":{"padding":{"top":"5vw","bottom":"5vw","left":"10%","right":"10%"}}},"layout":{"type":"default"}} -->
<section class="wp-block-group alignfull scroll-container padding-all" style="padding-top:5vw;padding-right:10%;padding-bottom:5vw;padding-left:10%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"80px","fontStyle":"normal","fontWeight":"500"}}} -->
<h2 class="wp-block-heading" style="font-size:80px;font-style:normal;font-weight:500"><?php /* Translators: 1. is a 'br' HTML element, 2. is the start of a 'mark' HTML element, 3. is the end of a 'mark' HTML element */ 
echo sprintf( esc_html__( 'Our Digital%1$s%2$sfeatured blog%3$s', 'hoverbest' ), '<br>', '<mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-orange-color">', '</mark>' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"buttom-animation","style":{"border":{"width":"1px","color":"#ffffff","radius":"30px"},"spacing":{"padding":{"top":"12px","bottom":"12px","left":"16px","right":"16px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group buttom-animation has-border-color" style="border-color:#ffffff;border-width:1px;border-radius:30px;padding-top:12px;padding-right:16px;padding-bottom:12px;padding-left:16px"><!-- wp:paragraph {"style":{"typography":{"fontSize":"18px"}}} -->
<p style="font-size:18px"><?php esc_html_e('View Blog', 'hoverbest');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":22,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]},"className":"scroll-section"} -->
<div class="wp-block-query scroll-section"><!-- wp:post-template {"className":"panel","layout":{"type":"grid","columnCount":4}} -->
<!-- wp:post-featured-image {"isLink":true,"height":"250px","linkTarget":"_blank","style":{"border":{"radius":"20px"}}} /-->

<!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /-->

<!-- wp:post-title {"style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"500"}}} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->