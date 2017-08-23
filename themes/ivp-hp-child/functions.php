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



/*-------------------------------------------*/
/*  ショートコードでカテゴリ一覧を呼び出す
/*-------------------------------------------*/


//　一覧記事取得関数 --------------------------------------------------------------------------------
// "num" = 表示記事数, "cat" = カテゴリスラング "body" = 記事本文の抜粋を表示するか？
// 呼び出し元での指定も可能 -> [getCategoryArticle num="x" cat="y" body="true"]
function getCatItems($atts, $content = null) {
	extract(shortcode_atts(array(
	  "num" => '3',
	  "cat" => 'blog',
      "body" => 'true'
	), $atts));

	// 処理中のpost変数をoldpost変数に退避
	global $post;
	$oldpost = $post;

    $cat_id = get_category_by_slug($cat);//スラッグをカテゴリIDに変換
    $cat_id = $cat_id->cat_ID;

    //echo $cat_id."<br />";
	// カテゴリーの記事データ取得
	$myposts = get_posts('numberposts='.$num.'&order=DESC&orderby=post_date&category='.$cat_id);

	if($myposts) {
		// 記事がある場合↓
		$retHtml = '<div class="p-postdisp p-postdisp--home">';
		// 取得した記事の個数分繰り返す
		foreach($myposts as $post) :
			// 投稿ごとの区切りのdiv
			//$retHtml .= '<div class="p-post p-post--home">';
      $retHtml .= '<li class="p-post p-post--home">';

      // 投稿年月日を取得
			$year = get_the_time('Y');	// 年
			$month = get_the_time('n');	// 月
			$day = get_the_time('j');	// 日
      //日付

			// 記事オブジェクトの整形
			setup_postdata($post);

			// サムネイルの有無チェック
			if ( has_post_thumbnail() ) {
				// サムネイルがある場合↓(サイズ指定を 'thumbnail' から 100×100 へ変更)
				$retHtml .= '<div class="p-postimg p-postimg--home">' . get_the_post_thumbnail($page->ID, array(200,100)) . '</div>';
			} else {
				// サムネイルがない場合↓※何も表示しない
				$retHtml .= '';
			}

			// 文章のみのエリアをdivで囲う
			$retHtml .= '<div class="p-poststring p-poststring--home">';
      $getDate = get_the_date();
      //$retHtml.= '<div class="p-postdate p-postdate--home">' . $getDate . '</div>';

			//$retHtml .= '<span>この記事は' . $year . '年' . $month . '月' . $day . '日に投稿されました</span>';

			// タイトル設定(リンクも設定する)
			$retHtml.= '<h4 class="p-posttitle p-posttitle--home">';
			$retHtml.= '<a href="' . get_permalink() . '">' . $getDate .'<br />'.  the_title("","",false) . '</a>';
			$retHtml.= '</h4>';

			// 本文を抜粋して取得

        if($body == 'true'){
			$getString = get_the_excerpt();
			$retHtml.= '<div class="p-postcoment p-postcoment--home">' . $getString . '</div>';
            }
			$retHtml.= '</div></li>';

		endforeach;

		$retHtml.= '</div>';
	} else {
		// 記事がない場合↓
		$retHtml='<p>記事がありません。</p>';
	}

	// oldpost変数をpost変数に戻す
	$post = $oldpost;

	return $retHtml;
}
// 呼び出しの指定
add_shortcode("getCategoryArticle", "getCatItems");

//
function shortcode_buttun($arg) {
    extract(shortcode_atts(array (
        'text' => 'お問い合わせ',
        'href' => './',
        'target' => '',
        'type' => 'default'
    ), $arg));
    if($target != '') $target = ' target="'.$target.'"';
  return '<button class="l-btn type-'.$type.'"><a href="'.$href.'"'.$target.'>'.$text.'</a></button>';
}

add_shortcode('button', 'shortcode_buttun');

function get_site_info() {

  $article_title = wp_title( ' | ', false, 'right' ) . get_bloginfo('name'); // 記事のタイトル
  $site_info = array();
	$site_info =  array(
		'article_url' => get_permalink(),//記事のURL
		'article_title' => $article_title, // 記事のタイトル
		'article_url_encode' => urlencode(get_permalink()), // 記事URLエンコード
    'article_title_encode' => urlencode($article_title.''), // 記事タイトルエンコード
		'url_encode' => urlencode(get_permalink()),
		'title_encode' => urlencode(get_the_title()),
		'tw_title_encode' => urlencode(get_the_title()."")
	 );
  return $site_info;
}

function short_snsinfo($arg){
   $site_info = get_site_info();
  extract(shortcode_atts(array ( //パラメタ初期値
    'sns' => 'tw',
  ),$arg));

  switch ($sns) {
    case 'fb':
    $snsLink = 'http://www.facebook.com/sharer.php?src=bm&u='.$site_info['url_encode'].'&t='.$site_info['article_title'];
      break;
    default: //twitter
    $snsLink = 'https://twitter.com/intent/tweet?url='.$site_info['url_encode'].'&text='.$site_info['article_title_encode'];
      break;
  }

return $snsLink;
}
add_shortcode('snsinfo', 'short_snsinfo');
//テスト用
function hogeFunc() {
			return "ショートコード作ってみたよ。";
		}
		add_shortcode('hoge', 'hogeFunc');

    /*ブログカード
    参考：https://nelog.jp/wordpress-blog-card*/
    //100×100pxのサムネイルを作成
    //add_image_size('thumb100', 100, 100, true);

    //サイトドメインを取得
    function get_this_site_domain(){
      //ドメイン情報を$results[1]に取得する
      preg_match( '/https?:\/\/(.+?)\//i', admin_url(), $results );
      return $results[1];
    }

    //本文抜粋を取得する関数（綺麗な抜粋文を作成するため）
    //使用方法：http://nelog.jp/get_the_custom_excerpt
    function get_the_custom_excerpt($content, $length) {
      $length = ($length ? $length : 70);//デフォルトの長さを指定する
      $content =  preg_replace('/<!--more-->.+/is',"",$content); //moreタグ以降削除
      $content =  strip_shortcodes($content);//ショートコード削除
      $content =  strip_tags($content);//タグの除去
      $content =  str_replace("&nbsp;","",$content);//特殊文字の削除（今回はスペースのみ）
      $content =  mb_substr($content,0,$length);//文字列を指定した長さで切り取る
      return $content;
    }

    //本文中のURLをブログカードタグに変更する
    function url_to_blog_card($the_content) {
      if ( is_singular() ) {//投稿ページもしくは固定ページのとき
        //1行にURLのみが期待されている行（URL）を全て$mに取得
        $res = preg_match_all('/^(<p>)?(<a.+?>)?https?:\/\/'.preg_quote(get_this_site_domain()).'\/[-_.!~*\'()a-zA-Z0-9;\/?:\@&=+\$,%#]+(<\/a>)?(<\/p>)?(<br ? \/>)?$/im', $the_content,$m);
        //マッチしたURL一つ一つをループしてカードを作成
        foreach ($m[0] as $match) {
          $url = strip_tags($match);//URL
          $id = url_to_postid( $url );//IDを取得（URLから投稿ID変換）
          if ( !$id ) continue;//IDを取得できない場合はループを飛ばす
          $post = get_post($id);//IDから投稿情報の取得
          $title = $post->post_title;//タイトルの取得
          $date = mysql2date('Y-m-d H:i', $post->post_date);//投稿日の取得
          $excerpt = get_the_custom_excerpt($post->post_content, 90);//抜粋の取得
        //  $thumbnail = get_the_post_thumbnail($id, 'thumb100', array('style' => '', 'class' => 'blog-card-thumb-image'));//サムネイルの取得（要100×100のサムネイル設定）
    		$thumbnail = get_the_post_thumbnail($id, 'thumbnail', array('style' => '', 'class' => 'blog-card-thumb-image'));//サムネイルの取得（要100×100のサムネイル設定）

    			if ( !$thumbnail ) {//サムネイルが存在しない場合
            $thumbnail = '<img src="'.get_template_directory_uri().'/images/no-image.png" style="width:100px;height:100px;" />';
          }
          //取得した情報からブログカードのHTMLタグを作成
          $tag = '<div class="blog-card"><div class="blog-card-thumbnail"><a href="'.$url.'" target="_blank" class="blog-card-thumbnail-link">'.$thumbnail.'</a></div><div class="blog-card-content"><div class="blog-card-title"><a href="'.$url.'" target="_blank" class="blog-card-title-link">'.$title.'</a></div><div class="blog-card-excerpt">'.$excerpt.'</div></div><div class="blog-card-footer clear"><span class="blog-card-date">'.$date.'</span></div></div>';
          //本文中のURLをブログカードタグで置換
          $the_content = preg_replace('{'.preg_quote($match).'}', $tag , $the_content, 1);
        }
      }
      return $the_content;//置換後のコンテンツを返す
    }
    add_filter('the_content','url_to_blog_card');//本文表示をフック

    //WP標準のブログカード停止(https://teratail.com/questions/55849)
    //しかし4.8では停止せず
    //oEmbed endpoint 検出用リンク停止（oEmbed サービス提供はしないが他のサイトの埋め込みは可能）
    remove_action( ‘wp_head’, ‘wp_oembed_add_discovery_links’, 10 );
    //WP REST API リンク <http://www.example.com/wp-json/>; rel=”https://api.w.org/”
    remove_action( ‘wp_head’, ‘rest_output_link_wp_head’, 10 );
    remove_action( ‘template_redirect’, ‘rest_output_link_header’, 11, 0 );
    /* end.ブログカード*/

/*ショートコード：シェアリンク
[sharelink]
と記載すると、シェアボタンを表示*/
    function sharelinkFunc() {
      $article_url = get_permalink(); // 記事のURL
      $article_title = wp_title( ' | ', false, 'right' ) . get_bloginfo('name'); // 記事のタイトル
      $article_url_encode = urlencode($article_url); // 記事URLエンコード
      $article_title_encode = urlencode($article_title." "); // 記事タイトルエンコード

      $url_encode=urlencode(get_permalink());
      $title_encode=urlencode(get_the_title());
      $tw_title_encode=urlencode(get_the_title()." ");

$the_content = <<<EOT
      <div class="share-btns">
        <ul class="cf">
          <li class="share-btns-item share-btns-item--line">
            <a href="http://www.facebook.com/sharer.php?src=bm&u={$url_encode}&t={$title_encode}" target="_blank" class="share-btn share-btn--circle fb"><i class="fa fa-facebook"></i></a>
          </li>
          <li class="share-btns-item share-btns-item--line">
            <a href="http://twitter.com/intent/tweet?url={$url_encode}&text={$tw_title_encode}" target="_blank"  class="share-btn share-btn--circle twitter"><i class="fa fa-twitter"></i></a>
          </li>
          <li class="share-btns-item share-btns-item--line">
            <a href="http://b.hatena.ne.jp/entry/{$url_encode}" target="_blank" class="share-btn share-btn--circle hatena"><i class="fa fa-google-plus"></i></a>
          </li>
          <li class="share-btns-item share-btns-item--line">
            <a href="http://getpocket.com/edit?url={$url_encode}" target="_blank" class="share-btn share-btn--circle gplus"><i class="fa fa-get-pocket"></i></a>
          </li>
        </ul>
      </div>
EOT;

return $the_content;
    		}
    		add_shortcode('sharelink', 'sharelinkFunc');
      /* end.シェアリンク*/

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
?>
