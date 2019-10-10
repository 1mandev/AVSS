<?php get_header(); ?>

<main>
    <?php while(have_posts( )): the_post( ); ?>
        <?php if(has_post_thumbnail( )): ?>
            <section class="page-single" style="background-image: linear-gradient(to bottom, rgba(255, 193, 7, 0.3) 30%, rgba(255, 152, 0, 0.9)), url('<?php the_post_thumbnail_url(); ?>')"></section>
        <?php else: ?>
            <section class="page-single"></section>
        <?php endif; ?>


    <!-- product -->
        <section class="single-blog">
            <div class="container">
                <div class="single-blog__meta text-center">
                    <h2 class="single-blog__header mb-4">
                        <?php the_title( ); ?>
                    </h2>
                    <p><?php the_date('M d, Y') ?></p>
                </div>

                <div class="row justify-content-center mt-5">
                    <div class="col-md-12 col-sm-12 col-11 col-lg-10">
                        <div class="product__content mt-4">
                            <?php the_content( ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php endwhile; ?>
</main>

<?php get_footer(); ?>