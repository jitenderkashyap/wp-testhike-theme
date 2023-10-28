<!doctype html>
<html>
<head>
    <title><?php the_title(); ?></title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=2.0,shrink-to-fit=no">
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()."/assets/css/minify.css"; ?>"> 
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()."/assets/css/nav.css"; ?>"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- minify js -->
    <script src="<?php echo get_template_directory_uri()."/assets/js/minify.js"; ?>"></script>
</head>
<body class="antialiased" >
<div class="body-content" >
<nav class="sina-nav mobile-sidebar navbar-fixed" >
    <div class="container d-flex align-items-center justify-content-between">

        <div class="sina-nav-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sina-nav" aria-expanded="false">
				<i class="fa fa-bars"></i>
			</button>
            <a class="sina-brand social-on navbar-brand" href="<?php echo site_url(); ?>" >
                <img src="<?php echo get_header_image(); ?>" alt="<?php echo bloginfo('blogname'); ?>" />
            </a>
        </div><!-- .navbar-header -->

    <div class="collapse navbar-collapse" id="sina-nav" >
        <?php
         wp_nav_menu(
            array(
                "theme_location"=>"primary-menu",
                "menu_class"=>"sina-menu"
            )
         ); 
        ?>
    </div><!-- list of menus -->


    <div class="extension-nav">
        <ul>
            <!-- Authentication Links -->
                <li class="nav-item">
                    <a class="nav-link" href="/">Login</a>
                </li>

                <li class="menu-item-has-children">
                    <a aria-label="Profile" href="#"  >
                        <i class="fa fa-user"></i>
                    </a>
                <ul class="sub-menu shop-menu profile-links">
                    <li><a href="#" >Test</a></li>
                </ul>

                
        </ul>
    </div><!-- .extension-nav -->
</nav>
<div class="content-section">
