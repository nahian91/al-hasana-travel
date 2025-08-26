<?php
/*
Template Name: Visa Services
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

        <!-- destination-details Section Start -->
        <section class="destination-details-section fix section-padding">
            <div class="container">
                <div class="destination-details-wrapper">
                    <div class="row g-4">

    <?php
    $visa_category = get_terms(array(
        'taxonomy'   => 'visa-category',
        'hide_empty' => false,
    ));

    if ( ! empty( $visa_category ) && ! is_wp_error( $visa_category ) ) {
        foreach ( $visa_category as $visa_cat ) {
            ?>
            <div class="section-title text-center">
                <h2><?php echo esc_html( $visa_cat->name ); ?></h2>
            </div>

            <?php 
            $args = array(
                'post_type'      => 'visa-service',
                'posts_per_page' => -1,
                'tax_query'      => array(
                    array(
                        'taxonomy' => 'visa-category',
                        'field'    => 'term_id',
                        'terms'    => $visa_cat->term_id,
                    ),
                ),
            );
            $countries = new WP_Query( $args );
            ?>

            <div class="row">
                <?php 
                if ( $countries->have_posts() ) {
                    while ( $countries->have_posts() ) {
                        $countries->the_post();
                        ?>
                        <div class="col-md-3">
                            <div class="activities-items visa-services-box">
                                <div class="activities-image">
                                    <?php 
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail( 'medium', ['alt' => get_the_title()] );
                                    } else {
                                        echo '<img src="' . get_template_directory_uri() . '/assets/img/activities/default.jpg" alt="img">';
                                    }
                                    ?>
                                </div>
                                <div class="activities-content">
                                    <h4>
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                wp_reset_postdata();
                ?>
            </div>
            <br>
            <br>
            <br>
            <?php 
        }
    }
    ?>

                    </div>
                </div>
            </div>
        </section>

      <?php get_footer();?>