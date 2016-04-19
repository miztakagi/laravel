@section('header')
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
            <link href="./css/uikit.almost-flat.min.css" rel="stylesheet">
            <link href="./css/tooltip.almost-flat.min.css" rel="stylesheet">
            <link href="./css/chewing-grid/chewing-grid-atomic.min.css" rel="stylesheet">
            <link href="./css/style.css" rel="stylesheet">
        </head>
        <body>
@stop      