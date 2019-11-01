function iniciar(){
    $( "#playIcon" ).hover(function(){
        $("#playContainer").css("cursor","pointer");
        $("#playContainer").css("background-color","red");
    });

    $( "#playIcon" ).click(function() {
        alert( "Handler for .click() called." );
      });

}


$(iniciar);