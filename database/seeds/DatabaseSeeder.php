<?php


use Illuminate\Database\Seeder;
use App\models\Image;
use App\models\Categoria;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(ImageSeeder::class);
        $this->call(CiudadSeeder::class);
    }
}
