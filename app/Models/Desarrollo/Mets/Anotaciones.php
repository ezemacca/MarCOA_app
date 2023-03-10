<?php

namespace App\Models\Desarrollo\Mets;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anotaciones extends Model
{
   protected $fillable=['metadatos_id',
      'anotaciones_p1_anot_1',
      'anotaciones_p1_anot_2',
      'anotaciones_p1_anot_3'];
   
   public function metadatos(){
       return $this->belongsTo(Metadatos::class);
   }
   
   public $timestamps = false;
    use HasFactory;
}
