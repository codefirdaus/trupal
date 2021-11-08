<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="popup-overlay">
        <div class="popup">
            <p>We use cookie to personalize and enhance your experience on our site. Visit our privacy and policy to learn more. By using our site, you agree to our use of cookies.</p>
            <a href="javascript:;" class="cookieClose"><b> Cookie Setting</b></a>
            <a href="javascript:;" class="cookieSubmit"><b> Accept</b></a>
        </div>
    </div>
    <div class="navcolor">
        <div class="container" style="border: none;">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span><i class="fa fa-bars"></i></span>
                    </button>
                    <div>
                    <a class="navbar-brand" href="<?php echo site_url(); ?>"><img style="width: 100px;" src="<?php echo get_theme_file_uri('/images/logo/trupal-logo.png'); ?>" alt="trupal-logo"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="<?php echo site_url('/ourstory') ?>">Our Story</a>
                                <?php if(is_page('/ourstory')) { ?>
                                    <a class="nav-link active" aria-current="page" href="<?php echo site_url('/ourstory') ?>">Our Story</a>
                                <?php } ?>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url('/our-pride') ?>">Our Pride</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url('/products') ?>">Our Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url('/contact-us') ?>">Contact Us</a>
                            </li>
                        </ul>
                        <div class="wrapper">
                            <form id="searchform" action="https://gravitas.my">
                                <div class="search-box">
                                    <input id="searchingbox" type="text" placeholder="Search" class="input">
                                    <!-- <input type="submit" value="Submit" class="submit"> -->
                                </div>
                            </form>
                            <button class="iconbtn">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </div>
                        
                        <button class="btn" style="text-align: right;">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </button>
                        <button class="btn" style="text-align: right;">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </nav>
        </div>
    </div>