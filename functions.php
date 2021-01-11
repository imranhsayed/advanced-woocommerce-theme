<?php

if ( ! defined( 'AWT_DIR_PATH' ) ) {
	define( 'AWT_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'AWT_DIR_URI' ) ) {
	define( 'AWT_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

if ( ! defined( 'AWT_BUILD_URI' ) ) {
	define( 'AWT_BUILD_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build' );
}

if ( ! defined( 'AWT_BUILD_PATH' ) ) {
	define( 'AWT_BUILD_PATH', untrailingslashit( get_template_directory() ) . '/assets/build' );
}

if ( ! defined( 'AWT_BUILD_JS_URI' ) ) {
	define( 'AWT_BUILD_JS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/js' );
}

if ( ! defined( 'AWT_BUILD_JS_DIR_PATH' ) ) {
	define( 'AWT_BUILD_JS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/build/js' );
}

if ( ! defined( 'AWT_BUILD_IMG_URI' ) ) {
	define( 'AWT_BUILD_IMG_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/src/img' );
}

if ( ! defined( 'AWT_BUILD_CSS_URI' ) ) {
	define( 'AWT_BUILD_CSS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/css' );
}

if ( ! defined( 'AWT_BUILD_CSS_DIR_PATH' ) ) {
	define( 'AWT_BUILD_CSS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/build/css' );
}

if ( ! defined( 'AWT_BUILD_LIB_URI' ) ) {
	define( 'AWT_BUILD_LIB_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/library' );
}

// File Includes
require_once AWT_DIR_PATH . '/classes/class-advanced-woocommerce-theme-assets.php';
new Advanced_Woocommerce_Theme_Assets();
require_once AWT_DIR_PATH . '/classes/class-advanced-woocommerce-theme-menus.php';
new Advanced_Woocommerce_Theme_Menus();
require_once AWT_DIR_PATH . '/classes/class-advanced-woocommerce-theme.php';
new Advanced_Woocommerce_Theme();


