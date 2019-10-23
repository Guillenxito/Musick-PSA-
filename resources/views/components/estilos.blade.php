
<div class="bd-example">
    <div id="carruselEstilos" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        @for ($i = 0; $i < count($categoria); $i++)
            @if ($i == 0)
            <li data-target="#carruselEstilos" data-slide-to="{{ $i }}" class="active">
            </li>
            @else
            <li data-target="#carruselEstilos" data-slide-to="{{ $i }}">
            </li>
            @endif
        @endfor
        </ol>
        <div class="carousel-inner">
        @foreach ($categoria as $estilo => $descripcion)
            <div class="carousel-item active">
                <img src="../img/rock.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption rounded d-none d-md-block bg-dark ">
                    <h5>{{ $estilo }}</h5>
                    <p>{{ $descripcion }}</p>
                </div>
            </div>
        @endforeach
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