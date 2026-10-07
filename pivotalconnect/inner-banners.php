        <section class="page-header @@extraClassName">

            <?php if (has_post_thumbnail( $post->ID ) ){ ?>
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                <div class="page-header__bg" style="background-image: url('<?php echo $image[0]; ?>')"></div>
                <?php } else { ?>
                 <div class="page-header__bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/contact-banner.jpg');"></div>
            <?php } ?>
            
            <div class="container">
                 <h2 class="page-header__title"><?php the_title() ?></h2>
            </div>
        </section>