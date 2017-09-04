/* front.js；管理画面やWelukaページビルダーで動作させたくない。初期状態がhiddenなど。
load時にKICK*/
jQuery(function() {
  frontJsObj = new frontJs();
});
/*end.load時にkick*/

/* subJsオブジェクト生成コンストラクタ */
var frontJs = function() {
  var editmode = false;

/*
  // URLのパラメータを取得
  var urlParam = location.search.substring(1);
  // URLにパラメータが存在する場合
  if (urlParam) {
    // 「&」が含まれている場合は「&」で分割
    var param = urlParam.split('&');

    // パラメータを格納する用の配列を用意
    var paramArray = [];
    // 用意した配列にパラメータを格納
    for (i = 0; i < param.length; i++) {
      var paramItem = param[i].split('=');
    if (paramItem[0]== "Weluka_builder") { //パラメタITMにWeluka_builderがある
          editmode = true;
      }
    }
  }
  */

  var url = window.location;
			//var path = url.pathname.split('/');
			// ↑上記でも同じですが現在ページURLのパス名のみです。？以降の文字列も取得しません。
  if(url.href.indexOf('weluka') == -1){ //TOPの画像をcontainer外に移動
    var elmHtml = $(".js-edit_top").html();
    $('.top_contents').append(elmHtml);
    $('.js-edit_top').empty();
  }

} //end.subJs
