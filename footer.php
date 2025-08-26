<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alhasanatheme
 */

?>

<!-- Footer Section Start -->
    <footer class="footer-section fix bg-cover" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/footer/footer-bg.jpg);">
        <div class="container">
            <div class="footer-widget-wrapper-new">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-8 col-sm-6 wow fadeInUp wow" data-wow-delay=".2s">
                        <div class="single-widget-items text-center">
                            <div class="widget-head">
                                <a href="index.php">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/logo.png" alt="img">
                                </a>
                            </div>
                            <div class="footer-content">
                                <h3>About Us</h3>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto exercitationem quo quas itaque corrupti quae voluptate earum quidem laudantium illum.</p>
                                <p>Get Our Latest Deals and Update</p>
                                <div class="social-icon d-flex align-items-center justify-content-center">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 ps-lg-5 wow fadeInUp wow" data-wow-delay=".4s">
                        <div class="single-widget-items">
                            <div class="widget-head">
                                <h4>Quick Links</h4>
                            </div>
                           <?php
wp_nav_menu( array(
    'theme_location' => 'footer-1',     // registered location
    'menu_class'     => 'list-items',  // class for <ul>
    'container'      => false,          // remove <div>
    'fallback_cb'    => false           // no fallback <page list>
) );
?>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 ps-lg-5 wow fadeInUp wow" data-wow-delay=".6s">
                        <div class="single-widget-items">
                            <div class="widget-head">
                                <h4>Services</h4>
                            </div>
                            <?php
wp_nav_menu( array(
    'theme_location' => 'footer-2',     // registered location
    'menu_class'     => 'list-items',  // class for <ul>
    'container'      => false,          // remove <div>
    'fallback_cb'    => false           // no fallback <page list>
) );
?>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 ps-xl-5 wow fadeInUp wow" data-wow-delay=".6s">
                        <div class="single-widget-items">
                            <div class="widget-head">
                                <h4>Contact Us</h4>
                            </div>
                            <div class="contact-info">
                                <div class="contact-items">
                                    <div class="icon">
                                        <i class="fa-regular fa-location-dot"></i>
                                    </div>
                                    <div class="content">
                                        <h6>9550 Bolsa Ave #126, <br>
                                            United States
                                        </h6>
                                    </div>
                                </div>
                                <div class="contact-items">
                                    <div class="icon">
                                        <i class="fa-regular fa-envelope"></i>
                                    </div>
                                    <div class="content">
                                        <h6>
                                            <a href="mailto:info@touron.com">info@touron.com</a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="contact-items">
                                    <div class="icon">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                    <div class="content">
                                        <h6>
                                            <a href="tel:+256214203215">+256 214 203 215</a> <br>
                                            <a href="tel:+10987654321">+1 098 765 4321</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="footer-wrapper">
                    <p class="wow fadeInUp" data-wow-delay=".5s">
                        Developed by <a href="https://infinityflamesoft.com/" target="_blank" rel="noopener">Infinity Flame Soft</a>.
                    </p>
                                                <?php
wp_nav_menu( array(
    'theme_location' => 'footer-3',     // registered location
    'menu_class'     => 'bottom-list',  // class for <ul>
    'container'      => false,          // remove <div>
    'fallback_cb'    => false           // no fallback <page list>
) );
?>
                </div>
            </div>
        </div>
    </footer>

<?php wp_footer(); ?>

</body>
</html>
