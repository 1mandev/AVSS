<?php get_header(); ?>

<main>
    <?php if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <section class="page-header text-center">
                <div class="container">
                    <div class="page-banner">
                        <h1 class="page-header__title"><?php the_title(); ?></h1>
                    </div>
                </div>
            </section>

            <section class="page-content m-5">
                <div class="container">
                    <?php the_content(); ?>
                </div>
            </section>

        <?php endwhile ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>