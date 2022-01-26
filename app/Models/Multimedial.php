<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Multimedial extends Model
{
    protected $fillable = ['diseño_mult_p1'];

    use HasFactory;
    public $timestamps = false;

     public function diseño(){
       return $this->belongsTo(Diseño::class);
    }
    public function mapeos()
    {
        return $this->hasMany(Mapeo::class);
    }
}
