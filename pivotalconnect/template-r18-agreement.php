<?php
/*
*Template Name: R18 Rooming Accommodation Agreement
*/
?>
<?php get_header(); ?>

<style>
	.r18-form-wrapper .gform_wrapper {
		background-image: url('<?php echo get_template_directory_uri()?>/assets/images/backgrounds/contact-bg-1-1.png');
		padding: 20px 30px 40px;
		border-radius: 20px;
	}
	/* Match every text-style input to the form theme's own textarea look
	   (20px radius, no border) instead of GF's default thin-bordered,
	   barely-rounded text input — one consistent field style throughout. */
	.r18-form-wrapper .gform-body .gfield .ginput_container input:not([type="radio"]):not([type="checkbox"]):not([type="submit"]):not([type="button"]):not([type="image"]):not([type="file"]):not([type="hidden"]),
	.r18-form-wrapper .gform-body .gfield .ginput_container select,
	.r18-form-wrapper .gform-body .gfield .ginput_container .gform-datepicker {
		font-family: "DM Sans", sans-serif;
		font-size: 16px;
		border: none;
		border-radius: 20px;
		background-color: #ffffff;
		padding: 12px 12px 12px 30px;
		box-shadow: 0 1px 4px 0 rgba(18,25,97,0.08);
		width: 100%;
		height: 60px;
	}
	.r18-form-wrapper .gform_wrapper .gform_footer .gform_button {
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
	.r18-intro {
		max-width: 820px;
		margin: 0 auto 30px;
	}
	.r18-intro p {
		margin-bottom: 16px;
	}
	.r18-resource-links {
		display: flex;
		flex-wrap: wrap;
		justify-content: center;
		gap: 16px;
		text-align: center;
		margin-bottom: 30px;
	}
	/* Pivotal-owned fields are read-only/disabled on the front end and
	   server-enforced regardless (see R18_Prefill::enforce_integrity) —
	   this is display styling only, so residents don't try editing them. */
	.r18-form-wrapper .r18-prefilled-note input[readonly],
	.r18-form-wrapper .r18-prefilled-note textarea[readonly],
	.r18-form-wrapper .r18-prefilled-note input[disabled] {
		background-color: #f0f0f0;
		cursor: not-allowed;
	}
	.r18-form-wrapper .r18-prefilled-note__label {
		font-size: 12px;
		color: #777;
		margin: 4px 0 0;
	}
	/* Plain-language helper text (brief §18): official R18 wording stays in
	   the field label (black); this is the grey explanatory text below it. */
	.r18-form-wrapper .gfield_description {
		color: #777;
		font-size: 13px;
		margin-top: 4px;
	}
</style>

		<?php include 'inner-banners.php' ?>

		<section class="contact-one section-space @@extraClassName">
			<div class="container">

				<div class="r18-intro wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
					<h3 class="sec-title__title text-center">Rooming Accommodation Agreement (Form R18)</h3>
					<p>
						A Rooming Accommodation Agreement is the official record, required under the
						Residential Tenancies and Rooming Accommodation Act 2008, of the terms you and
						Pivotal Connect agree to for your room — things like the rent, what's included,
						and how notices are sent. Completing the digital form below is usually the easiest
						way to do this: your provider's information, payment methods and the services
						provided are already filled in and can't be edited, so you only need to check the
						remaining details and fill in your own. Once submitted, a completed copy is emailed
						to you automatically.
					</p>
					<p>
						If you'd rather fill out the official paper form yourself instead, you can download
						it directly from the Residential Tenancies Authority using the button below.
					</p>
				</div>

				<?php
				$house_rules_url = '';
				if ( class_exists( 'R18_Plugin' ) ) {
					$r18 = R18_Plugin::get_instance();
					if ( $r18->pivotal ) {
						$house_rules_url = $r18->pivotal->get_email_settings()['house_rules_url'];
					}
				}
				?>
				<div class="r18-resource-links wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
					<a href="https://www.rta.qld.gov.au/forms-resources/forms/forms-for-rooming-accommodation/rooming-accommodation-agreement-form-r18" class="contact-information__btn cleenhearts-btn" target="_blank" rel="noopener">
						<div class="cleenhearts-btn__icon-box">
							<div class="cleenhearts-btn__icon-box__inner"><span class="icon-duble-arrow"></span></div>
						</div>
						<span class="cleenhearts-btn__text">Download Official Form R18</span>
					</a>
					<?php if ( $house_rules_url ) : ?>
						<a href="<?php echo esc_url( $house_rules_url ); ?>" class="contact-information__btn cleenhearts-btn" target="_blank" rel="noopener">
							<div class="cleenhearts-btn__icon-box">
								<div class="cleenhearts-btn__icon-box__inner"><span class="icon-duble-arrow"></span></div>
							</div>
							<span class="cleenhearts-btn__text">Download House Rules</span>
						</a>
					<?php endif; ?>
				</div>

				<div class="row gutter-y-30 r18-form-wrapper">
					<div class="col-lg-12 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
						<?php
						if ( class_exists( 'R18_Plugin' ) && get_option( 'r18_gravity_form_id' ) ) {
							echo do_shortcode( '[gravityform id="' . (int) get_option( 'r18_gravity_form_id' ) . '" title="false" description="false" ajax="true"]' );
						} else {
							echo '<p>' . esc_html__( 'This form is temporarily unavailable. Please contact us directly.', 'pivotalconnect' ) . '</p>';
						}
						?>
					</div>
				</div>

			</div>
		</section>

<?php get_footer(); ?>
