<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Categoria;
use App\models\User;

class WebController extends Controller
{
    public function index(){
        $categorias = Categoria::all();
        $conteo_usuarios = User::count();
        $usuarios = User:: all();
        return view('web.index')->with('categorias', $categorias)
                                ->with('usuarios', $usuarios)
                                ->with('conteo_usuarios', $conteo_usuarios);
    }
    public function contacto(){
        $categorias = Categoria::all();
        return view('web.contact', compact('categorias'));
    }

}
