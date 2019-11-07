// linea 1-4 se ejecuta cuando el documento se ha cargado (ready)
$(function(){
    AsignarEventos();
});

function AsignarEventos() {
    $( '.playsong' ).click(function(e){
        var td = $(e.target).closest('tr');
        // console.log(td);
        console.log(td.id);
        $.post("musick.test");
        // $.post("musick.test/reproductor/play/"+td.id);
        
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