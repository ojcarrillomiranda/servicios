<?php

namespace App\Http\Controllers;

use App\models\Categoria;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{

    public function index()
    {
        $categorias = Categoria::all();
        return view('adminlte.categorias.index')->with('categorias', $categorias);
    }


    public function create()
    {
        return view('adminlte.categorias.create');
    }

    public function store(Request $request)
    {
        if ($request->hasFile('imagen')) {
           $imagen = $request->file('imagen');
           $nombre = time().$imagen->getClientOriginalName();
           $ruta = public_path().'/imagenes/categorias';
           $imagen->move($ruta, $nombre);
           $urlimagen['url'] =  '/imagenes/categorias/'.$nombre;
        }
        $categoria = new Categoria();
        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;
        $categoria->slug = Str::slug($request->nombre);
        $categoria->save();
        $categoria->image()->create($urlimagen);
        return redirect()->route('categorias.index')->with('info', 'ok');
    }


    public function show(Categoria $categoria)
    {
        //
    }


    public function edit($id)
    {
    //    $categoria = Categoria::find($id);
    //    return view('adminlte.categorias.edit', compact('categoria'));
    }


    public function update(Request $request, $id)
    {
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $nombre = time().$imagen->getClientOriginalName();
            $ruta = public_path().'/imagenes/categorias';
            $imagen->move($ruta, $nombre);
            $urlimagen['url'] = '/imagenes/categorias/'.$nombre;
         }
         $categoria = Categoria::find($id);
         $categoria->nombre = $request->nombre;
         $categoria->descripcion = $request->descripcion;
         if ($request->hasFile('imagen')) {
            $categoria->image()->delete();
        }
         $categoria->save();
         if ($request->hasFile('imagen')) {
             $categoria->image()->create($urlimagen);
        }
         return redirect()->route('categorias.index')->with('update', 'ok');
    }


    public function destroy($id)
    {
        Categoria::find($id)->delete();
        return redirect()->route('categorias.index')->with('eliminar', 'ok');

    }
}
