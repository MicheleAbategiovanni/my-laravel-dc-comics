<header>
    <div class="d-flex justify-content-end px-3 py-1 bg-primary text-white">
        <div class="px-5">
            <a class="fs-xs text-white nav-link" href="#">DC POWER™ VISA®</a>
        </div>

        <div>
            <a class="fs-xs text-white nav-link" href="#">ADDITIONAL DC SITES ▼</a>
        </div>

    </div>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="{{ route('comics.index') }}">
                <img src="{{ Vite::asset('resources/imgs/dc-logo.png') }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">CHARACTERS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">COMICS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">MOVIES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">TV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">GAMES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">COLLECTIBLES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">VIDEOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">FANS</a>
                    </li>
                    <li class="nav-item" href="#">
                        <a class="nav-link">NEWS</a>
                    </li>
                    <li class="nav-item" href="#">
                        <a class="nav-link">SHOP ▼</a>
                    </li>
                </ul>
                <form class="d-flex align-items-center" role="search">
                    <input class="form-control me-2 border-bottom border-0 rounded-0 border-primary text-end"
                        type="search" placeholder="Search" aria-label="Search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-search" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </form>

            </div>
        </div>
    </nav>

</header>