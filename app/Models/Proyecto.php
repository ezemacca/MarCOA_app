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

    public function user(){
       return $this->belongsTo(User::class);
    }

    public function analisis()
    {
        return $this->hasOne(Analisis::class);
    }

    public function diseño()
    {
        return $this->hasOne(Diseño::class);
    }

    public function estructura()
    {
        return $this->hasOne(Estructura::class);
    }

    public function coherencia()
    {
        return $this->hasOne(Coherencia::class);
    }
}
