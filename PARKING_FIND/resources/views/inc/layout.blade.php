<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&display=swap" rel="stylesheet">
    <link rel = "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"></link>
    <link rel="stylesheet" href="/css/index.css">
    @yield('privateCSS')
    <script src="/js/index.js" defer></script>
    <title>Parking Find</title>
</head>

<body>
    @include('inc.header')

    @yield('main')

    @include('inc.footer')
</body>
</html>