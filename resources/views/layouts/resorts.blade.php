@extends('layouts/main')
@section('content')
    <center>
        <h4>Resorts</h4>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card" style="width: 18rem;">
                        <img src="img/parkRoyal.jpg" class="card-img-top" alt="Park Royal">
                        <div class="card-body">
                            <h5 class="card-title">Park Royal</h5>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#royal">Ver</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card" style="width: 18rem;">
                        <img src="img/oasis.jpg" class="card-img-top" alt="Oasis">
                        <div class="card-body">
                            <h5 class="card-title">Oasis</h5>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#oasis">Ver</button>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">    
                <div class="col-lg-6">
                    <div class="card" style="width: 18rem;">
                        <img src="img/melody.jpg" class="card-img-top" alt="Melody Maker">
                        <div class="card-body">
                            <h5 class="card-title">Melody Maker</h5>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#melody">Ver</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card" style="width: 18rem;">
                        <img src="img/occidental.jpg" class="card-img-top" alt="Occidental">
                        <div class="card-body">
                            <h5 class="card-title">Occidental</h5>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#occidental">Ver</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </center> 
    {{-- Modal 1 --}} 
    <div class="modal fade" id="royal" tabindex="-1" role="dialog" aria-labelledby="royal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content bg-warning text-light">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Park Royal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>El hotel es ideal para descubrir Cancún y sus bellísimos alrededores, experimentando lujo y entretenimiento de alto nivel, con un servicio que se adelanta a cualquier deseo.</p>
                </div>
                <div class="modal-footer bg-warning">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="oasis" tabindex="-1" role="dialog" aria-labelledby="oasis" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content bg-warning text-light">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">Oasis</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>En la fantástica ciudad de Cancún y sus interminables atractivos turísticos, podrás encontrar los espectaculares Hoteles Oasis Cancún; resorts todo incluido con opciones inigualables para unas vacaciones en la playa.</p>
                    </div>
                    <div class="modal-footer bg-warning">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="melody" tabindex="-1" role="dialog" aria-labelledby="melody" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content bg-warning text-light">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalScrollableTitle">Melody Maker</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Melody Maker Cancún es un resort lifestyle ubicado en la espectacular playa de la Zona Hotelera de Cancún, muy cerca de los principales centros comerciales, restaurantes de primer nivel, lugares de moda y discotecas de Cancún.</p>
                        </div>
                        <div class="modal-footer bg-warning">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="occidental" tabindex="-1" role="dialog" aria-labelledby="occidental" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content bg-warning text-light">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalScrollableTitle">Occidental</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Con numerosos servicios para los huéspedes, como servicio a la habitación, alquiler de autos, desayuno buffet completo gratis, te sentirás renovado todos los días disfrutando en Cancún, Quintana Roo.</p>
                            </div>
                            <div class="modal-footer bg-warning">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
 
@endsection