<?php
/*
echo "<pre>";
echo '<b>ARRAY $footer</b><BR>';
print_r($footer);
echo "</pre>";
*/
?>
<div class="container-fluid fixed-bottom bg-dark">
    <div class="row">
        <div class="col-12 p-3 text-center" id="reproductorContainer">
            <?php
                // Estos datos vendran de la base de datos
                $nombreArtista = "camaron";
                $nombreDisco = "reencuentro";
                $nombreCancion = "soy_fraguero";
            ?> 
            <audio id="reproductor" src="{{ asset('musica/'.$nombreArtista.'/'.$nombreDisco.'/'.$nombreCancion.'.mp3') }}" preload="auto" controls id="reproductor">
                <p>Tu navegador no implementa el elemento audio</p>
            </audio>
        </div>
    </div>
</div>
