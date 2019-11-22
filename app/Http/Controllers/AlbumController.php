<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function showArtist($author)
    {
        $id_author = DB::table('authors')->select('id_author')->where('nombre', '=', preg_replace("/[_]/", " ", $author))->get();
        
        $id_author = $id_author[0]->id_author;

        // id_song, titulo, id_album, id_author, id_style
        $temp = DB::table('songs')->select('id_album', 'titulo')->where('id_author', '=', $id_author)->get();
        $datos['canciones'] = json_decode(json_encode($temp), true);

        // id_song, titulo, id_album, id_author, id_style
        $ids = DB::table('songs')->where('id_author', '=', $id_author)->get();
        $ids = json_decode(json_encode($ids), true);
        $temp = DB::table('albums')->whereIn('id_album', $ids)->get();
        $datos['album'] = json_decode(json_encode($temp), true);

        // id_author, nombre, informacion
        $temp =  DB::table('authors')->where('id_author', '=', $id_author)->get();
        $datos['autor'] = json_decode(json_encode($temp[0]), true);

        return view('list.album', ['datos' => $datos]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showAlbum($author, $album)
    {   
        $id_author = DB::table('authors')->select('id_author')->where('nombre', '=', preg_replace("/[_]/", " ", $author))->get();
        $id_album = DB::table('albums')->select('id_album')->where('nombre', '=', preg_replace("/[_]/", " ", $album))->get();

        $id_author = $id_author[0]->id_author;
        $id_album = $id_album[0]->id_album;

        // id_song, titulo, id_album, id_author, id_style
        $temp = DB::table('songs')->select('id_song', 'titulo', 'id_album', 'id_author', 'id_style')->where('id_album', '=', $id_album)->get();
        $datos['canciones'] = json_decode(json_encode($temp), true);
        
        // id_song, titulo, id_album, id_author, id_style
        $temp = DB::table('albums')->select('id_album', 'nombre', 'created_at')->where('id_album', '=', $id_album)->get();
        $datos['album'] = json_decode(json_encode($temp[0]), true);

        // id_author, nombre, informacion,
        $temp =  DB::table('authors')->select('id_author', 'nombre', 'informacion')->where('id_author', '=', $datos['canciones'][0]['id_author'])->get();
        $datos['autor'] = json_decode(json_encode($temp[0]), true);
        
        return view('list.album', ['datos' => $datos]);
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

        // id_song, titulo, id_album, id_author, id_style
        $temp = DB::table('songs')
                    ->select('id_song', 'titulo', 'id_album', 'id_author', 'id_style')
                    ->where('id_album', '=', $id_album)
                    ->get();
        $datos['canciones'] = json_decode(json_encode($temp), true);
        
        // id_song, titulo, id_album, id_author, id_style
        $temp = DB::table('albums')
                    ->select('id_album', 'nombre AS nombreAlbum', 'created_at')
                    ->where('id_album', '=', $id_album)
                    ->get();
        $datos['album'] = json_decode(json_encode($temp[0]), true);

        // id_author, nombre, informacion,
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

        // id_song, titulo, id_album, id_author, id_style
        $temp = DB::table('songs')
                    ->select('id_album', 'titulo')
                    ->where('id_author', '=', $id_author)
                    ->get();
        $datos['canciones'] = json_decode(json_encode($temp), true);

        // id_song, titulo, id_album, id_author, id_style
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

        // id_author, nombre, informacion
        $temp =  DB::table('authors')
                     ->select('nombre AS nombreAutor','informacion')
                     ->where('id_author', '=', $id_author)
                     ->get();
        $datos['autor'] = json_decode(json_encode($temp[0]), true);

        return json_decode(json_encode($datos), true);
    }


}
