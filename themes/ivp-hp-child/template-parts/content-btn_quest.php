<?php
/**
 * The template used for displaying page content
 *問い合わせボタン
 * @package WordPress
 * @subpackage ivp-hp-child
 * @since
 */

$link = 'https://reg31.smp.ne.jp/regist/is?SMPFORM=qck-silcp-d23ee8f7d2f6fb629a9cd2f0ca70d828';
$btnkind = get_query_var('btnkind');
$text = get_query_var('text');
$page = get_query_var('page');

if($btnkind == 'header'){ //ヘッダー?>

<a href="<?php echo $link ?>" target="_blank" onclick="ga('send', 'event', 'leftnavi', 'click', 'quest', 1, {'nonInteraction': 1});">
  <i class="fa fa-envelope" aria-hidden="true"></i>お問い合せ</a>

<?php }elseif(($btnkind == 'slider_left')){ //PCサイドバー?>

<a href="<?php echo $link ?>" target="_blank" onclick="ga('send', 'event', 'leftnavi', 'click', 'quest', 1, {'nonInteraction': 1});">
  <i class="fa fa-envelope" aria-hidden="true"></i>お問い合せ</a>

<?php }elseif(($btnkind == 'footer')){ //フッター?>

<a href="<?php echo $link ?>" target="_blank" onclick="ga('send', 'event', 'leftnavi', 'click', 'quest', 1, {'nonInteraction': 1});">
  <img src="<?php echo get_stylesheet_directory_uri()?>/images/arrow_white.png" width="16" height="7" alt="arrow"/><span>お問い合わせフォーム</span>
</a>

<?php }elseif(($btnkind == 'footer-sp')){ //スマホフッター?>

	<a href="<?php echo $link ?>" target="_blank" onclick="ga('send', 'event', 'leftnavi', 'click', 'quest', 1, {'nonInteraction': 1});">お問い合せ</a>

<?php }elseif(($btnkind == 'contents')){ //コンテンツ内共有(ga)?>

	<a href="<?php echo $link ?>" target="_blank" onclick="ga('send', 'event', '<?php echo $page ?>', 'click', 'quest', 1, {'nonInteraction': 1});">お問い合せフォームはこちら</a>

<?php }elseif(($btnkind == 'modal')){ //モーダル?>

  <a href="<?php echo $link ?>" target="_blank" onclick="ga('send', 'event', '<?php echo $page ?>', 'click', 'quest', 1, {'nonInteraction': 1});" class="links">
    <span>お問い合せフォーム</span><img src="<?php echo get_stylesheet_directory_uri()?>/images/arrow_white.png" width="16" height="7" alt="arrow"/></a>

<?php }elseif(($btnkind == 'partner')){ //画像ボタン：ビジネスパートナー?>

    <a href="<?php echo $link ?>"  target="_blank" onclick="ga('send', 'event', 'partner', 'click', 'quest', 1, {'nonInteraction': 1});" class="partner01 clearfix">
        <?php echo $text ?>
        <strong class="clink"><span>お問い合わせフォーム</span><img src="<?php echo get_stylesheet_directory_uri()?>/images/arrow_white.png" width="16" height="7" alt="arrow"/></strong>
    </a>

<?php }elseif(($btnkind == 'engineer')){ //画像ボタン：フリーランスエンジニア募集 ?>

      <a href="<?php echo $link ?>" target="_blank" onclick="ga('send', 'event', 'engineer', 'click', 'quest', 1, {'nonInteraction': 1});" class="partner02 clearfix">
          <?php echo $text ?>
          <strong class="clink"><span>お問い合わせフォーム</span><img src="<?php echo get_stylesheet_directory_uri()?>/images/arrow_white.png" width="16" height="7" alt="arrow"/></strong>
      </a>

<?php } ?>
