<?php

namespace App\Models\Desarrollo\Mets;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metametadatos extends Model
{
    public function metadatos(){
       return $this->belongsTo(Metadatos::class);
    }
   protected $fillable = ['metadatos_id', 'metametadatos_p1','metametadatos_p2','metametadatos_p3','metametadatos_p4'];
   
    public $timestamps = false;
    use HasFactory;
}
