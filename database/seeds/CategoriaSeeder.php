<?php

use App\models\Categoria;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoria = new Categoria();
        $categoria->nombre = "Bases de datos";
        $categoria->descripcion = "Se relaciones los profesionales con los conocimientos en los diferentes procesos de administracion de bases de datos";
        $categoria->slug = Str::slug($categoria->nombre);
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nombre = "Desarrollo de software";
        $categoria->descripcion = "Se relaciones los profesionales con los conocimientos en los diferentes lenguajes de programación y diferentes tecnologias";
        $categoria->slug = Str::slug($categoria->nombre);
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nombre = "Diseño gráfico";
        $categoria->descripcion = "Se relaciones los profesionales con los conocimientos de interfacez graficas";
        $categoria->slug = Str::slug($categoria->nombre);
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nombre = "Exel";
        $categoria->descripcion = "Se relaciones los profesionales con los conocimientos en exel desde lo basico hasta lo avanzado";
        $categoria->slug = Str::slug($categoria->nombre);
        $categoria->save();
    }
}
