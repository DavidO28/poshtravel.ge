<!-- blogi -->
<?php get_header(); ?>

    <div class="Hello container-xl mb-4  mt-5">
        <h2>გაეცანით ჩვენს ბლოგს</h2>
    </div>

    <div class="city_container container-xl mb-5">
                <div class="row g-3">


                    <?php
                // კატეგორიის მიხედვით პოსტების წამოღება
                    $post_list = get_posts( array(
                    'category'    => '4'
                    ) );


                    foreach ( $post_list as $post ) { ?>
                    
                    <div class="col-md-4 col-12">
                        <div class="city">
                            <div class="city_image">
                                <a href="<?php the_permalink(); ?>">
                                <img src="<?php   echo get_the_post_thumbnail_url($post->ID );   ?>">
                                </a>
                            </div>
                            <div class="city_title">
                                <h3>
                                    <a href="<?php the_permalink(); ?>"><?php  the_title() ?></a>
                                </h3>
                                <p style="color: #544966;">
                                <a href="<?php the_permalink(); ?>">
                                <?php echo wp_trim_words($post->post_content, 10)  ?>
                                    </a>
                                </p>
                                <a href="<?php the_permalink(); ?>">
                                წაიკითხეთ მეტი
                                </a>
                            </div>
                        </div>
                
                    </div>
                
                    <?php } ?>

                            



                </div>



    </div>
 
<?php get_footer(); ?>
