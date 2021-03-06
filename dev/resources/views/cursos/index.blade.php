@extends('layouts.app')
@section('content')
    <div class="banner2">
        <div class="container-fluid m-0">
            <div class="row">
                <div class="col-12 col-md-6 text-left pt-md-2 pl-md-5 d-none d-md-block">
                    <h1 class="pl-lg-5">Todos nuestros cursos al 3x2</h1>
                    {{--<h2 id="h2banner" class="pl-lg-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>--}}
                </div>
            </div>
        </div>
    </div>
    <!-- SEMESTRALES -->
    <div class="container titulos">
        <h1 class="mt-md-4 mt-4 mb-2">Cursos {{$periodo == 'es_semestral'? 'semestral':'intersemestral'}} {{$semestre}}</h1>
        {{--<a href=""><h3 class="text-secondary mb-md-3 mb-3">( Ver todos )</h3></a>--}}
    </div>
    <div class="container mt-2">
        <div class="row">
            @foreach($cursos as $curso)
            <div class="col-md-4 mb-3">
                <div class="card card-car">
                    <img src="{{asset('img/b101.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$curso->nombre}}</h5>
                        <p class="card-text m-0"><span>Fecha:</span> 17/02/20 al 21/02/20</p>
                        <p class="card-text mt-1"><span>Horario:</span> 17:00 a 21:00</p>
                        <!-- reveal -->
                        <div class="card-reveal bg-light" data-rel="1">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-rel="1">
                                <span aria-hidden="true">×</span></button>
                            <p class="card-text mt-3"><span>Antecedentes: </span>Ninguno</p>|
                            <p class="card-text"><span>Material: </span>De preferencia traer Laptop propia</p>
                            <p class="card-text"><span>Horario: </span>17:00 a 21:00 (15 horas hrs)</p>
                            <p class="card-text"><span>Días: </span>De Lunes a Viernes</p>
                            <p class="card-text"><span>Lugar: </span>Laboratorio IBM/Java (Edificio T, Primer Piso)</p>
                            <p class="card-text"><span>Cupo disponible: </span>35</p>
                            <p class="card-text"><span>Costo UNAM: </span>$950</p>
                            <p class="card-text"><span>Costo alumno externo: </span>$1800</p>
                            <p class="card-text"><span>Costo público general: </span>$2800</p>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="card-link" title="Agregar al carrito"><i class="material-icons"
                            title="Agregar al carrito">shopping_cart</i></a>
                        <a href="#" class="card-link" title="Ver el temario">Temario</a>
                        <span href="" class="show card-link text-right text-primary" data-rel="1"
                            title="Ver detalles del curso">Ver más</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
