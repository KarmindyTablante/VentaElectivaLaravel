<?php  

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Clientes;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Illuminate\Support\Facades\Mail;

class ClientesController extends Controller
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
        ->getReference('Usuarios/Cliente');
        $snapshot = $newPost->getSnapshot();
        
        foreach ($snapshot->getvalue() as $key => $value) {
                    
            $arrDomi[]=array(
                "key"=>$key, 
                "Nombre"=>$value['Nombre'], 
                "Email"=>$value['Email']
               
            ); 
        }
       // ------------------------------ 

        return view('administrar.clientes.index', ['arrDomi' => $arrDomi]);
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
            Mail::send('correcciones_cliente', $email_data, function ($message) use ($email_data) {
                $message->to($email_data['email'], $email_data['Nombre'], $email_data['Apellido'])
                    ->subject('Bienvenido a TusComprasHoy')
                    ->from('servicioalcliente@tuscomprashoy.com', 'TusComprasHoy');
            });

            if(!empty($request->key))
                $correccion='si';
                return redirect('administrar/clientes/'. $request->key.'?correccion=$correccion' );
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
        ->getReference('Usuarios/Cliente/'.$key);
        $snapshot = $newPost->getSnapshot();
        
        if($snapshot->getvalue() == null){
            echo "No encontrado";
        }else{
            $arrDomi=array(   
                "key"=>$key,  
                "Apellido"=>$snapshot->getvalue()['Apellido'], 
                "Barrio"=>$snapshot->getvalue()['Barrio'],  
                "Ciudad"=>$snapshot->getvalue()['Ciudad'],           
                "Departamento"=>$snapshot->getvalue()['Departamento'], 
                "Email"=>$snapshot->getvalue()['Email'],
                "Foto"=>$snapshot->getvalue()['Foto'],
                "Nombre"=>$snapshot->getvalue()['Nombre'],
                "Telefono"=>$snapshot->getvalue()['Telefono']
            ); 
        }

        return view('administrar.clientes.show',['arrDomi' => $arrDomi, 'key'=>$key]);
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
