<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
    <!-- style -->
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <main>
        @yield('main')
    </main>
    <script src="/js/app.js" charset="utf-8"></script>
</body>

</html>