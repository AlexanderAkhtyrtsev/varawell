<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @yield('scripts_head')
    @yield('styles_head')

    <title>{{ $title ?? 'Page' }}</title>
</head>
<body>
    @yield('body')

    @yield('scripts_body')
    @yield('styles_body')
</body>
</html>
