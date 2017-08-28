<?php
/**
 * The template for displaying pages
  *Template Name:page-iot
 *
 * @package WordPress
 * @subpackage ivp-hp
 * @since ivp-hp 1.0
 */

get_header(); ?>

<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri()?>/css/second.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri()?>/css/modal.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri()?>/css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri()?>/css/iziModal.css"/>

<ul id="slider2">
    <li style="background:url(<?php echo get_stylesheet_directory_uri()?>/images/slide3.jpg) center bottom no-repeat; background-size:cover;"><h2><img src="<?php echo get_stylesheet_directory_uri()?>/images/second_title_iot.png" width="auto" height="200" alt="システム開発/スクラッチ開発 loTサービス開発"/></h2></li>
</ul>


<?php get_template_part( 'template-parts/content', 'slider_left' ); ?>
<div class="slide_left_after2"></div>

<div class="container clearfix">
    <div class="main_contents second">
    
    	<h2>お客様のＩｏＴサービスの企画・システム設計・運用保守までサポート</h2>
        
        <p class="iot01">今、世界的に注目を浴びているIoT(Internet of Things)。今後、IoTが本格的に普及して、2020年には世界中で500億台以上の機器にインターネットがつながるとも予想されています。<br />しかし、日本のビジネスシーンにおいて、本格的な導入・普及は、まだこれからです。当社は、お客さまのご要望や課題を伺いながら、最適なソリューションを導き出し、事業拡大に向けIoTコンサルティングから運用・保守までトータルでサポート致します。</p>
        
        <h3 class="inh2 title_iot01">ビーコン×ＩｏＴサービス</h3>
        <div class="clearfix lines"><img src="<?php echo get_stylesheet_directory_uri()?>/images/diagonal_line.png" width="160" height="auto" alt="diagonal line"/></div>
		<div class="iot02 clearfix heightLineParent">
        	<div class="open-options1"><img src="<?php echo get_stylesheet_directory_uri()?>/images/iot_img01.png" width="100%" height="auto" alt="lineビーコン" class="iot02_img"/><p>LINEビーコンを活用した<br />IoTサービス</p><a href="" class="open-options1 ina"><span>OPEN</span></a></div>
        	<div class="open-options2"><img src="<?php echo get_stylesheet_directory_uri()?>/images/iot_img02.png" width="100%" height="auto" alt="商業施設・イベント向け" class="iot02_img"/><p>商業施設・イベント向け<br />IoTサービス</p><a href="" class="open-options2 ina"><span>OPEN</span></a></div>
        </div>
        
        <h3 class="inh2 title_iot02">アジャイル開発×ＩｏＴサービス</h3>
        <div class="clearfix lines"><img src="<?php echo get_stylesheet_directory_uri()?>/images/diagonal_line.png" width="160" height="auto" alt="diagonal line"/></div>
		<div class="iot03 open-options3">
        	<h4>IoTプロト開発</h4>
            <a href="" class="open-options3 ina"><span>OPEN</span></a>
        </div>        
        
        <h3 class="inh2 title_iot03">ＩｏＴサービス開発の流れ</h3>
		<div class="clearfix lines"><img src="<?php echo get_stylesheet_directory_uri()?>/images/diagonal_line.png" width="160" height="auto" alt="diagonal line"/></div>
        <div class="iot04">
            <img src="<?php echo get_stylesheet_directory_uri()?>/images/iot_img03.png" width="100%" height="auto" alt="IoTサービス開発の流れ " class="pc"/>
            <img src="<?php echo get_stylesheet_directory_uri()?>/images/iot_img03_sp.png" width="100%" height="auto" alt="IoTサービス開発の流れ " class="sp"/>
        </div>
        
        <h3 class="inh2 title_iot04">アイブイピーの強み</h3>
		<div class="clearfix lines"><img src="<?php echo get_stylesheet_directory_uri()?>/images/diagonal_line.png" width="160" height="auto" alt="diagonal line"/></div>
		<div class="iot05">
        	<img src="<?php echo get_stylesheet_directory_uri()?>/images/iot_icon01.png" width="170" height="auto" alt="オフショア開発"/>
        	<img src="<?php echo get_stylesheet_directory_uri()?>/images/iot_icon02.png" width="170" height="auto" alt="品質テック体制"/>
        	<img src="<?php echo get_stylesheet_directory_uri()?>/images/iot_icon03.png" width="170" height="auto" alt="24/365インフラ保守セキュリティ"/>
        </div>
        
        <div class="second_contact">
        	<a href="https://reg31.smp.ne.jp/regist/is?SMPFORM=qck-silcp-d23ee8f7d2f6fb629a9cd2f0ca70d828" target="_blank" onclick="ga('send', 'event', 'iot', 'click', 'quest', 1, {'nonInteraction': 1});">お問い合せフォームはこちら</a>
        </div>


<!-- モーダル専用エリア -->
<div id="modal-options1" data-izimodal-group="group1" data-izimodal-loop="" data-izimodal-title="ＬＩＮＥビーコンを活用したＩｏＴサービス">
	<div class="modal-base">
		<img src="<?php echo get_stylesheet_directory_uri()?>/images/iot_img01.png" width="100%" height="auto" alt="lineビーコン" class="iot02_img mt-40"/>
        <p>「LINE Beacon」とは、LINEビジネスコネクトの機能の一種で、店舗などに設置されたbeaconからデータを受信し、商品やクーポン情報を顧客に届けることが出来る。<br />さらに位置情報を使った新しい顧客とのコミュニケーションを取ることが出来るため、顧客に適切なタイミングで情報を提供したり、位置情報を利用した新しいサービスが利用できる。今後、さまざまなマーケティングシーンでの展開が期待されている。 （beaconとは、周辺機器をワイヤレスで使える近距離通信規格のBluetooth®の発信機。顧客がbeaconに近づくと、スマートフォンに商品やクーポンの情報が届く。なお、スマートフォンのBluetoothをオンにしていなければ、受信はできない。）</p>
    	<h3 align="center" class="modalh3 cblue">システム連携イメージ</h3>
		<img src="<?php echo get_stylesheet_directory_uri()?>/images/iot_modal_img00.png" width="100%" height="auto" alt="システム連携イメージ" class="modalImg80"/>
        <h3 align="center" class="modalh3 cblue">活用イメージ</h3>
      	<div class="imgs clearfix">
        	<div>
            	<img src="<?php echo get_stylesheet_directory_uri()?>/images/iot_modal_img01.jpg" width="100%" height="auto" alt="商品詳細情報を配布"/>
            	<h4>商品詳細情報を配布</h4>
            </div>
        	<div>
            	<img src="<?php echo get_stylesheet_directory_uri()?>/images/iot_modal_img02.jpg" width="100%" height="auto" alt="絵に近づくと詳細情報を配布"/>
            	<h4>絵に近づくと詳細情報を配布</h4>
            </div>
        	<div>
            	<img src="<?php echo get_stylesheet_directory_uri()?>/images/iot_modal_img03.jpg" width="100%" height="auto" alt="店舗にてポイントを発行"/>
            	<h4>店舗にてポイントを発行</h4>
            </div>
        	<div>
            	<img src="<?php echo get_stylesheet_directory_uri()?>/images/iot_modal_img04.jpg" width="100%" height="auto" alt="店頭にて限定クーポンを配布"/>
            	<h4>店頭にて限定クーポンを配布</h4>
            </div>
        	<div>
            	<img src="<?php echo get_stylesheet_directory_uri()?>/images/iot_modal_img05.jpg" width="100%" height="auto" alt="ユーザーの位置情報を記録"/>
            	<h4>ユーザーの位置情報を記録</h4>
            </div>
        </div>
        <a href="https://reg31.smp.ne.jp/regist/is?SMPFORM=qck-silcp-d23ee8f7d2f6fb629a9cd2f0ca70d828" target="_blank" onclick="ga('send', 'event', 'iot', 'click', 'quest', 1, {'nonInteraction': 1});" class="links"><span>お問い合せフォーム</span><img src="<?php echo get_stylesheet_directory_uri()?>/images/arrow_white.png" width="16" height="7" alt="arrow"/></a>
      
  </div
></div>
<div id="modal-options2" data-izimodal-group="group1" data-izimodal-loop="" data-izimodal-title="商業施設・イベント向けＩｏＴサービス ">
	<div class="modal-base">
    	<img src="<?php echo get_stylesheet_directory_uri()?>/images/iot_modal_photo01.jpg" width="100%" height="auto" alt="商業施設・イベント向け" class="mb20"/>
        <p>「商業施設・イベント向けＩoＴサービス」は、ビーコンやセンサー、ゲートウェイ機器、クラウドシステムなどを組み合わせて、人やモノの位置、加速度など様々な情報を取得・分析をした結果、「領域に入った」もしくは「領域外になった」といった情報通知で、企業・学校・施設・イベントなどの入退場管理を行うことが可能。 また、顧客に適切なタイミングで商品やクーポン情報を提供したり、位置情報を利用した新しいサービスが利用できる。</p>
    	<h3 align="center" class="modalh3 cblue">機能例</h3>
      	<div class="imgs clearfix">
        	<div>
            	<img src="<?php echo get_stylesheet_directory_uri()?>/images/iot_modal_img06.jpg" width="100%" height="auto" alt="クーポン・ポイントの発行"/>
            	<h4>クーポン・ポイントの発行</h4>
            </div>
        	<div>
            	<img src="<?php echo get_stylesheet_directory_uri()?>/images/iot_modal_img07.jpg" width="100%" height="auto" alt="顧客の導線分析"/>
            	<h4>クーポン・ポイントの発行</h4>
            </div>
        	<div>
            	<img src="<?php echo get_stylesheet_directory_uri()?>/images/iot_modal_img08.jpg" width="100%" height="auto" alt="道案内・混雑状況の可視化"/>
            	<h4>道案内・混雑状況の可視化</h4>
            </div>
        	<div>
            	<img src="<?php echo get_stylesheet_directory_uri()?>/images/iot_modal_img09.jpg" width="100%" height="auto" alt="音声ガイド・観光ガイド"/>
            	<h4>音声ガイド・観光ガイド</h4>
            </div>
        	<div>
            	<img src="<?php echo get_stylesheet_directory_uri()?>/images/iot_modal_img10.jpg" width="100%" height="auto" alt="ゲーム・アトラクション"/>
            	<h4>ゲーム・アトラクション</h4>
            </div>
        	<div>
            	<img src="<?php echo get_stylesheet_directory_uri()?>/images/iot_modal_img11.jpg" width="100%" height="auto" alt="広告・デジタルサイネージ"/>
            	<h4>広告・デジタルサイネージ</h4>
            </div>
        </div>
        <a href="https://reg31.smp.ne.jp/regist/is?SMPFORM=qck-silcp-d23ee8f7d2f6fb629a9cd2f0ca70d828" target="_blank" onclick="ga('send', 'event', 'iot', 'click', 'quest', 1, {'nonInteraction': 1});" class="links"><span>お問い合せフォーム</span><img src="<?php echo get_stylesheet_directory_uri()?>/images/arrow_white.png" width="16" height="7" alt="arrow"/></a>
      
  </div>
</div>

<div id="modal-options3" data-izimodal-group="group1" data-izimodal-loop="" data-izimodal-title="アジャイル開発×ＩｏＴサービス">
	<div class="modal-base">
    	<img src="<?php echo get_stylesheet_directory_uri()?>/images/iot_modal_photo02.png" width="100%" height="auto" alt="アジャイル開発×ＩＯＴサービス" class="mb20"/>
        <ul>
        <li>お客さまの運用に合わせたカスタマイズが可能</li>
        <li>基幹システム、物流システム、コールセンター、在庫一元管理システム、レコメンドシステムなどの外部システムとの連携が可能</li>
        <li>既存システムの顧客情報や商品情報、受注情報などデータコンバートが可能</li>
        <li>フロントデザインにシステムしばりがないので、自由に編集が可能</li>
        <li>クレジットカード決済、コンビニ決済、後払い決済、キャリア決済など、多種多様な決済方法に対応可能</li>
        </ul>
        <h3 align="center" class="modalh3 cblue">ＩｏＴプロト開発とは？</h3>
        <div class="clearfix agile">
        	<img src="<?php echo get_stylesheet_directory_uri()?>/images/iot_modal_img12.png" width="100%" height="auto" alt="IoTプロト開発"/>
            <p>アイブイピーの「アジャイル×IoTサービス」は、お客さまのIoTサービスの「初めの一歩」を支援するために、 初めから完成度の高いシステムをあえて作り込まず、「オフショア開発で試しながら」作り上げていく開発サービス。</p>
        </div>
        <h3 align="center" class="modalh3 cblue">アジャイル開発のメリット</h3>
        <table class="modal_block2">
            <tr>
                <td>オフショア開発</td>
                <td>モックアップ</td>
                <td>スピーディー</td>
            </tr>
        </table>
        <a href="https://reg31.smp.ne.jp/regist/is?SMPFORM=qck-silcp-d23ee8f7d2f6fb629a9cd2f0ca70d828" target="_blank" onclick="ga('send', 'event', 'iot', 'click', 'quest', 1, {'nonInteraction': 1});" class="links"><span>お問い合せフォーム</span><img src="<?php echo get_stylesheet_directory_uri()?>/images/arrow_white.png" width="16" height="7" alt="arrow"/></a>
  </div>
</div>

<!-- モーダル専用エリア end -->

    <?php // get_sidebar(); ?>
    <?php get_footer(); ?>

    </div>
</div>

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
