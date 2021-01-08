<?php
/**
 * Product card
 *
 * @package Advance WooCommerce Theme
 */
$product_id         = get_the_ID();
$product            = wc_get_product( $product_id );
$product_thumbnail  = get_the_post_thumbnail_url( $product_id, 'thumbnail' );
$product_date       = get_the_date();
$product_title      = get_the_title();
$product_excerpt    = get_the_excerpt();
$product_link       = get_permalink();
$sale_price         = $product->get_sale_price();
$is_product_on_sale = $product->is_on_sale();
$regular_price      = $product->get_regular_price();
$product_price      = $product->get_price_html();
$discount_percent   = ! empty( $sale_price ) ?  ( intval( $sale_price ) / intval( $regular_price ) ) * 100 : 0;
?>

<div class="product mb-5">
	<div class="relative">
		<a href="/product/new-product/">
			<img src="<?php echo esc_url( $product_thumbnail ); ?>" alt="Product image">
		</a>
		<?php
			if ( $is_product_on_sale ) :
				?>
				<span class="absolute top-0 right-0 px-3 py-1 text-white capitalize bg-black z-10 bg-opacity-80">
					Sale!
				</span>
				<?php
			endif;
		?>
	</div>
	<div class="product-info">
		<h3 class="product-title mt-3 font-medium text-gray-800"><?php echo esc_html( $product_title ); ?></h3>
		<div class="product-description text-sm text-gray-700"></div>
		<h6 class="product-price text-gray-800 font-semibold mr-3 mb-5">
			<span class="product-price mr-2"><?php echo $product_price; ?></span>
			<?php
				if ( ! empty( $discount_percent ) ) {
					?>
					<span class="product-discount text-green-600 font-bold text-sm font-normal"><?php echo $sale_price; ?>% OFF</span>
					<?php
				}
			?>
		</h6>
		<div>
			<a href="<?php echo esc_url( sprintf( '%1$s/?add-to-cart=%2$s', site_url(), $product_id ) ); ?>" class="px-3 py-1 rounded-sm mr-3 text-sm border-solid border border-current hover:bg-purple-600 hover:text-white hover:border-purple-600">
				Add to cart
			</a>
		</div>
	</div>
</div>
