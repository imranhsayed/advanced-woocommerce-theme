
<?php
/**
 * Main template file.
 *
 * @package Advanced WooCommerce Theme
 */

get_header();


?>

<div id="primary">
    <main id="main" class="site-main mt-5" role="main">
        <?php get_template_part( 'template-parts/home/product-categories' ) ?>
        <?php get_template_part( 'template-parts/home/products' ) ?>
    </main>
</div>

<?php
get_footer();
