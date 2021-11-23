<?php

//este es un modelo php, que representa la tabla proyecto de la base de datos
namespace App\Models; 

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $fillable = ['user_id','titulo','descripcion','etapa'];
    // protected $table ='proyectos';
    use HasFactory;

    protected $casts = [
        'options' => 'array',
    ];
}
