<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laravel 5.7 CRUD Example Tutorial - share page</title>
  {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" /> ---}}
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
</head>
<body>
  <div class="container">
    <h1>THIS IS SHARE PAGE</h1>
    @yield('content')
  </div>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>