<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

<?php
/**
 * woocommerce_before_main_content hook.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );
?>

<header class="woocommerce-products-header">

    <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>

        <h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>

    <?php endif; ?>

    <?php
    /**
     * woocommerce_archive_description hook.
     *
     * @hooked woocommerce_taxonomy_archive_description - 10
     * @hooked woocommerce_product_archive_description - 10
     */
    do_action( 'woocommerce_archive_description' );
    ?>
    <div class="wrap">
        <div class="wrapper main-wrapper">
            <div id="container">
                <div id="content" role="main">
                    <form action="" method="post" class="post-per-page"><select name="posts_per_page" onchange="this.form.submit()"><option selected="" disabled="">20 produkter på hver side</option><option value="20">20</option><option value="50">50</option><option value="100">100</option></select></form><form class="woocommerce-ordering" method="get">
                        <select name="orderby" class="orderby">
                            <option value="menu_order" selected="selected">Standard sortering</option>
                            <option value="price">Pris: lav til høy</option>
                            <option value="price-desc">Pris: høy til lav</option>
                            <option value="sku-asc">Vnr.: lav til høy</option>
                            <option value="sku-desc">Vnr.: høy til lav</option>
                            <option value="title-asc">Navn: A-Å</option>
                            <option value="title-desc">Navn: Å-A</option>
                        </select>
                    </form>

                 <!--   <ul class="col-sm-2 grid-vs-list">
                        <li>
                            <span class="grid">
                            <i class="fa fa-th-large" aria-hidden="true"></i>
                             </span>
                        </li>

                        <li>
                          <span class="list">
                                <i class="fa fa-th-list" aria-hidden="true"></i>
                          </span>
                        </li>
                    </ul>-->
</header>


<?php if ( have_posts() ) : ?>


    <?php
    /**
     * woocommerce_before_shop_loop hook.
     *
     * @hooked wc_print_notices - 10
     * @hooked woocommerce_result_count - 20
     * @hooked woocommerce_catalog_ordering - 30
     */
    do_action( 'woocommerce_before_shop_loop' );
    ?>

    <?php woocommerce_product_loop_start(); ?>




                    <?php woocommerce_product_subcategories(); ?>

    <?php while ( have_posts() ) : the_post(); ?>

        <?php
        /**
         * woocommerce_shop_loop hook.
         *
         * @hooked WC_Structured_Data::generate_product_data() - 10
         */
        do_action( 'woocommerce_shop_loop' );
        ?>

        <?php wc_get_template_part( 'content', 'product' ); ?>


    <?php endwhile; // end of the loop. ?>

    <?php woocommerce_product_loop_end(); ?>


    <?php
    /**
     * woocommerce_after_shop_loop hook.
     *
     * @hooked woocommerce_pagination - 10
     */
    do_action( 'woocommerce_after_shop_loop' );
    ?>

<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

    <?php
    /**
     * woocommerce_no_products_found hook.
     *
     * @hooked wc_no_products_found - 10
     */
    do_action( 'woocommerce_no_products_found' );
    ?>

<?php endif; ?>

<?php
/**
 * woocommerce_after_main_content hook.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );
?>
</div>
        </div>



<?php
/**
 * woocommerce_sidebar hook.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' );
?>
<div class="wrapper">
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav" style="margin-left:0;">
            <li class="left">
                <a href="#"> <span>sommertilbud</span>  </a>
            </li>
            <li class="left">
                <a href="#"> <span> nyheter</span> </a>
            </li>
            <li class="left">
                <a href="#"> <span> kaffebonner</span> </a>
            </li>
            <li class="left">
                <a href="#"> <span> newby te</span> </a>
            </li>
            <li class="left">
                <a href="#"> <span>hario </span> </a>
            </li>
            <li class="left">
                <a href="#">  <span>chemex</span> </a>
            </li>
            <li class="left">
                <a href="#">  <span>baratza</span> </a>
            </li>
            <li class="left">
                <a href="#">  <span>kaffaabonnement</span> </a>
            </li>
            <li class="left">
                <a href="#"> <span>gaveabonnement</span> </a>
            </li>
            <li class="left">
                <a href="#">  <span>kverner</span> </a>
            </li>
            <li class="left">
                <a href="#">  <span>filter</span> </a>
            </li>
            <li class="left">
                <a href="#">  <span>cafetto rens</span> </a>
            </li>
            <li class="left">
                <a href="#">  <span>tilbehør</span> </a>
            </li>
            <li class="left">
                <a href="#">  <span>kurs</span> </a>
            </li>
            <li class="left">
                <a href="#">  <span>gavekort</span> </a>
            </li>
            <li class="left">
                <a href="#">  <span>merchandise</span> </a>
            </li>
            <li class="left">
                <a href="#">  <span>instagram</span> </a>
            </li>
        </ul>
    </div>
</div>

</div>
</div>
<?php get_footer( 'shop' ); ?>
