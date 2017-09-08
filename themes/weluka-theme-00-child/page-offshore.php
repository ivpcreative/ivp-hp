<?php
/**
 * The template for displaying pages
  *Template Name:page-offshore
 * @package WordPress
 * @subpackage ivp-hp
 * @since ivp-hp 1.0
 */
get_header();

global $weluka_themename;
?>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri()?>/css/second.css"/>

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
<!--page script-->
<script type="text/javascript"  src="<?php echo get_stylesheet_directory_uri()?>/js/infiniteslide.js"></script>
<script type="text/javascript">
if((navigator.userAgent.indexOf("iPhone") != -1) || (navigator.userAgent.indexOf("iPad") != -1)){
  $(window).load(function(){
	$('#main_slide').infiniteslide({
		'height': 200,			// 高さを指定
		'speed': 30,			// スピードを指定
		'direction' : 'left',	// スライドする向きを指定
		'pauseonhover': false,	// マウスオーバーでストップするかを指定
		'clone': 100 //子要素の複製回数
	});
  });
}else if(navigator.userAgent.indexOf("Android") != -1){
  $(window).load(function(){
	$('#main_slide').infiniteslide({
		'height': 200,			// 高さを指定
		'speed': 30,			// スピードを指定
		'direction' : 'left',	// スライドする向きを指定
		'pauseonhover': false,	// マウスオーバーでストップするかを指定
		'clone': 100 //子要素の複製回数
	});
  });
}else{
  $(window).load(function(){
	$('#main_slide').infiniteslide({
		'height': 200,			// 高さを指定
		'speed': 30,			// スピードを指定
		'direction' : 'left',	// スライドする向きを指定
		'pauseonhover': false,	// マウスオーバーでストップするかを指定
		'clone': 100 //子要素の複製回数
	});
  });
}
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