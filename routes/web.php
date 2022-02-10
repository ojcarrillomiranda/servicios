<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



Route::get('/', 'WebController@index')->name('web');
Route::get('/contacto', 'WebController@contacto')->name('contacto');
Route::get('/login', 'LOginController@login')->name('login');
Route::resource('categorias', 'CategoriaController')->names('categorias');
Route::resource('usuarios', 'UsuariosController')->names('usuarios');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

