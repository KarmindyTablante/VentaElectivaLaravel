<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Administrar; 
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
 


class AdministrarController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {

        $factory = (new Factory)->withServiceAccount(__DIR__.'/firebase-config.json');

        $database = $factory->createDatabase();

        $newPost = $database
        ->getReference('DomiciliaryAvailable');

        $snapshot = $newPost->getSnapshot();
        

        if($snapshot->getvalue() == null){
            
            $numero=0;

            return view('administrar.todas.index', ['numero' => $numero]);

        }else{
            foreach ($snapshot->getvalue() as $key => $value) {
                    
            $arrDomi[]=array(
                "key"=>$key
            ); 
             }

            $numero = count($arrDomi); 

            return view('administrar.todas.index', ['numero' => $numero]);
        }
   
 
    }


}




