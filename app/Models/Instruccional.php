<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instruccional extends Model
{
    protected $fillable = ['diseño_id','instruccional_p1','instruccional_p2','instruccional_p3','instruccional_p4','instruccional_p5','instruccional_p6'];
    use HasFactory;
    public $timestamps = false;

    public function diseño(){
       return $this->belongsTo(Diseño::class);
    }
}
