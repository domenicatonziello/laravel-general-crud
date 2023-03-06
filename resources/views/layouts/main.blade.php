<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ env('APP_NAME') }} | @yield('title')</title>
  {{-- cdns --}}
  @yield('cdns')

  @vite('resources/js/app.js')
</head>

<body>
  <header>
    @include('includes.header')
  </header>

  <main>
    @yield('content')
  </main>

  @yield('scripts')
</body>

</html>
