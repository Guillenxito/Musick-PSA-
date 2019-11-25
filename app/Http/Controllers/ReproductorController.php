<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReproductorController extends Controller
{
    
    public function play(Request $request) {
        return view('layouts.footer', ['datos' => $request]);
    }

    // Devuelve una cancion
    public function playCancion($id_cancion) {
        $cancion = DB::table('songs')
                       ->join('authors','authors.id_author', '=', 'songs.id_author')
                       ->join('albums','albums.id_album', '=', 'songs.id_album')
                       ->select('authors.nombre AS nombreAuthor','albums.nombre AS nombreAlbum','songs.titulo AS nombreCancion')
                       ->where('songs.id_song','=', $id_cancion)
                       ->get();
        return json_decode(json_encode($cancion), true);
    }

    // Devuelve una lista de canciones de un album
    public function playAlbum($id_album) {
        $canciones = DB::table('songs')
                         ->join('authors','authors.id_author', '=', 'songs.id_author')
                         ->join('albums','albums.id_album', '=', 'songs.id_album')
                         ->select('authors.nombre AS nombreAuthor','albums.nombre AS nombreAlbum','songs.titulo AS nombreCancion')
                         ->where('songs.id_album','=', $id_album)
                         ->get();
        return json_decode(json_encode($canciones), true);   
    }

    // Devuelve una lista de canciones ordenadas aleatoriamente del estilo de la última cancion escuchada
    public function cancionesEstilo($nombreCancion) {
        $id_style = DB::table('songs')
                      ->select('id_style')
                      ->where('titulo','=',$nombreCancion)
                      ->get();
        $listaEstilo = DB::table('songs')
                           ->join('albums','albums.id_album', '=', 'songs.id_album')
                           ->join('authors','authors.id_author', '=', 'songs.id_author')
                           ->select('authors.nombre AS nombreAuthor', 'albums.nombre AS nombreAlbum', 'songs.titulo AS nombreCancion')
                           ->where('songs.id_style','=',$id_style[0] -> id_style)
                           ->inRandomOrder()
                           ->get();
        return json_decode(json_encode($listaEstilo), true);
    }
    
    // Devuelve la playList del usuario
    public function biblioteca() {
        $canciones = DB::table('playLists')
                         ->join('songs','songs.id_song', '=', 'playLists.id_song')
                         ->join('authors','authors.id_author', '=', 'songs.id_author')
                         ->join('albums','albums.id_album', '=', 'songs.id_album')
                         ->select('authors.nombre AS nombreAuthor','albums.nombre AS nombreAlbum','songs.titulo AS nombreCancion')
                         ->where('playLists.id_user','=', auth()->user()->id)
                         ->orderBy('playLists.created_at', 'asc')
                         ->get();
        return json_decode(json_encode($canciones), true);   
    }

}
