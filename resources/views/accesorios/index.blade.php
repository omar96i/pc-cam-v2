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
        <p class="card-text"><h3>hacemos visitas a el casino</h3></p>
        </div>
    </div>
<div class="container col-12 my-5">
    <div class="row justify-content-center">
        <form class="formulario card col-6 p-5 shadow">
            <div class="text-center">
                <h3>NOSOTROS TE CONTACTAMOS</h3>
            </div>
            <div class="mb-3">
            <label for="nombres" class="form-label">NOMBRE Y APELLIDO</label>
            <input type="email" class="form-control" id="nombres" aria-describedby="emailHelp" name="nombres">
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">TELEFONO</label>
                <input type="email" class="form-control" id="telefono" aria-describedby="emailHelp" name="telefono">
            </div>
            <div class="mb-3">
            <label for="descripcion" class="form-label">DESCRIPCION</label>
            <textarea class="form-control" name="descripcion"></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">ENVIAR</button>
            </div>
        </form>
    </div>
</div>
@endsection
