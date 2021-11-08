<?php get_header() ?>
    <div class="jumbotron jumbotron-fluid">
        <img src="<?php echo get_theme_file_uri('/images/banner2.png'); ?>" alt="ourstory-img">
        <div class="jumbotrontitle" style="background: none; width: 40vmax;">
            <br>
            <h3 style="color: white;">Our Story</h3>
        </div>
    </div>
    <?php while (have_posts()) {
        the_post(); ?>
        <div class="jumbotron jumbotron-fluid">
        <?php 
            if (get_the_ID() == 29) { ?>
                <img src="<?php echo get_theme_file_uri('/images/whoweare-img.jpeg'); ?>" alt="our-story">
        <?php } else if (get_the_ID() == 28) {  ?>
            <img src="<?php echo get_theme_file_uri('/images/whatinspiresus-img.jpeg'); ?>" alt="our-story">
        <?php } else if (get_the_ID() == 27) {  ?>   
            <img src="<?php echo get_theme_file_uri('/images/howweinnovate-img.jpeg'); ?>" alt="our-story">
        <?php } ?>
            <div class="jumbotrontitle" style="background: none;">
                <br>
                <h3 style="color: #38afaf;"><?php the_title(); ?></h3>
                <a href="<?php the_permalink(); ?>"><button type="button" class="btn btn-frontpage">Find out more</button></a>
            </div>
        </div>

    <?php } ?>
    

<?php get_footer() ?>