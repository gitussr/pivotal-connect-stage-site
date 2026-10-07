<?php get_header(); ?>



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
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <div class="blog-details">
                            <div class="blog-card blog-card-four @@extraClassName wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                                <a href="blog-details-right.html" class="blog-card__image">
                                    <?php the_post_thumbnail('full'); ?>
                                    <div class="blog-card__date"><span><?php echo get_the_date('d'); ?></span>
                                        <?php echo get_the_date('M'); ?></div><!-- /.blog-card__date -->
                                </a><!-- /.blog-card__image -->
                                <div class=" blog-card-four__content">
                                    <ul class="list-unstyled blog-card-four__meta">
                                        <li><a href="#">
                                                <span class="icon-user"></span>
                                                <?php the_author(); ?></a></li>
                                    </ul><!-- /.list-unstyled blog-card-four__meta -->
                                    <h3 class="blog-card__title"><a href="blog-details-right.html"><?php the_title(); ?></a></h3><!-- /.blog-card__title -->
                                    <p class="blog-card-four__text blog-card-four__text--two"><?php echo the_content(); ?></p><!-- /.blog-card-four__text -->
                                </div><!-- /.blog-card-four__content -->
                            </div><!-- /.blog-card -->
                            <div class="blog-details__meta">
                                <div class="blog-details__tags">
                                    <h4 class="blog-details__meta__title">Tags:</h4><!-- /.blog-details__meta__title -->
                                    <div class="blog-details__tags__box">
                                        <?php 
                                            $tags = get_the_tags();
                                            if ($tags) :
                                                foreach ($tags as $tag) :
                                        ?>
                                                    <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>"><?php echo esc_html($tag->name); ?></a>
                                        <?php
                                                endforeach;
                                            endif;
                                        ?>
                                    </div><!-- /.blog-details__tag__box-->
                                </div><!-- /.blog-details__tags -->
                            </div><!-- /.blog-details__meta -->
                            <div class="pt-4 pt-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <?php
                                        $prev_post = get_previous_post();
                                        if (!empty($prev_post)) :
                                        ?>
                                            <a href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>" class="comments-one__card__reply">Previous</a>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-lg-6 text-end">
                                        <?php
                                        $next_post = get_next_post();
                                        if (!empty($next_post)) :
                                        ?>
                                            <a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>" class="comments-one__card__reply">Next</a>
                                        <?php endif; ?>
                                    </div>
                            </div>
                        </div><!-- /.blog-details -->
                    </div><!-- /.col-xl-8 col-lg-10 -->
                </div><!-- /.row -->

                <div class="row">

                </div>
            </div><!-- /.container -->
        </section><!-- /.blog-page section-space -->


    </div><!-- /.page-wrapper -->


<?php get_footer(); ?>
