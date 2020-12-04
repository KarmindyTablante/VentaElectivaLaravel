<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;  
use App\Comerciantes;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Illuminate\Support\Facades\Mail;

class ComerciantesController extends Controller
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
        ->getReference('Usuarios/Comerciante');
        $snapshot = $newPost->getSnapshot();
        
        foreach ($snapshot->getvalue() as $key => $value) {
                    
            $arrDomi[]=array(
                "key"=>$key, 
                "Nombre"=>$value['Datos']['Nombre'], 
                "Email"=>$value['Datos']['Email']
            ); 
        }


       // ------------------------------ 

        return view('administrar.comerciantes.index', ['arrDomi' => $arrDomi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

            // email data
            $email_data = array(
                'key' => $request->key,
                'Nombre' => $request->Nombre,
                'Apellido' => $request->Apellido,
                'correccion' => $request->correccion,
                'email' => $request->Email,
            );
            // send email with the template
            Mail::send('correcciones_comerciante', $email_data, function ($message) use ($email_data) {
                $message->to($email_data['email'], $email_data['Nombre'])
                    ->subject('Bienvenido a TusComprasHoy')
                    ->from('servicioalcliente@tuscomprashoy.com', 'TusComprasHoy');
            });

            if(!empty($request->key))
                $correccion='si';
                 return redirect('administrar/comerciantes/'. $request->key.'?correccion=$correccion');
               // return view('administrar.domiciliarios.show', $request->key);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($key)
    {
        $factory = (new Factory)->withServiceAccount(__DIR__.'/firebase-config.json');

        $database = $factory->createDatabase();

        $newPost = $database
        ->getReference('Usuarios/Comerciante/'.$key);
        $snapshot = $newPost->getSnapshot();
        
        if($snapshot->getvalue() == null){
            echo "No encontrado";
        }else{
            $arrDomi=array(   
                "key"=>$key,  
                "Apellido"=>$snapshot->getvalue()['Datos']['Apellido'], 
                "Barrio"=>$snapshot->getvalue()['Datos']['Barrio'],  
                "Ciudad"=>$snapshot->getvalue()['Datos']['Ciudad'],           
                "Departamento"=>$snapshot->getvalue()['Datos']['Departamento'], 
                "Documento"=>$snapshot->getvalue()['Datos']['Documento'], 
                // "documento_frontal"=>$snapshot->getvalue()['Datos']['Documento_Frontal'],  
                // "Documento_Posterior"=>$snapshot->getvalue()['Datos']['Documento_Posterior'],
                "Email"=>$snapshot->getvalue()['Datos']['Email'],
                // "Foto"=>$snapshot->getvalue()['Datos']['Foto'],
                "Nombre"=>$snapshot->getvalue()['Datos']['Nombre'],
                "Telefono"=>$snapshot->getvalue()['Datos']['Telefono'],
                // "Estado"=>$snapshot->getvalue()['Estado']
                "Foto"=>$snapshot->getvalue()['Commerce']['Foto'],
                "nombre"=>$snapshot->getvalue()['Commerce']['Nombre'],
                "TipoComercio"=>$snapshot->getvalue()['Commerce']['TipoComercio'],
                "Direccion"=>$snapshot->getvalue()['Commerce']['Ubicacion']['Direccion'],
            ); 
        }

        return view('administrar.comerciantes.show',['arrDomi' => $arrDomi, 'key'=>$key]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

  
}
