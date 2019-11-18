<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    
    public function playCancion($cancion) {

        

    }

    // Guarda todos los id de todas las canciones de un album en la tabla playLists con el id del usuario
    public function bibliotecaAlbum($id_album) {
        $id_songs = DB::table('songs','albums')
                        ->select('songs.id_song')
                        ->where('songs.id_album', '=', $id_album)
                        ->get();
        forEach($id_songs as $id) {
            bibliotecaCancion($id);
        }
    }
    
    // Guarda en la tabla playLists el id de la canción con el id de usuario
    public function bibliotecaCancion($id_song) {
        DB::table('playLists')->insert([
            ['id_user' => auth()->user()->id],
            ['id_song' => $id_song]
        ]);
    }

    // TODO...
    // public function stop(){}
}
