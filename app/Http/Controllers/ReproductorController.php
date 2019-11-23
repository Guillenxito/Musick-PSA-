<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReproductorController extends Controller
{
    public function play(Request $request) {
        return view('layouts.footer', ['datos' => $request]);
    }

    public function playCancion($id_cancion) {
        $cancion = DB::table('songs')
                       ->join('authors','authors.id_author', '=', 'songs.id_author')
                       ->join('albums','albums.id_album', '=', 'songs.id_album')
                       ->select('authors.nombre AS nombreAuthor','albums.nombre AS nombreAlbum','songs.titulo AS nombreCancion')
                       ->where('songs.id_song','=', $id_cancion)
                       ->get();
        return json_decode(json_encode($cancion), true);
    }

    public function playAlbum($id_album) {
        $canciones = DB::table('songs')
                         ->join('authors','authors.id_author', '=', 'songs.id_author')
                         ->join('albums','albums.id_album', '=', 'songs.id_album')
                         ->select('authors.nombre AS nombreAuthor','albums.nombre AS nombreAlbum','songs.titulo AS nombreCancion')
                         ->where('songs.id_album','=', $id_album)
                         ->get();
        return json_decode(json_encode($canciones), true);   
    }
    
}
