
@extends('layouts.plantilla')

@section('cuerpo')
<div class="container text-center">
            <a name="recomendados"></a>
            <div class="well text-center h1">Recomendados</div>
            <div class="row text-center" id="app">

                <template id="template-recomendados">
                  <div class="card m-2 text-left flex-fill"w style="width: 16rem;">
                        <div class="card-header bg-dark ">
                            <h5 class="card-title text-light">¡¡¡nombreAuthor!!! <br> ¡¡¡nombreAlbum!!!</h5>
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
            novedades.push({"nombreAuthor":element.artista,
                        "nombre":element.nombre})
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
            tendencias.push({"id_song":element.id_song,
                            "titulo":element.titulo,
                            "id_album":element.id_album,
                            "nombre":element.nombre});
        });

        arrFinal["novedades"] = novedades;
        arrFinal["recomendados"] = recomendados;
        arrFinal["tendencias"] = tendencias;

        return arrFinal;
    }

    var informacionHome = modificarRespuesta(Array(<?php echo json_encode($categorias); ?>));
    console.log(informacionHome.novedades);
    console.log(informacionHome.recomendados);
    console.log(informacionHome.tendencias);

    const contenedor = document.getElementById('app');
    // const listaUsuarios = document.querySelector(".lista-recomendados");
    // const template = document.getElementById("template-recomendados");

    const recomendados = array => {
    console.log(informacionHome.recomendados);
        const patron = document.getElementById('template-recomendados').innerHTML;
        
        const res = templ.rellenar(patron, informacionHome.recomendados);

        contenedor.innerHTML += `${res}</div>`;
    }
    recomendados();


</script>
<!-- <script src="{{ asset('js/handlerTemplate.js') }}"></script> -->
<!-- <script src="{{ asset('js/fillerData.js') }}"></script> -->

@endsection