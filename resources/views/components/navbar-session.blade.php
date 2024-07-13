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
        </div>
    </div>
</nav>