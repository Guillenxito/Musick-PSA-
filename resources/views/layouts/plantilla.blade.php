<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- csrf es el token unico del usuario que exige laravel para hacer peticiones ajax commo medida de seguridad  -->
    <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
    @yield('meta')
    <title>Document</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/open-iconic.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bahianita|Emilys+Candy&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('img/logo.jpg') }}" />
    @yield('styles')
    <!-- <style>*{outline:1px solid red;</style> -->
</head>
<body>
    <div class="cabecera h3">
        @include('layouts.navbar')
    </div>

    <div class="cuerpo" id="cuerpo">
        @yield('cuerpo')
    </div>

    <div class="pie">
        @include('layouts.footer')
    </div>
    <script src="{{ asset('js/jquery-3.3.1.slim.min.js') }}"></script>
    <!-- <script src="{{ asset('js/popper.min.js') }}"></script> -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- <script src="{{ asset('js/mdb.min.js') }}"></script> -->
    @yield('scripts')
</body>
</html>
