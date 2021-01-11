<?php
/**
 * Products Template
 *
 * @package Advanced WooCommerce Theme
 */

// Current page.
$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

$args = [
	'post_type'      => 'product',
	'posts_per_page' => 10,
	'paged'          => $paged,
	'order'          => 'DESC',
	'post_status'    => 'publish',
];

$the_query = new WP_Query( $args );

?>
<div class="products container mx-auto my-24 px-4 xl:px-0">
	<h2 class="products-main-title main-title mb-5 text-xl text-center uppercase">
		<span class="main-title-inner">Products</span>
	</h2>
	<?php
	if ( $the_query->have_posts() ) {
		?>
		<div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4 gap-4">
			<?php
			while ( $the_query->have_posts() ) : $the_query->the_post();
				get_template_part( 'template-parts/front-page/product' );
			endwhile;
			?>
		</div>
		<?php

		// Pagination
		$total_pages = $the_query->max_num_pages;
		get_template_part( 'template-parts/front-page/pagination', null, [
			'total_pages'  => $total_pages,
			'current_page' => $paged,
		] );
	}
	?>
</div>
