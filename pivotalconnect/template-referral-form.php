<?php 
/*
*Template Name: Referral From
*/
?>
<?php get_header(); ?>

<style>
	#gform_wrapper_12{
		background-image: url('<?php echo get_template_directory_uri()?>/assets/images/backgrounds/contact-bg-1-1.png');
		padding: 20px 30px 40px;
		border-radius: 20px;
	}
	#gform_wrapper_12 .gform_footer .gform_button {
		display: inline-block;
		vertical-align: middle;
		-webkit-appearance: none;
		border: none;
		outline: none;
		background-color: #FFFFFF;
		padding: 20px 32px 20px 32px;
		transition: 500ms;
		border-radius: 100px;
		font-size: 16px;
		color: #000;
		border: 1px solid #E76100;
	}
</style>

        <?php include 'inner-banners.php' ?>

        <section class="contact-one section-space @@extraClassName">
            <div class="container">
                <div class="row gutter-y-30">
                    <div class="col-lg-12 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <h3 class="sec-title__title text-center"><?php the_field('form_title') ?></h3>
                        <?php echo do_shortcode( '[gravityform id="12" title="false" ajax="true"]' ); ?>
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

	 
<?php get_footer(); ?>