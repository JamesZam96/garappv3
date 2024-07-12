<nav class="navbar navbar-expand-lg bg-black">
    <x-searchbar />
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
                <li class="nav-item">
                    <a class="nav-link text-light" href="/login">Iniciar sesion</a>
                </li>
            </ul>
            <form class="d-flex flex-grow-1 mx-lg-4 my-2 my-lg-0" role="search">
                <input class="form-control me-2 flex-grow-1" type="search" placeholder="Buscar productos, servicios" aria-label="Search">
                <button class="btn btn-danger" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</nav>

<style>
@media (max-width: 991.98px) {
    .navbar-collapse {
        background-color: #212529;
        padding: 1rem;
    }
    .navbar .form-control {
        width: 100%;
    }
}

@media (min-width: 992px) {
    .navbar .form-control {
        min-width: 300px;
        max-width: 500px;
    }
}
</style>