<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function index(){


        $pessoas = [
            [          
                'imagem' => 'https://i.pravatar.cc/150?img='.rand(0,50), 
                'nome' => 'Michel',   
                'birth' => '11/07/1993', 
                'age' => '30', 
            ],
                
            [          
                'imagem' => 'https://i.pravatar.cc/150?img='.rand(0,50), 
                'nome' => 'Mayumi',   
                'birth' => '01/07/1994', 
                'age' => '29', 
            ],
            [          
                'imagem' => 'https://i.pravatar.cc/150?img='.rand(0,50), 
                'nome' => 'Rafaele',   
                'birth' => '10/09/2019', 
                'age' => '4', 
            ],   
               
        ];
        
        $dados['pessoas'] = $pessoas;
    
    return view('bemvindo', $dados);
    }

}
