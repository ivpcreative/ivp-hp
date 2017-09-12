<?php
/**
 * The template for displaying pages
  *Template Name:page-quest-thanks
 * @package WordPress
 * @subpackage ivp-hp
 * @since ivp-hp 1.0
 */
get_header();

global $weluka_themename;
?>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri()?>/css/second.css"/>
<div class="top_contents"></div>
<div class="slide_left_after2"></div>
<div class="container clearfix">
		<div class="main_contents second">
			<?php
				if ( have_posts() ) :
					get_template_part( 'content', get_post_format() );
				else:
					get_template_part( 'content', 'none' );
				endif;

				get_footer();
			?>
	</div>
</div>

