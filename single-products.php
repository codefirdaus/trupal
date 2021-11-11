<?php get_header(); ?>

    <div class="jumbotron jumbotron-fluid">
        <img src="<?php echo get_theme_file_uri('/images/ourproducts-img.jpeg'); ?>" alt="product-banner">
        <div class="jumbotrontitle" style="background: none;">
            <br>
            <h1 style="color: #21c7b0; font-size: 4vmax;">Our Products</h1>
        </div>
    </div>
    <!-- productbox -->
    <?php
        $productimage = get_field('product_image');
    ?>
    <div class="productbox" style="padding: 10px 60px 0px 60px;">
        <div class="align-self-center">
            <div class="row" style="position: relative; display: flex; margin-top: 0; padding-top: 0;">
                <div class="col-sm-5">
                    <img src="<?= $productimage; ?>" class="mw-100" style="max-height: 100%">
                </div>
                <div class="col-sm-7">
                <div class="product-box-responsive" style="padding: 15vh 4vmin;">
                    <h2><br><?php the_title(); ?></h2>
                    <p><?php the_content(); ?></p>
                    <div class="dropdown">
                        <button class="btn btn-frontpage" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="width: 160px;">
                            Buy Now
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="https://www.lazada.com.my/shop/adiaperspro/">Lazada</a></li>
                            <li><a class="dropdown-item" href="https://shopee.com.my/adiaperspro">Shopee</a></li>
                        </ul>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="productbox" style="background-color: #eaf6f9;">
        <div class="row" style="text-align: center;">
            <div class="col-sm-4">
                <h5 style="color: #21c7b0;">Products</h5>
                <br>
                <a href="<?php echo site_url('/products/value-series'); ?>">
                    <h6>Value Series</h6>
                </a>
                <a href="<?php echo site_url('/products/supreme-series'); ?>">
                    <h6>Supreme Series</h6>
                </a>
            </div>
            <div class="col-sm-4">
                <br><br>
                <a href="<?php echo site_url('/products/premium-series'); ?>">
                    <h6>Premium Series</h6>
                </a>
                <a href="<?php echo site_url('/products/adult-series'); ?>">
                    <h6>Adult Series</h6>
                </a>
            </div>
            <div class="col-sm-4">
                <br><br>
                <a href="<?php echo site_url('/products/wet-wipes'); ?>">
                    <h6>Wet Wipes</h6>
                </a>
            </div>
        </div>
        <div class="row" style="text-align: center;">
            <div class="col-sm-4">
                <br><br>
                <a href="<?php echo site_url('/our-products'); ?>"><button class="btn btn-secondary" style="width: 130px; height: 35px;">Back</button>
            </a></div>
            <div class="col-sm-4"></div>
            <div class="col-sm-4"></div>
        </div>
    </div>

<?php get_footer(); ?>