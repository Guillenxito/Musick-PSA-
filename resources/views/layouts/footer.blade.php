@section('footer')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- 
                <audio src="{{ asset('song.mp3') }}" preload="auto" controls>
                    <p>Tu navegador no implementa el elemento audio</p>
                </audio>
                -->
                <!-- 1:1 aspect ratio -->
                <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="{{ asset('song.mp3') }}"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection