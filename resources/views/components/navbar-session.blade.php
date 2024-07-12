<nav class="navbar navbar-expand-lg bg-black">
    <x-search-bar-session />
    <div class="container-fluid">
        <a class="navbar-brand text-danger" href="/Inicio_ingreso">Garapp</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="#">Ubicación</a>
                </li>
            </ul>
            <form class="d-flex flex-grow-1 mx-lg-4 my-2 my-lg-0" role="search">
                <input class="form-control me-2 flex-grow-1" type="search" placeholder="Buscar productos, servicios" aria-label="Search">
                <button class="btn btn-danger" type="submit">Buscar</button>
            </form>
            <div class="d-flex align-items-center text-light ms-lg-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person me-2" viewBox="0 0 16 16">
                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                </svg>
                <span>Nombre de Usuario</span>
            </div>
        </div>
    </div>
</nav>