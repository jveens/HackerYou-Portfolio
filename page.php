<?php get_header();  ?>
<p>I'm editing page.php</p>
<div class="main">
  <div class="container">

    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

         <h2><?php the_title(); ?></h2>
         <p><?php echo home_url(); ?></p>
         <p>The url for this page is <?php echo get_permalink(); ?></p>
         <p>The url for my blog post is <?php echo get_permalink(7); ?></p>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>