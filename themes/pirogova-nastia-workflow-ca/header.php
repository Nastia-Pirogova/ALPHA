<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pirogova-nastia.workflow.ca
 */

?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ALPHA</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
              rel="stylesheet">
       <?php wp_head(); ?>
    </head>
    <body class="body">
    <header class="header">
        <div class="container header-container">
            <nav class="header-navigation ">
                <a href="index.html" class="header-logo">
                    <svg class="logo" width="160px" height="30px">
                        <use class="" href="<?php echo bloginfo('template_url');?>/assets/images/icons.svg#icon-logo"></use>
                    </svg>
                </a>
                <form class="header-navigation__form">
                    <input type="text" name=text" class="header-navigation__form-input"
                           placeholder="Enter City / Postal Code">
                    <svg class="header-navigation__form-input-icon" width="18px" height="18px">
                        <use href="<?php echo bloginfo('template_url');?>/assets/images/icons.svg#search-icon"></use>
                    </svg>
                </form>
                <a class="header-navigation__phone link " href="tel:+12263700170">
                    <svg class="header-navigation__phone-icon" width="18px" height="18px">
                        <use href="<?php echo bloginfo('template_url');?>/assets/images/icons.svg#icon-phone"></use>
                    </svg>
                    <?php the_field("phone_number", 2); ?></a>
            </nav>
            <div class="header-menu">
                <ul class="header-menu__list list ">
                    <li class="header-menu__list-item "><a class="header-menu__list-item-link link " href="#">Appliance
                            Service</a>
                    </li>
                    <li class="header-menu__list-item "><a class="header-menu__list-item-link link " href="#">Maintance
                            Plans</a>
                    </li>
                    <li class="header-menu__list-item "><a class="header-menu__list-item-link link " href="#">Coupons</a>
                    </li>
                    <li class="header-menu__list-item "><a class="header-menu__list-item-link link " href="#"> Reviews</a>
                    </li>
                    <li class="header-menu__list-item "><a class="header-menu__list-item-link link " href="#">About</a>
                    </li>
                    <li class="header-menu__list-item "><a class="header-menu__list-item-link link " href="#"> Contact</a>
                    </li>
                </ul>
                <button type="button" class="header-menu__button">
                    <svg class="header-menu__button-icon" width="18px" height="18px">
                        <use href="<?php echo bloginfo('template_url');?>/assets/images/icons.svg#icon-settings-icon"></use>
                    </svg>
                    BOOK ONLINE
                </button>
            </div>
        </div>
    </header>
