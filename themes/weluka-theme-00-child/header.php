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
 //Welukaオプション用
 global $post, $welukaContainerClass, $welukaPageSetting, $welukaLayout, $welukaOnepageMode, $welukaRightSidebarNo, $welukaOutContainerType, $welukaThemeOptions;

 if( isset( $_GET['mode'] ) && $_GET['mode'] === 'cp' ) {
 	$welukaLayout = WelukaThemeOptions::LAYOUT_TWO_COL_RIGHT;
 } else {
 	//v1.0.6
 	$_const = 'WelukaThemeOptions::ARCHIVE_LAYOUT';
 	if ( defined ( $_const ) ) :
 		if( is_home() || is_front_page() ) :
 			$welukaLayout = get_weluka_theme_layout( WelukaThemeOptions::HOME_LAYOUT );
 		elseif( is_archive() || is_search() ) :	//v1.0.6
 			$welukaLayout = get_weluka_theme_layout( WelukaThemeOptions::ARCHIVE_LAYOUT );
 		elseif( is_page() && ! is_attachment() ) :	//v1.0.6
 			$welukaLayout = get_weluka_theme_layout( WelukaThemeOptions::PAGE_LAYOUT );
 		elseif( is_single() && ! is_attachment() ) :	//v1.0.6
 			$welukaLayout = get_weluka_theme_layout( WelukaThemeOptions::POST_LAYOUT );
 		else :
 			$welukaLayout = get_weluka_theme_layout( WelukaThemeOptions::COMMON_LAYOUT );
 		endif;
 	else :
 		if( is_home() || is_front_page() ) :
 			$welukaLayout = get_weluka_theme_layout( WelukaThemeOptions::HOME_LAYOUT );
 		else :
 			$welukaLayout = get_weluka_theme_layout( WelukaThemeOptions::COMMON_LAYOUT );
 		endif;
 	endif;
 }

 //v1.1 add modify
 if( ! is_singular( array( Weluka::$settings['cpt_ft'], Weluka::$settings['cpt_sd'] ) ) ) {
 	//v1.0.2
 	$welukaPageSetting	= get_weluka_page_setting();
 	$welukaOnepageMode = !empty( $welukaPageSetting['onepage'] ) ? $welukaPageSetting['onepage'] : 0;
 } else {
 	$welukaPageSetting	= array();
 	$welukaOnepageMode = 0;
 }
 //v1.1 add modify end

 //case top
 if( is_home() || is_front_page() ) {
 	if( !is_singular() ) {
 		$welukaPageSetting	= array();
 		$welukaOnepageMode	= 0;
 	}
 }
 //v1.0.2 end

 //ver1.0.1
 $welukaOutContainerType = !empty( $welukaPageSetting['out_container_type'] ) ? $welukaPageSetting['out_container_type'] : '';
 //ver1.0.1 addend

 $_hideHeader = !empty( $welukaPageSetting['hide_hd'] ) ? $welukaPageSetting['hide_hd'] : 0;

 	//v1.1.2 add
 /* v1.1.3 comment out functions.php move
 	$_const = 'WelukaThemeOptions::HEAD_FIXED_NO_SCROLL_DISPLAY';
 	if ( defined ( $_const ) ) {
 		if( $welukaThemeOptions[WelukaThemeOptions::HEAD_FIXED_NO_SCROLL_DISPLAY] ) { $hdClass .= " weluka-hdfixed-noscroll"; }
 	}
 */
 // phpQueryをロードする
     require_once("phpQuery-onefile.php");


     //display_modal(Basic認証版<Testサイト表示対策>)
         function display_modal($page){
         $url = home_url( ).'/' . $page .'/';
         $basic = array(
         'User-Agent: My User Agent 1.0',    //ユーザエージェントの指定
         'Authorization: Basic '.base64_encode('ivpc:Fvakh-z4'),//ベーシック認証
         );

         $options = array('http' => array(
         'header' => implode("\r\n", $basic )
         ));
         $options = stream_context_create($options);

           $html = file_get_contents(home_url( ).'/'. $page.'/', false, $options);
           $doc = phpQuery::newDocument($html);
           return $doc[""]->html();
         }

     /* display_modal(通常版)
         function display_modal($page){
           $html = file_get_contents(home_url( ).'/'. $page.'/');
           $doc = phpQuery::newDocument($html);
           return $doc["#modal-include"]->html();
         }
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
        <h1 class="h1sp"><a href="/"><img src="/wp-content/uploads/images/logo.png" width="170" height="auto" alt="IVP Internet Value Provider　IVP Co. Ltd." title="IVP Internet Value Provider　IVP Co. Ltd." class="logo1" /><img src="/wp-content/uploads/images/logo2.png" width="170" height="auto" alt="IVP Internet Value Provider　IVP Co. Ltd." title="IVP Internet Value Provider　IVP Co. Ltd." class="logo2" /></a></h1>
             <div id="snavi">
                <?php wp_nav_menu( array( 'theme_location' => 'custom-header-menu') ); ?>
    </div>
<!--side_left-->
<div class="slide_left">
  <h1><a href="/"><img src="/wp-content/uploads/images/logo.png" width="181" height="43" alt="IVP Internet Value Provider　IVP Co. Ltd." title="IVP Internet Value Provider　IVP Co. Ltd." /></a></h1>

  <?php
    wp_nav_menu( array( 'theme_location' => 'custom-header-menu', 'menu_class' => 'sf-menu') );
   ?>

  <?php
    echo display_modal("side-info");
  ?>
</div>
<!--end.side_left-->
