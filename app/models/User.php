<?php

namespace App\models;

use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;
    use SoftDeletes;

   protected $table = 'users';
    protected $fillable = [
        'name', 'email', 'password', 'tipo_documento', 'documento',
        'username',
        'primer_nombre',
        'segundo_nombre',
        'primer_apellido',
        'segundo_apellido',
        'telefono',
        'ciudad',
        'fiscalia',
        'procuraduria',
        'policia',
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function adminlte_image()
    {
        return Auth::user()->image->url;
    }

    public function adminlte_desc ()
    {
        return Auth::user()->email ;
    }

    public function ciudad() {

        return $this->belongsTo(Ciudad::class);
    }

    public function image() {

        return $this->morphOne(Image::class, 'imageable');
    }


}
