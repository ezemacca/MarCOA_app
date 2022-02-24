<?php

namespace App\Models\Desarrollo\Metadatos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciclo extends Model
{
    protected $fillable = ['proyecto_id','ciclo_p1','ciclo_p2'];
   
    public $timestamps = false;
    public function metadatos()
    {
       return $this->belongsTo(Metadatos::class);
    }
    public function contribuyente()
    {
        return $this->hasMany(Contribuyente::class);
    }

    use HasFactory;
}
