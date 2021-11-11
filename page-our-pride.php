<?php get_header() ?>

    <div class="jumbotron jumbotron-fluid">
        <img src="<?php echo get_theme_file_uri('/images/ourpride-img.png'); ?>" alt="">
        <div class="jumbotrontitle" style="background: none;  width: 40vmax;">
            <br>
            <h1 style="color: #21c7b0; font-size: 4vmax;"><?php the_title(); ?></h1>
        </div>
    </div>
    <div class="ourstorybox" style="background-color: #d7f1f9;  margin: 0; padding: 0; position: relative;">
        <div style="padding: 40px 6vw;">
            <?php the_content(); ?>
        </div>
        <div class="ourstorybox" style="background-color: #ecf3fb;  margin: 0; padding: 0;">
            <div class="row g-0">
                <div class="col-sm-5">
                    <div class="bubble-responsive">
                    <div class="talk-bubble tri-right border round btm-left-in" data-aos="fade-left" data-aos-duration="1500" style="width: 30vw; position: absolute; top: 180px; left: 30px; background-color: white; box-shadow: 10px #666;">
                        <div class="talktext">
                            <h5 style="color: #429792">Weekend drives are no longer memories for my wife and I</h5>
                            <p style="color: #429792">- Kamal, Setia Eco Park</p>
                        </div>
                    </div>
                    <div class="kamal-img" data-aos="fade-right" data-aos-duration="1500" style="position: absolute; width: 170px; top: 95px; left: 20vw;">
                        <img src="<?php echo get_theme_file_uri('/images/kamal-img.jpeg'); ?>" alt="kamal" style="border-radius: 50%; border: 8px solid #ffffff7a; z-index: -1;">
                    </div>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="ourstorybox">
                        <p style="color: #429792">I put off weekend adventures discovering new places to eat as I was constantly worried about emergency stops to ease myself. I now wear Trupal with comfort and confidence. And it fits so well too! My wife and I are back to doing the things we enjoy!</p>
                    </div>                   
                </div>
            </div>
        </div>
        <div class="ourstorybox" style="background-color: #f9f6d0;  margin: 0; padding: 0;">
            <div class="row g-0">
                <div class="col-sm-7">
                    <div class="ourstorybox">
                        <p style="color: #429792">Mum used to feel discomforted when she used other adult diapers and refused to wear them. It was difficult for her to get quality sleep as she would get worried about accidents. Ever since we started getting her Trupal, she is able to have quality sleep. Keeps her comfortably dry throughout the night all day too!.</p>
                    </div>       
                </div>
                <div class="col-sm-5">
                    <div class="bubble-responsive">
                        <div class="talk-bubble tri-right border round btm-right-in" data-aos="fade-right" data-aos-duration="1500" style="width: 30vw; background-color: white; position: absolute; bottom: 30px; right: 8vw;">
                            <div class="talktext">
                                <h5 style="color: #8b9392">Comfort all day and through the night for my mum</h5>
                                <p style="color: #8b9392">- Alicia, Kuala Lumpur</p>
                            </div>
                        </div>
                        <div class="alice-img" data-aos="fade-left" data-aos-duration="1500" style="position: absolute; width: 170px; bottom: 170px; right: 151px;">
                            <img src="<?php echo get_theme_file_uri('/images/alice1-img.jpeg'); ?>" alt="alice" style="border-radius: 50%; border: 8px solid #ffffff7a; z-index: -1;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer() ?>