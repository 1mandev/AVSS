<?php get_header(); ?>

<main>
    <section class="page-header text-center">
        <div class="container">
            <div class="page-banner">
                <i class="icon ion-md-create page-header__icon"></i>
                <h1 class="page-header__title">Blog</h1>
                <p class="page-header__text">Read our latest Posts</p>
            </div>
        </div>
    </section>

    <!-- blogs -->
    <section class="blogs">
        <div class="row mx-auto justify-content-center">
            <div class="col-lg-8 col-md-10 col-11">

                <?php if (have_posts()) :
                    while (have_posts()) : the_post(); ?>

                        <div class="card card-custom-blog">
                            <?php if(has_post_thumbnail()) : ?>
                                <div class="blogs__image" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></div>

                            <?php else: ?>
                                <div class="blogs__image"></div>
                            <?php endif; ?>


                            <div class="card-body">
                                <div class="blogs__meta">
                                    <span><?php the_date('M d, Y') ?></span>
                                </div>
                                <div class="blogs__content">
                                    <a class="blogs__content--title" href="#">
                                        <h2><?php the_title(); ?></h2>
                                    </a>
                                    <p class="blogs__content--excerpt">
                                        <?php echo wp_trim_words(get_the_content(), 60); ?>
                                    </p>
                                    <a href="<?php the_permalink(); ?>" class="btn-custom btn-secondary-custom btn-normal-custom box-shadow-btn mt-2">
                                        Learn More <i class="btn-ic icon ion-md-arrow-forward"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                    <?php endwhile; ?>

                    <div class="pagination-box text-center m-auto">

                        <?php
                            $paginations_args = array(
                                'mid_size'           => 1,
                                'prev_text'          => _x('&laquo;', 'previous set of posts'),
                                'next_text'          => _x('&raquo;', 'next set of posts'),
                                'screen_reader_text' => __('Posts navigation'),
                            );
                            echo the_posts_pagination($paginations_args); ?>
                    </div>

                <?php else : ?>
                    <div class="card mb-4">
                        <h1>Write something awesome ..</h1>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </section>
</main>


<?php get_footer(); ?>