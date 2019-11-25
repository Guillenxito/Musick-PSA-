<div class="container-fluid fixed-bottom bg-dark animated fadeInUp slow delay-2s">
    <div class="row">
        <div class="col-12 p-3 text-center">
            <?php
                $nombreArtista = "la_excepcion";
                $nombreDisco = "aguantando_el_tiron";
                $nombreCancion = "besolla_f.s.";
            ?> 
            <audio id="reproductor" src="{{ asset('musica/'.$nombreArtista.'/'.$nombreDisco.'/'.$nombreCancion.'.mp3') }}" preload="auto" controls id="reproductor" class="w-50">
                <p>Tu navegador no implementa el elemento audio</p>
            </audio>
        </div>
    </div>
</div>

