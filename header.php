<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<title>Test Theme</title>
<meta name="author" content="tansh">
<meta name="description" content="HTML Landing Page Teamplate">
<meta name="keywords" content="digital marketing, leads, pay per click, advertising, social media, SEO, email marketing">
<!-- FAVICON FILES -->
<link href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon" sizes="144x144">
<link href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/apple-touch-icon-120-precomposed.png" rel="apple-touch-icon" sizes="120x120">
<link href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/apple-touch-icon-76-precomposed.png" rel="apple-touch-icon" sizes="76x76">
<link href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/favicon.png" rel="shortcut icon">
<!-- CSS FILES -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/iconfont.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/plugins.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/color.css">

<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<div id="dtr-wrapper" class="clearfix">

    <!-- preloader starts -->
    <div class="dtr-preloader">
        <div class="dtr-preloader-inner">
            <div class="dtr-loader">Loading...</div>
        </div>
    </div>
    <!-- preloader ends -->

    <!-- Small Devices Header
============================================= -->
    <div class="dtr-responsive-header header-with-slick-menu fixed-top">
        <div class="container">

            <!-- small devices logo -->
            <div class="dtr-responsive-header-left"> <a class="dtr-logo" href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-dark.png" alt="logo"></a> </div>
            <!-- small devices logo ends -->

            <!-- menu button -->
            <button id="dtr-menu-button" class="dtr-hamburger" type="button"><span class="dtr-hamburger-lines-wrapper"><span class="dtr-hamburger-lines"></span></span></button>
        </div>
        <div class="dtr-responsive-header-menu"></div>
    </div>
    <!-- Small Devices Header ends
============================================= -->

    <!-- header starts
============================================= -->
    <header id="dtr-header-global" class="fixed-top">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">

                <!-- header left starts -->
                <div class="dtr-header-left">

                    <!-- logo -->
                    <a class="logo-default dtr-scroll-link" href="#home"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-dark.png" alt="logo"></a>

                    <!-- logo on scroll -->
                    <a class="logo-alt dtr-scroll-link" href="#home"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-dark.png" alt="logo"></a>
                    <!-- logo on scroll ends -->

                </div>
                <!-- header left ends -->

                <!-- menu starts-->
                <div class="main-navigation">
                    <ul class="sf-menu dtr-nav dark-nav-on-load dark-nav-on-scroll">
                        <li> <a class="nav-link" href="#home">Home</a> </li>
                        <li> <a class="nav-link" href="#services">Features</a> </li>
                        <li> <a class="nav-link" href="#team">The Team</a> </li>
                        <li> <a class="nav-link" href="#reviews">Reviews</a> </li>
                        <li> <a class="nav-link" href="#pricing">Pricing</a> </li>
                        <li> <a class="nav-link" href="#blog">Blog</a> </li>
                        <li> <a class="nav-link" href="#contact">Contact</a> </li>
                    </ul>
                </div>
                <!-- menu ends -->

            </div>
        </div>
    </header>
    <!-- header ends