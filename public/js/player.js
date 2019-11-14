// linea 1-4 se ejecuta cuando el documento se ha cargado (ready)
$(function(){
    AsignarEventos();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
});

function AsignarEventos() {
    $( '.playsong' ).click(ReproducirCancion);
    $( '.playall' ) .click(ReproducirTodas);
    $( '.addsong' ) .click(AgregarCancion);
    $( '.addall' )  .click(AgregarTodas);
}

function RefrescarEventos() {
    $( '.playsong' ).off();
    $( '.playall' ) .off();
    $( '.addsong' ) .off();
    $( '.addall' )  .off();
    AsignarEventos();
}

function listCookies() {
    var theCookies = document.cookie.split(';');
    var aString = '';
    for (var i = 1 ; i <= theCookies.length; i++) {
        aString += i + ' ' + theCookies[i-1] + "\n";
    }
    return aString;
}

function getCookie(name) {
  var value = "; " + document.cookie;
  var parts = value.split("; " + name + "=");
  if (parts.length == 2) return parts.pop().split(";").shift();
}

function ObtenerIdCancion(evt){
    var td = $(evt).parent().parent();
    return td[0].id;
}

function PrepararCadena(cdn){
   return cdn.replace(/ /g,"_").toLowerCase();
}

function ReproducirTodas(evt){
    console.log("ReproducirTodas");
    console.dir(evt);
    RefrescarEventos();
}

function AgregarCancion(evt){
    console.dir($( '#form'+evt.target.id ));
    $( '#form'+evt.target.id ).submit(function(evt){
        e.preventDefault();
        // avisar al usuairo de que se a añadido su cancion
    });
}
/*
function AgregarCancion(evt){
    // obtener y mandar por la peticion el id_song
    var id_song = ObtenerIdCancion(evt.target);
    var token = getCookie("XSRF-TOKEN");

    $.ajax({
        type: 'POST',
        url: "http://musick.test/biblioteca/AddSong",
        contentType: false,
        processData: false,
        dataType: "json",
        data: {'id_song': id_song, '_token': token},
        success: function(Response){
            console.log("FUNCIONA")
            console.log(Response);
        },
        error: function(Response){
            console.log("ERROR");
            console.log(Response);
        },
    });

    RefrescarEventos();
}
*/
function AgregarTodas(evt){
    console.log("AgregarTodas");
    RefrescarEventos();
}

function ReproducirCancion(evt){
    console.log("ReproducirCancion");

        var td = $(evt.target).parent().parent();
        var artista = PrepararCadena(document.querySelector("#artista").innerText);
        var album = PrepararCadena(document.querySelector("#album").innerText);
        var titulo = PrepararCadena(td.siblings("#titulo").text());
        var token = getCookie("XSRF-TOKEN");
        var id = td[0].id;

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });

        $.ajax({
            type: 'POST',
            url: "http://musick.test/reproductor/play",
            data: {'id': id, '_token': token},
            success: function(Response){
                console.log("FUNCIONA")
                console.log(Response);
            },
            error: function(Response){
                console.log("ERROR");
                console.log(Response);
            },
        });

        /*
        // $('#reproductor')[0].src=`http://musick.test/musica/${artista}/${album}/${artista}.mp3`;
        var $reproductor = $('#reproductor')[0];
        reproductor.src="http://musick.test/musica/"+artista+"/"+album+"/"+titulo+".mp3";
        $('#reproductor')[0].remove();
        console.dir(reproductor);
        $('#reproductorContainer').append($reproductor);
        */

        //e.preventDefault(); // para que no recarge la pagina (?)
    RefrescarEventos();
}
