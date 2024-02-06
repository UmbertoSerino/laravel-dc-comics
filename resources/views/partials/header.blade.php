<header class="header-top">
    <section class="container">
        <div class="logo">
            <img src="{{ Vite::asset('resources/assets/img/dc-logo.png') }}" alt="DC main logo">
        </div>
        <ul>
            <li>
                <a href="{{ route('pages.home') }}">Home</a>
            </li>
            <li>
                <a href="{{ route('comics.guest.index') }}">
                Comics
                </a>
            </li>
            <li>
                <a href="{{ route('comics.guest.create') }}">Add Comics</a>
            </li>
            <li>
                <a href="{{ route('movies.guest.index') }}">Movies</a>
            </li>
            <li>
                <a href="{{ route('movies.guest.create') }}">Add Movies</a>
            </li>
        </ul>
        <div class="pt-3">
            <form>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </section>
</header>