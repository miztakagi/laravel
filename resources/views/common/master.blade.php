<!DOCTYPE html>
  <html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="no-cache" />
    <meta name="keywords" content="{{ Config::get('define._KEYWORD') }}" />
    <meta name="description" content="{{ Config::get('define._DESC') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{{{isset($title) ? $title : 'デジタル書籍出版サービス'}}} | ののべる.jp</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="./img/iconified/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="./img/iconified/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="./img/iconified/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="./img/iconified/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="./img/iconified/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="./img/iconified/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="./img/iconified/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="./img/iconified/apple-touch-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="./img/iconified/apple-touch-icon-180x180.png" />
    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <!-- CSS -->
    <link href="./css/uikit.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
    <!-- JAVASCRIPT -->
    <script type="text/javascript" src="./js/jquery.js"></script>
    <script type="text/javascript" src="./js/uikit.min.js"></script>
    <script type="text/javascript" src="./js/script1.js"></script>
  </head>
  <body>
@include('common.navi')

@yield('content')

<section id="newsletter" class="hero is-primary">
  <div class="hero-content">
    <div class="container">
      <!-- Begin MailChimp Signup Form -->
      <div id="mc_embed_signup" class="columns is-vcentered">
        <div class="column is-third is-left">
          <p class="title">ののべる <strong>ニュースレター</strong></p>
          <p class="subtitle">メールで最新情報をお届けします</p>
        </div>

        <div class="column">
          <form action="https://bbxdesign.us3.list-manage.com/subscribe/post?u=b43b93fe633f0560b2a72a69c&amp;id=52585e8803" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="novalidate">
            <div id="mc_embed_signup_scroll">
              <div class="control has-icon is-grouped">
                <input aria-required="true" value="" name="EMAIL" class="input is-flat required email" id="mce-EMAIL" placeholder="メールアドレス" required="" type="email">
                <i class="fa fa-envelope"></i>
                <input value="登録" name="subscribe" id="mc-embedded-subscribe" class="button is-primary is-outlined is-inverted" type="submit">
              </div>
              <div id="mce-responses">
                <div class="notification is-danger response" id="mce-error-response" style="display:none"></div>
                <div class="notification is-success response" id="mce-success-response" style="display:none"></div>
              </div>
              <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
              <div style="position: absolute; left: -5000px;" aria-hidden="true">
                <input name="b_b43b93fe633f0560b2a72a69c_52585e8803" tabindex="-1" value="" type="text">
              </div>
            </div>
          </form>
        </div>
      </div>
      <!--End mc_embed_signup-->
    </div>
  </div>
</section>

<footer class="footer">
  <div class="container">
    <div class="content is-text-centered">
      <p>&copy; 2016 nonovel.jp - produced by [creative mews LLC] All Right Reserverd.</p>
      <ul class="navigation">
        <li><a href="https://laravel.com/" target="_blank">Laravel 5.2</a></li>
        <li><a href="http://bulma.io/" target="_blank">Bulma v0.0.17</a></li>
        <li><a href="http://fortawesome.github.io/Font-Awesome/" target="_blank">Font Awesome Icons</a></li>
        <li><a href="http://www.colorhexa.com" target="_blank">Colors</a></li>
      </ul>
    </div>
  </div>
</footer>

<section class="hero is-success">
  <div id="footerMenu">
    <div class="content-wrap">
        <div class="container">
          <ul class="columns">
            <li class="column"><a href="https://laravel.com/" target="_blank">Laravel 5.2</a></li>
            <li class="column"><a href="http://bulma.io/" target="_blank">Bulma v0.0.17</a></li>
            <li class="column"><a href="http://fortawesome.github.io/Font-Awesome/" target="_blank">Font Awesome Icons</a></li>
            <li class="column"><a href="http://www.colorhexa.com" target="_blank">Colors</a></li>
          </ul>
        </div>
    </div>
  </div>
</section>

</body>
</html>
