<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('Advocate Diary') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
            @include('layouts.header')
        <main class="py-4" style="min-height: 600px">
            @yield('content')
        </main>
    </div>
    <div style="background: #CD853F;  bottom: 0; left: 0; height: 7%; width: 100%; margin-bottom: 0px;">
            <div class="text-center">
                <strong>@Copyright: Zaheer Abbas 2020</strong>
            </div>
    </div>
    </div>
</body>
</html>

