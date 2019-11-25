<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlaylistController extends Controller
{

    // Guarda todos los id de todas las canciones de un album en la tabla playLists con el id del usuario
    public function bibliotecaAlbum($id_album) {
        $id_songs = DB::table('songs')
                        ->select('id_song')
                        ->where('id_album', '=', $id_album)
                        ->get();
        $array_id_songs = json_decode(json_encode($id_songs), true);
        forEach($array_id_songs as $clave => $valor) {
            forEach($valor as $id_song) {
                DB::table('playLists')->updateOrInsert(
                    ['id_user' => auth()->user()->id,
                     'id_song' => $id_song],
                    ['created_at' => NOW()]
                );
            }
        }
    }
    
    // Guarda en la tabla playLists el id de la canción con el id de usuario
    public function bibliotecaCancion($id_song) {
        DB::table('playLists')->updateOrInsert(
            ['id_user' => auth()->user()->id,
             'id_song' => $id_song],
            ['created_at' => NOW()]
        );
    }

    public function bibliotecaJSON() {
        //$id_user = auth()->user()->id;
        $playList = DB::table('songs')
                    ->join('albums','songs.id_album','=','albums.id_album')
                    ->join('authors','songs.id_author','=','authors.id_author')
                    ->join('playLists','songs.id_song','=','playLists.id_song')
                    ->join('users','users.id','=','playLists.id_user')
                    ->select('songs.titulo','albums.nombre AS nombreAlbum','authors.nombre AS nombreAuthor','playLists.id_list','playLists.id_song','playLists.created_at')
                    ->where('users.id', '=' , auth()->user()->id)
                    ->orderBy('playLists.created_at', 'asc')
                    ->get();
        return json_decode(json_encode($playList), true);
    }

    public function borrarBiblioteca($id_song) {
        DB::table('playLists')
            ->where([
                ['id_song', '=', $id_song],
                ['id_user', '=', auth()->user()->id]
                ])
            ->delete();
    }

}
