<?php 
/*
*Template Name: Private Confidential Form Page
*/
?>
<?php get_header(); ?>

	 

        <?php include 'inner-banners.php' ?>



        <section class="contact-one section-space @@extraClassName">
            <div class="container">
                <div class="row gutter-y-30">
                    <div class="col-lg-12 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <div class="big-block confidential-form">
                            <?php echo do_shortcode('[gravityform id="5" title="false" ajax="true"]') ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>


	 
<?php get_footer(); ?>