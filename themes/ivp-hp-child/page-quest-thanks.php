<?php
/**
 * The template for displaying pages
  *Template Name:page-quest-thanks
 *
 * @package WordPress
 * @subpackage ivp-hp-child
 * @since ivp-hp 1.0
 */

get_header(); ?>

<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri()?>/css/second.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri()?>/css/modal.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri()?>/css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri()?>/css/iziModal.css"/>

<?php get_template_part( 'template-parts/content', 'slider_left' ); ?>
<div class="slide_left_after2"></div>
	
<ul id="slider2">
    <li style="background:url(<?php echo get_stylesheet_directory_uri()?>/images/quest_bg.jpg) center bottom no-repeat; background-size:cover;"><h2><img src="<?php echo get_stylesheet_directory_uri()?>/images/second_title_quest.png" width="auto" height="200" alt="お問い合わ"/></h2></li>
</ul>

<div class="container clearfix">
    <div class="main_contents second">

        <h4 class="quest_title2">お問い合わせが完了しました。</h4>

		<div class="quest">
            <div align="center">
            <p>このたびはお問い合わせいただきありがとうございます。<br /><br />
            ご入力いただいたメールアドレス宛に受付確認メールをお送りしましたのでご確認ください。<br /><br />
            確認メールが届いていない場合には、メールアドレスが誤っているか、<br />確認メールが迷惑メールフォルダ等に振り分けられている可能性がありますので、再度ご確認をお願いいたします。<br /><br />
            お問い合わせ内容につきましては、通常3営業日程度を目処に、弊社担当者よりご回答させていただきます。<br />
            いましばらくお待ちくださいませ。<br /><br />
            万一、ご回答メールが届かない場合は、送信トラブル等の可能性もあります。<br />大変お手数ですが、もう一度フォームよりお問い合わせいただくか、お電話にてお問い合わせをお願いいたします。<br /><br />
            今後ともご愛顧賜りますようよろしくお願い申し上げます。</p>
            </div>
        </div>
    </div>
</div>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
