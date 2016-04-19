@section('navi')

<div class="uk-margin">
  <div class="navi">
    <nav class="uk-navbar uk-navbar-attached">
      <a class="uk-navbar-brand" href="/">
        <img src="./img/logo/nonovel_logo_120.png" id="logo" class="logo" width="40" hight="40" />
      </a>
      <span class="copy">{{ Common::setCopy(Config::get('define._COPY_')) }}</span>
      <div class="uk-navbar-content  uk-navbar-flip">
        <button class="uk-button header-btn" data-uk-modal="{target:'#searchbox'}" data-uk-tooltip="{pos:'bottom'}" title="検索"><i class="uk-icon-search"></i></button>
        <button class="uk-button header-btn" data-uk-modal="{target:'#bell'}" data-uk-tooltip="{pos:'bottom'}" title="お知らせ"><i class="uk-icon-bell-o"></i></button>
        <button class="uk-button header-btn" data-uk-modal="{target:'#menus'}" data-uk-tooltip="{pos:'bottom'}" title="メニュー"><i class="uk-icon-bars"></i></button>
        <button class="uk-button header-btn" data-uk-modal="{target:'#login_form'}"><i class="uk-icon-user"></i> ログイン</button>
        
      </div>
    </nav>

    <!-- TOOLTIPS -->
    <div id="tt_01" style="top: 0px; visibility: visible; display: none; left: 0px;" class="uk-tooltip uk-tooltip-top">
      <div class="uk-tooltip-inner">検索</div>
    </div>
     <div id="tt_02" style="top: 0px; visibility: visible; display: none; left: 0px;" class="uk-tooltip uk-tooltip-top">
      <div class="uk-tooltip-inner">お知らせ</div>
    </div>
     <div id="tt_03" style="top: 0px; visibility: visible; display: none; left: 0px;" class="uk-tooltip uk-tooltip-top">
      <div class="uk-tooltip-inner">メニュー</div>
    </div>
    <!-- MODAL MENU -->
    <div id="menus" class="uk-modal" aria-hidden="true" style="display: none; overflow-y: auto;">
      <div class="uk-modal-dialog">
        <button type="button" class="uk-modal-close uk-close uk-close-alt"></button>
        <div class="uk-modal-header">
            <h2>サイトメニュー</h2>
        </div>
        <div>
          <button class="uk-button menu-btn"><a href="{{ url('/') }}"><i class="uk-icon-home"></i> トップへ</a></button>
        </div>
        <div>
          <button class="uk-button menu-btn"><a href="{{ url('member/index') }}"><i class="uk-icon-heart"></i> マイページ</a></button>
        </div>
        <div>
          <button class="uk-button menu-btn"><a href="{{ url('info') }}"><i class="uk-icon-info"></i> インフォ</a></button>
        </div>

        <div>
          <div aria-expanded="false" aria-haspopup="true" class="uk-button-dropdown" data-uk-dropdown="{mode:'click'}">
              <button class="uk-button menu-btn"><i class="uk-icon-bookmark"></i> 読む・探す <i class="uk-icon-caret-down"></i></button>
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
              <button class="uk-button menu-btn"><i class="uk-icon-pencil"></i> 創る・売る <i class="uk-icon-caret-down"></i></button>
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
          <button class="uk-button menu-btn"><a href="#" class="uk-icon-send"> お問合せ</a></button>
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
            <h2>検索</h2>
        </div>
        <form class="uk-form uk-width-medium-1-3">
          <fieldset>
            <legend>Legend</legend>
            <div class="uk-form-row">
              <input placeholder="フリーワード" name="searchwords" type="text" class="uk-width-1-1">
            </div>
            <div class="uk-form-row">
              <select name="category1" class="uk-width-1-1">
                <option value="" checked="checked">カテゴリ選択</option>
                <option value="99">すべて</option>
                <option value="1">小説</option>
                <option value="2">エッセイ</option>
                <option value="3">哲学・思想</option>
                <option value="4">技術・実用・ビジネス</option>
                <option value="5">イラスト・写真</option>
              </select>
            </div>
            <div class="uk-form-row">
              <select name="category2" class="uk-width-1-1">
                <option value="" checked="checked">志向選択</option>
                <option value="99">すべて</option>
                <option value="1">一般向け</option>
                <option value="2">子供向け</option>
                <option value="3">R指定あり</option>
                <option value="4">成人向け</option>
              </select>
            </div>
            <div class="uk-form-row" class="uk-text-center">
              <button type="submit" class="uk-button">検索する</button>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
    <!-- MODAL LOGIN FORM -->
    <div id="login_form" class="uk-modal" aria-hidden="true" style="display: none; overflow-y: auto;">
      <div class="uk-modal-dialog">
        <button type="button" class="uk-modal-close uk-close uk-close-alt"></button>
        <div class="uk-modal-header">
            <h2>ログイン</h2>
        </div>
        <?php //echo $add_error; ?>
        <form name="form1" method="post" action="" class="uk-form">
          <table width="100%" border="0" class="uk-table">
            <tr><th scope="row" class="label-width">ユーザー名</th>
              <td>
                <label for="username"></label>
                <input name="username" type="text" id="username" class="uk-width-1-1">
              </td>
            </tr>
            <tr><th scope="row" class="label-width">郵便番号</th>
              <td>
                <label for="zip1"></label>
                <input type="text" name="zip1" id="zip1" class="uk-width-1-5 zip-width"> - <input type="text" name="zip2" id="zip2" class="uk-width-1-5 zip-width">
              </td>
            </tr>
            <tr><th scope="row" class="label-width">メールアドレス</th>
              <td>
                <label for="email"></label>
                <input type="text" name="email" id="email" class="uk-width-1-1">
              </td>
            </tr>
            <tr><th scope="row" class="label-width">パスワード</th>
              <td>
                <label for="password"></label>
                <input type="password" name="password" id="password" class="uk-width-1-1">
              </td>
            </tr>
            <tr>
              <td colspan="2" scope="row" class="uk-text-center">
                <input type="submit" name="ok" id="ok" class="uk-button" value="ログインする">
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

  </div>
</div>
<div id="main">
@endsection
