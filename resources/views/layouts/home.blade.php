@extends('layouts/main')
@section('content')
    <center>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                        <img src="img/cancun1.jpg" class="card-img-top" alt="¿POR QUÉ VISISTAR CANCÚN?">
                        <div class="card-body">
                            <h5 class="card-title">¿POR QUÉ VISITAR CANCÚN?</h5>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cancun1">LEER MÁS</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                        <img src="img/cancun2.jpeg" class="card-img-top" alt="¿QUÉ HACER EN CANCÚN?">
                        <div class="card-body">
                            <h5 class="card-title">¿QUÉ HACER EN CANCÚN?</h5>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cancun2">LEER MÁS</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                        <img src="img/cancun3.jpeg" class="card-img-top" alt="¿CÓMO VISITAR CANCÚN?">
                        <div class="card-body">
                            <h5 class="card-title">¿CÓMO VISITAR CANCÚN?</h5>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cancun3">LEER MÁS</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </center>
    {{-- Modal 1 --}} 
    <div class="modal fade" id="cancun1" tabindex="-1" role="dialog" aria-labelledby="cancun1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content bg-info text-light">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">¿POR QUÉ VISITAR CANCÚN?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                  <p>Cancún cuenta con hermosas playas cuya arena de coral es fina y blanca. Su mar de aguas transparentes posee un matiz impresionante de azules que va desde el esmeralda hasta el turquesa y que te hará repensar lo que significa la claridad. Además la sorprendente selección de excepcionales resorts es una de las más impresionantes del mundo.</p>
                </div>
                <div class="modal-footer bg-info">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="cancun2" tabindex="-1" role="dialog" aria-labelledby="cancun2" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content bg-info text-light">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">¿QUÉ HACER EN CANCÚN?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                      <p>Podrás encontrar ruinas donde tendrás un atisbo de la cultura maya, como la zona arqueológica de Chichen Itzá y Tulum o disfrutar del espectáculo natural del agua en Xel-Ha, considerado un acuario natural. Un ambiente relajado donde puedes alejarte de las tensiones de la vida cotidiana.</p>
                    </div>
                    <div class="modal-footer bg-info">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="cancun3" tabindex="-1" role="dialog" aria-labelledby="cancun3" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content bg-info text-light">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalScrollableTitle">¿CÓMO VISITAR CANCÚN?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                          <p>Puedes reservar con nosotros en esta página aprovechando las increíbles promociones que contamos para ti. Consolidamos nuestra cadena hotelera Park Royal, con hoteles ubicados en las 10 mejores playas mexicanas: Acapulco, Cancún, Cozumel, Huatulco, Ixtapa, Los Cabos, Mazatlán, Puerto Vallarta; además de Puerto Rico, Buenos Aires y Miami.</p>
                        </div>
                        <div class="modal-footer bg-info">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
@endsection