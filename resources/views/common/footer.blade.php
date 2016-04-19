@section('footer')
<!-- FOOTER -->
<section class="uk-footer" id="footerMenu">
  <div class="uk-container uk-container-center uk-text-center">
    <ul class="uk-subnav uk-subnav-line uk-flex-center">
      <li><a href="https://laravel.com/docs/5.2/blade" target="_blank">laravel 5.2</a></li>
      <li><a href="http://getuikit.com/docs/core.html" target="_blank">UIKit</a></li>
      <li><a href="http://php.net/manual/ja/ref.array.php" target="_blank">PHP</a></li>
      <li><a href="http://www.colorhexa.com/00d4d4" target="_blank">COLOR</a></li>
    </ul>
    <ul class="uk-subnav uk-subnav-line uk-flex-center">
      <li><a class="icon" href="http://getuikit.com/docs/icon.html" target="_blank"><i class="fa fa-adjust"></i>ICON</a></li>
      <li><a class="icon" href="https://nonovel.backlog.jp/projects/FUEL" target="_blank"><i class="fa fa-beer"></i> BACKLOG</a></li>
    </ul>
    <div class="uk-panel">
      <p>&copy; <?=date("Y")?> nonovel.jp all right reserverd.</p>
    </div>
  </div>
</section>
<!-- END FOOTER -->
</div>
<!-- END MAIN -->
<!-- JAVASCRIPT -->
<script type="text/javascript" src="./js/jquery.js"></script>
<script type="text/javascript" src="./js/uikit.min.js"></script>
<script type="text/javascript" src="./js/tooltip.min.js"></script>
<script type="text/javascript" src="./js/jquery.footerMenu.js"></script>
<script type="text/javascript" src="./js/script1.js"></script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<script>
	$('body').footerMenu();
</script>
</body>
</html>
@stop
