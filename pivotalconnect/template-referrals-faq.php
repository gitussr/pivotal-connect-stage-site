<?php 
/*
*Template Name: Referrals & FAQ
*/
?>
<?php get_header(); ?>

	 

        <?php include 'inner-banners.php' ?>

        <section class="contact-one section-space @@extraClassName">
            <div class="container">
                <div class="row gutter-y-30">
                    <div class="col-lg-12 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <h3 class="sec-title__title text-center"><?php the_field('form_title') ?></h3>
                        <?php echo do_shortcode('[gravityform id="10" title="false" ajax="true"]') ?>
                    </div>
                </div>
				<div class="custom-text text-center" style="padding-top:18px;">
					<h5 style="padding-bottom:8px;">Looking for the NDIS referral form?<br>Download & email to: <a href="mailto:info@pivotalconnect.com.au">info@pivotalconnect.com.au</a></h5>
					<a href="<?php echo get_template_directory_uri(); ?>/assets/images/client-referral.docx" class="contact-information__btn cleenhearts-btn" download>
						<div class="cleenhearts-btn__icon-box">
							<div class="cleenhearts-btn__icon-box__inner"><span class="icon-duble-arrow"></span></div>
						</div>
						<span class="cleenhearts-btn__text">Download Now</span>
					</a>
					<style>
						.contact-information__btn::after{ opacity:0; }
						.contact-information__btn{ margin-right:0; }
					</style>
				</div>
            </div>
        </section>

        <section class="faq-page-inner section-space">
            <div class="faq-page-inner__bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/faq-inner-bg-1-1.png');"></div><!-- /.faq-page-inner__bg -->
            <div class="container">
                <div class="cleenhearts-accordion row gutter-y-10 justify-content-center" data-grp-name="cleenhearts-accordion">
                    <div class="col-lg-8 wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="00ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">



                    <?php if( have_rows('all_faqs') ): ?>
                        <?php while( have_rows('all_faqs') ): the_row(); 
                                        $question = get_sub_field('question');
                                        $answer= get_sub_field('answer');
                                        ?>
                                        <div class="accordion @@extraClassName">
                                            <div class="accordion-title">
                                                <h4>
                                                    <?php echo $question; ?>
                                                    <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                                </h4>
                                            </div><!-- /.accordian-title -->
                                            <div class="accordion-content" style="display: none;">
                                                <div class="inner">
                                                <?php echo $answer; ?>
                                                </div><!-- /.accordian-content -->
                                            </div>
                                        </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>



   <?php $popup = get_field('popup') ?>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
 
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $popup['popup_title'] ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <?php echo $popup['popup_content'] ?>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
    window.onload = function () {
        OpenBootstrapPopup();
    };
    function OpenBootstrapPopup() {
        jQuery("#exampleModal").modal('show');
    }
</script>


	 
<?php get_footer(); ?>