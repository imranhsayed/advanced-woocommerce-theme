<?php
/**
 * Header Navigation.
 *
 * @package Advance WooCommerce Theme
 */

$menu_class     = new Advanced_Woocommerce_Theme_Menus();
$header_menu_id = $menu_class->get_menu_id( 'awt-header-menu' );
$header_menus   = wp_get_nav_menu_items( $header_menu_id );

?>

<nav class="bg-white p-4 max-w-1280 m-auto">
	<div class="flex items-center justify-between flex-wrap container mx-auto">
		<div class="flex items-center flex-shrink-0 text-black mr-20">
			<div class="mr-2">
				<?php the_custom_logo(); ?>
			</div>
			<div>
				<p class="font-semibold text-xl tracking-tight">
					<a class="" href="<?php echo home_url(); ?>"><?php echo get_bloginfo( 'name', 'display' ); ?></a>
				</p>
				<p><?php bloginfo( 'description' ); ?></p>
			</div>
		</div>
		<div class="block lg:hidden">
			<button id="menu-btn" class="flex items-center px-3 py-2 border rounded text-black border-black hover:text-black hover:border-black">
				<img width="16" height="16" src="<?php echo AWT_DIR_URI . '/assets/src/svgs/hamburger.svg'; ?>" alt="wishlist">
			</button>
		</div>
		<div id="menu-items" class="h-0 w-full overflow-hidden lg:h-full flex-grow lg:flex lg:items-center lg:w-auto">
			<div class="text-sm font-medium uppercase lg:flex-grow">
				<?php

				if ( ! empty( $header_menus ) && is_array( $header_menus ) ) {
					foreach ( $header_menus as $header_menu ) {
						printf(
							'<a class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-black mr-10" href="%1$s">%2$s</a>',
							esc_url( $header_menu->url ),
							esc_html( $header_menu->title )
						);
					}

				}
				?>

			</div>
			<div class="text-sm font-medium md:flex">
				<a href="#responsive-header" class="block mt-4 flex items-center md:flex-col lg:mt-0 text-black hover:text-black mr-10">
					<img width="18" height="18" src="<?php echo AWT_DIR_URI . '/assets/src/svgs/user.svg'; ?>" alt="user">
					<div class="ml-1 md:ml-0">
						Profile
					</div>
				</a>
				<a href="#responsive-header" class="block mt-4 flex items-center md:flex-col lg:mt-0 text-black hover:text-black mr-10">
					<img width="18" height="18" src="<?php echo AWT_DIR_URI . '/assets/src/svgs/wishlist.svg'; ?>" alt="wishlist">
					<div class="ml-1 md:ml-0">
						Wishlist
					</div>
				</a>
				<a class="block mt-4 flex items-center md:flex-col lg:mt-0 text-black hover:text-black mr-10" href="/cart/">
					<img width="18" height="18" src="<?php echo AWT_DIR_URI . '/assets/src/svgs/cart.svg'; ?>" alt="cart">
					<div class="ml-1 md:ml-0">
						<span>Bag</span>
						<span class="ml-1">(<?php echo WC()->cart->get_cart_contents_count(); ?>)</span>
					</div>
				</a>
			</div>
		</div>
	</div>
</nav>
