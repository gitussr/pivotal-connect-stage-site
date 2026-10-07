<?php
/*
*Template Name: Housing & Home Supports
*/
?>
<?php get_header(); ?>

<?php include 'inner-banners.php' ?>

<?php
/*
 * The page content is authored as one flowing rich-text field (h2/h3/p/ul).
 * To present it as distinct visual sections — matching the About Us page's
 * composition — it is split here at its own existing <h2>/<h3> boundaries and
 * re-wrapped in section markup below. No heading, paragraph, or list text is
 * added, removed, or reworded; only its presentation changes.
 */
$housing_content = '';
while ( have_posts() ) : the_post();
	$housing_content = apply_filters( 'the_content', get_the_content() );
endwhile;

$housing_h2_chunks = preg_split( '/<h2>/i', $housing_content );
$housing_intro      = trim( array_shift( $housing_h2_chunks ) );

$housing_sections = [];
foreach ( $housing_h2_chunks as $housing_chunk ) {
	$housing_h2_pieces = array_pad( explode( '</h2>', $housing_chunk, 2 ), 2, '' );
	$housing_h2_title  = trim( $housing_h2_pieces[0] );
	$housing_h2_body   = $housing_h2_pieces[1];

	$housing_h3_chunks = preg_split( '/<h3>/i', $housing_h2_body );
	$housing_h2_lead     = trim( array_shift( $housing_h3_chunks ) );

	$housing_subs = [];
	foreach ( $housing_h3_chunks as $housing_h3_chunk ) {
		$housing_h3_pieces = array_pad( explode( '</h3>', $housing_h3_chunk, 2 ), 2, '' );
		$housing_subs[]     = [
			'title' => trim( $housing_h3_pieces[0] ),
			'body'  => trim( $housing_h3_pieces[1] ),
		];
	}

	$housing_sections[ $housing_h2_title ] = [
		'lead' => $housing_h2_lead,
		'subs' => $housing_subs,
	];
}

$housing_what_we_do = $housing_sections['What We Do'] ?? null;
$housing_approach   = $housing_sections['Our Approach'] ?? null;

$housing_img = get_home_url() . '/wp-content/uploads/2024/07/';
?>

<!-- Intro: image + existing lead paragraph, matching the About Us "faq-one" split -->
<section class="faq-one section-space">
	<div class="faq-one__bg"></div>
	<div class="container">
		<div class="row gutter-y-50 align-items-center">
			<div class="col-xl-6 col-lg-6 wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="100ms">
				<div class="faq-one__image">
					<img src="<?php echo esc_url( $housing_img . 'housing-1-slider.png' ); ?>" alt="Housing & Home Supports">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
				<div class="faq-one__content housing-content__inner">
					<?php echo $housing_intro; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php if ( $housing_what_we_do ) : ?>

<!-- "What We Do" section header (existing heading text, reusing the sec-title component) -->
<section class="section-space-top">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-10 col-lg-11 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
				<div class="sec-title text-center" style="margin:0 auto;">
					<h3 class="sec-title__title mb-5">What We <span class="sec-title__title__inner">Do</span></h3>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
$housing_sub_total  = count( $housing_what_we_do['subs'] );
$housing_sub_images = [ 'emgacc.png', 'housing-2-slider.png' ];

foreach ( $housing_what_we_do['subs'] as $housing_sub_i => $housing_sub ) :
	$housing_is_last = ( $housing_sub_i === $housing_sub_total - 1 );

	// The final subsection (Support for Families and Domestic Violence) gets a
	// full-width background-image break, matching the About Us "story-one" section.
	if ( $housing_is_last && $housing_sub_total === 3 ) :
?>
<section class="story-one section-space-top cleenhearts-jarallax" data-jarallax data-speed="0.3" style="background-image: url('<?php echo esc_url( $housing_img . 'accomodation-banner.jpg' ); ?>');">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-9 col-lg-10 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
				<div class="story-one__content housing-content__inner">
					<h3><?php echo $housing_sub['title']; ?></h3>
					<?php echo $housing_sub['body']; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
	else :
		$housing_sub_img = $housing_sub_images[ $housing_sub_i ] ?? null;
		$housing_reverse = ( $housing_sub_i % 2 === 1 );
?>
<section class="section-space-bottom">
	<div class="container">
		<div class="row gutter-y-40 align-items-center<?php echo $housing_reverse ? ' flex-row-reverse' : ''; ?>">
			<?php if ( $housing_sub_img ) : ?>
			<div class="col-xl-5 col-lg-6 wow <?php echo $housing_reverse ? 'fadeInRight' : 'fadeInLeft'; ?>" data-wow-duration="1500ms" data-wow-delay="100ms">
				<div class="faq-one__image">
					<img src="<?php echo esc_url( $housing_img . $housing_sub_img ); ?>" alt="<?php echo esc_attr( wp_strip_all_tags( $housing_sub['title'] ) ); ?>">
				</div>
			</div>
			<div class="col-xl-7 col-lg-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
			<?php else : ?>
			<div class="col-lg-12 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
			<?php endif; ?>
				<div class="housing-content__inner">
					<h3><?php echo $housing_sub['title']; ?></h3>
					<?php echo $housing_sub['body']; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
	endif;
endforeach;
endif;
?>

<?php if ( $housing_approach ) :
	// Convert the existing "Our Approach" <ul><li> list into the same card-grid
	// treatment the About Us page uses for "Why Choose Pivotal Connect" — same
	// list items, no new text, just a stronger visual presentation.
	$housing_approach_items = [];
	if ( preg_match_all( '/<li>(.*?)<\/li>/is', $housing_approach['lead'], $housing_li_matches ) ) {
		$housing_approach_items = $housing_li_matches[1];
	}
	$housing_approach_colors = [ '#E76100', '#965995', '#68B131' ];
?>
<section class="section-space pivotal-housing-approach">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-10 col-lg-11 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
				<div class="sec-title text-center" style="margin:0 auto 30px;">
					<h3 class="sec-title__title">Our <span class="sec-title__title__inner">Approach</span></h3>
				</div>
			</div>
		</div>
		<?php if ( $housing_approach_items ) : ?>
		<div class="row gutter-y-20 justify-content-center pivotal-why-choose">
			<?php foreach ( $housing_approach_items as $housing_item_i => $housing_item ) :
				$housing_item_color = $housing_approach_colors[ $housing_item_i % count( $housing_approach_colors ) ];
			?>
			<div class="col-lg-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="<?php echo esc_attr( $housing_item_i * 50 ); ?>ms">
				<div class="pivotal-why-choose__item">
					<span class="pivotal-why-choose__icon" style="background-color: <?php echo esc_attr( $housing_item_color ); ?>;">&#10003;</span>
					<span class="pivotal-why-choose__text"><?php echo $housing_item; ?></span>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
		<?php endif; ?>
	</div>

	<style>
		.pivotal-housing-approach .pivotal-why-choose__item {
			display: flex;
			align-items: center;
			gap: 15px;
			background: #fff;
			border: 1px solid var(--cleenhearts-white3, #E0E0E0);
			border-radius: 10px;
			padding: 18px 22px;
			height: 100%;
		}
		.pivotal-housing-approach .pivotal-why-choose__icon {
			flex: 0 0 30px;
			width: 30px;
			height: 30px;
			border-radius: 50%;
			color: #fff;
			font-size: 14px;
			line-height: 30px;
			text-align: center;
		}
		.pivotal-housing-approach .pivotal-why-choose__text {
			font-weight: 500;
		}
	</style>
</section>
<?php endif; ?>

<!-- CTA (unchanged buttons/links, same markup as before) -->
<section class="section-space-bottom">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-9">
				<div class="housing-content__cta">
					<a href="<?php echo esc_url( home_url( '/referral-form/' ) ); ?>" class="contact-information__btn cleenhearts-btn">
						<div class="cleenhearts-btn__icon-box">
							<div class="cleenhearts-btn__icon-box__inner"><span class="icon-duble-arrow"></span></div>
						</div>
						<span class="cleenhearts-btn__text">Make a Referral</span>
					</a>
					<a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="contact-information__btn cleenhearts-btn cleenhearts-btn--border">
						<div class="cleenhearts-btn__icon-box">
							<div class="cleenhearts-btn__icon-box__inner"><span class="icon-duble-arrow"></span></div>
						</div>
						<span class="cleenhearts-btn__text">Contact Us</span>
					</a>
					<style>
						.contact-information__btn::after{ display:none; }
					</style>
				</div><!-- /.housing-content__cta -->
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
