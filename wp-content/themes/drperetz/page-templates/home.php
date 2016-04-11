<?php

/**
 * Template Name: Home Page
 */

get_header(); 

?>
<section class="home-body wrap">
  <?php include 'partials/hero.php'  ?>
  <?php include 'partials/home/intro.php'  ?>
  <?php include 'partials/home/elements.php'  ?>
</section>
<?php get_footer(); ?>