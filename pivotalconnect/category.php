<?php get_header(); ?>

<section class="page-header">
    <div class="page-header__bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/page-header-bg-1-1.jpg');"></div>

    <div class="container">
        <h2 class="page-header__title">
            <?php single_cat_title(); ?>
        </h2>

        <ul class="cleenhearts-breadcrumb list-unstyled">
            <li>
                <i class="icon-home"></i>
                <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
            </li>
            <li>
                <?php single_cat_title(); ?>
            </li>
        </ul>
    </div>
</section>

<section class="blog-page section-space">
    <div class="container">

        <?php if (category_description()) : ?>
            <div class="mb-5">
                <?php echo category_description(); ?>
            </div>
        <?php endif; ?>

        <div class="row gutter-y-30">

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>

                    <div class="col-md-6">
                        <div class="blog-card wow fadeInUp"
                            data-wow-duration="1500ms"
                            data-wow-delay="000ms">

                            <a href="<?php the_permalink(); ?>" class="blog-card__image">

                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('large'); ?>
                                <?php endif; ?>

                                <div class="blog-card__date">
                                    <span><?php echo get_the_date('d'); ?></span>
                                    <?php echo get_the_date('M'); ?>
                                </div>

                            </a>

                            <div class="blog-card__content"
                                style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog-bg-1-1.png');">

                                <h3 class="blog-card__title">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>

                                <a href="<?php the_permalink(); ?>" class="blog-card__link">
                                    <span class="blog-card__link__front">
                                        <span class="icon-duble-arrow"></span>
                                    </span>

                                    <span class="blog-card__link__back">
                                        <span class="icon-duble-arrow"></span>
                                        Read More
                                    </span>
                                </a>

                            </div>

                        </div>
                    </div>

                <?php endwhile; ?>
            <?php else : ?>

                <div class="col-12">
                    <h3>No posts found.</h3>
                </div>

            <?php endif; ?>

        </div>

        <div class="row mt-5">
            <div class="col-12">

                <?php
                the_posts_pagination(array(
                    'mid_size'  => 2,
                    'prev_text' => '&laquo; Previous',
                    'next_text' => 'Next &raquo;',
                ));
                ?>

            </div>
        </div>

    </div>
</section>

<?php get_footer(); ?>