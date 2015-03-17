<?php

/*
	Template Name: Custom Homepage
*/

?>

<?php get_header(); ?>

<div class="main">
  <div class="container">

<!-- NEED TO GET THE 'ABOUT' SECTION -->

    <div class="about panel clearfix" id="about">
      <img class="profilePic" src="http:<?php the_field('profile_pic'); ?>" alt="">
      <div class="aboutText">
      <h2>About</h2>
      <?php the_field('about'); ?>
      </div>
    </div>

    <?php  // we are going to pull in our latest 4 blog posts ?> 
    <?php  $latestPosts = new WP_Query( array(
    	'post_type' => 'portfolio', 
    	'posts_per_page' => 4,
      'order' => 'ASC'
    )); ?> 

    <?php if( $latestPosts->have_posts()) while( $latestPosts->have_posts()) : $latestPosts->the_post(); ?>
      
      <div class="workContainer panel" id="portfolio">
        <div class="workBg" style="background-image:url('<?php the_field('background_image'); ?>')" >
      
        </div><!-- end of .workBg -->
            <div class="workText" >
            <img class="mobileBg" src="<?php the_field('background_image'); ?>" alt="">
            <h5><?php the_field('project_type'); ?></h5>
            <h4><?php the_title(); ?></h4>
            <p><?php the_field('description'); ?></p>
            <div class="tags">
              <?php the_terms($post->ID, 'skills', ' ', ' ', ' '); ?>
              <!-- for each -->
            </div>
            <button class="seeItLive" >
              <a href="<?php the_field('view_it_url') ;?>" >View It Live</a>
            </button>
          </div> <!-- end of .workText -->
          <div class="workOverlay" style="background-color:<?php the_field('overlay_color'); ?>"></div>
      </div>
	<?php endwhile; // end custom loop?>
	<?php wp_reset_postdata(); // return state to normal?>

  <div class="viewGallery panel" id="blog">
    <p>On the Blog...</p>
    <!-- <button>
      <a href="#">View More Here</a>
    </button> -->
  </div>
  <!-- BLOG SECTION --> 
  <section class="blogSection">
   <!--  <h4>Blog</h4> -->
    <div class="blogPosts clearfix">

      <?php 
        $frontposts = new WP_query(
          array(
          'posts_per_page' => 3,
          ) 
        ); ?>

      <?php if ($frontposts->have_posts() ) :  ?>
        <?php while ($frontposts->have_posts() ) : $frontposts->the_post() ?>

        <div class="postContainer clearfix">
          <div class="imgContainer">
            <a href="<?php echo get_permalink( $post->ID )?>">
              <?php echo get_the_post_thumbnail( $post->ID, 'medium'); ?>
              <div class="textContainer">
                <h3><?php echo get_the_title( $post->ID ); ?></h3>
              </div>
            </a>
        </div>
        
      </div>
          <?php endwhile ?>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>

    </div>
    <!-- <h4><a href="#">View all posts</a></h4> -->
  </section>

    </div> <!-- /.container -->
  </div> <!-- /.main -->

<?php get_footer(); ?>