<?php 
/*
*Template Name: All Services
*/
?>
<?php get_header(); ?>

	 

       <?php include 'inner-banners.php' ?>





        <section class="event-details section-space">
            <div class="container">
                <div class="row gutter-y-60">
                    <div class="col-lg-8">
                        <div class="event-details__content">
                            <!-- <div class="event-details__image wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/events/event-d-1-1.jpg" alt="event-details">
                            </div> -->
                            
                            <h3 class="event-details__title"><?php the_field('service_title_text');?></h3><!-- /.event-details__title -->
                            <div class="event-details__text">
                                <?php the_field('first_content') ?>
                            </div><!-- /.event-details__text -->
                            <div class="event-details__inner">
                                <div class="row gutter-y-30">
                                    <div class="col-md-6 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                                        <div class="event-details__inner__image">
                                            <img src="<?php the_field('first_image') ?>">
                                        </div><!-- /.event-details__inner__image -->
                                    </div><!-- /.col-md-6 -->
                                    <div class="col-md-6 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                                        <div class="event-details__inner__image">
                                            <img src="<?php the_field('second_image') ?>">
                                        </div><!-- /.event-details__inner__image -->
                                    </div><!-- /.col-md-6 -->
                                </div><!-- /.row -->
                                <div class="event-details__inner__content mt-5">
                                    <?php the_field('second_content') ?>
                                </div><!-- /.event-details__inner__content -->
                            </div><!-- /.event-details__inner -->
                        </div><!-- /.event-details__content -->
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="contact-one__form" style="padding:35px 20px 45px;">
                                <div class="contact-one__form__bg" style="background-image: url('assets/images/backgrounds/contact-bg-1-1.png');"></div><!-- /.contact-one__form__bg -->
                                <h2 class="contact-one__title">Leave us a Message</h2>
                                

                                
<?php echo do_shortcode('[gravityform id="8" title="false" html_class="contact-one__form__inner form-one wow fadeInUp"]'); ?>

                            </div>
						
							<div class="other-logo-img">
								<img src="<?php the_field('other_logo') ?>" class="img-fluid">
							</div>

						
                        </div>
                </div>
            </div>
        </section>


        <script>
            console.log("test")
            customFormField = document.querySelector('#custom-form-hidden-title-name-for-custom-coding')
            customFormField.value = "<?php the_title() ?>"
        </script>


<?php get_footer(); ?>