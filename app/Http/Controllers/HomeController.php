<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('home');
    } 
    
    public function home() {
        $categorias = [];
        $novedades = DB::table('authors')
                         ->select('authors.nombre AS artista')
                         ->orderBy('created_at', 'ASC')
                         ->take(6)
                         ->get();
        $JournalStyle = DB::table('journals')
                            ->join('songs', 'journals.id_song', '=', 'songs.id_song')
                            ->join('playLists','playLists.id_user', '=', 'journals.id_user')
                            ->join('users','journals.id_user', '=', 'users.id')
                            ->select('songs.id_style')
                            ->where('users.id','=',auth()->user()->id)
                            ->take(6)
                            ->get();

        //Comprobar que llega algo, si no se se pone unos artistas genericos.
        if(empty($var)){
            $JournalStyle = DB::table('journals')
                            ->join('songs', 'journals.id_song', '=', 'songs.id_song')
                            ->select('songs.id_style')
                            ->take(6)
                            ->get();
        }

        $JournalStyle = json_decode(json_encode($JournalStyle), true);
        $countStyles = array();
        foreach ($JournalStyle as $value) {
            if (array_key_exists($value['id_style'],$countStyles)) {
                $countStyles[$value['id_style']] += 1;
            } else {
                $countStyles[$value['id_style']] = 1;
            }
        }
        $recomendaciones = array();
        foreach($countStyles as $key => $value) {
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
        /* Unifica los arrays */
        $recomendacionesFinal = array();
        foreach ($recomendaciones as $k =>$v) {
            foreach ($v as $t)
                $recomendacionesFinal[] = $t;
        }
        $JournalIdSongs = DB::table('journals')
                              ->join('songs', 'journals.id_song', '=', 'songs.id_song')
                              ->select('songs.id_song')
                              ->get();
        $JournalIdSongs = json_decode(json_encode($JournalIdSongs), true);
        $countIdSong = array();
        foreach ($JournalIdSongs as $value) {
            if (array_key_exists($value['id_song'],$countIdSong)) {
                $countIdSong[$value['id_song']] += 1;
            } else {
                $countIdSong[$value['id_song']] = 1;
            }
        }
        arsort($countIdSong);
        $countIdSongSix = array_slice($countIdSong, 0,6, true);
        $tendencias = array();
        foreach($countIdSongSix as $key => $value) {
           $tendencia = DB::table('songs')
                            ->join('albums','songs.id_album','=','albums.id_album')
                            ->join('authors','songs.id_author','=','authors.id_author')
                            ->select('songs.id_song','songs.titulo','songs.id_album','albums.nombre','authors.nombre AS artista')
                            ->where('songs.id_song','=',$key)
                            ->get();
            array_push($tendencias,$tendencia[0]);
        }
        $estilos = DB::table('styles')
                       ->select('styles.nombre','styles.descripcion')
                       ->get();
        $categorias['novedades'] = json_decode(json_encode($novedades), true);
        $categorias['recomendados'] = json_decode(json_encode($recomendacionesFinal), true);
        $categorias['tendencias'] = json_decode(json_encode($tendencias), true);
        $categorias['estilos'] = json_decode(json_encode($estilos), true);
        // return view('home', json_decode(json_encode($categorias), true));
        return view('home', compact('categorias'));
    }

    public function albumJSON($author,$album) {
        $id_author = DB::table('authors')
                        ->select('id_author')
                        ->where('nombre', '=', $author)
                        ->get();
        $id_album = DB::table('albums')
                        ->select('id_album')
                        ->where('nombre', '=', $album)
                        ->get();
        $id_author = $id_author[0]->id_author;
        $id_album = $id_album[0]->id_album;
        $temp = DB::table('songs')
                    ->select('id_song', 'titulo', 'id_album', 'id_author', 'id_style')
                    ->where('id_album', '=', $id_album)
                    ->get();
        $datos['canciones'] = json_decode(json_encode($temp), true);
        $temp = DB::table('albums')
                    ->select('id_album', 'nombre AS nombreAlbum', 'created_at')
                    ->where('id_album', '=', $id_album)
                    ->get();
        $datos['album'] = json_decode(json_encode($temp[0]), true);
        $temp =  DB::table('authors')
                     ->select('id_author', 'nombre AS nombreAutor', 'informacion')
                     ->where('id_author', '=', $datos['canciones'][0]['id_author'])
                     ->get();
        $datos['autor'] = json_decode(json_encode($temp[0]), true);        
        return json_decode(json_encode($datos), true);
    }

    public function authorJSON($author) {
        $id_author = DB::table('authors')
                         ->select('id_author')
                         ->where('nombre', '=', $author)
                         ->get();        
        $id_author = $id_author[0] -> id_author;
        $temp = DB::table('songs')
                    ->select('id_album', 'titulo')
                    ->where('id_author', '=', $id_author)
                    ->get();
        $datos['canciones'] = json_decode(json_encode($temp), true);
        $ids = DB::table('songs')
                   ->select('id_album')
                   ->where('id_author', '=', $id_author)
                   ->get();
        $ids = json_decode(json_encode($ids), true);
        $temp = DB::table('albums')
                    ->select('id_album','nombre AS nombreAlbum')
                    ->whereIn('id_album', $ids)
                    ->get();
        $datos['albums'] = json_decode(json_encode($temp), true);
        $temp =  DB::table('authors')
                     ->select('nombre AS nombreAutor','informacion')
                     ->where('id_author', '=', $id_author)
                     ->get();
        $datos['autor'] = json_decode(json_encode($temp[0]), true);
        return json_decode(json_encode($datos), true);
    }

    public function bibliotecaJSON() {
        $playList = DB::table('songs')
                    ->join('albums','songs.id_album','=','albums.id_album')
                    ->join('authors','songs.id_author','=','authors.id_author')
                    ->join('playLists','songs.id_song','=','playLists.id_song')
                    ->join('users','users.id','=','playLists.id_user')
                    ->select('songs.titulo','albums.nombre AS nombreAlbum','authors.nombre AS nombreAuthor','playLists.id_list','playLists.id_song')
                    ->where('users.id', '=' , auth()->user()->id)
                    ->get();
        return json_decode(json_encode($playList), true);
    }
    
    public function searchInLiveJSON($wanted) {
        $songs =  DB::table('songs')
                     ->join('albums','songs.id_album','=','albums.id_album')
                     ->join('authors','songs.id_author','=','authors.id_author')
                     ->select('songs.titulo','albums.nombre AS nombreAlbum','authors.nombre AS nombreAuthor')
                     ->where('titulo', 'like', $wanted.'%')
                     ->distinct('songs.titulo')
                     ->take(4)
                     ->get();
        $authors =  DB::table('authors')
                     ->select('authors.nombre As nombreAuthor')
                     ->where('nombre', 'like', $wanted . '%')
                     ->distinct('nombre')
                     ->take(4)
                     ->get();
        $albums = DB::table('songs')
                     ->join('albums','songs.id_album','=','albums.id_album')
                     ->join('authors','songs.id_author','=','authors.id_author')
                     ->select('albums.nombre AS nombreAlbum','authors.nombre AS nombreAuthor')
                     ->where('albums.nombre', 'like', $wanted.'%')
                     ->distinct('albums.nombre')
                     ->take(4)
                     ->get();
        $query = array();
        array_push($query, $albums,$authors,$songs);
        $queryFinal = array();
        foreach($query as $k =>$v){
                foreach($v as $t)
                    $queryFinal[] = $t;
        }
        return json_decode(json_encode($queryFinal), true);
    }

    public function saberBuscado($wanted) {
        $wanted = str_replace(" ", "_", $wanted);
        $respuesta =  DB::table('authors')
                      ->select('authors.nombre AS nombreAuthor')
                      ->where('authors.nombre', '=', $wanted)
                      ->get();
        if (count($respuesta) < 1) {
            $respuesta =  DB::table('albums')
                           ->join('songs','songs.id_album','=','albums.id_album')
                           ->join('authors','songs.id_author','=','authors.id_author')
                           ->select('authors.nombre AS nombreAuthor','albums.nombre AS nombreAlbum')
                           ->where('albums.nombre', '=', $wanted)
                           ->get();
            if (count($respuesta) < 1) {
                $respuesta =  DB::table('songs')
                              ->join('albums','songs.id_album','=','albums.id_album')
                              ->join('authors','songs.id_author','=','authors.id_author')
                              ->select('authors.nombre AS nombreAuthor','albums.nombre AS nombreAlbum','songs.titulo AS nombreCancion')
                              ->where('songs.titulo', '=', $wanted)
                              ->get();
            }
        }
        return json_decode(json_encode($respuesta), true);
    }

}
