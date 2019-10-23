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
                'logo',
                'logo',
                'logo',
                'logo',
                'logo',
                'logo'
            ],
            'estilos' => [
                'Rock' => 'La mejor música Rock',
                'HipHop' => 'Disfruta del mejor HipHop',
                'Punk' => 'La música más rebelde.',
                'Música Urbana' => 'Disfruta de lo más callejera.'
            ],
            'recomendados' => [
                'logo',
                'logo',
                'logo',
                'logo',
                'logo',
                'logo'
            ],
            'novedades'  => [
                'logo',
                'logo',
                'logo',
                'logo',
                'logo',
                'logo'
            ]
        ];
        
            // return view('home', $categorias);
            // $frase = ['HOLA','ADIOS'];
            return view('home', compact('categorias'));
    }
}
