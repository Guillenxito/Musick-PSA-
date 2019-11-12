
@extends('layouts.plantilla')

@section('cuerpo')
    <!-- novedades -->
    <div class="container text-center" id="nov">
        <a name="novedades"></a>
        <div class="well text-center h1 titulo">Novedades</div>
        <div class="row text-center" id="novedades">
            <template id="template-novedades">
                <div class="card m-2 text-left flex-fill" style="width: 16rem;">
                    <div class="card-header bg-dark">
                        <h5 class="card-title text-light">¡¡¡nombreAuthor!!!</h5>
                    </div>
                    <img class="card-img-top" src="{{ asset('img/artistas/¡¡¡nombreAuthor_!!!/¡¡¡nombreAuthor_!!!.png') }}" alt="Card image cap">
                </div>
            </template>
        </div>
    </div>
    <!-- recomendados -->
    <div class="container text-center" id="rec">
        <a name="recomendados"></a>
        <div class="well text-center h1 titulo">Recomendados</div>
        <div class="row text-center" id="recomendados">
            <template id="template-recomendados">
                <div class="card m-2 text-left flex-fill" style="width: 16rem;">
                    <div class="card-header bg-dark">
                        <h5 class="card-title text-light">¡¡¡nombreAuthor!!!<br>¡¡¡nombreAlbum!!!</h5>
                    </div>
                    <img class="card-img-top" src="{{ asset('img/artistas/¡¡¡nombreAuthor_!!!/¡¡¡nombreAlbum_!!!.png') }}" alt="Card image cap">
                </div>
            </template>
        </div>
    </div>
    <!-- estilos -->
    <div class="estilos" id="est">
        <a name="estilos"></a>
        <div id="carruselEstilos" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators" id="estilos_1">
                <template id="template-estilos-1">
                    <li data-target="#carruselEstilos" data-slide-to="¡¡¡nombreEstilo!!!" class="active">
                    </li>
                </template>
            </ol>
            <div class="carousel-inner" id="estilos_2">
                <template id="template-estilos-2">
                    <div class="carousel-item active">
                        <img src="{{ asset('img/estilos/¡¡¡nombreEstilo!!!.png') }}" class="d-block w-100 p-5" alt="...">
                        <div class="carousel-caption rounded d-none d-md-block bg-dark">
                            <h5>¡¡¡nombreEstilo!!!</h5>
                            <p>¡¡¡descripcion!!!</p>
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
    <div class="container text-center" id="ten">
        <a name="tendencias"></a>
        <div class="well text-center h1 titulo">Tendencias</div>
        <div class="row text-center" id="tendencias">
            <template id="template-tendencias">
                <div class="card m-2 text-left flex-fill" style="width: 16rem;">
                    <div class="card-header bg-dark">
                        <h5 class="card-title text-light">¡¡¡nombreCancion!!!<br>¡¡¡nombreArtista!!!<br>¡¡¡nombreAlbum!!!</h5>
                    </div>
                    <img class="card-img-top" src="{{ asset('img/artistas/¡¡¡nombreArtista_!!!/¡¡¡nombreAlbum_!!!.png') }}" alt="Card image cap"> 
                </div>
            </template>
        </div>
    </div>
    <!-- album -->
     <div class="container text-center" id="alb">
        <a name="album"></a>
        <div class="well text-center h1 titulo">¡¡¡nb_album!!!</div>
        <div class="row text-center" id="album">
            <template id="template-album">
                  <button type="button" class="list-group-item list-group-item-action">¡¡¡nb_cancion!!! </button>
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
        array = array[0];
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
                            "nombreAuthor_":element.artista,
                            "nombreAlbum":(element.nombreAlbum).replace(/_/g,' ').toUpperCase(),
                            "nombreAuthor":(element.artista).replace(/_/g,' ').toUpperCase()                        
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
            estilos.push({"nombreEstilo":element.nombre,
                            "descripcion":element.descripcion
                        });
        });
        arrFinal["novedades"] = novedades;
        arrFinal["recomendados"] = recomendados;
        arrFinal["tendencias"] = tendencias;
        arrFinal["estilos"] = estilos;
        return arrFinal;
    }
    function modificarRespuestaAlbum(array){
        console.log("CANCIONES");
        console.log(array);
        /*var arrFinal = new Array();

        var canciones = new Array();
        array.forEach(function(element) {
            canciones.push({"nombreAuthor_":element.id_song,
                             "titulo":element.titulo,
                    })
        });

        arrFinal["canciones"] = canciones;
        return arrFinal;*/
    }

    var informacionHome = modificarRespuesta(Array(<?php echo json_encode($categorias); ?>));
    
    // console.log("NOVEDADES",informacionHome.novedades);
    // console.log("RECOMENDADOS",informacionHome.recomendados);
    // console.log("TENDENCIAS",informacionHome.tendencias);
    // console.log("ESTILOS",informacionHome.estilos);
    
    // url del servidor
    const urlServidor = 'http://musick.test';
    // cancionTendencia guardara la canción buscada para resaltarla en el album
    let cancionTendencia;
    const contenedor_novedades = document.getElementById('novedades');
    const contenedor_recomendados = document.getElementById('recomendados');
    const contenedor_tendencias = document.getElementById('tendencias');
    const contenedor_estilos_1 = document.getElementById('estilos_1');
    const contenedor_estilos_2 = document.getElementById('estilos_2');
    const contenedor_album = document.getElementById('album');
    const titulos = document.querySelectorAll('.titulo');
    const divEstilos = document.querySelectorAll('.estilos')[0];
    // const listaUsuarios = document.querySelector(".lista-recomendados");
    // const template = document.getElementById("template-recomendados");
    
    // novedades
    const novedades = array => {
        const patron = document.getElementById('template-novedades').innerHTML;
        
        const res = templ.rellenar(patron, informacionHome.novedades);

        contenedor_novedades.innerHTML += `${res}</div>`;
    }
    // recomendados
    const recomendados = array => {
        const patron = document.getElementById('template-recomendados').innerHTML;
        
        const res = templ.rellenar(patron, informacionHome.recomendados);

        contenedor_recomendados.innerHTML += `${res}</div>`;
    } 
    // tendencias
    const tendencias = array => {
        const patron = document.getElementById('template-tendencias').innerHTML;
        
        const res = templ.rellenar(patron, informacionHome.tendencias);

        contenedor_tendencias.innerHTML += `${res}</div>`;
    }

    // tendencias-cancion
    const album = (array) => {
        
        const patron = document.getElementById('template-album').innerHTML;
        
        const res = templ.rellenar(patron, array);
        
        contenedor_album.innerHTML += `<div class="list-group">${res}</div>`;
    }
    // estilos
    const estilos = array => {
        const patron1 = document.getElementById('template-estilos-1').innerHTML;
        const patron2 = document.getElementById('template-estilos-2').innerHTML;
        
        const res1 = templ.rellenar(patron1, informacionHome.estilos);
        const res2 = templ.rellenar(patron2, informacionHome.estilos);

        contenedor_estilos_1.innerHTML += `${res1}</div>`;
        contenedor_estilos_2.innerHTML += `${res2}</div>`;
    }

    /*******************************************************/
    
    // Muestra el home principal
    const mostrarHome = () => {
        borrarHome();
        novedades();
        recomendados();  
        tendencias();   
        // estilos();
        titulos.forEach(titulo => titulo.setAttribute('style','display:visibility'));
        divEstilos.setAttribute('style','display:visibility');
        divEstilos.setAttribute('style','display:visibility');
        contenedor_album.setAttribute('style','display:none');
    }

    // Borra el home principal
    const borrarHome = () => {
        const flexFills = document.querySelectorAll('.flex-fill');
        flexFills.forEach(tarjetas => tarjetas.parentNode.removeChild(tarjetas));
        titulos.forEach(titulo => titulo.setAttribute('style','display:none'));
        divEstilos.setAttribute('style','display:none');
    }



    // Mostrar la información del artista con todos sus albunes
    const mostrarArtista = (informacionArtista) => {
        informacionArtista = JSON.parse(informacionArtista);
        console.log(informacionArtista);
        // tendencias_cancion(artista.canciones);
        // borrarHome();
    }

    // Muestra un album
    const mostrarAlbum = (informacionAlbum) => {
        informacionAlbum = JSON.parse(informacionAlbum);
        console.log(informacionAlbum);
        
    }


    // pedirDatos('http://musick.test/autor/camaron/reencuentro',mostrarArtista);
    // pedirDatos('http://musick.test/autor/camaron',mostrarArtista);
    
  /*
  ** Función para pedir los datos al servidor CORS
  */
    function pedirDatos(peticion, callback) {
        var xhr = new XMLHttpRequest();

        xhr.addEventListener('readystatechange', function(evt) {
        if(xhr.readyState === 4) {
            if(xhr.status === 200) {
            callback(xhr.responseText);
            }
            else {
            alert(`Error: ${xhr.status} (${xhr.statusText})`);
            }
        } 
        });
        console.log(`${urlServidor}/${peticion}`);

        xhr.open('GET', `${urlServidor}/${peticion}`);
        xhr.send(null);
    }

    /*****************************/
    const ponerEvento = () => {
        const cuerpo = document.getElementById('cuerpo');
        cuerpo.addEventListener('click', gestionarEvento);
    }

    // Falta ver que hacemos con los estilos, si llevan a una nueva página o no.
    const gestionarEvento = (evt) => {
        // Mucho cuidados con cambiar o añadir cualquier clase en el template (deja de funcionar).
        if (evt.target !== evt.currentTarget) {
            let texto;
            switch (evt.target.className) {
                case 'card m-2 text-left flex-fill': 
                    texto = evt.target.firstChild.firstChild.innerHTML;
                    break;
                case 'card-header bg-dark': 
                    texto = evt.target.firstElementChild.innerHTML;
                    break;
                case 'card-title text-light': 
                    texto = evt.target.innerHTML;
                    break;
                case 'card-img-top':                    
                    texto = evt.target.previousElementSibling.firstElementChild.innerHTML;
                    break;
            }
            const buscado = (texto) 
                            ? texto.split("<br>")
                                   .map(txt => txt.toLowerCase()
                                                  .replace(/ /g,"_"))
                            : undefined;
            if (typeof(buscado) === 'object') {
                switch (buscado.length) {
                    case 1:
                        pedirDatos('autor/' + buscado[0], mostrarArtista);
                        break;
                    case 2:
                        pedirDatos('autor/' + buscado[0] + '/' + buscado[1], mostrarAlbum);
                        break;
                    case 3:
                        cancionTendencia = buscado[0];
                        pedirDatos('autor/' + buscado[1] + '/' + buscado[2], mostrarAlbum);
                        break;
                }   
            }
        }
    }

    ponerEvento();
    mostrarHome();

</script>
<!-- <script src="{{ asset('js/handlerTemplate.js') }}"></script> -->
<!-- <script src="{{ asset('js/fillerData.js') }}"></script> -->

@endsection
