<?php
/**
 * The template for displaying pages
  *Template Name:page-partner
 *
 * @package WordPress
 * @subpackage ivp-hp-child
 * @since ivp-hp 1.0
 */

get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri()?>/css/second.css"/>

<ul id="slider2">
    <li style="background:url(<?php echo get_stylesheet_directory_uri()?>/images/slide7.jpg) center bottom no-repeat; background-size:cover;"><h2><img src="<?php echo get_stylesheet_directory_uri()?>/images/second_title_partner.png" width="auto" height="200" alt="ビジネスパートナー募集"/></h2></li>
</ul>
<?php get_template_part( 'template-parts/content', 'slider_left' ); ?>
<div class="slide_left_after2"></div>

<div class="container clearfix">
    <div class="main_contents second">

<?php
//画像ボタン(ビジネスパートナー)
$text = <<<EOT
<h3>ビジネスパートナー企業・募集</h3>
<p>アイブイピーではお客さまの多様なニーズにお応えするために、<br />
IoTサービス開発や、WEBシステム開発にご協力頂ける<br />
ビジネスパートナー企業さまを幅広く募集しています。</p>
EOT;
set_query_var( 'btnkind', 'partner');
set_query_var( 'text', $text);
get_template_part( 'template-parts/content', 'btn_quest' );
?>

<div id="partner1"></div>

<?php
//画像ボタン(フリーランスエンジニア)
$text = <<<EOT
<h3>フリーランスエンジニア募集 </h3>
<p>フリーランスとして定期的にアイブイピーの開発案件にご協力頂ける<br />プロジェクトマネージャーさま、ディレクターさま、エンジニアさま<br />など幅広く募集しています。</p>
EOT;
set_query_var( 'btnkind', 'engineer');
set_query_var( 'text', $text);
get_template_part( 'template-parts/content', 'btn_quest' );
?>

<?php get_footer(); ?>
    </div>
</div>

<!--page script-->
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
