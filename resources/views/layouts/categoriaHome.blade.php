@section('cuerpo')
    <!-- CATEGORIA -->
    <div class="container text-center">
        <div class="well text-center h1">{{$categoria}}</div>
        <div class="row text-center">				
            <!-- CARD -->
            @include('layouts/card')
            <!-- FIN CARD -->
        </div>
    </div>
    <!-- FIN CATEGORIA -->
@endsection