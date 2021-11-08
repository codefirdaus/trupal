<?php get_header() ?>
    <div class="jumbotron jumbotron-fluid">
        <img src="<?php echo get_theme_file_uri('/images/banner2.png'); ?>" alt="ourstory-img">
        <div class="jumbotrontitle" style="background: none; width: 40vmax;">
            <br>
            <h3 style="color: white; font-size: 38px;">Our Story</h3>
        </div>
    </div>
    <?php
    $count = 0;
    $story1 = get_field('story_banner_1');
    $story2 = get_field('story_banner_2');
    $story3 = get_field('story_banner_3');
    $storybanner = array($story1, $story2, $story3);
    ?>
    <?php 
    $storyarchive = new WP_Query(array(
        'post_type' => 'ourstory'
    ));

    while($storyarchive->have_posts()) {
        $storyarchive->the_post(); ?>
            <div class="jumbotron jumbotron-fluid">
                    <img src="<?= $storybanner[$count]['image']; ?>" alt="our-story">
                    <?php 
                    $count++; 
                    if ($count == count($storybanner)) { $count = 0; } 
                    ?>

                <div class="jumbotrontitle" style="background: none;">
                    <br>
                    <h2 style="color: #38afaf;"><?php the_title(); ?></h2>
                    <a href="<?php the_permalink(); ?>"><button type="button" class="btn btn-frontpage">Find out more</button></a>
                </div>
            </div>
    <?php } ?>
    

<?php get_footer() ?>