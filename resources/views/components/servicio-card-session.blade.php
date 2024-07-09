@php
$cards = [
    [
        'image' => asset('img/servicio1.jfif'),
        'title' => 'taller',
        'description' => '60.000$',
    ],
    [
        'image' => asset('img/servicio2.jfif'),
        'title' => 'llatas',
        'description' => '60.000$',
    ],
    [
        'image' => asset('img/servicio3.jfif'),
        'title' => 'liquido de frenos',
        'description' => '35.000$',
    ],
    [
        'image' => asset('img/servicio4.jfif'),
        'title' => 'carburador',
        'description' => '150.000$',
    ],
    [
        'image' => asset('img/servicio5.jfif'),
        'title' => 'filtro de aire',
        'description' => '12.000$',
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
                            SOLICITAR
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Modales para cada servicio -->
@foreach($cards as $index => $card)
    <div class="modal fade" id="modal{{ $index }}" tabindex="-1" aria-labelledby="modalLabel{{ $index }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel{{ $index }}">{{ $card['title'] }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="{{ $card['image'] }}" class="img-fluid mb-3" alt="{{ $card['title'] }}">
                    <p>Precio: {{ $card['description'] }}</p>
                    <p>¿Estás seguro de que deseas solicitar este servicio?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger">Confirmar solicitud</button>
                </div>
            </div>
        </div>
    </div>
@endforeach

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