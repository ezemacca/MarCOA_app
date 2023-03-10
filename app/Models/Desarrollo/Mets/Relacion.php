<?php

namespace App\Models\Desarrollo\Mets;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relacion extends Model
{
   protected $fillable=['metadatos_id','relacion_p1_rel_1','relacion_p1_rel_2_1','relacion_p1_rel_2_2','relacion_p1_rel_2_3'];
    public function metadatos(){
       return $this->belongsTo(Metadatos::class);
    }
    public $timestamps = false;
    use HasFactory;
}
