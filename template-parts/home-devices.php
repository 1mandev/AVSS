<section class="avss-devices container-fluid" id="devices">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="avss-section-intro text-center">
                <h1 class="avss-section-intro__header">
                    Devices - We Build
                </h1>
                <div class="line-small mx-auto my-4"></div>
                <div class="avss-section-intro__description mx-auto">
                    We are producing different types of vehicle security system products based on the customers' needs and preferences. We also make sure the best value for the money.
                </div>
            </div>
        </div>
    </div>

    <div class="avss-devices__main container-fluid">
        <div class="row justify-content-center">

            <?php
            $products = new WP_Query(
                array(
                    'post_type' => 'products',
                    'posts_per_page' => -1,
                    'order' => 'ASC'
                )
            );

            $products_count = 0;

            while ($products->have_posts()) : $products->the_post();
                $products_count++;
                ?>

                <div class="col-md-4 d-flex">
                    <div class="card card-custom

                    <?php if ($products_count % 2 == 0) {
                            echo "card-border-primary";
                        } else {
                            echo "card-border-secondary";
                        } ?>
                
                ">
                        <div class="card-body text-center">
                            <div class="avss-devices__device big-margin">
                                <div class="avss-devices__device--img img-big mx-auto">
                                    <img src="<?php echo get_field('product_icon'); ?>" class="img-fluid img-fluid-custom" alt="image" />
                                </div>
                                <h3 class="avss-devices__device--title title-big my-4 pt-1">
                                    <?php the_field('product_name'); ?>
                                </h3>
                            </div>
                            <div class="avss-devices__description description-big px-sm-3 px-md-0">
                                <?php the_field('product_info'); ?>
                            </div>
                            <div class="avss-devices__footer py-4">
                                <a href="<?php the_permalink(); ?>" class="btn-custom btn-secondary-custom btn-normal-custom box-shadow-btn mt-2">
                                    Learn More <i class="btn-ic icon ion-md-arrow-forward"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endwhile;
            wp_reset_query(); ?>
        </div>
    </div>
</section>