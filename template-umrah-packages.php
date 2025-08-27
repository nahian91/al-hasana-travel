<?php
/*
Template Name: Umrah Packages
*/

get_header();
?>

        <!-- breadcrumb-wrappe-Section Start -->
        <section class="breadcrumb-wrapper fix bg-cover" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/breadcrumb/breadcrumb.jpg);">
            <div class="container">
                <div class="row">
                    <div class="page-heading">
                        <h2><?php the_title();?></h2>
                        <ul class="breadcrumb-list">
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li><i class="fa-solid fa-chevrons-right"></i></li>
                            <li><?php the_title();?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

           <section class="tour-section section-padding fix">
            <div class="container custom-container">
                <div class="tour-destination-wrapper">
                            <div class="row g-4">
                                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".3s">
                                    <div class="destination-card-items mt-0">
                                        <div class="destination-image">
                                            <img src="assets/img/destination/01.jpg" alt="img">
                                            <div class="heart-icon">
                                                <i class="fa-regular fa-heart"></i>
                                            </div>
                                        </div>
                                        <div class="destination-content">
                                            <ul class="meta">
                                                <li>
                                                    <i class="fa-thin fa-location-dot"></i>
                                                    Indonesia
                                                </li>
                                                <li class="rating">
                                                    <div class="star">
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <p>4.7</p>
                                                </li>
                                            </ul>
                                            <h5>
                                                <a href="tour-details.html">
                                                    Brooklyn Beach Resort Tour
                                                </a>
                                            </h5>
                                            <ul class="info">
                                                <li>
                                                    <i class="fa-regular fa-clock"></i>
                                                     10 Days
                                                </li>
                                                <li>
                                                    <i class="fa-thin fa-users"></i>
                                                     50+
                                                </li>
                                            </ul>
                                            <div class="price">
                                                <h6>$59.00<span>/Per day</span></h6>
                                                <a href="tour-details.html" class="theme-btn style-2">Book Now<i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="page-nav-wrap text-center">
                                <ul>
                                    <li><a class="page-numbers" href="#"><i class="fal fa-long-arrow-left"></i></a></li>
                                    <li><a class="page-numbers" href="#">01</a></li>
                                    <li><a class="page-numbers" href="#">02</a></li>
                                    <li><a class="page-numbers" href="#">03</a></li>
                                    <li><a class="page-numbers" href="#"><i class="fal fa-long-arrow-right"></i></a></li>
                                </ul>
                    </div>
                </div>
            </div>
        </section>

        <?php get_footer();?>