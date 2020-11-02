<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ mix('css/all.css') }}">

        @yield('styles')

        @include('partials.yandex-maps')
    </head>

    <body class="@yield('bodyClass') @hasSection('breadcrumb') has-breadcrumb @endif">

        <div id="page">

            <div id="main">

                <x-header-block/>

                @yield('before')

                <div id="content">
                    @hasSection('breadcrumb')
                        <div class="container">
                            <ul class="breadcrumb">
                                <li><a href="{{ url('/') }}">Главная</a></li>

                                @yield('breadcrumb')
                            </ul>
                        </div>
                    @endif

                    @hasSection('h1')
                        <div class="container">
                            <h1>@yield('h1')</h1>
                        </div>
                    @endif

                    @hasSection('right')
                        <div id="wrapper">
                            <div id="container" class="container">
                                <div id="center">
                                    @yield('content')
                                </div>
                                <div id="right">
                                    @yield('right')
                                </div>
                            </div>
                        </div>
                    @else
                        <div id="wrapper">
                            @yield('content')
                        </div>
                    @endif
                </div>

                @yield('after')

            </div>

            <div id="footer">
                <x-footer-block/>
            </div>

        </div>

        <x-flash/>

        <script src="{{ mix('js/all.js') }}"></script>

        @yield('scripts')

    </body>
</html>