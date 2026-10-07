<?php 
/*
*Template Name: About Us
*/
?>
<?php get_header(); ?>

	 

<?php include 'inner-banners.php' ?>


		<?php $main_section = get_field('main_section') ?>
        <section class="faq-one faq-one--about section-space">
            <div class="faq-one__bg"></div>
            <div class="container">
                <div class="row gutter-y-50">
                    <div class="col-xl-6 col-lg-6 wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="100ms">
                        <div class="faq-one__image">
                            <img src="<?php echo $main_section['left_image'] ?>" alt="faq-image">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="faq-one__content">
                            <div class="sec-title">

                                <h6 class="sec-title__tagline @@extraClassName"><?php echo $main_section['subtitle'] ?></h6>

                                <h3 class="sec-title__title"><?php echo $main_section['title'] ?></h3>
                            </div>
                            <?php echo $main_section['text'] ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-space">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-11 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                        <div class="sec-title text-center" style="margin:0 auto 30px;">
                            <h3 class="sec-title__title">More Than a <span class="sec-title__title__inner">Service Provider</span></h3>
                        </div>
                        <p class="faq-one__text">Pivotal Connect is more than a disability support provider. We are a community-focused organisation committed to helping people overcome barriers, navigate complex systems and achieve meaningful outcomes.</p>
                        <p class="faq-one__text">Through NDIS supports, housing and tenancy pathways, advocacy, community participation, counselling supports, social work-informed practice and community initiatives, we help people access opportunities that build long-term independence and belonging.</p>
                        <p class="faq-one__text">Our approach is trauma-informed, culturally responsive and grounded in the belief that real change happens when people feel heard, valued and connected &mdash; recognising the importance of culture, identity, family, community and lived experience in shaping positive outcomes.</p>
                    </div>
                </div>
            </div>
        </section>

        <?php $our_mission = get_field('our_mission') ?>

        <section class="story-one section-space-top cleenhearts-jarallax" data-jarallax data-speed="0.3" style="background-image: url('<?php echo $our_mission['background_image'] ?>');">
            <div class="container">
                <div class="sec-title">

            
                    <h3 class="sec-title__title"><?php echo $our_mission['title'] ?></h3>
                </div>

                <div class="story-one__tabs-box tabs-box">
                    <div class="tabs-content">
                        <div class="tab active-tab" id="year1992" style="display: block;">
                            <div class="row gutter-y-40">
                                <div class="col-xl-3 animated fadeInLeft" data-wow-duration="1500ms" data-wow-delay="100ms">
                                    <div class="story-one__image">
                                        <img src="<?php echo $our_mission['section_image'] ?>" alt="story">
                                    </div>
                                </div>
                                <div class="col-xl-9 animated fadeInRight" data-wow-duration="1500ms" data-wow-delay="100ms">
                                    <div class="story-one__content">
                                        <h3 class="story-one__title"><?php echo $our_mission['section_title'] ?></h3>
                                        <?php echo $our_mission['section_content'] ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </section>

        <section class="section-space pivotal-community-commitment">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-11 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                        <div class="sec-title text-center" style="margin:0 auto 30px;">
                            <h6 class="sec-title__tagline @@extraClassName" style="right:0; margin:0 auto;">Our Commitment</h6>
                            <h3 class="sec-title__title">Our Commitment to <span class="sec-title__title__inner">Community</span></h3>
                        </div>
                        <p class="faq-one__text">Pivotal Connect proudly supports people from all backgrounds and communities. We are committed to providing safe, inclusive and respectful supports for Aboriginal and Torres Strait Islander peoples, M&#257;ori, Pasifika, CALD and LGBTQIA+ communities. We believe diversity strengthens communities and that culturally responsive support is essential to meaningful engagement and empowerment.</p>
                        <p class="faq-one__text">As we continue to grow, our vision extends beyond traditional service models. We are exploring innovative community initiatives and future social impact projects that create opportunities for individuals and families who may not have access to formal funding supports. Through partnerships, lived experience leadership and community collaboration, we aim to build stronger pathways toward independence, connection and social inclusion.</p>
                    </div>
                </div>

                <div class="sec-title text-center" style="margin:50px auto 30px;">
                    <h3 class="sec-title__title">Why Choose <span class="sec-title__title__inner">Pivotal Connect?</span></h3>
                </div>
                <div class="row gutter-y-20 justify-content-center pivotal-why-choose">
                    <?php
                    $pivotal_why_choose_items = array(
                        'Lived Experience Navigating Complex Systems',
                        'Building Independence, Not Dependence',
                        'Registered NDIS Provider',
                        'Housing &amp; Tenancy Expertise',
                        'Counselling &amp; Social Work-Informed Supports',
                        'Advocacy &amp; Community Connection',
                        'Youth Transition &amp; Leaving Care Experience',
                        'M&#257;ori, Pasifika &amp; First Nations Inclusive Practice',
                        'Trauma-Informed &amp; Strengths-Based Approaches',
                        'Person-Centred &amp; Family-Focused Supports',
                        'Flexible, Individualised Support Pathways',
                    );
                    $pivotal_why_choose_colors = array( '#E76100', '#965995', '#68B131' );
                    foreach ( $pivotal_why_choose_items as $pivotal_why_choose_index => $pivotal_why_choose_item ) :
                        $pivotal_why_choose_color = $pivotal_why_choose_colors[ $pivotal_why_choose_index % count( $pivotal_why_choose_colors ) ];
                        ?>
                        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="<?php echo esc_attr( $pivotal_why_choose_index * 50 ); ?>ms">
                            <div class="pivotal-why-choose__item">
                                <span class="pivotal-why-choose__icon" style="background-color: <?php echo esc_attr( $pivotal_why_choose_color ); ?>;">&#10003;</span>
                                <span class="pivotal-why-choose__text"><?php echo $pivotal_why_choose_item; ?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-11 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                        <div class="pivotal-first-nations">
                            <h4 class="pivotal-first-nations__title">First Nations Acknowledgement</h4>
                            <p>Pivotal Connect acknowledges Aboriginal and Torres Strait Islander peoples as the Traditional Owners and Custodians of the lands on which we live, work and provide support services. We pay our respects to Elders past and present and recognise their continuing connection to Country, culture, community and family. We honour the strength, resilience and wisdom of First Nations peoples and remain committed to providing culturally safe, respectful and inclusive supports.</p>
                            <p>We celebrate diversity and proudly support Aboriginal and Torres Strait Islander peoples, Māori, Pasifika, CALD and LGBTQIA+ communities. </p>
                        </div>
                    </div>
                </div>
            </div>

            <style>
                .pivotal-why-choose__item {
                    display: flex;
                    align-items: center;
                    gap: 15px;
                    background: #fff;
                    border: 1px solid var(--cleenhearts-white3, #E0E0E0);
                    border-radius: 10px;
                    padding: 18px 22px;
                    height: 100%;
                }
                .pivotal-why-choose__icon {
                    flex: 0 0 30px;
                    width: 30px;
                    height: 30px;
                    border-radius: 50%;
                    color: #fff;
                    font-size: 14px;
                    line-height: 30px;
                    text-align: center;
                }
                .pivotal-why-choose__text {
                    font-weight: 500;
                }
                .pivotal-first-nations {
                    margin-top: 20px;
                    padding: 30px 35px;
                    border-left: 4px solid #E76100;
                    background: var(--cleenhearts-gray4, #F9F4E8);
                    border-radius: 6px;
                }
                .pivotal-first-nations__title {
                    margin-bottom: 12px;
                }
            </style>
        </section>



		<template>
        <section class="team-one section-space">
            <div class="container">
                <div class="team-one__top">
                    <div class="row gutter-y-30 align-items-center">
                        <div class="col-xxl-12 col-lg-12">
                            <div class="sec-title text-center" style="margin:0 auto;">

                                <h6 class="sec-title__tagline @@extraClassName" style="right:0; margin: 0 auto;">Our expert</h6>
                                <h3 class="sec-title__title">Meet <span class="sec-title__title__inner">Our Team</span></h3>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="team-one__carousel cleenhearts-owl__carousel cleenhearts-owl__carousel--with-shadow cleenhearts-owl__carousel--basic-nav owl-theme owl-carousel" data-owl-options='{
            "items": 3,
            "margin": 30,
            "smartSpeed": 700,
            "loop":true,
            "autoplay": 6000,
            "nav":true,
            "dots":false,
            "navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow-right\"></span>"],
            "responsive":{
                "0":{
                    "items": 1,
                    "margin": 20
                },
                "575":{
                    "items": 1,
                    "margin": 30
                },
                "768":{
                    "items": 2,
                    "margin": 30
                },
                "992":{
                    "items": 3,
                    "margin": 30
                },
                "1200":{
                    "items": 3,
                    "margin": 30
                }
            }
            }'>


                    <?php if ( have_rows( 'team_section' ) ) : ?>
                            <?php while ( have_rows( 'team_section' ) ) : the_row();
                                if ( have_rows( 'team_members' ) ) :  $c=0;?>
                                <?php
                                while ( have_rows( 'team_members' ) ) : the_row();
                                    $image = get_sub_field( 'image' );
                                    $name = get_sub_field( 'name' );
                                    $designation = get_sub_field( 'designation' );
                                ?>
                                  
                                    <div class="item">
                        <div class="team-single">
                            <div class="team-single__image">
                                <img src="<?php echo $image ?>" alt="Pule Salafai">
                                <div class="team-single__content">
                                    
                                    
                                    <div class="team-single__content__inner">
                                        <h4 class="team-single__name"><?php echo $name ?></h4>
                                        <p class="team-single__designation"><?php echo $designation ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                <?php   endwhile; ?> 
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>

                    
                </div>
            </div>
        </section>
		</template>






        <template>
        <section class="subscribe">
            <div class="subscribe__bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/subscribe-bg-1-1.jpg');"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="subscribe__content">
                            <span class="subscribe__title-image icon-email"></span>
                            <h2 class="subscribe__title">Subscribe Now</h2>
                        </div>
                    </div>
                    <div class="col-lg-7 wow fadeInUp">
                        <form action="#" data-url="MAILCHIMP_FORM_URL" class="subscribe__form mc-form" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <input type="email" name="EMAIL" id="subscribe" placeholder="enter your email" class="subscribe__form__input">
                            <button type="submit" class="subscribe__form__btn"><span class="subscribe__form__btn__text">Subscribe now</span> <span class="subscribe__form__btn__icon icon-paper-plane"></span></button>
                        </form>
                        <div class="mc-form__response"></div>
                    </div>
                </div>
            </div>
            <div class="subscribe__shape">
                <div class="subscribe__shape__one"></div>
                <div class="subscribe__shape__two"></div>
            </div>
        </section>
        </template>


<style>
summary#mySummary {
    background-color: #965995;
    color: #efece7;
    padding: 8px 18px;
    max-width: max-content;
    border-radius: 50px;
}

</style>


<script>
  const details = document.getElementById('myDetails');
  const summary = document.getElementById('mySummary');

  // Listen for the toggle event on the details element
  details.addEventListener('toggle', () => {
    if (details.open) {
      summary.textContent = 'Got it, thanks!';
    } else {
      summary.textContent = 'Want to read more about us?';
    }
  });
</script>

        
	 
<?php get_footer(); ?>