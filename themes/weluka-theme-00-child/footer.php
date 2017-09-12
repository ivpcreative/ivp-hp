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
<!--<div class="footers clearfix">
						<div>
								<dl>
										<dt>会社情報</dt>
										<dd><a href="/company/">会社概要</a></dd>
										<dd><a href="/access/">アクセスマップ</a></dd>
										<dd><a href="/privacy/">プライバシーポリシー</a></dd>
										<dd><a href="https://ww2.ivp.co.jp/english/">ENGLISH</a></dd>
								</dl>
						</div>
						<div>
								<dl>
										<dt>システム開発/スクラッチ開発</dt>
										<dd><a href="/ec/"><img src="/wp-content/uploads/images/arrow_white.png" width="16" height="7" alt="arrow"/><span>ECシステム開発</span></a></dd>
										<dd><a href="/iot/"><img src="/wp-content/uploads/images/arrow_white.png" width="16" height="7" alt="arrow"/><span>IoTサービス開発</span></a></dd>
										<dd><a href="/web/"><img src="/wp-content/uploads/images/arrow_white.png" width="16" height="7" alt="arrow"/><span>WEBシステム開発</span></a></dd>
								</dl>
								<dl class="mt30">
										<dt>セキュリティ/運用保守</dt>
										<dd><a href="/maint/"><img src="/wp-content/uploads/images/arrow_white.png" width="16" height="7" alt="arrow"/><span>24×365運用保守</span></a></dd>
										<dd><a href="/offshore/"><img src="/wp-content/uploads/images/arrow_white.png" width="16" height="7" alt="arrow"/><span>オフショア開発</span></a></dd>
								</dl>
						</div>
						<div>
								<dl>
										<dt>採用情報</dt>
										<dd><a href="https://ww2.ivp.co.jp/recruit/" target="_blank"><img src="/wp-content/uploads/images/arrow_white.png" width="16" height="7" alt="arrow"/><span>募集要項・応募フォーム</span></a></dd>
								</dl>
								<dl class="mt30">
										<dt>外注協力会社募集</dt>
										<dd><a href="/partner/"><img src="/wp-content/uploads/images/arrow_white.png" width="16" height="7" alt="arrow"/><span>ビジネスパートナー企業募集</span></a></dd>
										<dd><a href="/partner/#partner1"><img src="/wp-content/uploads/images/arrow_white.png" width="16" height="7" alt="arrow"/><span>フリーランスエンジニア募集</span></a></dd>
								</dl>
								<dl class="mt30">
										<dt>お問い合わせ</dt>
										<dd>
											<?php
											 //set_query_var( 'btnkind', 'footer');
											 //get_template_part( 'template-parts/content', 'btn_quest' );
											 ?>
											</dd>
								</dl>
						</div>
				</div>
-->
				<!--　smart phone footer start -->
				<div id="accordion1" class="accordionbox">
						<a href="" class="first_logo"><img src="/wp-content/uploads/images/logo2.png" width="170" height="auto" alt="IVP Internet Value Provider　IVP Co. Ltd." title="IVP Internet Value Provider　IVP Co. Ltd." /></a>

						<?php wp_nav_menu( array( 'theme_location' => 'custom-footer-menu') ); ?>

				</div>
				<p class="copyright">Copyright(C)2017 IVP Co., Ltd. All rights reserved.</p>
		</div>
</div>
</div>

<script type="text/javascript"  src="<?php echo get_stylesheet_directory_uri()?>/js/jquery.js"></script>
<script type="text/javascript"  src="<?php echo get_stylesheet_directory_uri()?>/js/smoothScroll.js"></script>
<script type="text/javascript"  src="<?php echo get_stylesheet_directory_uri()?>/js/css_browser_selector.js"></script>
<script type="text/javascript"  src="<?php echo get_stylesheet_directory_uri()?>/js/jquery.easing.1.3.js"></script>
<script type="text/javascript"  src="<?php echo get_stylesheet_directory_uri()?>/js/jquery.bxslider.min.js"></script>
<script type="text/javascript"  src="<?php echo get_stylesheet_directory_uri()?>/js/superfish.js"></script>
<script type="text/javascript"  src="<?php echo get_stylesheet_directory_uri()?>/js/heightLine.js"></script>
<script type="text/javascript"  src="<?php echo get_stylesheet_directory_uri()?>/js/jquery.meanmenu.js"></script>
<script type="text/javascript"  src="<?php echo get_stylesheet_directory_uri()?>/js/iziModal.js"></script>
<script type="text/javascript"  src="<?php echo get_stylesheet_directory_uri()?>/js/front.js"></script>
<script type="text/javascript">$(document).ready(function(){$('#slider').bxSlider({mode: 'fade',auto: true,pause:60000000,speed: 0,pager: false});});</script>
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

</script><!-- sitecatlyst end -->

<?php wp_footer(); ?>
</body>
</html>
