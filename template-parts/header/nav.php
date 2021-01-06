<?php
/**
 * Header Navigation.
 *
 * @package Advance WooCommerce Theme
 */

$menu_class = new Advanced_Woocommerce_Theme_Menus();
$header_menu_id = $menu_class->get_menu_id( 'awt-header-menu' );
$header_menus = wp_get_nav_menu_items( $header_menu_id );

?>

<nav class="bg-white p-4">
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
			<button
					class="flex items-center px-3 py-2 border rounded text-black border-black hover:text-black hover:border-black">
				<svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>
						Menu</title>
					<path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
				</svg>
			</button>
		</div>
		<div class="h-0 w-full overflow-hidden lg:h-full flex-grow lg:flex lg:items-center lg:w-auto">
			<div class="text-sm font-medium uppercase lg:flex-grow"><a
						class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-black mr-10"
						href="/categories/">Categories</a><a
						class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-black mr-10"
						href="/">Women</a><a
						class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-black mr-10" href="/">Kids</a><a
						class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-black mr-10" href="/">Home &amp;
					Living</a><a class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-black mr-10" href="/">Offers</a>
			</div>
			<div class="text-sm font-medium"><a href="#responsive-header"
			                                    class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-black mr-10">
					<svg xmlns="http://www.w3.org/2000/svg" class="hidden lg:block m-auto" fill="none"
					     viewBox="0 0 24 24" width="18" height="auto" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
						      d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
					</svg>
					Profile</a><a href="#responsive-header"
			                      class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-black mr-10">
					<svg xmlns="http://www.w3.org/2000/svg" class="hidden lg:block m-auto" fill="none"
					     viewBox="0 0 24 24" width="18" height="auto" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
						      d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
					</svg>
					Wishlist</a><a class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-black mr-10"
			                       href="/cart/">
					<svg xmlns="http://www.w3.org/2000/svg" class="hidden lg:block m-auto" fill="none"
					     viewBox="0 0 24 24" width="18" height="auto" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
						      d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
					</svg>
					Bag<span class="ml-1">(3)</span></a></div>
		</div>
	</div>
</nav>
