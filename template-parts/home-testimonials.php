<section class="avss-testimonial container-fluid" id="testimonials">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="avss-section-intro text-center">
                <h1 class="avss-section-intro__header">
                    what people say
                </h1>
                <div class="line-small mx-auto my-4"></div>
                <div class="avss-section-intro__description mx-auto">
                    We are focusing on building our brand as a trusted consumer-brand. AVSS has widely recognized the country’s no #1 Vehicle Security System service providers. Let’s see what other people say about AVSS.
                </div>
            </div>
        </div>
    </div>

    <div class="avss-testimonial__main container-fluid">
        <div class="row justify-content-lg-between justify-content-center">

            <?php

            $testimonials = new WP_Query(
                array(
                    'post_type' => 'testimonials',
                    'posts_per_page' => 3,
                    'order' => 'ASC'
                )
            );

            $testimonials_count == 0;

            while ($testimonials->have_posts()) : $testimonials->the_post();
                $testimonials_count++;
                ?>

                <div class="col-12 col-md-8 col-sm-10 col-lg-4 col-lg-4-custom d-flex mb-5">
                    <div class="avss-testimonial__item 
                    
                        <?php
                            switch ($testimonials_count) {
                                case 1:
                                    echo "one";
                                    break;
                                case 2:
                                    echo "two";
                                    break;
                                case 3:
                                    echo "three";
                                    break;
                                default:
                                    break;
                            }

                            ?>
                    
                    ">
                        <div class="avss-testimonial__content">
                            <div class="avss-testimonial__content--text pt-3 pb-5">
                                <?php the_field('testimonial_author_msg'); ?>
                            </div>
                            <div class="avss-testimonial__author d-flex align-items-center justify-content-end mt-2">
                                <figure class="avss-testimonial__author--img mr-3">
                                    <img src="<?php echo get_field('testimonial_author_img'); ?>" class="img-fluid" alt="app-image" />
                                </figure>
                                <div class="avss-testimonial__author--info">
                                    <h6><?php the_field('testimonial_author_name'); ?></h6>
                                    <h6><?php the_field('testimonial_author_designation'); ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endwhile;
            wp_reset_query(); ?>
        </div>
    </div>
    <!-- end of avss-testimonial -->
</section>