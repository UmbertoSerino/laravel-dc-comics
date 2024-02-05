<header class="header-top">
    <section class="container">
        <div class=logo>
            <img src="{{ Vite::asset('resources/assets/img/dc-logo.png') }}" alt="DC main logo">
        </div>
        <nav>
            <ul>
                @for ($i = 0; $i < count($navBar); $i++) 
                    <li class="fs-5">{{ $navBar[$i] }}</li>
                @endfor
            </ul>
        </nav>
    </section>
    <main class="main-container">
        <section class="container-jumbotron">
            <div class="current-text">
                <p class="current">Current Series</p>
            </div>
        </section>
</header>