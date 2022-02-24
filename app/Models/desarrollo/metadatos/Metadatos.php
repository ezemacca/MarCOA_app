<?php

namespace App\Models\Desarrollo\Metadatos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metadatos extends Model
{
    protected $fillable = ['desarrollo_id','subetapa'];

    public function desarrollo(){
       return $this->belongsTo(Desarrollo::class);
    }

    public function general()
    {
        return $this->hasOne(General::class);
    }
    public function ciclo()
    {
        return $this->hasOne(Ciclo::class);
    }
    public function metametadatos()
    {
        return $this->hasOne(Metametadatos::class);
    }
    public function tecnica()
    {
        return $this->hasOne(Tecnica::class);
    }
    public function educacional()
    {
        return $this->hasOne(Educacional::class);
    }
    public function derechos()
    {
        return $this->hasOne(Derechos::class);
    }
    public function relacion()
    {
        return $this->hasOne(Relacion::class);
    }
    public function anotaciones()
    {
        return $this->hasOne(Anotaciones::class);
    }
    public function clasificacion()
    {
        return $this->hasOne(Clasificacion::class);
    }
    public $timestamps = false;
    use HasFactory;
}
