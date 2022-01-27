@extends('layouts.app')
@section('title', 'Camaras')

@section('content')
    <div class="col-12 text-center my-3">
        <h1 class="fuente"><strong>CAMARAS DE SEGURIDAD</strong></h1>
    </div>
    <div class="col-12 row px-4 justify-content-center">
        <div class="card col-5 my-3 mr-4 shadow">
            <img src="/images/contenido/camara_venta.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">VENTA</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        <div class="card col-5 my-3 shadow">
            <img src="/images/contenido/camara_reparacion.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">REPARACION</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        <div class="card col-5 my-3  mr-4 shadow">
            <img src="/images/contenido/camara_partes.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">PARTES</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        <div class="card col-5 my-3 shadow">
            <img src="/images/contenido/camara_accesorios.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">ACCESORIOS</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>
    <form-component></form-component>
@endsection
