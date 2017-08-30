<?php
/**
 * The template for displaying pages
  *Template Name:page-offshore
 *
 * @package WordPress
 * @subpackage ivp-hp
 * @since ivp-hp 1.0
 */

get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri()?>/css/second.css"/>

<ul id="slider2">
    <li style="background:url(<?php echo get_stylesheet_directory_uri()?>/images/slide7.jpg) center bottom no-repeat; background-size:cover;"><h2><img src="<?php echo get_stylesheet_directory_uri()?>/images/slide7.jpg" width="auto" height="200" alt="セキュリティ/運用保守 オフショア開発"/></h2></li>
</ul>

<?php get_template_part( 'template-parts/content', 'slider_left' ); ?>
<div class="slide_left_after2"></div>

<div class="off_bg">
<div class="container clearfix">
    <div class="main_contents second">

    	<h2>アイブイピーは、日本とフィリピンに自社開発拠点をもち、<br />オフショア開発を行うグローバル開発企業です。</h2>

        <p class="iot01">お客さまが抱える事業課題に対して、IoTサービス開発やECシステム開発、WEBシステム開発、などの開発サービスと徹底した品質管理とともに、ソリューション提供するためにアジアでビジネスを展開しています。</p>

        <h3 class="inh2 title_2436502">アイブイピーが展開するサービス </h3>
        <div class="clearfix lines"><img src="<?php echo get_stylesheet_directory_uri()?>/images/diagonal_line.png" width="160" height="auto" alt="diagonal line"/></div>
		<div class="off01 heightLineParent clearfix">
        	<div>
            	<img src="<?php echo get_stylesheet_directory_uri()?>/images/off_icon01.png" width="80%" height="auto" alt="システム開発費を抑えたい"/>
            </div>
        	<div>
            	<img src="<?php echo get_stylesheet_directory_uri()?>/images/off_icon02.png" width="80%" height="auto" alt="日本で優秀なエンジニアが採用できない"/>
            </div>
        	<div>
            	<img src="<?php echo get_stylesheet_directory_uri()?>/images/off_icon03.png" width="70%" height="auto" alt="開発要員を増員したい"/>
            </div>
        	<div>
            	<img src="<?php echo get_stylesheet_directory_uri()?>/images/off_icon04.png" width="70%" height="auto" alt="過去にオフショア開発に失敗して不安がある"/>
            </div>
        </div>

        <h3 class="inh2 title_off02">オフショア事業</h3>
        <div class="clearfix lines"><img src="<?php echo get_stylesheet_directory_uri()?>/images/diagonal_line.png" width="160" height="auto" alt="diagonal line"/></div>
        <div class="ec01 heightLineParent clearfix offfeat">
        	<p>オフショア<br />受託開発</p>
        	<p>オフショア<br />ラボ開発</p>
        	<p>オフショア<br />インフラ保守運用</p>
        </div>
		<p class="off02">アイブイピーは会社設立時からMicrosoft系開発に特化してきました。 現在は、C#のプログラマーが80名以上在席しています。<br />理工系トップクラスの工科大学をはじめ、情報系大学の学位／学士の保有者から選抜しています。</p>
        <div id="main_slide">
            <ul>
                <li><img src="<?php echo get_stylesheet_directory_uri()?>/images/off_img01.jpg" width="auto" height="200" alt="" /></li>
                <li><img src="<?php echo get_stylesheet_directory_uri()?>/images/off_img02.jpg" width="auto" height="200" alt="" /></li>
                <li><img src="<?php echo get_stylesheet_directory_uri()?>/images/off_img03.jpg" width="auto" height="200" alt="" /></li>
                <li><img src="<?php echo get_stylesheet_directory_uri()?>/images/off_img04.jpg" width="auto" height="200" alt="" /></li>
                <li><img src="<?php echo get_stylesheet_directory_uri()?>/images/off_img05.jpg" width="auto" height="200" alt="" /></li>
            </ul>
        </div>

        <div class="second_contact">
        	<a href="https://reg31.smp.ne.jp/regist/is?SMPFORM=qck-silcp-d23ee8f7d2f6fb629a9cd2f0ca70d828" target="_blank" onclick="ga('send', 'event', 'offshore', 'click', 'quest', 1, {'nonInteraction': 1});">お問い合せフォームはこちら</a>
        </div>

        <?php // get_sidebar(); ?>
        <?php get_footer(); ?>

        </div>
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
