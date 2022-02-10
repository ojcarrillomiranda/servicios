<?php

use App\models\Ciudad;
use Illuminate\Database\Seeder;

class CiudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $ciudad =new Ciudad();
       $ciudad->ciudad = 'Bogota';
       $ciudad->save();
       $ciudad =new Ciudad();
       $ciudad->ciudad = 'Medellin';
       $ciudad->save();
       $ciudad =new Ciudad();
       $ciudad->ciudad = 'Barranquilla';
       $ciudad->save();
       $ciudad =new Ciudad();
       $ciudad->ciudad = 'Cartagena';
       $ciudad->save();
       $ciudad =new Ciudad();
       $ciudad->ciudad = 'cali';
       $ciudad->save();
       $ciudad =new Ciudad();
       $ciudad->ciudad = 'Bucaramanga';
       $ciudad->save();
       $ciudad =new Ciudad();
       $ciudad->ciudad = 'Villavicencio';
       $ciudad->save();
       $ciudad =new Ciudad();
       $ciudad->ciudad = 'Ibague';
       $ciudad->save();
       $ciudad =new Ciudad();
       $ciudad->ciudad = 'Valledupar';
       $ciudad->save();
       $ciudad =new Ciudad();
       $ciudad->ciudad = 'Manizales';
       $ciudad->save();
       $ciudad =new Ciudad();
       $ciudad->ciudad = 'Armenia';
       $ciudad->save();
       $ciudad =new Ciudad();
       $ciudad->ciudad = 'Pasto';
       $ciudad->save();
       $ciudad =new Ciudad();
       $ciudad->ciudad = 'Neiva';
       $ciudad->save();
       $ciudad =new Ciudad();
       $ciudad->ciudad = 'Monteria';
       $ciudad->save();
       $ciudad =new Ciudad();
       $ciudad->ciudad = 'Pereira';
       $ciudad->save();
       $ciudad =new Ciudad();
       $ciudad->ciudad = 'Santa marta';
       $ciudad->save();


    }
}






