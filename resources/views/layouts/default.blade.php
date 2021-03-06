<html>

<head>
    <title>@yield('title', 'Laravel App') - Laravel 練習チョウムライ</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>

<body>
    @include('layouts._header')

    <div class="container">
        <div class="offset-md-1 col-md-10">
            @include('shared._messages')
            @yield('content')
            @include('layouts._footer')
        </div>
    </div>
    {{-- add js file --}}
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
