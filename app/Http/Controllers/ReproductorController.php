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

    public function playLista($cancion) {

        

    }

    // TODO...
    // public function stop(){}
}
