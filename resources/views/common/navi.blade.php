@section('navi')

<div class="uk-margin">
  <div class="navi">
    <div id="navi-block" style="display:block;">
      <nav id="navi-height" class="uk-navbar uk-navbar-attached uk-clearfix">
        <div class="uk-float-left">
          <a class="navbar-logo" href="/">
            <img src="./img/logo/y01.svg" width="152" height="40" id="logo" class="logo" />
          </a>
          <span class="copy">{{ Common::setCopy(Config::get('define._COPY_')) }}</span>
        </div>
        <div class="uk-navbar-content  uk-navbar-flip">
          <button class="uk-button header-btn" data-uk-modal="{target:'#searchbox'}"><i class="uk-icon-search"></i></button>
          <button class="uk-button header-btn" data-uk-modal="{target:'#bell'}"><i class="uk-icon-bell-o"></i></button>
          <button class="uk-button header-btn" data-uk-modal="{target:'#menus'}"><i class="uk-icon-bars"></i></button>
          <button class="uk-button header-btn" data-uk-modal="{target:'#login_form'}"><i class="uk-icon-sign-in"></i> ログイン</button>
        </div>
      </nav>
    </div>
    <div id="header-border" style="display:none;">
      <a class="icon-center uk-icon-arrow-up"></a>
    </div>

    <!-- MODAL MENU -->
    <div id="menus" class="uk-modal" aria-hidden="true" style="display: none; overflow-y: auto;">
      <div class="uk-modal-dialog">
        <button type="button" class="uk-modal-close uk-close uk-close-alt"></button>
        <div class="uk-modal-header">
            <h2><i class="uk-icon-bars"></i> サイトメニュー</h2>
        </div>
        <div>
          <button class="uk-button uk-button-large menu-btn"><a href="{{ url('/') }}"><i class="uk-icon-home"></i> トップへ</a></button>
        </div>
        <div>
          <button class="uk-button uk-button-large menu-btn"><a href="{{ url('member/index') }}"><i class="uk-icon-heart"></i> マイページ</a></button>
        </div>
        <div>
          <button class="uk-button uk-button-large menu-btn"><a href="{{ url('info') }}"><i class="uk-icon-info"></i> インフォ</a></button>
        </div>

        <div>
          <div aria-expanded="false" aria-haspopup="true" class="uk-button-dropdown" data-uk-dropdown="{mode:'click'}">
              <button class="uk-button uk-button-large menu-btn"><i class="uk-icon-bookmark"></i> 読む・探す <i class="uk-icon-caret-down"></i></button>
              <div style="top: 30px; left: 0px;" class="uk-dropdown uk-dropdown-bottom dropdown-inner">
                  <ul class="uk-nav uk-nav-dropdown uk-dropdown-close">
                      <li><a href="{{ url('welcome') }}" class="uk-icon-coffee"> ようこそ</a></li>
                      <li><a href="#" class="uk-icon-commenting"> 評価する</a></li>
                      <li><a href="#" class="uk-icon-book"> 購読履歴</a></li>
                  </ul>
              </div>
          </div>
        </div>
        <div>
          <div aria-expanded="false" aria-haspopup="true" class="uk-button-dropdown" data-uk-dropdown="{mode:'click'}">
              <button class="uk-button uk-button-large menu-btn"><i class="uk-icon-pencil"></i> 創る・売る <i class="uk-icon-caret-down"></i></button>
              <div style="top: 30px; left: 0px;" class="uk-dropdown uk-dropdown-bottom dropdown-inner">
                  <ul class="uk-nav uk-nav-dropdown uk-dropdown-close">
                      <li><a href="#" class="uk-icon-leaf"> はじめに</a></li>
                      <li><a href="#" class="uk-icon-cloud-upload"> 作品登録</a></li>
                      <li><a href="#" class="uk-icon-bar-chart"> 作品管理</a></li>
                      <li><a href="#" class="uk-icon-paypal"> 入出金管理</a></li>
                  </ul>
              </div>
          </div>
        </div>

        <div class="uk-grid uk-grid-divider uk-grid-small">
          <div class="uk-width-1-4 line-padd">
            <a href=""><i class="uk-icon-star"></i><br>LINE</a>
          </div>
          <div class="uk-width-1-4 line-padd">
            <a href=""><i class="uk-icon-twitter"></i><br>Twitter</a>
          </div>
          <div class="uk-width-1-4 line-padd">
            <a href=""><i class="uk-icon-facebook-official"></i><br>facebook</a>
          </div>
          <div class="uk-width-1-4 line-padd">
            <a href=""><i class="uk-icon-rss"></i><br>RSS</a>
          </div>
        </div>

        <div>
          <button class="uk-button uk-button-large menu-btn"><a href="#" class="uk-icon-send"> お問合せ</a></button>
        </div>

        <ul>
          <li><a href="http://qiita.com/kazukichi/items/2a6e242091c5f485b976" target="_blank">Fuelの使い方</a></li>
          <li><a href="http://getuikit.com/docs/core.html" target="_blank">UIKit</a></li>
          <li><a href="http://fuelphp.jp/docs/1.8/general/controllers/base.html" target="_blank">FuelPHP Documents</a></li>
        </ul>
      </div>
    </div>
    <!-- MODAL SEARCH -->
    <div id="searchbox" class="uk-modal" aria-hidden="true" style="display: none; overflow-y: auto;">
      <div class="uk-modal-dialog">
        <button type="button" class="uk-modal-close uk-close uk-close-alt"></button>
        <div class="uk-modal-header">
            <h2><i class="uk-icon-search"></i> 検索</h2>
        </div>
        <form class="uk-form uk-width-medium-1-1">
            <div class="uk-form-controls">
              <input placeholder="フリーワード" name="searchwords" type="text" class="uk-width-1-1 uk-form-large">
            </div>
            <div class="uk-form-controls">
              <select name="category1" class="uk-form-large">
                <option value="">すべてのカテゴリ</option>
                <option value="1">小説</option>
                <option value="2">エッセイ</option>
                <option value="3">哲学・思想</option>
                <option value="4">技術・実用・ビジネス</option>
                <option value="5">イラスト・写真</option>
              </select>
            </div>
            <div class="uk-form-controls">
              <select name="category2" class="uk-form-large">
                <option value="">すべての読者向け</option>
                <option value="1">一般向け</option>
                <option value="2">子供向け</option>
                <option value="3">R指定あり</option>
                <option value="4">成人向け</option>
              </select>
            </div>
            <div class="uk-text-center">
              <button type="submit" class="uk-button uk-button-large">検索する</button>
            </div>
        </form>
      </div>
    </div>
    <!-- MODAL LOGIN FORM -->
    <div id="login_form" class="uk-modal" aria-hidden="true" style="display: none; overflow-y: auto;">
      <div class="uk-modal-dialog">
        <button type="button" class="uk-modal-close uk-close uk-close-alt"></button>
        <div class="uk-modal-header">
            <h2><i class="uk-icon-sign-in"></i> ログイン</h2>
        </div>
        <?php //echo $add_error; ?>
        <form name="form1" method="post" action="" class="uk-form">
          <table width="100%" border="0" class="uk-table">
            <tr><th scope="row" class="label-width">ユーザー名</th>
              <td class="uk-form-controls">
                <input name="username" type="text" id="username" class="uk-width-1-1 uk-form-large">
              </td>
            </tr>
            <tr><th scope="row" class="label-width">郵便番号</th>
              <td class="">
                <input type="text" name="zip1" id="zip1" class="uk-width-1-5 uk-form-large zip-width"> <i class="uk-icon-minus"></i> <input type="text" name="zip2" id="zip2" class="uk-width-1-5 uk-form-large zip-width">
              </td>
            </tr>
            <tr><th scope="row" class="label-width">メールアドレス</th>
              <td class="uk-form-controls">
                <input type="text" name="email" id="email" class="uk-width-1-1 uk-form-large">
              </td>
            </tr>
            <tr><th scope="row" class="label-width">パスワード</th>
              <td class="uk-form-controls">
                <input type="password" name="password" id="password" class="uk-width-1-1 uk-form-large">
              </td>
            </tr>
            <tr>
              <td colspan="2" scope="row" class="uk-text-center">
                <button type="submit" name="ok" id="ok" class="uk-button uk-button-large">ログインする</button>
              </td>
            </tr>
            <tr>
              <td colspan="2" class="uk-ckearfix">
                <button type="button" class="uk-button uk-float-left">新規登録はこちら</button>
                <button type="button" class="uk-button uk-float-right uk-modal-close">キャンセル</button>
              </td>
            </tr>
          </table>
        </form>
      </div>
    </div>
    <!-- MODAL INFO -->
    <div id="infobox" class="uk-modal" aria-hidden="true" style="display: none; overflow-y: auto;">
      <div class="uk-modal-dialog">
        <button type="button" class="uk-modal-close uk-close uk-close-alt"></button>
        <div class="uk-modal-header">
            <h2><i class="uk-icon-sign-in"></i> 読んでみる？</h2>
        </div>
        <table width="100%" border="0" class="uk-table">
          <tr><th scope="row" class="label-width">野ノベル？</th>
            <td>
              <p class="box-text">
              ラノベ？それとも純文学？<br>いえいえ、これぞまさに「野ノベル」です！<br>もはやジャンル無用のインディーズ作家たちのユニークな作品がいっぱいです！<br>新しい「面白さ」を発見して下さい。検索は<a href="" data-uk-modal="{target:'#searchbox'}">コチラ</a>から
              </p>
            </td>
          </tr>
          <tr><th scope="row" class="label-width">野ノベル？</th>
            <td>
              <p class="box-text">
              目指せ、印税生活！出版社から本を出さなくたって、書いて生活できれば、それはもう立派な作家じゃないか。要は、たくさんの人に面白いと思ってもらえることなんだよね！
              </p>
            </td>
          </tr>
          <tr><th scope="row" class="label-width">野ノベル？</th>
            <td>
              <p class="box-text">
              第一回ののべる大賞はどの作品に！？それを決めるのは、ただ読者評価のみ。賞金もたんまりですよ。詳しくは<a href="">コチラ</a>を
              </p>
            </td>
          </tr>
        </table>
      </div>
    </div>

  </div>
</div>
<div id="main">
  <div class="uk-clearfix">
    <div id="user-name">ようこそ、ゲストさん</div>
  </div>
@endsection
