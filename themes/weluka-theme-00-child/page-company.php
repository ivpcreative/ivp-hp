<?php
/**
 * The template for displaying pages
  *Template Name:page-company
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
 <!-- page script-->
<script type="text/javascript">$(function(){	$(".accordionbox2 dt").on("click", function() {$(this).next().slideToggle();if ($(this).children(".accordion_icon2").hasClass('active')) {	$(this).children(".accordion_icon2").removeClass('active');}else {$(this).children(".accordion_icon2").addClass('active');	}});});</script>

<script type="text/javascript">
$(function(){
$('.main-menu a').each(function(){
var $href = $(this).attr('href');
if(location.href.match($href)) {
$(this).addClass('active');
} else {
$(this).removeClass('active');
}
});
});
</script>


<script type="text/javascript">
$(document).ready(function() {
  $('i').removeClass('fa-chevron-down').addClass('fa-plus-circle fa-2x');
});
$(function(){	
	$('.panel-title').click(function() {
		$(this).find('i').removeClass('fa-chevron-down');
		$(this).find('i').removeClass('fa-chevron-up');
		$(this).find('i').toggleClass('fa-minus-circle fa-plus-circle');		
		});
});
</script>
