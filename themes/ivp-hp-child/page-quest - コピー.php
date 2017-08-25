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
<head>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri()?>/css/second.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri()?>/css/modal.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri()?>/css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri()?>/css/iziModal.css"/>
</head>

<?php get_template_part( 'template-parts/content', 'slider_left' ); ?>
<div class="slide_left_after2"></div>

<script type="text/javascript"  src="<?php echo get_stylesheet_directory_uri()?>/js/jquery.js"></script>
<script type="text/javascript"  src="<?php echo get_stylesheet_directory_uri()?>/js/smoothScroll.js"></script>
<script type="text/javascript"  src="<?php echo get_stylesheet_directory_uri()?>/js/css_browser_selector.js"></script>
<script type="text/javascript"  src="<?php echo get_stylesheet_directory_uri()?>/js/jquery.easing.1.3.js"></script>
<script type="text/javascript"  src="<?php echo get_stylesheet_directory_uri()?>/js/jquery.bxslider.min.js"></script>
<script type="text/javascript"  src="<?php echo get_stylesheet_directory_uri()?>/js/superfish.js"></script>
<script type="text/javascript"  src="<?php echo get_stylesheet_directory_uri()?>/js/heightLine.js"></script>
<script type="text/javascript"  src="<?php echo get_stylesheet_directory_uri()?>/js/jquery.meanmenu.js"></script>
<script type="text/javascript"  src="<?php echo get_stylesheet_directory_uri()?>/js/iziModal.js"></script>
<script type="text/javascript">$(document).ready(function(){$('#slider').bxSlider({mode: 'fade',auto: true,pause:60000000,speed: 0,pager: false});});</script>
<script type="text/javascript"> $(document).ready(function(){ $("ul.sf-menu").superfish({  animation: {height:'show'}, delay: 1200 }); });</script>
<script type="text/javascript">jQuery(document).ready(function () { jQuery('#snavi').meanmenu();	});</script>
<script type="text/javascript">$(function(){$(".accordionbox2 dt").on("click", function() {$(this).next().slideToggle();	if ($(this).children(".accordion_icon2").hasClass('active')) {	$(this).children(".accordion_icon2").removeClass('active');	}else {	$(this).children(".accordion_icon2").addClass('active');}});});</script>
	
		
<?php // get_sidebar(); ?>
<?php get_footer(); ?>
