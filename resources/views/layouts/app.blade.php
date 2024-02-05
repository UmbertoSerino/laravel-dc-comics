<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ Vite::asset('resources/assets/img/favicon.ico') }}" type="image/x-icon">
    <title>@yield('title', 'DC Comics' )</title>
    @vite('resources/js/app.js')
    @yield('head-content')

</head>

<body>
    @include('partials.header')
    <main class="main-container">
        <section class="container-jumbotron">
            <div class="current-text">
                <p class="current">Current Series</p>
            </div>
        </section>
        @yield('main-content')
    </main>



    @include('partials.footer')

    @yield('script-content')
</body>

</html>