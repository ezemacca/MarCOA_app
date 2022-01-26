<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Analisis extends Model
{
    protected $fillable = ['proyecto_id','user_id','analisis_p1','analisis_p2','analisis_p3','analisis_p4','analisis_p5','analisis_p6'];
    use HasFactory;
    public $timestamps = false;

    public function proyecto(){
       return $this->belongsTo(Proyecto::class);
    }
}
