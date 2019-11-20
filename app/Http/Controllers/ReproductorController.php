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
    
    public function playCancion($cancion) {

        

    }

    // Guarda todos los id de todas las canciones de un album en la tabla playLists con el id del usuario
    public function bibliotecaAlbum($id_album) {
        $id_songs = DB::table('songs','albums')
                        ->select('songs.id_song')
                        ->where('songs.id_album', '=', $id_album)
                        ->get();
                        console.log($id_songs);
        // $biblioteca = new ReproductorController();
        forEach($id_songs as $id) {
            bibliotecaCancion($id);
            // $this -> bibliotecaCancion($id);
            // $biblioteca -> bibliotecaCancion($id);
        }
    }
    
    // Guarda en la tabla playLists el id de la canción con el id de usuario
    function bibliotecaCancion($id_song) {
        DB::table('playLists')->updateOrInsert(
            ['id_user' => auth()->user()->id,
             'id_song' => $id_song],
            ['created_at' => NOW()]
        );
    }

    // TODO...
    // public function stop(){}
}
