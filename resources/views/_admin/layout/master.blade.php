<!DOCTYPE HTML>
<html lang="ja"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <title>管理画面</title>

    <link href="{{ asset(elixir('css/_admin/app.css')) }}" rel="stylesheet">

    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

      @yield('content')

    <footer>
    </footer>

    <script src="{{ asset(elixir('js/_admin/app.js')) }}"></script>

   @if (isset($layout['js']))
   @foreach ($layout['js'] as $js)
   <script src="{{ asset('js/' . $js . '.js') }}"></script>
   @endforeach
   @endif

  </body>
</html>