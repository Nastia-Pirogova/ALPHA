<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pirogova-nastia.workflow.ca
 */

?>

<footer class="footer">
    <div class="container ">
        <div class="footer-container">
            <nav class="footer-navigation ">
                <a href="index.html" class="footer-logo">
                    <svg class="logo" width="208px" height="39px">
                        <use class="" href="<?php echo bloginfo('template_url');?>/assets/images/icons.svg#icon-logo"></use>
                    </svg>
                </a>
                <a class="footer-navigation__phone link " href="tel:<?php the_field("phone_number", 2); ?>">
                    <svg class="header-navigation__phone-icon" width="18px" height="18px">
                        <use href="<?php echo bloginfo('template_url');?>/assets/images/icons.svg#icon-phone"></use>
                    </svg>
                    <?php the_field("phone_number", 2); ?></a>
                <a class="footer-navigation__address link " href="<?php the_field("link_address", 2); ?>"><?php the_field("address", 2); ?></a>
                <a class="footer-navigation__mail link " href="mailto:<?php the_field("email", 2); ?>"><?php the_field("email", 2); ?></a>
                <button type="button" class="header-menu__button">
                    <svg class="header-menu__button-icon" width="18px" height="18px">
                        <use href="<?php echo bloginfo('template_url');?>/assets/images/icons.svg#icon-settings-icon"></use>
                    </svg>
                    BOOK ONLINE
                </button>
            </nav>
            <div class="footer-navigation-menu">
                <div class="footer-navigation-inner">
                    <h3 class="footer-navigation-title"> ABOUT COMPANY</h3>
                    <ul class="footer-navigation__list">
                        <li class="footer-navigation__list-item"><a href="#" class="footer-navigation__list-item-link">Maintance
                                Plans</a></li>
                        <li class="footer-navigation__list-item"><a href="#" class="footer-navigation__list-item-link">Coupons</a>
                        </li>
                        <li class="footer-navigation__list-item"><a href="#"
                                                                    class="footer-navigation__list-item-link">Review</a>
                        </li>
                        <li class="footer-navigation__list-item"><a href="#"
                                                                    class="footer-navigation__list-item-link">FAQ</a>
                        </li>
                        <li class="footer-navigation__list-item"><a href="#"
                                                                    class="footer-navigation__list-item-link">Blog</a>
                        </li>
                        <li class="footer-navigation__list-item"><a href="#" class="footer-navigation__list-item-link">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="footer-navigation-inner">
                    <h3 class="footer-navigation-title">CUSTOMER SERVICES</h3>
                    <ul class="footer-navigation__list">
                        <li class="footer-navigation__list-item"><a href="#" class="footer-navigation__list-item-link">Residential</a>
                        </li>
                        <li class="footer-navigation__list-item"><a href="#" class="footer-navigation__list-item-link">Commercial</a>
                        </li>
                        <li class="footer-navigation__list-item"><a href="#"
                                                                    class="footer-navigation__list-item-link">Repair</a>
                        </li>
                        <li class="footer-navigation__list-item"><a href="#" class="footer-navigation__list-item-link">Installation</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-navigation-inner">
                    <h3 class="footer-navigation-title">HELP AND SUPPORT</h3>
                    <ul class="footer-navigation__list">
                        <li class="footer-navigation__list-item"><a href="#" class="footer-navigation__list-item-link">Appliance
                                Repair Warranty</a></li>
                        <li class="footer-navigation__list-item"><a href="#" class="footer-navigation__list-item-link">Cancellation
                                Policy</a></li>
                        <li class="footer-navigation__list-item"><a href="#" class="footer-navigation__list-item-link">Privacy
                                Policy</a></li>
                        <li class="footer-navigation__list-item"><a href="#" class="footer-navigation__list-item-link">Careers</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-policy"><a href="#">All rights reserved © 2005-2021</a></div>
        <ul class="footer__soc-list list">
            <li class="footer__soc-list-item">
                <a href="<?php the_field("youtube_link", 2); ?>" class="footer__soc-link link">
                    <svg class="footer__soc-icon" width="18px" height="18px">
                        <use href="<?php echo bloginfo('template_url');?>/assets/images/icons.svg#icon-youtube"></use>
                    </svg>
                </a>
            </li>
            <li class="footer__soc-list-item">
                <a href="<?php the_field("facebook_link", 2); ?>" class="footer__soc-link link">
                    <svg class="footer__soc-icon" width="18px" height="18px">
                        <use href="<?php echo bloginfo('template_url');?>/assets/images/icons.svg#icon-facebook"></use>
                    </svg>
                </a>
            </li>
            <li class="footer__soc-list-item">
                <a href="<?php the_field("pinterest_link", 2); ?>" class="footer__soc-link link">
                    <svg class="footer__soc-icon" width="18px" height="18px">
                        <use href="<?php echo bloginfo('template_url');?>/assets/images/icons.svg#icon-pinterest"></use>
                    </svg>
                </a>
            </li>
            <li class="footer__soc-list-item">
                <a href="<?php the_field("instagram-link", 2); ?>" class="footer__soc-link link">
                    <svg class="footer__soc-icon" width="18px" height="18px">
                        <use href="<?php echo bloginfo('template_url');?>/assets/images/icons.svg#icon-instagram"></use>
                    </svg>
                </a>
            </li>
        </ul>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>