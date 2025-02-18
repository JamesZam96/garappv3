<div class="d-flex align-items-center">
    <div class="dropdown">
        <button class="btn btn-icon" type="button" id="dropdownMenuButton" aria-expanded="false">
            <img src="{{ asset('icons/menu.png') }}" alt="Menu" width="24" height="24">
        </button>
        <div class="custom-dropdown-menu">
            <div class="d-flex justify-content-between align-items-center p-3">
                <h5 class="mb-0">Menú</h5>
                <button class="btn btn-close" id="closeMenuButton"></button>
            </div>
            <ul class="list-unstyled">
                @auth
                @if (Auth::user()->hasRole('customer'))
                    <li class="dropdown-item">
                        <img src="{{ asset('icons/avatar.png') }}" width="24" height="24" alt="Icono de avatar" class="me-2">
                        <span class="text-black">{{ Auth::user()->name }}</span>
                    </li>
                    <li><a class="dropdown-item" href="/ProductosyServicios">Productos y servicios</a></li>
                    <li><a class="dropdown-item" href="/Talleresyalmacenes">Talleres y almacenes</a></li>
                    <br>
                    <li><a class="dropdown-item" href="/register/company">Registrar como almacén</a></li>
                    <li><a class="dropdown-item" href="/register/company">Registrarse como taller</a></li>
                    <li><a class="dropdown-item" href="/register/delivery">Quiero ser domiciliario</a></li>
                  
                    <li class="dropdown-item">
                        <form action="{{ route('logout.customer') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-link p-0">
                                <img src="{{ asset('icons/cerrar.png') }}" width="24" height="24" alt="Icono de cerrar sesión" class="me-2">
                                Cerrar sesión
                            </button>
                        </form>
                    </li>
                @else
                    <li><a class="dropdown-item" href="/login/customer">Iniciar sesión</a></li>
                    <li><a class="dropdown-item" href="/register/customer">Registrarse</a></li>
                    <li><a class="dropdown-item" href="/ProductosyServicios">Productos y servicios</a></li>
                    <li><a class="dropdown-item" href="/Talleresyalmacenes">Talleres y almacenes</a></li>
                    <li><a class="dropdown-item" href="/">Ir al inicio</a></li>
                    <br>
                    <li><a class="dropdown-item" href="/register/company">Registrarse como almacén</a></li>
                    <li><a class="dropdown-item" href="/register/company">Registrarse como taller</a></li>
                    <li><a class="dropdown-item" href="/register/delivery">Quiero ser domiciliario</a></li>
                @endif
            @else
                <li><a class="dropdown-item" href="/login/customer">Iniciar sesión</a></li>
                <li><a class="dropdown-item" href="/register/customer">Registrarse</a></li>
                <li><a class="dropdown-item" href="/ProductosyServicios">Productos y servicios</a></li>
                <li><a class="dropdown-item" href="/Talleresyalmacenes">Talleres y almacenes</a></li>
                <li><a class="dropdown-item" href="/">Ir al inicio</a></li>
                <br>
                <li><a class="dropdown-item" href="/register/company">Registrarse como almacén</a></li>
                <li><a class="dropdown-item" href="/register/company">Registrarse como taller</a></li>
                <li><a class="dropdown-item" href="/register/delivery">Quiero ser domiciliario</a></li>
            @endauth
            </ul>
        </div>
    </div>
</div>

<style>
    body{
        background-color: #BFBFBF;
    }
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
        box-shadow: 2px 0 5px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
        z-index: 1050;
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
        color: black;
        transition: background-color 0.3s ease, color 0.3s ease;
    }
    
    .dropdown-item:hover, 
    .dropdown-item:focus {
        background-color: rgba(255, 0, 0, 0.1);
        color: red;
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
    var closeMenuButton = document.getElementById('closeMenuButton');
    var dropdownMenu = document.querySelector('.custom-dropdown-menu');

    dropdownButton.addEventListener('click', function(event) {
        event.stopPropagation();
        dropdownMenu.classList.toggle('show');
    });

    closeMenuButton.addEventListener('click', function() {
        dropdownMenu.classList.remove('show');
    });

    document.addEventListener('click', function(event) {
        if (!dropdownMenu.contains(event.target) && !dropdownButton.contains(event.target)) {
            dropdownMenu.classList.remove('show');
        }
    });
});
</script>