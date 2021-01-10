<?php
/**
 * Pagination Template.
 *
 * To be used inside the WordPress loop.
 *
 * @package
 */

if ( ! empty( $args['total_pages'] ) && ! empty( $args['current_page'] ) ) {
	if ( 1 < $args['total_pages'] ) {
		?>
		<div class="flex justify-center mt-12 pagination">
			<?php
			echo paginate_links( [
				'base'      => get_pagenum_link( 1 ) . '%_%',
				'format'    => 'page/%#%',
				'current'   => $args['current_page'],
				'total'     => $args['total_pages'],
				'prev_text' => __( '« Prev', 'advanced-woocommerce-theme' ),
				'next_text' => __( 'Next »', 'advanced-woocommerce-theme' ),
			] );
			?>
		</div>
		<?php
	}
}
