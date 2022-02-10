<?php

namespace App\Http\Controllers;

use App\models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUsuariosRequest;
use App\models\Ciudad;

class UsuariosController extends Controller
{

    public function index()
    {
        $usuarios = User::all();
        $ciudades = Ciudad::all();
        return view('adminlte.usuarios.index', compact('usuarios', 'ciudades'));
    }


    public function create()
    {
        $usuarios = User::all();
        $ciudades = Ciudad::all();
        return view('adminlte.usuarios.create', compact('usuarios', 'ciudades'));
    }


    public function store(StoreUsuariosRequest $request)
    {
        if ($request->hasFile('foto')) {
            $imagen = $request->file('foto');
            $nombre = time().$imagen->getClientOriginalName();
            $ruta = public_path().'/imagenes/usuarios';
            $imagen->move($ruta, $nombre);
            $urlimagen['url'] =  '/imagenes/usuarios/'.$nombre;
         }
        if ($request->hasFile('fiscalia')) {
            $fiscalia = $request->file('fiscalia');
            $nombre = time().$fiscalia->getClientOriginalName();
            $ruta = public_path().'/documentos/usuarios';
            $fiscalia->move($ruta, $nombre);
            $urlFiscalia =  '/documentos/usuarios/'.$nombre;
         }
        if ($request->hasFile('procuraduria')) {
            $procuraduria = $request->file('procuraduria');
            $nombre = time().$procuraduria->getClientOriginalName();
            $ruta = public_path().'/documentos/usuarios';
            $procuraduria->move($ruta, $nombre);
            $urlProcuraduria =  '/documentos/usuarios/'.$nombre;
         }
        if ($request->hasFile('policia')) {
            $policia = $request->file('policia');
            $nombre = time().$policia->getClientOriginalName();
            $ruta = public_path().'/documentos/usuarios';
            $policia->move($ruta, $nombre);
            $urlPolicia=  '/documentos/usuarios/'.$nombre;
         }
         $usuario = new User();
         $usuario->tipo_documento = $request->tipo_documento;
         $usuario->documento = $request->documento;
         $usuario->nombres = $request->nombres;
         $usuario->primer_apellido = $request->primer_apellido;
         $usuario->segundo_apellido = $request->segundo_apellido;
         $usuario->telefono = $request->telefono;
         $usuario->direccion = $request->direccion;
         $usuario->ciudad_id = $request->ciudad;
         $usuario->fiscalia = $urlFiscalia;
         $usuario->procuraduria =  $urlProcuraduria;
         $usuario->policia =  $urlPolicia;
         $usuario->email = $request->email;
         $usuario->username = $request->username;
         $usuario->password = bcrypt($request->password);
         $usuario->save();
         $usuario->image()->create($urlimagen);
         return redirect()->route('usuarios.index')->with('info', 'ok');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
    //     $usuario = User::find($id);
    //    return view('adminlte.categorias.edit', compact('usuario'));
    }


    public function update(Request $request, $id){
        if ($request->hasFile('foto')) {
            $imagen = $request->file('foto');
            $nombre = time().$imagen->getClientOriginalName();
            $ruta = public_path().'/imagenes/usuarios';
            $imagen->move($ruta, $nombre);
            $urlimagen['url'] =  '/imagenes/usuarios/'.$nombre;
         }
         $usuario = User::find($id);
         $usuario->tipoDocumento = $request->tipoDocumento;
         $usuario->documento = $request->documento;
         $usuario->nombres = $request->nombres;
         $usuario->primerApellido = $request->primerApellido;
         $usuario->segundoApellido = $request->segundoApellido;
         $usuario->email = $request->email;
         $usuario->username = $request->username;
         $usuario->password = bcrypt($request->password);
         if ($request->hasFile('foto')) {

            $usuario->image()->delete();
         }

         $usuario->save();
         
         if ($request->hasFile('foto')) {

            $usuario->image()->create($urlimagen);
       }
        return redirect()->route('usuarios.index')->with('update', 'ok');
    }


    public function destroy($id)
    {
        $user = User::find($id)->delete();
        return redirect()->route('usuarios.index')->with('eliminar', 'ok');
    }
}
