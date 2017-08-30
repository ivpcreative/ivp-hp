<?php
/**
 * The template for displaying pages
  *Template Name:page
 *
 * @package WordPress
 * @subpackage ivp-hp
 * @since ivp-hp 1.0
 */

get_header(); ?>
<?php get_template_part( 'template-parts/content', 'slider_left' ); ?>
<div class="slide_left_after2"></div>

<div class="container clearfix">
    <div class="main_contents second">

      <?php
      // Start the loop.
      while ( have_posts() ) : the_post();
          the_content();
      endwhile;
      ?>

      <?php get_footer(); ?>
    </div>
 </div>
