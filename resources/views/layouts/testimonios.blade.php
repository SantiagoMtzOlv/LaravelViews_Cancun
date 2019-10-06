@extends('layouts/main')
@section('content')
<center>
    <h4>Testimonios</h4>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                        <img src="img/fam1.jpg" class="card-img-top" alt="Familia Ojeda">
                        <div class="card-body">
                            <h5 class="card-title">Familia Ojeda</h5>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#fam1">Ver Testimonio</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                        <img src="img/fam2.jpg" class="card-img-top" alt="Familia Rojas">
                        <div class="card-body">
                            <h5 class="card-title">Familia Rojas</h5>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#fam2">Ver Testimonio</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                        <img src="img/fam3.jpg" class="card-img-top" alt="Aurora Carrillo">
                        <div class="card-body">
                            <h5 class="card-title">Aurora Carrillo</h5>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#fam3">Ver Testimonio</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </center>
    {{-- Modal 1 --}} 
    <div class="modal fade" id="fam1" tabindex="-1" role="dialog" aria-labelledby="fam1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content bg-success text-light">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Familia Ojeda</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                  <p>Excelente servicio desde la primera llamada y una excelente atención por parte de Joshua. Siempre al pendiente de mi reservación. En el momento de adquirir la membresía fue muy bueno. Todos son muy amables. Gracias por esta gran experiencia.</p>
                </div>
                <div class="modal-footer bg-success">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="fam2" tabindex="-1" role="dialog" aria-labelledby="fam2" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content bg-success text-light">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">Familia Rojas</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                      <p>Alejandro and the Royal Holiday Family gave my family and I a wonderful experience from the very start. He kept in touch often to make sure everything was in order, picked us up from the airport and welcomed us arriving at the Grand Park Royal Hotel. All the staff were very attentive, kind, helpful. Thank you for the experience.</p>
                    </div>
                    <div class="modal-footer bg-success">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="fam3" tabindex="-1" role="dialog" aria-labelledby="fam3" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content bg-success text-light">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalScrollableTitle">Aurora Carrillo</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                          <p>Un amigo vino a Cancun y nos refirió para el programa de Live & Share. Me contacto Joshua con una oferta muy tentadora sombre un paquete vacacional al que no me pude resistir. Por lo que aquí estamos disfrutando de las instalaciones y beneficios del Resort, celebrando el cumpleaños de mi hija. Joshua y todo el equipo han sido super amables y diligentes, ayudándonos con todos los preparativos para seguir disfrutando de unas vacaciones soñadas Fabuloso!! Muchas Gracias.</p>
                        </div>
                        <div class="modal-footer bg-success">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
@endsection