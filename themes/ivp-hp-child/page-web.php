<?php
/**
 * The template for displaying pages
  *Template Name:page-web
 *
 * @package WordPress
 * @subpackage ivp-hp
 * @since ivp-hp 1.0
 */

get_header(); ?>

<ul id="slider2">
    <li style="background:url(<?php echo get_stylesheet_directory_uri()?>/images/slide4.jpg) center bottom no-repeat; background-size:cover;"><h2><img src="<?php echo get_stylesheet_directory_uri()?>/images/second_title_web.png" width="auto" height="200" alt="システム開発/スクラッチ開発 WEBシステム開発"/></h2></li>
</ul>

<?php get_template_part( 'template-parts/content', 'slider_left' ); ?>
<div class="slide_left_after2"></div>

<div class="container clearfix">
    <div class="main_contents second">
    
    	<h2>アイブイピーが得意としているＷＥＢ開発システム </h2>
        
		<div class="web01 clearfix">
        	<p>ECシステム</p>
        	<p>業務システム</p>
        	<p>CMS構築</p>
        	<p>宿泊予約システム</p>
        	<p>マッチングシステム</p>
        	<p>基幹連携システム</p>
        </div>
                
        <h3 class="inh2 title_web01">アイブイピーが得意としているＷＥＢ開発システム</h3>
        <div class="clearfix lines"><img src="<?php echo get_stylesheet_directory_uri()?>/images/diagonal_line.png" width="160" height="auto" alt="diagonal line"/></div>
        
        <div class="web02 clearfix">
        	<img src="<?php echo get_stylesheet_directory_uri()?>/images/web_icon01.png" width="30%" height="auto" alt="開発言語"/>
        	<img src="<?php echo get_stylesheet_directory_uri()?>/images/web_icon02.png" width="30%" height="auto" alt="フレームワーク"/>
        	<img src="<?php echo get_stylesheet_directory_uri()?>/images/web_icon03.png" width="30%" height="auto" alt="OS"/>
        	<img src="<?php echo get_stylesheet_directory_uri()?>/images/web_icon04.png" width="30%" height="auto" alt="DB  "/>
        	<img src="<?php echo get_stylesheet_directory_uri()?>/images/web_icon05.png" width="30%" height="auto" alt="WEBサーバー"/>
        	<img src="<?php echo get_stylesheet_directory_uri()?>/images/web_icon06.png" width="30%" height="auto" alt="CMS"/>
        </div>
        
        
        <h3 class="inh2 title_web02">ＷＥＢシステム開発の流れ</h3>
        <div class="clearfix lines"><img src="<?php echo get_stylesheet_directory_uri()?>/images/diagonal_line.png" width="160" height="auto" alt="diagonal line"/></div>
		<div class="web03">
        	<img src="<?php echo get_stylesheet_directory_uri()?>/images/web_img01.png" width="100%" height="auto" alt="ＷＥＢシステム開発の流れ"/>
        </div>        
        
        <h3 class="inh2 title_web01 title_web_after">開発体制（例）</h3>
		<div class="clearfix lines"><img src="<?php echo get_stylesheet_directory_uri()?>/images/diagonal_line.png" width="160" height="auto" alt="diagonal line"/></div>
		<div class="web03">
        	<img src="<?php echo get_stylesheet_directory_uri()?>/images/web_img02.png" width="100%" height="auto" alt="開発体制（例）"/>
        </div>        
        
        <div class="second_contact">
        	<a href="https://reg31.smp.ne.jp/regist/is?SMPFORM=qck-silcp-d23ee8f7d2f6fb629a9cd2f0ca70d828" target="_blank" onclick="ga('send', 'event', 'web', 'click', 'quest', 1, {'nonInteraction': 1});">お問い合せフォームはこちら</a>
        </div>

        <?php // get_sidebar(); ?>
        <?php get_footer(); ?>

    </div>
 </div>

<!--page script-->
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


