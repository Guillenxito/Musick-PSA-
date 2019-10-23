
@foreach($categoria as $tarjeta)
    <div class="card m-2 text-left" style="width: 16rem;">
        <div class="card-header bg-dark ">
            <h5 class="card-title text-light">{{ $tarjeta }}</h5>
        </div>
        <a href="#">
            <img class="card-img-top" src="{{ $tarjeta }}.jpg" alt="Card image cap">
        </a>
    </div>
@endforeach