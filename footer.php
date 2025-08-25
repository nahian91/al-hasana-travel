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
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/logo/white-log.svg" alt="img">
                                </a>
                            </div>
                            <div class="footer-content">
                                <h3>Subscribe Newsletter</h3>
                                <p>Get Our Latest Deals and Update</p>
                                <div class="footer-input">
                                    <input type="email" id="email2" placeholder="Your email address">
                                    <button class="newsletter-btn theme-btn" type="submit">
                                        Subscribe <i class="fa-sharp fa-regular fa-arrow-right"></i>
                                    </button>
                                </div>
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
                            <ul class="list-items">
                                <li>
                                    <a href="index.php">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php">
                                        About Us
                                    </a>
                                </li>
                                <li>
                                    <a href="news.php">
                                        Blog
                                    </a>
                                </li>
                                <li>
                                    <a href="tour-details.php">
                                        Services
                                    </a>
                                </li>
                                <li>
                                    <a href="tour-details.php">
                                        Tour
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 ps-lg-5 wow fadeInUp wow" data-wow-delay=".6s">
                        <div class="single-widget-items">
                            <div class="widget-head">
                                <h4>Services</h4>
                            </div>
                            <ul class="list-items">
                                <li>
                                    <a href="tour-details.php">
                                        Wanderlust Adventures
                                    </a>
                                </li>
                                <li>
                                    <a href="tour-details.php">
                                        Globe Trotters Travel
                                    </a>
                                </li>
                                <li>
                                    <a href="tour-details.php">
                                        Odyssey Travel Services
                                    </a>
                                </li>
                                <li>
                                    <a href="tour-details.php">
                                        Jet Set Journeys
                                    </a>
                                </li>
                                <li>
                                    <a href="tour-details.php">
                                        Dream Destinations Travel
                                    </a>
                                </li>
                            </ul>
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
                    <p class="wow fadeInUp" data-wow-delay=".3s">
                        Copyright © <span>Turmet,</span> All Rights Reserved.
                    </p>
                    <ul class="bottom-list wow fadeInUp" data-wow-delay=".5s">
                        <li>Terms of use</li>
                        <li>Privacy Environmental Policy</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

<?php wp_footer(); ?>

</body>
</html>
