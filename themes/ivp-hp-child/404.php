<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<ul id="slider2">
    <li style="background:url(<?php echo get_stylesheet_directory_uri()?>/images/slide1.jpg) center bottom no-repeat; background-size:cover;"><h2><img src="<?php echo get_stylesheet_directory_uri()?>/images/second_title_404.png" width="auto" height="200" alt="error"/></h2></li>
</ul>

<?php get_template_part( 'template-parts/content', 'slider_left' ); ?>
<div class="slide_left_after2"></div>

<div class="container clearfix">
    <div class="main_contents second">
    
        <h2 class="h2_404">404 error</h2>
        <h3 class="company_h2">大変申し訳ございません。<br />お手数をおかけ致しますが、トップページよりアクセスをお願い申し上げます。</h3>
        
        <div class="second_contact gray">
            <a href="/">トップページはこちら</a>
        </div>

    <?php get_footer(); ?>

</div>
</div>
