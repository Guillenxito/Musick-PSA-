<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    } 
    
    public function home()
    {
        /*
        // Nombres de los últimos authors incluidos en la base de datos
        $novedades = DB::table('authors')->orderBy('created_at')->get('nombre');
        $datos['authors'] = json_decode(json_encode($novedades), true);

        // id_song, titulo, id_album, id_author, id_style
        $temp = DB::table('albums')->where('id_album', '=', $id)->get();
        $datos['album'] = json_decode(json_encode($temp[0]), true);

        // id_author, nombre, informacion,
        $temp =  DB::table('authors')->where('id_author', '=', $datos['canciones'][0]['id_author'])->get();
        $datos['autor'] = json_decode(json_encode($temp[0]), true);

        return view('list.album', ['datos' => $datos]);
        */
        
        $categorias = [
            'tendencias' => [
                'paramore',
                'bad_bunny',
                'la_excepcion',
                'los_delinquentes',
                'arce',
                'camaron'
            ],
            'estilos' => [
                'flamenco' => 'Lo más flamenco',
                'rap' => 'Disfruta de lo más callejera.',
                'rock' => 'La mejor música Rock',
                'jazz' => 'Jazz para disfrutar',
                'pop' => 'El pop más animado.',
                'reggaeton' => 'Reggaeton 100%.'
            ],
            'recomendados' => [
                'la_excepcion',
                'paramore',
                'camaron',
                'arce',
                'bad_bunny',
                'los_delinquentes'
            ],
            'novedades'  => [
                'bad_bunny',
                'camaron',
                'los_delinquentes',
                'arce',
                'paramore',
                'la_excepcion'
            ]
        ];
        
        return view('home', compact('categorias'));
    }
}
