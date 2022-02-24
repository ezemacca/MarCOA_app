<?php

namespace App\Models\Desarrollo\Metadatos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PalabrasClave extends Model
{
    protected $fillable = ['proyecto_id','general_p6'];
   
    public $timestamps = false;

    public function general(){
       return $this->belongsTo(General::class);
    }
    use HasFactory;
}
