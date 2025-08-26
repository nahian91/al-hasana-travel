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
                            <?php 
                               $header_info = get_field('header_infos', 'option');

                                foreach($header_info as $info) {
                                    ?>

                                    <?php 
                                }
                            ?>
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
    <div class="mean__menu-wrapper">
        <div class="main-menu">
            <nav id="mobile-menu">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'menu-1',
                    'menu_class'     => '', // you can define ul class here if needed
                    'container'      => false,
                    'fallback_cb'    => false,
                ) );
                ?>
            </nav>
        </div>
    </div>
</div>

                        </div>
                    </div>
                </div>
            </div>
        </header>