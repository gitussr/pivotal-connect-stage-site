<?php 
/*
*Template Name: Career
*/
?>
<?php get_header(); ?>

	 

        <?php include 'inner-banners.php' ?>

        <section class="why-choose-one why-choose-one--volunteer section-space">
            <div class="why-choose-one--volunteer__bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/why-choose-bg-2-1.jpg');"></div><!-- /.why-choose-one__volunteer__bg -->
            <div class="container">
                <div class="row gutter-y-50">
                    <div class="col-lg-6">
                        <div class="why-choose-one__image">
                            <div class="why-choose-one__image__inner">
                                <img class="wow fadeInUp animated" data-wow-delay="100ms" src="<?php the_field('small_image_1') ?>" alt="why-choose-one" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                                <img class="wow fadeInUp animated" data-wow-delay="300ms" src="<?php the_field('small_image_2') ?>" alt="why-choose-one" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                            </div><!-- /.why-choose-one__image__inner -->
                            <div class="why-choose-one__image__inner">
                                <img class="wow fadeInUp animated" data-wow-delay="200ms" src="<?php the_field('big_image') ?>" alt="why-choose-one" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
                            </div><!-- /.why-choose-one__image__inner -->
                        </div><!-- /.why-choose-one__image -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="why-choose-one__content">
                            <div class="sec-title">


                                <h3 class="sec-title__title"><?php the_field('main_title') ?></h3><!-- /.sec-title__title -->
                            </div><!-- /.sec-title -->
                           <?php the_field('main_content') ?>
                        </div><!-- /.why-choose-one__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>

        <section class="contact-one section-space @@extraClassName" id="career-page-form">
            <div class="container">
                <div class="row gutter-y-30">
                    <div class="col-lg-12 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <h3 class="sec-title__title text-center" style="padding-bottom:20px;"><?php the_field('form_title') ?></h3>
                        <?php echo do_shortcode('[gravityform id="2" title="false" ajax="true"]') ?>
                    </div>
                </div>
            </div>
        </section>



        <section class="faq-one section-space" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/why-choose-bg-2-1.jpg');">
            <div class="container">
                <?php 
                   $more_information_section=get_field('more_information_section');
                   $section_left_image=$more_information_section['section_left_image'];
                   $right_top_title=$more_information_section['right_top_title'];
                   $right_top_sub_text=$more_information_section['right_top_sub_text'];
                ?>
                <div class="row gutter-y-50">
                    <div class="col-xl-6 col-lg-6 wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="100ms">
                        <div class="faq-one__image">
                            <img src="<?php echo $section_left_image['url']; ?>" alt="<?php echo $section_left_image['alt']; ?>" />
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="faq-one__content">
                            <div class="sec-title">
                                <h3 class="sec-title__title"><?php echo $right_top_title; ?></h3>
                            </div>
                            <p class="faq-one__text"><b><?php echo $right_top_sub_text; ?></b></p>
                            <div class="cleenhearts-accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms" data-grp-name="cleenhearts-accordion">

                                <?php if ( ! have_rows( 'more_information_section' ) ) {
                                  return false;
                                    }
                                    if ( have_rows( 'more_information_section' ) ) : $num=1; ?>
                                  <?php while ( have_rows( 'more_information_section' ) ) : the_row();
                                      if ( have_rows( 'accordian_items' ) ) : ?>

                                             <?php
                                             while ( have_rows( 'accordian_items' ) ) : the_row();

                                                 $accordian_question = get_sub_field( 'accordian_question' );
                                                 $accordian_answer = get_sub_field( 'accordian_answer' );
                                                 $active="";
                                                 if ($num==1) {
                                                  $active="active";
                                                 }
                                             ?>
                                             
                                              


                                              <div class="accordion one<?php echo $num; ?> <?php echo $active; ?>">
                                                <div class="accordion-title">
                                                    <h4>
                                                        <?php echo $accordian_question; ?>
                                                        <span class="accordion-title__icon"></span>
                                                    </h4>
                                                </div>
                                                <div class="accordion-content">
                                                    <div class="inner">
                                                        <?php echo $accordian_answer; ?>
                                                    </div>
                                                </div>
                                            </div>



                                             <?php $num++; endwhile; ?> 
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