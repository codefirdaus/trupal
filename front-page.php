<?php get_header(); ?>
    <div class="jumbotron jumbotron-fluid">
        <img src="<?php echo get_theme_file_uri('/images/ourstory-img.jpeg'); ?>" alt="ourstory-img">
        <div class="jumbotrontitle" style="background: none;">
            <br>
            <h3 style="color: #429792">Our Story</h3>
            <div data-aos="zoom-in">
                <a href="<?php echo site_url('/ourstory'); ?>"><button class="btn btn-frontpage">Find out more</button></a>
            </div>
        </div>
    </div>
    <div class="jumbotron jumbotron-fluid">
        <img src="<?php echo get_theme_file_uri('/images/ourpride-img.png'); ?>" alt="howweinnovate-img">
        <div class="jumbotrontitle">
            <br>
            <h3 style="color: #429792">Our Pride</h3>
            <div data-aos="zoom-in">
                <a href="<?php echo site_url('/our-pride'); ?>"><button class="btn btn-frontpage">Find out more</button></a>
            </div>
        </div>
    </div>
    <div class="jumbotron jumbotron-fluid">
        <img src="<?php echo get_theme_file_uri('/images/ourproducts-img.jpeg'); ?>" alt="ourproducts-img">
        <div class="jumbotrontitle" style="background: radial-gradient(#cccf0936,#fcffea00);">
            <br>
            <h3 style="color: #429792">Our Products</h3>
            <div data-aos="zoom-in">
                <a href="<?php echo site_url('/products'); ?>"><button class="btn btn-frontpage">Find out more</button></a>
            </div>
        </div>
    </div>
    <div class="jumbotron jumbotron-fluid">
        <img src="<?php echo get_theme_file_uri('/images/contactus-img.jpeg'); ?>" alt="ourproducts-img">
        <div class="jumbotrontitle" style="background: radial-gradient(#cccf0936,#fcffea00);">
            <br>
            <h3 style="color: #429792">Contact Us</h3>
            <div data-aos="zoom-in">
                <a href="<?php echo site_url('/contact-us'); ?>"><button class="btn btn-frontpage">Find out more</button></a>
            </div>
        </div>
    </div>

<?php get_footer(); ?>