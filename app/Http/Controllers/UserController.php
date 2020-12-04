<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserFormRequest;
use App\Http\Requests\UserEditFormRequest;
use App\User;

class UserController extends Controller
{
  
   
    public function index(Request $request)
    {
        
$datos['usuarios']=User::paginate(10);
       return view('usuarios.index',$datos);
     }

   
    public function create()
    {
                return view('usuarios.create');

    }
    
    public function store(Request $request)
    {
  
        $datosUsuario=request()->except('_token');
        User::insert($datosUsuario);

    return redirect()->route('usuarios.index')->with('info','El Usuario fue registrado exitosamente!');
       

    }
  
    
    public function show($id)
    {
        return view('usuarios.show', ['user' => User::findOrFail($id)]); 
    }

    
    public function edit($id)
    {

        $user= User::findOrFail($id);
        return view('usuarios.edit', ['user' => $user ]); 
    }

    
    public function update( Request $request, $id)
    {

        $this->validate(request(), ['email'=> ['required', 'email', 'max:255', 'unique:users,email,'.$id]]);

        $usuario = User::findOrFail($id);

        // Actualizar datos
        $usuario->name  =$request->get('name');
        $usuario->apellido=$request->get('apellido');
        $usuario->dni=$request->get('dni');
        $usuario->telefono=$request->get('telefono');
        $usuario->email =$request->get('email');

        // Actualizar contraseña
     

        // Actualizar imagen
        if ($request->hasfile('imagen')) {
            $file =$request->imagen;
            $file->move(public_path() . '/imagenes', $file->getClientOriginalName());
            $usuario->imagen = $file->getClientOriginalName();
        }

       


        $usuario->update();

        return redirect('/usuarios');
    }

   
    public function destroy($id)
    {
        $usuario = User::findOrFail($id);
        $usuario->delete();

        return redirect('/usuarios');

    }
}
