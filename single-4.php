<?php get_header(); ?>


    <div class="container-xl my-5">
        <img src="<?php   echo get_the_post_thumbnail_url($post->ID ); ?>" alt="<?php  the_title() ?>" alt="" class="float-left w-50 blog_image_single">

        <h1>
            <?php  the_title() ?>
        </h1>
        <?php echo  $post->post_content ?>
    </div>

        <div class="clear"></div>


        

<?php get_footer(); ?>

<!-- singlepages TEMPLATEE -->