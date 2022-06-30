<html>

<head>
    <title>@yield('title', 'Laravel App') - Laravel 練習チョウムライ</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>

<body>
    @include('layouts._header')
    <div class="container">
        @yield('content')
        @include('layouts._footer')
    </div>
</body>

</html>
