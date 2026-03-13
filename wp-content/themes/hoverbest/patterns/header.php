<?php
/**
 * Title: header
 * Slug: hoverbest/header
 * Inserter: no
 */
?>
<!-- wp:group {"layout":{"inherit":"true","type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"full","className":"padding-all","style":{"spacing":{"padding":{"bottom":"30px","top":"30px","left":"10%","right":"10%"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignfull padding-all" style="padding-top:30px;padding-right:10%;padding-bottom:30px;padding-left:10%"><!-- wp:heading {"fontSize":"large","fontFamily":"abhaya-libre"} -->
<h2 class="wp-block-heading has-abhaya-libre-font-family has-large-font-size"><?php /* Translators: 1. is the start of a 'mark' HTML element, 2. is the end of a 'mark' HTML element */ 
echo sprintf( esc_html__( 'Hover%1$sbest%2$s', 'hoverbest' ), '<mark style="background-color:rgba(0, 0, 0, 0);color:#dca43d" class="has-inline-color">', '</mark>' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":"68px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-radius:68px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:navigation {"style":{"spacing":{"blockGap":"var:preset|spacing|60"},"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium","layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
<!-- wp:navigation-link {"label":"Home","url":"#","kind":"custom"} /-->

<!-- wp:navigation-link {"label":"Blog","url":"#","kind":"custom"} /-->

<!-- wp:navigation-link {"label":"About","url":"#","kind":"custom"} /-->

<!-- wp:navigation-link {"label":"Contact","url":"#","kind":"custom"} /-->

<!-- wp:navigation-submenu {"label":"Pages"} -->
<!-- wp:navigation-link {"label":"404","url":"#","kind":"custom"} /-->
<!-- /wp:navigation-submenu -->
<!-- /wp:navigation --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->