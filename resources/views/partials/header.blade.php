<header class="header-top">
    <section class="container">
        <div class=logo>
            <img src="{{ Vite::asset('resources/assets/img/dc-logo.png') }}" alt="DC main logo">
        </div>
        <nav class="d-flex">
            <ul>
                <li>
                    <a href="{{ route('pages.home') }}">Characters</a>
                </li>
                <li>
                    <a href="{{ route('comics.guest.index') }}">
                    Comics
                    </a>
                </li>
                <li>
                    <a href="">Movies</a>
                </li>
                <li>
                    <a href="#">TV</a>
                </li>
                <li>
                    <a href="#">Games</a>
                </li>
                <li>
                    <a href="#">Collectibles</a>
                </li>
                <li>
                    <a href="#">Videos</a>
                </li>
                <li>
                    <a href="#">Fans</a>
                </li>
                <li>
                    <a href="#">News</a>
                </li>
                <li>
                    <a href="{{ route('comics.guest.create') }}">Add</a>
                </li>
            </ul>
            <div class="pt-3">
                <form>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </nav>
    </section>
</header>