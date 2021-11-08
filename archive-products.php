<?php get_header() ?>
    <div class="jumbotron jumbotron-fluid">
        <img src="<?php echo get_theme_file_uri('/images/ourproducts-img.jpeg'); ?>" alt="">
        <div class="jumbotrontitle" style="background: none;">
            <br><br>
            <h1 style="color: #21c7b0; font-size: 4vmax;">Our Products</h1>
        </div>
    </div>
    <div class="ourstorybox" style="background-color: #d7ebeb;">
        <p>You can find Trupal in most pharmacies, hospitals and other healthcare-related retailers including healthcare aisles in stores. We hae a wide selection of solutions to meet your different needs, from Value, Supreme, and Premium to Pants and even wet wipes.</p>
    </div>
    <div data-aos="fade-right" data-aos-duration="2000">
        <div style="padding: 9vmax; text-align: center;">
            <iframe width="700" height="400" src="https://www.youtube.com/embed/_JtczVYZuWQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    <div data-aos="fade-right" data-aos-duration="2000">
        <div style="padding: 0 9vmax; padding-bottom: 9vmax; text-align: center; text-shadow: 2px 2px #FF0000;">
            <iframe width="700" height="400" src="https://www.youtube.com/embed/i8zBAMPLLik" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
        <br>
    <!-- <div class="relative-box"> -->
        <div class="row">
            <?php while(have_posts()) {
                the_post();  ?>
                    <?php if (get_the_ID() == 38) { ?>
                        <div class="col-6 p-3" style="background-color: #ade9e9; text-align: center;">
                        <a href="<?php the_permalink(); ?>" style="text-decoration: none;">
                        <img src="<?php echo get_theme_file_uri('/images/products/premiumseries-img.png'); ?>" alt="our-story">
                        <button class="btn btn-productlist"><?php the_title(); ?></button></a>
                    <?php } else if (get_the_ID() == 36) { ?>
                        <div class="col-6 p-3" style="background-color: #ade9e9; text-align: center;">
                        <a href="<?php the_permalink(); ?>" style="text-decoration: none;">
                        <img src="<?php echo get_theme_file_uri('/images/products/adultseries-img.png'); ?>" alt="our-story">
                        <button class="btn btn-productlist"><?php the_title(); ?></button></a>
                    <?php } else if (get_the_ID() == 39) { ?>
                        <div class="col-6 p-3" style="background-color: #fde4e8; text-align: center;">
                        <a href="<?php the_permalink(); ?>" style="text-decoration: none;">
                        <img src="<?php echo get_theme_file_uri('/images/products/supremeseries-img.png'); ?>" alt="our-story">
                        <button class="btn btn-productlist"><?php the_title(); ?></button></a>
                    <?php } else if (get_the_ID() == 41) { ?>
                        <div class="col-6 p-3" style="background-color: #fde4e8; text-align: center;">
                        <a href="<?php the_permalink(); ?>" style="text-decoration: none;">
                        <img src="<?php echo get_theme_file_uri('/images/products/valueseries-img.png'); ?>" alt="our-story">
                        <button class="btn btn-productlist"><?php the_title(); ?></button></a>
                    <?php } else if (get_the_ID() == 42) { ?>
                        <div class="col-6 p-3" style="background-color: #ade9e9; text-align: center;">
                        <a href="<?php the_permalink(); ?>" style="text-decoration: none;">
                        <img src="<?php echo get_theme_file_uri('/images/products/wetwipes-img.png'); ?>" alt="our-story">
                        <button class="btn btn-productlist"><?php the_title(); ?></button></a>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    <!-- </div> -->
<?php get_footer() ?>