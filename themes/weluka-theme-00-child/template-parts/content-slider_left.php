<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage ivp-hp-child
 * @since
 */
?>
<div class="slide_left">
  <h1><a href="/"><img src="/wp-content/uploads/images/logo.png" width="181" height="43" alt="IVP Internet Value Provider　IVP Co. Ltd." title="IVP Internet Value Provider　IVP Co. Ltd." /></a></h1>

  <?php wp_nav_menu( array( 'theme_location' => 'custom-header-menu', 'menu_class' => 'sf-menu') ); ?>

  <div class="sf-bottom">
    <p id="fixed" class="scroll">代表電話(東京本社)<strong>03-5469-8601</strong><span>営業時間:10:00-19:00（平日)</span></p>
    <?php

        //set_query_var( 'btnkind', 'slider_left');
        //get_template_part( 'template-parts/content', 'btn_quest' );
        //問い合わせボタンショートコード
        echo do_shortcode('[quest_btn type="i" text="お問い合せ" ga_flg="leftnavi" i_class="fa fa-envelope" aria_hidden="true"]');
        ?>

    <a href="https://ww2.ivp.co.jp/english/" target="_blank"><i class="fa fa-globe" aria-hidden="true"></i>English</a>
  </div>
</div>
