<?php get_header(); ?>

<main>
    <section class="page-header text-center">
        <div class="container">
            <div class="page-banner">
                <i class="icon ion-md-information-circle-outline page-header__icon"></i>
                <h1 class="page-header__title">About Us</h1>
                <p class="page-header__text">One Stop Vehicle Security System Solution</p>
            </div>
        </div>
    </section>
    <?php
    while (have_posts()) : the_post(); ?>
        <section class="page-content m-5">
            <div class="container">
                <?php the_content(); ?>
            </div>
        </section>
    <?php endwhile ?>
</main>

<?php get_footer(); ?>