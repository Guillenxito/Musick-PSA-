<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    } 
    
    public function home()
    {
        //  
              
        $categorias = [
            'tendencias' => [
                'paramore',
                'paramore',
                'paramore',
                'paramore',
                'paramore',
                'paramore'
            ],
            'estilos' => [
                'rock' => 'La mejor música Rock',
                'hiphop' => 'Disfruta del mejor HipHop',
                'punk' => 'La música más rebelde.',
                'musicaurbana' => 'Disfruta de lo más callejera.'
            ],
            'recomendados' => [
                'paramore',
                'paramore',
                'paramore',
                'paramore',
                'paramore',
                'paramore'
            ],
            'novedades'  => [
                'paramore',
                'paramore',
                'paramore',
                'paramore',
                'paramore',
                'paramore'
            ]
        ];
        
            // return view('home', $categorias);
            // $frase = ['HOLA','ADIOS'];
            return view('home', compact('categorias'));
    }
}
