<?php
/**
<<<<<<< HEAD
 * Product Card Template.
 *
 * @package Advance WooCommerce Theme
 */

$product_id            = get_the_ID();
$product               = wc_get_product( $product_id );
$product_thumbnail_url = get_the_post_thumbnail_url( $product_id, 'medium' );
$product_title         = get_the_title();
$product_link          = get_the_permalink();
$sale_price            = $product->get_sale_price();
$regular_price         = $product->get_regular_price();
$is_product_on_sale    = $product->is_on_sale();
$is_product_in_stock   = $product->is_in_stock();
$product_price         = $product->get_price_html();
$discount_percent      = ! empty( $sale_price ) ? floatval( ( $regular_price - $sale_price ) / $regular_price * 100 )  : 0;

if ( $is_product_in_stock ) {
	?>
	<div class="product mb-5">
		<div class="relative">
			<a href="<?php echo esc_url( $product_link ); ?>">
				<img src="<?php echo esc_url( $product_thumbnail_url ); ?>" alt="<?php echo esc_html( $product_title ); ?>">
			</a>
			<?php
				if ( $is_product_on_sale ) {
					?>
					<span class="absolute top-0 right-0 px-3 py-1 text-white capitalize bg-black z-10 bg-opacity-80">
						Sale
					</span>
					<?php
				}
			?>
		</div>
		<div class="product-info">
			<h3 class="product-title mt-3 font-medium text-gray-800"><?php echo esc_html( $product_title ); ?></h3>
			<h6 class="product-price text-gray-800 font-semibold mr-3 mb-5">
				<span class="product-price mr-2"><?php echo wp_kses_post( $product_price ); ?>
				<?php
					if ( ! empty( $discount_percent ) ) {
						?>
						<span class="product-discount text-green-600 font-bold text-sm font-normal">
							<?php echo round( $discount_percent, 2 ); ?>% OFF
						</span>
						<?php
					}
					?>
				</span>
			</h6>
			<div>
				<a href="<?php echo esc_url( sprintf( '%1$s/?add-to-cart=%2$s', site_url(), $product_id ) ); ?>" class="px-3 py-1 rounded-sm mr-3 text-sm border-solid border border-current hover:bg-purple-600 hover:text-white hover:border-purple-600">
					Add to cart
				</a>
			</div>
		</div>
	</div>
	<?php
}
