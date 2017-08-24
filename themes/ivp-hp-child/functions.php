<?php
/*
子function.php(子→親 の順でread)
 */
//同ディレクトリのstyle.css を読み込む
//https://github.com/wckansai2016/plugin-hands-on/blob/master/plugin_hands_on_4.md
function add_file_links() {

wp_enqueue_style( 'child-app-css', get_stylesheet_directory_uri() .'/dest/css/app.css' ); //CSS
    //wp_enqueue_script( 'child-library-jquery-fixHeightSimple', get_stylesheet_directory_uri() . '/js/library/jquery-fixHeightSimple.js' ); // 行の高さをそろえるプラグイン
    wp_enqueue_script( 'child-library-jquery-rwdImageMaps', get_stylesheet_directory_uri() . '/dest/js/library/jquery.rwdImageMaps.min.js' ); // イメージマップをレスポンシブ対応させる
    wp_enqueue_script( 'child-common-js', get_stylesheet_directory_uri() . '/dest/js/common.js' ); //JS
}

/*初期状態がhidden等、管理画面やwelukaでは表示させないファイル*/
function add_file_links_nonbuilder() {
wp_enqueue_style( 'child-nonbuilder-css', get_stylesheet_directory_uri() .'/dest/css/non-builder.css' ); //CSS
      wp_enqueue_script( 'child-nonbuilder-js', get_stylesheet_directory_uri() . '/dest/js/non-builder.js' ); //JS
}

/*ユーザーが自由に記載できるCSS、JS。初期状態はカラ。*/
function add_file_links_free() {
      wp_enqueue_style( 'child-free-css', get_stylesheet_directory_uri() .'/dest/css/free.css' ); //CSS
      wp_enqueue_script( 'child-free-js', get_stylesheet_directory_uri() . '/dest/js/free.js' ); //JS
}


//'wp_enqueue_scripts'はワードプレスに登録してあるスクリプトを読み込むタイミングで実行する。
//→※wp_enqueue_scripts アクションフックは登録されているスクリプトを読み込むタイミングで実行されるものです。
//上の関数を実行
/*どのスタイルシートよりも遅く読ませるため、200 に設定*/
//add_action( 'wp_enqueue_scripts', 'add_file_links',200 );
//管理が目のpost.php でも読み込ませる
//add_action('admin_head-post.php', 'add_file_links',200 );
/*フロントのみ有効にしたいCSS/JS 重に初期状態がhiddenであるCSSやJS*/
//add_action( 'wp_enqueue_scripts', 'add_file_links_nonbuilder',300 );
/*ユーザーが自由に記載できるCSS、JS。初期はカラ。不要ならばコメントアウト*/
//add_action( 'wp_enqueue_scripts', 'add_file_links_free',400 );
//add_action('admin_head-post.php', 'add_file_links_free',400 );


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

/*固定ページにカテゴリ・タグを追加*/
add_action('init', 'karakuri_add_category_to_page');
function karakuri_add_category_to_page()
{
	register_taxonomy_for_object_type('category', 'page');
}
add_action('init', 'karakuri_add_tag_to_page');
function karakuri_add_tag_to_page()
{
	register_taxonomy_for_object_type('post_tag', 'page');
}

/*-------------------------------------------*/
/*  <head>タグ内に自分の追加したいタグを追加する
/*-------------------------------------------*/
function add_wp_head_custom(){ ?>

<?php //get_template_part('header-sns');?>

<?php }
add_action( 'wp_head', 'add_wp_head_custom',1);

function add_wp_footer_custom(){ ?>
<!-- footerに書きたいコード -->
<?php }
add_action( 'wp_footer', 'add_wp_footer_custom', 1 );




//Contact Form7 フリガナチェック(http://like-cloud.com/archives/64)
      add_filter('wpcf7_validate_text',  'wpcf7_validate_kana', 11, 2);
    add_filter('wpcf7_validate_text*', 'wpcf7_validate_kana', 11, 2);
    function wpcf7_validate_kana($result,$tag){

      $tag = new WPCF7_Shortcode($tag);
      $name = $tag->name;

      $value = isset($_POST[$name]) ? trim(wp_unslash(strtr((string) $_POST[$name], "\n", " "))) : "";

      // furiganaはフォーム側のnameです
      if ($name === "furigana" || $name === "your-kana") {

        // カタカナの場合
        //if(!preg_match("/^[ァ-ヾ]+$/u", $value)) {
//          $result->invalidate($tag, "全角カタカナで入力してください。");
        if(!preg_match("/^[ァ-ヾ\s]+$/u", $value)) {
          $result->invalidate($tag, "全角カタカナかスペースで入力してください。");

        }
      }
      return $result;
    }
    // end.Contact Form7 フリガナチェック

//Contact Form7 確認用メールアドレス(http://takayakondo.com/contactform7-mail-confirmation/)
    add_filter( 'wpcf7_validate_email', 'wpcf7_text_validation_filter_extend', 11, 2 );
add_filter( 'wpcf7_validate_email*', 'wpcf7_text_validation_filter_extend', 11, 2 );

function wpcf7_text_validation_filter_extend( $result, $tag ) {
global $my_email_confirm;
$tag = new WPCF7_Shortcode( $tag );
$name = $tag->name;
$value = isset( $_POST[$name] )
? trim( wp_unslash( strtr( (string) $_POST[$name], "\n", " " ) ) )
: '';
if ($name == "your-email"){
$my_email_confirm=$value;
}
if ($name == "your-email_confirm" && $my_email_confirm != $value){
$result->invalidate( $tag,"確認用のメールアドレスが一致していません");
}

return $result;
}
//end .Contact Form7 確認用メールアドレス
?>
