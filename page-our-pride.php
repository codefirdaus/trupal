<?php get_header() ?>

    <div class="jumbotron jumbotron-fluid">
        <img src="<?php echo get_theme_file_uri('/images/ourpride-img.png'); ?>" alt="">
        <div class="jumbotrontitle" style="background: none;">
            <br><br>
            <h1 style="color: #21c7b0; font-size: 4vmax;"><?php the_title(); ?></h1>
        </div>
    </div>
    <div class="ourstorybox" style="background-color: aquamarine; border: 1px solid; margin: 0; padding: 0;">
        <div class="container" style="border: 1px solid;">
            <?php the_content(); ?>
        </div>
        <div class="ourstorybox" style="background-color: blue; border: 1px solid; margin: 0; padding: 0;">
            <div class="row">
                <div class="col-sm-5" style="border: 1px solid;">Bubble chat</div>
                <div class="col-sm-7" style="border: 1px solid;">
                    <div class="ourstorybox" style="border: 1px solid;"><?php the_content(); ?></div>                   
                </div>
            </div>
        </div>
        <div class="ourstorybox" style="background-color: green; border: 1px solid; margin: 0; padding: 0;">
            <div class="row">
                <div class="col-sm-7" style="border: 1px solid;">
                    <div class="ourstorybox" style="border: 1px solid;"><?php the_content(); ?></div>       
                </div>
                <div class="col-sm-5" style="border: 1px solid;">Bubble chat</div>
            </div>
        </div>
    </div>

<?php get_footer() ?>