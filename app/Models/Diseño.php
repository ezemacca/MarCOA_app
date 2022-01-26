<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diseño extends Model
{
    protected $fillable = ['proyecto_id','subetapa'];

    use HasFactory;
    public $timestamps = false;

    public function instruccional()
    {
        return $this->hasOne(Instruccional::class);
    }

    public function estructura()
    {
        return $this->hasOne(Estructura::class);
    }
    public function multimedial()
    {
        return $this->hasOne(Multimedial::class);
    }

    public function proyecto(){
       return $this->belongsTo(Proyecto::class);
    }

}
