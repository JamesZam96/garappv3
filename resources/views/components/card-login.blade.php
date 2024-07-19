<div class="container-fluid p-3">
    <h1 class="text-center mb-4">Inicia sesión</h1>
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8">
            <div class="card border-0 shadow-sm">
                <div class="row g-0">
                    <div class="col-md-6 bg-danger bg-opacity-50 text-center py-4">
                        <h2 class="text-black mb-3">Bienvenido</h2>
                        <h1 class="text-white">GARAPP</h1>
                    </div>
                    <div class="col-md-6 p-4">
                        <h2 class="text-center mb-4">Accede a tu cuenta</h2>
                        <form method="POST" action="{{ route('login.customer') }}">
                            @csrf
                            <div class="mb-3">
                                <input type="email" name="email" class="form-control" placeholder="Correo electrónico" required>
                            </div>
                            <div class="mb-3">
                                <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
                            </div>
                            <button type="submit" class="btn btn-dark w-100 mb-3">Iniciar sesión</button>
                        </form>
                        <a href="/register/customer" class="btn btn-outline-dark w-100">Registrarse</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    @media (max-width: 767px) {
        .card .row > div {
            border-radius: 0.25rem;
        }
    }
    .btn {
        transition: all 0.3s ease;
    }
    .btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }
</style>