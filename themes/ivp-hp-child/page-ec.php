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

<ul id="slider2">
    <li style="background:url(<?php echo get_stylesheet_directory_uri()?>/images/slide2.jpg) center bottom no-repeat; background-size:cover;"><h2><img src="<?php echo get_stylesheet_directory_uri()?>/images/second_title_ec.png" width="auto" height="200" alt="システム開発/スクラッチ開発 ECシステム開発"/></h2></li>
</ul>
<?php get_template_part( 'template-parts/content', 'slider_left' ); ?>
<div class="slide_left_after2"></div>

<div class="container clearfix">
    <div class="main_contents second">
    
    	<h2>アイブイピーのＥＣソリューションとは？</h2>
        
        <div class="ec01 heightLineParent clearfix">
        	<p>創業20年の経験に<br />基づくノウハウ</p>
        	<p>24/365の<br />安心サポート</p>
        	<p>導入実績450サイト以上の<br />パッケージシステム</p>
        </div>
        
        <h3 class="inh2 title_ec01">このような企業さまのご要望にお応えします。</h3>
        <div class="clearfix lines"><img src="<?php echo get_stylesheet_directory_uri()?>/images/diagonal_line.png" width="160" height="auto" alt="diagonal line"/></div>
		<div class="ec02 clearfix heightLineParent">
        	<div class="open-options1"><h3>1</h3><p>既存ECサイトを<br />リニューアルしたい</p><a href="" class="open-options1 ina">OPEN</a></div>
        	<div class="open-options2"><h3>2</h3><p>越境ECサイトを<br />立ち上げたい</p><a href="" class="open-options2 ina">OPEN</a></div>
        	<div class="open-options3"><h3>3</h3><p>マルチブランド対応の<br />ECサイトを立ち上げたい</p><a href="" class="open-options3 ina">OPEN</a></div>
        	<div class="open-options4"><h3>4</h3><p>BtoB向けECサイトを<br />立ち上げたい</p><a href="" class="open-options4 ina">OPEN</a></div>
        	<div class="open-options5"><h3>5</h3><p>基幹システムや他のソリューション<br />と連携したい</p><a href="" class="open-options5 ina">OPEN</a></div>
        </div>
        
        <h3 class="inh2 title_ec02">当社オリジナルＥＣソリューションシステム「ＥＲＳ」とは？</h3>
        <div class="clearfix lines"><img src="<?php echo get_stylesheet_directory_uri()?>/images/diagonal_line.png" width="160" height="auto" alt="diagonal line"/></div>
		<div class="ec03 clearfix">
        	<img src="<?php echo get_stylesheet_directory_uri()?>/images/ec_icon01.png" width="19%" height="auto" alt="フルカスタマイズ対応可能"/>
        	<img src="<?php echo get_stylesheet_directory_uri()?>/images/ec_icon02.png" width="19%" height="auto" alt="大規模サイトに対応可能"/>
        	<img src="<?php echo get_stylesheet_directory_uri()?>/images/ec_icon03.png" width="19%" height="auto" alt="フルフィルメントコールセンター連携可能"/>
        	<img src="<?php echo get_stylesheet_directory_uri()?>/images/ec_icon04.png" width="19%" height="auto" alt="モール管理システム連携可能"/>
        	<img src="<?php echo get_stylesheet_directory_uri()?>/images/ec_icon05.png" width="19%" height="auto" alt="24/365インフラ保守運用"/>
        </div>
        
        <h3 class="inh2 title_ec03">ＥＲＳの主な機能</h3>
        <div class="clearfix lines"><img src="<?php echo get_stylesheet_directory_uri()?>/images/diagonal_line.png" width="160" height="auto" alt="diagonal line"/></div>
		<div class="func01 clearfix">
            <table>
                <tr>
                    <td colspan="3">フロント機能</td>
                </tr>
                <tr>
                    <td>会員登録</td>
                    <td>商品検索-検索リスト</td>
                    <td>商品詳細</td>
                </tr>
                <tr>
                    <td>カート投入</td>
                    <td>配送先記入フロー</td>
                    <td>伝票生成</td>
                </tr>
                <tr>
                    <td>外部通信決済</td>
                    <td>定期購入申込</td>
                    <td>定期購入修正</td>
                </tr>
                <tr>
                    <td>ウイッシュリスト</td>
                    <td>マイページセッション管理</td>
                    <td>購入履歴/ポイント履歴</td>
                </tr>
            </table>
        </div>
        <div class="func02 clearfix">
            <table>
                <tr>
                    <td colspan="3">管理画面機能</td>
                </tr>
                <tr>
                    <td>ログインセッション管理</td>
                    <td>顧客検索-検索リスト</td>
                    <td>顧客詳細</td>
                </tr>
                <tr>
                    <td>伝票検索-検索リスト</td>
                    <td>伝票詳細/伝票修正</td>
                    <td>商品検索-検索リスト</td>
                </tr>
                <tr>
                    <td>商品詳細</td>
                    <td>商品登録/商品修正</td>
                    <td>各種設定関連</td>
                </tr>
            </table>
        </div>


<!-- モーダル専用エリア -->
<div id="modal-options1" data-izimodal-group="group1" data-izimodal-loop="" data-izimodal-title="既存ECサイトをリニューアルしたい">
	<div class="modal-base">
      <ul>
        <li>お客さまの運用に合わせたカスタマイズが可能</li>
        <li>基幹システム、物流システム、コールセンター、在庫一元管理システム、レコメンドシステムなどの外部システムとの連携が可能</li>
        <li>既存システムの顧客情報や商品情報、受注情報などデータコンバートが可能</li>
        <li>フロントデザインにシステムしばりがないので、自由に編集が可能</li>
        <li>クレジットカード決済、コンビニ決済、後払い決済、キャリア決済など、多種多様な決済方法に対応可能</li>
      </ul>
      <a href="https://reg31.smp.ne.jp/regist/is?SMPFORM=qck-silcp-d23ee8f7d2f6fb629a9cd2f0ca70d828" target="_blank" onclick="ga('send', 'event', 'ec', 'click', 'quest', 1, {'nonInteraction': 1});" class="links"><span>お問い合せフォーム</span><img src="<?php echo get_stylesheet_directory_uri()?>/images/arrow_white.png" width="16" height="7" alt="arrow"/></a>
  </div>
</div>
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
      <a href="https://reg31.smp.ne.jp/regist/is?SMPFORM=qck-silcp-d23ee8f7d2f6fb629a9cd2f0ca70d828" target="_blank" onclick="ga('send', 'event', 'ec', 'click', 'quest', 1, {'nonInteraction': 1});" class="links"><span>お問い合せフォーム</span><img src="<?php echo get_stylesheet_directory_uri()?>/images/arrow_white.png" width="16" height="7" alt="arrow"/></a>
  </div>
</div>
<div id="modal-options3" data-izimodal-group="group1" data-izimodal-loop="" data-izimodal-title="マルチブランド対応のECサイトを立ち上げたい">
	<div class="modal-base">
    	<h3 class="modalh3b">データベースや管理画面を一元管理して<br />マルチブランドのECサイト運用が可能</h3>
        <img src="<?php echo get_stylesheet_directory_uri()?>/images/modal_ec_img3.png" width="400" height="auto" alt="イメージ図" class="modal_ec_img1"/>
        <p>ブランド別ドメインが分かれていても管理画面は顧客データ、受注データ、商品データなど各データーベースの一元管理が可能。</p>
      <a href="https://reg31.smp.ne.jp/regist/is?SMPFORM=qck-silcp-d23ee8f7d2f6fb629a9cd2f0ca70d828" target="_blank" onclick="ga('send', 'event', 'ec', 'click', 'quest', 1, {'nonInteraction': 1});" class="links"><span>お問い合せフォーム</span><img src="<?php echo get_stylesheet_directory_uri()?>/images/arrow_white.png" width="16" height="7" alt="arrow"/></a>
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
      <a href="https://reg31.smp.ne.jp/regist/is?SMPFORM=qck-silcp-d23ee8f7d2f6fb629a9cd2f0ca70d828" target="_blank" onclick="ga('send', 'event', 'ec', 'click', 'quest', 1, {'nonInteraction': 1});" class="links"><span>お問い合せフォーム</span><img src="<?php echo get_stylesheet_directory_uri()?>/images/arrow_white.png" width="16" height="7" alt="arrow"/></a>
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
      <a href="https://reg31.smp.ne.jp/regist/is?SMPFORM=qck-silcp-d23ee8f7d2f6fb629a9cd2f0ca70d828" target="_blank" onclick="ga('send', 'event', 'ec', 'click', 'quest', 1, {'nonInteraction': 1});" class="links"><span>お問い合せフォーム</span><img src="<?php echo get_stylesheet_directory_uri()?>/images/arrow_white.png" width="16" height="7" alt="arrow"/></a>
  </div>
</div>
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




