<?php
/**
 * The template for displaying pages
  *Template Name:page-quest
 *
 * @package WordPress
 * @subpackage ivp-hp-child
 * @since ivp-hp 1.0
 */

get_header(); ?>

<?php
// Start the loop.
while ( have_posts() ) : the_post();
the_content();
endwhile;
?>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
