<?php

namespace App\Models\Desarrollo\Metadatos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Educacional extends Model
{
   protected $fillable = ['metadatos_id','educacional_p1','educacional_p2','educacional_p3','educacional_p4','educacional_p5','educacional_p6','educacional_p7','educacional_p8','educacional_p9','educacional_p10','educacional_p11'];
    public function metadatos(){
       return $this->belongsTo(Metadatos::class);
    }
    public $timestamps = false;
    use HasFactory;
}
