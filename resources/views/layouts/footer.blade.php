<?php
/*
echo "<pre>";
echo '<b>ARRAY $footer</b><BR>';
print_r($footer);
echo "</pre>";
*/
?>
<div class="container-fluid fixed-bottom bg-dark animated fadeInUp slow delay-2s">
    <div class="row">
        <div class="col-12 p-3 text-center">
            <?php
                // Estos datos vendran de la base de datos
                // $nombreArtista = "bad_bunny";
                // $nombreDisco = "oasis";
                // $nombreCancion = "la_cancion";
                $nombreArtista = "camaron";
                $nombreDisco = "caminito_de_totana";
                $nombreCancion = "la_jaca_que_yo_tenia";
            ?> 
            <audio id="reproductor" src="{{ asset('musica/'.$nombreArtista.'/'.$nombreDisco.'/'.$nombreCancion.'.mp3') }}" preload="auto" controls id="reproductor">
                <p>Tu navegador no implementa el elemento audio</p>
            </audio>
        </div>
    </div>
</div>

