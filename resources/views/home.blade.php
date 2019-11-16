
@extends('layouts.plantilla')
<style>
    html {
        scroll-behavior: smooth;
    }

    #cuerpo {
        position: relative;
        top: 3rem;
        font-family: 'Bahianita', cursive;
        letter-spacing: 1.5;
    }

    h5, h6 {
        font-family: 'Emilys Candy', cursive;
        letter-spacing: 1.5;
    }

</style>

@section('cuerpo')

    <!-- Seccion home -->
    <section id="home">
    
        <!-- tendencias -->
        <div class="container text-center mb-5 mt-5 pt-5" id="ten">
            <a name="tendencias"></a>
            <div class="card text-center h1 titulo col-lg-4 mt-5 m-auto animated bounce infinite">Tendencias</div>
            <div class="row text-center" id="tendencias">
                <template id="template-tendencias">
                    <div class="card m-2 text-left flex-fill" style="width: 16rem;" id="¡¡¡nombreArtista_!!!+¡¡¡nombreAlbum_!!!+¡¡¡nombreCancion_!!!">
                        <div class="card-header bg-dark">
                            <h5 class="card-title text-light font-weight-bold">¡¡¡nombreArtista!!!</h5>
                            <h6 class="card-title text-light font-weight-light">¡¡¡nombreAlbum!!!</h6>
                            <h6 class="card-title text-light font-weight-light font-italic">¡¡¡nombreCancion!!!</h6>
                        </div>
                        <!-- <div style="background-image:{{ asset('img/artistas/¡¡¡nombreArtista_!!!/¡¡¡nombreAlbum_!!!.png') }};"> -->
                            <img class="card-img-top w-100 h-100" src="{{ asset('img/artistas/¡¡¡nombreArtista_!!!/¡¡¡nombreAlbum_!!!.png') }}" alt="Card image cap"> 
                        <!-- </div> -->
                    </div>
                </template>
            </div>
        </div>

        <!-- recomendados -->
        <div class="container text-center mb-5" id="rec">
            <a name="recomendados"></a>
            <div class="card text-center h1 titulo col-lg-4 mt-5 m-auto animated bounce infinite">Recomendados</div>
            <div class="row text-center" id="recomendados">
                <template id="template-recomendados">
                    <div class="card m-2 text-left flex-fill" style="width: 16rem;" id="¡¡¡nombreAuthor_!!!+¡¡¡nombreAlbum_!!!">
                        <div class="card-header bg-dark">
                        <h5 class="card-title text-light font-weight-bold">¡¡¡nombreAuthor!!!</h5>
                        <h6 class="card-title text-light font-weight-light">¡¡¡nombreAlbum!!!</h6>
                        </div>
                        <img class="card-img-top w-100 h-100" src="{{ asset('img/artistas/¡¡¡nombreAuthor_!!!/¡¡¡nombreAlbum_!!!.png') }}" alt="Card image cap">
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
                        <img src="{{ asset('img/estilos/¡¡¡nombreEstilo!!!.png') }}" class="d-block  p-5" alt="...">
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
        
        <!-- novedades -->
        <div class="container text-center mb-5" id="nov">
            <a name="novedades"></a>
            <div class="card text-center h1 titulo col-lg-4 mt-5 m-auto animated bounce infinite">Novedades</div>
            <div class="row text-center" id="novedades">
                <template id="template-novedades">
                    <div class="card m-2 text-left flex-fill" style="width: 16rem;" id="¡¡¡nombreAuthor_!!!">
                        <div class="card-header bg-dark">
                            <h5 class="card-title text-light font-weight-bold">¡¡¡nombreAuthor!!!</h5>
                        </div>
                        <img class="card-img-top w-100 h-100" src="{{ asset('img/artistas/¡¡¡nombreAuthor_!!!/¡¡¡nombreAuthor_!!!.png') }}" alt="Card image cap">
                    </div>
                </template>
            </div>
        </div>
    
    </section>
    <!-- Fin seccion home -->

    <!-- Seccion author -->
    <section id="author">

        <!-- albumesAutor -->
        <div class="container text-center" id="albs">
            <div class="text-center" id="albumes_info">
                <template id="template-albumes-info" class="row">  
                    <img class="card-img-top w-25 border border-dark rounded animated bounce" src="{{ asset('img/artistas/¡¡¡nombreAutor_!!!/¡¡¡nombreAutor_!!!.png') }}" alt="Card image cap"> 
                    <div class="card text-center h1 titulo">¡¡¡nombreAutor!!!</div>
                    <div class="card text-center h3 titulo">¡¡¡informacion!!!</div>
                    <div class="card text-center h3 titulo bg-dark text-light" data-toggle="collapse" href="#albumes_titulos" >
                        Discos
                    </div>
                </template>
            </div>
            <div class="row text-center collapse" id="albumes_titulos">
                <template id="template-albumes-canciones">
                    <button class="list-group-item list-group-item-action">¡¡¡nombreAlbum!!!</button>
                </template>
            </div>
        </div>

    </section>
    <!-- Fin seccion author -->

    <!-- Seccion album -->
    <section id="album">
    
        <!-- album -->
        <div class="container text-center" id="alb">
            <div class="row text-center" id="album_autor">
                <template id="template-album-portada"> 
                    <div class="card text-center h1 titulo">¡¡¡autor.nombreAutor!!!</div>
                    <!--<div class="card text-center h3 titulo">¡¡¡autor.informacion!!!</div>-->
                    <img class="card-img-top" src="{{ asset('img/artistas/¡¡¡autor.nombreAutor_!!!/¡¡¡album.nombreAlbum_!!!.png') }}" alt="Card image cap"> 
                    <div class="card text-center h1 titulo">¡¡¡album.nombreAlbum!!!</div>
                </template>
            </div>
            <div class="row text-center" id="album">
                <template id="template-album">
                    <button class="list-group-item list-group-item-action d-flex">
                        <div class="pr-5">
                            ¡¡¡posicionCancionAlbum!!!
                        </div>
                        <div class="text-left flex-grow-1">
                            ¡¡¡titulo!!!
                        </div>                    
                        <div id="¡¡¡id_cancion!!!_play">
                            <!-- icono reproducir cancion -->
                            <!-- <i class="material-icons playsong">
                            <svg viewBox="0 0 8 8"><use xlink:href="#play-circle"></use></svg>
                            </i> -->
                        </div>
                        <div id="¡¡¡id_cancion!!!_biblioteca">
                            <!-- icono añadir a la biblioteca -->
                            <!-- <i class="material-icons addsong" id="¡¡¡id_cancion!!!">
                                playlist_add
                            </i> -->
                        </div>                
                    </button>
                </template>
            </div>
        </div>
 
    </section>
    <!-- Fin seccion album -->

       <!-- author ??? -->
        <div class="container text-center" id="alb">
            <a name="album"></a>
            <div class="card text-center h1 titulo">¡¡¡nb_author!!!</div>
            <div class="row text-center" id="album">
                <template id="template-album">
                    <button type="button" class="list-group-item list-group-item-action">¡¡¡informacion!!!</button>
                </template>
            </div>
        </div>

    <!-- biblioteca -->
    <div class="container text-center" id="bibl">
        <a name="album"></a>
        <div class="row text-center" id="biblioteca">
            <template id="template-biblioteca">
                  <button type="button" class="list-group-item list-group-item-action" data-id="¡¡¡id-song!!!">¡¡¡titulo!!!</button>
            </template>
        </div>
    </div>

<script>

    // objeto audio, ¿¿¿ no lo encuentra porque pertenece al footer ??? 
    let reproductor = document.getElementById('reproductor');
    console.log(reproductor);

    // Esto hay que cambiarlo para pedirlo por javascript porque sino cuando volvamos a HOME se volvera a cargar la página.
    let informacionHome;
    // cancionTendencia guardara la canción buscada para resaltarla en el album
    let cancionTendencia;
    // Estas variables si solo se usan en una función concreta mejor meterlas en la función.
    // url del servidor
    const urlServidor = 'http://musick.test';
    const contenedor_novedades = document.getElementById('novedades');
    const contenedor_recomendados = document.getElementById('recomendados');
    const contenedor_tendencias = document.getElementById('tendencias');
    const contenedor_estilos_1 = document.getElementById('estilos_1');
    const contenedor_estilos_2 = document.getElementById('estilos_2');
    const contenedor_album_info = document.getElementById('albumes_info');
    const contenedor_albumes_info = document.getElementById('albumes_info');
    const contenedor_albumes_titulos = document.getElementById('albumes_titulos');
    const contenedor_album  = document.getElementById('album');
    const titulos = document.querySelectorAll('.titulo');
    const contenedor_album_autor = document.querySelectorAll('album_autor');
    const contenedor_album_portada = document.querySelectorAll('album_portada');
    const divEstilos = document.querySelectorAll('.estilos')[0];
    // const listaUsuarios = document.querySelector(".lista-recomendados");
    // const template = document.getElementById("template-recomendados");
    
    /* ----- TRATAR DATOS JSON ----- */

    // Trata la respuesta de home
    const modificarRespuestaHome = (array) => {
        array = array[0];
        let respuesta = new Array();

        let novedades = new Array();
        array['novedades'].forEach(function(element) {
            novedades.push({
                "nombreAuthor_":element.artista,
                "nombreAuthor":(element.artista).replace(/_/g,' ').toUpperCase()
            })
        });

        let recomendados = new Array();
        array['recomendados'].forEach(function(element) {
            recomendados.push({
                "nombreAlbum_":element.nombreAlbum,
                "nombreAuthor_":element.artista,
                "nombreAlbum":(element.nombreAlbum.charAt(0).toUpperCase() + element.nombreAlbum.slice(1)).replace(/_/g,' ').toUpperCase(),
                "nombreAuthor":(element.artista).replace(/_/g,' ').toUpperCase()                        
            });
        });

        let tendencias = new Array();
        array['tendencias'].forEach(function(element) {
            tendencias.push({
                "nombreCancion_":element.titulo,
                "nombreAlbum_":element.nombre,
                "nombreArtista_":element.artista,
                "nombreCancion":(element.titulo.charAt(0).toUpperCase() + element.titulo.slice(1)).replace(/_/g,' '),
                "nombreAlbum":(element.nombre).replace(/_/g,' ').toUpperCase(),
                "nombreArtista":(element.artista).replace(/_/g,' ').toUpperCase()
            });
        });

        let estilos = new Array();
        array['estilos'].forEach(function(element) {
            estilos.push({
                "nombreEstilo":element.nombre,
                "descripcion":element.descripcion
            });
        });
        respuesta["novedades"] = novedades;
        respuesta["recomendados"] = recomendados;
        respuesta["tendencias"] = tendencias;
        respuesta["estilos"] = estilos;
        return respuesta;
    }

    // Trata la respuesta del author 
    const modificarRespuestaAuthor = (array) => {
        let respuesta = new Array();      
        let albumes = new Array();
        array.albums.forEach(function(album) {
            albumes.push({
                "id_album" : album.id_album,
                "nombreAlbum_" : album.nombreAlbum,
                "nombreAlbum" : (album.nombreAlbum).replace(/_/g,' ').toUpperCase()
            });
        });
        let canciones = new Array();
        array.canciones.forEach(function(cancion) {
            canciones.push({
                "id_album" : cancion.id_album,
                // "id_cancion" : cancion.id_cancion,
                "titulo_" : cancion.titulo,
                "titulo" : (cancion.titulo).replace(/_/g,' ').toUpperCase()
            });
        });
        let autor = new Array();
        autor.push({
            "nombreAutor_" : array.autor.nombreAutor,
            "nombreAutor" : (array.autor.nombreAutor).replace(/_/g,' ').toUpperCase(),
            "informacion" : array.autor.informacion
        });
        respuesta['albumes'] = albumes;        
        respuesta['canciones'] = canciones;
        respuesta['autor'] = autor;
        console.log('respuesta --->>> ',respuesta);
        return respuesta;
    }

    // Trata la respuesta del album 
    const modificarRespuestaAlbum = (array) => {
        console.log('MODIFICAR RESPUESTA ALBUM ---->>>> ', array);
        let respuesta = new Array();      
        let album = new Array();
        album.push({
            "id_album" : array.album.id_album,
            "nombreAlbum_" : array.album.nombreAlbum,
            "nombreAlbum" : (array.album.nombreAlbum).replace(/_/g,' ').toUpperCase()
        });
        let canciones = new Array();
        let posicionCancionAlbum = 1;
        array.canciones.forEach(function(cancion) {
            canciones.push({
                "id_album" : cancion.id_album,
                "id_cancion" : cancion.id_song,
                "titulo_" : cancion.titulo,
                "titulo" : (cancion.titulo).replace(/_/g,' ').toUpperCase(),
                "posicionCancionAlbum" : posicionCancionAlbum++
            });
        });
        let autor = new Array();
        autor.push({
            "nombreAutor_" : array.autor.nombreAutor,
            "nombreAutor" : (array.autor.nombreAutor).replace(/_/g,' ').toUpperCase(),
            "informacion" : array.autor.informacion
        });
        respuesta['album'] = album;        
        respuesta['canciones'] = canciones;
        respuesta['autor'] = autor;
        console.log('respuesta --->>> ',respuesta);
        return respuesta;
    }

    /* ----- MOSTRAR ----- */

    // Muestra el home principal
    const mostrarHome = () => {

        // Esto hay que cambiarlo para pedirlo por javascript porque sino cuando volvamos a HOME se volvera a cargar la página.
        informacionHome = modificarRespuestaHome(Array(<?php echo json_encode($categorias); ?>));

        ocultarTodo();
        mostrarNovedadesHome();
        mostrarRecomendadosHome(); 
        // mostrarEstilosHome(); 
        mostrarTendenciasHome();
        const home = document.getElementById('home');
        home.setAttribute('style','display:visibility');
        contenedor_album.setAttribute('style','display:none');
    }    
    
    // Muestra la información de novedades del home
    const mostrarNovedadesHome = array => {
        const patron = document.getElementById('template-novedades').innerHTML;
        
        const res = templ.rellenar(patron, informacionHome.novedades);

        contenedor_novedades.innerHTML += `${res}</div>`;
    }

    // Muestra la información de recomendados del home
    const mostrarRecomendadosHome = array => {
        const patron = document.getElementById('template-recomendados').innerHTML;
        
        const res = templ.rellenar(patron, informacionHome.recomendados);

        contenedor_recomendados.innerHTML += `${res}</div>`;
    }    
    
    // Muestra la información de estilos del home
    const mostrarEstilosHome = array => {
        const patron1 = document.getElementById('template-estilos-1').innerHTML;
        const patron2 = document.getElementById('template-estilos-2').innerHTML;
        
        const res1 = templ.rellenar(patron1, informacionHome.estilos);
        const res2 = templ.rellenar(patron2, informacionHome.estilos);

        contenedor_estilos_1.innerHTML += `${res1}</div>`;
        contenedor_estilos_2.innerHTML += `${res2}</div>`;
    }

    // Muestra la información de tendencias del home
    const mostrarTendenciasHome = array => {
        const patron = document.getElementById('template-tendencias').innerHTML;
        
        const res = templ.rellenar(patron, informacionHome.tendencias);

        contenedor_tendencias.innerHTML += `${res}</div>`;
    }


    // Muestra la información del artista con todos sus albumes ???
    const mostrarAuthor = (informacionArtista) => {
        informacionArtista = JSON.parse(informacionArtista);
        console.log('INFORMACION ARTISTA --->>>',informacionArtista);
        informacionArtista = modificarRespuestaAuthor(informacionArtista);
        ocultarTodo();
        mostrarInformacionAuthor(informacionArtista);
        mostrarAlbumesDelAuthor(informacionArtista);
    }

    // Muestra un album ???
    const mostrarAlbum = (informacionAlbum) => {
        informacionAlbum = JSON.parse(informacionAlbum);
        console.log('INFORMACION ALBUM --->>>',informacionAlbum);
        informacionAlbum = modificarRespuestaAlbum(informacionAlbum);
        ocultarTodo();
        mostrarAlbumPortada(informacionAlbum);
        mostrarCancionesAlbum(informacionAlbum);  
    }

    /*****CANCIONES POR ALBUM ??? ****/
    const mostrarCancionesAlbum = (array) => {
        console.log('PINTANDO ... CANCIONES');
        console.log(array.canciones);
        const patron = document.getElementById('template-album').innerHTML;
        
        const res = templ.rellenar(patron, array.canciones);
        
        contenedor_album.innerHTML += `<div class="list-group">${res}</div>`;

        contenedor_album.style.display="block";
    }

    // ???
    const mostrarAlbumPortada = (array) => {
        console.log('PINTANDO ... DATOS ALBUM');
        console.log(array);
        const patron = document.getElementById('template-album-portada').innerHTML;
        
        const res = templ.rellenar(patron, array);
        
        contenedor_album.innerHTML += res;

        contenedor_album.style.display="block";
    }

    /**** albumes POR AUTOR ??? ***/
    const mostrarAlbumesDelAuthor = (array) => {
        console.log('PINTANDO ... albumes AUTOR');
        console.log(array);
        const patron = document.getElementById('template-albumes-info').innerHTML;
        
        const res = templ.rellenar(patron, array.autor);
        
       contenedor_album_info.innerHTML += res;

        contenedor_album_info.style.display="block";
    }


    // Muestra la información del autor ???
    const mostrarInformacionAuthor = (array) => {
        console.log('PINTANDO ... DATOS AUTOR');
        console.log(array);
        const patron = document.getElementById('template-albumes-canciones').innerHTML;
        
        const res = templ.rellenar(patron, array.albumes);
        
        contenedor_albumes_titulos.innerHTML += `<div class="list-group">${res}</div>`;

        contenedor_albumes_titulos.style.display="block";
    }
    /* ----- OCULTAR ----- */

    // Oculta todos los contenidos de la página para poder mostrar la información nueva correctamente
    const ocultarTodo = () => {
        ocultarHome();
        ocultarAuthor(); 
        ocultarAlbum(); 
    }

    // Oculta el home principal
    const ocultarHome = () => {
        const home = document.getElementById('home');
        home.setAttribute('style','display:none');
    }

    // Oculta el album
    const ocultarAlbum = () => {
        const album = document.getElementById('album');
        album.setAttribute('style','display:none');
    }

    // Oculta el author
    const ocultarAuthor = () => {
        const author = document.getElementById('author');
        author.setAttribute('style','display:none');

    }
    
    /* ----- PENDIENTE DE HACER ----- */

    // Muestra la biblioteca
     function mostrarBiblioteca(informacionBiblioteca){
        informacionAlbum = JSON.parse(informacionBiblioteca);
        console.log('INFORMACION Biblioteca --->>>',informacionBiblioteca);
        //informacionBiblioteca = modificarRespuestaAlbum(informacionBiblioteca);
        //borrarHome();
        //albumPortada(informacionAlbum);
       // album(informacionAlbum);        
    }

    // Guarda la canción en la biblioteca del usuario
    const guardarBiblioteca = (datosCancion) => {
    }

    // Falta terminar
    // Reproduce la cancion que se ha pulsado en la vista y a continuación la array pasada, que puede ser la biblioteca, el album o todos los discos del author
    const reproducirCanciones = (informacionCanciones) => {
        const reproductor = document.getElementById('reproductor');
        console.log(reproductor);
        reproductor.play();
        reproductor.addEventListener('ended', cambiarCancion);
    }
    
    // Falta terminar
    const cambiarCancion = () => {
        console.log('cambiarCancion');
        // Para hacer pruebas, del servidor deberá llegar un objeto de este tipo para poder reproducir las canciones
        let arrayCanciones = { 
            "cancion_1" : {
                nombreArtista : "camaron",
                nombreAlbum : "reencuentro",
                nombreCancion : "soy_fraguero"
            },
            "cancion_2" : {
                nombreArtista : "la_excepcion",
                nombreAlbum : "aguantando_el_tiron",
                nombreCancion : "la_puerta_abierta"
            },
            "cancion_3" : {
                nombreArtista : "los_delinquentes",
                nombreAlbum : "extras",
                nombreCancion : "chinchetas_en_el_aire"
            },
            "cancion_4" : {
                nombreArtista : "arce",
                nombreAlbum : "lucifer",
                nombreCancion : "carpe_diem"
            }
        };
        arrayCanciones = Object.values(arrayCanciones);
        console.log(Object.values(arrayCanciones));
        const reproductor = document.getElementById('reproductor');
        console.log(reproductor);
        const cancionFinalizada = reproductor.currentSrc.split('/')
                                                        .filter((v,p) => p > 3)
                                                        .map((v,p) => (p == 3) ? v : v.split('.')[0]);
        for (let i = 0; i < Object.keys(arrayCanciones).length; i++) {
            if (arrayCanciones[i].nombreArtista == cancionFinalizada[0] &&
                arrayCanciones[i].nombreAlbum == cancionFinalizada[1] &&
                arrayCanciones[i].nombreCancion == cancionFinalizada[2]) {
                    console.log(i);
                    console.log(arrayCanciones[i]);
                    console.log(arrayCanciones[+i + 1]);
                    // console.log(urlServidor + '/' + Object.values(arrayCanciones[+i + 1]).join('/') + '.mp3');
                    // console.log(Object.values(arrayCanciones[+i + 1].join('/'));
                    reproductor.removeAttribute('src');
                    reproductor.setAttribute('src', urlServidor + '/' + Object.values(arrayCanciones[+i + 1]).join('/') + '.mp3');
                    reproductor.play();
            }
        }
        
        console.log(cancionFinalizada);
        
    }

    // window.onload(reproducirCanciones());
    // reproducirCanciones(arrayCanciones);

    // pedirDatos('http://musick.test/autor/camaron/reencuentro/caminito_de_totana',guardarBiblioteca);
    // pedirDatos('http://musick.test/autor/camaron/reencuentro/caminito_de_totana',reproducirCancion);
    
    /* ----- PUESTA Y GESTION DE LOS EVENTOS ----- */

    // Pone el evento para home
    const ponerEventoHome = () => {
        const cuerpo = document.getElementById('home');
        cuerpo.addEventListener('click', gestionarEventoHome);

    }

    // Falta ver que hacemos con los estilos, si llevan a una nueva página o no.
    // Gestiona el evento de home
    const gestionarEventoHome = (evt) => {
        // Mucho cuidados con cambiar o añadir cualquier clase en el template puede dejar de funcionar.
        if (evt.target !== evt.currentTarget) {
            let texto;
            switch (evt.target.className) {
                case 'card m-2 text-left flex-fill':

                    texto = evt.target.firstChild.firstChild.innerHTML;
                    break;
                case 'card-header bg-dark': 
                case 'card-img-top w-100 h-100':  
                    texto = evt.target.parentNode.id;
                    break;
                case 'card-title text-light font-weight-bold':
                case 'card-title text-light font-weight-light':
                case 'card-title text-light font-weight-light font-italic':
                    texto = evt.target.parentNode.parentNode.id;
                    break;
                
            }
            const buscado = (texto) 
                            ? texto.split("+")
                                   .map(txt => txt.toLowerCase()
                                                  .replace(/ /g,"_"))
                            : undefined;
            if (typeof(buscado) === 'object') {
                switch (buscado.length) {
                    case 1:
                        //Se mostrara todos los albumnes de Autor buscado
                        // Se usara mostrarAuthor
                        pedirDatos('autor/' + buscado[0], mostrarAuthor);
                        break;
                    case 2:
                        //Se mostrara todas las canciones del album buscado
                        // Se usara mostrarAlbum
                        pedirDatos('autor/' + buscado[0] + '/' + buscado[1], mostrarAlbum);
                        break;
                    case 3:
                        //Se mostrara todas las canciones del album buscado + indicado la
                        // Se usara mostrarAlbum
                        cancionTendencia = buscado[2];
                        pedirDatos('autor/' + buscado[0] + '/' + buscado[1], mostrarAlbum);
                        break;
                }   
            }
        }
    }


    /* ----- FUNCIONES EXTRA ----- */

    //  Función para pedir los datos al servidor CORS
    function pedirDatos(peticion, callback) {
        let xhr = new XMLHttpRequest();

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

    // Gestiona la información que se debe introducir en los templates
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

    // Rellena los datos de los templates
    function rellenar(patron, datos) {
        if ( !datos || !patron) return "";

        if (!Array.isArray(datos)) datos = [].concat(datos);

        return datos.map(dato => aHtml(patron, dato)).join('');
        }

        return {
            rellenar
        };

    })(); 

    mostrarHome();
    ponerEventoHome();

    /*SE NECESITA UN BORRAR ALBUM Y BORRAR AUTORALBUMS*/

    /*********************************************************************** 
    Tareas sábado:
        - Hacer bien las consultas a la base de datos.
        - Los datos de la primera vez al home tienen que cargarse por JSON porque sino cada vez que queramos 
        llamar al home se va a recargar la página.
        - Hay que poner bien los templates de los authores y de los albumes, 
        no puede llamar albumesCanciones a los discos del author no tiene sentido.
        - Hay que cambiar los id porque ahora se han añadido secciones para gestionar mejor el ocultarlas
        y da conflicto con los id de los templates.
        - Hacer la biblioteca.
        - Hacer que funcione el reproductor.
        - Revisar todo lo que tenga '???'.
        - ¿¿¿ Los scripts de abajo sirven para algo ???.

    ************************************************************************/

</script>

<!-- <script src="{{ asset('js/handlerTemplate.js') }}"></script> -->
<!-- <script src="{{ asset('js/fillerData.js') }}"></script> -->
    <!-- <script src="{{ asset('js/player.js') }}" rel="text/javascript"></script>
    <script src="{{ asset('js/jquery.min.js') }}" rel="text/javascript"></script> -->

@endsection
