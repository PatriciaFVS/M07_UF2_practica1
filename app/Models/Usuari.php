<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuari extends Model
{
    use HasFactory;

    protected $table='usuaris';

    protected $fillable=[
        'name',
        'cognoms',
        'rol',
        'password',
        'email',
        'rol',
        'actiu'


    ];
    protected $hidden=[];
}
