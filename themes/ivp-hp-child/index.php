<?php
/**
 * The main template file index.php(home)
 * @link
 *
 * @package ivp
 * @subpackage ivp_hp_child
 * @since
 */

get_header(); ?>
<ul id="slider">
  <li style="background:url(<?php echo get_stylesheet_directory_uri()?>/images/slide1.jpg) center bottom no-repeat; background-size:cover;"><img src="<?php echo get_stylesheet_directory_uri()?>/images/slide1_txt.png" width="auto" height="300" alt="海を飛び越えて、挑戦・貢献する。"/></li>
  <li style="background:url(<?php echo get_stylesheet_directory_uri()?>/images/slide2.jpg) center bottom no-repeat; background-size:cover;"><img src="<?php echo get_stylesheet_directory_uri()?>/images/slide2_txt.png" width="auto" height="300" alt="ECシステム開発"/><div><a href="ec/">MORE</a></div></li>
  <li style="background:url(<?php echo get_stylesheet_directory_uri()?>/images/slide3.jpg) center bottom no-repeat; background-size:cover;"><img src="<?php echo get_stylesheet_directory_uri()?>/images/slide3_txt.png" width="auto" height="300" alt="IoTサービス開発"/><div><a href="iot/">MORE</a></div></li>
  <li style="background:url(<?php echo get_stylesheet_directory_uri()?>/images/slide4.jpg) center bottom no-repeat; background-size:cover;"><img src="<?php echo get_stylesheet_directory_uri()?>/images/slide4_txt.png" width="auto" height="300" alt="WEBシステム開発"/><div><a href="web/">MORE</a></div></li>
  <li style="background:url(<?php echo get_stylesheet_directory_uri()?>/images/slide5.jpg) center bottom no-repeat; background-size:cover;"><img src="<?php echo get_stylesheet_directory_uri()?>/images/slide5_txt.png" width="auto" height="300" alt="24×365運用保守"/><div><a href="maint/">MORE</a></div></li>
  <li style="background:url(<?php echo get_stylesheet_directory_uri()?>/images/slide6.jpg) center bottom no-repeat; background-size:cover;"><img src="<?php echo get_stylesheet_directory_uri()?>/images/slide6_txt.png" width="auto" height="300" alt="セキュリティ運用保守"/></li>
  <li style="background:url(<?php echo get_stylesheet_directory_uri()?>/images/slide7.jpg) center bottom no-repeat; background-size:cover;"><img src="<?php echo get_stylesheet_directory_uri()?>/images/slide7_txt.png" width="auto" height="300" alt="オフショア開発"/><div><a href="offshore/">MORE</a></div></li>
</ul>

<?php get_template_part( 'template-parts/content', 'slider_left' ); ?>

<div class="slide_left_after"></div>
<div class="scroll_icon">
        <img src="<?php echo get_stylesheet_directory_uri()?>/images/scroll_icon.png" width="116" height="60" alt="scroll icon"/>
    </div>
    <div class="container clearfix">
        <div class="main_contents indexs">
            <div class="bnrs">
                <div class="link1"><p><strong>HELLO,NEXT!</strong>AIロボットとともに歩む未来とは？</p></div>
                <div class="clearfix heightLineParent">
                    <div class="link2"><p><strong>ＩｏＴビジネス</strong>IoTを活用した、顧客とつながる<br />新しいビジネスモデルを支援。</p></div>
                    <div class="link3"><p><img src="<?php echo get_stylesheet_directory_uri()?>/images/index_bnr03.png" width="240" height="auto" alt="LINE BUSINESS CONNECT" class="inimg"/>LINE ビジネスコネクトをベースに、独自開発したサービスを組み合わせることで、顧客満足度を高めながら、多くのファンを創出させることが可能になります。</p></div>
                </div>
            </div>
            <h2 class="inh2 inTitle01">私たちの仕事</h2>
            <div class="clearfix lines"><img src="<?php echo get_stylesheet_directory_uri()?>/images/diagonal_line.png" width="160" height="auto" alt="diagonal line"/></div>
            <div class="clearfix index_service">
                <div class="ser_base">
                    <div class="ser_sp">
                        <img src="<?php echo get_stylesheet_directory_uri()?>/images/index_service_icon01.png" width="130" height="auto" alt="システム開発/スクラッチ開発"/>
                        <h2>システム開発/スクラッチ開発</h2>
                    </div>
                    <div class="ser_sp2">
                        <h3><a href="ec/index.html"><span>ECシステム開発</span><img src="<?php echo get_stylesheet_directory_uri()?>/images/arrow.png" width="16" height="7" alt="arrow"/></a></h3>
                        <h3><a href="iot/index.html"><span>loTサービス開発</span><img src="<?php echo get_stylesheet_directory_uri()?>/images/arrow.png" width="16" height="7" alt="arrow"/></a></h3>
                        <h3><a href="web/index.html"><span>WEBシステム開発</span><img src="<?php echo get_stylesheet_directory_uri()?>/images/arrow.png" width="16" height="7" alt="arrow"/></a></h3>
                    </div>
                </div>
                <div class="ser_base">
                    <div class="ser_sp">
                        <img src="<?php echo get_stylesheet_directory_uri()?>/images/index_service_icon02.png" width="130" height="auto" alt="セキュリティ/運用保守"/>
                        <h2>セキュリティ/運用保守</h2>
                    </div>
                    <div class="ser_sp2">
                        <h3><a href="maint/index.html"><span>24×365運用保守</span><img src="<?php echo get_stylesheet_directory_uri()?>/images/arrow.png" width="16" height="7" alt="arrow"/></a></h3>
                        <h3><a href="offshore/index.html"><span>オフシェア開発</span><img src="<?php echo get_stylesheet_directory_uri()?>/images/arrow.png" width="16" height="7" alt="arrow"/></a></h3>
                        <h3 class="nonlink">セキュリティ</h3>
                    </div>
                </div>
                <div class="ser_base">
                    <div class="ser_non">
                        <img src="<?php echo get_stylesheet_directory_uri()?>/images/index_service_icon03.png" width="130" height="auto" alt="フィリピンビジネス支援"/>
                        <h2>フィリピンビジネス支援</h2>
                    </div>
                    <div class="ser_sp2">
                        <h3 class="nonlink">マニラ分室</h3>
                        <h3 class="nonlink">英語コールセンター</h3>
                    </div>
                </div>
            </div>
            <h2 class="inh2 inTitle02">採用情報・ビジネスパートナー募集</h2>
            <div class="clearfix lines"><img src="<?php echo get_stylesheet_directory_uri()?>/images/diagonal_line.png" width="160" height="auto" alt="diagonal line"/></div>
            <div class="clearfix index_recruit">
                <div>
                    <img src="<?php echo get_stylesheet_directory_uri()?>/images/index_rec01.jpg" width="100%" height="auto" alt="RECRUIT"/>
                </div>
                <div>
                    <h3><span>RECRUIT</span>グローバルな仲間と仕事ができる</h3>
                    <p>アイブイピーは、新しい未来を共に創造できるメンバーを募集しています。</p>
                    <a href="https://ww2.ivp.co.jp/recruit/" target="_blank"><span>MORE</span><img src="<?php echo get_stylesheet_directory_uri()?>/images/arrow_white.png" width="16" height="7" alt="arrow"/></a>
                </div>
            </div>
            <div class="clearfix index_recruit2">
                 <div>
                    <img src="<?php echo get_stylesheet_directory_uri()?>/images/index_rec02.jpg" width="100%" height="auto" alt="SUPPORT COMPANY"/>
                </div>
                <div>
                    <h3><span>SUPPORT COMPANY</span>ＩｏＴビジネスに参入しませんか?</h3>
                    <p>IoT開発案件やWEBシステム開発案件にパートナーとして携わって頂ける企業を募集しています。</p>
                    <a href="partner/index.html"><span>ビジネスパートナー企業募集</span><img src="<?php echo get_stylesheet_directory_uri()?>/images/arrow_white.png" width="16" height="7" alt="arrow"/></a>
                    <a href="partner/index.html#partner1"><span>フリーランスエンジニア募集</span><img src="<?php echo get_stylesheet_directory_uri()?>/images/arrow_white.png" width="16" height="7" alt="arrow"/></a>
                </div>
            </div>
            <h2 class="inh2 inTitle03">会社情報</h2>
            <div class="clearfix lines"><img src="<?php echo get_stylesheet_directory_uri()?>/images/diagonal_line.png" width="160" height="auto" alt="diagonal line"/></div>
            <div class="index_com">
                <dl class="clearfix">
                    <dt>会社名</dt>
                    <dd>株式会社アイブイピー（英語表記：IVP Co., Ltd.）</dd>
                </dl>
                <dl class="clearfix">
                    <dt>設立</dt>
                    <dd>1997年12月</dd>
                </dl>
                <dl class="clearfix">
                    <dt>本社</dt>
                    <dd>〒150-0002 東京都渋谷区渋谷2-12-19 東建インターナショナルビル別館8F<a href="access/index.html#acc01">MAP</a></dd>
                </dl>
                <dl class="clearfix">
                    <dt>TEL</dt>
                    <dd>本社代表電話（ソリューション部共通） 03-5469-8601</dd>
                </dl>
                <dl class="clearfix">
                    <dt>国内支社</dt>
                    <dd>■神戸支社<a href="access/index.html#acc02">MAP</a></dd>
                </dl>
                <dl class="clearfix">
                    <dt>海外支社</dt>
                    <dd>■IVP Global Philippines, Inc.（IVP100%出資子会社 拠点：Manila）<a href="access/index.html#acc03">MAP</a><br />■香港オフィス（中華人民共和国特別行政区）<a href="access/index.html#acc04">MAP</a></dd>
                </dl>
                <dl class="clearfix">
                    <dt>資本金</dt>
                    <dd>289,689,000円 (資本金：159,844,500円、資本準備金：129,844,500円)</dd>
                </dl>
                <dl class="clearfix">
                    <dt>従業員数</dt>
                    <dd>180名（2017年8月現在 100%子会社従業員含む)</dd>
                </dl>
                <div class="heightLineParent clearfix">
                    <a href="company/index.html"><span>MORE</span><img src="<?php echo get_stylesheet_directory_uri()?>/images/arrow_white.png" width="16" height="7" alt="arrow"/></a>
                    <a href="quest/index.html"><span>お問い合せフォーム</span><img src="<?php echo get_stylesheet_directory_uri()?>/images/arrow_white.png" width="16" height="7" alt="arrow"/></a>
                </div>
            </div>
            <div class="pertner_bnr">
                <img src="<?php echo get_stylesheet_directory_uri()?>/images/pertner_bnr01.png" width="62" height="99" alt="secom"/>
                <img src="<?php echo get_stylesheet_directory_uri()?>/images/pertner_bnr02.png" width="181" height="99" alt="paypal"/>
                <img src="<?php echo get_stylesheet_directory_uri()?>/images/pertner_bnr03.png" width="86" height="99" alt="pmark"/>
                <img src="<?php echo get_stylesheet_directory_uri()?>/images/pertner_bnr04.png" width="181" height="99" alt="isms"/>
                <img src="<?php echo get_stylesheet_directory_uri()?>/images/pertner_bnr05.png" width="181" height="99" alt="gms"/>
            </div>

<!-- pege script-->
<script type="text/javascript"  src="<?php echo get_stylesheet_directory_uri()?>/js/jquery.js"></script>
<script type="text/javascript"  src="<?php echo get_stylesheet_directory_uri()?>/js/smoothScroll.js"></script>
<script type="text/javascript"  src="<?php echo get_stylesheet_directory_uri()?>/js/css_browser_selector.js"></script>
<script type="text/javascript"  src="<?php echo get_stylesheet_directory_uri()?>/js/jquery.easing.1.3.js"></script>
<script type="text/javascript"  src="<?php echo get_stylesheet_directory_uri()?>/js/jquery.bxslider.min.js"></script>
<script type="text/javascript"  src="<?php echo get_stylesheet_directory_uri()?>/js/superfish.js"></script>
<script type="text/javascript"  src="<?php echo get_stylesheet_directory_uri()?>/js/jquery.meanmenu.js"></script>
<script type="text/javascript">$(document).ready(function(){$('#slider').bxSlider({mode: 'fade',auto: true,pause:6000,speed: 2000,pager: true});});</script>
<script type="text/javascript"> $(document).ready(function(){ $("ul.sf-menu").superfish({  animation: {height:'show'}, delay: 1200 }); });</script>
<script type="text/javascript">jQuery(document).ready(function () { jQuery('#snavi').meanmenu();	});</script>
<script type="text/javascript">$(function(){	$(".accordionbox dt").on("click", function() {$(this).next().slideToggle();	if ($(this).children(".accordion_icon").hasClass('active')) {	$(this).children(".accordion_icon").removeClass('active');	}else {	$(this).children(".accordion_icon").addClass('active');}});});</script>
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
$(function(){
var header = $('#fixed')
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
<!-- //page script-->

<?php get_footer(); ?>
