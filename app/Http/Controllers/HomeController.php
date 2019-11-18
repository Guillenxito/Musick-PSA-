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
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        return view('home');
    } 

    public function home() {

         $categorias = [];
        /***************************** CONSULTA NOVEDADES **************************************/
        $novedades = DB::table('authors')
                         ->select('authors.nombre AS artista')
                         ->orderBy('created_at', 'ASC')
                         ->take(6)
                         ->get();


        /*************************** CONSULTA RECOMENDACIONES *************************/
        $JournalStyle = DB::table('journals')
                            ->join('songs', 'journals.id_song', '=', 'songs.id_song')
                            ->select('songs.id_style')
                            ->take(6)
                            ->get();

        $JournalStyle = json_decode(json_encode($JournalStyle), true);

         $countStyles = array();
        foreach($JournalStyle as $value)
        {
            if(array_key_exists($value['id_style'],$countStyles))
            {
                $countStyles[$value['id_style']] += 1;
            }else{
                $countStyles[$value['id_style']] = 1;
            }
        }

        $recomendaciones = array();

        foreach($countStyles as $key => $value)
        {
           $recomendacion = DB::table('songs')
                                ->join('albums','songs.id_album','=','albums.id_album')
                                ->join('authors','songs.id_author','=','authors.id_author')
                                ->select('albums.nombre AS nombreAlbum','authors.nombre AS artista')
                                ->where('songs.id_style','=',$key)
                                ->distinct('albums.id_album')
                                ->take($value)
                                ->orderByRaw('RAND()')
                                ->get();


            array_push($recomendaciones,$recomendacion);
        }
        
        /******************** CONSULTA TENDENCIAS ***************************/
        $JournalIdSongs = DB::table('journals')
                              ->join('songs', 'journals.id_song', '=', 'songs.id_song')
                              ->select('songs.id_song')
                              ->get();

        $JournalIdSongs = json_decode(json_encode($JournalIdSongs), true);
        $countIdSong = array();

        foreach($JournalIdSongs as $value)
        {
            if(array_key_exists($value['id_song'],$countIdSong))
            {
                $countIdSong[$value['id_song']] += 1;
            }else{
                $countIdSong[$value['id_song']] = 1;
            }
        }

        arsort($countIdSong);
        $countIdSongSix = array_slice($countIdSong, 0,6, true);

        $tendencias = array();
        foreach($countIdSongSix as $key => $value)
        {
           $tendencia = DB::table('songs')
                            ->join('albums','songs.id_album','=','albums.id_album')
                            ->join('authors','songs.id_author','=','authors.id_author')
                            ->select('songs.id_song','songs.titulo','songs.id_album','albums.nombre','authors.nombre AS artista')
                            ->where('songs.id_song','=',$key)
                            ->get();

            array_push($tendencias,$tendencia[0]);
        }
              
        /*********************** CONSULTA ESTILOS **********************************/
        $estilos = DB::table('styles')
            ->select('styles.nombre','styles.descripcion')
            ->get();

        /*********************** ADD CATEGORIAS **********************************/

        $categorias['novedades'] = json_decode(json_encode($novedades), true);
        $categorias['recomendados'] = json_decode(json_encode($recomendaciones[0]), true);
        $categorias['tendencias'] = json_decode(json_encode($tendencias), true);
        $categorias['estilos'] = json_decode(json_encode($estilos), true);

        // return view('home', json_decode(json_encode($categorias), true));
        return view('home', compact('categorias'));
    }

}
