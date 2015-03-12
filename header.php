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
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<header>
  <div class="container fullBackground">
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

