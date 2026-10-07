    <?php $footer_section =  get_field('footer_section', 'option'); ?>

        <footer class="footer-four">
            <div class="footer-four__bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/footer-bg-4-1.jpg');"></div>
            <div class="container">
                <div class="footer-four__top">
                    <div class="row gutter-y-40 align-items-center">
                        <div class="col-xl-3">
                            <div class="footer-four__logo">
                                <a href="<?php echo get_home_url(); ?>">
                                    <img src="<?php echo $footer_section['logo'] ?>" alt="logo" width="161">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9">
                            <div class="footer-four__info">
                                <div class="footer-four__info__item">
                                    <div class="footer-four__info__icon">
                                        <span class="icon-location"></span>
                                    </div>
                                    <a href="<?php echo $footer_section['google_maps_link_for_address'] ?>" class="footer-four__info__text"><?php echo $footer_section['address'] ?></a>
                                </div>
                                <div class="footer-four__info__item">
                                    <div class="footer-four__info__icon">
                                        <span class="icon-phone"></span>
                                    </div>
                                    <a href="tel:<?php echo $footer_section['phone_number'] ?>" class="footer-four__info__text"><?php echo $footer_section['phone_number'] ?></a>
                                </div>
                                <div class="footer-four__info__item">
                                    <div class="footer-four__info__icon">
                                        <span class="icon-envelope"></span>
                                    </div>
                                    <a href="mailto:<?php echo $footer_section['email'] ?>" class="footer-four__info__text"><?php echo $footer_section['email'] ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutter-y-40">
                    <div class="col-xl-5 col-lg-12 col-md-8 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <div class="footer-widget footer-widget--about">
                            <h2 class="footer-widget__title"><?php echo $footer_section['about_title'] ?></h2>
                            <p class="footer-widget__about-text"><?php echo $footer_section['about_content'] ?></p>
							<div class="footer-four-btn">
                            	<a href="<?php echo $footer_section['under_about_button_link'] ?>" class="cleenhearts-btn-two">
                                <?php echo $footer_section['under_about_button_text'] ?>
                                <span class="icon-paper-plane"></span></a>
								<a class="inquiry-btn-footer" href="https://forms.office.com/Pages/ResponsePage.aspx?id=tEKoVu3i4EKCWKG6WrWH9yhIneBNMH5DrmwepJfe3fJURDZIMEdOQUY0VEUxU1c3U0wzRFI4WklNSiQlQCN0PWcu" target="_blank" style="padding:7px 14px; font-size:14px; font-weight:700; border-radius:6px; background:#E76100; color:#fff; margin-bottom:8px; display:inline-block;">Feedback and Complaints</a>
							</div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                        <div class="footer-widget footer-widget--links">
                            <h2 class="footer-widget__title"><?php echo $footer_section['menu_title'] ?></h2>
                           

                            <?php
                                $defaults = array(
                                    'theme_location'  => 'footer',
                                    'menu'            => '',
                                    'container'       => 'ul',
                                    'container_class' => '',
                                    'container_id'    => '',
                                    'menu_class'      => 'list-unstyled footer-widget__links',
                                    'menu_id'         => '',
                                    'echo'            => true,
                                    'fallback_cb'     => 'wp_page_menu',
                                    'before'          => '',
                                    'after'           => '',
                                    'link_before'     => '',
                                    'link_after'      => '',
                                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                    'depth'           => 0,
                                    'walker'          => ''
                                );
                                wp_nav_menu( $defaults );
                            ?>
                        </div>
                    </div>
                    
                    <div class="col-xl-4 col-lg-4 col-md-5 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                        <div class="footer-widget footer-widget--gallery">
                            <h2 class="footer-widget__title"><?php echo $footer_section['last_column_title'] ?></h2>
                            <div class="footer-widget__gallery">
                                <img src="<?php echo $footer_section['flag_image'] ?>" alt="">
                            </div>
                            <p style="color:#fff; font-size: 13px; line-height: 18px; padding-top: 10px;"><small><?php echo $footer_section['text'] ?></small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-four__bottom">
                <div class="container">
                    <div class="footer-four__bottom__inner text-center d-block">
                        <p class="footer-four__copyright">
							&copy; Copyright <span class="dynamic-year"></span> Pivotal Connect | All Rights Reserved | <strong>ABN:</strong> 32674328182 | <strong>NDIS Registration #:</strong> 4050161355  
                        </p>
                        <p class="footer-four__copyright">
							Build with ❤ by <a href="https://creativus-design.com/" style="color:#E76100;">Creativus Design</a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>


    </div>

 <!--    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-light.png" width="155" alt="" /></a>
            </div>
            
            <div class="mobile-nav__container"></div>
            

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:admin@pivotalconnect.com.au">admin@pivotalconnect.com.au</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:0422 506 032">0422 506 032</a>
                </li>
            </ul>
            <div class="mobile-nav__social">
                <a href="https://facebook.com/">
                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                    <span class="sr-only">Facebook</span>
                </a>
                <a href="https://twitter.com/">
                    <i class="fab fa-twitter" aria-hidden="true"></i>
                    <span class="sr-only">Twitter</span>
                </a>
                <a href="https://linkedin.com/" aria-hidden="true">
                    <i class="fab fa-linkedin-in"></i>
                    <span class="sr-only">Linkedin</span>
                </a>
                <a href="https://youtube.com/" aria-hidden="true">
                    <i class="fab fa-youtube"></i>
                    <span class="sr-only">Youtube</span>
                </a>
            </div>
        </div>
    </div> -->
    
    <div class="search-popup search-popup--two">
        <div class="search-popup__overlay search-toggler"></div>
        
        <div class="search-popup__content">
            <form role="search" method="get" class="search-popup__form" action="#">
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="cleenhearts-btn">
                    <span><i class="icon-search"></i></span>
                </button>
            </form>
        </div>
        
    </div>
    

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top scroll-to-top--two">
        <span class="scroll-to-top__text">back top</span>
        <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
    </a>



    <script src="<?php echo get_template_directory_uri(); ?>/assets/vendors/jquery/jquery-3.7.0.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/vendors/tiny-slider/tiny-slider.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/vendors/swiper/js/swiper-bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/vendors/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/vendors/wow/wow.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/vendors/imagesloaded/imagesloaded.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/vendors/isotope/isotope.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/vendors/countdown/countdown.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/vendors/jquery-circleType/jquery.circleType.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/vendors/jquery-lettering/jquery.lettering.min.js"></script>
    
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/cleenhearts.js"></script>





<?php wp_footer(); ?>
</body>
</html>