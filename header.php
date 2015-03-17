<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>
  <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic|Playfair+Display:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>


<?php if(is_page('home')) { ?>
  <header class="mainHeader">
    <div class="container fullBackground">
    <div class="hamburger">☰</div>
      <nav>
        <a href="#">
          <div class="initalCircle small">
            <h6 class="inital little">J</h6>
          </div>
        </a>
        <?php wp_nav_menu(array(
              'theme_location' => 'primary',
            )); ?>
      </nav>
        <div class="initalCircle">
          <h6 class="inital">J</h6>
        </div>
        <div class="headerText">
          <h1>Jenny Veens</h1>
          <h2>Front-End Developer</h2>
        </div>   
      <div class="overlay angle"></div>
    </div> <!-- /.container -->
  </header><!--/.header-->
<?php } else { ?>
  <header class="singleHeader">
    <div class="container">
      <nav>
        <div class="hamburger">☰</div>
        <a href="http://localhost:3000/portfolio/">
          <div class="initalCircle small">
            <h6 class="inital little">J</h6>
          </div>
        </a>
        <?php wp_nav_menu(array(
              'theme_location' => 'primary',
            )); ?>
      </nav>
      <div class="headerTitle">
        <?php the_title(); ?>
      </div>
      <div class="entry-meta">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <?php hackeryou_posted_on(); ?>
      <?php endwhile; // end of the loop. ?>
      </div><!-- .entry-meta -->
    </div>
  </header>
<?php } ?>
