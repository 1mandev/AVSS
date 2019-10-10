<?php get_header(); ?>

<main>

    <?php if (has_post_thumbnail()) : ?>
        <section class="page-product text-center" 
        style=" background-image: linear-gradient( to bottom, rgba(255, 193, 7, 0.3) 30%, 
            rgba(255, 152, 0, 0.8)),  url('<?php the_post_thumbnail_url(); ?>');
        background-repeat: no-repeat; background-size: cover; background-position: center;"></section>

    <?php else : ?>
        <section class="page-product text-center"></section>
    <?php endif; ?>



    <?php while (have_posts()) : the_post(); ?>
        <!-- product -->
        <section class="product">
            <div class="row mx-auto">
                <div class="col-md-8 mx-auto">
                <div class="avss-section-intro text-center pt-2">
                        <h1 class="avss-section-intro__header">
                            <?php the_field('product_name'); ?>
                        </h1>
                        <div class="line-small mx-auto my-4"></div>
                    </div>
                </div>
            </div>

            <div class="container mb-5">
                <div class="row justify-content-center">
                    <div class="col-md-12 col-sm-12 col-11 col-lg-10">
                        <div class="product__content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container product__price mt-5 pt-3 text-center">
            <div class="avss-product__main--img d-flex justify-content-center mb-5">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/devices/vehiclebg.svg'; ?>" class="img-fluid background-img" alt="image" />
                        <img src="<?php echo get_field('product_icon'); ?>" class="img-fluid child-img" alt="image" />
                    </div>
                <h4 class="product__price-prev">Tk. <?php the_field('product_price') ?>/- </h4>
                <p class="product__price-text">Now Avaiable At</p>
                <h2 class="product__price-offer">Tk. <?php the_field('product_offer_price') ?>/-</h2>
            </div>

            <div class="contact-button text-center mt-5">
                <a href="<?php echo site_url('/contact') ?>" class="btn-custom btn-primary-custom btn-lg-custom box-shadow-btn">
                    contact now <i class="btn-ic icon ion-md-arrow-forward"></i>
                </a>
            </div>

            <div class="product__info">
                <div class="row mx-auto">
                    <div class="col-md-8 mx-auto">
                        <div class="avss-section-intro text-center">
                            <h1 class="avss-section-intro__header">
                                why buy this product
                            </h1>
                            <div class="line-small mx-auto my-4"></div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row justify-content-center">

                        <?php
                            $pft = 'product_feature_title_';
                            $pfi = 'product_feature_info_';

                            for ($i = 1; $i < 4; $i++) :
                                $pft .= $i;
                                $pfi .= $i;
                                ?>

                            <div class="col-md-4 d-flex flex-column flex-md-row">
                                <div class="card card-custom">
                                    <div class="card-body text-center">
                                        <div class="product__view">
                                            <div class="product__view--icon">
                                                <i class="icon ion-md-star"></i>
                                            </div>
                                            <h3 class="avss-devices__device--title title-big my-4 pt-1">
                                                <?php the_field($pft); ?>
                                            </h3>
                                        </div>
                                        <div class="avss-devices__description pb-3 px-sm-3 px-md-0">
                                            <?php the_field($pfi); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php $pft = 'product_feature_title_';
                                $pfi = 'product_feature_info_';
                            endfor;  ?>

                    </div>
                </div>
            </div>
        </section>

    <?php endwhile; ?>
</main>

<?php get_footer(); ?>