<?php
/**
 * Front Page
 *
 * @package Advance WooCommerce Theme
 */

get_header();

?>
	<div id="primary">
		<main id="main" class="site-main max-w-1280 m-auto mt-4 lg:p-4" role="main">
			<?php get_template_part( '/template-parts/front-page/products' ); ?>
		</main>
	</div>
<?php
get_footer();
