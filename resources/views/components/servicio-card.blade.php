@php
$cards = [
    [
        'image' => asset('img/servicio1.jfif'),
        'title' => 'Cambio de Aceite',
        'description' => '35.000$',
        'long_description' => 'Servicio de cambio de aceite de alta calidad para asegurar el correcto funcionamiento y prolongar la vida útil del motor de tu vehículo. Utilizamos aceites de las mejores marcas y filtros originales.'
    ],
    [
        'image' => asset('img/servicio2.jfif'),
        'title' => 'Alineación y Balanceo',
        'description' => '60.000$',
        'long_description' => 'Alineación y balanceo de llantas para un manejo seguro y eficiente. Este servicio mejora la estabilidad de tu vehículo y prolonga la vida útil de tus neumáticos.'
    ],
    [
        'image' => asset('img/servicio3.jfif'),
        'title' => 'Cambio de Líquido de Frenos',
        'description' => '35.000$',
        'long_description' => 'Cambio de líquido de frenos de alto rendimiento para garantizar una respuesta rápida y efectiva de tu sistema de frenado. Mantén tus frenos en óptimas condiciones y conduce con total seguridad.'
    ],
    [
        'image' => asset('img/servicio4.jfif'),
        'title' => 'Reparación de Carburador',
        'description' => '150.000$',
        'long_description' => 'Servicio de reparación y ajuste de carburadores para mejorar la mezcla de aire y combustible. Esto asegura una combustión eficiente, aumentando la potencia y reduciendo el consumo de tu vehículo.'
    ],
    [
        'image' => asset('img/servicio5.jfif'),
        'title' => 'Cambio de Filtro de Aire',
        'description' => '12.000$',
        'long_description' => 'Cambio de filtro de aire para asegurar una entrada de aire limpio y libre de impurezas. Este servicio mejora el rendimiento del motor y ayuda a mantenerlo en óptimas condiciones.'
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
                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal2{{ $index }}">
                            SOLICITAR
                        </button>
                    </div>
                </div>
            </div>

            <!-- Modal para cada servicio -->
            <div class="modal fade" id="modal2{{ $index }}" tabindex="-1" aria-labelledby="modal2Label{{ $index }}" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal2Label{{ $index }}">{{ $card['title'] }}</h5>
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
