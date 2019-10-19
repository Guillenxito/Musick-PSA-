@extends('layouts.plantilla')

@section('cuerpo')
    @foreach($categorias as $categoria)
        @include('layouts.categoriaHome')
    @endforeach
@endsection
