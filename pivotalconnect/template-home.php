<?php 
/*
*Template Name: Home Page
*/
?>
<?php get_header(); ?>

    
        <section class="main-slider-four">
            <div class="container-fluid">
                <div class="main-slider-four__carousel cleenhearts-owl__carousel cleenhearts-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
            "items": 3,
            "margin": 30,
            "loop": true,
            "autoWidth": true,
            "smartSpeed": 700,
            "nav": false,
            "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
            "dots": false,
            "autoplay": true
        }'>
                    <div class="item">
                        <div class="main-slider-four__image">
                            <img src="<?php the_field('1st_banner_image') ?>" alt="slider">
                        </div>
                    </div>
                    <div class="item">
                        <div class="main-slider-four__image">
                            <img src="<?php the_field('2nd_banner_image') ?>" alt="slider">
                        </div>
                    </div>
                    <div class="item">
                        <div class="main-slider-four__image">
                            <img src="<?php the_field('3nd_banner_image') ?>" alt="slider">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid main-slider-four__container">
                <div class="main-slider-four__content">
                    <div class="main-slider-four__content__left">

                        <?php $under_banner_section = get_field('under_banner_section') ?>
                        <p class="main-slider-four__sub-title"><?php echo esc_attr( $under_banner_section['subtitle'] ); ?></p>
                        
                        <h2 class="main-slider-four__title"><?php echo esc_attr( $under_banner_section['title'] ); ?></h2>
                        
                        <div class="main-slider-four__content__inner">
                            <p class="main-slider-four__text"><?php echo esc_attr( $under_banner_section['text'] ); ?></p>

                            <a href="<?php echo esc_attr( $under_banner_section['arrow_button_link'] ); ?>" class="contact-information__btn cleenhearts-btn">
                                <div class="cleenhearts-btn__icon-box">
                                    <div class="cleenhearts-btn__icon-box__inner"><span class="icon-duble-arrow"></span></div>
                                </div>
                                <span class="cleenhearts-btn__text">Contact Us</span>
                                <style>
                                    .contact-information__btn::after{ display:none; }
                                </style>
                            </a>
                        </div>
                    </div>
                    <a href="tel:61730633261" class="main-slider-four__circle-text circle-text video-popup">
                        <span class="circle-text__logo"><i class="fa-regular fa-phone-rotary"></i></span>
                        
                        <div class="circle-text__curved-circle curved-circle">
                            
                            <div class="circle-text__curved-circle__item curved-circle__item" data-circle-text-options='{
                    "radius": 98,
                    "forceWidth": true,
                    "forceHeight": true}'>
                                <?php echo esc_attr( $under_banner_section['circular_text'] ); ?>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>


        <?php $about_section = get_field('about_section') ?>

        <section class="about-one @@extraClassName section-space">
            <div class="about-one__bg">
                <div class="about-one__bg__border"></div>
                <div class="about-one__bg__inner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/shapes/about-shape-1-1.png');"></div>
            </div>
            <div class="container">
                <div class="row gutter-y-50">
                    <div class="col-xl-6 wow fadeInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                        <div class="about-one__left">
                            <div class="about-one__image">
                                <img src="<?php echo esc_attr( $about_section['round_image'] ); ?>" alt="about" class="about-one__image__one">
                                
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-one__content">
                            <div class="sec-title">

                                <h6 class="sec-title__tagline @@extraClassName"><?php echo esc_attr( $about_section['subtitle'] ); ?></h6>

                              <h3 class="sec-title__title sdsdsdsdsdsd" style="font-weight:400; line-height: 70px;"><?php echo ( $about_section['title'] ); ?></h3>
                                <style>
                                    @media (max-width: 425px) {
                                        h3.sec-title__title.sdsdsdsdsdsd {line-height: 40px !important}
                                    }
                                </style>
                                
                            </div>
                            <div class="about-one__text-box wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                                <div class="about-one__text-box__image">
                                    <img src="<?php echo esc_attr( $about_section['small_image'] ); ?>" alt="about">
                                </div>
                                <p class="about-one__text"><?php echo esc_attr( $about_section['first_text'] ); ?></p>
                            </div>
                            <div class="about-one__wrapper">
                                <p><?php echo esc_attr( $about_section['second_text'] ); ?></p>
                            </div>
                            <div class="contact-information">
                                <a href="<?php echo esc_attr( $about_section['left_button_link'] ); ?>" class="contact-information__btn cleenhearts-btn">
                                    <div class="cleenhearts-btn__icon-box">
                                        <div class="cleenhearts-btn__icon-box__inner"><span class="icon-duble-arrow"></span></div>
                                    </div>
                                    <span class="cleenhearts-btn__text"><?php echo esc_attr( $about_section['left_button_text'] ); ?></span>
                                </a>
                                <div class="contact-information__phone">
                                    <div class="contact-information__phone__icon">
                                        <span class="icon-phone"></span>
                                    </div>
                                    <div class="contact-information__phone__text">
                                        <span><?php echo esc_attr( $about_section['phone_number_text'] ); ?></span>
                                        <h5><a href="tel:<?php echo esc_attr( $about_section['phone_number'] ); ?>"><?php echo esc_attr( $about_section['phone_number'] ); ?></a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shapes/about-shape-1-2.png" alt="cleenhearts" class="about-one__hand">
        </section>

        <section class="service-two section-space" style="padding-top:0">
            <div class="container">
                <div class="service-two__inner">
                    <div class="service-two__bg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/shapes/service-shape-2-1.png);"></div>
                    <div class="row gutter-y-50">



                        <?php if( have_rows('services_overview') ): ?>
                            <?php while( have_rows('services_overview') ): the_row(); 
                                $icon = get_sub_field('icon');
                                $title= get_sub_field('title');
                                $text = get_sub_field('text');
                                $button_link = get_sub_field('button_link');
                                ?>
                                <div class="col-lg-4 col-md-6 wow fadeInUp custom-serviceoverview" data-wow-duration="1500ms" data-wow-delay="00ms">
                                    <div class="service-two__item">
                                        <div class="service-two__icon">
                                            <img src="<?php echo $icon ?>" alt="" style="max-width: 60px;">
                                        </div>
                                        <h3 class="service-two__title"><a href="<?php echo $button_link; ?>"><?php echo $title; ?></a></h3>
                                        <p class="service-two__text"><?php echo $text; ?></p>
                                        <a href="<?php echo $button_link; ?>" class="service-two__btn">
                                            <span class="cleenhearts-one-icon-up-right-arrow"></span>
                                        </a>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>

                        <style>
                            .custom-serviceoverview .service-two__item:hover .service-two__icon img { filter:brightness(0.1) invert(1); }
                        </style>
                        
                    </div>
                </div>
            </div>
        </section>


        <?php $who_we_are_section = get_field('who_we_are_section') ?>

        <section class="about-four section-space" id="about">
            <div class="about-four__bg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/shapes/about-bg-shape-4-1.png);"></div>
            <div class="about-four__inner-bg"></div>
            <div class="container">
                <div class="row gutter-y-50">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-duration="1500ms">
                        <div class="about-four__image">
                            <img src="<?php echo ( $who_we_are_section['left_image'] ); ?>" alt="about">
                            <div class="about-four__experience">
                                <h3 class="about-four__experience__year"><?php echo ( $who_we_are_section['years_number'] ); ?></h3>
                                <p class="about-four__experience__text"><?php echo ( $who_we_are_section['years_text'] ); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-duration="1500ms">
                        <div class="about-four__content">
                            <div class="sec-title sec-title--two @@extraClassName">
                                <div class="sec-title__top">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shapes/sec-title-s-1-1-orange.png" alt="who we are">
                                    <h6 class="sec-title__tagline @@extraClassName" style="color:#E76100"><?php echo ( $who_we_are_section['subtitle'] ); ?></h6>
                                </div>
                                <h3 class="sec-title__title"><?php echo ( $who_we_are_section['title'] ); ?></h3>
                            </div>
                            <p class="about-four__text"><?php echo ( $who_we_are_section['text'] ); ?></p>
                            <a href="<?php echo ( $who_we_are_section['button_link'] ); ?>" class="cleenhearts-btn-two"><?php echo ( $who_we_are_section['button_text'] ); ?></a>
                            <h4 class="about-four__text-bottom"><?php echo ( $who_we_are_section['under_button_text'] ); ?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <?php $service_section = get_field('service_section') ?>
        <section class="service-three section-space" id="services">
            <div class="container">
                <div class="service-three__top">
                    <div class="row gutter-y-40">
                        <div class="col-lg-6 wow fadeInLeft" data-wow-duration="1500ms">
                            <div class="sec-title sec-title--two @@extraClassName">
                                <div class="sec-title__top">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shapes/sec-title-s-1-1.png" alt="our services">
                                    <h6 class="sec-title__tagline @@extraClassName"><?php echo ( $service_section['subtitle'] ); ?></h6>
                                </div>
                                <h3 class="sec-title__title"><?php echo ( $service_section['title'] ); ?></h3>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeInRight" data-wow-duration="1500ms">
                            <div class="service-three__image">
                                <img src="<?php echo ( $service_section['rounded_image'] ); ?>" alt="service">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutter-y-40">



                     <?php
                    $my_query = new WP_Query( array( 'post_type' => 'service', 'orderby' => 'id', 'order' => 'DESC', 'posts_per_page' => '-1' ) );
                    while ($my_query->have_posts()) : $my_query->the_post(); ?>

                        <div class="col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <div class="service-three__item service-three__item--1">
                            <div class="service-three__icon">
                                <span class="cleenhearts-one-icon-medicine"></span>
                            </div>
                            <div class="service-three__content">
                                <h3 class="service-three__title"><?php the_title() ?></h3>
                                <p class="service-three__text"><?php echo mb_strimwidth( get_field('short_description'), 0, 150, '...' ) ?></p>
                            </div>
                        </div>
                    </div>
                    
                    <?php wp_reset_postdata(); endwhile; ?>




                    
                    
                </div>
            </div>
            
        </section>

    <section class="become-volunteer section-space" id="become-volunteer-home">
            <div class="container">
                <div class="row gutter-y-50">
                    <div class="col-lg-6 wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="00ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <div class="become-volunteer__image">
                            <div class="become-volunteer__image__inner">
                                <img src="<?php the_field('form_image') ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInUp;">

						
						<div class="become-volunteer__form form-one">
	<div class="become-volunteer__form__bg" style="background-image: url('https://pivotalconnect.com.au/wp-content/uploads/2024/05/become-volunteer-bg-1-1.png');"></div>
	<h3 class="become-volunteer__form__title">Contact Pivotal Connect</h3>
	<div class="become-volunteer__form__inner">
		<?php echo do_shortcode('[gravityform id="7" title="false"]'); ?>
	</div>
</div>

                    </div>
                </div>
            </div>
        </section>

        <?php $team_section = get_field('team_section') ?>

        <section class="about-info-three section-space">
            <div class="container">
                <div class="about-info-three__inner">
                    <div class="about-info-three__inner__bg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/shapes/about-info-shape-bg-3-1.png);"></div>
                    
                    <div class="about-info-three__inner__top">
                        <div class="row gutter-y-40">
                            <div class="col-lg-6 wow fadeInLeft" data-wow-duration="1500ms">
                                <div class="sec-title sec-title--two @@extraClassName">
                                    <div class="sec-title__top">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shapes/sec-title-s-1-2.png" alt="dedicated team">
                                        <h6 class="sec-title__tagline @@extraClassName"><?php echo ( $team_section['subtitle'] ); ?></h6>
                                    </div>
                                    <h3 class="sec-title__title"><?php echo ( $team_section['title'] ); ?></h3>
                                </div>
                            </div>
                            <div class="col-lg-6 wow fadeInRight" data-wow-duration="1500ms">
                                <div class="about-info-three__image">
                                    <img src="<?php echo ( $team_section['image'] ); ?>" alt="about-info">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="about-info-three__inner__inner">
                        <div class="row gutter-y-30">



                            <?php if ( have_rows( 'team_section' ) ) : ?>
                                <?php while ( have_rows( 'team_section' ) ) : the_row();
                                    if ( have_rows( 'team_cards' ) ) :  $c=0;?>
                                       <?php
                                       while ( have_rows( 'team_cards' ) ) : the_row();
                                           $icon = get_sub_field( 'icon' );
                                               $number = get_sub_field( 'number' );
                                               $big_text = get_sub_field( 'big_text' );
                                               $desc = get_sub_field( 'desc' );
                                       ?>
                                        
                                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                                <div class="about-info-three__funfact about-info-three__funfact--1">
                                                    <div class="about-info-three__funfact__icon">
                                                        <img src="<?php echo $icon; ?>" alt="" style="max-width:40px" class="custom-icon-hover-white">
                                                    </div>
                                                    <h3 class="about-info-three__funfact__title count-box">
                                                        <span class="count-text" data-stop="<?php echo $number ?>" data-speed="500"><?php echo $number ?></span>
                                                        <span><?php echo $big_text; ?></span>
                                                    </h3>
                                                    <p class="about-info-three__funfact__text"><?php echo $desc; ?></p>
                                                </div>
                                            </div>
                                       <?php   endwhile; ?> 
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>

                            <style>
                                .about-info-three__funfact:hover img.custom-icon-hover-white  { filter:brightness(0.1) invert(1); }
                            </style>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php $faq_section = get_field('faq_section') ?>

      <section class="faq-two section-space" id="faq">
            <div class="faq-two__bg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/shapes/faq-shape-bg-2-1.png);"></div>
            
            <div class="container">
                <div class="sec-title sec-title--two sec-title--center">
                    <div class="sec-title__top">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shapes/sec-title-s-1-1.png" alt="faq">
                        <h6 class="sec-title__tagline sec-title--center"><?php echo ( $faq_section['subtitle'] ); ?></h6>
                    </div>
                    <h3 class="sec-title__title"><?php echo ( $faq_section['title'] ); ?></h3>
                </div>
                <div class="row gutter-y-60 align-items-center">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-duration="1500ms">
                        <div class="faq-two__image">
                            <div class="faq-two__image__inner">
                                <img src="<?php echo ( $faq_section['image_1'] ); ?>" alt="faq">
                            </div>
                            <div class="faq-two__image__inner">
                                <img src="<?php echo ( $faq_section['image_2'] ); ?>" alt="faq">
                            </div>
                            <div class="faq-two__image__border"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-duration="1500ms">
                        <div class="cleenhearts-accordion" data-grp-name="cleenhearts-accordion">


                            <?php if ( have_rows( 'faq_section' ) ) : ?>
                                <?php while ( have_rows( 'faq_section' ) ) : the_row();
                                    if ( have_rows( 'all_faq' ) ) :  $c=0;?>
                                       <?php
                                       while ( have_rows( 'all_faq' ) ) : the_row();
                                           $question = get_sub_field( 'question' );
                                           $answer = get_sub_field( 'answer' );
                                       ?>
                                      
                                        <div class="accordion">
                                            <div class="accordion-title">
                                                <h4>
                                                    <?php echo $question; ?>
                                                </h4>
                                                <div class="accordion-title__icon">
                                                    <span class="icon-up-right-arrow"></span>
                                                </div>
                                            </div>
                                            <div class="accordion-content">
                                                <div class="inner">
                                                    <p><?php echo $answer; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                       <?php    endwhile; ?> 
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="testimonials-three testimonials-three--home-4 section-space" id="testimonials">
            <div class="container">
                <?php 
                   $testimonial_section=get_field('testimonial_section');
                   $subtitle=$testimonial_section['subtitle'];
                   $title=$testimonial_section['title'];
                ?>
                <div class="row">
                    <div class="col-xl-5">
                        <div class="testimonials-three__content">
                            <div class="sec-title sec-title--two @@extraClassName">
                                <div class="sec-title__top">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shapes/sec-title-s-1-1.png" alt="testimonial">
                                    <h6 class="sec-title__tagline @@extraClassName"><?php echo $subtitle; ?></h6>
                                </div>
                                <h3 class="sec-title__title"><?php echo $title; ?></h3>
                            </div>
                            <div class="testimonials-three__custome-navs"></div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="cleenhearts-stretch-element-inside-column">
                            <div class="testimonials-three__carousel cleenhearts-owl__carousel owl-theme owl-carousel" data-owl-options='{
                        "items": 1,
                        "margin": 30,
                        "smartSpeed": 700,
                        "loop":true,
                        "autoplay": 6000,
                        "stagePadding": 186,
                        "nav":true,
                        "navContainer": ".testimonials-three__custome-navs",
                        "dots":false,
                        "navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow-right\"></span>"],
                        "responsive":{
                            "0":{
                                "items": 1,
                                "stagePadding": 0
                            },
                            "768":{
                                "items": 1,
                                "stagePadding": 120
                            },
                            "992":{
                                "items": 1,
                                "stagePadding": 186
                            },
                            "1200":{
                                "items": 1,
                                "stagePadding": 50
                            },
                            "1360":{
                                "items": 1,
                                "stagePadding": 80
                            },
                            "1400":{
                                "items": 1,
                                "stagePadding": 100
                            },
                            "1600":{
                                "items": 1,
                                "stagePadding": 233
                            }
                        }
                        }'>


                                <?php if ( have_rows( 'testimonial_section' ) ) : ?>
                                    <?php while ( have_rows( 'testimonial_section' ) ) : the_row();
                                        if ( have_rows( 'all_testimonials' ) ) :  $c=0;?>
                                           <?php
                                           while ( have_rows( 'all_testimonials' ) ) : the_row();
                                               $text = get_sub_field( 'text' );
                                               $name = get_sub_field( 'name' );
                                               $designations = get_sub_field( 'designations' );
                                               $stars = get_sub_field( 'stars' );
                                               $star_ratings = get_sub_field( 'star_ratings' );
                                           ?>
                                           
                                            <div class="item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                                <div class="testimonials-card @@extraClassName">
                                                    <div class="testimonials-card__bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/testimonial-bg-2.png');"></div>
                                                    <div class="testimonials-card__top">
                                                        <div class="testimonials-card__quote">
                                                            <span class="icon-quote-2"></span>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="testimonials-card__content">
                                                        <p class="testimonials-card__text"><?php echo $text; ?></p>
                                                        <div class="testimonials-card__info">
                                                            <div class="testimonials-card__info__left">
                                                                <h4 class="testimonials-card__name"><?php echo $name; ?></h4>
                                                                <span class="testimonials-card__designation"><?php echo $designations; ?></span>
                                                            </div>
                                                            <div class="cleenhearts-ratings testimonials-card__rattings"><?php
                                                                    for ($x = 1; $x <= 5; $x++) {
                                                                        if($x <=  $star_ratings) {
                                                                            echo '<img style="max-width:16px" src="'.get_home_url(). '/wp-content/uploads/2024/07/star-full-2.png'.'" alt="">';
                                                                        }
                                                                    }
                                                                ?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                           <?php  endwhile; ?> 
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    
    
     

     
<?php get_footer(); ?>