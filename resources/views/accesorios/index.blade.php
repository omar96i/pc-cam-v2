@extends('layouts.app')
@section('title', 'Accesorios')

@section('content')
    <div class="col-12 text-center my-3">
        <h1 class="fuente"><strong>ACCESORIOS</strong></h1>
    </div>
    <div class="col-12 row px-4 justify-content-center">
        <div class="card col-8 my-3 mr-4 shadow">
            <img src="/images/contenido/accesorios_venta.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">VENTA</h5>
            <p class="card-text"><h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus natus error facilis maxime nesciunt qui non sed, minus aut iste beatae debitis eos cupiditate rerum enim a tempore excepturi ex.</h3></p>
            </div>
        </div>
    </div>
    <show-products-component></show-products-component>
    <form-component></form-component>
@endsection
