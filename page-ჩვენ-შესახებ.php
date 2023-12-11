<?php get_header(); ?>
<div class="aboutus container rounded-4">
         <div>
            <button class="category rounded-5"><?php  the_title() ?></button>
            <?php echo  $post->post_content ?>
         </div>
         <div id="slogan">
            Post Travel - Create Posh Memories!
         </div>
      </div>
 
<?php get_footer(); ?>