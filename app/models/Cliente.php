<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    use SoftDeletes;

    protected $table = 'clientes';

    protected $gurded = [];

    public function ciudad(){

        return $this->belongsTo(Ciudad::class);
    }
}
