@extends('layouts.plantilla')

@section('cuerpo')
    <?= getcwd();?>
    
    @foreach ( $categorias as $nombreCategoria => $categoria )
            @if ( $nombreCategoria !== 'estilos' )
                <div class="container text-center">
                    <div class="well text-center h1">{{ $nombreCategoria }}</div>
                    <div class="row text-center">
                    @foreach ( $categoria as $artista )
                        <div class="card m-2 text-left flex-fill" style="width: 16rem;">
                            <div class="card-header bg-dark ">
                                <h5 class="card-title text-light">{{ $artista }}</h5>
                            </div>
                            <a href="#">
                                <img class="card-img-top" src="<?= getcwd();?>/img/{{ $artista }}.jpg" alt="Card image cap">
                            </a>
                        </div>
                    @endforeach
                    </div>
                </div>
            @else
                <div class="bd-example">
                <div id="carruselEstilos" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                    @foreach ( $categoria as $nombreEstilo)
                        @if ($nombreEstilo == 'Rock')
                            <li data-target="#carruselEstilos" data-slide-to="{{ $nombreEstilo }}" class="active">
                        @else
                            <li data-target="#carruselEstilos" data-slide-to="{{ $nombreEstilo }}">
                        @endif
                        </li>
                    @endforeach
                    </ol>
                    <div class="carousel-inner">
                    @foreach ( $categoria as $nombreEstilo => $descripcion )
                        @if ($nombreEstilo == 'Rock')
                        <div class="carousel-item active">
                        @else
                        <div class="carousel-item">
                        @endif
                            <img src="<?= getcwd();?>/img/{{ $nombreEstilo }}.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption rounded d-none d-md-block bg-dark ">
                                <h5>{{ $nombreEstilo }}</h5>
                                <p>{{ $descripcion }}</p>
                            </div>
                        </div>
                    @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carruselEstilos" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carruselEstilos" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            @endif
    @endforeach

@endsection
