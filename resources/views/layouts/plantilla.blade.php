<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <style>
        .cabecera {
            background-color: red;
        }
        .cuerpo {
            background-color: blue;
        }
        .pie {
            background-color: yellow;
        }
    </style>
</head>
<body>
    <div class="cabecera">
    @yield('cabecera')
    @include('layouts.navbar')
    </div>

    <div class="cuerpo">
    @yield('cuerpo')
    </div>

    <div class="pie">
    @yield('pie')
    @include('layouts.footer')
    </div>
   
</body>
</html>