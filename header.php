<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alhasanatheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

        <!-- Back To Top Start -->
        <button id="back-top" class="back-to-top">
            <i class="fa-regular fa-arrow-up"></i>
        </button>

        <!--<< Mouse Cursor Start >>-->  
        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>

        <!-- Offcanvas Area Start -->
        <div class="fix-area">
            <div class="offcanvas__info">
                <div class="offcanvas__wrapper">
                    <div class="offcanvas__content">
                        <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                            <div class="offcanvas__logo">
                                <a href="index.php">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/logo/black-logo.svg" alt="logo-img">
                                </a>
                            </div>
                            <div class="offcanvas__close">
                                <button>
                                <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <p class="text d-none d-xl-block">
                            Nullam dignissim, ante scelerisque the  is euismod fermentum odio sem semper the is erat, a feugiat leo urna eget eros. Duis Aenean a imperdiet risus.
                        </p>
                        <div class="mobile-menu fix mb-3"></div>
                        <div class="offcanvas__contact">
                            <h4>Contact Info</h4>
                            <ul>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a target="_blank" href="#">Main Street, Melbourne, Australia</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a href="mailto:info@example.com"><span class="mailto:info@example.com">info@example.com</span></a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="fal fa-clock"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a target="_blank" href="#">Mod-friday, 09am -05pm</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="far fa-phone"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a href="tel:+11002345909">+11002345909</a>
                                    </div>
                                </li>
                            </ul>
                            <div class="header-button mt-4">
                                <a href="contact.php" class="theme-btn"> Request A Quote <i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                            </div>
                            <div class="social-icon d-flex align-items-center">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas__overlay"></div>

        <!-- Header top section start -->
        

        <!-- Header Section Start -->
        <header class="header-section-10">
            <div class="header-top-section-new">
                <div class="container-fluid">
                    <div class="header-top-wrapper-new">
                        <div class="social-icon d-flex align-items-center">
                            <span>Follow Us</span>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                        <ul class="top-right">
                            <li>
                                <i class="fa-regular fa-envelope"></i>
                                <a href="mailto:info@touron.com">info@touron.com</a>
                            </li>
                            <li>
                                <i class="fa-regular fa-clock"></i>
                                Sun to Friday: 8.00 am - 7.00 pm, Austria
                            </li>
                            <li>
                                <i class="fa-solid fa-phone"></i>
                                <a href="tel:+256214203215">+256 214 203 215</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="header-sticky" class="header-11">
                <div class="container-fluid">
                    <div class="mega-menu-wrapper">
                        <div class="header-main">
                            <div class="logo">
                                <a href="index.php" class="header-logo">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/logo.png" alt="logo-img">
                                </a>
                                <div class="logo-2">
                                    <a href="index.php">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="header-right d-flex justify-content-end align-items-center">
                                <nav id="mobile-menu">
                                    <?php
                                        wp_nav_menu( array(
                                            'theme_location' => 'primary-menu',
                                            'menu_class'     => 'header-main',
                                            'container'      => false,
                                            'depth'          => 3, // allows submenu dropdowns
                                        ) );
                                    ?>
                                </nav>

                                <a href="#0" class="search-trigger search-icon"><i class="fa-regular fa-magnifying-glass"></i></a>
                                <a href="contact.php" class="theme-btn"> Request A Quote <i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                <div class="header__hamburger d-xl-none my-auto">
                                    <div class="sidebar__toggle">
                                        <i class="fas fa-bars"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Search Area Start -->
        <div class="search-wrap">
            <div class="search-inner">
                <i class="fas fa-times search-close" id="search-close"></i>
                <div class="search-cell">
                    <form method="get">
                        <div class="search-field-holder">
                            <input type="search" class="main-search-input" placeholder="Search...">
                        </div>
                    </form>
                </div>
            </div>
        </div>
