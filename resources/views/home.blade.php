
@extends('layouts.plantilla')

@section('cuerpo')

    <!-- Seccion home -->
    <section id="home">
    
        <!-- recomendados -->
        <div class="container text-center mb-5" id="rec">
            <a name="recomendados"></a>
            <div class="card text-center h1 titulo mt-5 m-auto animated fadeInDown slow">Discos recomendados</div>
            <div class="row text-center" id="recomendados">
                <template id="template-recomendados">
                    <div class="card m-2 text-left flex-fill animated fadeInUp slow delay-1s" id="¡¡¡nombreAuthor_!!!+¡¡¡nombreAlbum_!!!">
                        <div class="card-header bg-dark">
                            <h5 class="card-title text-light font-weight-bold">¡¡¡nombreAuthor!!!</h5>
                            <h6 class="card-title text-light font-weight-light">¡¡¡nombreAlbum!!!</h6>
                        </div>
                        <img class="card-img-top w-100 h-100" src="{{ asset('img/artistas/¡¡¡nombreAuthor_!!!/¡¡¡nombreAlbum_!!!.png') }}" alt="Card image cap">
                    </div>
                </template>
            </div>
        </div>

         <!-- tendencias -->
        <div class="container text-center mb-5" id="ten">
            <a name="tendencias"></a>
            <div class="card text-center h1 titulo mt-5 m-auto">Canciones tendencia</div>
            <div class="row text-center" id="tendencias">
                <template id="template-tendencias">
                    <div class="card m-2 text-left flex-fill" id="¡¡¡nombreArtista_!!!+¡¡¡nombreAlbum_!!!+¡¡¡nombreCancion_!!!">
                        <div class="card-header bg-dark">
                            <h5 class="card-title text-light font-weight-bold">¡¡¡nombreArtista!!!</h5>
                            <h6 class="card-title text-light font-weight-light">¡¡¡nombreAlbum!!!</h6>
                            <!--<h6 class="card-title text-light font-weight-light font-italic">¡¡¡nombreCancion!!!</h6>-->
                        </div>
                        <img style="filter: blur(5px);" class="card-img-top w-100 h-100 rounded" src="{{ asset('img/artistas/¡¡¡nombreArtista_!!!/¡¡¡nombreAlbum_!!!.png') }}" alt="Card image cap"> 
                        <h3 class="font-weight-light" style="letter-spacing:2px;user-select: none; color:white;text-align:center;width:80%;padding:5px;border-radius:20px;background-color: hsla(0, 0%, 0%, 0.4);font-size:280%;position: absolute;top: 60%;left: 50%;transform: translate(-50%, -50%);text-shadow: -4px 3px 0 black">¡¡¡nombreCancion!!!</h6>
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
        </div>

        <!-- novedades -->
        <div class="container text-center mb-5" id="nov">
            <a name="novedades"></a>
            <div class="card text-center h1 titulo mt-5 m-auto">Nuevos autores</div>
            <div class="row text-center" id="novedades">
                <template id="template-novedades">
                    <div class="card m-2 text-left flex-fill" id="¡¡¡nombreAuthor_!!!">
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
        <div class="container" id="albs">
            <div id="albumes_info" class="row">
                <template id="template-author-info">  
                    <div class="flex-fill col-12 col-md-4 animated fadeInLeft slow">
                        <img class="border border-dark rounded col-12 p-0" src="{{ asset('img/artistas/¡¡¡nombreAutor_!!!/¡¡¡nombreAutor_!!!.png') }}" alt="Card image cap"> 
                    </div>
                    <div class="card rounded flex-fill col-12 col-md-8 p-0 animated fadeInRight slow">
                        <div class="card-header bg-dark h1 titulo w-100">
                            <div class="card-title text-light font-weight-bold" id="nombreAutor">¡¡¡nombreAutor!!!</div>
                        </div>
                        <div class="card-text h3 titulo p-5">¡¡¡informacion!!!</div>
                    </div>
                    <div class="card text-center h2 titulo bg-dark text-light col-12 mt-3 mt-md-5 animated fadeInUp slow delay-1s" data-toggle="collapse" href="#albumes_titulos" id="desplegableAlbumnes" >
                        Discos
                    </div>
                </template>
            </div>
            <div class="row text-center collapse" id="albumes_titulos">
                <template id="template-author-discos">
                    <button class="list-group-item list-group-item-action h3 rounded">¡¡¡nombreAlbum!!!</button>
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
                    <div class="col-12 col-lg-4">
                        <img class="flex-fill card-img-top border rounded col-12 p-0 animated fadeInLeft slow" src="{{ asset('img/artistas/¡¡¡nombreAutor_!!!/¡¡¡nombreAlbum_!!!.png') }}" alt="Card image cap"> 
                    </div>
                    <div class="card col-12 col-lg-8 px-0 animated fadeInRight slow">
                        <div class="card-header bg-dark text-light text-center h1 titulo">¡¡¡nombreAutor!!!</div>
                        <div class="flex-fill card-text-right col-12 p-5">
                            <div class="h3">
                                ¡¡¡informacion!!!
                            </div>
                            <div class="row pt-5">                            
                                <div class="flex-fill col-6 col-lg-10 text-lg-right">
                                    <i class="material-icons icono-album" id="play-album-¡¡¡id_album!!!">
                                        play_circle_outline
                                    </i>
                                </div>
                                <div class="flex-fill col-6 col-lg-2">
                                    <i class="material-icons icono-album" id="biblioteca-album-¡¡¡id_album!!!">
                                        playlist_add
                                    </i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-header bg-dark text-light text-center col-12 mt-3 h1 titulo animated fadeInUp slow delay-1s">¡¡¡nombreAlbum!!!</div>
                </template>
            </div>
            <div class="row text-center animated fadeInUp slow delay-2s" id="album_canciones">
                <template id="template-album-canciones">
                    <button class="list-group-item list-group-item-action d-flex h4" id="¡¡¡titulo_!!!">
                        <div class="numeroCancion">
                            ¡¡¡posicionCancionAlbum!!!
                        </div>
                        <div class="text-left flex-grow-1">
                            ¡¡¡titulo!!!
                        </div>
                        <div class="col-1">
                            <i class="material-icons" id="play-cancion-¡¡¡id_cancion!!!">
                                play_circle_outline
                            </i>
                        </div>
                        <div class="col-1">
                            <i class="material-icons" id="biblioteca-cancion-¡¡¡id_cancion!!!">
                                playlist_add
                            </i>
                        </div>                
                    </button>
                </template>
            </div>
        </div>
 
    </section>
    <!-- Fin seccion album -->

    <!-- Seccion biblioteca -->
    <section id="biblioteca">
        <div class="container text-center" id="bibl">
            <!-- <a name="Biblioteca"></a> -->
            <div class="card-header bg-dark text-light text-center col-12 mt-3 h1 titulo animated fadeInDown slow delay-1s" id="titulo_biblioteca">BIBLIOTECA</div>
            <div class="text-center animated fadeInUp slow delay-1s" id="contenedor_biblioteca">
                <template id="template-biblioteca">
                    <button type="button" class="list-group-item list-group-item-action d-flex h4" id="¡¡¡id_list!!!-¡¡¡id_song!!!">
                        <div class="numeroCancion numeroCancionBiblioteca">¡¡¡posicionCancionAlbum!!!</div>
                        <div class="text-left flex-grow-1">¡¡¡titulo!!!</div>
                        <div class="nombre_album d-none d-lg-flex">¡¡¡nombreAlbum!!!</div>
                        <div class="d-none d-lg-flex"> / </div>
                        <div class="nombre_autor d-none d-lg-flex">¡¡¡nombreAuthor!!!</div>
                        <div class="col-1">
                            <i class="material-icons" id="play-¡¡¡id_song!!!">
                                play_circle_outline
                            </i>
                        </div>
                        <div class="col-1">
                            <i class="material-icons" id="borrarBiblioteca-¡¡¡id_song!!!">
                                restore_from_trash
                            </i>
                        </div>   
                    </button>
                </template>
            </div>
        </div>
    </section>  

<script>

/* ----- VARIABLES ----- */

    // objeto audio, ¿¿¿ no lo encuentra porque pertenece al footer ??? 
    // let reproductor = document.getElementById('reproductor');
    // console.log(reproductor);

    // Esto hay que cambiarlo para pedirlo por javascript porque sino cuando volvamos a HOME se volvera a cargar la página.
    let informacionHome;
    // cancionTendencia guardara la canción buscada para resaltarla en el album
    let cancionTendencia;
    // Lista de las canciones que se escucharan
    let arrayCanciones = [];
    // url del servidor
    const urlServidor = 'http://musick.test';
    // Estas variables si solo se usan en una función concreta mejor meterlas en la función.
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
    const contenedor_album_autor = document.getElementById('album_autor');
    const contenedor_album_canciones = document.getElementById('album_canciones');
    const contenedor_album_portada = document.querySelectorAll('album_portada');
    const divEstilos = document.querySelectorAll('.estilos')[0];
    const contenedor_biblioteca =  document.getElementById('contenedor_biblioteca');
    // const listaUsuarios = document.querySelector(".lista-recomendados");
    // const template = document.getElementById("template-recomendados");

/* ----- FIN VARIABLES ----- */

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
                "nombreAlbum" : (album.nombreAlbum.charAt(0).toUpperCase() + album.nombreAlbum.slice(1)).replace(/_/g,' ')
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
        return respuesta;
    }

    // Trata la respuesta del album 
    const modificarRespuestaAlbum = (array) => {
        let respuesta = new Array();      
        let album = new Array();
        album.push({
            "id_album" : array.album.id_album,
            "nombreAlbum_" : array.album.nombreAlbum,
            "nombreAlbum" : (array.album.nombreAlbum).replace(/_/g,' ').toUpperCase(),
            "nombreAutor_" : array.autor.nombreAutor,
            "nombreAutor" : (array.autor.nombreAutor).replace(/_/g,' ').toUpperCase(),
            "informacion" : array.autor.informacion
        });
        let canciones = new Array();
        let posicionCancionAlbum = 1;
        array.canciones.forEach(function(cancion) {
            canciones.push({
                "id_album" : cancion.id_album,
                "id_cancion" : cancion.id_song,
                "titulo_" : cancion.titulo,
                "titulo" : (cancion.titulo.charAt(0).toUpperCase() + cancion.titulo.slice(1)).replace(/_/g,' '),
                "posicionCancionAlbum" : posicionCancionAlbum++
            });
        });
        respuesta['album'] = album;        
        respuesta['canciones'] = canciones;
        return respuesta;
    }

    // Trata la respuesta de la biblioteca
    const modificarRespuestaBiblioteca = (array) => {
        let respuesta = new Array();      
        let canciones = new Array();
        let posicionCancionAlbum = 1;
        array.forEach(function(cancion) {
            respuesta.push({
                "titulo" : (cancion.titulo.charAt(0).toUpperCase() + cancion.titulo.slice(1)).replace(/_/g,' '),
                "titulo_" : cancion.titulo,
                "nombreAlbum" : (cancion.nombreAlbum.charAt(0).toUpperCase() + cancion.nombreAlbum.slice(1)).replace(/_/g,' '),
                "nombreAlbum_" : cancion.nombreAlbum,
                "nombreAuthor_" : cancion.nombreAuthor,
                "nombreAuthor" : (cancion.nombreAuthor.charAt(0).toUpperCase() + cancion.nombreAuthor.slice(1)).replace(/_/g,' '),
                "id_list" : cancion.id_list,
                "id_song" : cancion.id_song,
                "posicionCancionAlbum" : posicionCancionAlbum++
            });
        });
        return respuesta;
    }

/* ----- FIN TRATAR DATOS JSON ----- */

/* ----- MOSTRAR ----- */

    // Muestra el home principal
    const mostrarHome = () => {
        // quitarEventos();
        setTimeout(window.scrollTo(0, -100), 10);
        // Esto hay que cambiarlo para pedirlo por javascript porque sino cuando volvamos a HOME se volvera a cargar la página.
        informacionHome = modificarRespuestaHome(Array(<?php echo json_encode($categorias); ?>));
        //ocultarTodo();
        borrarAlbum();
        borrarBiblioteca();
        setTimeout(() => {
            mostrarTendenciasHome();
            mostrarNovedadesHome();
            // mostrarEstilosHome();
        },2000);
        mostrarRecomendadosHome();
        const home = document.getElementById('home');
        home.setAttribute('style','display:visibility');
        contenedor_album.setAttribute('style','display:none');
        ponerEventoHome();
    }
    
    // Muestra la información de novedades del home
    const mostrarNovedadesHome = array => {
        const nov = document.getElementById('nov');
        nov.setAttribute('style', 'display:block');
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
        const ten = document.getElementById('ten');
        ten.setAttribute('style', 'display:block');
        const patron = document.getElementById('template-tendencias').innerHTML;        
        const res = templ.rellenar(patron, informacionHome.tendencias);
        contenedor_tendencias.innerHTML += `${res}</div>`;
    }

    // Muestra la información del artista con todos sus albumes 
    const mostrarAuthor = (informacionArtista) => {
        informacionArtista = JSON.parse(informacionArtista);
        informacionArtista = modificarRespuestaAuthor(informacionArtista);
        ocultarHome();
        borrarAlbum();
        borrarBiblioteca();
        borrarAuthor();
        mostrarInformacionAuthor(informacionArtista);
        mostrarAlbumesDelAuthor(informacionArtista);
        document.getElementById('author').setAttribute('style', 'display: contents');
        document.getElementById('lista_discos').setAttribute('style', 'display: contents');
        document.getElementById('albumes_titulos').classList.remove('show');
        ponerEventoAuthor();
        setTimeout(window.scrollTo(0, -100), 10);
    }

    // Muestra un album con todas sus canciones
    const mostrarAlbum = (informacionAlbum) => {
        informacionAlbum = JSON.parse(informacionAlbum);
        informacionAlbum = modificarRespuestaAlbum(informacionAlbum);
        ocultarHome();
        borrarAlbum();
        borrarAuthor();
        borrarBiblioteca();
        mostrarAlbumPortada(informacionAlbum);
        mostrarCancionesAlbum(informacionAlbum);
        document.getElementById('album').setAttribute('style', 'display: block');
        if (cancionTendencia) 
            document.getElementById(cancionTendencia).classList.add('active');
        ponerEventoAlbum();
        setTimeout(window.scrollTo(0, -100), 10);
    }

    // Muestra el nombre del autor, la imagen del album y el nombre del album
    const mostrarAlbumPortada = (array) => {
        const patron = document.getElementById('template-album-portada').innerHTML;
        const res = templ.rellenar(patron, array.album);
        contenedor_album_autor.innerHTML += res;
    }

    // Muestra todas las canciones del album
    const mostrarCancionesAlbum = (array) => {
        const patron = document.getElementById('template-album-canciones').innerHTML;        
        const res = templ.rellenar(patron, array.canciones);
        contenedor_album_canciones.innerHTML += `<div class="list-group">${res}</div>`;
        contenedor_album_canciones.style.display="block";
    }

    // Muestra la informacion del author
    const mostrarInformacionAuthor = (array) => {
        const patron = document.getElementById('template-author-info').innerHTML;
        const res = templ.rellenar(patron, array.autor);
        contenedor_album_info.innerHTML += res;
    }

    // Muestra los discos del author
    const mostrarAlbumesDelAuthor = (array) => {
        const patron = document.getElementById('template-author-discos').innerHTML;        
        const res = templ.rellenar(patron, array.albumes);        
        contenedor_albumes_titulos.innerHTML += `<div class="list-group" id="lista_discos">${res}</div>`;
    }

     // Muestra la biblioteca
    const mostrarBiblioteca = (informacionBiblioteca) => {
        array = modificarRespuestaBiblioteca(JSON.parse(informacionBiblioteca));
        borrarBiblioteca();
        ocultarTodo();
        borrarBiblioteca();
        borrarAuthor();
        borrarAlbum();
        const patron = document.getElementById('template-biblioteca').innerHTML;        
        const res = templ.rellenar(patron, array);        
        contenedor_biblioteca.innerHTML += `<div class="list-group">${res}</div>`;
        document.getElementById('biblioteca').setAttribute('style', 'display: block');
        document.getElementById('titulo_biblioteca').setAttribute('style', 'display: block');
        ponerEventoBiblioteca();
        setTimeout(window.scrollTo(0, -100), 10);
    }

    const borrarListSearch = () =>{
         const Lista = document.getElementById("list-search");
         while (Lista.firstChild) {
             Lista.removeChild(Lista.firstChild);
         }
    }

    // Muestra el search
    const mostrarSearch = (array) =>{
        array = JSON.parse(array);        
        const padreLista = document.getElementById("div-search");
        const lista = document.getElementById("list-search");
        borrarListSearch();
        if (array.length > 0) {
            array.forEach(function(ele){
                let a = document.createElement('option');
                let counterKeys = Object.values(ele).length;
                switch (counterKeys) {
                    case 1:
                        a.dataset.url = '/autor/'+ ele.nombreAuthor;
                        a.dataset.counter = 1;
                        a.value = ele.nombreAuthor.toLowerCase().replace(/_/g,' ');
                        break;
                    case 2:
                        a.dataset.url = '/autor/'+ ele.nombreAuthor + '/' + ele.nombreAlbum;
                        a.dataset.counter = 2;
                        a.value = ele.nombreAlbum.toLowerCase().replace(/_/g,' ');
                        break;
                    case 3:
                        a.dataset.url = '/autor/'+ ele.nombreAuthor + '/' + ele.nombreAlbum;
                        a.dataset.counter = 3;
                        a.value = ele.titulo.toLowerCase().replace(/_/g,' ');
                        break;
                }
                lista.appendChild(a);                
            });
            padreLista.style.display = "block";
        } else {
            padreLista.style.display = "none";
        }
       
    }

    // Muestra la página correspondiente según el dato buscado en el buscador
    const mostrarBuscado = (buscado) => {
        if (buscado.length > 2) {        
            buscado = Object.values(JSON.parse(buscado)[0]);
            borrarBiblioteca();
            borrarAuthor();
            borrarAlbum();    
            switch (buscado.length) {
                case 1:
                    pedirDatos('autor/' + buscado[0], mostrarAuthor);
                    break;
                case 2:
                    canciontendencia = undefined;
                    pedirDatos('autor/' + buscado[0] + '/' + buscado[1], mostrarAlbum);
                    break;
                case 3:
                    cancionTendencia = buscado[2];
                    pedirDatos('autor/' + buscado[0] + '/' + buscado[1], mostrarAlbum);
                    break;
            }
        }
    }

/* ----- FIN MOSTRAR ----- */

/* ----- OCULTAR ----- */

    // Oculta todos los contenidos de la página para poder mostrar la información nueva correctamente
    const ocultarTodo = () => {
        ocultarHome();
        ocultarAuthor(); 
        ocultarAlbum();
        ocultarBiblioteca();
        borrarBiblioteca();
        setTimeout(window.scrollTo(0, -100), 10);
    }

    // Oculta el home principal
    const ocultarHome = () => {
        const home = document.getElementById('home');
        home.setAttribute('style','display:none');
    }

    // Mostrar Home Ocultado
    const mostartHomeExistente = () => {
        const home = document.getElementById('home');
        home.setAttribute('style','display:block');
    }

    // Borrar Home
    const borrarHome = () => {
        borrarHomeTendencias();
        borrarHomeRecomendados();
        borrarHomeNovedades();
        setTimeout(window.scrollTo(0, -100), 10);
    }

    const borrarHomeTendencias = () => {
        const tendencias = document.querySelector("#tendencias").children;
        let counter = 0;
        tendencias.forEach(function(element){
            if(counter > 1)
                element.remove();
            counter++;
        })
    }

    const borrarHomeRecomendados = () => {
        const tendencias = document.querySelector("#recomendados").children;
        let counter = 0;
        tendencias.forEach(function(element){
            if(counter > 1)
                element.remove();
            counter++;
        })
    }

    const borrarHomeNovedades = () => {
        const tendencias = document.querySelector("#novedades").children;
        let counter = 0;
        tendencias.forEach(function(element){
            if(counter > 1)
                element.remove();
            counter++;
        })
    }

    // Oculta el album
    const ocultarAlbum = () => {
        const album = document.getElementById('album');
        album.setAttribute('style','display:none');
    }

    // Borrar el album
    const borrarAlbum = () => {
        const albumImagen = document.querySelector("#album_autor > div.col-12.col-lg-4");
        const albumPortada = document.querySelector("#album_autor > div.card.col-12.col-lg-8.px-0.animated.fadeInRight.slow");
        const albumCanciones = document.querySelector("#album_canciones > div");
        const albumTitulo = document.querySelector("#album_autor > div.card-header.bg-dark.text-light.text-center.col-12.mt-3.h1.titulo.animated.fadeInUp.slow.delay-1s");
        if (albumPortada && albumCanciones) {
            albumImagen.remove();
            albumPortada.remove();
            albumCanciones.remove();
            albumTitulo.remove();
        }
    }

    // Oculta el author
    const ocultarAuthor = () => {
        const author = document.getElementById('author');
        author.setAttribute('style','display:none');
    }

    // Borrar el author
    const borrarAuthor = () => {
        const authorFoto = document.querySelector("#albumes_info > div.flex-fill.col-12.col-md-4.animated.fadeInLeft.slow");
        const authorInfo = document.querySelector("#albumes_info > div.card.rounded.flex-fill.col-12.col-md-8.p-0.animated.fadeInRight.slow")
        const auhorAlbums = document.querySelector("#lista_discos");
        const auhorDesplegableAlbums = document.querySelector("#desplegableAlbumnes");
        if (authorFoto && authorInfo && auhorAlbums) {
            authorFoto.remove();
            authorInfo.remove();
            auhorAlbums.remove();
            desplegableAlbumnes.remove();
        }
    }

    // Oculta la biblioteca
    const ocultarBiblioteca = () => {
        const biblioteca = document.getElementById('biblioteca');
        biblioteca.setAttribute('style','display:none');
    }

    // Borrar la biblioteca
    const borrarBiblioteca = () => {
        const tituloBiblioteca = document.getElementById('titulo_biblioteca').setAttribute('style','display:none');
        const biblioteca = document.querySelector("#contenedor_biblioteca > div");
        if (biblioteca) {
            biblioteca.remove();
        }
    }
    
/* ----- FIN OCULTAR ----- */

/* ----- REPRODUCTOR ----- */

    // Cambia la lista de canciones y reproduce la primera
    const reproducirCanciones = (informacionCanciones) => {
        arrayCanciones = JSON.parse(informacionCanciones);
        const reproductor = document.getElementById('reproductor');
        reproducirCancion(arrayCanciones[0]);
        reproductor.play();
    }

    // Cambia la canción a la siguiente de arrayCanciones
    const cambiarCancion = () => {
        const reproductor = document.getElementById('reproductor');
        const cancionFinalizada = reproductor.currentSrc.split('/')
                                                        .filter((v,p) => p > 3)
                                                        .map((v,p) => (p !== 2) ? v : v.slice(0,-4));
        if (arrayCanciones[0]) {
            for (let i = 0; i < Object.keys(arrayCanciones).length; i++) {
                if (arrayCanciones[i].nombreAuthor == cancionFinalizada[0] && 
                arrayCanciones[i].nombreAlbum == cancionFinalizada[1] &&
                arrayCanciones[i].nombreCancion == cancionFinalizada[2]){
                    if (arrayCanciones[+i + 1] == undefined) {
                        pedirDatos('play/cancionesEstilo/' + cancionFinalizada[2],reproducirCanciones);
                        return;
                    } else {
                        reproductor.removeAttribute('src');
                        reproductor.setAttribute('src', urlServidor + '/musica/' + Object.values(arrayCanciones[+i + 1]).join('/') + '.mp3');
                        reproductor.play();
                        return;
                    }
                }
            }   
        }
        pedirDatos('play/cancionesEstilo/' + cancionFinalizada[2],reproducirCanciones);
    }

    // Reproduce una canción en concreto
    const reproducirCancion = (cancion) => {
        if (typeof(cancion) == 'string')
            cancion = JSON.parse(cancion)[0];
        const reproductor = document.getElementById('reproductor');
        reproductor.removeAttribute('src');
        reproductor.setAttribute('src', urlServidor + '/musica/' + cancion.nombreAuthor + '/' + cancion.nombreAlbum + '/' + cancion.nombreCancion + '.mp3');
        reproductor.play();
    }

    // Cambia el la lista de reproduccion sin cambiar la cancion que esta sonando
    const cambiarListaReproduccion = (lista) => {
        arrayCanciones = JSON.parse(lista);
    }

/* ----- FIN REPRODUCTOR ----- */

/* ----- PUESTA Y GESTION DE LOS EVENTOS ----- */

    // Pone el evento para home
    const ponerEventoHome = () => {
        document.getElementById('home').addEventListener('click', gestionarEventoHome);
    }

    // Pone el evento del navBar
    const ponerEventoNavbar = () => {
        document.getElementById('navbar').addEventListener('click', gestionarEventoNavbar);
    }

    // Pone el evento del reproductor
    const ponerEventoReproductor = () => {
        document.getElementById('reproductor').addEventListener('click', gestionarEventoReproductor);
    }

    // Pone el evento del author
    const ponerEventoAuthor = () => {
        document.getElementById('lista_discos').addEventListener('click', gestionarEventoAuthor);
    }

    // Pone el evento del album
    const ponerEventoAlbum = () => {
        document.getElementById('alb').addEventListener('click', gestionarEventoAlbum);
    }

    // Pone el evento del buscar
    const ponerEventoSearch = () => {
       document.querySelector("#buscador").addEventListener('keyup',gestionarEventoSearch);
    }

    // Pone el evento del lista de buscar
    const ponerEventoListSearch = () => {
        document.getElementById('form-buscar').addEventListener('click',gestionarEventoListSearch);
    }

   // Pone el evento de la biblioteca
   const ponerEventoBiblioteca = () => {
       document.getElementById('biblioteca').addEventListener('click',gestionarEventoBiblioteca);
   }

    // Gestiona el evento de home
    const gestionarEventoHome = (evt) => {
        if (evt.target !== evt.currentTarget) {
            let texto;
            switch (evt.target.className) {
                case 'card m-2 text-left flex-fill animated fadeInUp slow delay-1s':
                    texto = evt.target.firstChild.firstChild.innerHTML;
                    break;
                case 'card-header bg-dark': 
                case 'card-img-top w-100 h-100': 
                case 'card-img-top w-100 h-100 rounded':  
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
                        pedirDatos('autor/' + buscado[0], mostrarAuthor);
                        break;
                    case 2:
                        cancionTendencia = undefined;
                        pedirDatos('autor/' + buscado[0] + '/' + buscado[1], mostrarAlbum);
                        break;
                    case 3:
                        cancionTendencia = buscado[2];
                        pedirDatos('autor/' + buscado[0] + '/' + buscado[1], mostrarAlbum);
                        break;
                }   
            }
        }
    }

    // Falta hacerlo
    const gestionarEventoNavbar = (evt) => {
        if (evt.target !== evt.currentTarget) {
            console.log(evt.target.id.split('_')[1]);
            switch (evt.target.id.split('_')[1]) {
                case 'biblioteca':
                    pedirDatos('/bibliotecaUsuario', mostrarBiblioteca)
                    break;
                case 'home':
                case 'tendencias':
                case 'recomendados':
                case 'novedades':
                    borrarBiblioteca();
                    borrarAlbum();
                    borrarAuthor();
                    //borrarHome();
                    mostartHomeExistente();
                    break;
            }
        }
    }

    // Gestionar el evento del buscador in live
    const gestionarEventoSearch = (evt) => {
        let wanted = evt.target.value.toLowerCase().replace(/ /g,'_');
        if(wanted.length > 0){
            pedirDatos('search/'+ wanted, mostrarSearch); 
        }else{
            borrarListSearch();
        }   
    }

    // Gestiona el valor del buscador
    const gestionarEventoListSearch = (evt) => {
       if (evt.target !== evt.currentTarget) {
            if (evt.target.tagName == 'INPUT' && 
                evt.target.keycode == 13 && 
                evt.target.value.trim().length) {
                pedirDatos('saberBuscado/' + evt.target.value.trim(), mostrarBuscado);
            } else if (evt.target.tagName == 'BUTTON' &&
                       evt.target.parentNode.firstChild.nextElementSibling.value.trim().length) {
                pedirDatos('saberBuscado/' + evt.target.parentNode.firstChild.nextElementSibling.value.trim(), mostrarBuscado);
            }
        }
    }
    
    // Gestiona el evento de los discos del author
    const gestionarEventoAuthor = (evt) => {
        if (evt.target !== evt.currentTarget) {
            const nombreAutor = document.getElementById('nombreAutor').innerHTML.toLowerCase().replace(/ /g,'_');            
            const nombreAlbum = evt.target.innerHTML.toLowerCase().replace(/ /g,'_');
            pedirDatos('autor/' + nombreAutor + '/' + nombreAlbum, mostrarAlbum);
        }
    }

    // Gestiona el evento del album
    const gestionarEventoAlbum = (evt) => {
        if (evt.target !== evt.currentTarget) {
            if (evt.target.tagName == 'I') {
                const accion = evt.target.id.split('-');
                if (accion[0] == 'biblioteca') {
                    pedirDatos(accion[0] + '/' + accion[1] + '/' + accion[2], ()=> {});
                } else if (accion[0] == 'play') {
                    if (accion[1] == 'cancion') {
                        pedirDatos(accion[0] + '/' + accion[1] + '/' + accion[2], reproducirCancion);
                    } else if (accion[1] == 'album') {
                        pedirDatos(accion[0] + '/' + accion[1] + '/' + accion[2], reproducirCanciones);
                    }
                }
            }
        }
    }

    // Gestiona el evento de la biblioteca
    const gestionarEventoBiblioteca = (evt) => {
        if (evt.target !== evt.currentTarget) {
            if (evt.target.tagName == 'I') {
                const accion = evt.target.id.split('-');
                if (accion[0] == 'borrarBiblioteca') {
                    pedirDatos(accion[0] + '/' + accion[1], ()=>{});
                    console.log(evt.target);
                    evt.target.parentNode.parentNode.classList.add('animated');
                    evt.target.parentNode.parentNode.classList.add('bounceOutRight');
                    evt.target.parentNode.parentNode.classList.add('slow');
                    setTimeout(() => { 
                        evt.target.parentNode.parentNode.parentNode.removeChild(evt.target.parentNode.parentNode);
                        let numeroCancion = document.getElementsByClassName('numeroCancionBiblioteca');
                        for (let i = 0; i < numeroCancion.length; ) {
                            numeroCancion[i].innerHTML = ++i;
                        }
                    },1000);
                } else if (accion[0] == 'play') {
                    pedirDatos(accion[0] + '/cancion/' + accion[1], reproducirCancion);
                    pedirDatos(accion[0] + '/biblioteca/', cambiarListaReproduccion);
                }
            }
        }
    }

    // Quita todos los eventos, el evento del navbar y del reproductor se puede pasar si se quiere quitar o no
    const quitarEventos = (navbar = false, reproductor = false) => {
        quitarEventoHome();
        quitarEventoAuthor();
        quitarEventoAlbum();
        if (navbar) quitarEventoNavbar();
        if (reproductor) quitarEventoReproductor();
    }

    // Quita el evento para home
    const quitarEventoHome = () => {
        document.getElementById('home').removeEventListener('click', gestionarEventoHome);
    }

    // Quita el evento del navBar
    const quitarEventoNavbar = () => {
        document.getElementById('navbar').removeEventListener('click', gestionarEventosNavbar);
    }

    // Quita el evento del reproductor
    const quitarEventoReproductor = () => {
        document.getElementById('reproductor').removeEventListener('click', gestionarEventosReproductor);
    }

    // Quita el evento del author
    const quitarEventoAuthor = () => {
        document.getElementById('lista_discos').removeEventListener('click', gestionarEventosAuthor);
    }

    // Quita el evento del album
    const quitarEventoAlbum = () => {
        document.getElementById('alb').removeEventListener('click', gestionarEventosAlbum);
    }

/* ----- FIN PUESTA Y GESTION DE LOS EVENTOS ----- */

/* ----- FUNCIONES EXTRA ----- */

    //  Pide los datos al servidor CORS
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

/* ----- FIN FUNCIONES EXTRA ----- */

/* ----- ARRANQUE DE LA APLICACIÓN ----- */

    // Para iniciar la app
    const iniciarApp = () => {
        mostrarHome();
        ponerEventoNavbar();
        ponerEventoSearch();
        ponerEventoListSearch();
        window.onload = () => {
            const reproductor = document.getElementById('reproductor');
            reproductor.addEventListener('ended', cambiarCancion);
            reproductor.volume = 0.33;
        }
    }
    
    iniciarApp();

/* ----- FIN ARRANQUE DE LA APLICACIÓN ----- */

</script>

@endsection
