@extends('layouts.plantilla')

@section('title', 'Album')

@section('styles')
    <link href="{{ asset('css/songsList.css') }}" rel="stylesheet">
@endsection

@section('cuerpo')
    
<?php
/*
echo "<pre>";
echo '<b>ARRAY $datos</b><BR>';
print_r($datos);
echo "</pre>";

echo "<h3>";
echo $_SERVER['SCRIPT_FILENAME'];
echo "</h3>";
*/
?>

<div class="container overflow-auto">
    <div class="row h-100" id="head">
        <div id="albumcontainer" class="col-sm-12 col-md-5">
            <img src="{{ asset('img/artistas/' . $datos['autor']['nombre'] .'/' . $datos['autor']['nombre'] . '.png') }}" class="" alt="">
        </div>
        <div class="col-sm-12 col-md-7 my-auto text-center text-md-left" id="info">
            <h2>ÁLBUM</h2>
            <h1>{{ $datos['album']['nombre'] }}</h1>
            <h2>{{ $datos['autor']['nombre'] }}</h2>
            <div id="iconsContainer">
                <div id="play">
                        <a><img class="playall" src="{{ asset('img/iconos/play-button.png') }}" alt=""></a>
                </div>
                <div id="add">
                        <a><img class="addall" src="{{ asset('img/iconos/add-button.png') }}" alt=""></a>
                </div>
                <div id="share">
                        <img src="{{ asset('img/iconos/share-button.png') }}" alt="">
                </div>
                <div id="more">
                        <img src="{{ asset('img/iconos/more-button.png') }}" alt="">
                </div>
            </div>
            <p>{{ array_key_last($datos['canciones'])+ 1 }} Canciones (42 minutos) - Publicado el {{ $datos['album']['created_at'] }}</p>
        </div>
    </div>
    <!-- Container esta metiendo margen lateral -->
    <div class="row">
        <div class="col-12">
            <table class="table table-sm table-bordered table-hover table-dark container-fluid table-striped table-borderless">
                <!--<caption>List of users</caption>-->
                <thead>
                    <tr>
                        <td scope="col"></td>
                        <th scope="col">#</th>
                        <td scope="col"></td>
                        <th scope="col">Titulo</th>
                        <th scope="col">artista</th>
                        <th scope="col">
                            <!--Duración-->
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if (!empty($datos['canciones']))
                        @foreach ($datos['canciones'] as $clave => $cancion)
                            <tr id="{{ $cancion['id_song'] }}">
                                <td></td>
                                <td scope="row" >{{ ++$clave }}</td>
                                <td class=""> 
                                    <a>
                                        <img class="playsong icono pointer" src="{{ asset('img/iconos/play-button1.png') }}" alt="">
                                    </a>
                                </td>
                                <td>{{ $cancion['titulo'] }}</td>
                                <td>{{ $datos['autor']['nombre'] }}</td>
                                <td>
                                    <a>
                                       <img class="addsong icono pointer" src="{{ asset('img/iconos/add-button.png') }}" alt="">
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@extends('layouts.footer')

@section('scripts')
    <script src="{{ asset('js/player.js') }}" rel="text/javascript"></script>
@endsection
