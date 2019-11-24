<?php get_header(); ?>
<main class="dealer-main">
    <section class="page-header text-center">
        <div class="container">
            <div class="page-banner">
                <i class="icon ion-md-business page-header__icon"></i>
                <h1 class="page-header__title">Dealers</h1>
                <p class="page-header__text">our trusted dealers</p>
            </div>
        </div>
    </section>

    <!-- dealer -->
    <section class="dealer">
        <div class="mx-auto">
            <div class="avss-section-intro text-center">
                <h1 class="avss-section-intro__header">
                    FIND YOUR NEAREST SHOP
                </h1>
                <div class="line-small mx-auto my-4"></div>
                <p>(TAP ON DIVISIONS TO EXPAND THE LIST)</p>
            </div>
        </div>


        <div class="accordion" id="accordionExample">
        
        <?php
                $dealers_division = new WP_Query(
                    array(
                        'post_type' => 'dealers',
                        'posts_per_page' => -1,
                    )
                );
                $division_count = 0;
            
                $arr = [
                    '1' => "ঢাকা বিভাগ",
                    '2' => "চট্টগ্রাম বিভাগ",
                    '3' => "রাজশাহী বিভাগ",
                    '4' => "বরিশাল বিভাগ",
                    '5' => "খুলনা বিভাগ",
                    '6' => "রংপুর বিভাগ",
                    '7' => "সিলেট বিভাগ",
                    '8' => "ময়মনসিংহ বিভাগ",
                ];
                    
            foreach( $arr as $k=>$v):

            
        ?>



        <div class="accordion-box">
          <div class="container" id="heading<?php echo $k;?>">

            <div class="btn dealer-division" type="button" role="button" data-toggle="collapse"
              data-target="#collapse<?php echo $k;?>" aria-expanded="false" aria-controls="collapse<?php echo $k;?>">

              <div class="dealer-division__title">
                <span class="dealer-division__icon mr-2"><i class="icon ion-md-locate"></i></span>
                <?php echo $v;
                    
                 ?>
              </div>

            </div>

          </div>

          <div id="collapse<?php echo $k;?>" class="collapse" aria-labelledby="heading<?php echo $k;?>"
            data-parent="#accordionExample">
            <div class="container my-4">
              <div class="row justify-content-center">
                <?php while ($dealers_division->have_posts()) : $dealers_division->the_post(); 
                    if(get_field('dealer_division')['value'] == $k): ?>
                        <div class="col-md-4 pb-3 my-2">
                        <div class="card h-100 card-custom">
                            <div class="card-body text-center">
                                <div class="product__view">
                                    <a class="product__view--icon" href="<?php the_field('dealer_map'); ?>" target="_blank">
                                        <i class="icon ion-ios-business"></i>
                                    </a>
                                    <h3 class="avss-devices__device--zilla mt-4 pt-1">
                                        <?php the_field('dealer_zilla'); ?>
                                    </h3>
                                </div>
                                <p class="avss-devices__description text-center pb-3 pb-sm-3 pb-md-0">
                                    <p class="avss-devices__device--title">
                                        <?php the_field('dealer_title'); ?>
                                    </p>
                                    <p>
                                        <?php the_field('dealer_address'); ?>
                                    </p>
                                    <a href="tel:<?php echo get_field('dealer_phone_num_1') ?>" class="font-weight-bold"><?php the_field('dealer_phone_num_1'); ?></a>
                                    <br>
                                    <a href="tel:<?php echo get_field('dealer_phone_num_2') ?>" class="font-weight-bold d-block pt-2"><?php the_field('dealer_phone_num_2'); ?></a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <?php    
                endif; 
            
            endwhile; ?>
              </div>
            </div>
          </div>
        </div>
      
                <?php endforeach; ?>

        <!-- <div class="container">
            <div class="row justify-content-center">
                <?php
                $dealers = new WP_Query(
                    array(
                        'post_type' => 'dealers',
                        'posts_per_page' => -1,
                    )
                );
                while ($dealers->have_posts()) : $dealers->the_post();
                    ?>
                    <div class="col-md-4 pb-5">
                        <div class="card h-100 card-custom">
                            <div class="card-body text-center">
                                <div class="product__view">
                                    <a class="product__view--icon" href="<?php the_field('dealer_map'); ?>" target="_blank">
                                        <i class="icon ion-md-pin"></i>
                                    </a>
                                    <h3 class="avss-devices__device--zilla mt-4 pt-1">
                                        <?php the_field('dealer_zilla'); ?>
                                    </h3>
                                </div>
                                <p class="avss-devices__description text-center pb-3 pb-sm-3 pb-md-0">
                                    <p class="avss-devices__device--title">
                                        <?php the_field('dealer_title'); ?>
                                    </p>
                                    <p>
                                        <?php the_field('dealer_address'); ?>
                                    </p>
                                    <a href="tel:<?php echo get_field('dealer_phone_num_1') ?>" class="font-weight-bold"><?php the_field('dealer_phone_num_1'); ?></a>
                                    <br>
                                    <a href="tel:<?php echo get_field('dealer_phone_num_2') ?>" class="font-weight-bold d-block pt-2"><?php the_field('dealer_phone_num_2'); ?></a>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
                    wp_reset_query(); ?>
            </div>
        </div> -->


        <div class="contact-button text-center mt-5">
            <a href="<?php echo site_url('/contact'); ?>" class="btn-custom btn-primary-custom btn-lg-custom box-shadow-btn">
                contact for dealership <i class="btn-ic icon ion-md-arrow-forward"></i>
            </a>
        </div>
    </section>
</main>

<?php get_footer(); ?>