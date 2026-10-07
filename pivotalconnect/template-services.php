<?php 
/*
*Template Name: All Services
*/
?>
<?php get_header(); ?>

	 

        <?php include 'inner-banners.php' ?>

	 
        <section class="events-list-page section-space">
            <div class="container">
                <div class="row gutter-y-30">
                    



                    <?php
                    $my_query = new WP_Query( array( 'post_type' => 'service', 'orderby' => 'id', 'order' => 'DESC', 'posts_per_page' => '-1' ) );
                    while ($my_query->have_posts()) : $my_query->the_post(); ?>

                        <div class="col-lg-12 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <div class="event-card-four align-items-center">
                            <a href="#" class="event-card-four__image">
                                <img src="<?php the_field('thumbnail_image') ?>">
                                <!-- <div class="event-card-four__date">
                                    <span>03</span>
                                    <span>Sep</span>
                                </div> -->
                            </a>
                            <div class="event-card-four__content">
                                <!-- <div class="event-card-four__time">
                                    <i class="event-card-four__time__icon fa fa-clock"></i>10:00 aM - 2.00 PM
                                </div> -->
                                <h4 class="event-card-four__title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
                                <div class="event-card-four__text"><?php the_field('short_description') ?></div>
                                <a href="<?php the_permalink() ?>" class="contact-information__btn cleenhearts-btn">
                                    <div class="cleenhearts-btn__icon-box">
                                        <div class="cleenhearts-btn__icon-box__inner"><span class="icon-duble-arrow"></span></div>
                                    </div>
                                    <span class="cleenhearts-btn__text">Read More</span>
                                </a>

                                <style>
                                    .contact-information__btn::after { display:none; }
                                </style>
                            </div>
                        </div>
                    </div>
                    
                    <?php wp_reset_postdata(); endwhile; ?>
                    
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.events-list-page section-space -->



<?php get_footer(); ?>