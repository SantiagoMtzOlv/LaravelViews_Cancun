@extends('layouts/main')
@section('content')
<center>
        <h4>¿Por qué visitar Cancún?</h4>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card" style="width: 18rem;">
                        <img src="img/playa.jpg" class="card-img-top" alt="Playa">
                        <div class="card-body">
                            <h5 class="card-title">playa</h5>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#playa">Ver</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card" style="width: 18rem;">
                        <img src="img/cultura.jpg" class="card-img-top" alt="Cultura">
                        <div class="card-body">
                            <h5 class="card-title">Cultura</h5>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cultura">Ver</button>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card" style="width: 18rem;">
                        <img src="img/parques.jpg" class="card-img-top" alt="Parques">
                        <div class="card-body">
                            <h5 class="card-title">Parques</h5>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#parques">Ver</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card" style="width: 18rem;">
                        <img src="img/compras.jpg" class="card-img-top" alt="Compras">
                        <div class="card-body">
                            <h5 class="card-title">Compras</h5>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#compras">Ver</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </center>
    {{-- Modal 1 --}} 
    <div class="modal fade" id="playa" tabindex="-1" role="dialog" aria-labelledby="playa" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content bg-danger text-light">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Playa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Cancún es absolutamente hermoso, tenemos un clima tropical durante todo el año, disfruta de un día en la playa con sus aguas cristalinas o quizás disfrutando leyendo un libro debajo de las palapas bebiendo una margarita, también puedes aprovechar del sauna y jacuzzis o mimarse con uno de nuestros maravillosos masajes en nuestras instalaciones de spa.</p>
                </div>
                <div class="modal-footer bg-danger">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="cultura" tabindex="-1" role="dialog" aria-labelledby="cultura" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content bg-danger text-light">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">Cultura</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Visite una de las Siete Maravillas del Mundo, la antigua pirámide maya de Chichén Itzá, aquí podrás tomar fotos asombrosas, presenciar un juego de pelota maya y disfrutar de una comida tradicional de Yucatán, es una experiencia única en la vida. También tenemos el único sitio arqueológico en el mundo donde puedes apreciar las ruinas mayas justo al lado del océano, es un lugar llamado Tulum y puedes practicar esnórquel aquí.</p>
                    </div>
                    <div class="modal-footer bg-danger">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="parques" tabindex="-1" role="dialog" aria-labelledby="parques" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content bg-danger text-light">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalScrollableTitle">Parques</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Puede realizar excursiones a la selva tropical de la Riviera Maya y experimentar uno de nuestros hermosos parques temáticos como: En Xcaret, donde podrás apreciar la cultura mexicana en más de 50 atracciones diferentes, disfrutar de una tradicional Fiesta Charra o incluso experimentar una antigua aldea maya. Xplor, donde encontrarás increíbles actividades: tirolesa, rafting, natación y kayak.</p>
                        </div>
                        <div class="modal-footer bg-danger">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="compras" tabindex="-1" role="dialog" aria-labelledby="compras" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content bg-danger text-light">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalScrollableTitle">Compras</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Cancún es un paraíso para los compradores informales o muy serios. Ofrecemos centros comerciales al aire libre y también en interiores, donde puede pasear por tiendas de lujo y también mercados al aire libre. Así que hay algo para todos, asegúrese de ir de compras en el mercado 28 que se encuentra en el centro de Cancún, es el mercado al aire libre más grande y muy popular. Está lleno de puestos de cerámica, joyería de plata, comida local, allí encontrarás hermosos recuerdos tradicionales.</p>
                            </div>
                            <div class="modal-footer bg-danger">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
 
@endsection