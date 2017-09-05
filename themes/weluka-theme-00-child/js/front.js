/* front.js；管理画面やWelukaページビルダーで動作させたくない。初期状態がhiddenなど。
load時にKICK*/
jQuery(function() {
  frontJsObj = new frontJs();
});
/*end.load時にkick*/

/* subJsオブジェクト生成コンストラクタ */
var frontJs = function() {
  var editmode = false;

  var url = window.location;
			//var path = url.pathname.split('/');
			// ↑上記でも同じですが現在ページURLのパス名のみです。？以降の文字列も取得しません。
  if(url.href.indexOf('weluka') == -1){ //TOPの画像をcontainer外に移動
    var elmHtml = $(".js-edit_top").html();
    $('.top_contents').append(elmHtml);
    $('.js-edit_top').empty();
    $('.js-edit_modal').empty(); //管理画面のモーダル用CSSの削除
  }

} //end.subJs
