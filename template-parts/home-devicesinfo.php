<?php
$products = new WP_Query(
    array(
        'post_type' => 'products',
        'posts_per_page' => -1,
        'order' => 'ASC'
    )
);
while ($products->have_posts()) : $products->the_post();
?>
    <section class="avss-devicesinfo">
        <div class="row mx-auto">
            <div class="col-md-8 mx-auto">
                <div class="avss-section-intro text-center">
                    <h1 class="avss-section-intro__header">
                        <?php the_field('product_name'); ?>
                    </h1>
                    <div class="line-small mx-auto my-4"></div>
                    <div class="avss-section-intro__description mx-auto">
                        <?php the_field('product_why'); ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="avss-product__main">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <figure class="avss-product__main--img d-flex justify-content-center">
                        <img src="<?php echo get_template_directory_uri(). '/assets/img/devices/vehiclebg.svg' ?>" class="img-fluid background-img" alt="image" />
                        <img src="<?php echo get_field('product_icon'); ?>" class="img-fluid child-img" alt="image" />
                    </figure>
                </div>

                <div class="col-lg-6 col-md-9 col-sm-10 col-11">
                    <div class="avss-product__main--content mt-5 mt-lg-0 pl-lg-2 pl-xl-5">
                        <h4 class="avss-product__main--heading mb-3">
                            <?php the_field('product_name'); ?> features
                        </h4>
                        <ul class="avss-product__main--list my-5 pr-lg-2  pr-xl-5">
                            <li class="mb-3">
                                <?php the_field('product_feature_info_1'); ?>
                            </li>
                            <li class="mb-3">
                                <?php the_field('product_feature_info_2'); ?>
                            </li>
                            <li>
                                <?php the_field('product_feature_info_3'); ?>
                            </li>
                        </ul>

                        <a href="<?php the_permalink(); ?>" class="btn-custom btn-secondary-custom btn-normal-custom box-shadow-btn mt-2">
                            Learn More <i class="btn-ic icon ion-md-arrow-forward"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php endwhile;
wp_reset_query(); ?>