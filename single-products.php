<?php get_header(); ?>

    <div class="jumbotron jumbotron-fluid">
        <img src="<?php echo get_theme_file_uri('/images/ourproducts-img.jpeg'); ?>" alt="">
        <div class="jumbotrontitle" style="background: none;">
            <br><br>
            <h1 style="color: #21c7b0; font-size: 4vmax;">Our Products</h1>
        </div>
    </div>
    <!-- productbox -->
    <div class="productbox">
        <div class="align-self-center">
            <div class="row" style="position: relative; display: flex; margin-top: 0; padding-top: 0;">
                <div class="col-sm-5">
                    <?php if(get_the_ID() == 42) { ?>
                        <img src="<?php echo get_theme_file_uri('/images/products/wetwipes-img.png'); ?>" alt="" class="mw-100" style="max-height: 100%">
                    <?php } else if(get_the_ID() == 41) { ?>
                        <img src="<?php echo get_theme_file_uri('/images/products/valueseries-img.png'); ?>" alt="" class="mw-100" style="max-height: 100%">
                    <?php } else if(get_the_ID() == 39) { ?>
                        <img src="<?php echo get_theme_file_uri('/images/products/supremeseries-img.png'); ?>" alt="" class="mw-100" style="max-height: 100%">
                    <?php } else if(get_the_ID() == 36) { ?>
                        <img src="<?php echo get_theme_file_uri('/images/products/adultseries-img.png'); ?>" alt="" class="mw-100" style="max-height: 100%">
                    <?php } else if(get_the_ID() == 38) { ?>
                        <img src="<?php echo get_theme_file_uri('/images/products/premiumseries-img.png'); ?>" alt="" class="mw-100" style="max-height: 100%">
                    <?php } ?>
                </div>
                <div class="col-sm-7" style="padding: 15vh 4vmin;">
                    <h1><br><?php the_title(); ?></h1>
                    <p><?php the_content(); ?></p>
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
                <a href="<?php echo site_url('/products'); ?>"><button class="btn btn-secondary" style="width: 130px; height: 35px;">Back</button>
            </a></div>
            <div class="col-sm-4"></div>
            <div class="col-sm-4"></div>
        </div>
    </div>

<?php get_footer(); ?>