<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Libreria de iconos de materia.io ya que boostrpa ya no trae iconos -->
    <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
    <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
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

    <!-- 
   responsive:
   container-fluid:
   striped: 
   table-hover works if u click 
   my-auto:alinea verticalmente al madio automaticamente
    d-block
     -->

    <!-- 
     PHP
     
     array datos
         array: [
             "Portada" => "url_portada",
              array: [
                  "id" => 
              ]
         ],
         
     -->

     @if (!empty($datos))
         @foreach ($datos as $dato)
            {{ $dato }}
            {!! $dato !!}
         @endforeach
     @else
        {{ "esta vacio señor, vayase. quiere bolsa?"}}
        {!! "esta vacio señor, vayase. quiere bolsa?"!!}
     @endif
     
    <div class="container overflow-auto">
        <div class="row h-100" id="head">
            <div id="albumcontainer" class="col-sm-12 col-md-5">
                <img src="m5albumcover.jpg" class="" alt="">
            </div>
            <div class="col-sm-12 col-md-7 my-auto text-center text-md-left" id="info">
                <h2>ÁBUM</h2>
                <h1>After Laughter</h1>
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
                <p>12 Canciones (42 minutos) - Publicado el 11 de Mayo de 2017</p>
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
                        <tr>

                            <td scope="row">1</td>
                            <td class=""><img src="m5albumcover.jpg" alt="" class=""></td>
                            <td>Memories</td>
                            <td>Maroon 5</td>
                            <td>3:09</td>
                            <td>+
                                <!--
                                <div class="btn-group">
                                    dropdown-toggle pone la flecha al desplegable
                                    <button class="btn btn-secondary" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        ➕
                                    </button>
                                </div>

                            </td>

                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-secondary" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        ⋮
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>

                            </td>
                            
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input position-static flex-fill" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                                </div>
                            </td>
                            -->
                        </tr>
                        <tr>
                            <td scope="row">2</td>
                            <td class=""><img src="m5albumcover.jpg" alt="" class=""></td>
                            <td>Memories</td>
                            <td>Maroon 5</td>
                            <td>3:09</td>
                            <td>+</td>
                        </tr>
                        <tr>
                            <td scope="row">3</td>
                            <td class=""><img src="m5albumcover.jpg" alt="" class=""></td>
                            <td>Memories</td>
                            <td>Maroon 5</td>
                            <td>3:09</td>
                            <td>+</td>
                        </tr>
                        <tr>
                            <td scope="row">4</td>
                            <td class=""><img src="m5albumcover.jpg" alt="" class=""></td>
                            <td>Memories</td>
                            <td>Maroon 5</td>
                            <td>3:09</td>
                            <td>+</td>
                        </tr>
                        <tr>
                            <td scope="row">5</td>
                            <td class=""><img src="m5albumcover.jpg" alt="" class=""></td>
                            <td>Memories</td>
                            <td>Maroon 5</td>
                            <td>3:09</td>
                            <td>+</td>
                        </tr>
                        <tr>
                            <td scope="row">6</td>
                            <td class=""><img src="m5albumcover.jpg" alt="" class=""></td>
                            <td>Memories</td>
                            <td>Maroon 5</td>
                            <td>3:09</td>
                            <td>+</td>
                        </tr>
                        <tr>
                            <td scope="row">7</td>
                            <td class=""><img src="m5albumcover.jpg" alt="" class=""></td>
                            <td>Memories</td>
                            <td>Maroon 5</td>
                            <td>3:09</td>
                            <td>+</td>
                        </tr>
                        <tr>
                            <td scope="row">8</td>
                            <td class=""><img src="m5albumcover.jpg" alt="" class=""></td>
                            <td>Memories</td>
                            <td>Maroon 5</td>
                            <td>3:09</td>
                            <td>+</td>
                        </tr>
                        <tr>
                            <td scope="row">9</td>
                            <td class=""><img src="m5albumcover.jpg" alt="" class=""></td>
                            <td>Memories</td>
                            <td>Maroon 5</td>
                            <td>3:09</td>
                            <td>+</td>
                        </tr>
                        <tr>
                            <td scope="row">10</td>
                            <td class=""><img src="m5albumcover.jpg" alt="" class=""></td>
                            <td>Memories</td>
                            <td>Maroon 5</td>
                            <td>3:09</td>
                            <td>+</td>
                        </tr>
                        <tr>
                            <td scope="row">11</td>
                            <td class=""><img src="m5albumcover.jpg" alt="" class=""></td>
                            <td>Memories</td>
                            <td>Maroon 5</td>
                            <td>3:09</td>
                            <td>+</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>