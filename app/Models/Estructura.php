<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estructura extends Model
{
    use HasFactory;

     protected $fillable = ['diseño_id','estructura_p1','estructura_p2'];
    
    public $timestamps = false;

     public function diseño(){
       return $this->belongsTo(Diseño::class);
    }
}
