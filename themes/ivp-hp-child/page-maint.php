<?php
/**
 * The template for displaying pages
  *Template Name:page-maint
 *
 * @package WordPress
 * @subpackage ivp-hp
 * @since ivp-hp 1.0
 */

get_header(); ?>

<ul id="slider2">
    <li style="background:url(<?php echo get_stylesheet_directory_uri()?>/images/slide5.jpg) center bottom no-repeat; background-size:cover;"><h2><img src="<?php echo get_stylesheet_directory_uri()?>/images/second_title_24365.png" width="auto" height="200" alt="セキュリティ/運用保守 24/365運用保守"/></h2></li>
</ul>

<?php get_template_part( 'template-parts/content', 'slider_left' ); ?>
<div class="slide_left_after2"></div>

<div class="container clearfix">
    <div class="main_contents second">

    	<h2>２４時間３６５日のシステム＆サーバ監視により、<br />ＷＥＢシステムの安定稼働をサポートします。</h2>

        <p class="iot01"><strong>1次切り分け、クライアントさまへのメール＆電話報告</strong><br />
        定期監視プログラムがサーバの異常を検出すると、サーバ技術担当者がサーバ状況確認を行います。<br />
        サーバへの接続ができないなど、障害の発生が判明した際は、直ちに復旧作業を行います。<br />
        障害検知から15分以内に解消できないと判断した場合は、お客様にメールにて障害発生を通知いたします。<br />
        ※重度障害の場合は、緊急連絡網にてお客様の携帯電話にて連絡致します。</p>

        <h3 class="inh2 title_2436501">障害発生時の対応</h3>
        <div class="clearfix lines"><img src="<?php echo get_stylesheet_directory_uri()?>/images/diagonal_line.png" width="160" height="auto" alt="diagonal line"/></div>
		<div class="detail24365">
        	<img src="<?php echo get_stylesheet_directory_uri()?>/images/24365_img01.png" width="100%" height="auto" alt="障害発生時の対応"/>
            <h4>・24/365 迅速かつ適正な障害一時対応</h4>
            <p>システム管理部門の負担軽減<br />
            障害監視サーバからの障害通知メールまたはお客様からの連絡により検知した障害に対し、お客様に代わり障害箇所を特定し一次切り分け後、障害内容に応じてお客様ご指定の保守会社にエスカレーションを行ないます。</p>
            <h4>・運用/保守トータルサポート</h4>
            <p>障害管理の一元化<br />
            「連絡窓口対応」サービスをご契約いただきますと、障害監視センターがお客様と各保守会社担当（ベンダー、システム開発会社等）の間に入り、連絡窓口となります。お客様は、各保守会社担当を意識することなく、障害監視センターの担当とだけ対応していただくことになります。
            </p>
            <h4>・障害対応サービス</h4>
            <p>障害対応のカスタムメード対応<br />a
            リモート接続によるリブート対応やあらかじめお客様にご用意いただいた手順書に基づく復旧作業などカスタマイズにより、お客様のビジネススキームへ柔軟に対応するためのオプションサービスをご用意しております。</p>
        </div>

        <h3 class="inh2 title_2436502">サービスの特徴</h3>
		<div class="clearfix lines"><img src="<?php echo get_stylesheet_directory_uri()?>/images/diagonal_line.png" width="160" height="auto" alt="diagonal line"/></div>
		<div class="func01 clearfix">
            <table>
                <tr>
                    <td>24/365有人監視 </td>
                    <td>障害検知</td>
                    <td>障害対応</td>
                </tr>
                <tr>
                    <td>システム監視</td>
                    <td>メール</td>
                    <td>TEL報告</td>
                </tr>
            </table>
        </div>

        <div class="second_contact">
        	<a href="https://reg31.smp.ne.jp/regist/is?SMPFORM=qck-silcp-d23ee8f7d2f6fb629a9cd2f0ca70d828" target="_blank" onclick="ga('send', 'event', '24365', 'click', 'quest', 1, {'nonInteraction': 1});">お問い合せフォームはこちら</a>
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
