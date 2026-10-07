<?php 
/*
*Template Name: Contact Page
*/
?>
<?php get_header(); ?>

	 

        <?php include 'inner-banners.php' ?>

        

        <section class="contact-one section-space @@extraClassName" id="contact-page-form">
            <div class="container">
                <div class="row gutter-y-30 justify-content-center">
					<template>
                    <div class="col-lg-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <div class="contact-one__map">
                            <div class="google-map contact-one__google__map">
                                <?php the_field('map_code') ?>
                            </div>
                            <!-- /.google-map -->
                            <div class="contact-one__info">
                                <div class="contact-one__info__item">
                                    <div class="contact-one__info__icon">
                                        <span class="icon-location"></span>
                                    </div><!-- /.contact-one__info__icon -->
                                    <div class="contact-one__info__content">
                                        <h4 class="contact-one__info__title">Mailing Address</h4>
                                        <address class="contact-one__info__text"><?php the_field('address') ?> </address>
                                    </div><!-- /.contact-one__info__content -->
                                </div><!-- /.contact-one__info__item -->
                                <div class="contact-one__info__item">
                                    <div class="contact-one__info__icon">
                                        <span class="icon-phone"></span>
                                    </div><!-- /.contact-one__info__icon -->
                                    <div class="contact-one__info__content">
                                        <h4 class="contact-one__info__title">Quick Contact</h4>
                                        <a href="tel:<?php the_field('phone_number') ?>" class="contact-one__info__text contact-one__info__text--link"><?php the_field('phone_number') ?></a>
                                    </div><!-- /.contact-one__info__content -->
                                </div><!-- /.contact-one__info__item -->
                                <div class="contact-one__info__item">
                                    <div class="contact-one__info__icon">
                                        <span class="icon-envelope"></span>
                                    </div><!-- /.contact-one__info__icon -->
                                    <div class="contact-one__info__content">
                                        <h4 class="contact-one__info__title">support email</h4>
                                        <a href="mailto:<?php the_field('support_email') ?>" class="contact-one__info__text contact-one__info__text--link"><?php the_field('support_email') ?></a>
                                    </div><!-- /.contact-one__info__content -->
                                </div><!-- /.contact-one__info__item -->
                            </div><!-- /.contact-one__info -->
                        </div><!-- /.contact-one__map -->
                    </div><!-- /.col-lg-6 -->
					</template>
					
                    <div class="col-lg-8 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                        <div class="contact-one__form">
                            <div class="contact-one__form__bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/contact-bg-1-1.png');"></div><!-- /.contact-one__form__bg -->
                            <h2 class="contact-one__title"><?php the_field('form_title') ?></h2>
                            

							<?php echo do_shortcode('[gravityform id="6" title="false" html_class="contact-one__form__inner contact-form-validated form-one wow fadeInUp"]') ?>


                        </div><!-- /.contact-one__form -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.contact-one -->



        <style>
            .cleenhearts-btn__icon-box {background: #E76100}
            .contact-one__info__icon { border: 1px solid #68B131 }
            .contact-one__info__icon span { color: #68B131}
            .contact-one__info__item:hover .contact-one__info__icon span { color:#fff; }
            .contact-one__info__icon::after { background-color:#E76100 }
            .contact-one__google__map iframe { height:850px !important }

        </style>

	 
<?php get_footer(); ?>