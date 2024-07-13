<nav class="navbar navbar-expand-lg bg-black">
    <x-search-bar />
    <div class="container-fluid">
        <a class="navbar-brand text-danger" href="/">Garapp</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="#">Ubicación</a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('login.form.customer') }}">Iniciar sesión</a>
                    </li>
                @else
                    <li class="nav-item">
                        <span class="nav-link text-light">Bienvenido, {{ Auth::user()->name }}</span>
                    </li>
                    <li class="nav-item">
                       
                    </li>
                @endguest
            </ul>
            <form class="d-flex mx-lg-4 my-2 my-lg-0" role="search">
                <input class="form-control form-control-sm me-2" type="search" placeholder="Buscar productos, servicios" aria-label="Search" style="min-width: 600px; max-width: 800px; width: 100%;">
                <button class="btn btn-danger btn-sm" type="submit">Buscar</button>
            </form>
            <div class="d-flex align-items-center text-light ms-lg-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person me-2" viewBox="0 0 16 16">
                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                </svg>
                <span>Nombre de Usuario</span>
            </div>
            <div class="d-flex align-items-center ms-3">
                <a href="{{ route('cart.index') }}" class="text-light position-relative">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1h1a.5.5 0 0 1 .485.379L2.89 5H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 14H4a.5.5 0 0 1-.491-.408L1.01 1.607 1.61 3H14a.5.5 0 0 1 .491.592L13.89 6H3.21l-1.5-8H.5a.5.5 0 0 1-.5-.5z"/>
                        <path d="M3 16a2 2 0 1 1 4 0 2 2 0 0 1-4 0zM10 16a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                    </svg>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        {{ $cartItemCount }}
                        <span class="visually-hidden">items in cart</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</nav>