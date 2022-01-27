@extends('layouts.app')
@section('title', 'Computadores')
<style>
    .fuente {
        font-family: FjallaOne-Regular;
        src: url('{{asset('/fonts/FjallaOne-Regular.tff')}}');
    }
</style>
@section('content')
    <div class="col-12 text-center my-3">
        <h1 class="fuente"><strong>COMPUTADORES</strong></h1>
    </div>
    <div class="col-12 row px-4 justify-content-center">
        <div class="card col-5 my-3 mr-4 shadow" >
            <img src="/images/contenido/computadores.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">VENTA</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        <div class="card col-5 my-3 shadow">
            <img src="/images/contenido/reparacion.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">REPARACION</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        <div class="card col-5 my-3  mr-4 shadow">
            <img src="/images/contenido/partes.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">PARTES</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        <div class="card col-5 my-3 shadow">
            <img src="/images/contenido/accesorios.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">ACCESORIOS</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>
    <form-component></form-component>
@endsection
