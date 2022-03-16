<?php

namespace App\Models\Desarrollo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\desarrollo\metadatos\Metadatos;
use App\Models\Nodo;

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

    public $timestamps = false;
    use HasFactory;
}
