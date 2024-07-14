@php
$cards = [
    [
        'image' => asset('img/producto1.jfif'),
        'title' => 'Líquido',
        'description' => '35.000$',
        'long_description' => 'Líquido de alta calidad diseñado para maximizar el rendimiento de tu motor. Perfecto para una lubricación eficiente y una protección duradera contra el desgaste. Ideal para todo tipo de vehículos.',
    ],
    [
        'image' => asset('img/producto2.jfif'),
        'title' => 'Llatas',
        'description' => '60.000$',
        'long_description' => 'Llatas de aleación ligera que ofrecen una resistencia excepcional y un diseño aerodinámico. Aumenta la estética y el rendimiento de tu vehículo con estas llatas duraderas y elegantes.',
    ],
    [
        'image' => asset('img/producto3.jfif'),
        'title' => 'Líquido de Frenos',
        'description' => '35.000$',
        'long_description' => 'Líquido de frenos de alto rendimiento que garantiza una respuesta rápida y efectiva en todas las condiciones de conducción. Mantén tus frenos en perfecto estado y conduce con total seguridad.',
    ],
    [
        'image' => asset('img/producto4.jfif'),
        'title' => 'Carburador',
        'description' => '150.000$',
        'long_description' => 'Carburador de precisión que mejora la mezcla de aire y combustible para una combustión más eficiente. Aumenta la potencia y reduce el consumo de tu vehículo con este carburador avanzado.',
    ],
    [
        'image' => asset('img/producto5.jfif'),
        'title' => 'Filtro de Aire',
        'description' => '12.000$',
        'long_description' => 'Filtro de aire de alta eficiencia que asegura una entrada de aire limpio y libre de impurezas. Prolonga la vida útil de tu motor y mejora el rendimiento con este filtro de calidad superior.',
    ],
];
@endphp

<div class="container-fluid">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-3">
        @foreach($cards as $index => $card)
            <div class="col">
                <div class="card h-100">
                    <img src="{{ $card['image'] }}" class="card-img-top" alt="{{ $card['title'] }}">
                    <div class="card-body bg-dark p-2">
                        <h6 class="card-title mb-1 text-danger">{{ $card['title'] }}</h6>
                        <p class="card-text small mb-2 text-white">{{ $card['description'] }}</p>
                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal{{ $index }}">
                            Agregar
                        </button>
                    </div>
                </div>
            </div>

            <!-- Modal para cada card -->
            <div class="modal fade" id="modal{{ $index }}" tabindex="-1" aria-labelledby="modalLabel{{ $index }}" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalLabel{{ $index }}">{{ $card['title'] }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{ $card['image'] }}" class="img-fluid mb-3" alt="{{ $card['title'] }}">
                                </div>
                                <div class="col-md-6">
                                    <h6 class="mb-3">Descripción detallada:</h6>
                                    <p>{{ $card['long_description'] }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-danger">Confirmar</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<style>
    .card {
        transition: transform 0.3s;
    }
    .card:hover {
        transform: scale(1.05);
    }
    .card-img-top {
        height: 150px;
        object-fit: cover;
    }
</style>
