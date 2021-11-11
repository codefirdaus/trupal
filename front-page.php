<?php get_header(); ?>
<?php
$banner1 = get_field('page_banner_1');
$banner2 = get_field('page_banner_2');
$banner3 = get_field('page_banner_3');
$banner4 = get_field('page_banner_4');
?>
    <div class="jumbotron jumbotron-fluid">
        <img src="<?= $banner1['image']; ?>" alt="ourstory-img">
        <div class="jumbotrontitle" style="background: none;">
            <br>
            <h1 style="color: #429792; line-height: 5rem;"><?= $banner1['title']; ?>
                <div data-aos="zoom-in">
                    <a href="<?php echo site_url('/our-story'); ?>"><button class="btn btn-frontpage">Find out more</button></a>
                </div>
            </h1>
        </div>
    </div>
    <div class="jumbotron jumbotron-fluid">
        <img src="<?= $banner2['image']; ?>" alt="howweinnovate-img">
        <div class="jumbotrontitle">
            <br>
            <h1 style="color: #429792; line-height: 5rem;"><?= $banner2['title']; ?>
                <div data-aos="zoom-in">
                    <a href="<?php echo site_url('/our-pride'); ?>"><button class="btn btn-frontpage">Find out more</button></a>
                </div>
            </h1>
        </div>
    </div>
    <div class="jumbotron jumbotron-fluid">
        <img src="<?= $banner3['image']; ?>" alt="ourproducts-img">
        <div class="jumbotrontitle" style="background: radial-gradient(#cccf0936,#fcffea00);">
            <br>
            <h1 style="color: #429792; line-height: 5rem;"><?= $banner3['title']; ?>
                <div data-aos="zoom-in">
                    <a href="<?php echo site_url('/our-products'); ?>"><button class="btn btn-frontpage">Find out more</button></a>
                </div>
            </h1>
        </div>
    </div>
    <div class="jumbotron jumbotron-fluid">
        <img src="<?= $banner4['image']; ?>" alt="ourproducts-img">
        <div class="jumbotrontitle" style="background: radial-gradient(#cccf0936,#fcffea00);">
            <br>
            <h1 style="color: #429792; line-height: 5rem;"><?= $banner4['title']; ?>
                <div data-aos="zoom-in">
                    <a href="<?php echo site_url('/contact-us'); ?>"><button class="btn btn-frontpage">Find out more</button></a>
                </div>
            </h1>
        </div>
    </div>

<?php get_footer(); ?>