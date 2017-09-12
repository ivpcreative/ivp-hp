<?php
/**
 * The template for displaying pages
  *Template Name:side-info
 * @package WordPress
 * @subpackage ivp-hp
 * @since ivp-hp 1.0
 */

 get_header('modal')
?>

  <div class="sf-bottom">
    <?php
      if ( have_posts() ) :
        get_template_part( 'content', get_post_format() );
      else:
        get_template_part( 'content', 'none' );
      endif;
    ?>
  </div>
<span class="js-edit_modal">
<?php wp_footer(); ?>
</span>
