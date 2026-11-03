<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title')</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&amp;display=swap" rel="stylesheet">
<style>
body{margin:0;background:#FFFFFF}
a{color:#0D47A1}a:hover{color:#08306E}
input,textarea,select,button{font:inherit}
</style>
</head>
<body>
<div style="position: relative; overflow: hidden; min-height: 100vh; background: #FFFFFF; color: #0B2545; font-family: 'Plus Jakarta Sans', system-ui, sans-serif; font-size: 15px">
  <div aria-hidden="true" style="position: absolute; top: -300px; right: -240px; width: 780px; height: 780px; border-radius: 50%; background: #E3F2FD"></div>

  @include('partials.header', ['active' => $active ?? null])

  <div style="position: relative; max-width: 1200px; margin: 0 auto; padding: 32px 24px 64px; display: flex; flex-wrap: wrap; gap: 48px">
    @include('partials.sidebar', ['active' => $active ?? null, 'cta' => $cta ?? null])

    @yield('content')
  </div>
</div>
@stack('scripts')
</body>
</html>
