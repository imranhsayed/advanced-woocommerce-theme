<?php
/**
 * Product card
 *
 * @package Advance WooCommerce Theme
 */

$product_thumbnail = get_the_post_thumbnail_url( get_the_ID(), 'thumbnail' );
$post_date = get_the_date();
$post_title = get_the_title();
$post_excerpt = get_the_excerpt();
$post_link = get_permalink();
$post_id = get_the_ID();
?>

<div class="product mb-5">
	<a href="/product/new-product/">
		<img src="https://smitpatadiya.com/woo-codeytek/wp-content/uploads/2020/11/fashion-2762865_1280.jpg" alt="Product image">
	</a>
	<div class="product-info">
		<h3 class="product-title mt-3 font-medium text-gray-800"><?php echo esc_html( $post_title ); ?></h3>
		<div class="product-description text-sm text-gray-700"></div>
		<h6 class="product-price text-gray-800 font-semibold mr-3 mb-5">
			<span class="product-price mr-2">£10.00</span>
			<span class="product-regular-price mr-2 line-through text-sm text-gray-600 font-normal">£16.00</span>
			<span class="product-discount text-green-600 font-bold text-sm font-normal">(37.50%) OFF</span>
		</h6>
		<div>
			<a href="<?php echo esc_url( sprintf( '%1$s/?add-to-cart=%2$s', site_url(), $post_id ) ); ?>" class="px-3 py-1 rounded-sm mr-3 text-sm border-solid border border-current hover:bg-purple-600 hover:text-white hover:border-purple-600">
				Add to cart
			</a>
		</div>
	</div>
</div>
