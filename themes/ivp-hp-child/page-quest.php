<?php
/**
 * The template for displaying pages
  *Template Name:page-quest
 *
 * @package WordPress
 * @subpackage ivp-hp-child
 * @since ivp-hp 1.0
 */

get_header(); ?>

<?php get_template_part( 'template-parts/content', 'slider_left' ); ?>
<div class="slide_left_after2"></div>

<ul id="slider2">
    <li style="background:url(../wp-content/themes/ivp-hp-child/images/quest_bg.jpg) center bottom no-repeat; background-size:cover;"><h2><img src="/wp-content/themes/ivp-hp-child/images/second_title_quest.png" width="auto" height="200" alt="お問い合わ"/></h2></li>
</ul>
<div class="container clearfix">
    <div class="main_contents second">
        <h3 class="inh2 title_access01" id="acc01">ご相談・ご質問はお気軽にご連絡ください。</h3>
        <div class="clearfix lines"><img src="/wp-content/themes/ivp-hp-child/images/diagonal_line.png" width="160" height="auto" alt="diagonal line"/></div>
        <div class="quest_tel">
        	<h4>03-5469-8601</h4>
            <p>営業時間：10:00-19:00(平日)</p>
        </div>

        <h4 class="quest_title">お問い合わせフォーム</h4>
<?php echo do_shortcode('[contact-form-7 id="242" title="お問い合わせ"]'); ?>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>

</div>
</div>
<!--page script-->
<script type="text/javascript">$(function(){$(".accordionbox2 dt").on("click", function() {$(this).next().slideToggle();	if ($(this).children(".accordion_icon2").hasClass('active')) {	$(this).children(".accordion_icon2").removeClass('active');	}else {	$(this).children(".accordion_icon2").addClass('active');}});});</script>
