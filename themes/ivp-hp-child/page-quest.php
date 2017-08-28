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

<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri()?>/css/second.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri()?>/css/modal.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri()?>/css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri()?>/css/iziModal.css"/>

<?php get_template_part( 'template-parts/content', 'slider_left' ); ?>
<div class="slide_left_after2"></div>

<?php echo do_shortcode('[contact-form-7 id="242" title="お問い合わせ"]'); ?>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>

<!--page script-->
<script type="text/javascript">$(function(){$(".accordionbox2 dt").on("click", function() {$(this).next().slideToggle();	if ($(this).children(".accordion_icon2").hasClass('active')) {	$(this).children(".accordion_icon2").removeClass('active');	}else {	$(this).children(".accordion_icon2").addClass('active');}});});</script>
	


