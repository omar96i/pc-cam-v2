@extends('layouts.app')
@section('title', 'Home')

@section('content')
<div id="carousel-example-2" class="carousel slide carousel-fade p-5" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-2" data-slide-to="1"></li>
        <li data-target="#carousel-example-2" data-slide-to="2"></li>
        <li data-target="#carousel-example-2" data-slide-to="3"></li>
        <li data-target="#carousel-example-2" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <div class="view">
                <img class="d-block w-100" src="/images/sliders/slider1.jpg"
                alt="First slide">
                <div class="mask rgba-black-light"></div>
            </div>
            <div class="carousel-caption">
                <h3 class="h3-responsive">Light mask</h3>
                <p>First text</p>
            </div>
        </div>
        <div class="carousel-item">
            <div class="view">
                <img class="d-block w-100" src="/images/sliders/slider2.jpg"
                alt="Second slide">
                <div class="mask rgba-black-strong"></div>
            </div>
            <div class="carousel-caption">
                <h3 class="h3-responsive">Strong mask</h3>
                <p>Secondary text</p>
            </div>
        </div>
        <div class="carousel-item">
            <div class="view">
                <img class="d-block w-100" src="/images/sliders/slider3.jpg"
                alt="Third slide">
                <div class="mask rgba-black-slight"></div>
            </div>
            <div class="carousel-caption">
                <h3 class="h3-responsive">Slight mask</h3>
                <p>Third text</p>
            </div>
        </div>
        <div class="carousel-item">
            <div class="view">
                <img class="d-block w-100" src="/images/sliders/slider4.jpg"
                alt="Third slide">
                <div class="mask rgba-black-slight"></div>
            </div>
            <div class="carousel-caption">
                <h3 class="h3-responsive">Slight mask</h3>
                <p>Third text</p>
            </div>
        </div>
        <div class="carousel-item">
            <div class="view">
                <img class="d-block w-100" src="/images/sliders/slider5.jpg"
                alt="Third slide">
                <div class="mask rgba-black-slight"></div>
            </div>
            <div class="carousel-caption">
                <h3 class="h3-responsive">Slight mask</h3>
                <p>Third text</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="col-12 row px-4 justify-content-center">
    <div class="card col-5 my-3 mr-4 shadow">
        <img src="/images/contenido/computadores.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h3>COMPUTADORES</h3>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
    <div class="card col-5 my-3 shadow">
        <img src="/images/contenido/impresoras_venta.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h3>IMPRESORAS</h3>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
    <div class="card col-5 my-3  mr-4 shadow">
        <img src="/images/contenido/camara_venta.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h3>CAMARAS</h3>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
    <div class="card col-5 my-3 shadow">
        <img src="/images/contenido/redes_venta.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h3>REDES TECNOLOGICAS</h3>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
</div>
@endsection
