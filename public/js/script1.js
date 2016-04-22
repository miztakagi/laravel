$(function(){
  // main部のマージンをnaviの高さに応じて設定する
  var hh = $("#navi-height").height(); // header 高さ
  $("#navi-height").on("change", function(){
    hh = $(this).height();
  });
  var mh = 30;　// main部の最小topマージン
  var sh = hh + mh + 14;
  mh -=8;
  //$("#main").css("margin", sh+"px auto");
  // header/footer エレメント指定
	var navi = $("#navi-block");
	var hborder = $("#header-border");
	var foot = $("#foot");
	var fborder = $("#footer-border");
  var fh = foot.height(); // footer 高さ
  // ロゴ画像ランダム表示用乱数 1~4
  var winWidth = $(window).width();

  // イベントハンドラの設定
  // load や resize も入れておかないと android でうまく動作しないことがあるかも。問題なさそうなら外したほうが吉。
  $(window).on("load orientationchange resize", function() {
     // 現在の回転角度を取得して縦横の判定を行う 90 と -90 の場合は横向きであると判断できる
    if(Math.abs(window.orientation) === 90) {
        //console.log("横で見ている"); 
    } else {
        //console.log("縦で見ている"); 
    }
    var winWidth = $(window).width();
    var imgNum = Math.ceil( Math.random()*4);
    // @media分岐
    if(winWidth < 480){ // スマホ縦
      $("#logo").attr({ "src":"./img/logo/s0"+imgNum+".svg", "width":"60", "height":"60"});
      $("#main").css("margin", "100px auto 30px auto");
    } else if(winWidth < 600){ // スマホ横 
      $("#logo").attr({"src":"./img/logo/s0"+imgNum+".svg", "width":"40", "height":"40"});
      $("#main").css("margin", "100px auto 30px auto");
    } else if(winWidth < 768){ // タブレット 
      $("#logo").attr({"src":"./img/logo/s0"+imgNum+".svg", "width":"40", "height":"40"});
      $("#main").css("margin", "100px auto 30px auto");
    } else { // PC
      $("#logo").attr({"src":"./img/logo/y0"+imgNum+".svg", "width":"152", "height":"40"});
      $("#main").css("margin", "60px auto 30px auto");
    }
  });

	// スクロールイベントを監視
  $(window).on("scroll", function() {
    var s = $(this).scrollTop(); // スクロール量
    var scrollHeight = $(document).height(); // ページ長さ 
    var scrollPosition = $(window).height() + $(window).scrollTop();
    var winWidth = $(window).width(); 
    // スクロール量によってヘッダ部の自動出し分け
    if(s <= mh) {
      dispOn(hborder, navi);
    } else if(s > mh && scrollPosition < scrollHeight - fh ) {
      dispOn(navi, hborder);
      dispOn(foot, fborder);
    } else if (scrollPosition == scrollHeight){
      dispOn(fborder, foot); // footer 表示する // 境界でちらつくので自動表示はしない
      //alert(scrollPosition+"/"+scrollHeight);
    } else if (scrollPosition > scrollHeight){
      // bottomに来たら次のコンテンツを読み込む
      var obj = $(this);
      if (!obj.data('loading')) {
        obj.data('loading', true);
        $('#image').html('&lt;img src="loader.gif" /&gt;');
        $.ajax({
            url: "test.html",
            cache: false,
            success: function(html){ 
                $("#hoge").append(html); 
                $('#image').html(''); 
                obj.data('loading', false);
            } 
        }); 
      } 
    }
  });

  // HEADER NAVI の出し入れ
  $(hborder).on("click", function(){
  	//$("html,body").slideUp('first');
  	dispOn(hborder, navi);
  });
  // FOOTER 出し入れ
	$(fborder).on("click", function(){
		dispOn(fborder, foot);
    $('html, body').animate({scrollTop:$(document).height()+fh}, 'slow'); // bottomへスクロールして表示
	});
	$("#footer-close").on("click", function(){
		dispOn(foot, fborder);
    $('html, body').animate({scrollTop:$(document).height()-5}, 'slow'); // bottomへスクロールして表示
	});

	function dispOn(target1, target2){
		target1.hide();
		target2.show();
		return false;
	}

});