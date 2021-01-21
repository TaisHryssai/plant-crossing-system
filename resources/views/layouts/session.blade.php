<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/assets/images/icon-plant.png') }}">

  <title>Teste Teorema</title>
  <!--Icons-->
  <script src="https://kit.fontawesome.com/826671e166.js" crossorigin="anonymous"></script>
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <link href="{{ asset('assets/vendor/tabler/css/tabler-dashboard.css') }}" rel="stylesheet">
  <link href="{{ asset(mix('assets/css/login/session.css')) }}" rel="stylesheet">
  
</head>
<body class="">
  <div class="page ">
    <div class="page-single ">
      <div class="container">
        <div class="row">

          <div class="col col-login mx-auto">

            @include('shared/_flash')

            @yield('content')

          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
