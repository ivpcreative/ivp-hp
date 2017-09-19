<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<div class="footers clearfix">
  	<?php wp_nav_menu( array( 'theme_location' => 'custom-pc-footer-menu1', 'menu_class' => 'footer-pc-menu1') ); ?>
	<?php wp_nav_menu( array( 'theme_location' => 'custom-pc-footer-menu2') ); ?>
	<?php wp_nav_menu( array( 'theme_location' => 'custom-pc-footer-menu3') ); ?>
</div>

<!--　smart phone footer start -->
<div id="accordion1" class="accordionbox">
	<a href="" class="first_logo">
	<img src="/wp-content/uploads/images/logo2.png" width="170" height="auto" alt="IVP Internet Value Provider　IVP Co. Ltd." title="IVP Internet Value Provider　IVP Co. Ltd." /></a>
	<?php wp_nav_menu( array( 'theme_location' => 'custom-sp-footer-menu') ); ?>
</div>
	<p class="copyright">Copyright(C)2017 IVP Co., Ltd. All rights reserved.</p>


<script type="text/javascript"  src="<?php echo get_stylesheet_directory_uri()?>/js/jquery.js"></script>
<script type="text/javascript"  src="<?php echo get_stylesheet_directory_uri()?>/js/smoothScroll.js"></script>
<script type="text/javascript"  src="<?php echo get_stylesheet_directory_uri()?>/js/css_browser_selector.js"></script>
<script type="text/javascript"  src="<?php echo get_stylesheet_directory_uri()?>/js/jquery.easing.1.3.js"></script>

<script type="text/javascript"  src="<?php echo get_stylesheet_directory_uri()?>/js/superfish.js"></script>
<script type="text/javascript"  src="<?php echo get_stylesheet_directory_uri()?>/js/heightLine.js"></script>
<script type="text/javascript"  src="<?php echo get_stylesheet_directory_uri()?>/js/jquery.meanmenu.js"></script>
<script type="text/javascript"  src="<?php echo get_stylesheet_directory_uri()?>/js/iziModal.js"></script>
<script type="text/javascript"  src="<?php echo get_stylesheet_directory_uri()?>/js/front.js"></script>

<script type="text/javascript"> $(document).ready(function(){ $("ul.sf-menu").superfish({  animation: {height:'show'}, delay: 1200 }); });</script>
<script type="text/javascript">jQuery(document).ready(function () { jQuery('#snavi').meanmenu();    });</script>
<script type = "text/javascript" > $(function() {  $("li.accordionlist").on("click", function() { $(this).children('.sub-menu').slideToggle();if ($(this).find(".accordion_icon").hasClass('active')) {$(this).find(".accordion_icon").removeClass('active');} else {$(this).find(".accordion_icon").addClass('active');}});}); </script>

<!-- sitecatlyst start-->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-37194684-1', 'auto');
ga('require', 'displayfeatures');
ga('send', 'pageview');

</script>

<!-- sitecatlyst end -->

<?php wp_footer(); ?>
</body>
</html>
