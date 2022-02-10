<?php

use App\models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('users')->truncate();
        // DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
        $user = new User();
        $user->tipo_documento = 'Cedula de ciudadania';
        $user->documento = '1022347048';
        $user->username = 'ocarrillo';
        $user->nombres = 'orlin javier';
        $user->primer_apellido = 'carrillo';
        $user->segundo_apellido = 'miranda';
        $user->telefono = '3008462392';
        $user->direccion = 'cra 28';
        $user->ciudad_id = 1;
        $user->email = 'orlinjaviercami@hotmail.com  ';
        $user->password = bcrypt('admin');
        $user->save();
    }
}
