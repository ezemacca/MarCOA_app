<?php

namespace App\Models\Desarrollo\Metadatos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clasificacion extends Model
{
   protected $fillable=['metadatos_id','clasificaciones_p1_cla_1','clasificaciones_p1_cla_2','clasificaciones_p1_cla_3','clasificaciones_p1_cla_4'];
   
    public function metadatos(){
       return $this->belongsTo(Metadatos::class);
    }
    public $timestamps = false;
    use HasFactory;
}
