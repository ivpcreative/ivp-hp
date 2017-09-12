<?php
/**
 * The template for displaying pages
  *Template Name:page-iot
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

 <?php
    //モーダル
        echo display_modal("modal-iot1");
        echo display_modal("modal-iot2");
        echo display_modal("modal-iot3");
    ?>
	</div>
</div>

<!-- page script-->
<script>
//01
$(document).on('click', '.open-options1', function(event) {
  event.preventDefault();
  $('#modal-options1').iziModal('open');
});
$('#modal-options1').iziModal({
  headerColor: '#272727',
  overlayColor: 'rgba(0, 0, 0, 0.6)',
  fullscreen: true,
  transitionIn: 'fadeInUp',
  transitionOut: 'fadeOutDown',
  radius: 0,
  zindex: 99999,
  navigateCaption: false,
  fullscreen: false,
});

//02
$(document).on('click', '.open-options2', function(event) {
  event.preventDefault();
  $('#modal-options2').iziModal('open');
});
$('#modal-options2').iziModal({
  headerColor: '#272727',
  overlayColor: 'rgba(0, 0, 0, 0.6)',
  fullscreen: true,
  transitionIn: 'fadeInUp',
  transitionOut: 'fadeOutDown',
  radius: 0,
  zindex: 99999,
  navigateCaption: false,
  fullscreen: false,
  width:'85%'
});

//03
$(document).on('click', '.open-options3', function(event) {
  event.preventDefault();
  $('#modal-options3').iziModal('open');
});
$('#modal-options3').iziModal({
  headerColor: '#272727',
  overlayColor: 'rgba(0, 0, 0, 0.6)',
  fullscreen: true,
  transitionIn: 'fadeInUp',
  transitionOut: 'fadeOutDown',
  radius: 0,
  zindex: 99999,
  navigateCaption: false,
  fullscreen: false,
});
</script>
<script type="text/javascript">
$(function(){
$('.sf-menu ul li a').each(function(){
var $href = $(this).attr('href');
if(location.href.match($href)) {
$(this).addClass('active');
} else {
$(this).removeClass('active');
}
});
});
</script>
