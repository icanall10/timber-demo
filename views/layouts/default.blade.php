<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="{{ asset('css/all.css') }}">

        @include('partials.yandex-maps')

        <script src="{{ asset('js/all.js') }}"></script>
    </head>

    <body class="@yield('bodyClass')">

        <div id="page">
            <div id="main">
                <x-header-block/>

                <div id="wrapper">
                    @hasSection('h1')
                        <div class="container">
                            <h1>@yield('h1')</h1>
                        </div>
                    @endif

                    @yield('content')
                </div>
            </div>
            <div id="footer">
                <x-footer-block/>
            </div>
        </div>

        <x-flash/>

    </body>
</html>