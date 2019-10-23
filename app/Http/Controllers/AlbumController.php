<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // id_song, titulo, id_album, id_author, id_style
        $temp = DB::table('songs')->where('id_album', '=', $id)->get();
        $datos['canciones'] = json_decode(json_encode($temp), true);

        // id_song, titulo, id_album, id_author, id_style
        $temp = DB::table('albums')->where('id_album', '=', $id)->get();
        $datos['album'] = json_decode(json_encode($temp[0]), true);

        // id_author, nombre, informacion,
        $temp =  DB::table('authors')->where('id_author', '=', $datos['canciones'][0]['id_author'])->get();
        $datos['autor'] = json_decode(json_encode($temp[0]), true);

        return view('list.album', ['datos' => $datos]);
    }
}
