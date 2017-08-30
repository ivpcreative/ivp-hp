<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage ivp-hp-child
 * @since
 */

$link = 'https://reg31.smp.ne.jp/regist/is?SMPFORM=qck-silcp-d23ee8f7d2f6fb629a9cd2f0ca70d828';
$btnkind = get_query_var('btnkind');
$page = get_query_var('page');

if($btnkind == 'header'){ //ヘッダー用?>
<a href="<?php echo $link ?>" target="_blank" onclick="ga('send', 'event', 'leftnavi', 'click', 'quest', 1, {'nonInteraction': 1});">
  <i class="fa fa-envelope" aria-hidden="true"></i>お問い合せ</a>

<?php }elseif(($btnkind == 'slider_left')){ //スライダー用?>
<a href="<?php echo $link ?>" target="_blank" onclick="ga('send', 'event', 'leftnavi', 'click', 'quest', 1, {'nonInteraction': 1});">
  <i class="fa fa-envelope" aria-hidden="true"></i>お問い合せ</a>

<?php }elseif(($btnkind == 'footer')){ //フッター用?>
<a href="<?php echo $link ?>" target="_blank" onclick="ga('send', 'event', 'leftnavi', 'click', 'quest', 1, {'nonInteraction': 1});">
  <img src="<?php echo get_stylesheet_directory_uri()?>/images/arrow_white.png" width="16" height="7" alt="arrow"/><span>お問い合わせフォーム</span>
</a>

<?php }elseif(($btnkind == 'footer-sp')){ //フッタースマホ用?>
	<a href="<?php echo $link ?>" target="_blank" onclick="ga('send', 'event', 'leftnavi', 'click', 'quest', 1, {'nonInteraction': 1});">お問い合せ</a>

<?php }elseif(($btnkind == 'contents')){ //内容用?>
	<a href="<?php echo $link ?>" target="_blank" onclick="ga('send', 'event', '<?php echo $page ?>', 'click', 'quest', 1, {'nonInteraction': 1});">お問い合せフォームはこちら</a>

<?php }elseif(($btnkind == 'modal')){ //モーダル用?>
  <a href="<?php echo $link ?>" target="_blank" onclick="ga('send', 'event', '<?php echo $page ?>', 'click', 'quest', 1, {'nonInteraction': 1});" class="links">
    <span>お問い合せフォーム</span><img src="<?php echo get_stylesheet_directory_uri()?>/images/arrow_white.png" width="16" height="7" alt="arrow"/></a>


<?php } ?>
