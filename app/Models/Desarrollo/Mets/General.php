<?php

namespace App\Models\Desarrollo\Mets;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    protected $fillable = ['proyecto_id','general_p1','general_p2','general_p3','general_p4','general_p5','general_p7','general_p8','general_p9'];
   
    public $timestamps = false;
    
    public function metadatos(){
       return $this->belongsTo(Metadatos::class);
    }
    public function palabrasclave()
    {
        return $this->hasMany(PalabrasClave::class);
    }
    use HasFactory;
}
