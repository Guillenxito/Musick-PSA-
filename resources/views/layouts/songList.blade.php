<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Bootstrap CSS-->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Libreria de iconos de materia.io ya que boostrpa ya no trae iconos -->
    <link href="{{ asset('/../dist/material-components-web/material-components-web.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/../dist/material-components-web/material-components-web.min.js') }}" rel="stylesheet">
    <!--
    <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
    <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script> 
    -->
    <!-- Libreria de iconos de google -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        /*{
            outline: 1px solid red;
        }*/
        /*
         Extra small devices (portrait phones, less than 576px) 
        @media (max-width: 575.98px) {
            
        }

        Small devices (landscape phones, 576px and up)
        @media (min-width: 576px) and (max-width: 767.98px) {
            
        }*/
        /* Small devices (landscape phones, 576px and up) */
        @media (max-width: 767.98px) {
            #albumcontainer>img {
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 50%;
            }

            #info {
                /*text-align: center;*/
            }
        }

        /* Medium devices (tablets, 768px and up) */
        @media (min-width: 768px) and (max-width: 991.98px) {
            
        }

        /* Large devices (desktops, 992px and up) */
        @media (min-width: 992px) and (max-width: 1199.98px) {
            .material-icons.md-48 {font-size: 76px;}
        }

        /* Extra large devices (large desktops, 1200px and up) */
        @media (min-width: 1200px) {
            .md-48 {font-size: 2em;}
        }

        

        body {
            font-size: 1.5vw;
        }

        #albumcontainer>img {
            width: 80%;
            min-width: 120px;
            max-width: 340px;
        }
        
        #icons{
        }
        
        .material-icons.md-18 { font-size: 18px; }
        .material-icons.md-24 { font-size: 24px; } /* Default */
        .material-icons.md-36 { font-size: 36px; }
        .material-icons.md-48 { font-size: 48px; }
        
        #icons i{       
        }

        .table {
            border-radius: 6px;
        }

        .table tr,
        .table th {
            text-align: center;
        }

        .table>tbody>tr>td,
        :not(.table>tbody>tr>td:nth-child(2)) {
            vertical-align: middle;
        }

        tr td:nth-child(2)>img {
            min-width: 20px;
            min-height: 20px;
            max-width: 3vw;
        }

        .table>tbody>tr td:nth-child(7)>div>button {
            width: 5vh;
            height: 5vh;
        }

        #dropdownMenuButton {
            width: 5vh;
            height: 5vh;
        }

        /*
        table>tbody>tr>td>input[type=checkbox] {
            max-height: 100vh;
            max-width: 100vh;
        }
        */
    </style>
</head>

<body>
    <div class="cabecera">
        @include('layouts.navbar')
    </div>
    
    <div class="cuerpo">
        @yield('cuerpo')
    </div>
    
    <div class="footer">
        @yield('footer')
    </div>
 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
-->

</body>
</html>