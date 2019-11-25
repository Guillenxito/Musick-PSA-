@extends('layouts.plantillaLogin')

@section('cuerpo')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    Verifica tu correo electrónico
                </div>
                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            Se ha enviado un nuevo enlace de verificación a su dirección de correo electrónico.
                        </div>
                    @endif
                    Antes de continuar, revise su correo electrónico para obtener un enlace de verificación.
                    Si no recibiste el correo electrónico,
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">
                            haga clic aquí para solicitar otro.
                        </button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
