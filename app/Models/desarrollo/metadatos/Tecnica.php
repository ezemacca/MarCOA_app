<?php

namespace App\Models\Desarrollo\Metadatos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tecnica extends Model
{
   protected $fillable = ['metadatos_id','tecnica_p1','tecnica_p2','tecnica_p3','tecnica_p4_1','tecnica_p4_2','tecnica_p4_3','tecnica_p4_4','tecnica_p4_5','tecnica_p4_5','tecnica_p4_6'];
   
    public function metadatos(){
       return $this->belongsTo(Metadatos::class);
    }
    public $timestamps = false;
    use HasFactory;
}
