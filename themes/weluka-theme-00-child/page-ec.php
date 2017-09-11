<?php
/**
 * The template for displaying pages
  *Template Name:page-ec
 *
 * @package WordPress
 * @subpackage ivp-hp
 * @since ivp-hp 1.0
 */

get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri()?>/css/second.css"/>
<!--
<ul id="slider2">
    <li style="background:url(<?php echo get_stylesheet_directory_uri()?>/images/slide2.jpg) center bottom no-repeat; background-size:cover;"><h2><img src="<?php echo get_stylesheet_directory_uri()?>/images/second_title_ec.png" width="auto" height="200" alt="システム開発/スクラッチ開発 ECシステム開発"/></h2></li>
</ul>
-->
<div class="container clearfix">
    <div class="main_contents second">

    	<?php
        if ( have_posts() ) :
          get_template_part( 'content', get_post_format() );
        else:
          get_template_part( 'content', 'none' );
        endif;

        get_footer();
      ?>


    <!-- モーダル専用エリア -->
    <?php

    // phpQueryをロードする
    		require_once("phpQuery-onefile.php");

        echo display_modal("modal-ec1");
        echo display_modal("modal-ec2");
        echo display_modal("modal-ec3");
        echo display_modal("modal-ec4");
        echo display_modal("modal-ec5");


        //display_modal(Basic認証版<Testサイト表示対策>)
            echo display_modal($page);

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
              return $doc["#modal-include"]->html();
            }

        /* display_modal(通常版)
            function display_modal($page){
              $html = file_get_contents(home_url( ).'/'. $page.'/');
              $doc = phpQuery::newDocument($html);
              return $doc["#modal-include"]->html();
            }
            */
    ?>


<!--
<div id="modal-options2" data-izimodal-group="group1" data-izimodal-loop="" data-izimodal-title="越境ECサイトを立ち上げたい">
	<div class="modal-base">
		<div class="clearfix modal_block1 heightLineParent">
        	<div>
                <img src="<?php echo get_stylesheet_directory_uri()?>/images/modal_ec_img1.png" width="250" height="auto" alt="世界シェアNo1 ECシステム「magento」"/>
            	<h3>世界シェアNo1 ECシステム「magento」</h3>
                <p>magentoとは、現在世界で最も利用されている海外向け・越境ECのオープンソースです。特に、とりあえずすぐに越境ECサイトを立ち上げたいと言う企業さまには、デフォルト機能並びにアドオン機能を使って短期間で越境ECサイトを構築することが出来る、Eコマースプラットフォームです。</p>
            </div>
        	<div>
                <img src="<?php echo get_stylesheet_directory_uri()?>/images/modal_ec_img2.png" width="250" height="auto" alt="導入実績450以上のECシステム「ERS」"/>
            	<h3>導入実績450以上のECシステム「ERS」</h3>
                <p>ERSとは、450サイト以上の開発実績のある、アイブイピーのオリジナルECパッケージシステムです。<br />特に、基幹システムとの連携をしたい、自社の運用に合わせてカスタマイズをしたい、など、お客さまの要望の合わせたオリジナルECサイトを立ち上げることができるECパッケージシステムです。</p>
            </div>
         </div>
        <h3 class="modalh3">越境ＥＣシステムの５つの要素</h3>
        <table class="modal_block2">
            <tr>
                <td>多言語対応</td>
                <td>多通貨決済対応</td>
                <td>レスポンシブ<br />対応</td>
                <td>国内EC<br />越境EC<br />一元管理</td>
                <td>フィルメント<br />コールセンター<br />対応</td>
            </tr>
        </table>
        <h3 class="modalh3">ＥＲＳの主な機能</h3>
        <table class="modal_block3">
            <tr>
                <td>会員登録</td>
                <td>ログイン・マイページ</td>
            </tr>
            <tr class="bgt">
                <td>ショッピングカート</td>
                <td>決済システム連携</td>
            </tr>
            <tr>
                <td>商品検索</td>
                <td>商品詳細ページ</td>
            </tr>
            <tr class="bgt">
                <td>ポイント・クーポン付与</td>
                <td>注文管理</td>
            </tr>
            <tr>
                <td>発送</td>
                <td>スマートフォン対応</td>
            </tr>
        </table>
        <?php
        set_query_var( 'btnkind', 'modal');
        set_query_var( 'page', 'ec');
        get_template_part( 'template-parts/content', 'btn_quest' );?>
  </div>
</div>
<div id="modal-options3" data-izimodal-group="group1" data-izimodal-loop="" data-izimodal-title="マルチブランド対応のECサイトを立ち上げたい">
	<div class="modal-base">
    	<h3 class="modalh3b">データベースや管理画面を一元管理して<br />マルチブランドのECサイト運用が可能</h3>
        <img src="<?php echo get_stylesheet_directory_uri()?>/images/modal_ec_img3.png" width="400" height="auto" alt="イメージ図" class="modal_ec_img1"/>
        <p>ブランド別ドメインが分かれていても管理画面は顧客データ、受注データ、商品データなど各データーベースの一元管理が可能。</p>
        <?php
        set_query_var( 'btnkind', 'modal');
        set_query_var( 'page', 'ec');
        get_template_part( 'template-parts/content', 'btn_quest' );?>
  </div>
</div>
<div id="modal-options4" data-izimodal-group="group1" data-izimodal-loop="" data-izimodal-title="ＢｔｏＢ向けＥＣサイトを立ち上げたい">
	<div class="modal-base">
    	<p align="center">お客さまのビジネスに合わせたBtoBシステムを構築</p>
    	<h3 align="center" class="modalh3">ＥＲＳの主な機能</h3>
        <table class="modal_block3">
            <tr>
                <td>請求管理</td>
                <td>入金管理</td>
            </tr>
            <tr class="bgt">
                <td>注文台帳管理</td>
                <td>注文台帳管理</td>
            </tr>
            <tr>
                <td>掛け払い管理</td>
                <td>与信管理</td>
            </tr>
            <tr class="bgt">
                <td>見積書発行</td>
                <td>一括購入</td>
            </tr>
            <tr>
                <td>同梱初期</td>
                <td>代理店管理</td>
            </tr>
        </table>
    	<p align="center" class="mt30">その他の機能をカスタマイズ対応  </p>
      <?php
        set_query_var( 'btnkind', 'modal');
        set_query_var( 'page', 'ec');
        get_template_part( 'template-parts/content', 'btn_quest' );?>
  </div>
</div>
<div id="modal-options5" data-izimodal-group="group1" data-izimodal-loop="" data-izimodal-title="基幹システムや他のソリューションと連携したい">
	<div class="modal-base">
    	<p align="center">パッケージシステムやカスタマイズで対応しきれない機能は他社ソリューションシステムと連携可能</p>

    	<h3 align="center" class="modalh3 cblue">他社ソリューションシステム連携事例</h3>
        <table class="modal_block5">
            <tr>
                <td class="bgt">一元管理連携</td>
                <td><img src="<?php echo get_stylesheet_directory_uri()?>/images/modal_ec_iconA01.png" width="auto" height="40" alt="ネクストエンジン"/></td>
            </tr>
            <tr>
                <td class="bgt">物流会社連携</td>
                <td><img src="<?php echo get_stylesheet_directory_uri()?>/images/modal_ec_iconA02.png" width="auto" height="40" alt="ゆうパック" class="mr10"/><img src="<?php echo get_stylesheet_directory_uri()?>/images/modal_ec_iconA03.png" width="auto" height="40" alt="佐川急便" class="mr10"/><img src="<?php echo get_stylesheet_directory_uri()?>/images/modal_ec_iconA04.png" width="auto" height="40" alt="ヤマト運輸"/></td>
            </tr>
            <tr>
                <td class="bgt">決済代行会社連携</td>
                <td><img src="<?php echo get_stylesheet_directory_uri()?>/images/modal_ec_iconA05.png" width="auto" height="40" alt="ソニーペイメントサービス" class="mr10"/><img src="<?php echo get_stylesheet_directory_uri()?>/images/modal_ec_iconA06.png" width="auto" height="40" alt="GMOペイメントゲートウェイ" class="mr10"/><img src="<?php echo get_stylesheet_directory_uri()?>/images/modal_ec_iconA07.png" width="auto" height="40" alt="PAYPAL" class="mr10"/><img src="<?php echo get_stylesheet_directory_uri()?>/images/modal_ec_iconA08.png" width="auto" height="40" alt="ペイジェント"/></td>
            </tr>
            <tr>
                <td class="bgt">レコメンドエンジン連動</td>
                <td><img src="<?php echo get_stylesheet_directory_uri()?>/images/modal_ec_iconA09.png" width="auto" height="40" alt="Business Search Technologies Corporation" class="mr10"/></td>
            </tr>
        </table>
    	<h3 align="center" class="modalh3 cblue">基幹システム連携事例</h3>
        <div class="modal_block2_img">
            <img src="<?php echo get_stylesheet_directory_uri()?>/images/modal_ec_iconB01.png" width="auto" height="85" alt="SAP"/><img src="<?php echo get_stylesheet_directory_uri()?>/images/modal_ec_iconB02.png" width="auto" height="85" alt="NetSuite"/><img src="<?php echo get_stylesheet_directory_uri()?>/images/modal_ec_iconB03.png" width="auto" height="85" alt="GRANDIT"/><img src="<?php echo get_stylesheet_directory_uri()?>/images/modal_ec_iconB04.png" width="auto" height="85" alt="Salesforce"/><img src="<?php echo get_stylesheet_directory_uri()?>/images/modal_ec_iconB05.png" width="auto" height="85" alt="Microsoft Dynamics  CRM"/>
        </div>

        <?php
        set_query_var( 'btnkind', 'modal');
        set_query_var( 'page', 'ec');
        get_template_part( 'template-parts/content', 'btn_quest' );?>
  </div>
</div>

-->
<!-- モーダル専用エリア end -->

  <?php // get_sidebar(); ?>
  <?php get_footer(); ?>

</div>
</div>

<!-- PAGE SCRIPT -->
<script>
//01
$(document).on('click', '.open-options1', function(event) {
  event.preventDefault();
  $('#modal-options1').iziModal('open');
});
$('#modal-options1').iziModal({
  headerColor: '#272727',
  overlayColor: 'rgba(0, 0, 0, 0.6)',
  fullscreen: true,
  transitionIn: 'fadeInUp',
  transitionOut: 'fadeOutDown',
  radius: 0,
  zindex: 99999,
  navigateCaption: false,
  fullscreen: false,
});

//02
$(document).on('click', '.open-options2', function(event) {
  event.preventDefault();
  $('#modal-options2').iziModal('open');
});
$('#modal-options2').iziModal({
  headerColor: '#272727',
  overlayColor: 'rgba(0, 0, 0, 0.6)',
  fullscreen: true,
  transitionIn: 'fadeInUp',
  transitionOut: 'fadeOutDown',
  radius: 0,
  zindex: 99999,
  navigateCaption: false,
  fullscreen: false,
  width:'85%'
});

//03
$(document).on('click', '.open-options3', function(event) {
  event.preventDefault();
  $('#modal-options3').iziModal('open');
});
$('#modal-options3').iziModal({
  headerColor: '#272727',
  overlayColor: 'rgba(0, 0, 0, 0.6)',
  fullscreen: true,
  transitionIn: 'fadeInUp',
  transitionOut: 'fadeOutDown',
  radius: 0,
  zindex: 99999,
  navigateCaption: false,
  fullscreen: false,
});

//04
$(document).on('click', '.open-options4', function(event) {
  event.preventDefault();
  $('#modal-options4').iziModal('open');
});
$('#modal-options4').iziModal({
  headerColor: '#272727',
  overlayColor: 'rgba(0, 0, 0, 0.6)',
  fullscreen: true,
  transitionIn: 'fadeInUp',
  transitionOut: 'fadeOutDown',
  radius: 0,
  zindex: 99999,
  navigateCaption: false,
  fullscreen: false,
});

//05
$(document).on('click', '.open-options5', function(event) {
  event.preventDefault();
  $('#modal-options5').iziModal('open');
});
$('#modal-options5').iziModal({
  headerColor: '#272727',
  overlayColor: 'rgba(0, 0, 0, 0.6)',
  fullscreen: true,
  transitionIn: 'fadeInUp',
  transitionOut: 'fadeOutDown',
  radius: 0,
  zindex: 99999,
  navigateCaption: false,
  fullscreen: false,
  width:'85%'
});

</script>
<script type="text/javascript">
$(document).ready(function(){
  $('.sf-menu h4 a').each(function(){
    var $href = $(this).attr('href');
    if(location.href.match($href)) {
      $(this).addClass('active');
    } else {
      $(this).removeClass('active');
    }
  });
});
</script>
