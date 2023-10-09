<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function index(){

        $nome = 'Michel';
        $sobrenome = 'Alves';
        $nascimento = '11-07-1993';
        $idade = 30;

        $data =  [
            'lista' => [
                '1' => 'Michel', 
                '2' => 'Mayumi',   
                '3' => 'Rafaele',              ]
            
        ];
        
        return view('bemvindo', $data);

    }


}
