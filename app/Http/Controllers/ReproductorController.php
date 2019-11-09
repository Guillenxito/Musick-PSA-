<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReproductorController extends Controller
{
    public function play(Request $request, Exception $e)
    {
        if($e instanceof \Illuminate\Session\TokenMismatchException){
              return redirect()
                  ->back()
                  ->withInput($request->except('_token'))
                  ->withMessage('Your explanation message depending on how much you want to dumb it down, lol!');
        }
        return parent::render($request, $e);
        // id_song, titulo, id_album, id_author, id_style
        //$temp = DB::table('songs')->where('id_song', '=', $id)->get();
        //$datos['canciones'] = json_decode(json_encode($temp[0]), true);

        //return view('layouts.footer', ['datos' => $datos]);
        //return "esta funcionando cruck";
    }

    // TODO...
    public function stop(){}
}
