<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapeo extends Model
{
    protected $fillable = ['nodo','descripcion','plantilla'];
    use HasFactory;
    public $timestamps = false;

    public function multimedial(){
       return $this->belongsTo(Multimedial::class);
    }
}
