<?php

/*
	Template Name: Custom Homepage
*/

?>

<?php get_header(); ?>

<div class="main">
  <div class="container">

<!-- NEED TO GET THE 'ABOUT' SECTION -->

    <div class="about">
      <p><?php the_field('about'); ?></p>
    </div>



    <?php  // we are going to pull in our latest 4 blog posts ?> 
    <?php  $latestPosts = new WP_Query( array(
    	'post_type' => 'portfolio', 
    	'posts_per_page' => 4,
      'order' => 'ASC'
    )); ?> 

    <?php if( $latestPosts->have_posts()) while( $latestPosts->have_posts()) : $latestPosts->the_post(); ?>
      
      <div class="workContainer">
        <div class="workBg" >
          <div class="workText">
            <h5><?php the_field('project_type'); ?></h5>
            <h4><?php the_title(); ?></h4>
            <p><?php the_field('description'); ?></p>
          </div>
        </div>
        <div class="workOverlay">
          
        </div>
      </div>

    	

	<?php endwhile; // end custom loop?>
	<?php wp_reset_postdata(); // return state to normal?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>