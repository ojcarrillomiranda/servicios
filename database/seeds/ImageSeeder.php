<?php

use App\models\Image;
use App\models\Categoria;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $imagen = new Image();
        $imagen->url = '/imagenes/usuarios/usuario-registrado.jpg';
        $imagen->imageable_id = 1;
        $imagen->imageable_type = 'App\models\User';
        $imagen->save();

        $imagen = new Image();
        $imagen->url = '/img/categorias/base.jpg';
        $imagen->imageable_id = 1;
        $imagen->imageable_type = 'App\models\Categoria';
        $imagen->save();

        $imagen = new Image();
        $imagen->url = '/img/categorias/desarrollo.png';
        $imagen->imageable_id = 2;
        $imagen->imageable_type = 'App\models\Categoria';
        $imagen->save();

        $imagen = new Image();
        $imagen->url = '/img/categorias/diseño.png';
        $imagen->imageable_id = 3;
        $imagen->imageable_type = 'App\models\Categoria';
        $imagen->save();

        $imagen = new Image();
        $imagen->url = '/img/categorias/exel.png';
        $imagen->imageable_id = 4;
        $imagen->imageable_type = 'App\models\Categoria';
        $imagen->save();
    }
}
