<?php
/**
 * The template for displaying pages
  *Template Name:page-home
 * @package WordPress
 * @subpackage ivp-hp
 * @since ivp-hp 1.0
 */
get_header();

global $weluka_themename;
?>
<div class="container clearfix">
		<div class="main_contents indexs">
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
<script type="text/javascript">$(document).ready(function(){$('#slider').bxSlider({mode: 'fade',auto: true,pause:6000,speed: 2000,pager: true});});</script>
<script type="text/javascript">
$(function(){
var accordionOffset = [];
var $accordion = $(".ser_base");
var Accordion = {
getaccordionOffset: function () {
	$accordion.each(function (i) {
		accordionOffset[i] = $(this).offset().top;
	});
},
hdlClick: function (Selector) {
	var num = $(".ser_sp").index(Selector);

	if (Selector.hasClass("accordion-on")) {
		Selector.removeClass("accordion-on");
		Selector.next(".ser_sp2").stop().slideUp(300, function () {
			Accordion.getaccordionOffset();
		});
	} else {
		Selector.next(".ser_sp2").stop().slideDown(300, function () {
			Accordion.getaccordionOffset();
		});
		Selector.addClass("accordion-on");
	}
}
}
Accordion.getaccordionOffset();
$(".ser_sp")
.on("click",function () {
Accordion.hdlClick($(this));
})
.on("mouseenter",function () {
	Accordion.hdlEnter($(this));
})
.on("mouseleave", function () {
	Accordion.hdlLeave($(this));
});

});
</script>
<script type="text/javascript">
var header = $('#fixed');
$(document).ready(function () {
  header.removeClass('scroll');
   });
$(function(){

header_offset = header.offset();
header_height = header.height();
$(window).scroll(function () {
if($(window).scrollTop() > 170) {
header.addClass('scroll');
}else {
header.removeClass('scroll');
}
});
});
</script>
<script type="text/javascript"  src="<?php echo get_stylesheet_directory_uri()?>/js/heightLine.js"></script>
<!-- page script-->
?>
