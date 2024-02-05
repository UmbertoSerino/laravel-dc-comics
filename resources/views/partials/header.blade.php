<header class="header-top">
    <section class="container">
        <div class=logo>
            <img src="{{ Vite::asset('resources/assets/img/dc-logo.png') }}" alt="DC main logo">
        </div>
        <nav>
            <ul>
                {{-- @for ($i = 0; $i < count($navBar); $i++) 
                    <li class="fs-5">{{ $navBar[$i] }}</li>
                @endfor --}}
                <li>
                    <a href="{{ route('pages.home') }}">
                    Home
                </a>
                </li>
                <li>
                    <a href="{{ route('comics.guest.index') }}">
                        Comics
                    </a>
                </li>
                <li>
                    Movies
                </li>
            </ul>
        </nav>
    </section>
</header>