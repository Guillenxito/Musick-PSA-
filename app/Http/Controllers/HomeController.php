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

         $categorias = [];
        /***************************** CONSULTA NOVEDADES **************************************/
        $novedades = DB::table('songs')
                                 ->join('authors','songs.id_author', '=', 'authors.id_author')
                                 ->join('albums','songs.id_album','=','albums.id_album')
                                 ->select('authors.nombre AS artista','albums.nombre')
                                 ->orderBy('albums.created_at', 'ASC')
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
        // $categorias['recomendados'] = json_decode(json_encode($recomendaciones[0]), true);
        $categorias['tendencias'] = json_decode(json_encode($tendencias), true);
        $categorias['estilos'] = json_decode(json_encode($estilos), true);

        return view('home', compact('categorias'));
    }

    public function albumJSON($author,$album) {

        $id_author = DB::table('authors')->select('id_author')->where('nombre', '=', $author)->get();
        $id_album = DB::table('albums')->select('id_album')->where('nombre', '=', $album)->get();

        $id_author = $id_author[0]->id_author;
        $id_album = $id_album[0]->id_album;

        // id_song, titulo, id_album, id_author, id_style
        $temp = DB::table('songs')->select('id_song', 'titulo', 'id_album', 'id_author', 'id_style')->where('id_album', '=', $id_album)->get();
        $datos['canciones'] = json_decode(json_encode($temp), true);
        
        // id_song, titulo, id_album, id_author, id_style
        $temp = DB::table('albums')->select('id_album', 'nombre', 'created_at')->where('id_album', '=', $id_album)->get();
        $datos['album'] = json_decode(json_encode($temp[0]), true);

        // id_author, nombre, informacion,
        $temp =  DB::table('authors')->select('id_author', 'nombre', 'informacion')->where('id_author', '=', $datos['canciones'][0]['id_author'])->get();
        $datos['autor'] = json_decode(json_encode($temp[0]), true);
        
        return json_decode(json_encode($datos), true);

    }

    public function authorJSON($author) {

        $id_author = DB::table('authors')->select('id_author')->where('nombre', '=', $author)->get();
        
        $id_author = $id_author[0]->id_author;

        // id_song, titulo, id_album, id_author, id_style
        $temp = DB::table('songs')->select('id_album', 'titulo')->where('id_author', '=', $id_author)->get();
        $datos['canciones'] = json_decode(json_encode($temp), true);

        // id_song, titulo, id_album, id_author, id_style
        $ids = DB::table('songs')->where('id_author', '=', $id_author)->get();
        $ids = json_decode(json_encode($ids), true);
        $temp = DB::table('albums')->whereIn('id_album', $ids)->get();
        $datos['albums'] = json_decode(json_encode($temp), true);

        // id_author, nombre, informacion
        $temp =  DB::table('authors')->where('id_author', '=', $id_author)->get();
        $datos['autor'] = json_decode(json_encode($temp[0]), true);

        return json_decode(json_encode($datos), true);
    }
}
