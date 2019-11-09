// linea 1-4 se ejecuta cuando el documento se ha cargado (ready)
$(function(){
    AsignarEventos();
});

function AsignarEventos() {
    $( '.playsong' ).click(function(e){
        var td = $(e.target).closest('tr');
        // console.log(listCookies());
        console.log(getCookie("XSRF-TOKEN"));
        console.log(td);
        console.log(td[0].id);

        var id = td[0].id;
        var token = getCookie("XSRF-TOKEN");

        console.log($('meta[name="csrf-token"]').attr('content'));

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
        e.preventDefault(); // para que no recarge la pagina (?)
    });

    $( '.playall' ) .on('click',function(){ReproducirTodas()});
    $( '.addsong' ) .on('click',function(){AgregarCancion()});
    $( '.addall' )  .on('click',function(){AgregarTodas()});
}

function ReproducirTodas(){
    console.log("ReproducirTodas");
    RefrescarEventos();
}
function AgregarCancion(){
    console.log("AgregarCancion");
    RefrescarEventos();
}
function AgregarTodas(){
    console.log("AgregarTodas");
    RefrescarEventos();
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
