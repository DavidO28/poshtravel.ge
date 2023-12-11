<!-- blogi -->
<?php get_header(); ?>

<div class="container-xl box2 mb-5">
    <h2><a href="#!"><?php single_cat_title(); ?></a></h2>
    
    <div class="row">
        <div class="col-md-3">
            <div class="filters">
                <ul>
                <?php

                    $term = get_queried_object();

                    $children = get_terms( $term->taxonomy, array(
                        'parent'    => 7,
                        'hide_empty' => false
                    ) );

                    if ( $children ) { 
                        foreach( $children as $subcat )
                        { ?>
                            <li><a href="<?= esc_url(get_term_link($subcat, $subcat->taxonomy)) ?>"><?= $subcat->name ?></a></li>
                       <?php }
                    }
                ?>
                   
                </ul>
               
            </div>
        </div>
        <div class="col-md-9 row box2_in gx-2 gy-1">
        <?php

          $category = get_queried_object(); 
    			// კატეგორიის მიხედვით პოსტების წამოღება
    			$post_list = get_posts(array(
    				'category'    => $category->term_id,
    				'numberposts' => '100000',
    			));

  			 foreach ($post_list as $post) {
  			 ?>
				  <div class="col-lg-3 box2_in_1 col-md-4 col-sm-6 ">
            <div>
             <div class="location_photo">
			         <img src="<?php   echo get_the_post_thumbnail_url($post->ID );   ?>">
             </div>
                <h3 class="location_title">
        					 <a href="<?php the_permalink(); ?>">
        							<img class="search_pin" src="<?= get_template_directory_uri() ?>/assets/images/location_icon.png" alt="ლონდონი">
        							<br><?php  the_title() ?>
        					 </a>
               </h3>
            </div>
         </div>
			 <?php } ?>

        </div>
    </div>
</div>



 
<?php get_footer(); ?>
