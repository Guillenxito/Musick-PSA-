@section('categoria')
    <!-- CATEGORIA -->
    <div class="container text-center">
        <div class="well text-center h1">{{ $nombreCategoria }}</div>
        <div class="row text-center">
            <!-- CARD -->
            @component('components.card', [ $nombreCategoria => $categoria ])                
            <!-- FIN CARD -->
        </div>
    </div>
    <!-- FIN CATEGORIA -->
@endsection