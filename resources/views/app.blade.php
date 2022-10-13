<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img\favicons\favicon-16x16.png') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="img\favicons\apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img\favicons\apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img\favicons\apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img\favicons\apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img\favicons\apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img\favicons\apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img\favicons\apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img\favicons\apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img\favicons\apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="img\favicons\android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img\favicons\favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img\favicons\favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img\favicons\favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>
      Saas Laravel8
    </title>
    <meta name="description" content="Saas" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <!-- Define your gradient here - use online tools to find a gradient matching your branding-->
    <style>
      .gradient {
        background: linear-gradient(90deg, #d53369 0%, #daae51 100%);
      }
    </style>
  </head>
  <body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">
  
    @yield('content')

    </body>
</html>