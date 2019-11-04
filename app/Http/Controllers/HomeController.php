<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
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
         $categorias = [];
        
   /*     $categorias = [
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
            ]
        ];*/
        /*$novedades2 = DB::table('songs')
                    ->join('authors', 'authors.id_author', '=', 'songs.id_author')
                    ->orderBy('created_at', 'desc')
                    ->take(6)
                    ->get();*/
/* CONSULTA NOVEDADES*/
$novedades = DB::table('songs')
                         ->join('authors','songs.id_author', '=', 'authors.id_author')
                         ->join('albums','songs.id_album','=','albums.id_album')
                         ->select('authors.nombre AS artista','albums.nombre')
                         ->orderBy('albums.created_at', 'DESC')
                         ->take(6)
                         ->get();
$categorias['novedades'] = json_decode(json_encode($novedades), true);

$recomendaciones = array();

/*CONSULTA RECOMENDACIONES*/
//Conseguir los ultimos 6 estilos escuchados:
$JournalStyle = DB::table('journals')
                ->join('songs', 'journals.id_song', '=', 'songs.id_song')
                ->select('songs.id_style')
                ->take(6)
                ->get();


//Funcion para contar valores repetidos
$JournalStyle = json_decode(json_encode($JournalStyle), true);

$countStyles=array();

foreach($JournalStyle as $value)
{
    if(isset($countStyles[$value]))
    {
        // si ya existe, le añadimos uno
    $countStyles[$value]+=1;
    }else{
        // si no existe lo añadimos al array
    $countStyles[$value]=1;
    }
}

foreach($countStyles as $key => $value)
{
   $re = DB::table('songs')
                         ->join('albums','songs.id_album','=','albums.id_album')
                         ->select('song.+')
                         ->where('songs.id_style','=',$key)
                         ->distinct('albums.id_album')
                         ->take($value)
                         ->get();


    array_push($recomendaciones,$re);
}
$categorias['recomendados'] = json_decode(json_encode($recomendaciones), true);
        
        return view('home', compact('categorias'));
    }
}
