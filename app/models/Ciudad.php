<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ciudad extends Model
{
    use SoftDeletes;

    protected $table = 'ciudades';

    protected $gurded = [];

    public function usuarios(){

        return $this->hasMany(User::class);
    }


}
