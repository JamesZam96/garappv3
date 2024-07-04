@php
$cards = [
    [
        'image' => asset('img/image1.jfif'),
        'title' => 'Ford',
        'description' => 'Reparación y mantenimiento de vehículos Ford.',
    ],
    [
        'image' => asset('img/image2.jfif'),
        'title' => 'Audi',
        'description' => 'Servicio completo para autos Audi.',
    ],
    [
        'image' => asset('img/image3.jfif'),
        'title' => 'Yamaha',
        'description' => 'Especialistas en motocicletas Yamaha.',
    ],
    [
        'image' => asset('img/image4.jfif'),
        'title' => 'Mercedes',
        'description' => 'Mantenimiento y reparación de autos Mercedes.',
    ],
    [
        'image' => asset('img/image5.jfif'),
        'title' => 'Chevrolet',
        'description' => 'Taller especializado en vehículos Chevrolet.',
    ],
   
];
@endphp

<div class="container-fluid">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-3">
        @foreach($cards as $card)
            <div class="col">
                <div class="card h-100">
                    <img src="{{ $card['image'] }}" class="card-img-top" alt="{{ $card['title'] }}">
                    <div class="card-body bg-dark p-2">
                        <h6 class="card-title mb-1 text-danger">{{ $card['title'] }}</h6>
                        <p class="card-text small mb-2 text-white">{{ $card['description'] }}</p>
                        <a href="/ProductoServicioIngreso" class="btn btn-danger btn-sm">Ver</a>
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
