<?php

namespace App\Models\Desarrollo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\Desarrollo\Mets\Metadatos;
use \App\Models\Nodo;
use \App\Models\Implementacion;

class Desarrollo extends Model
{
    protected $fillable = ['proyecto_id','subetapa'];
    
    public function metadatos()
    {
        return $this->hasOne(Metadatos::class);
    }

    public function proyecto()
    {
       return $this->belongsTo(Proyecto::class);
    }

    public function nodos()
    {
        return $this->hasMany(Nodo::class);
    }
    public function implementacion()
    {
        return $this->hasOne(Implementacion::class);
    }

    public $timestamps = false;
    use HasFactory;
}
