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
        <div class="workBg" style="background-image:url('<?php the_field('background_image'); ?>')" >
          <div class="workText" >
            <h5><?php the_field('project_type'); ?></h5>
            <h4><?php the_title(); ?></h4>
            <p><?php the_field('description'); ?></p>
            <div class="tags">
              <?php the_terms($post->ID, 'skills', ' ', ' ', ' '); ?>
            </div>
            <button class="seeItLive" >
              <a href="<?php the_field('view_it_url') ;?>" >View It Live</a>
            </button>
          </div> <!-- end of .workText -->
          <div class="workOverlay" style="background-color:<?php the_field('overlay_color'); ?>"></div>
        </div><!-- end of .workBg -->
      </div>
	<?php endwhile; // end custom loop?>
	<?php wp_reset_postdata(); // return state to normal?>

  <!-- VIEW GALLERY -->
  <div class="viewGallery">
    <p>Like what you see?</p>
    <button>
      <a href="#">View More Here</a>
    </button>
  </div>
  <!-- BLOG SECTION --> 
  <section class="blogSection">
    <h4>Blog</h4>
    <div class="blogPosts">
      <!-- post loop goes here -->
    </div>
    <h4><a href="#">View all posts</a></h4>
  </section>

  <section class="contact">
    <p>I'd love to join your team!</p>
    <button>
      <a href="#">Say Hello</a>
    </button>
  </section>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>