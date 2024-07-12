<div class="d-flex align-items-center">
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle btn-lg" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            ≡
        </button>
        <ul class="dropdown-menu">
            <li class="dropdown-item">
                <img src="{{ asset('icons/avatar.png') }}" width="32" height="32" alt="Icono de llave inglesa" class="me-2">
                <span class="text-black fs-5">Nombre de Usuario</span>
            </li>
            <li><a class="dropdown-item fs-5" href="/ProductoServicioSession">Secciones</a></li>
            <li><a class="dropdown-item fs-5" href="/AlmacenSession">Almacenes</a></li>
            <li><a class="dropdown-item fs-5" href="/AlmacenIngreso">Talleres</a></li>
            <br>
            <li><a class="dropdown-item fs-5" href="/register/company">Registrar almacén</a></li>
            <li><a class="dropdown-item fs-5" href="/register/company">Registrarse taller</a></li>
            <li><a class="dropdown-item fs-5" href="/register/delivery">Quiero ser domiciliario</a></li>

            <li class="dropdown-item">
                <img src="{{ asset('icons/cerrar.png') }}" width="32" height="32" alt="Icono de llave inglesa" class="me-2">
                <span class="text-black fs-5">Cerrar sesión</span>
            </li>
        </ul>
    </div>
</div>
