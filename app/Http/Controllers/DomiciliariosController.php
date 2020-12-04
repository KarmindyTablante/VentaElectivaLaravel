<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Domiciliarios;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Illuminate\Support\Facades\Mail;

// ---------------------------------------------
class DomiciliariosController extends Controller
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
        ->getReference('Usuarios/Domiciliario');
        $snapshot = $newPost->getSnapshot();

            foreach ($snapshot->getvalue() as $key => $value) {
                        
                $arrDomi[]=array(
                    "key"=>$key, 
                    "Nombre"=>$value['Datos']['Nombre'], 
                    "Email"=>$value['Datos']['Email'],
                    "Estado"=>$value['Estado']
                ); 
            }
              

            return view('administrar.domiciliarios.index', ['arrDomi' => $arrDomi]);       
    }

    public function show($key)
    {
        $factory = (new Factory)->withServiceAccount(__DIR__.'/firebase-config.json');

        $database = $factory->createDatabase();

        $newPost = $database
        ->getReference('Usuarios/Domiciliario/'.$key);
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
                "documento_frontal"=>$snapshot->getvalue()['Datos']['Documento_Frontal'],  
                "Documento_Posterior"=>$snapshot->getvalue()['Datos']['Documento_Posterior'],
                "Email"=>$snapshot->getvalue()['Datos']['Email'],
                "Foto"=>$snapshot->getvalue()['Datos']['Foto'],
                "Nombre"=>$snapshot->getvalue()['Datos']['Nombre'],
                "Telefono"=>$snapshot->getvalue()['Datos']['Telefono'],
                "Estado"=>$snapshot->getvalue()['Estado']
            ); 
        }

        return view('administrar.domiciliarios.show',['arrDomi' => $arrDomi, 'key'=>$key]);
    }
// ---------------------------------------------------------------------------------------------- 

    public function store(Request $request){

            // email data
            $email_data = array(
                'key' => $request->key,
                'Nombre' => $request->Nombre,
                'correccion' => $request->correccion,
                'email' => $request->Email,
            );
            // send email with the template
            Mail::send('correcciones_domiciliario', $email_data, function ($message) use ($email_data) {
                $message->to($email_data['email'], $email_data['Nombre'])
                    ->subject('Bienvenido a TusComprasHoy')
                    ->from('servicioalcliente@tuscomprashoy.com', 'TusComprasHoy');
            });


            if(!empty($request->key))
                $correccion='si';
                 return redirect('administrar/domiciliarios/'. $request->key.'?correccion=$correccion');
    }

     public function update(Request $request, $key)
    {   
        $key = $key;

        $pre_estado = ($request->Estado == 'true') ? true : false;
        $status = !$pre_estado;

        //verifica si la key está vacia
            if(empty($key))
                die("ERROR, KEY NO VÁLIDA");

            $uid = $key;
            $postData = [
                'Estado' => $status,
            ];

            $factory = (new Factory)->withServiceAccount(__DIR__.'/firebase-config.json');

            $database = $factory->createDatabase();

            $database->getReference('Usuarios/Domiciliario/'.$uid.'/') // this is the root reference
               ->update($postData);

            // Hay que poner una validación de que si se hace el update mande el código, sino no
            // Email de aviso de activación o desactivación de usuario
               // email data               

               if ($status==true) {
                   # code...
              
                    $email = array(
                        'key' => $key,
                        'Nombre' => $request->Nombre,
                        'Apellido' => $request->Apellido,
                        'email' => $request->Email,
                    );
                    // send email with the template
                    Mail::send('cambio_estado_activo', $email, function ($message) use ($email) {
                        $message->to($email['email'], $email['Nombre'], $email['Apellido'])
                            ->subject('Bienvenido a TusComprasHoy')
                            ->from('servicioalcliente@tuscomprashoy.com', 'TusComprasHoy');
                    });
                }else if ($status==false) {
              
                    $email = array(
                        'key' => $key,
                        'Nombre' => $request->Nombre,
                        'Apellido' => $request->Apellido,
                        'email' => $request->Email,
                    );
                    // send email with the template
                    Mail::send('cambio_estado_inactivo', $email, function ($message) use ($email) {
                        $message->to($email['email'], $email['Nombre'], $email['Apellido'])
                            ->subject('Bienvenido a TusComprasHoy')
                            ->from('servicioalcliente@tuscomprashoy.com', 'TusComprasHoy');
                    });
                }

            // Fin de email
            $cambio_estado='si';
           return redirect('/administrar/domiciliarios/'. $key.'?cambio_estado=$cambio_estado');  

    }




}








