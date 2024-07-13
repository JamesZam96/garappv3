<div class="d-flex align-items-center">
    <div class="dropdown">
        <button class="btn btn-icon" type="button" id="dropdownMenuButton" aria-expanded="false">
            <img src="{{ asset('icons/menu.png') }}" alt="Menu" width="24" height="24">
        </button>
        <ul class="dropdown-menu custom-dropdown-menu" aria-labelledby="dropdownMenuButton">
            @auth
            <li class="dropdown-item">
                <img src="{{ asset('icons/avatar.png') }}" width="32" height="32" alt="Icono de avatar" class="me-2">
                <span class="text-black fs-5">{{ Auth::user()->name }}</span>
            </li>
            <li><a class="dropdown-item fs-5" href="/ProductoServicioSession">Secciones</a></li>
            <li><a class="dropdown-item fs-5" href="/AlmacenSession">Almacenes</a></li>
            <li><a class="dropdown-item fs-5" href="/TallerIngreso">Talleres</a></li>
            <br>
            <li><a class="dropdown-item fs-5" href="/register/company">Registrar almacén</a></li>
            <li><a class="dropdown-item fs-5" href="/register/company">Registrarse taller</a></li>
            <li><a class="dropdown-item fs-5" href="/register/delivery">Quiero ser domiciliario</a></li>
            <li>
                <form action="{{ route('logout.customer') }}" method="POST" class="dropdown-item">
                    @csrf
                    <button type="submit" class="btn btn-link p-0 fs-5">
                        <img src="{{ asset('icons/cerrar.png') }}" width="32" height="32" alt="Icono de cerrar sesión" class="me-2">
                        Cerrar sesión
                    </button>
                </form>
            </li>
        @else
            <li><a class="dropdown-item" href="/register/customer">Registrarse</a></li>
            <li><a class="dropdown-item" href="/ProductoServicioIngreso">Secciones</a></li>
            <li><a class="dropdown-item" href="/AlmacenIngreso">Almacenes</a></li>
            <li><a class="dropdown-item" href="/TallerIngreso">Talleres</a></li>
        @endauth
        </ul>
    </div>
</div>

<style>
    .dropdown {
        position: static;
    }

    .custom-dropdown-menu {
        position: fixed;
        top: 0;
        left: -300px;
        height: 100vh;
        width: 300px;
        overflow-y: auto;
        background-color: #fff;
        padding-top: 20px;
        box-shadow: 2px 0 5px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
    }

    .custom-dropdown-menu.show {
        left: 0;
    }
    
    @media (max-width: 991.98px) {
        .custom-dropdown-menu {
            width: 100%;
            left: -100%;
        }
    }
    
    .dropdown-item {
        padding: 10px 20px;
        color: black; /* Color de texto por defecto */
        transition: background-color 0.3s ease, color 0.3s ease;
    }
    
    .dropdown-item:hover, 
    .dropdown-item:focus {
        background-color: rgba(255, 0, 0, 0.1); /* Fondo rojo semitransparente */
        color: red; /* Texto rojo al hacer hover */
    }
    
    .btn-icon {
        background: none;
        border: none;
        padding: 10px;
    }

    .btn-icon:hover {
        background-color: black;
    }

    .btn-icon:focus {
        outline: none;
        box-shadow: none;
    }

    /* Estilo para el botón de cerrar sesión */
    .dropdown-item button.btn-link {
        color: black;
        text-decoration: none;
    }

    .dropdown-item button.btn-link:hover {
        color: red;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var dropdownButton = document.getElementById('dropdownMenuButton');
    var dropdownMenu = document.querySelector('.custom-dropdown-menu');

    dropdownButton.addEventListener('click', function(event) {
        event.stopPropagation();
        dropdownMenu.classList.toggle('show');
    });

    document.addEventListener('click', function(event) {
        if (!dropdownMenu.contains(event.target) && !dropdownButton.contains(event.target)) {
            dropdownMenu.classList.remove('show');
        }
    });
});
</script>