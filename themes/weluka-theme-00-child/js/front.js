/* front.js；管理画面やWelukaページビルダーで動作させたくない。初期状態がhiddenなど。
load時にKICK*/
jQuery(function() {


  var url = window.location;
      if(url.href.indexOf('weluka') == -1){ //front表示のみ(Welukaビルダーでは動作しない)
        //front
          frontJsObj = new frontJs();
          frontJsObj.slider_edit();
          $('.js-edit_modal').remove(); //管理画面のモーダル用CSSの削除
      }else{
        //管理多面
          $('.js-edit_top').css('display', 'block'); //まず透明化
      }

});
/*end.load時にkick*/

/* subJsオブジェクト生成コンストラクタ */
var frontJs = function() {

  //sleiderの移動
  this.slider_edit = function() {
    if($('.js-edit_top').length ){
        $('.js-edit_top').css('opacity', '0.0'); //まず透明化
        //var elmHtml = $(".js-edit_top").html();
        if($('#slider').length){
            var elmHtml = $("#slider").prop('outerHTML');
          }
          if($('#slider2').length){
              var elmHtml = $('#slider2').prop('outerHTML');
          }

        $('.top_contents').append(elmHtml);
        $('.js-edit_top').remove();
        }
      }

  }
