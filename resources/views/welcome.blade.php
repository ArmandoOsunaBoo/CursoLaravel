<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta charset="utf-8">
    <title>@yield('title')</title>
  </head>
  <body>
  
    @include('_menu')
      @yield('content')
      <h1>@lang('archivo.titular')</h1>
      @section('sidebar')
      <h2>Hola desde welcome</h2>
      @show
  </body>
</html>
