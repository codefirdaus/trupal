<?php get_header(); ?>
<?php while(have_posts()) {
    the_post(); ?>
    <div class="jumbotron jumbotron-fluid our-story-pages">
        <?php if(get_the_ID() == 29) { ?>
            <img src="<?php echo get_theme_file_uri('/images/whoweare-img.jpeg'); ?>" alt="">
            <div class="jumbotrontitle" style="background: none;">
                <br><br>
                <h3 style="color: #21c7b0;"><?php the_title(); ?></h3>
            </div>
            <div class="ourstorybox" style="background-color: #d0e6eb;">
                <?php the_content(); ?>
            </div>
        <?php } else if(get_the_ID() == 28) { ?>
            <img src="<?php echo get_theme_file_uri('/images/whatinspiresus-img.jpeg'); ?>" alt="">
            <div class="jumbotrontitle" style="background: none;">
                <br><br>
                <h3 style="color: #21c7b0;"><?php the_title(); ?></h3>
            </div>
            <div class="ourstorybox" style="background-color: #fffce5;">
                <?php the_content(); ?>
            </div>
        <?php } else if(get_the_ID() == 27) { ?>
            <img src="<?php echo get_theme_file_uri('/images/banner3.png'); ?>" alt="">
            <div class="jumbotrontitle" style="background: none;">
                <br><br>
                <h3 style="color: #21c7b0;"><?php the_title(); ?></h3>
            </div>
            <div class="ourstorybox" style="background-color: #bbe5ed;">
                <?php the_content(); ?>
            </div>
        <?php } ?>
    </div>
    <?php if(get_the_ID() == 27) { ?>
        <div class="row" style="padding: 2vmax 10vmax; margin: 0;">
            <div class="col-sm-2" style="text-align: center;"><img src="<?php echo get_theme_file_uri('/images/logo/waterproofleakguards-logo.png'); ?>" alt="" class="mw-100"></div>
            <div class="col-sm-2" style="text-align: center;"><img src="<?php echo get_theme_file_uri('/images/logo/wetness_sign-logo.png'); ?>" alt="" class="mw-100"></div>
            <div class="col-sm-2" style="text-align: center;"><img src="<?php echo get_theme_file_uri('/images/logo/breathability-logo.png'); ?>" alt="" class="mw-100"></div>
            <div class="col-sm-2" style="text-align: center;"><img src="<?php echo get_theme_file_uri('/images/logo/aloevera-logo.png'); ?>" alt="" class="mw-100"></div>
            <div class="col-sm-2" style="text-align: center;"><img src="<?php echo get_theme_file_uri('/images/logo/quickdrysystem-logo.png'); ?>" alt="" class="mw-100"></div>
            <div class="col-sm-2" style="text-align: center;"><img src="<?php echo get_theme_file_uri('/images/logo/odourcontrol-logo.png'); ?>" alt="" class="mw-100"></div>
        </div>
    <?php } ?>

<?php } ?>
<?php get_footer(); ?>