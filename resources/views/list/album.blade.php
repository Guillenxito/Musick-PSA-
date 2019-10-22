@extends('layouts.songList')
@section('title', 'Album')

@section('cuerpo')
<?php
/*
echo "<pre>";
print_r($datos);
echo "</pre>";
*/
?>

      
<div class="container overflow-auto">
    <div class="row h-100" id="head">
        <div id="albumcontainer" class="col-sm-12 col-md-5">
            <img src="{{ asset('img/' . $datos['autor']['nombre'] . '.jpg') }}" class="" alt="">
        </div>
        <div class="col-sm-12 col-md-7 my-auto text-center text-md-left" id="info">
            <h2>ÁBUM</h2>
            <h1>{{ $datos['album']['nombre'] }}</h1>
            <h2>Paramore</h2>
            <div id="icons">
                <i class="material-icons md-48">
                    play_circle_outline
                </i>
                <i class="material-icons md-48">
                    add_circle_outline
                </i>
                <i class="material-icons md-48">
                    share
                </i>
                <i class="material-icons md-48">
                    more_vert
                </i>
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
                        @foreach ($datos['canciones'] as $item)
                            <tr>
                                <td></td>
                                <td scope="row">{{ $item['id_song'] }}</td>
                                <td class="">¿imagen album?<img src="m5albumcover.jpg" alt="" class=""></td>
                                <td>{{ $item['titulo'] }}</td>
                                <td>¿3:09?</td>
                                <td>+</td>
                            </tr>
                        @endforeach
                    @else
                       {{ "esta vacio señor, vayase. quiere bolsa?"}}
                       {!! "esta vacio señor, vayase. quiere bolsa?"!!}
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection