<?php
/**
 * Title: home
 * Slug: hoverbest/home
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"main"},"layout":{"type":"constrained"}} -->
<main class="wp-block-group"><!-- wp:group {"metadata":{"name":"Blog-Section"},"align":"full","style":{"spacing":{"padding":{"top":"5vw","bottom":"5vw","left":"10%","right":"10%"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="padding-top:5vw;padding-right:10%;padding-bottom:5vw;padding-left:10%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"80px","fontStyle":"normal","fontWeight":"500"}}} -->
<h2 class="wp-block-heading" style="font-size:80px;font-style:normal;font-weight:500"><?php esc_html_e('Our Digital Blog', 'hoverbest');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":22,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":4}} -->
<!-- wp:post-featured-image {"isLink":true,"height":"250px","linkTarget":"_blank","style":{"border":{"radius":"20px"}}} /-->

<!-- wp:post-date /-->

<!-- wp:post-title {"style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"500"}}} /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results {"align":"center"} -->
<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p class="has-text-align-center"></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->