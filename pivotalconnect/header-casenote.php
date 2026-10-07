<!doctype html>
<html>
<head>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M4RRXVK8');</script>
<!-- End Google Tag Manager -->
	
	
<meta http-equiv="Content-Type" <?php bloginfo('charset'); ?> />
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title><?php wp_title('|', true, 'right'); ?></title>
<link rel="shortcut icon" href="<?php echo get_option( 'nextstep_favicon' ); ?>" />

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<![endif]-->







<link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700;9..40,800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Castoro&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Schoolbell&amp;display=swap" rel="stylesheet">


    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/bootstrap-select/bootstrap-select.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/tiny-slider/tiny-slider.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/cleenhearts-icons/style.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/swiper/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/owl-carousel/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/owl-carousel/css/owl.theme.default.min.css" />

    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/cleenhearts.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/cleenhearts-one-icons/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/color-1.css">



<link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />



<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M4RRXVK8"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <div class="preloader">
        <div class="preloader__image" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/loader.png);"></div>
    </div>
    
    <div class="page-wrapper">
        <div class="topbar-one topbar-four">
            <div class="container-fluid">
                <div class="topbar-one__inner">
                    <ul class="list-unstyled topbar-one__info">
                        <li class="topbar-one__info__item">

                            <?php $header =  get_field('header', 'option'); ?>
                            <span class="topbar-one__info__icon"><i class="fa-regular fa-location-dot"></i></span>
                            <?php echo $header['address'] ?>
                        </li>
                        <li class="topbar-one__info__item">
                            <span class="topbar-one__info__icon"><i class="fa-light fa-envelope"></i></span>
                            <a href="mailto:<?php echo $header['email'] ?>"> <?php echo $header['email'] ?></a>
                        </li>
                    </ul>

                    <div class="topbar-one__right">
                        <a href="tel:<?php echo $header['phone_number'] ?>" class="main-header__btn">
                            <span class="main-header__btn__icon"><i class="fa-regular fa-phone"></i></span>
                           <?php echo $header['phone_number'] ?> 
                        </a>
                    </div>
                </div>
            </div>
        </div>

        

    

