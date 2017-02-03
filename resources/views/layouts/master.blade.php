<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Videoclub</title>
    <link type="text/css" rel="stylesheet" href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}"/>
    <script src="{{ url('/assets/bootstrap/js/bootstrap.min.js') }}"></script>

  </head>
  <body>
    @include('partials.navbar')
    <div class="container">
      @yield('content')
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  </body>
</html>