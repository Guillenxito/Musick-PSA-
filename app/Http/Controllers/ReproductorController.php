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

    public function bibliotecaAlbum($album) {


    }
    
    public function bibliotecaCancion($cancion) {
        DB::table('playLists')->insert([
            ['id_user' => auth()->user()->id],
            ['id_song' => $cancion]
        ]);

    }


    // TODO...
    // public function stop(){}
}
