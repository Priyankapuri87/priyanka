<?php
/*
 * Template name: kaffa template
*/
?>
<?php get_header(); ?>
<?php the_post(); ?>


<div class="breadcrumbs-wrapper">
    <div class="wrapper">
        <nav class="woocommerce-breadcrumb breadcrumb">
            <a href="http://priyankapuri.no/kaffa">hjem</a>
            &nbsp;/&nbsp;Butikk
        </nav>
    </div>
</div>
<div class="wrap">
    <div class="wrapper main-wrapper">
        <div id="container-fluid">
            <div id="content" role="main">
                <header class="woocommerce-products-header">
                    <h3 class="woocommerce-products-header__title page-title1">Kaffe</h3>
                </header>

                <form action="" method="post" class="post-per-page1">
                    <select name="posts_per_page" onchange="this.form.submit()">
                        <option selected="" disabled="">20 produkter på hver side</option>
                        <option value="20">20</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select></form>
                <form class="woocommerce-ordering1" method="get">
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

                <ul class="col-sm-2 grid right">
                    <li>
                        <a href="http://priyankapuri.no/kaffa/kaffa-butikk/">
                            <i class="fa fa-th-large" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-th-list" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>


                <ul class="products">
                    <li class="produkt">
                        <div class="inside-wrap">
                            <div class="col-md-2 image">
                                <img src="<?php echo get_template_directory_uri()?>/assets/images/product.jpg">
                            </div>
                            <div class="col-md-4">
                                <h4 class="productstyling">
                                    <a href="http://priyankapuri.no/kaffa/product/produkt1/">Produktnavn</h4>
                                </a>
                                <p class="varersize">varenr:33001</p>
                                <p class="varersize">Lagerstatus:pålager</p>
                            </div>
                            <div class="col-md-3">
                                <p class="price">Pris:&nbsp; &nbsp; kr120,00</p>
                            </div>
                            <div class="col-md-2 add-to-cart-wrap">
                                <a rel="nofollow" href="/kaffa/kaffa-butikk/?add-to-cart=1867"
                                   data-quantity="1" data-product_id="1867" data-product_sku=""
                                   class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart
                                </a>
                            </div>
                        </div>
                    </li>
                    <!--2nd row-->
                    <li class="produkt1">
                        <div class="inside-wrap">
                            <div class="col-md-2">
                                <a href="http://priyankapuri.no/kaffa/product/produkt1/">
                                    <img class="image" src="<?php echo get_template_directory_uri()?>/assets/images/product.jpg">
                                </a>
                            </div>
                            <div class="col-md-4">
                                <h4 class="productstyling">
                                    <a href="http://priyankapuri.no/kaffa/product/produkt1/">Produktnavn</a></h4>
                                <p class="varersize">varenr:33001</p>
                                <p class="varersize">Lagerstatus:pålager</p>
                            </div>
                            <div class="col-md-3">
                                <p class="price">Pris:&nbsp; &nbsp; kr299,00</p>
                            </div>
                            <div class="col-md-2 add-to-cart-wrap">
                                <a rel="nofollow" href="/kaffa/kaffa-butikk/?add-to-cart=1871"
                                   data-quantity="1" data-product_id="1871" data-product_sku=""
                                   class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>

                            </div>
                        </div>
                    </li>
                    <!--3rd row-->
                    <li class="produkt">
                        <div class="inside-wrap">
                            <div class="col-md-2">
                                <a href="http://priyankapuri.no/kaffa/product/produkt1/">
                                    <img class="image" src="<?php echo get_template_directory_uri()?>/assets/images/product.jpg">
                                </a>
                            </div>
                            <div class="col-md-4">
                                <h4 class="productstyling">
                                    <a href="http://priyankapuri.no/kaffa/product/produkt1/">Produktnavn</h4></a>
                                <p class="varersize">varenr:33001</p>
                                <p class="varersize">Lagerstatus:pålager</p>
                            </div>
                            <div class="col-md-3">
                                <p class="price">Pris:&nbsp; &nbsp; kr299,00</p>
                            </div>
                            <div class="col-md-2 add-to-cart-wrap">
                                <a rel="nofollow" href="/kaffa/kaffa-butikk/?add-to-cart=1870"
                                   data-quantity="1" data-product_id="1870" data-product_sku=""
                                   class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart
                                </a>

                            </div>
                        </div>
                    </li>
                    <!--4th row-->
                    <li class="produkt1">
                        <div class="inside-wrap">
                            <div class="col-md-2">
                                <a href="http://priyankapuri.no/kaffa/product/produkt1/">
                                    <img class="image" src="<?php echo get_template_directory_uri()?>/assets/images/product.jpg">
                                </a>
                            </div>
                            <div class="col-md-4">
                                <h4 class="productstyling">
                                    <a href="http://priyankapuri.no/kaffa/product/produkt1/">Produktnavn</a></h4>
                                <p class="varersize">varenr:33001</p>
                                <p class="varersize">Lagerstatus:pålager</p>
                            </div>
                            <div class="col-md-3">
                                <p class="price">Pris:&nbsp; &nbsp; kr299,00</p>
                            </div>
                            <div class="col-md-2 add-to-cart-wrap">
                                <a rel="nofollow" href="/kaffa/kaffa-butikk/?add-to-cart=1854"
                                   data-quantity="1" data-product_id="1854" data-product_sku=""
                                   class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>

                            </div>
                        </div>
                    </li>

                    <!--5th row-->
                    <li class="produkt">
                        <div class="inside-wrap">
                            <div class="col-md-2">
                                <a href="http://priyankapuri.no/kaffa/product/produkt1/">
                                    <img class="image" src="<?php echo get_template_directory_uri()?>/assets/images/product.jpg">
                                </a>
                            </div>
                            <div class="col-md-4">
                                <h4 class="productstyling">
                                    <a href="http://priyankapuri.no/kaffa/product/produkt1/">Produktnavn</a></h4>
                                <p class="varersize">varenr:33001</p>
                                <p class="varersize">Lagerstatus:pålager</p>
                            </div>
                            <div class="col-md-3">
                                <p class="price">Pris:&nbsp; &nbsp; kr299,00</p>
                            </div>
                            <div class="col-md-2 add-to-cart-wrap">
                                <a rel="nofollow" href="/kaffa/kaffa-butikk/?add-to-cart=1853"
                                   data-quantity="1" data-product_id="1853" data-product_sku=""
                                   class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>

                            </div>
                        </div>
                    </li>
                    <!--6th row-->
                    <li class="produkt1">
                        <div class="inside-wrap">
                            <div class="col-md-2">
                                <a href="">
                                    <img class="produkt1 image"src="<?php echo get_template_directory_uri()?>/assets/images/product.jpg">
                                </a>
                            </div>
                            <div class="col-md-4">
                                <h4 class="productstyling">Produktnavn</h4>
                                <p class="varersize">varenr:33001</p>
                                <p class="varersize">Lagerstatus:pålager</p>
                            </div>
                            <div class="col-md-3">
                                <p class="price">Pris:&nbsp; &nbsp; kr299,00</p>
                            </div>
                            <div class="col-md-2 add-to-cart-wrap">
                                <a rel="nofollow" href="/kaffa/kaffa-butikk/?add-to-cart=1850"
                                   data-quantity="1" data-product_id="1850" data-product_sku=""
                                   class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>

                            </div>
                        </div>
                    </li>
                    <!--7th row-->
                    <li class="produkt2">
                        <div class="inside-wrap">
                            <div class="col-md-2">
                                <a href="">
                                    <img class="image" src="<?php echo get_template_directory_uri()?>/assets/images/product.jpg">
                                </a>
                            </div>
                            <div class="col-md-4">
                                <h4 class="productstyling">Produktnavn</h4>
                                <p class="varersize">varenr:33001</p>
                                <p class="varersize">Lagerstatus:pålager</p>
                            </div>
                            <div class="col-md-3">
                                <p class="price">Pris:&nbsp; &nbsp; kr299,00</p>
                            </div>
                            <div class="col-md-2 add-to-cart-wrap">
                                <a rel="nofollow" href="/kaffa/kaffa-butikk/?add-to-cart=1851"
                                   data-quantity="1" data-product_id="1851" data-product_sku=""
                                   class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>

                            </div>
                        </div>
                    </li>
                </ul>

                <div id="sidebar-wrapper">
                    <ul class="sidebar-nav" style="margin-left:21px;">
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
</div>


<!--side bar-->

<?php get_footer()?>



