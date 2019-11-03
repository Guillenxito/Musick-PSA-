// linea 1-4 se ejecuta cuando el documento se ha cargado (ready)
$(function(){
    AsignarEventos();
});

function AsignarEventos() {
    $( '.playsong' ).on('click',function(){ReproducirCancion()});
    $( '.playall' ) .on('click',function(){ReproducirTodas()});
    $( '.addsong' ) .on('click',function(){AgregarCancion()});
    $( '.addall' )  .on('click',function(){AgregarTodas()});
}

function ReproducirCancion(){
    console.log("ReproducirCancion");
    console.log();
    RefrescarEventos();
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
    // Remove handler from existing elements
    $( '.playsong' ).off();
    $( '.playall' ) .off();
    $( '.addsong' ) .off();
    $( '.addall' )  .off();

    AsignarEventos();
}