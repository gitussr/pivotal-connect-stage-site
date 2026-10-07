<?php

/**
 * Template Name: Blog Template
 * @package pivotalconnect
 * 
 */
get_header();
?>



<section class="page-header @@extraClassName">
    <div class="page-header__bg" style="background-image: url('assets/images/backgrounds/page-header-bg-1-1.jpg');"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2 class="page-header__title"><?php the_title(); ?></h2>
        <ul class="cleenhearts-breadcrumb list-unstyled">
            <li><i class="icon-home"></i> <a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->

<section class="blog-page section-space">
    <div class="container">
        <div class="row gutter-y-60">
            <div class="col-lg-8">
                <div class="row gutter-y-30">

                    <?php
                    $args = array(
                        'post_type'      => 'post',
                        'posts_per_page' => -1,
                        'post_status'    => 'publish'
                    );

                    $blog_query = new WP_Query($args);

                    if ($blog_query->have_posts()) :
                        while ($blog_query->have_posts()) :
                            $blog_query->the_post();
                    ?>

                            <div class="col-md-6">
                                <div class="blog-card wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="000ms">

                                    <a href="<?php the_permalink(); ?>" class="blog-card__image">

                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('full'); ?>
                                        <?php else : ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/default.jpg" alt="<?php the_title_attribute(); ?>" class="img-fluid">
                                        <?php endif; ?>

                                        <div class="blog-card__date">
                                            <span><?php echo get_the_date('d'); ?></span>
                                            <?php echo get_the_date('M'); ?>
                                        </div>

                                    </a>

                                    <div class="blog-card__content" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog-bg-1-1.png');">

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

                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>

                </div>
            </div><!-- /.col-lg-8 -->
            <div class="col-lg-4">
                <div class="sidebar">
                    <aside class="widget-area">
                        <div class="sidebar__form sidebar__single">
                            <h4 class="sidebar__title sidebar__form__title">Search</h4><!-- /.sidebar__title -->
                            <?php echo do_shortcode('[wpdreams_ajaxsearchlite]') ?><!-- /.sidebar__search -->
                        </div><!-- /.sidebar__form sidebar__single -->
                        <div class="sidebar__posts-wrapper sidebar__single">
                            <h4 class="sidebar__title">Latest Posts</h4>

                            <ul class="sidebar__posts list-unstyled">

                                <?php
                                $latest_posts = new WP_Query(array(
                                    'post_type'      => 'post',
                                    'posts_per_page' => 3,
                                    'post_status'    => 'publish'
                                ));

                                if ($latest_posts->have_posts()) :
                                    while ($latest_posts->have_posts()) :
                                        $latest_posts->the_post();
                                ?>

                                        <li class="sidebar__posts__item">

                                            <div class="sidebar__posts__image">
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php if (has_post_thumbnail()) : ?>
                                                        <?php the_post_thumbnail('thumbnail'); ?>
                                                    <?php else : ?>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/default-thumb.jpg" alt="<?php the_title_attribute(); ?>">
                                                    <?php endif; ?>
                                                </a>
                                            </div>

                                            <div class="sidebar__posts__content">

                                                <p class="sidebar__posts__meta m-0">
                                                    <span class="icon-calendar"></span>
                                                    <?php echo get_the_date('d M Y'); ?>
                                                </p>

                                                <h4 class="sidebar__posts__title">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php echo wp_trim_words(get_the_title(), 8); ?>
                                                    </a>
                                                </h4>

                                            </div>

                                        </li>

                                <?php
                                    endwhile;
                                    wp_reset_postdata();
                                endif;
                                ?>

                            </ul>
                        </div>
                        <div class="sidebar__categories-wrapper sidebar__single">
                            <h4 class="sidebar__title">Categories</h4>

                            <ul class="sidebar__categories list-unstyled">

                                <?php
                                $categories = get_categories(array(
                                    'orderby'    => 'count',
                                    'order'      => 'DESC',
                                    'number'     => 5,
                                    'hide_empty' => true
                                ));

                                foreach ($categories as $category) :
                                ?>
                                    <li>
                                        <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>">
                                            <span><?php echo esc_html($category->name); ?></span>
                                            <span>(<?php echo $category->count; ?>)</span>
                                        </a>
                                    </li>
                                <?php endforeach; ?>

                            </ul>
                        </div>
                        <div class="sidebar__tags-wrapper sidebar__single">
                            <h4 class="sidebar__title">Tags</h4>

                            <div class="sidebar__tags">

                                <?php
                                    $tags = get_tags(array(
                                        'number'     => 5,
                                        'hide_empty' => true,
                                        'orderby'    => 'count',
                                        'order'      => 'DESC'
                                    ));

                                if ($tags) :
                                    foreach ($tags as $tag) :
                                ?>

                                    <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>">
                                        <?php echo esc_html($tag->name); ?>
                                    </a>

                                <?php
                                    endforeach;
                                endif;
                                ?>

                            </div>
                        </div>
                    </aside><!-- /.widget-area -->
                </div><!-- /.sidebar -->
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.blog-page section-space -->










































<?php
get_footer();
?>