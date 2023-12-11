<?php get_header() ?>


<div class="container-xl box2 my-5">
    <div class="row box2_in gx-2 gy-1">



<?php if ( have_posts() ) : while( have_posts()  ) : the_post(); ?>

<div class="col-lg-3 box2_in_1 col-md-4 col-sm-6">

	 <div class="location_photo">
	        <?php the_post_thumbnail( 'full' ); ?>
     </div>
	<h3 class="location_title">
		 <a href="<?php the_permalink(); ?>">
			<?php  the_title() ?>
	 	</a>
   </h3>

</div>
  
<?php endwhile; endif; ?>
</div>
</div>

<?php get_footer() ?>
