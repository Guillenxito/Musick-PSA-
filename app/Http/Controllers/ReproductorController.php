<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReproductorController extends Controller
{
    public function play(Request $request)
    {
        // id_song, titulo, id_album, id_author, id_style
        //$temp = DB::table('songs')->where('id_song', '=', $id)->get();
        //$datos['canciones'] = json_decode(json_encode($temp[0]), true);

        return view('layouts.footer', ['datos' => $request]);
        //return "esta funcionando cruck";
    }

    public function playAlbum($album) {



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

    public function playLista($id_album) {
        $canciones = DB::table('albums')
                         ->join('authors','authors.id_author', '=', 'songs.id_author')
                         ->join('albums','albums.id_album', '=', 'songs.id_album')
                         ->select('authors.nombre AS nombreAuthor','albums.nombre AS nombreAlbum','songs.titulo')
                         ->where('songs.id_album','=', $id_album)
                         ->get();
        return json_decode(json_encode($canciones), true);
        

    }

    // TODO...
    // public function stop(){}
}
