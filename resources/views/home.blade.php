
@extends('layouts.plantilla')

@section('cuerpo')
    <!-- novedades -->
    <div class="container text-center">
        <a name="novedades"></a>
        <div class="well text-center h1">Novedades</div>
        <div class="row text-center" id="novedades">
            <template id="template-novedades">
                <div class="card m-2 text-left flex-fill"w style="width: 16rem;">
                    <div class="card-header bg-dark ">
                        <h5 class="card-title text-light">¡¡¡nombreAuthor!!!</h5>
                    </div>
                    <a href="#">
                        <img class="card-img-top" src="{{ asset('img/artistas/¡¡¡nombreAuthor_!!!/¡¡¡nombreAuthor_!!!.png') }}" alt="Card image cap">
                    </a>
                </div>
            </template>
        </div>
    </div>
    <!-- recomendados -->
    <div class="container text-center">
        <a name="recomendados"></a>
        <div class="well text-center h1">Recomendados</div>
        <div class="row text-center" id="recomendados">
            <template id="template-recomendados">
                <div class="card m-2 text-left flex-fill"w style="width: 16rem;">
                    <div class="card-header bg-dark ">
                        <h5 class="card-title text-light">¡¡¡nombreAuthor!!!<br>¡¡¡nombreAlbum!!!</h5>
                    </div>
                    <a href="#">
                        <img class="card-img-top" src="{{ asset('img/artistas/¡¡¡nombreAuthor_!!!/¡¡¡nombreAlbum_!!!.png') }}" alt="Card image cap">
                    </a>
                </div>
            </template>
        </div>
    </div>
    <!-- estilos -->
    <div class="bd-example">
        <a name="estilos"></a>
        <div id="carruselEstilos" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <template id="template-estilos-1">
                    <li data-target="#carruselEstilos" data-slide-to="¡¡¡nombreEstilo!!!" class="active">
                    </li>
                </template>
            </ol>
            <div class="carousel-inner">
                <template id="template-estilos-2">
                    <div class="carousel-item active">
                        <img src="{{ asset('img/estilos/¡¡¡nombreEstilo!!!.png') }}" class="d-block w-100 p-5" alt="...">
                        <div class="carousel-caption rounded d-none d-md-block bg-dark ">
                            <h5>¡¡¡nombreEstilo!!!</h5>
                            <p>¡¡¡$descripcion!!!</p>
                        </div>
                    </div>
                </template>
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
    <!-- tendencias -->
    <div class="container text-center">
        <a name="tendencias"></a>
        <div class="well text-center h1">Tendencias</div>
        <div class="row text-center" id="tendencias">

            <template id="template-tendencias">
                <div class="card m-2 text-left flex-fill"w style="width: 16rem;">
                    <div class="card-header bg-dark ">
                        <h5 class="card-title text-light">¡¡¡nombreCancion!!!<br>¡¡¡nombreAuthor!!!<br>¡¡¡nombreAlbum!!!</h5>
                    </div>
                    <a href="#">
                        <img class="card-img-top" src="{{ asset('img/artistas/¡¡¡nombreAuthor_!!!/¡¡¡nombreAlbum_!!!.png') }}" alt="Card image cap">
                    </a>
                </div>
            </template>
        </div>
    </div>


<script>
    const templ = (function () {

        function aHtml(patron, datos) {
            patron = patron.split('¡¡¡');

            let res = patron.shift();

            res = patron.reduce((acc, item) => {
                const valorItem = item.split('!!!');
                const llaves = valorItem[0].trim().split('.');

                let i = 0;
                let valor = datos[llaves[0]];
                
                while (typeof valor === 'object') {
                valor = valor[llaves[++i]];
                } 

                return acc + valor + valorItem[1];

        }, res);

        return res;
        }

        function rellenar(patron, datos) {
        if ( !datos || !patron) return "";
        
        if (!Array.isArray(datos)) datos = [].concat(datos);

        return datos.map(dato => aHtml(patron, dato)).join('');
        }

        return {
            rellenar
        };

    })();

    function modificarRespuesta(array){
        console.log(array[0]);
        array = array[0];
        console.log(array);
        var arrFinal = new Array();

        var novedades = new Array();
        array['novedades'].forEach(function(element) {
            novedades.push({"nombreAuthor_":element.artista,
                        "nombreAuthor":(element.artista).replace(/_/g,' ').toUpperCase()
                    })
        });

        var recomendados = new Array();
        array['recomendados'].forEach(function(element) {
            recomendados.push({"nombreAlbum_":element.nombreAlbum,
                            "nombreAuthor_":element.nombreAuthor,
                            "nombreAlbum":(element.nombreAlbum).replace(/_/g,' ').toUpperCase(),
                            "nombreAuthor":(element.nombreAuthor).replace(/_/g,' ').toUpperCase()                        
                        });
        });

        var tendencias = new Array();
        array['tendencias'].forEach(function(element) {
            tendencias.push({"nombreCancion_":element.titulo,
                            "nombreAlbum_":element.nombre,
                            "nombreArtista_":element.artista,
                            "nombreCancion":(element.titulo).replace(/_/g,' ').toUpperCase(),
                            "nombreAlbum":(element.nombre).replace(/_/g,' ').toUpperCase(),
                            "nombreArtista":(element.artista).replace(/_/g,' ').toUpperCase()
                        });
        });

        var estilos = new Array();
        array['estilos'].forEach(function(element) {
            tendencias.push({"nombreEstilo":element.nombre,
                            "descripcion":element.descripcion
                        });
        });
        arrFinal["novedades"] = novedades;
        arrFinal["recomendados"] = recomendados;
        arrFinal["tendencias"] = tendencias;
        arrFinal["estilos"] = estilos;

        return arrFinal;
    }

    var informacionHome = modificarRespuesta(Array(<?php echo json_encode($categorias); ?>));
    console.log(informacionHome.novedades);
    console.log(informacionHome.recomendados);
    console.log(informacionHome.tendencias);
    console.log(informacionHome.estilos);

    const contenedor_novedades = document.getElementById('novedades');
    const contenedor_recomendados = document.getElementById('recomendados');
    const contenedor_tendencias = document.getElementById('tendencias');
    const contenedor_estilos = document.getElementById('estilos');
    // const listaUsuarios = document.querySelector(".lista-recomendados");
    // const template = document.getElementById("template-recomendados");
    
    // novedades
    const novedades = array => {
    console.log(informacionHome.novedades);
        const patron = document.getElementById('template-novedades').innerHTML;
        
        const res = templ.rellenar(patron, informacionHome.novedades);

        contenedor_novedades.innerHTML += `${res}</div>`;
    }
    novedades();
    // recomendados
    const recomendados = array => {
    console.log(informacionHome.recomendados);
        const patron = document.getElementById('template-recomendados').innerHTML;
        
        const res = templ.rellenar(patron, informacionHome.recomendados);

        contenedor_recomendados.innerHTML += `${res}</div>`;
    }
    recomendados();    
    // tendencias
    const tendencias = array => {
    console.log(informacionHome.tendencias);
        const patron = document.getElementById('template-tendencias').innerHTML;
        
        const res = templ.rellenar(patron, informacionHome.tendencias);

        contenedor_tendencias.innerHTML += `${res}</div>`;
    }
    tendencias();   
    // estilos
    const estilos = array => {
    console.log(informacionHome.estilos);
        const patron1 = document.getElementById('template-estilos-1').innerHTML;
        const patron2 = document.getElementById('template-estilos-2').innerHTML;
        
        const res1 = templ.rellenar(patron1, informacionHome.estilos);
        const res2 = templ.rellenar(patron2, informacionHome.estilos);

        contenedor_estilos.innerHTML += `${res}</div>`;
    }
    estilos();

</script>
<!-- <script src="{{ asset('js/handlerTemplate.js') }}"></script> -->
<!-- <script src="{{ asset('js/fillerData.js') }}"></script> -->

@endsection