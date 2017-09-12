<?php
/**
子function.php(子→親 の順でread)
 */
//同ディレクトリのstule.css を読み込む
//https://github.com/wckansai2016/plugin-hands-on/blob/master/plugin_hands_on_4.md
function add_file_links() {
    wp_enqueue_style( 'child-sub-common-style', get_stylesheet_directory_uri() .'/css/sub-common-style.css' ); //CSS
    wp_enqueue_style( 'child-sub-free-style', get_stylesheet_directory_uri() . '/css/sub-free-style.css' ); //CSS
    wp_enqueue_script( 'child-library-jquery-fixHeightSimple', get_stylesheet_directory_uri() . '/js/library/jquery-fixHeightSimple.js' ); // 行の高さをそろえるプラグイン
        wp_enqueue_script( 'child-library-jquery-rwdImageMaps', get_stylesheet_directory_uri() . '/js/library/jquery.rwdImageMaps.min.js' ); // イメージマップをレスポンシブ対応させる
        wp_enqueue_script( 'child-common-js', get_stylesheet_directory_uri() . '/js/sub-common-js.js' ); //JS
    wp_enqueue_script( 'child-sub-free-js', get_stylesheet_directory_uri() . '/js/sub-free-js.js' ); //JS

}



//'wp_enqueue_scripts'はワードプレスに登録してあるスクリプトを読み込むタイミングで実行する。
//→※wp_enqueue_scripts アクションフックは登録されているスクリプトを読み込むタイミングで実行されるものです。
//上の関数を実行


/*どのスタイルシートよりも遅く読ませるため、200 に設定*/
add_action( 'wp_enqueue_scripts', 'add_file_links',200 );
//管理が目のpost.php でも読み込ませる
add_action('admin_head-post.php', 'add_file_links',200 );


/*リンクを絶対パスに変更*/
function delete_hostname_from_attachment_url( $url ) {
    $regex = '/^http(s)?:\/\/[^\/\s]+(.*)$/';
    if ( preg_match( $regex, $url, $m ) ) {
        $url = $m[2];
    }
    return $url;
}
add_filter( 'wp_get_attachment_url', 'delete_hostname_from_attachment_url' );
add_filter( 'attachment_link', 'delete_hostname_from_attachment_url' );



/*-------------------------------------------*/
/*  <head>タグ内に自分の追加したいタグを追加する
/*-------------------------------------------*/
function add_wp_head_custom(){
}
add_action( 'wp_head', 'add_wp_head_custom',1);

function add_wp_footer_custom(){
//footerに書きたいコード
}
add_action( 'wp_footer', 'add_wp_footer_custom', 1 );

/*-------------------------------------------*/
/*  カスタムヘッダー
/*-------------------------------------------*/
function register_header_menu() {
  register_nav_menu('custom-header-menu',__( 'Custom Header Menu' ));
}
add_action( 'init', 'register_header_menu' );

function register_sp_footer_menu() {
  register_nav_menu('custom-sp-footer-menu',__( 'Custom SP Footer Menu' ));
}
add_action( 'init', 'register_sp_footer_menu' );

function register_pc_footer_menu1() {
  register_nav_menu('custom-pc-footer-menu1',__( 'Custom PC Footer Menu 1' ));
}
add_action( 'init', 'register_pc_footer_menu1' );

function register_pc_footer_menu2() {
  register_nav_menu('custom-pc-footer-menu2',__( 'Custom PC Footer Menu 2' ));
}
add_action( 'init', 'register_pc_footer_menu2' );

function register_pc_footer_menu3() {
  register_nav_menu('custom-pc-footer-menu3',__( 'Custom PC Footer Menu 3' ));
}
add_action( 'init', 'register_pc_footer_menu3' );

/*-------------------------------------------*/
/*  ショートコード(問い合わせボタン)
/*-------------------------------------------*/
function shortcode_quest_btn($arg) {
    extract(shortcode_atts(array (
        'type' => '', //a:aタグのみ i:アイコン / img:画像
        'ga_flg' => '',//GA tag に入れるカテゴリ
        'ga_dest' => 'quest',//GA tag 目的地
        'text' => 'お問い合わせ',
        'href' => '/quest/', //リンク先
        'target' => '',//aタグ targer属性
        'i_class' => '', //iタグのクラス
        'img_class' => '',//imgタグのクラス
        'strong_class' => '',//storongタグのクラス(type=storongのみ)
        'a_class' => '',//aタグのクラス
        'aria_hidden' =>'' //aria-hidden の設定
    ), $arg));

//GA TAG
$gatag = 'ga( \'send\', \'event\', \''.$ga_flg.'\', \'click\', \''.$ga_dest.'\', 1, {\'nonInteraction\': 1});';


if( $type=='i'){
  $qpper = '<i class="'.$i_class.'" aria-hidden="'.$aria_hidden.'"></i>'.$text;
}elseif($type=='img'){
  $qpper = '<span>'.$text.'</span><img src="/wp-content/uploads/images/arrow_white.png" width="16" height="7" alt="arrow"/ class="'.$img_class.'">';
}elseif($type=='strong'){
  $qpper = '<strong class="'.$strong_class.'" ><span>'.$text.'</span><img src="/wp-content/uploads/images/arrow_white.png" width="16" height="7" alt="arrow"/ class="'.$img_class.'"><storong>';

}else{
  $qpper = $text;
}

$var= '<a href="'.$href.'" target="'.$target.'" onclick="'.$gatag.'" class="'.$a_class.'">';
$var = $var .$qpper;
$var = $var .'</a>';

return $var;
}
add_shortcode('quest_btn', 'shortcode_quest_btn');

?>
