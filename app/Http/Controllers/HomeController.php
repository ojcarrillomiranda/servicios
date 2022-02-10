<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Categoria;
use App\models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }


    public function index()
    {
        $conteo = Categoria::count();
        $conteoUsuarios = User::count();
        return view('adminlte.index', compact('conteo', 'conteoUsuarios'));
    }

}
