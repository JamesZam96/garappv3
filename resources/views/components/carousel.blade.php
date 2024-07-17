
<div class="container-fluid">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-3">
        @foreach($companies as $index => $card)
            <div class="col">
                <div class="card h-100 text-center">
                    <img src="{{ asset('storage/'.$card->profile_photo) }}" class="card-img-top" alt="{{ $card->company_name }}">
                    <div class="card-body bg-dark p-2">
                        <h6 class="card-title mb-1 text-danger">{{ $card->company_name }}</h6>
                        <!--<p class="card-text small mb-2 text-white">{{ $card['description'] }}</p>-->
                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal2{{ $index }}">
                            Ver
                        </button>
                    </div>
                </div>
            </div>

            <!-- Modal para cada marca -->
            <div class="modal fade" id="modal2{{ $index }}" tabindex="-1" aria-labelledby="modal2Label{{ $index }}" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal2Label{{ $index }}">{{ $card->company_name }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{ asset('storage/'.$card->profile_photo) }}" class="img-fluid mb-3" alt="{{ $card->company_name }}">
                                </div>
                                <div class="col-md-6">
                                    <h6 class="mb-3">Descripción detallada:</h6>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, beatae!</p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <a href="/ProductosyServicios" class="btn btn-danger">Pedir</a>
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
