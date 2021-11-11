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
            <?php the_field('video_1') ?>  
        </div>
    </div>
    <div data-aos="fade-right" data-aos-duration="2000">
        <div style="padding: 0 9vmax; padding-bottom: 9vmax; text-align: center; width: 100%;" >
            <?php the_field('video_2') ?>  
        </div>
    </div>
    <?php
    $count = 0;
    $colorcount = 0;
    $product1 = get_field('product_1');
    $product2 = get_field('product_2');
    $product3 = get_field('product_3');
    $product4 = get_field('product_4');
    $product5 = get_field('product_5');
    $productList = array(
        $product1,
        $product2,
        $product3,
        $product4,
        $product5,
    );
    
    $color = array('ade9e9', 'fde4e8', 'fde4e8', 'ade9e9', 'ade9e9', 'fde4e8');
    ?>
        <div class="row g-0">
            <?php
            $productquery = new WP_Query(array(
                'posts_per_page' => 6,
                'post_type' => "products",
                'orderby' => 'date',
                'order' => 'ASC'
                // 'suppress_filters' => true
            ));
                while($productquery->have_posts()) {
                    $productquery->the_post(); ?>
                    <div class="col-6 p-3" style="text-align: center; background-color: #<?php echo $color[$colorcount]; ?>; padding-bottom: 5vw!important;">
                    <a href="<?php the_permalink(); ?>" style="text-decoration: none;">
                        <img src="<?= $productList[$count]['image']; ?>" alt="<?= $productList[$count]['title']; ?>">
                     <br>  <button class="btn btn-productlist"><?= the_title(); ?></button></a>
                    </div>
                    <?php 
                        $count++; 
                        if ($count == count($productList)) {$count = 0 ;}
                        $colorcount++;
                        if ($colorcount == 5) {$colorcount = 0 ;}
                }
               wp_reset_postdata();
            ?>
        </div>
<?php get_footer() ?>