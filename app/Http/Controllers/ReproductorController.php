<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReproductorController extends Controller
{
    public function play($id)
    {
        // id_song, titulo, id_album, id_author, id_style
        $temp = DB::table('songs')->where('id_song', '=', $id)->get();
        $datos['canciones'] = json_decode(json_encode($temp[0]), true);

        return view('layouts.footer', ['datos' => $datos]);
    }

    // TODO...
    public function stop(){}
}
