<?php

/*
	Template Name: Custom Homepage
*/

?>

<?php get_header(); ?>

<div class="main">
  <div class="container">

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>

    <?php endwhile; // end the loop?>

    <?php  // we are going to pull in our latest 4 blog posts ?> 
    <?php  $latestPosts = new WP_Query( array(
    	'post_type' => 'portfolio', 
    	'posts_per_page' => 4
    )); ?> 

    <?php if( $latestPosts->have_posts()) while( $latestPosts->have_posts()) : $latestPosts->the_post(); ?>

    	<h2><?php the_title(); ?></h2>

	<?php endwhile; // end custom loop?>
	<?php wp_reset_postdata(); // return state to normal?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>