<?php

namespace App\Models\Administrador;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    //use HasFactory;

    public $table = 'administrador';

    public $fillable = [
    'nombres',
    'apellidos',
    'email',
    'tipo_documento',
    'documento',
    'telefono',
    'direccion',
    'codigo_postal',
    'user_id',
    'estado'
];

public static $rules = [
    'nombres' => 'required',
    'apellidos' => 'required',
    'email' => 'required',
    'tipo_documento' => 'required',
    'documento' => 'required',
    'telefono' => 'required',
    'direccion' => 'required',
    'codigo_postal' => 'required'
    
   ];
   
}


