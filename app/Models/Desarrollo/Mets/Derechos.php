<?php

namespace App\Models\Desarrollo\Mets;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Derechos extends Model
{
   protected $fillable = ['metadatos_id','derechos_p1','derechos_p2','derechos_p3'];
   public function metadatos(){
       return $this->belongsTo(Metadatos::class);
    }
   use HasFactory;
   public $timestamps = false;
}
