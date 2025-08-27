<?php
/*
Template Name: Tour Packages
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
                        <?php
$tours = new WP_Query(array(
    'post_type'      => 'tour',
    'posts_per_page' => 6,
    'tax_query'      => array(
        array(
            'taxonomy' => 'tour_category',
            'field'    => 'slug', // use slug instead of name
            'terms'    => 'tour-packages', // slug of the category
        ),
    ),
));

if ( $tours->have_posts() ) :
    while ( $tours->have_posts() ) : $tours->the_post(); 
        $price   = get_field('tour_price'); // ACF field for price
        $days    = get_field('tour_days');  // ACF field for duration
        $people  = get_field('tour_people'); // ACF field for capacity
        $country = get_field('tour_country'); // ACF field for location
        ?>
        
        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
            <div class="destination-card-items mt-0">
                <div class="destination-image">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail( 'medium', array( 'alt' => get_the_title() ) ); ?>
                    <?php endif; ?>
                </div>
                <div class="destination-content">
                    <ul class="meta">
                        <li>
                            <i class="fa-thin fa-location-dot"></i>
                            <?php echo esc_html( $country ); ?>
                        </li>
                    </ul>
                    <h5>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h5>
                    <ul class="info">
                        <li>
                            <i class="fa-regular fa-clock"></i>
                            <?php echo esc_html( $days ); ?> Days
                        </li>
                        <li>
                            <i class="fa-thin fa-users"></i>
                            <?php echo esc_html( $people ); ?>+
                        </li>
                    </ul>
                    <div class="price">
                        <h6>৳<?php echo esc_html( $price ); ?></h6>
                        <a href="<?php the_permalink(); ?>" class="theme-btn style-2">
                            View Details <i class="fa-sharp fa-regular fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    <?php endwhile; wp_reset_postdata();
endif;
?>

                    </div>
                </div>
            </div>
        </section>

        <?php get_footer();?>