<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri()?>/css/index.css"/>

<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri()?>/css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri()?>/css/jquery.bxslider.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri()?>/css/meanmenu.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri()?>/css/modal.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri()?>/css/iziModal.css"/>
<link rel="icon" href="<?php echo get_stylesheet_directory_uri()?>images/favicon.ico" type="image/x-icon" />
<link rel="Shortcut Icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri()?>/images/favicon.ico" />
<link rel="canonical" href="http://www.ivp.co.jp/" />
<!--[if lt IE 9]>
<script src="//api.html5media.info/1.1.8/html5media.min.js"></script>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body <?php body_class(); ?>>
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="wrap">
	<div id="wrap">
    <!--　smart phone menu start -->
    <h1 class="h1sp"><a href="/"><img src="<?php echo get_stylesheet_directory_uri()?>/images/logo.png" width="170" height="auto" alt="IVP Internet Value Provider　IVP Co. Ltd." title="IVP Internet Value Provider　IVP Co. Ltd." class="logo1" /><img src="<?php echo get_stylesheet_directory_uri()?>/images/logo2.png" width="170" height="auto" alt="IVP Internet Value Provider　IVP Co. Ltd." title="IVP Internet Value Provider　IVP Co. Ltd." class="logo2" /></a></h1>
    <div id="snavi">
        <ul>
            <li><a href="company/">会社情報</a></li>
            <li><a href="access/">アクセスマップ</a></li>
            <li><a href="">システム開発/スクラッチ開発</a>
                <ul>
                    <li><a href="ec/"><img src="<?php echo get_stylesheet_directory_uri()?>/images/arrow_white.png" width="16" height="7" alt="arrow"/><span>ECシステム開発</span></a></li>
                    <li><a href="iot/"><img src="<?php echo get_stylesheet_directory_uri()?>/images/arrow_white.png" width="16" height="7" alt="arrow"/><span>loTサービス開発</span></a></li>
                    <li><a href="web/"><img src="<?php echo get_stylesheet_directory_uri()?>/images/arrow_white.png" width="16" height="7" alt="arrow"/><span>WEBシステム開発</span></a></li>
                </ul>
            </li>
            <li><a href="">セキュリティ/運用保守</a>
                <ul>
                    <li><a href="maint/"><img src="<?php echo get_stylesheet_directory_uri()?>/images/arrow_white.png" width="16" height="7" alt="arrow"/><span>24×365運用保守</span></a></li>
                    <li><a href="offshore/"><img src="<?php echo get_stylesheet_directory_uri()?>/images/arrow_white.png" width="16" height="7" alt="arrow"/><span>オフショア開発</span></a></li>
                </ul>
            </li>
            <li><a href="https://ww2.ivp.co.jp/recruit/" target="_blank">採用情報</a></li>
            <li><a href="partner/">協力会社募集</a></li>
            <li class="lasts"><a href="https://reg31.smp.ne.jp/regist/is?SMPFORM=qck-silcp-d23ee8f7d2f6fb629a9cd2f0ca70d828" target="_blank" onclick="ga('send', 'event', 'leftnavi', 'click', 'quest', 1, {'nonInteraction': 1});"><i class="fa fa-envelope" aria-hidden="true"></i>お問い合せ</a></li>
            <li class="lasts2"><a href="https://ww2.ivp.co.jp/english/" target="_blank"><i class="fa fa-globe" aria-hidden="true"></i>English</a></li>
        </ul>
    </div>
    <!--　smart phone menu end -->
