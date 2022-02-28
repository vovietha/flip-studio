<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  {{-- CSS --}}
  <link href="/css/app.css" rel="stylesheet">
  {{-- GOOGLE FONT - PT MONO --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=PT+Mono&display=swap" rel="stylesheet">
  {{-- FONTAWESOME --}}
  <script src="https://kit.fontawesome.com/ea5c631906.js" crossorigin="anonymous"></script>
  <title>@yield('title')</title>
</head>
<body>
  @include('user.layouts.header')
  @yield('content')
  @include('user.layouts.footer')
</body>
</html>