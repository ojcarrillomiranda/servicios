<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';
    protected $fillable = [
    'url'
];

    public function imageable(){

        return $this->morphTo();
    }
}
