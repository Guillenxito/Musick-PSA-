@extends('layouts.plantilla')

@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('title', 'Album')

@section('styles')
    <link href="{{ asset('css/songsList.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
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


echo "<pre>";
echo '<b>ARRAY $_COOKIE</b><BR>';
print_r($_COOKIE);
*/
?>

<div class="container overflow-auto">
    <div class="row" id="head">
        <div id="albumcontainer" class="col-sm-12 col-md-5">
            <img src="{{ asset('img/artistas/' . $datos['autor']['nombre'] .'/' . $datos['autor']['nombre'] . '.png') }}" class="" alt="">
        </div>
        <div class="col-sm-12 col-md-7  text-center text-md-left" id="info">
            <h2>ÁLBUM</h2>
            <h1 id="album">{{ strtoupper(str_replace('_',' ',$datos['album']['nombre'])) }}</h1>
            <h2 id="artista">{{ strtoupper(str_replace('_',' ',$datos['autor']['nombre'])) }}</h2>
            <div id="iconsContainer">
                <div id="play"> 
                    <i class="material-icons playall">
                        play_circle_filled
                    </i>
                </div>
                <div id="add">
                    <i class="material-icons addall">
                        playlist_add
                    </i>
                </div>
                <div id="share">
                        <img src="{{ asset('img/iconos/share-button.png') }}" alt="">
                </div>
                <div id="more">
                        <img src="{{ asset('img/iconos/more-button.png') }}" alt="">
                </div>
            </div>
            <p>{{ array_key_last($datos['canciones'])+ 1 }} Canciones - Publicado el {{ $datos['album']['created_at'] }}</p>
        </div>
    </div>
    <!-- Container esta metiendo margen lateral -->
    <div class="row">
        <div class="col-12">
            <table class="table table-sm table-bordered table-hover table-dark container-fluid table-striped table-borderless">
                <thead>
                    <tr>
                        <td scope="col"></td>
                        <th scope="col">#</th>
                        <td scope="col"></td>
                        <th scope="col">Titulo</th>
                        <th scope="col">artista</th>
                        <th scope="col">
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
                                        <i class="material-icons playsong">
                                            play_circle_filled
                                        </i>
                                    </a>
                                </td>
                                <td id="titulo">{{ strtoupper(str_replace('_',' ',$cancion['titulo'])) }}</td>
                                <td>{{ strtoupper($datos['autor']['nombre']) }}</td>
                                <td>
                                    <a>
                                        <i class="material-icons addsong" id="{{ $cancion['id_song'] }}">
                                            playlist_add
                                        </i>
                                    </a>
                                    <form id="form{{ $cancion['id_song'] }}" method="POST" action="http://musick.test/biblioteca/AddSong">
                                        @csrf
                                        <input id="{{ $cancion['id_song'] }}" type="hidden">
                                        
                                    </form>
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
    <script src="{{ asset('js/jquery.min.js') }}" rel="text/javascript"></script>
@endsection
