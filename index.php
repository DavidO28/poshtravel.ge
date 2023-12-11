<?php get_header(); ?>

   
<div class="header-bottom ps-xl-0 pe-xl-0" >
   <?php
      $post_list = get_posts( array(
                    'category'    => '10',
                    "numberposts" => "1",
                    ) );
      
      
                    foreach ( $post_list as $post ) { ?>
   <div class="card text-white rounded-0">
      <img class="card-img" src="<?php   echo get_the_post_thumbnail_url($post->ID );   ?>">
      <div class="card-img-overlay">
         <div class="container-xl">
            <h1 class="card-title mb-3">
               <?php  the_title() ?>
            </h1>
            <div class="card-text">
               <p><?php echo wp_trim_words($post->post_content, 20)  ?></p>
            </div>
         </div>
      </div>
   </div>
   <?php } ?>
</div>

<div class="ng container-xl">
   <div class="box2 popular_directions">
      <h2><a href="#!">პოპულარული მიმართულებები</a></h2>
      <div class="row box2_in gx-2 gy-1">
         <?php
            // კატეგორიის მიხედვით პოსტების წამოღება
            $post_list = get_posts(array(
            	'category'    => '1',
            	'numberposts' => '9',
            ));
            $i = 0;
            foreach ($post_list as $post) {
               if ($post->ID!= 119) {
                  $i++;
                  if ($i == 9) { break; }
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
         <?php } }?>
      </div>
   </div>
</div>

<div class="container-xl">
   <h2 class="pink mt-3"><a href="<?=esc_attr( esc_url( get_category_link( 11 ) ) )?>">ტურები ევროპაში</a></h2>
   <div class="cards row mt-5">
      <?php
         $post_list = get_posts( array(
                       'category'    => '11',
                       "numberposts" => "4",
                       ) );
         
         
                       foreach ( $post_list as $post ) { ?>
      <div class="mb-4 col-md-6 col-sm-12 ">
         <div class="image1" style="background-image:url('<?php   echo get_the_post_thumbnail_url($post->ID );   ?>')">
            <div class="overview  p-4">
               <div class="title mb-4">
                  <h3><?php  the_title() ?></h3>
               </div>
               <div class="vrclad">
                  <a href="<?php the_permalink(); ?>" class="btnhover"> <span> ნახეთ ვრცლად &#10141;</span></a>
               </div>
            </div>
         </div>
      </div>
      <?php } ?>
   </div>
</div>

</div>
<?php
   // კატეგორიის მიხედვით პოსტების წამოღება
     $post_list = get_posts( array(
       'category'    => '6'
     ) );
     foreach ( $post_list as $post ) { ?>
<div class="feri mb-5">
   <div class="container-xl">
      <div class="row touringermany">
         <div class="col-12 col-md-6">
            <div class="surati">
               <img src="<?php   echo get_the_post_thumbnail_url($post->ID );   ?>">
            </div>
         </div>
         <div class="col-12 col-md-6 texti1">
            <h2 class="h">
               <?php  the_title() ?>	
            </h2>
            <!-- read more - mde teqsti -->
            <?php 
               $content = get_post_field('post_content', $post->ID);
               $con_parts = get_extended($content);
               echo $con_parts['main'];
               ?> 
            <a href="<?php the_permalink(); ?>" class="btnhover"><span> ნახეთ ვრცლად &#10141; </span></a>
         </div>
      </div>
   </div>
</div>
<?php } ?>

<div class="container-xl mb-5">
<div class="blocktitle text-center mb-4">
   <h2>ტურები ქვეყნების მიხედვით</h2>
</div>


<div class="text-center toursbycountry">
                  

  <?php

   $categories = get_categories( array(
      'orderby' => 'name',
      'parent'  => 7

    ) );
    foreach ($categories as $key => $cat) {
      if($key == 3) { break; }
     ?>

  <div class="photo-container">
     <img src="<?php echo z_taxonomy_image_url($cat->term_id, 'large'); ?>" alt="Image 1" style="height: 100%">
     <a href="<?=get_category_link( $cat->term_id )?>" class="btn btn-see-more btnhover"><span> <?=$cat->cat_name; ?> &rarr;</span></a>
  </div>


  <?php
    }
  ?>
</div>
         </div>

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
               <p>
                  <a href="<?php the_permalink(); ?>">
                  <?php echo wp_trim_words($post->post_content, 10)  ?>
                  </a>
               </p>
               <a class="btnhover" style='border:1px solid grey' href="<?php the_permalink(); ?>">
               <span>წაიკითხეთ მეტი</span>
               </a>
            </div>
         </div>
      </div>
      <?php } ?>
   </div>
</div>
<?php get_footer(); ?>